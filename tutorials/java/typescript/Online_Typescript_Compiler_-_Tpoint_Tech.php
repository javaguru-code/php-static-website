<?php
// Tutorial: Online Typescript Compiler - Tpoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Online Typescript Compiler - Tpoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>Online Typescript Compiler - Tpoint Tech</h1>
        <body>
<script>
        function toggleTheme() {
            const body = document.body;
            const themeIcon = document.getElementById("themeIcon");
            const logo = document.getElementById("logoImage");
    
            if (body.classList.contains("dark-mode")) {
    body.classList.replace("dark-mode", "light-mode");
    localStorage.setItem("theme", "light");
    themeIcon.classList.replace("fa-moon", "fa-moon"); // Make sure this is correct
    monaco.editor.setTheme("vs-light");
    logo.src = "https://tpointtech-images.s3.amazonaws.com/static/images/dark-logo.png";
} else {
    body.classList.replace("light-mode", "dark-mode");
    localStorage.setItem("theme", "dark");
    themeIcon.classList.replace("fa-moon", "fa-moon"); // Should be fa-sun?
    monaco.editor.setTheme("vs-dark");
    logo.src = "https://javatpoint-images.s3.amazonaws.com/static/images/logo-white.png";
}

// Reload the page to apply the changes
location.reload();
        }
    
        // Ensure theme is set correctly on page load
        window.onload = function () {
            const savedTheme = localStorage.getItem("theme") || "dark";
            const themeIcon = document.getElementById("themeIcon");
            const logo = document.getElementById("logoImage");
    
            if (savedTheme === "dark") {
                document.body.classList.add("dark-mode");
                monaco.editor.setTheme("vs-dark");
                themeIcon.classList.replace("fa-moon", "fa-moon"); //fa-sun 2nd
                logo.src = "https://javatpoint-images.s3.amazonaws.com/static/images/logo-white.png";
            } else {
                document.body.classList.add("light-mode");
                monaco.editor.setTheme("vs-light");
                logo.src = "https://tpointtech-images.s3.amazonaws.com/static/images/dark-logo.png";
            }
        };
    </script>
<div class="top-bar">
<div class="logo-container">
<a href="https://www.tpointtech.com">
<img alt="Tpoint Tech" class="logo" id="logoImage" src="https://javatpoint-images.s3.amazonaws.com/static/images/logo-white.png"/>
</a>
<div class="tagline">
<h1>Online Typescript Compiler</h1></div>
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
<!-- Editor Container -->
<div class="editor-container">
<!-- <div class="run-container">
                <button class="btn btn-run" onclick="runCode()">Run</button>
            </div> -->
<div class="run-container">
<!-- <button class="btn btn-share" onclick="shareCode()">Share</button> -->
<button class="btn btn-download" onclick="downloadCode()">Download</button>
<!-- <button class="btn btn-run" onclick="runCode()">Run</button> -->
<button class="btn btn-explain" onclick="explainCode()">Explain</button>
<button class="btn btn-optimize" onclick="optimizeCode()">Optimize</button>
<button class="btn btn-chat" onclick="askAI()">Ask AI</button>
<button class="theme-toggle" onclick="toggleTheme()">
<i class="fas fa-moon" id="themeIcon"></i> <!-- Default: Moon (Dark Mode) -->
</button>
<button class="btn btn-run" id="runButton" onclick="runCode()">
<span id="runText">Run</span>
<div class="loader" id="runLoader"></div>
</button>
</div>
<div id="editor"></div>
</div>
<!-- Output Container -->
<div class="output-container">
<div class="output-header">
<span><strong>Output</strong></span>
<button class="btn btn-clear" onclick="clearOutput()">Clear</button>
</div>
<div class="output-box" id="output"></div>
</div>
<div class="language-switcher-ads">
<script async="" crossorigin="anonymous" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4699858549023382"></script>
<!-- tt_right160by600 -->
<ins class="adsbygoogle" data-ad-client="ca-pub-4699858549023382" data-ad-slot="3745739085" style="display:inline-block;width:160px;height:600px"></ins>
<script>
            (adsbygoogle = window.adsbygoogle || []).push({});
       </script>
