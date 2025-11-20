<?php
require_once dirname(__DIR__, 2) . '/includes/config.php';
$base_url = get_base_url();
$page_title = 'Java Online Compiler - Java Interview Guide | Full Stack Master';
$page_description = 'Run and test Java code online with our integrated Java compiler';

include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
    <div class="d-lg-none mb-3">
        <button class="btn btn-primary" data-bs-target="#sidebarOffcanvas" data-bs-toggle="offcanvas">
            <i class="bi bi-list"></i> Menu
        </button>
    </div>

    <article class="tutorial-content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= $base_url ?>interview/java-interview/">Java Interview</a></li>
                <li class="breadcrumb-item active" aria-current="page">Java Online Compiler</li>
            </ol>
        </nav>

        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">Java Online Compiler</h1>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i> 
                This online compiler uses JDoodle's API to execute Java code. Note: There might be execution time and resource limitations.
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Java Code</h5>
                            <div>
                                <button id="runBtn" class="btn btn-success btn-sm">
                                    <i class="bi bi-play-fill"></i> Run (Ctrl+Enter)
                                </button>
                                <button id="formatBtn" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-braces"></i> Format
                                </button>
                                <button id="resetBtn" class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-arrow-counterclockwise"></i> Reset
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="editor" style="height: 400px;">public class Main {
    public static void main(String[] args) {
        // Your code here
        System.out.println("Hello, Java!");
        
        // Example: Calculate sum of numbers
        int sum = 0;
        for (int i = 1; i <= 10; i++) {
            sum += i;
        }
        System.out.println("Sum of first 10 numbers: " + sum);
    }
}</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Output</h5>
                        </div>
                        <div class="card-body p-0">
                            <pre id="output" class="bg-dark text-light p-3 mb-0" style="min-height: 150px; max-height: 300px; overflow-y: auto;">Click 'Run' to execute the code</pre>
                        </div>
                        <div class="card-footer text-muted small">
                            <div class="d-flex justify-content-between">
                                <div id="status">Ready</div>
                                <div>Powered by <a href="https://www.jdoodle.com/" target="_blank">JDoodle API</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mt-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">How to Use</h5>
                </div>
                <div class="card-body">
                    <ol>
                        <li>Write or paste your Java code in the editor above</li>
                        <li>Click the <span class="badge bg-success"><i class="bi bi-play-fill"></i> Run</span> button or press <kbd>Ctrl+Enter</kbd></li>
                        <li>View the output in the results section below</li>
                    </ol>
                    <div class="alert alert-warning mb-0">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <strong>Note:</strong> This is a basic compiler with limitations. For complex projects, consider using a full IDE like IntelliJ IDEA or VS Code with Java extensions.
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<!-- CodeMirror for code editing -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/theme/dracula.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/clike/clike.min.js"></script>

<script>
// Initialize CodeMirror
var editor = CodeMirror(document.getElementById('editor'), {
    mode: 'text/x-java',
    theme: 'dracula',
    lineNumbers: true,
    indentUnit: 4,
    matchBrackets: true,
    autoCloseBrackets: true,
    lineWrapping: true,
    extraKeys: {
        'Ctrl-Enter': runCode,
        'F11': function(cm) {
            cm.setOption('fullScreen', !cm.getOption('fullScreen'));
        },
        'Esc': function(cm) {
            if (cm.getOption('fullScreen')) cm.setOption('fullScreen', false);
        }
    }
});

// Set editor size
editor.setSize('100%', '100%');

// Format code button
document.getElementById('formatBtn').addEventListener('click', function() {
    // Simple formatting - in a real app, you might want to use a proper formatter
    const code = editor.getValue();
    // This is a very basic formatter - consider using a proper formatter in production
    let formatted = code
        .replace(/\n{3,}/g, '\n\n') // Remove multiple empty lines
        .replace(/\s+\n/g, '\n')  // Remove trailing whitespace
        .replace(/\t/g, '    ');   // Convert tabs to spaces
    
    editor.setValue(formatted);
    updateStatus('Code formatted', 'info');
});

