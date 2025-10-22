<?php
// Tutorial: Online HTML, CSS, Javascript Editor (Compiler) - Tpoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Online HTML, CSS, Javascript Editor (Compiler) - Tpoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>Online HTML, CSS, Javascript Editor (Compiler) - Tpoint Tech</h1>
        <body>
<div class="top-bar">
<div class="logo-container">
<a href="https://www.tpointtech.com"><img src="https://tpointtech-images.s3.amazonaws.com/static/images/dark-logo.png"/>
</a>
<div class="tagline">
<h1>Online HTML, CSS, JavaScript Editor (Compiler) </h1>
</div>
</div>
</div>
<div class="container">
<div class="language-switcher">
<a class="lang-option" href="/compiler/python" title="Online Python Compiler">
<img alt="Python" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg"/>
</a>
<a class="lang-option" href="/compiler/java" style="text-decoration: none;" title="Online Java Compiler">
<!-- <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java"> -->
<img alt="Java" src="/static/img/letter-j.png"/>
</a>
<a class="lang-option" href="/compiler/c" title="Online C Compiler">
<img alt="C" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg"/>
</a>
<a class="lang-option" href="/compiler/cpp" title="Online C++ Compiler">
<img alt="C++" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg"/>
</a>
<a class="lang-option" href="/compiler/html" title="Online html Editor">
<img alt="Online Html Editor" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"/>
</a>
<a class="lang-option" href="/compiler/html-css-javascript" title="Online HTML, CSS, and JavaScript Editor">
<img alt="HTML-CSS-JAVASCRIPT" src="/static/img/htcsjs-2.svg"/>
</a>
<a class="lang-option" href="/compiler/javascript" title="Online JavaScript Compiler">
<img alt="JavaScript" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"/>
</a>
<a class="lang-option" href="/compiler/php" title="Online PHP Compiler">
<img alt="PHP" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"/>
</a>
<a class="lang-option" href="/compiler/swift" title="Online Swift Compiler">
<img alt="Swift" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/swift/swift-original.svg"/>
</a>
<a class="lang-option" href="/compiler/kotlin" title="Online Kotlin Compiler">
<img alt="Kotlin" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original.svg"/>
</a>
<a class="lang-option" href="/compiler/go" title="Online Go Compiler">
<img alt="Go" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/go/go-original.svg"/>
</a>
<a class="lang-option" href="/compiler/csharp" title="Online C# Compiler">
<img alt="C#" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg"/>
</a>
<a class="lang-option" href="/compiler/typescript" title="Online TypeScript Compiler">
<img alt="TypeScript" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg"/>
</a>
<a class="lang-option" href="/compiler/perl" title="Online Perl Compiler">
<img alt="Perl" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/perl/perl-original.svg"/>
</a>
<a class="lang-option" href="/compiler/r" title="Online R Compiler">
<img alt="R" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/r/r-original.svg"/>
</a>
<a class="lang-option" href="/compiler/groovy" title="Online Groovy Compiler">
<img alt="Groovy" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/groovy/groovy-original.svg"/>
</a>
<!--<a href="/compiler/mysql" class="lang-option" title="Online MySQL Compiler">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL">
            </a>
             <a href="/compiler/prolog" class="lang-option" title="Online Prolog Compiler">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Prolog-logo.png" alt="Prolog">
            </a>
            <a href="/compiler/groovy" class="lang-option" title="Online Groovy Compiler">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/groovy/groovy-original.svg" alt="Groovy">
            </a>
          
            <a href="/compiler/tcl" class="lang-option" title="Online TCL Compiler">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Tcl-logo.svg" alt="TCL">
            </a>
            <a href="/compiler/vbnet" class="lang-option" title="Online VB.Net Compiler">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/40/VB.NET_Logo.svg" alt="VB.Net">
            </a> -->