</div>
<div class="ai-popup" id="aiPopup">
<div class="ai-popup-content">
<h3>Ask AI Your Coding Question</h3>
<textarea id="aiQuestion" placeholder="Type your question here..."></textarea>
<div class="ai-popup-buttons">
<button class="btn-cancel" onclick="closePopup()">Cancel</button>
<button class="btn-send" onclick="sendQuestion()">Ask AI</button>
</div>
</div>
</div>
</div>
<script>
        let editor;
        let inputQueue = [];
        let currentInputIndex = 0;
        let userInputs = [];

        // let languageIdMap = {
        //     "c": 50, "cpp": 54, "java": 62, "python": 71, "javascript": 63,
        //     "php": 68, "ruby": 72, "swift": 83, "kotlin": 78, "rust": 73,
        //     "go": 60, "csharp": 51, "typescript": 74, "perl": 85, "r": 80,
        //     "dart": 90
        // };
        let languageIdMap = {
            "c": 50,
            "cpp": 54,
            "java": 62,
            "python": 71,
            "javascript": 63,
            "php": 68,
            "ruby": 72,
            "swift": 83,
            "kotlin": 78,
            "rust": 73,
            "go": 60,  // Corrected to match languageMapping
            "csharp": 51,
            "typescript": 74,
            "perl": 85,  // Corrected from 85 to 67 as per languageMapping
            "r": 80,
            "dart": 90,
            "mysql": 82,
            "prolog": 85,
            "groovy": 88,
            "qbasic": 78,
            "tcl": 70,
            "vbnet": 84,
            "html": -1
        };

        let selectedLanguage = window.location.pathname.split("/").pop() || "c";
        let languageId = languageIdMap[selectedLanguage] || 50;

        const defaultPrograms = {
    "c": `#include <stdio.h>\nint main() {\n    printf("Hello, World!\\n");\n    return 0;\n}`,
    "cpp": `#include <iostream>\nusing namespace std;\nint main() {\n    cout << "Hello, World!" << endl;\n    return 0;\n}`,
    "java": `public class Main {\n    public static void main(String[] args) {\n        System.out.println("Hello, World!");\n    }\n}`,
    "python": `print("Hello, World!")`,
    "javascript": `console.log("Hello, World!");`,
    "php": `<?php\n    echo "Hello, World!";\n?>`,
    "ruby": `puts "Hello, World!"`,
    "swift": `print("Hello, World!")`,
    "kotlin": `fun main() {\n    println("Hello, World!")\n}`,
    "rust": `fn main() {\n    println!("Hello, World!");\n}`,
    "go": `package main\nimport "fmt"\nfunc main() {\n    fmt.Println("Hello, World!")\n}`,
    "csharp": `using System;\nclass Program {\n    static void Main() {\n        Console.WriteLine("Hello, World!");\n    }\n}`,
    "typescript": `console.log("Hello, World!");`,
    "perl": `print "Hello, World!";`,
    "r": `cat("Hello, World!")`,
    "mysql": `SELECT 'Hello, World!';`,
    "bash": `echo "Hello, World!"`,
    "dart": `void main() {\n    print('Hello, World Dart!');\n}`,
    "groovy": `println 'Hello, World!'`,
    "kotlin-2.1.10": `fun main() {\n    println("Hello, World!")\n}`,
    "scala": `object Main extends App {\n    println("Hello, World!")\n}`,
    "vbnet": `Module Program\n    Sub Main()\n        Console.WriteLine("Hello, World!")\n    End Sub\nEnd Module`,
};

        // Set the default program based on the selected language
        let defaultProgram = defaultPrograms[selectedLanguage] || defaultPrograms["c"];

        // require.config({ paths: { vs: "https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.38.0/min/vs" } });
        // require(["vs/editor/editor.main"], function () {
        //     editor = monaco.editor.create(document.getElementById("editor"), {
        //         value: defaultProgram,
        //         language: selectedLanguage,
        //         theme: "vs-dark",
        //     });

        require.config({
        paths: {
            vs: "https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.38.0/min/vs"
        }
    });

    require(["vs/editor/editor.main"], function () {
    monaco.editor.defineTheme("custom-theme", {
        base: "vs-dark",
        inherit: true,
        rules: [
            { token: "comment", foreground: "6A9955" },
            { token: "keyword", foreground: "C586C0" },
            { token: "string", foreground: "CE9178" },
            { token: "number", foreground: "B5CEA8" },
            { token: "variable", foreground: "9CDCFE" }
        ],
        colors: {
            "editor.background": "#121212",
            "editor.foreground": "#D4D4D4",
            "editor.selectionBackground": "#264F78",
            "editorCursor.foreground": "#FFFFFF"
        }
    });

   

    function isMobileDevice() {
        return window.innerWidth <= 768; // Adjust breakpoint if needed
    }

    editor = monaco.editor.create(document.getElementById("editor"), {
        value: defaultProgram,
        language: selectedLanguage,
        theme: "custom-theme",
        fontSize: 16,
        scrollBeyondLastLine: false,
        scrollbar: {
            vertical: "hidden",
            horizontal: "hidden",
            alwaysConsumeMouseWheel: false
        },
        overviewRulerLanes: 0,
        automaticLayout: true,
        lineNumbers: isMobileDevice() ? "off" : "on",
        wordWrap: "on", // Wrap text to fit width
        minimap: { enabled: false } // Hide minimap on mobile
    });

    if (isMobileDevice()) {
        document.getElementById("editor").style.height = `${window.innerHeight}px`;
    }
});

        // function runCode() {
        //     let code = editor.getValue();

        //     let outputBox = document.getElementById("output");

        //     inputQueue = extractInputPrompts(code, selectedLanguage);
        //     currentInputIndex = 0;
        //     userInputs = [];
        //     outputBox.innerHTML = "";
        //     askForInput();
        // }

        function runCode() {
        let runButton = document.getElementById("runButton");
        let runText = document.getElementById("runText");
        let runLoader = document.getElementById("runLoader");

        // Disable Button & Show Loader
        runButton.disabled = true;
        runText.style.display = "none";
        runLoader.style.display = "block";

        let code = editor.getValue();
        let outputBox = document.getElementById("output");

        inputQueue = extractInputPrompts(code, selectedLanguage);
        currentInputIndex = 0;
        userInputs = [];
        outputBox.innerHTML = "";

        // Simulating API call delay (Replace this with actual API call)
        setTimeout(() => {
            askForInput();

            // Enable Button & Hide Loader after execution
            runLoader.style.display = "none";
            runText.style.display = "block";
            runButton.disabled = false;

        }, 1000); // Simulated 3-second delay (Replace with actual API response time)
    }

        function askForInput() {
            if (currentInputIndex < inputQueue.length) {
                let promptMessage = inputQueue[currentInputIndex];

                let outputBox = document.getElementById("output");
                let line = document.createElement("div");
                line.innerHTML = `${promptMessage} `;

                let inputField = document.createElement("input");
                inputField.type = "text";
                inputField.className = "console-input";
                inputField.addEventListener("keypress", function (event) {
                    if (event.key === "Enter") {
                        event.preventDefault();
                        userInputs.push(inputField.value.trim());
                        inputField.disabled = true;
                        line.innerHTML = `${promptMessage} <strong>${inputField.value}</strong>`;
                        currentInputIndex++;
                        askForInput();
                    }
                });

                line.appendChild(inputField);
                outputBox.appendChild(line);
                inputField.focus();
            } else {
                executeCode(userInputs.join("\n"));
            }
        }

        function extractInputPrompts(code, language) {
            let regexMap = {
                "c": /printf\("(.*?)"\);[\s]*scanf/g,
                "cpp": /cout\s*<<\s*"(.*?)"\s*;\s*cin/g,
                "java": /System\.out\.print\("(.*?)"\);[\s\S]*?Scanner\s*\w+\s*=\s*new\s*Scanner/g,
                "python": /input\("(.*?)"\)/g,
                "javascript": /prompt\("(.*?)"\)/g,
                "php": /echo\s*"(.*?)";[\s\S]*?fgets/g,
                "ruby": /puts\s*"(.*?)";[\s\S]*?gets/g,
                "swift": /print\("(.*?)"\);[\s\S]*?readLine/g,
                "kotlin": /print\("(.*?)"\);[\s\S]*?readLine/g,
                "rust": /println!\("(.*?)"\);[\s\S]*?stdin/g,
                "go": /fmt\.Print\("(.*?)"\);[\s\S]*?fmt\.Scan/g,
                "csharp": /Console\.Write\("(.*?)"\);[\s\S]*?Console\.ReadLine/g,
                "typescript": /console\.log\("(.*?)"\);[\s\S]*?readline/g,
                "perl": /print\s*"(.*?)"\s*;\s*\$input\s*=\s*<STDIN>/g,
                "r": /cat\("(.*?)"\)\s*;\s*readline/g
            };

            let regex = regexMap[language] || regexMap["c"];
            let match, prompts = [];

            while ((match = regex.exec(code)) !== null) {
                prompts.push(match[1]);
            }

            return prompts.length > 0 ? prompts : []; // Don't return a default prompt if no input is found
        }

        function executeCode(userInput) {
    let sourceCode = editor.getValue();

    // Check if the selected language is PHP (ID: 68)
    if (selectedLanguage === 68) {
        // Convert actual line breaks (HTML-rendered <br>) to \n
        sourceCode = sourceCode.replace(/(?:<br>|<br\/>|<br \/>)/gi, "\n");
        console.log("Modified PHP Code:", sourceCode);
    }

    fetch("/run", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            language_id: languageId,
            source_code: sourceCode,
            stdin: userInput
        })
    })
    .then(response => response.json())
    .then(data => {
        // Log the entire response to debug
        console.log("API Response Data:", data);

        let outputBox = document.getElementById("output");
        let resultDiv = document.createElement("div");

        let outputLines = [];

        // Check for compilation error first
        outputLines = [];
        if (data.compile_output) {
            outputLines.push(`Compilation Error:\n${data.compile_output}`);
        }
        if (data.stdout) {
            outputLines.push(`${data.stdout.trim()}`);
        }
        if (data.stderr) {
            outputLines.push(`Runtime Error:\n${data.stderr.trim()}`);
        }
        if (outputLines.length === 0) {
            outputLines.push("Error executing code.");
        }


        // Tpoint Tech Debug logs
        console.log("Output Lines:", outputLines);

        // Filter and modify output to remove exact user inputs
        let filteredOutput = outputLines.map(line => {
            let modifiedLine = line;

            // Remove only exact user inputs
            inputQueue.forEach(input => {
                modifiedLine = modifiedLine.replace(input.trim(), "").trim();
            });

            return modifiedLine;
        }).filter(line => line !== "").join("\n");

        // Ensure `resultDiv` and `outputBox` exist
        if (!outputBox) {
            console.error("Error: outputBox is not defined or does not exist.");
            return;
        }
        if (!resultDiv) {
            console.error("Error: resultDiv is not defined.");
            return;
        }

        // Update result display
        if (languageId === 68) { 
            resultDiv.innerHTML = filteredOutput; // Render as HTML
        } else {
            resultDiv.innerHTML = `<pre>${filteredOutput.replace(/</g, '&lt;').replace(/>/g, '&gt;')}</pre>`; // Escape for other languages
        }

        // Append the result to the output box
        outputBox.appendChild(resultDiv);
    })
    .catch(error => {
        console.error("Error occurred during fetch:", error);
    });
}


