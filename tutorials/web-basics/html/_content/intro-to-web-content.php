<?php
return [
    'sections' => [
        'intro' => [
            'title' => 'Introduction to the Web',
            'content' => 'The web today is an omnipresent platform powering everything from simple static pages to highly interactive applications serving millions of users around the world.',
            'subsections' => [
                [
                    'title' => 'The Request/Response Cycle',
                    'content' => 'The fundamental way the web works is through a request/response cycle between clients (browsers) and servers.',
                    'code' => '// Example of a simple HTTP request
GET /index.html HTTP/1.1
Host: www.example.com',
                    'image' => 'request-response-cycle.png',
                    'points' => [
                        'Client sends a request to a server',
                        'Server processes the request',
                        'Server sends back a response',
                        'Client renders the response'
                    ]
                ],
                [
                    'title' => 'Front-End and Back-End',
                    'content' => 'Web development is typically divided into front-end (client-side) and back-end (server-side) development.',
                    'points' => [
                        'Front-end: What users see and interact with (HTML, CSS, JavaScript)',
                        'Back-end: Server, database, and application logic',
                        'Full-stack developers work on both ends'
                    ]
                ],
                [
                    'title' => 'What do HTML/CSS/JS do?',
                    'content' => 'These three technologies work together to create modern web experiences.',
                    'code' => '<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
    <style>
        body { font-family: Arial; }
    </style>
</head>
<body>
    <h1>Hello World</h1>
    <script>
        console.log("JavaScript is running!");
    </script>
</body>
</html>',
                    'points' => [
                        'HTML: Structure and content',
                        'CSS: Styling and layout',
                        'JavaScript: Interactivity and behavior'
                    ]
                ]
            ]
        ],
        'setup' => [
            'title' => 'Setting Up Our Developer Environment',
            'subsections' => [
                [
                    'title' => 'Windows Users: Setting up VS Code',
                    'content' => 'Visual Studio Code is a powerful, free code editor with excellent web development support.',
                    'steps' => [
                        'Download and install VS Code from code.visualstudio.com',
                        'Install essential extensions: Live Server, Prettier, ESLint',
                        'Configure your settings for optimal web development'
                    ]
                ],
                [
                    'title' => 'Recommended VS Code Theme',
                    'content' => 'A good theme can reduce eye strain and improve productivity.',
                    'points' => [
                        'Dark themes are popular for coding',
                        'Consider: One Dark Pro, Material Theme, or GitHub Theme',
                        'Customize font size and line height for comfort'
                    ]
                ]
            ]
        ]
    ]
];
?>
