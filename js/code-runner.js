class CodeRunner {
    constructor() {
        this.iframe = null;
        this.editor = null;
        this.output = null;
        this.currentTheme = 'light';
    }

    init(containerId) {
        const container = document.getElementById(containerId);
        if (!container) return;

        // Create editor container
        const editorContainer = document.createElement('div');
        editorContainer.className = 'code-editor';
        
        // Create toolbar
        const toolbar = document.createElement('div');
        toolbar.className = 'editor-toolbar';
        toolbar.innerHTML = `
            <button class="btn btn-sm btn-primary run-btn">
                <i class="bi bi-play-fill"></i> Run
            </button>
            <button class="btn btn-sm btn-outline-secondary clear-btn">
                <i class="bi bi-trash"></i> Clear
            </button>
            <button class="btn btn-sm btn-outline-secondary copy-btn">
                <i class="bi bi-clipboard"></i> Copy
            </button>
            <select class="form-select form-select-sm theme-select">
                <option value="light">Light Theme</option>
                <option value="dark">Dark Theme</option>
            </select>
        `;

        // Create editor textarea
        const editor = document.createElement('textarea');
        editor.className = 'code-input';
        this.editor = editor;

        // Create output iframe
        const outputContainer = document.createElement('div');
        outputContainer.className = 'output-container';
        const iframe = document.createElement('iframe');
        iframe.className = 'output-frame';
        iframe.sandbox = 'allow-scripts';
        outputContainer.appendChild(iframe);
        this.iframe = iframe;

        // Add elements to container
        editorContainer.appendChild(toolbar);
        editorContainer.appendChild(editor);
        container.appendChild(editorContainer);
        container.appendChild(outputContainer);

        // Initialize event listeners
        this.initializeEventListeners(toolbar);
        
        // Load CodeMirror
        this.initializeCodeMirror();
    }

    initializeEventListeners(toolbar) {
        // Run button
        toolbar.querySelector('.run-btn').addEventListener('click', () => this.runCode());

        // Clear button
        toolbar.querySelector('.clear-btn').addEventListener('click', () => this.clearEditor());

        // Copy button
        toolbar.querySelector('.copy-btn').addEventListener('click', () => this.copyCode());

        // Theme selector
        toolbar.querySelector('.theme-select').addEventListener('change', (e) => {
            this.setTheme(e.target.value);
        });
    }

    initializeCodeMirror() {
        // Initialize CodeMirror with HTML mode
        this.editor = CodeMirror.fromTextArea(this.editor, {
            mode: 'xml',
            theme: 'default',
            lineNumbers: true,
            autoCloseTags: true,
            autoCloseBrackets: true,
            matchBrackets: true,
            indentUnit: 4,
            tabSize: 4,
            lineWrapping: true,
            extraKeys: {
                'Ctrl-Space': 'autocomplete',
                'Tab': 'indentMore',
                'Shift-Tab': 'indentLess'
            }
        });

        // Set initial theme
        this.setTheme(this.currentTheme);
    }

    runCode() {
        const code = this.editor.getValue();
        const doc = this.iframe.contentDocument;
        doc.open();
        doc.write(code);
        doc.close();
    }

    clearEditor() {
        this.editor.setValue('');
        const doc = this.iframe.contentDocument;
        doc.open();
        doc.write('');
        doc.close();
    }

    copyCode() {
        const code = this.editor.getValue();
        navigator.clipboard.writeText(code).then(() => {
            // Show success message
            const copyBtn = document.querySelector('.copy-btn');
            const originalText = copyBtn.innerHTML;
            copyBtn.innerHTML = '<i class="bi bi-check"></i> Copied!';
            setTimeout(() => {
                copyBtn.innerHTML = originalText;
            }, 2000);
        });
    }

    setTheme(theme) {
        this.currentTheme = theme;
        if (theme === 'dark') {
            this.editor.setOption('theme', 'monokai');
            document.querySelector('.code-editor').classList.add('dark-theme');
        } else {
            this.editor.setOption('theme', 'default');
            document.querySelector('.code-editor').classList.remove('dark-theme');
        }
    }

    setCode(code) {
        this.editor.setValue(code);
    }
}

// Initialize code runners
document.addEventListener('DOMContentLoaded', () => {
    // Find all code runner containers
    document.querySelectorAll('.code-runner').forEach((container, index) => {
        const runner = new CodeRunner();
        runner.init(container.id || `code-runner-${index}`);
        
        // If there's initial code, set it
        const initialCode = container.dataset.code;
        if (initialCode) {
            runner.setCode(initialCode);
        }
    });
});