/**
 * Code Editor and Execution Functionality
 * Handles syntax highlighting and code execution for tutorial code examples
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Prism.js for syntax highlighting
    if (typeof Prism !== 'undefined') {
        Prism.highlightAll();
    }
    
    // Create a modal for code execution results if it doesn't exist
    if (!document.getElementById('codeExecutionModal')) {
        const modalHTML = `
        <div class="modal fade" id="codeExecutionModal" tabindex="-1" aria-labelledby="codeExecutionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="codeExecutionModalLabel">Code Execution Result</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="container-fluid p-0">
                            <ul class="nav nav-tabs" id="resultTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="output-tab" data-bs-toggle="tab" data-bs-target="#output-pane" type="button" role="tab">Output</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="code-tab" data-bs-toggle="tab" data-bs-target="#code-pane" type="button" role="tab">Code</button>
                                </li>
                            </ul>
                            <div class="tab-content p-3" id="resultTabsContent">
                                <div class="tab-pane fade show active" id="output-pane" role="tabpanel" style="min-height: 200px;">
                                    <!-- Output will be inserted here -->
                                </div>
                                <div class="tab-pane fade" id="code-pane" role="tabpanel">
                                    <pre class="m-0"><code id="modal-code" class="language-javascript"></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="rerun-code">
                            <i class="bi bi-arrow-repeat me-1"></i>Run Again
                        </button>
                    </div>
                </div>
            </div>
        </div>`;
        
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        
        // Initialize Bootstrap modal
        const modal = new bootstrap.Modal(document.getElementById('codeExecutionModal'));
        
        // Handle rerun button
        document.getElementById('rerun-code').addEventListener('click', function() {
            const currentCodeBlock = this.dataset.currentBlock;
            if (currentCodeBlock) {
                const block = document.querySelector(`[data-block-id="${currentCodeBlock}"]`);
                if (block) {
                    modal.hide();
                    setTimeout(() => executeCode(block), 300); // Small delay to allow modal to close
                }
            }
        });
    }
    
    // Add run buttons to code blocks (supports <pre><code class="language-*"></code></pre> and <pre class="language-*">)
    const blocks = [];
    document.querySelectorAll('pre').forEach((pre) => {
        const codeEl = pre.querySelector('code[class*="language-"]');
        const preLangClass = Array.from(pre.classList || []).find(cls => cls.startsWith('language-'));
        if (codeEl || preLangClass) {
            const language = (codeEl ? Array.from(codeEl.classList).find(cls => cls.startsWith('language-')) : preLangClass) || '';
            if (language) {
                blocks.push({ pre, codeEl: codeEl || pre.querySelector('code'), language: language.replace('language-', '') });
            }
        }
    });

    blocks.forEach(function(ref, index) {
        const { pre, codeEl, language } = ref;
        // Skip if already has a run button
        if (pre.querySelector('.run-code-btn')) return;
        
        // Add unique ID to the pre block
        const blockId = 'code-block-' + Date.now() + '-' + index;
        pre.setAttribute('data-block-id', blockId);
        
        // Create run button
        const runButton = document.createElement('button');
        runButton.className = 'btn btn-sm btn-primary run-code-btn position-absolute';
        runButton.style.top = '10px';
        runButton.style.right = '10px';
        runButton.innerHTML = '<i class="bi bi-play-fill me-1"></i>Run';
        
        // Add click event to execute code
        runButton.addEventListener('click', function() {
            executeCode(pre, codeEl, language);
        });
        
        // Add button to code block
        pre.style.position = 'relative';
        pre.appendChild(runButton);
    });
    
    // Function to execute code
    function executeCode(preEl, codeEl, lang) {
        const code = (codeEl || preEl).textContent.trim();
        const language = (lang || '').toLowerCase();
        if (!language) return;

        // Map Prism's 'markup' to HTML for execution
        const execLanguage = (language === 'markup') ? 'html' : language;
        
        // Get modal elements
        const modal = new bootstrap.Modal(document.getElementById('codeExecutionModal'));
        const outputPane = document.querySelector('#output-pane');
        const codePane = document.querySelector('#modal-code');
        const modalTitle = document.querySelector('#codeExecutionModalLabel');
        const rerunButton = document.getElementById('rerun-code');
        
        // Update modal title
        modalTitle.textContent = `Running ${execLanguage.toUpperCase()} Code`;
        
        // Store current code block ID for rerun functionality
        rerunButton.dataset.currentBlock = preEl.getAttribute('data-block-id');
        
        // Clear previous output
        outputPane.innerHTML = '';
        
        // Show the code in the code tab
        codePane.textContent = code;
        if (typeof Prism !== 'undefined') {
            Prism.highlightElement(codePane);
        }
        
        // Create a loading indicator
        const loadingDiv = document.createElement('div');
        loadingDiv.className = 'd-flex justify-content-center align-items-center';
        loadingDiv.style.minHeight = '100px';
        loadingDiv.innerHTML = `
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Executing code...</span>
            </div>
            <span class="ms-3">Executing ${execLanguage} code...</span>
        `;
        
        outputPane.appendChild(loadingDiv);
        
        // Show the modal
        modal.show();
        
        // Use a small timeout to allow the modal to render before executing code
        setTimeout(() => {
            try {
                // Clear loading indicator
                outputPane.innerHTML = '';
                
                // Handle different languages
                switch(execLanguage) {
                    case 'html': {
                        // Create an iframe to render HTML content
                        const iframe = document.createElement('iframe');
                        iframe.style.width = '100%';
                        iframe.style.height = '400px';
                        iframe.style.border = '1px solid #dee2e6';
                        iframe.style.borderRadius = '0.25rem';
                        outputPane.appendChild(iframe);
                        
                        // Write the HTML to the iframe
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
                    }
                    case 'javascript': {
                        // Create a container for JavaScript output
                        const jsOutput = document.createElement('div');
                        outputPane.appendChild(jsOutput);
                        
                        // Create console output container
                        const consoleOutput = document.createElement('div');
                        consoleOutput.className = 'console-output mt-3 p-3 bg-light border rounded';
                        consoleOutput.style.maxHeight = '300px';
                        consoleOutput.style.overflowY = 'auto';
                        consoleOutput.innerHTML = '<h6 class="mb-2">Console Output:</h6><div class="console-logs"></div>';
                        
                        // Override console.log to capture output
                        const originalConsoleLog = console.log;
                        const logs = [];
                        
                        console.log = function() {
                            const args = Array.from(arguments);
                            logs.push(args);
                            originalConsoleLog.apply(console, args);
                            
                            // Update console output in real-time
                            const logEntry = document.createElement('div');
                            logEntry.className = 'console-log-entry mb-1';
                            logEntry.textContent = args.map(arg => 
                                typeof arg === 'object' ? JSON.stringify(arg, null, 2) : String(arg)
                            ).join(' ');
                            
                            const logContainer = consoleOutput.querySelector('.console-logs');
                            logContainer.appendChild(logEntry);
                            logContainer.scrollTop = logContainer.scrollHeight;
                        };
                        
                        try {
                            // Execute the JavaScript code
                            const result = new Function(code)();
                            
                            // Display the result
                            if (result !== undefined) {
                                const resultElement = document.createElement('div');
                                resultElement.className = 'alert alert-success mt-3';
                                resultElement.innerHTML = `
                                    <h5 class="alert-heading">Return Value:</h5>
                                    <pre class="mb-0">${JSON.stringify(result, null, 2)}</pre>
                                `;
                                outputPane.insertBefore(resultElement, consoleOutput);
                            }
                            
                            // Add console output if there are any logs
                            if (logs.length > 0) {
                                outputPane.appendChild(consoleOutput);
                            } else {
                                const noOutput = document.createElement('div');
                                noOutput.className = 'alert alert-info mt-3';
                                noOutput.textContent = 'No console output. Use console.log() to print values.';
                                outputPane.appendChild(noOutput);
                            }
                            
                        } catch (error) {
                            throw error;
                        } finally {
                            // Restore original console.log
                            console.log = originalConsoleLog;
                        }
                        break;
                    }
                    default: {
                        const unsupportedMsg = document.createElement('div');
                        unsupportedMsg.className = 'alert alert-warning';
                        unsupportedMsg.textContent = `Code execution for ${execLanguage} is not supported in this environment.`;
                        outputPane.appendChild(unsupportedMsg);
                    }
                }
                
                // Update modal title to show success
                modalTitle.textContent = `Code Execution - ${execLanguage.toUpperCase()}`;
                
            } catch (error) {
                // Show error in output
                outputPane.innerHTML = `
                    <div class="alert alert-danger">
                        <h5 class="alert-heading">Error Executing Code</h5>
                        <div class="font-monospace">${error.message}</div>
                        ${error.stack ? `<pre class="mt-2 mb-0 small">${error.stack}</pre>` : ''}
                    </div>
                `;
                
                // Update modal title to show error
                modalTitle.textContent = `Error - ${execLanguage.toUpperCase()} Execution Failed`;
            }
        }, 100); // Small delay to ensure modal is fully visible
    }
    
    // Add styles for code blocks and modal
    const style = document.createElement('style');
    style.textContent = `
        /* Code block styles */
        pre[class*="language-"] {
            position: relative;
            padding-top: 2.5em;
            margin: 1em 0;
            border-radius: 0.375rem;
            overflow: hidden;
            background: #2d2d2d;
        }
        
        /* Handle cases where the language-* class is on the <code> element */
        pre > code[class*="language-"] {
            display: block;
            background: #2d2d2d;
            padding: 1em;
            border-radius: 0.375rem;
        }
        
        pre[class*="language-"] code,
        pre > code[class*="language-"] {
            font-family: 'Fira Code', 'Consolas', 'Monaco', 'Andale Mono', 'Ubuntu Mono', monospace;
            font-size: 0.9em;
            line-height: 1.5;
            tab-size: 4;
        }
        
        /* Run button styles */
        .run-code-btn {
            z-index: 10;
            padding: 0.25rem 0.75rem;
            font-size: 0.8rem;
            line-height: 1.2;
            border-radius: 0.25rem;
            transition: all 0.2s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .run-code-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        
        /* Modal styles */
        #codeExecutionModal .modal-dialog {
            max-width: 90%;
            max-height: 90vh;
        }
        
        #codeExecutionModal .modal-content {
            height: 80vh;
            display: flex;
            flex-direction: column;
        }
        
        #codeExecutionModal .modal-body {
            flex: 1;
            overflow: hidden;
            padding: 0;
        }
        
        #codeExecutionModal .tab-content {
            height: calc(100% - 42px);
            overflow-y: auto;
        }
        
        #codeExecutionModal .tab-pane {
            height: 100%;
        }
        
        #codeExecutionModal iframe {
            width: 100%;
            height: 100%;
            border: none;
            background: white;
        }
        
        /* Console output styles */
        .console-output {
            background-color: #f8f9fa;
            border-left: 4px solid #6c757d;
        }
        
        .console-log-entry {
            font-family: 'Fira Code', 'Consolas', 'Monaco', monospace;
            font-size: 0.9em;
            white-space: pre-wrap;
            word-break: break-word;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 0.5rem;
            margin-bottom: 0.5rem;
        }
        
        .console-log-entry:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
    `;
    document.head.appendChild(style);
});