function downloadCode() {
            let code = editor.getValue();

            // Extract the language from the URL
            let path = window.location.pathname;
            let language = path.split("/").pop().toLowerCase();

            // Map language to file extensions
            const extensionMap = {
                "c": "c",
                "cpp": "cpp",
                "java": "java",
                "python": "py",
                "javascript": "js",
                "php": "php",
                "ruby": "rb",
                "swift": "swift",
                "kotlin": "kt",
                "rust": "rs",
                "go": "go",
                "csharp": "cs",
                "typescript": "ts",
                "perl": "pl",
                "r": "r",
                "dart": "dart",
                "mysql": "sql",
                "prolog": "pl",
                "groovy": "groovy",
                "qbasic": "bas",
                "tcl": "tcl",
                "vbnet": "vb",
                "html": "html"
            };

            let extension = extensionMap[language] || "txt";

            let blob = new Blob([code], { type: "text/plain" });
            let a = document.createElement("a");
            a.href = URL.createObjectURL(blob);
            a.download = `code.${extension}`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }

        function shareCode() {
            let code = editor.getValue();
            let encodedCode = encodeURIComponent(code);
            let shareUrl = `${window.location.origin}/?code=${encodedCode}`;
            
            navigator.clipboard.writeText(shareUrl).then(() => {
                alert("Shareable link copied to clipboard!");
            }).catch(err => {
                console.error("Failed to copy:", err);
            });
        }

        function clearOutput() {
        document.getElementById("output").innerHTML = "";
        }


    </script>
