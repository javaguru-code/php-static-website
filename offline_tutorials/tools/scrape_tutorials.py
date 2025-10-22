#!/usr/bin/env python3
"""
Scrape tutorials from the web, clean them for offline use, and write HTML files
under assets/tutorials/<category>/ along with an updated assets/index.json.

Usage:
  python tools/scrape_tutorials.py --config tools/tutorial_sources.json \
    --out assets --download-assets

The config file defines categories and sources to scrape.
"""
from __future__ import annotations
import argparse
import hashlib
import json
import os
import warnings
from pathlib import Path
from urllib.parse import urljoin, urlparse

import requests
from bs4 import BeautifulSoup, XMLParsedAsHTMLWarning

# Silence BeautifulSoup XML-as-HTML warning as suggested
warnings.filterwarnings("ignore", category=XMLParsedAsHTMLWarning)

DEFAULT_INDEX = {
    "categories": [
        {"id": "html", "name": "HTML"},
        {"id": "css", "name": "CSS"},
        {"id": "js", "name": "JS"},
        {"id": "python", "name": "Python"},
        {"id": "java", "name": "Java"},
        {"id": "php", "name": "PHP"},
        {"id": "sql", "name": "SQL"},
    ],
    "tutorials": [],
}


def slugify(text: str) -> str:
    out = []
    for ch in text.lower():
        if ch.isalnum():
            out.append(ch)
        elif ch in "-_ ":
            out.append("-")
    slug = "".join(out).strip("-")
    return slug or hashlib.md5(text.encode()).hexdigest()[:8]


def clean_html(html: str, base_url: str, download_assets: bool, media_dir: Path) -> tuple[str, list[str]]:
    soup = BeautifulSoup(html, "lxml")

    # Prefer <main> or article, else body
    content = soup.select_one("main") or soup.select_one("article") or soup.body or soup

    # Remove scripts, styles, noscript, iframes
    for tag in content.select("script, style, noscript, iframe, link[rel='preconnect'], link[rel='dns-prefetch']"):
        tag.decompose()

    downloaded = []

    # Handle images
    for img in content.find_all("img"):
        src = img.get("src")
        if not src:
            img.decompose()
            continue
        abs_url = urljoin(base_url, src)
        # Decide filename
        parsed = urlparse(abs_url)
        ext = os.path.splitext(parsed.path)[1] or ".bin"
        h = hashlib.sha1(abs_url.encode()).hexdigest()[:12]
        fname = f"{h}{ext}"
        if download_assets:
            media_dir.mkdir(parents=True, exist_ok=True)
            try:
                r = requests.get(abs_url, timeout=20)
                r.raise_for_status()
                (media_dir / fname).write_bytes(r.content)
                img["src"] = f"media/{fname}"
                downloaded.append(abs_url)
            except Exception:
                # If failed, drop the image
                img.decompose()
        else:
            # Keep original URL but mark as external
            img["data-origin-src"] = abs_url
            img["src"] = abs_url

    # Neutralize external links
    for a in content.find_all("a"):
        href = a.get("href")
        if not href:
            continue
        abs_url = urljoin(base_url, href)
        if abs_url.startswith("http"):
            a["data-origin-href"] = abs_url
            a["href"] = "#"

    cleaned = f"""<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title></title>
  <style>
    body {{ font-family: Poppins, Arial, sans-serif; line-height: 1.65; padding: 1rem; }}
    pre {{ background:#f6f8fa; padding:.75rem; overflow:auto; }}
    code {{ font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace; }}
    img {{ max-width: 100%; height: auto; }}
  </style>
</head>
<body>
{str(content)}
</body>
</html>"""
    return cleaned, downloaded


def load_config(path: Path) -> dict:
    data = json.loads(path.read_text(encoding="utf-8"))
    return data


def upsert_category(index: dict, cat_id: str, cat_name: str):
    if not any(c.get("id") == cat_id for c in index["categories"]):
        index["categories"].append({"id": cat_id, "name": cat_name})


