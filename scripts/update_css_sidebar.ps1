$ErrorActionPreference = 'Stop'
$dir = "C:\xampp\htdocs\fsmaster\tutorials\web-basics\css"
$nl = [Environment]::NewLine
Get-ChildItem -Path $dir -Filter *.php -File |
  Where-Object { $_.Name -notin @('index.php','sidebar.php','home.php') } |
  ForEach-Object {
    $p = $_.FullName
    $content = Get-Content -LiteralPath $p -Raw -Encoding UTF8
    $updated = $content

    # Insert sidebar include after header include if missing
    if ($updated -notmatch "include 'sidebar\.php';") {
      $updated = [regex]::Replace(
        $updated,
        "include\s+'\.\.\/\.\.\/\.\.\/includes\/header\.php';\s*\?>",
        "include '../../../includes/header.php';" + $nl + "include 'sidebar.php';" + $nl + "?>",
        [System.Text.RegularExpressions.RegexOptions]::IgnoreCase
      )
      # Fallback exact replace if regex didn't match
      if ($updated -notmatch "include 'sidebar\.php';") {
        $updated = $updated.Replace(
          "include '../../../includes/header.php';",
          "include '../../../includes/header.php';" + $nl + "include 'sidebar.php';"
        )
      }
    }

    # Normalize main wrapper: remove local container/row and use shared layout
    $search = '<div class="container-fluid">' + $nl + '<div class="row">' + $nl + '<main class="col-12 px-md-4 py-4 tutorial-content">'
    $replace = '<main class="col-12 col-lg-9 pt-3 px-lg-4 tutorial-content">'
    $updated = $updated.Replace($search, $replace)

    if ($updated -ne $content) {
      Set-Content -LiteralPath $p -Value $updated -Encoding UTF8
      Write-Host "Updated: $($p)"
    }
  }