<script>
    function explainCode() {
    clearOutput();
    let button = document.querySelector('.btn-explain');
    button.classList.add('loading');
    button.innerHTML = '<div class="spinner"></div> Loading...';

    let code = editor.getValue();
    fetch("/explain", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ source_code: code })
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("output").innerHTML += 
        `<pre>${data.explanation.replace(/</g, '&lt;').replace(/>/g, '&gt;')}</pre>`;
    })
    .finally(() => {
        button.classList.remove('loading');
        button.innerHTML = '💡 Explain Code';
    });
}

    function optimizeCode() {
        clearOutput();
        let button = document.querySelector('.btn-optimize');
        button.classList.add('loading');
        button.innerHTML = '<div class="spinner"></div> Loading...';

        let code = editor.getValue();
        fetch("/optimize", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ source_code: code })
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById("output").innerHTML += 
            `<pre>${data.optimization.replace(/</g, '&lt;').replace(/>/g, '&gt;')}</pre>`;
        })
        .finally(() => {
            button.classList.remove('loading');
            button.innerHTML = '💻 Optimize Code';
        });
    }

    // function askAI() {
    //     let button = document.querySelector('.btn-chat');
    //     button.classList.add('loading');
    //     button.innerHTML = '<div class="spinner"></div> Loading...';

    //     let message = prompt("Ask AI your coding question:");
    //     if (!message) return;

    //     fetch("/chat", {
    //         method: "POST",
    //         headers: { "Content-Type": "application/json" },
    //         body: JSON.stringify({ message: message })
    //     })
    //     .then(response => response.json())
    //     .then(data => {
    //         document.getElementById("output").innerHTML += 
    //         `<pre>${data.reply}</pre>`;
    //     })
    //     .finally(() => {
    //         button.classList.remove('loading');
    //         button.innerHTML = '🤖 Ask AI';
    //     });
    // }
    function askAI() {
        clearOutput();
    // Tpoint Tech Open Popup Instead of Prompt
    document.getElementById('aiPopup').classList.add('show');
}

