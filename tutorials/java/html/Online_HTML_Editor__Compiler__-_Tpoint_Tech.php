<?php
// Tutorial: Online HTML Editor (Compiler) - Tpoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Online HTML Editor (Compiler) - Tpoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>Online HTML Editor (Compiler) - Tpoint Tech</h1>
        <body>
<div class="top-bar">
<div class="logo-container">
<a href="https://www.tpointtech.com"><img src="https://tpointtech-images.s3.amazonaws.com/static/images/dark-logo.png"/>
</a>
<div class="tagline">
<h1>Online HTML Compiler (Editor) </h1>
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
<!-- Editor Container -->
<div class="editor-container">
<div class="run-container">
<button class="btn btn-download" onclick="downloadCode()">Download</button>
<button class="btn btn-explain" onclick="explainCode()">Explain Code</button>
<button class="btn btn-optimize" onclick="optimizeCode()">Optimize Code</button>
<button class="btn btn-chat" onclick="askAI()">Ask AI</button>
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
</div>
<script>
        let editor;
        let inputQueue = [];
        let currentInputIndex = 0;
        let userInputs = [];

        let languageIdMap = {
            "html": -1
        };


        let selectedLanguage = "html";
        let languageId = languageIdMap[selectedLanguage] || 50;



        require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.38.0/min/vs' } });

        require(["vs/editor/editor.main"], function () {
            editor = monaco.editor.create(document.getElementById("editor"), {
                value: `<!DOCTYPE html>\n<html>\n<head>\n<title>My Page</title>\n</head>\n<body>\n<h1>Hello, World!</h1>\n</body>\n</html>`,
                language: selectedLanguage,
                theme: selectedLanguage === "html" ? "vs-light" : "vs-dark",
                fontSize: 16,
                scrollBeyondLastLine: false,
                scrollbar: {
                    vertical: "hidden",
                    alwaysConsumeMouseWheel: false
                },
                overviewRulerLanes: 0,
                automaticLayout: true,
                minimap: { enabled: false }
            });
        });


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

            if (selectedLanguage === "html") {
                // Execute HTML code directly
                outputBox.innerHTML = `<iframe id="outputFrame" style="width: 100%; height: 100%; border: none;"></iframe>`;
                let outputFrame = document.getElementById("outputFrame").contentWindow.document;
                outputFrame.open();
                outputFrame.write(code);
                outputFrame.close();

                setTimeout(() => {
                    // Enable Button & Hide Loader after execution
                    runLoader.style.display = "none";
                    runText.style.display = "block";
                    runButton.disabled = false;
                }, 300);
            }
            else {
                // Handle other languages
                inputQueue = extractInputPrompts(code, selectedLanguage);
                currentInputIndex = 0;
                userInputs = [];
                outputBox.innerHTML = "";

                setTimeout(() => {
                    askForInput();

                    // Enable Button & Hide Loader after execution
                    runLoader.style.display = "none";
                    runText.style.display = "block";
                    runButton.disabled = false;
                }, 1000);
            }
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
            fetch("/run", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    language_id: languageId,
                    source_code: editor.getValue(),
                    stdin: userInput
                })
            })
                .then(response => response.json())
                .then(data => {
                    let outputBox = document.getElementById("output");
                    let resultDiv = document.createElement("div");


                    let outputLines = (data.stdout || data.stderr || "Error executing code.").split(/\r?\n/);

                    if (data.stdout) outputLines = data.stdout.split("\n");
                    else if (data.stderr) outputLines = data.stderr.split("\n");
                    else outputLines = ["Error executing code."];

                    // ✅ Debug logs
                    //console.log("Input Queue:", inputQueue);
                    //console.log("Output Lines:", outputLines);


                    let filteredOutput = outputLines.map(line => {
                        let modifiedLine = line;

                        // Remove only exact user inputs
                        inputQueue.forEach(input => {
                            modifiedLine = modifiedLine.replace(input.trim(), "").trim();
                        });

                        return modifiedLine;
                    }).filter(line => line !== "").join("\n");

                    if (!outputBox) {
                        console.error("Error: outputBox is not defined or does not exist.");
                        return;
                    }
                    if (!resultDiv) {
                        console.error("Error: resultDiv is not defined.");
                        return;
                    }

                    // ✅ Update result display
                    resultDiv.innerHTML = `${filteredOutput}`;
                    outputBox.appendChild(resultDiv);

                });
        }


        function downloadCode() {
            let code = editor.getValue();
            let blob = new Blob([code], { type: "text/plain" });
            let a = document.createElement("a");
            a.href = URL.createObjectURL(blob);
            a.download = "code.txt";
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }



        window.onload = function () {
            runCode();
        };

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

            // resultDiv.innerHTML = `<pre>${filteredOutput.replace(/</g, '&lt;').replace(/>/g, '&gt;')}</pre>`;
        })
        .finally(() => {
            button.classList.remove('loading');
            button.innerHTML = '💻 Optimize Code';
        });
    }

  
    function askAI() {
        clearOutput();
    //  Open Popup Instead of Prompt
    document.getElementById('aiPopup').classList.add('show');
}

function closePopup() {
    //  Close Popup Without Sending
    document.getElementById('aiPopup').classList.remove('show');
}

function sendQuestion() {
    let button = document.querySelector('.btn-chat');
    let message = document.getElementById('aiQuestion').value.trim();

    //  Prevent Empty Input From Triggering Spinner
    if (message === '') {
        closePopup();
        return;
    }

    //  Trigger Spinner On Button
    button.classList.add('loading');
    button.innerHTML = '<div class="spinner"></div> Loading...';

    //  Close Popup After Sending
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
        //  Reset Button After Response
        button.classList.remove('loading');
        button.innerHTML = '🤖 Ask AI';
    });
}

function clearOutput() {
        document.getElementById("output").innerHTML = "";
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
</body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>