document.addEventListener("DOMContentLoaded", function() {
    // Add run buttons to all code blocks with language-* classes
    document.querySelectorAll("pre[class*='language-']").forEach(function(codeBlock) {
        // Skip if already has a run button
        if (codeBlock.querySelector(".run-code-btn")) return;
        
        const languageClass = Array.from(codeBlock.classList)
            .find(cls => cls.startsWith("language-"));
        const language = languageClass ? languageClass.replace("language-", "") : '';
        
        if (!language) return;
        
        // Create run button
        const runButton = document.createElement("button");
        runButton.className = "btn btn-sm btn-primary run-code-btn";
        runButton.innerHTML = '<i class="bi bi-play-fill me-1"></i>Run';
        
        // Position the button
        codeBlock.style.position = "relative";
        codeBlock.appendChild(runButton);
        
        // Add click event to execute code
        runButton.addEventListener("click", function() {
            executeCode(codeBlock, language);
        });
    });
    
    // Function to execute code
    function executeCode(codeBlock, language) {
        const code = codeBlock.textContent.trim();
        
        // Create output container if it doesn't exist
        let outputContainer = codeBlock.nextElementSibling;
        if (!outputContainer || !outputContainer.classList.contains("code-output")) {
            outputContainer = document.createElement("div");
            outputContainer.className = "code-output mt-2";
            codeBlock.parentNode.insertBefore(outputContainer, codeBlock.nextSibling);
        }
        
        outputContainer.innerHTML = `
            <div class="console-output">
                <div class="console-log-entry text-muted">Executing ${language} code...</div>
            </div>
        `;
        
        const consoleOutput = outputContainer.querySelector(".console-output");
        
        try {
            // Clear previous output
            consoleOutput.innerHTML = "<div class='console-log-entry text-muted'>Executing code...</div>";
            
            // Handle different languages
            switch(language) {
                case "html":
                    const iframe = document.createElement("iframe");
                    iframe.style.width = "100%";
                    iframe.style.height = "300px";
                    iframe.style.border = "1px solid #dee2e6";
                    iframe.style.borderRadius = "0.25rem";
                    
                    consoleOutput.innerHTML = "";
                    consoleOutput.appendChild(iframe);
                    
                    const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
                    iframeDoc.open();
                    iframeDoc.write(`
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <style>
                                body { 
                                    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                                    padding: 20px;
                                    margin: 0;
                                }
                            </style>
                        </head>
                        <body>${code}</body>
                        </html>
                    `);
                    iframeDoc.close();
                    break;
                    
                case "javascript":
                    // Create a container for JavaScript output
                    const jsOutput = document.createElement("div");
                    consoleOutput.innerHTML = "";
                    consoleOutput.appendChild(jsOutput);
                    
                    // Override console.log to capture output
                    const originalConsoleLog = console.log;
                    const logs = [];
                    
                    console.log = function() {
                        logs.push(Array.from(arguments).join(" "));
                        originalConsoleLog.apply(console, arguments);
                        
                        // Update console output in real-time
                        const logEntry = document.createElement("div");
                        logEntry.className = "console-log-entry";
                        logEntry.textContent = Array.from(arguments).map(arg => 
                            typeof arg === "object" ? JSON.stringify(arg, null, 2) : String(arg)
                        ).join(" ");
                        
                        consoleOutput.insertBefore(logEntry, consoleOutput.firstChild);
                    };
                    
                    try {
                        // Execute the JavaScript code
                        const result = new Function(code)();
                        
                        // Display the result if there's a return value
                        if (result !== undefined) {
                            const resultElement = document.createElement("div");
                            resultElement.className = "alert alert-success mt-3";
                            resultElement.innerHTML = `
                                <h6 class="alert-heading">Return Value:</h6>
                                <pre class="mb-0">${JSON.stringify(result, null, 2)}</pre>
                            `;
                            consoleOutput.insertBefore(resultElement, consoleOutput.firstChild);
                        }
                        
                        // Add a message if there's no console output
                        if (logs.length === 0) {
                            const noOutput = document.createElement("div");
                            noOutput.className = "alert alert-info mt-3";
                            noOutput.textContent = 'No console output. Use console.log() to print values.';
                            consoleOutput.appendChild(noOutput);
                        }
                        
                    } catch (error) {
                        throw error;
                    } finally {
                        // Restore original console.log
                        console.log = originalConsoleLog;
                    }
                    break;
                    
                default:
                    consoleOutput.innerHTML = `
                        <div class="alert alert-warning">
                            Code execution for ${language} is not supported in this environment.
                        </div>
                    `;
            }
            
        } catch (error) {
            consoleOutput.innerHTML = `
                <div class="alert alert-danger">
                    <h6 class="alert-heading">Error Executing Code</h6>
                    <div class="font-monospace">${error.message}</div>
                    ${error.stack ? `<pre class="mt-2 mb-0 small">${error.stack}</pre>` : ''}
                </div>
            `;
        }
    }
});
