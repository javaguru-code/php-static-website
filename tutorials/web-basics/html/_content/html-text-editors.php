<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - What Is Html';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<div class="tutorial-content">
    <section class="mb-5">
        <h1>HTML Text Editors</h1>
        <p class="lead">A good text editor is essential for writing HTML code efficiently. While you can use any plain text editor, specialized code editors provide features like syntax highlighting, auto-completion, and extensions that make web development much easier.</p>
    </section>

    <section class="mb-5">
        <h2>1. Using Notepad (Windows Built-in)</h2>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Installation</h5>
                <p>Notepad comes pre-installed on all Windows computers. To open it:</p>
                <ol>
                    <li>Press <kbd>Windows + R</kbd> to open the Run dialog</li>
                    <li>Type <code>notepad</code> and press <kbd>Enter</kbd></li>
                    <li>Or search for "Notepad" in the Start menu</li>
                </ol>
                
                <h5 class="mt-4">Creating Your First HTML File</h5>
                <ol>
                    <li>Open Notepad</li>
                    <li>Type your HTML code, for example:
                        <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;My First Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello, World!&lt;/h1&gt;
    &lt;p&gt;This is my first HTML page.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </li>
                    <li>Go to <strong>File > Save As</strong></li>
                    <li>In the "Save as type" dropdown, select "All Files (*.*)"</li>
                    <li>Name your file with <code>.html</code> extension (e.g., <code>index.html</code>)</li>
                    <li>Click <strong>Save</strong></li>
                </ol>
                
                <div class="alert alert-info mt-4">
                    <strong>Tip:</strong> While Notepad works, it lacks many features that make coding easier. Consider using a more advanced editor for serious development.
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h2>2. Notepad++ (Recommended for Beginners)</h2>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Installation</h5>
                <ol>
                    <li>Download Notepad++ from the <a href="https://notepad-plus-plus.org/downloads/" target="_blank" rel="noopener">official website</a></li>
                    <li>Run the installer and follow the on-screen instructions</li>
                    <li>Once installed, launch Notepad++</li>
                </ol>
                
                <h5 class="mt-4">Key Features</h5>
                <ul>
                    <li><strong>Syntax Highlighting</strong>: HTML code is color-coded for better readability</li>
                    <li><strong>Line Numbers</strong>: Helps with debugging and referencing code</li>
                    <li><strong>Multiple Tabs</strong>: Work with multiple files simultaneously</li>
                    <li><strong>Search & Replace</strong>: Powerful search functionality with regular expressions</li>
                    <li><strong>Plugins</strong>: Extend functionality with various plugins</li>
                </ul>
                
                <h5 class="mt-4">Recommended Plugins</h5>
                <ul>
                    <li><strong>NPPExport</strong>: For exporting code to different formats</li>
                    <li><strong>Compare</strong>: Compare two files side by side</li>
                    <li><strong>XML Tools</strong>: For working with XML/HTML</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h2>3. Sublime Text</h2>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Installation</h5>
                <ol>
                    <li>Download Sublime Text from <a href="https://www.sublimetext.com/" target="_blank" rel="noopener">sublimetext.com</a></li>
                    <li>Run the installer and follow the instructions</li>
                    <li>After installation, launch Sublime Text</li>
                </ol>
                
                <h5 class="mt-4">Essential Features</h5>
                <ul>
                    <li><strong>Goto Anything</strong>: Press <kbd>Ctrl+P</kbd> to quickly open files</li>
                    <li><strong>Multiple Selections</strong>: Make multiple changes at once</li>
                    <li><strong>Command Palette</strong>: Access all functions quickly</li>
                    <li><strong>Split Editing</strong>: Edit files side by side</li>
                </ul>
                
                <h5 class="mt-4">Recommended Extensions (Install via Package Control)</h5>
                <ul>
                    <li><strong>Emmet</strong>: For faster HTML & CSS workflow</li>
                    <li><strong>HTML-CSS-JS Prettify</strong>: Code formatter</li>
                    <li><strong>AutoFileName</strong>: Autocompletes filenames</li>
                    <li><strong>BracketHighlighter</strong>: Highlights matching brackets</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h2>4. Visual Studio Code (VS Code)</h2>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Installation</h5>
                <ol>
                    <li>Download VS Code from <a href="https://code.visualstudio.com/" target="_blank" rel="noopener">code.visualstudio.com</a></li>
                    <li>Run the installer and follow the on-screen instructions</li>
                    <li>Launch VS Code after installation</li>
                </ol>
                
                <h5 class="mt-4">Essential Extensions</h5>
                <p>Install these by clicking the Extensions icon in the Activity Bar (or press <kbd>Ctrl+Shift+X</kbd>) and search for:</p>
                <ul>
                    <li><strong>Live Server</strong>: Launch a local development server with live reload</li>
                    <li><strong>Prettier</strong>: Code formatter</li>
                    <li><strong>ESLint</strong>: JavaScript linter</li>
                    <li><strong>HTML CSS Support</strong>: CSS class name completion</li>
                    <li><strong>IntelliSense for CSS class names</strong></li>
                    <li><strong>Auto Rename Tag</strong>: Automatically rename paired HTML/XML tags</li>
                </ul>
                
                <h5 class="mt-4">Recommended Settings</h5>
                <p>Open Settings (<kbd>Ctrl+,</kbd>) and add these to your <code>settings.json</code>:</p>
                <pre><code class="language-json">{
    "editor.tabSize": 2,
    "editor.formatOnSave": true,
    "editor.defaultFormatter": "esbenp.prettier-vscode",
    "files.autoSave": "afterDelay",
    "emmet.includeLanguages": {
        "javascript": "javascriptreact",
        "vue-html": "html"
    },
    "workbench.colorTheme": "Default Dark+"
}</code></pre>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h2>Working Efficiently with HTML</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Emmet Abbreviations</h5>
                <p>Most modern editors support Emmet, which allows you to write HTML faster using abbreviations:</p>
                <ul>
                    <li><code>!</code> + <kbd>Tab</kbd> = Basic HTML5 template</li>
                    <li><code>div>p*3</code> + <kbd>Tab</kbd> = Nested elements</li>
                    <li><code>ul>li*5>a{Item $}</code> + <kbd>Tab</kbd> = List with items</li>
                    <li><code>.container>#header+#main+.footer</code> + <kbd>Tab</kbd> = Complex layouts</li>
                </ul>
                
                <h5 class="mt-4">Keyboard Shortcuts</h5>
                <div class="row">
                    <div class="col-md-6">
                        <h6>General</h6>
                        <ul>
                            <li><kbd>Ctrl+S</kbd>: Save file</li>
                            <li><kbd>Ctrl+Z</kbd>: Undo</li>
                            <li><kbd>Ctrl+Shift+Z</kbd>: Redo</li>
                            <li><kbd>Ctrl+F</kbd>: Find</li>
                            <li><kbd>Ctrl+H</kbd>: Replace</li>
                            <li><kbd>Ctrl+/</kbd>: Toggle comment</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6>Navigation</h6>
                        <ul>
                            <li><kbd>Ctrl+G</kbd>: Go to line</li>
                            <li><kbd>Ctrl+P</kbd>: Quick open file</li>
                            <li><kbd>Ctrl+Shift+O</kbd>: Go to symbol</li>
                            <li><kbd>Alt+↑/↓</kbd>: Move line up/down</li>
                            <li><kbd>Shift+Alt+↑/↓</kbd>: Copy line up/down</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include_file('includes/footer.php'); ?>