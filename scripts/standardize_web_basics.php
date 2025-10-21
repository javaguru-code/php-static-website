<?php
/**
 * Standardize Web Basics tutorials (HTML/CSS) to shared layout and sidebar
 *
 * Usage (from project root):
 *   php scripts/standardize_web_basics.php [--dry-run]
 */

$dryRun = in_array('--dry-run', $argv, true);

$root = __DIR__ . '/../';
$targets = [
    'tutorials/web-basics/html',
    'tutorials/web-basics/css',
];

function readFileSafe($path) {
    return file_exists($path) ? file_get_contents($path) : null;
}

function writeFileSafe($path, $content, $dryRun) {
    if ($dryRun) {
        echo "[DRY-RUN] Would write: $path\n";
        return true;
    }
    return (bool)file_put_contents($path, $content);
}

function standardizeFile($file, $type) {
    $original = readFileSafe($file);
    if ($original === null) return null;

    $content = $original;

    // Skip sidebars, includes, assets, index in this pass
    $base = basename($file);
    if ($base === 'sidebar.php' || $base === 'index.php') return null;
    if (strpos($file, '/includes/') !== false) return null;
    if (preg_match('~/(css|js)/~', $file)) return null;

    $sidebarInclude = $type === 'html'
        ? "tutorials/web-basics/html/sidebar.php"
        : "tutorials/web-basics/css/sidebar.php";

    // Normalize header: remove direct header include and static paths
    $content = preg_replace(
        '/<\?php[^\v]*include\s+[\"\']{1,2}\.{2}\/\.\.\/\.\.\/includes\/header\.php[\"\']{1,2};?\s*\?>/i',
        '',
        $content
    );

    // Remove old path vars
    $content = preg_replace('/\$base_url\s*=\s*[\'\"]{0,1}\.\.\/\.\.\/\.\.\/[\'\"]{0,1};?/i', '', $content);
    $content = preg_replace('/\$css_path\s*=\s*[\'\"]{0,1}\.\.\/\.\.\/\.\.\/[\'\"]{0,1};?/i', '', $content);
    $content = preg_replace('/\$js_path\s*=\s*[\'\"]{0,1}\.\.\/\.\.\/\.\.\/[\'\"]{0,1};?/i', '', $content);

    // Strip BOM
    $content = preg_replace('/^\xEF\xBB\xBF/', '', $content);

    // Ensure config + header + sidebar block at top
    $standardHeader = <<<PHP
<?php
require_once __DIR__ . '/../../../includes/config.php';
if (!isset(\$page_description)) { \$page_description = 'Full Stack Master - Programming Tutorials'; }
\$base_url = get_base_url();
\$css_path = \$base_url;
\$js_path = \$base_url;
include_file('includes/header.php');
include_file('$sidebarInclude');
?>
PHP;

    // Replace first PHP block opening header include or insert standard header at start
    if (preg_match('/<\?php[\s\S]*?\?>/m', $content, $m, PREG_OFFSET_CAPTURE)) {
        // Insert header after first PHP block if it defines title/description
        $firstPhp = $m[0][0];
        if (strpos($firstPhp, '$page_title') !== false) {
            $pos = $m[0][1] + strlen($m[0][0]);
            $content = substr($content, 0, $pos) . "\n\n" . $standardHeader . "\n" . substr($content, $pos);
        } else {
            $content = $standardHeader . "\n" . $content;
        }
    } else {
        $content = $standardHeader . "\n" . $content;
    }

    // Remove existing outer container+aside markup (keep everything until </aside>)
    $content = preg_replace(
        '/<div\s+class=\"container-fluid\">[\s\S]*?<aside[\s\S]*?<\/aside>/i',
        '',
        $content,
        1
    );

    // Ensure <main> has the standardized class
    $content = preg_replace(
        '/<main\s+class=\"[^\"]*\"\s*>/i',
        '<main class="col-12 col-lg-9 pt-3 px-lg-4">',
        $content,
        1
    );

    // Footer: remove any old footer include
    $content = preg_replace('/include\s*[\( ]*[\'\"][\.\.\/]+includes\/footer\.php[\'\"][\) ]*;?\s*\?>?/i', '', $content);

    // Ensure closing wrappers and footer at end
    if (!preg_match('/<\/main>\s*<\/div>\s*<\/div>\s*<\?php\s+include_file\(\'includes\/footer.php\'\)/', $content)) {
        $content = rtrim($content) . "\n\n</main>\n</div>\n</div>\n\n<?php include_file('includes/footer.php'); ?>\n";
    }

    // Remove duplicate header+sidebar if accidentally inserted twice
    $content = preg_replace('/(include_file\(\' . str_replace('/', '\\/', $sidebarInclude) . '\'\)\s*;\s*){2,}/', 'include_file(\'' . $sidebarInclude . '\');', $content);

    return [$original, $content];
}

$changed = 0; $skipped = 0; $errors = 0;

foreach ($targets as $rel) {
    $dir = $root . $rel;
    $type = basename($rel); // 'html' or 'css'
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($rii as $file) {
        if ($file->isDir()) continue;
        if (substr($file->getFilename(), -4) !== '.php') continue;
        $path = str_replace('\\', '/', $file->getPathname());
        // Skip includes, assets dirs
        if (strpos($path, '/includes/') !== false) continue;
        if (preg_match('~/(css|js)/~', $path)) continue;

        $result = standardizeFile($path, $type);
        if ($result === null) { $skipped++; continue; }
        list($orig, $updated) = $result;
        if ($orig !== $updated) {
            if (!writeFileSafe($path, $updated, $dryRun)) {
                echo "Failed to write: $path\n"; $errors++;
            } else {
                echo "Updated: $path\n"; $changed++;
            }
        } else {
            $skipped++;
        }
    }
}

echo "\nDone. Changed: $changed, Skipped: $skipped, Errors: $errors\n";