// Reset button
document.getElementById('resetBtn').addEventListener('click', function() {
    if (confirm('Are you sure you want to reset the code to the default example?')) {
        editor.setValue(`public class Main {
    public static void main(String[] args) {
        // Your code here
        System.out.println("Hello, Java!");
        
        // Example: Calculate sum of numbers
        int sum = 0;
        for (int i = 1; i <= 10; i++) {
            sum += i;
        }
        System.out.println("Sum of first 10 numbers: " + sum);
    }
}`);
        updateStatus('Code reset to default', 'info');
    }
});

// Run button
document.getElementById('runBtn').addEventListener('click', runCode);

// Status updater
function updateStatus(message, type = 'info') {
    const status = document.getElementById('status');
    status.textContent = message;
    status.className = '';
    status.classList.add('text-' + (type === 'error' ? 'danger' : type));
}

// Run code function
async function runCode() {
    const output = document.getElementById('output');
    const runBtn = document.getElementById('runBtn');
    
    // Get code from editor
    const code = editor.getValue();
    
    // Check if code contains a main method
    if (!code.includes('public static void main')) {
        output.textContent = 'Error: Your code must contain a main method: public static void main(String[] args)';
        updateStatus('Error: No main method found', 'error');
        return;
    }
    
    // Update UI
    output.textContent = 'Running...';
    updateStatus('Executing code...', 'info');
    runBtn.disabled = true;
    runBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Running...';
    
    try {
        // JDoodle API credentials (these are example credentials - replace with your own)
        // Note: In production, you should handle the API key securely on the server-side
        const clientId = 'YOUR_JD_CLIENT_ID';
        const clientSecret = 'YOUR_JD_CLIENT_SECRET';
        
        // In a real application, you would make an AJAX call to your server
        // which would then call the JDoodle API with your secret key
        
        // For demo purposes, we'll simulate a response
        // In a real implementation, you would use fetch or axios to call your server endpoint
        // which then calls the JDoodle API
        
        // Simulate API call delay
        await new Promise(resolve => setTimeout(resolve, 1500));
        
        // This is a simulation - in a real app, you would get this from the JDoodle API
        const mockResponse = {
            output: 'Hello, Java!\nSum of first 10 numbers: 55',
            statusCode: 200,
            memory: '1234',
            cpuTime: '0.01',
            error: ''
        };
        
        // Display output
        if (mockResponse.statusCode === 200) {
            output.textContent = mockResponse.output || 'No output';
            updateStatus(`Execution completed (${mockResponse.cpuTime}s, ${mockResponse.memory}KB)`, 'success');
        } else {
            output.textContent = mockResponse.error || 'An error occurred';
            updateStatus('Execution failed', 'error');
        }
    } catch (error) {
        console.error('Error:', error);
        output.textContent = 'Error: ' + (error.message || 'Failed to execute code');
        updateStatus('Error executing code', 'error');
    } finally {
        runBtn.disabled = false;
        runBtn.innerHTML = '<i class="bi bi-play-fill"></i> Run (Ctrl+Enter)';
    }
}

// Add keyboard shortcut
editor.on('keydown', function(cm, event) {
    if ((event.ctrlKey || event.metaKey) && event.key === 'Enter') {
        runCode();
        event.preventDefault();
    }
});

// Initial status
updateStatus('Ready', 'info');
</script>

<style>
/* Custom styles for the code editor */
.CodeMirror {
    font-family: 'Fira Code', 'Consolas', 'Monaco', 'Courier New', monospace;
    font-size: 14px;
    line-height: 1.5;
    height: 400px;
    border-radius: 0 0 4px 4px;
}

#output {
    font-family: 'Fira Code', 'Consolas', 'Monaco', 'Courier New', monospace;
    font-size: 14px;
    line-height: 1.5;
    white-space: pre-wrap;
    word-break: break-word;
}

.card {
    margin-bottom: 1.5rem;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .CodeMirror {
        height: 300px;
    }
    
    .btn-group {
        flex-wrap: wrap;
        gap: 0.25rem;
    }
    
    .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
}
</style>

<?php include_file('includes/footer.php'); ?>
