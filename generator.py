import requests
from bs4 import BeautifulSoup
import os
import re
import time
from urllib.parse import urljoin, urlparse

# ------------------------------
# CONFIG
# ------------------------------
BASE_URL = "https://www.tpointtech.com/java-tutorial"
OUTPUT_DIR = "tutorials/java"
SLEEP_TIME = 1
MAX_DEPTH = 2  # Recursively follow links

# ------------------------------
# UTILS
# ------------------------------
def slugify(text):
    return re.sub(r'[^a-zA-Z0-9_-]', '_', text.strip())

def fetch_soup(url):
    try:
        response = requests.get(url, timeout=10)
        if response.status_code == 200:
            return BeautifulSoup(response.text, "html.parser")
    except Exception as e:
        print(f"Error fetching {url}: {e}")
    return None

def is_valid_link(base_url, link):
    if not link:
        return False
    parsed_base = urlparse(base_url)
    parsed_link = urlparse(urljoin(base_url, link))
    return parsed_base.netloc == parsed_link.netloc

def extract_content(soup):
    if not soup:
        return ""
    content_div = soup.find("div", class_="entry-content") or soup.find("div", class_="post-content")
    if content_div:
        return str(content_div)
    body = soup.find("body")
    return str(body) if body else ""

def save_php(category, title, content):
    folder = os.path.join(OUTPUT_DIR, slugify(category))
    os.makedirs(folder, exist_ok=True)
    file_path = os.path.join(folder, slugify(title) + ".php")
    php_content = f"""<?php
// Tutorial: {title}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{title}</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>{title}</h1>
        {content}
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>"""
    with open(file_path, "w", encoding="utf-8") as f:
        f.write(php_content)

# ------------------------------
# CRAWLER
# ------------------------------
def crawl_java_tutorials():
    visited = set()
    to_visit = [(BASE_URL, 0)]
    site_index = {}

    while to_visit:
        url, depth = to_visit.pop(0)
        if url in visited or depth > MAX_DEPTH:
            continue
        visited.add(url)

        soup = fetch_soup(url)
        if not soup:
            continue

        # Title and category
        title = soup.title.string.strip() if soup.title else "Untitled"
        path_parts = urlparse(url).path.strip("/").split("/")
        category = path_parts[1] if len(path_parts) > 1 else "General"

        # Extract content
        content = extract_content(soup)
        if content:
            save_php(category, title, content)
            if category not in site_index:
                site_index[category] = []
            site_index[category].append(slugify(title))
            print(f"Saved: {category}/{title}.php")

        # Extract internal links
        for a in soup.find_all("a", href=True):
            link = urljoin(BASE_URL, a['href'])
            if is_valid_link(BASE_URL, link) and link not in visited:
                to_visit.append((link, depth + 1))

        time.sleep(SLEEP_TIME)

    # Generate main index.php
    generate_index(site_index)

def generate_index(index):
    index_path = os.path.join(OUTPUT_DIR, "index.php")
    os.makedirs(OUTPUT_DIR, exist_ok=True)

    index_html = """<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Java Tutorials Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Java Tutorials</h1>
    <div class="tutorial-index">
"""

    for category, tutorials in index.items():
        index_html += f"<h2>{category}</h2>\n<ul>\n"
        for t in tutorials:
            index_html += f'  <li><a href="{slugify(category)}/{t}.php">{t.replace("_"," ")}</a></li>\n'
        index_html += "</ul>\n"

    index_html += """
    </div>
</body>
</html>
"""

    with open(index_path, "w", encoding="utf-8") as f:
        f.write(index_html)
    print(f"\nIndex generated at: {index_path}")

# ------------------------------
# MAIN
# ------------------------------
if __name__ == "__main__":
    crawl_java_tutorials()