function closePopup() {
    // Tpoint Tech Close Popup Without Sending
    document.getElementById('aiPopup').classList.remove('show');
}

function sendQuestion() {
    let button = document.querySelector('.btn-chat');
    let message = document.getElementById('aiQuestion').value.trim();

    // Tpoint Tech Prevent Empty Input From Triggering Spinner
    if (message === '') {
        closePopup();
        return;
    }

    // Tpoint Tech Trigger Spinner On Button
    button.classList.add('loading');
    button.innerHTML = '<div class="spinner"></div> Loading...';

    // Tpoint Tech Close Popup After Sending
    closePopup();

    fetch("/chat", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ message: message })
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("output").innerHTML += 
        `<pre>${data.reply}</pre>`;
    })
    .finally(() => {
        // Tpoint Tech Reset Button After Response
        button.classList.remove('loading');
        button.innerHTML = '🤖 Ask AI';
    });
}






document.addEventListener("DOMContentLoaded", function () {
    const switcher = document.querySelector(".language-switcher");
    const links = switcher.querySelectorAll(".lang-option");
    
    // Get current language from the URL
    const currentPath = window.location.pathname; // e.g., "/compiler/java"

    links.forEach((link) => {
        if (link.getAttribute("href") === currentPath) {
            // Move selected language to first position
            switcher.prepend(link);
        }
    });
});

    </script>
<!-- <script>
    function toggleTheme() {
        const body = document.body;
        const themeIcon = document.getElementById("themeIcon");
        const logo = document.getElementById("logoImage");

        if (body.classList.contains("dark-mode")) {
            body.classList.remove("dark-mode");
            body.classList.add("light-mode");
            localStorage.setItem("theme", "light");
            themeIcon.classList.replace("fa-sun", "fa-moon"); // Change to Moon
            monaco.editor.setTheme("vs-light");

            // Change to Light Mode Logo
            logo.src = "https://tpointtech-images.s3.amazonaws.com/static/images/dark-logo.png";
        } else {
            body.classList.remove("light-mode");
            body.classList.add("dark-mode");
            localStorage.setItem("theme", "dark");
            themeIcon.classList.replace("fa-moon", "fa-sun"); // Change to Sun
            monaco.editor.setTheme("vs-dark");

            // Change to Dark Mode Logo
            logo.src = "https://javatpoint-images.s3.amazonaws.com/static/images/logo-white.png";
        }
    }

    // Set theme and logo on page load
    window.onload = function () {
        const savedTheme = localStorage.getItem("theme") || "dark";
        document.body.classList.add(savedTheme + "-mode");

        const themeIcon = document.getElementById("themeIcon");
        const logo = document.getElementById("logoImage");

        if (savedTheme === "dark") {
            document.body.classList.add("dark-mode");
            monaco.editor.setTheme("vs-dark");  // Apply Dark Mode
            themeIcon.classList.replace("fa-moon", "fa-sun");
            logo.src = "https://javatpoint-images.s3.amazonaws.com/static/images/logo-white.png"; // Set Dark Logo
        } else {
            document.body.classList.add("light-mode");
            monaco.editor.setTheme("vs-light");  // Apply Light Mode
            logo.src = "https://tpointtech-images.s3.amazonaws.com/static/images/dark-logo.png"; // Set Light Logo
        }
    };
</script> -->
<!-- Include FontAwesome for Icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>