def main():
    p = argparse.ArgumentParser()
    p.add_argument("--config", default="tools/tutorial_sources.json", help="Path to sources JSON")
    p.add_argument("--out", default="assets", help="Base output directory (contains index.json and tutorials/)")
    p.add_argument("--download-assets", action="store_true", help="Download and rewrite images for offline use")
    p.add_argument("--category", help="Limit to a single category id", default=None)
    # Crawler options for Java-related technologies
    p.add_argument("--crawl-base", dest="crawl_base", help="Base URL to crawl for Java-related content")
    p.add_argument("--crawl-include", dest="crawl_include", default="java,spring,hibernate,maven,gradle,junit,servlet,jsp,jakarta,javafx",
                   help="Comma-separated keywords to include")
    p.add_argument("--crawl-max-pages", dest="crawl_max_pages", type=int, default=50)
    p.add_argument("--crawl-depth", dest="crawl_depth", type=int, default=2)
    p.add_argument("--crawl-any-domain", dest="crawl_any_domain", action="store_true", help="Allow links to other domains")
    p.add_argument("--crawl-subcategories", dest="crawl_subcats", action="store_true", help="Create subcategories per keyword")

    args = p.parse_args()

    root = Path(__file__).resolve().parents[1]
    cfg_path = (root / args.config).resolve()
    out_base = (root / args.out).resolve()
    tutorials_root = out_base / "tutorials"

    # Load config if present
    index = DEFAULT_INDEX.copy()
    index["tutorials"] = []

    # Session with browser-like headers to avoid 403/404/406 from some sites
    session = requests.Session()
    DEFAULT_HEADERS = {
        "User-Agent": (
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) "
            "AppleWebKit/537.36 (KHTML, like Gecko) "
            "Chrome/124.0 Safari/537.36"
        ),
        "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
        "Accept-Language": "en-US,en;q=0.9",
        "Cache-Control": "no-cache",
        "Pragma": "no-cache",
    }
    session.headers.update(DEFAULT_HEADERS)

    def fetch(url: str) -> requests.Response:
        r = session.get(url, timeout=30, allow_redirects=True, headers={"Referer": url})
        try:
            r.raise_for_status()
            return r
        except requests.HTTPError as e:
            status = r.status_code
            if status in (403, 404, 406):
                alt_headers = DEFAULT_HEADERS.copy()
                alt_headers.update({"Referer": url, "Accept": "text/html"})
                r2 = session.get(url, timeout=30, allow_redirects=True, headers=alt_headers)
                r2.raise_for_status()
                return r2
            raise e

    # 1) Config-driven scraping
    if cfg_path.exists():
        cfg = load_config(cfg_path)
        categories = cfg.get("categories", {})
        for cat_id, cat in categories.items():
            if args.category and args.category != cat_id:
                continue
            cat_name = cat.get("name", cat_id.capitalize())
            upsert_category(index, cat_id, cat_name)
            sources = cat.get("sources", [])
            for src in sources:
                url = src["url"]
                selector = src.get("selector")
                print(f"Scraping [{cat_id}] {url}")
                try:
                    r = fetch(url)
                except Exception as e:
                    print(f"  ! failed: {e}")
                    continue

                soup = BeautifulSoup(r.text, "lxml")
                title_tag = soup.find("title") or soup.find(["h1", "h2"]) or None
                title = (title_tag.get_text(strip=True) if title_tag else url)
                if selector:
                    chosen = soup.select_one(selector)
                    html_fragment = str(chosen) if chosen else r.text
                else:
                    html_fragment = r.text

                media_dir = tutorials_root / cat_id / "media"
                cleaned_html, _ = clean_html(html_fragment, url, args.download_assets, media_dir)

                slug = slugify(title)
                out_dir = tutorials_root / cat_id
                out_dir.mkdir(parents=True, exist_ok=True)
                out_file = out_dir / f"{slug}.html"
                out_file.write_text(cleaned_html, encoding="utf-8")

                index["tutorials"].append({
                    "id": f"{cat_id}_{slug}",
                    "title": title,
                    "category": cat_id,
                    "path": f"assets/tutorials/{cat_id}/{slug}.html",
                    "description": src.get("description") or ""
                })

    # 2) Crawler mode for Java-related content
    if args.crawl_base:
        base = args.crawl_base
        include = [k.strip().lower() for k in args.crawl_include.split(',') if k.strip()]
        base_netloc = urlparse(base).netloc

        # Prepare categories
        upsert_category(index, "java", "Java")
        if args.crawl_subcats:
            pretty = {
                "spring": "Spring",
                "hibernate": "Hibernate",
                "maven": "Maven",
                "gradle": "Gradle",
                "junit": "JUnit",
                "servlet": "Servlets/JSP",
                "jsp": "Servlets/JSP",
                "jakarta": "Jakarta EE",
                "javafx": "JavaFX",
            }
            for k in include:
                if k == "java":
                    continue
                upsert_category(index, k, pretty.get(k, k.capitalize()))

        from collections import deque
        q = deque([(base, 0)])
        seen: set[str] = set()
        saved_slugs: set[str] = set()

        def normalize(u: str) -> str:
            pu = urlparse(u)
            return pu._replace(fragment='',).geturl()

        def choose_category(title: str, text: str) -> str:
            corpus = f"{title}\n{text}".lower()
            for k in include:
                if k in corpus and k != "java":
                    return k if args.crawl_subcats else "java"
            return "java"

        pages = 0
        while q and pages < args.crawl_max_pages:
            url, d = q.popleft()
            nu = normalize(url)
            if nu in seen or d > args.crawl_depth:
                continue
            seen.add(nu)
            try:
                r = fetch(url)
            except Exception as e:
                print(f"  ! failed: {e}")
                continue

            ctype = r.headers.get('Content-Type', '')
            if 'text/html' not in ctype:
                continue

            soup = BeautifulSoup(r.text, 'lxml')
            title_tag = soup.find('title') or soup.find(['h1','h2'])
            title = title_tag.get_text(strip=True) if title_tag else url
            text = soup.get_text(separator=' ', strip=True)[:10000]

            # Save page only if includes any keyword
            if any(k in (title + "\n" + text).lower() for k in include):
                cat_id = choose_category(title, text)
                media_dir = tutorials_root / cat_id / 'media'
                cleaned_html, _ = clean_html(r.text, url, args.download_assets, media_dir)
                slug_base = slugify(title)
                slug = slug_base
                i = 2
                while slug in saved_slugs:
                    slug = f"{slug_base}-{i}"
                    i += 1
                saved_slugs.add(slug)
                out_dir = tutorials_root / cat_id
                out_dir.mkdir(parents=True, exist_ok=True)
                (out_dir / f"{slug}.html").write_text(cleaned_html, encoding='utf-8')

                index["tutorials"].append({
                    "id": f"{cat_id}_{slug}",
                    "title": title,
                    "category": cat_id,
                    "path": f"assets/tutorials/{cat_id}/{slug}.html",
                    "description": ""
                })
                pages += 1
                print(f"  + saved [{cat_id}] {title}")

            # Enqueue more links
            for a in soup.select('a[href]'):
                href = a.get('href')
                if not href:
                    continue
                absu = urljoin(url, href)
                p = urlparse(absu)
                if p.scheme not in ('http', 'https'):
                    continue
                if not args.crawl_any_domain and p.netloc != base_netloc:
                    continue
                if normalize(absu) not in seen:
                    q.append((absu, d + 1))

    # Write index.json
    out_base.mkdir(parents=True, exist_ok=True)
    (out_base / "index.json").write_text(json.dumps(index, ensure_ascii=False, indent=2), encoding="utf-8")
    print(f"Wrote index to {(out_base / 'index.json').as_posix()}")


if __name__ == "__main__":
    main()