</div>
<div class="editor-container">
<div class="run-container">
<div class="tab active" onclick="switchEditor('html')">index.html</div>
<div class="tab" onclick="switchEditor('css')">style.css</div>
<div class="tab" onclick="switchEditor('js')">script.js</div>
<button class="btn btn-run" onclick="runCode()">Run</button>
</div>
<div class="editor active" id="html-editor"></div>
<div class="editor" id="css-editor"></div>
<div class="editor" id="js-editor"></div>
</div>
<div class="output-container">
<div class="output-header">
<span>Output</span>
</div>
<iframe class="output-box" id="output"></iframe>
</div>
<div class="language-switcher-ads">
<script async="" crossorigin="anonymous" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4699858549023382"></script>
<!-- tt_right160by600 -->
<ins class="adsbygoogle" data-ad-client="ca-pub-4699858549023382" data-ad-slot="3745739085" style="display:inline-block;width:160px;height:600px"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<script>
        let htmlEditor, cssEditor, jsEditor;

        function isMobileDevice() {
        return window.innerWidth <= 768; // Adjust breakpoint if needed
    }

        require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.38.0/min/vs' } });
        require(["vs/editor/editor.main"], function () {
    htmlEditor = monaco.editor.create(document.getElementById("html-editor"), {
        value: "<!DOCTYPE html>\n<html>\n<head>\n<title>My Page</title>\n</head>\n<body>\n<h1>Hello, World!</h1>\n</body>\n</html>",
        language: "html",
        theme: "vs-light",
        fontSize: 16,
        scrollBeyondLastLine: false,
        scrollbar: {
            vertical: 'hidden',
            horizontal: 'hidden'
        },
        overviewRulerLanes: 0,
        wordWrap: 'on',
        automaticLayout: true,
        lineNumbers: isMobileDevice() ? "off" : "on",
        minimap: { enabled: false } 
    });

   

    cssEditor = monaco.editor.create(document.getElementById("css-editor"), {
        value: "body { font-family: Arial, sans-serif; }",
        language: "css",
        theme: "vs-light",
        fontSize: 16,
        scrollBeyondLastLine: false,
        scrollbar: {
            vertical: 'hidden',
            horizontal: 'hidden'
        },
        overviewRulerLanes: 0,
        wordWrap: 'on',
        automaticLayout: true,
        lineNumbers: isMobileDevice() ? "off" : "on",
        minimap: { enabled: false } 
    });

    jsEditor = monaco.editor.create(document.getElementById("js-editor"), {
        value: "console.log('Hello, World!');",
        language: "javascript",
        theme: "vs-light",
        fontSize: 16,
        scrollBeyondLastLine: false,
        scrollbar: {
            vertical: 'hidden',
            horizontal: 'hidden'
        },
        overviewRulerLanes: 0,
        wordWrap: 'on',
        automaticLayout: true,
        lineNumbers: isMobileDevice() ? "off" : "on",
        minimap: { enabled: false } 
    });
});

if (isMobileDevice()) {
        document.getElementById("editor").style.height = `${window.innerHeight}px`;
    }

        function switchEditor(type) {
            document.querySelectorAll('.editor').forEach(editor => editor.classList.remove('active'));
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
            document.getElementById(`${type}-editor`).classList.add('active');
            document.querySelector(`.tab[onclick="switchEditor('${type}')"]`).classList.add('active');
        }

        function runCode() {
            const html = htmlEditor.getValue();
            const css = `<style>${cssEditor.getValue()}</style>`;
            const js = `<script>${jsEditor.getValue()}<\/script>`;
            const outputFrame = document.getElementById("output").contentWindow.document;
            outputFrame.open();
            outputFrame.write(html + css + js);
            outputFrame.close();
        }


        document.addEventListener("DOMContentLoaded", function () {
    const switcher = document.querySelector(".language-switcher");
    const links = switcher.querySelectorAll(".lang-option");
    
    // Get current language from the URL
    const currentPath = window.location.pathname; 

    links.forEach((link) => {
        if (link.getAttribute("href") === currentPath) {
            // Move selected language to first position
            switcher.prepend(link);
        }
    });
});

    </script>
</body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>