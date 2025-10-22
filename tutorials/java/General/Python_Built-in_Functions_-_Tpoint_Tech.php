<?php
// Tutorial: Python Built-in Functions - Tpoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Python Built-in Functions - Tpoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>Python Built-in Functions - Tpoint Tech</h1>
        <body onload="highlightlink()"><div class="xyz shadow-sm"><div class="sticky-top p-0" style="position:sticky;background-color:var(--light)"><div class="container-fluid"><div class="position-relative p-0"><nav class="navbar navbar-expand-lg navbar-light px-4 py-lg-0"><a class="navbar-brand p-0" href="/"><img alt="Logo" height="48" id="logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" width="179"/></a><div class="w-100" id="search-box"><div id="searchContainer" style="position:relative"><input autocomplete="off" id="searchInput" placeholder="Search..." type="text"/> <button aria-label="Search" id="searchBtn" style="position:absolute;right:5px;top:50%;transform:translateY(-50%);background:0 0;border:none;cursor:pointer"><span id="iconSearch"><svg fill="none" height="20" stroke="green" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg> </span><span id="iconClear" style="display:none"><svg fill="none" height="20" stroke="red" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><line x1="6" x2="18" y1="6" y2="18"></line><line x1="6" x2="18" y1="18" y2="6"></line></svg></span></button><ul id="results"></ul></div></div><div class="jtp-nav"><button class="navbar-toggler float-left" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button"><span class="fa fa-bars"></span></button></div><div class="collapse navbar-collapse" id="navbarCollapse"><div class="navbar-nav"><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Tutorials</a><div class="dropdown-menu w-100 mt-0" id="tutorials"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("tutorials")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/python-tutorial">Python Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/django-tutorial">Django Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/numpy-tutorial">Numpy Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas">Pandas Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-tkinter">Tkinter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/pytorch">Pytorch Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/flask-tutorial">Flask Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/opencv">OpenCV Tutorial</a><h3 class="jtp-list-group-item">Java</h3><a class="jtp-list-group-item list-group-item-action" href="/java-tutorial">Java Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/servlet-tutorial">Servlet Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jsp-tutorial">JSP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-boot-tutorial">Spring Boot Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-tutorial">Spring Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-tutorial">Hibernate Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javafx-tutorial">JavaFX Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/java-web-services-tutorial">Java Web Services Tutorial</a><h3 class="jtp-list-group-item">.Net Framework</h3><a class="jtp-list-group-item list-group-item-action" href="/net-framework">.Net Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-tutorial">C# Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/asp-net-tutorial">ASP.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/ado-net-tutorial">ADO.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wpf">WPF Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">AI, ML and Data Science</h3><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-ai">Artificial Intelligence Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning">Machine Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-science">Data Science Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/deep-learning">Deep Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/tensorflow">TensorFlow Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/artificial-neural-network">Artificial Neural Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/matplotlib">Matplotlib Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-scipy">Python Scipy Tutorial</a><h3 class="jtp-list-group-item">Cloud Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing">Cloud Computing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-tutorial">AWS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-azure">Microsoft Azure Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/salesforce">Salesforce Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/google-cloud-platform">GCP Tutorial</a><h3 class="jtp-list-group-item">B.Tech and MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-tutorial">DBMS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-tutorial">Data Structures Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system">Operating System Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-network-tutorial">Computer Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/daa-tutorial">DAA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-organization-and-architecture-tutorial">Computer Organization Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/software-engineering">Software Engineering Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-mining">Data Mining Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/html-tutorial">HTML Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/css-tutorial">CSS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-tutorial">JavaScript Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-tutorial">Jquery Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-8">Angular 8 Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/reactjs-tutorial">React Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/react-native-tutorial">React Native Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/nodejs-tutorial">Node.js Tutorial</a><h3 class="jtp-list-group-item">PHP</h3><a class="jtp-list-group-item list-group-item-action" href="/php-tutorial">PHP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-tutorial">MySQL Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel">Laravel Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wordpress-tutorial">WordPress Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/codeigniter-tutorial">CodeIgniter Tutorial</a><h3 class="jtp-list-group-item">Software Testing</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-tutorial">Software Testing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-tutorial">Selenium Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jira-tutorial">JIRA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jmeter-tutorial">JMeter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/postman">Postman Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/testng-tutorial">TestNG Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/soapui">SoapUI Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/cucumber-testing">Cucumber Tutorial</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Interview</a><div class="dropdown-menu w-100 mt-0" id="interview-questions"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("interview-questions")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Technical Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions">Python Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/corejava-interview-questions">Java Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/dot-net-interview-questions">.Net Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/cpp-interview-questions">C++ Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/react-interview-questions">React Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/node-js-interview-questions">Node.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-interview-questions">Angular Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hr-interview-questions">HR Interview Questions</a><h3 class="jtp-list-group-item">Java Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/spring-boot-interview-questions">Spring Boot Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-interview-questions">Spring Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-interview-questions">Hibernate Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jdbc-interview-questions">JDBC Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/servletinterview">Servlet Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/maven-interview-questions">Maven Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jenkins-interview-questions">Jenkins Interview Questions</a><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/django-interview-questions-and-answers">Django Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas-interview-questions">Pandas Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/expressjs-interview-questions">Express.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-coding-interview-questions">Python Coding Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions-for-five-years-experienced">Python Interview Questions for 5 Years</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/html-interview-questions">HTML Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/css-interview-questions">CSS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-interview-questions">JavaScript Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">Jquery Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/php-interview-questions">PHP Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel-interview-questions">Laravel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/ajax-interview-questions">AJAX Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/front-end-developer-interview-questions">Front-End Developer Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">jQuery Interview Questions</a><h3 class="jtp-list-group-item">Database Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/pl-sql-interview-questions">PL/SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oracle-interview-questions">Oracle Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mongodb-interview-questions">MongoDB Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/redis-interview-questions-and-answers">Redis Interview Questions</a><h3 class="jtp-list-group-item">B.Tech / MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system-interview-questions">Operating System Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oops-interview-questions">OOPs Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-interview-questions">DSA Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/networking-interview-questions">Computer Networks Interview Questions</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Important Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/c-interview-questions">C Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/power-bi-interview-questions">Power BI Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/excel-interview-questions">Excel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning-interview-questions">Machine Learning Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-interview-questions">AWS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microservices-interview-questions">Microservices Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a><h3 class="jtp-list-group-item">Software Testing Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-interview-questions">Manual Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-interview-questions">Selenium Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/api-testing-interview-questions">API Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/etl-testing-interview-questions">ETL Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mobile-testing-interview-questions">Mobile Testing Interview Questions</a><h3 class="jtp-list-group-item">Company Interviews</h3><a class="jtp-list-group-item list-group-item-action" href="/ibm-interview-questions">IBM Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/adobe-interview-questions">Adobe Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-interview-questions">Microsoft Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/amazon-interview-questions">Amazon Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/tcs-interview-questions">TCS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/wipro-interview-questions">Wipro Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/accenture-interview-questions">Accenture Interview Questions</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Compiler</a><div class="dropdown-menu w-100 mt-0" id="compiler-menu"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("compiler-menu")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Online Compilers</h3><a class="jtp-list-group-item list-group-item-action" href="/compiler/python">Python Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/java">Java Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/php">PHP Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/c">C Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/cpp">C++ Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html">HTML Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/javascript">JavaScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/typescript">TypeScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/r">R Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/swift">Swift Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/kotlin">Kotlin Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/go">Go Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/csharp">C# Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/perl">Perl Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/groovy">Groovy Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html-css-javascript">HTML, CSS &amp; JavaScript Online Editor</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Multiple Choice Questions</h3><a class="jtp-list-group-item list-group-item-action" href="/python-mcq">Python MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/java-mcq">Java MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/php-mcq">PHP MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/c-language-mcq">C Programming MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cpp-mcq">C++ MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/html-mcq">HTML mcq </a><a class="jtp-list-group-item list-group-item-action" href="/javascript-mcq">JavaScript MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/sql-mcq">SQL MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/operating-system-mcq">Operating System MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-fundamental-mcq">Computer Fundamental MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-network-mcq">Computer Network MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/dbms-mcq">DBMS MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/data-structure-mcq">Data Structure MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/software-engineering-mcq">Software Engineering MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing-mcq">Cloud Computing MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-mcq">Artificial Intelligence MCQ</a></div></div></div></div></div></div></div></div><ul class="d-flex"><li><div class="theme-icon dark-mode-icon" onclick="toggleDarkMode()"><i class="fas fa-moon" id="dark-mode-icon"></i></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#059862","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1C2833","--sidebar":"#eef7f0","--hoverprimary":"#05593a","--codecompile":"#dce8dc"})' style="background-color:#059862"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#0D4549","--secondary":"#b6dde2","--light":"#FFFFFF","--dark":"#17202A","--sidebar":"#F0FAFB","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#0d4549"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#231760","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#e7f6fd","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#231760"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#286562","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#ECF0F1","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#286562"></div></li></ul></div></nav></div></div><div class="borderedelement"></div></div><script async="" src="https://cse.google.com/cse.js?cx=548338c60d2224ac4"></script><script>function applyTheme(e){const t=document.documentElement;Object.keys(e).forEach((o=>{t.style.setProperty(o,e[o])}))}function setThemeColors(e){localStorage.setItem("themeColors",JSON.stringify(e)),applyTheme(e)}window.addEventListener("load",(()=>{const e=JSON.parse(localStorage.getItem("themeColors"));e&&applyTheme(e)}))</script><script>function setThemeColors(t){const e=document.documentElement;Object.keys(t).forEach((o=>{e.style.setProperty(o,t[o])})),localStorage.setItem("themeColors",JSON.stringify(t))}function toggleDarkMode(){const t=document.body,e=document.getElementById("dark-mode-icon"),o=document.getElementById("logo");t.classList.toggle("night-mode")?(e.classList.remove("fa-moon"),e.classList.add("fa-sun"),localStorage.setItem("theme","night"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):(e.classList.remove("fa-sun"),e.classList.add("fa-moon"),localStorage.setItem("theme","day"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg")}window.addEventListener("load",(()=>{const t=JSON.parse(localStorage.getItem("themeColors")),e=localStorage.getItem("theme"),o=document.getElementById("logo");t&&setThemeColors(t),"night"===e?(document.body.classList.add("night-mode"),document.getElementById("dark-mode-icon").classList.remove("fa-moon"),document.getElementById("dark-mode-icon").classList.add("fa-sun"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg"}))</script></div><div class="xyz sticky-top shadow-sm;" id="tpointtech-images" style="z-index:99"><div id="link" style="clear:both;position:sticky;z-index:99"><div class="ddsmoothmenu"><span><button class="jt-nav float-left accordion accordion-flush" data-bs-target="#navbarCollapse" data-bs-toggle="jt-nav" onclick="toggleSidebar()" style="color:#fff;width:50px;margin-top:8px;margin-left:20px;font-size:20px;background:0 0;box-shadow:none;border:none" type="button"><span class="fa fa-bars"></span></button></span><ul class="nav" style="display:inline-flex;margin-left:auto;line-height:2rem"><li class="nav-item"><a class="nav-link" href="/python-tutorial"><img alt="Python Logo" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/python.svg" width="16"/> Python</a></li><li class="nav-item"><a class="nav-link" href="/java-tutorial"><img alt="java" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Java.svg" width="16"/> Java</a></li><li class="nav-item"><a class="nav-link" href="/javascript-tutorial"><img alt="javascript" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/JS.svg" width="16"/> JavaScript</a></li><li class="nav-item"><a class="nav-link" href="/sql-tutorial"><img alt="sql" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/SQL.svg" width="16"/> SQL</a></li><li class="nav-item"><a class="nav-link" href="/c-programming-language-tutorial"><img alt="c" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/C.svg" width="16"/> C</a></li><li class="nav-item"><a class="nav-link" href="/cpp-tutorial"><img alt="c++" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Cpp.svg" width="16"/> C++</a></li><li class="nav-item"><a class="nav-link" href="/html-tutorial"><img alt="html" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/HTML.svg" width="16"/> HTML</a></li><li class="nav-item"><a class="nav-link" href="/css-tutorial"><img alt="css" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/CSS.svg" width="16"/> CSS</a></li><li class="nav-item"><a class="nav-link" href="/reactjs-tutorial"><img alt="React" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/react.svg" width="16"/> React</a></li><li class="nav-item"><a class="nav-link" href="/nodejs-tutorial"><img alt="Node.js" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/nodejs.svg" width="16"/> Node.js</a></li><li class="nav-item"><a class="nav-link" href="/spring-boot-tutorial"><img alt="Spring Boot" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/spring-boot.svg" width="16"/> Spring Boot</a></li><li class="nav-item"><a class="nav-link" href="/c-sharp-tutorial"><img alt="c#" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/csharp.svg" width="16"/> C#</a></li><li class="nav-item"><a class="nav-link" href="/php-tutorial"><img alt="php" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/PHP.svg" width="16"/> PHP</a></li><li class="nav-item"><a class="nav-link" href="/mysql-tutorial"><img alt="MySQL" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mysql.svg" width="16"/> MySQL</a></li><li class="nav-item"><a class="nav-link" href="/mongodb-tutorial"><img alt="MongoDB" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mongodb.svg" width="16"/> MongoDB</a></li><li class="nav-item"><a class="nav-link" href="/artificial-intelligence-ai"><img alt="Artificial Intelligence" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/AI.svg" width="16"/> AI</a></li><li class="nav-item"><a class="nav-link" href="/machine-learning"><img alt="Machine Learning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/ML.svg" width="16"/> ML</a></li><li class="nav-item"><a class="nav-link" href="/data-structures-and-algorithms-dsa"><img alt="data structures" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DS.svg" width="16"/> DSA</a></li><li class="nav-item"><a class="nav-link" href="/dbms-tutorial"><img alt="dbms" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DBMS.svg" width="16"/> DBMS</a></li><li class="nav-item"><a class="nav-link" href="/operating-system"><img alt="Operating System" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/OS.svg" width="16"/> OS</a></li><li class="nav-item"><a class="nav-link" href="/aptitude/quantitative"><img alt="aptitude" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Aptitude.svg" width="16"/> Aptitude</a></li><li class="nav-item"><a class="nav-link" href="/reasoning"><img alt="reasoning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Reasoning.svg" width="16"/> Reasoning</a></li></ul></div></div></div><section class="course-details"><div class="container-fluid"><div class="row"><div class="col-md-2 sidebar" id="sidebar"><div id="menu-sidebar"><div class="accordion accordion-flush" id="accordionFlushExample"><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading0"><button aria-controls="flush-collapse0" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse0" data-bs-toggle="collapse" type="button">Python Tutorial</button></h2><div aria-labelledby="flush-heading0" class="accordion-collapse collapse show" id="flush-collapse0"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-tutorial">Python Tutorial</a></li><li class="leftmenu"><a href="/what-is-python">What is Python</a></li><li class="leftmenu"><a href="/python-features">Python Features</a></li><li class="leftmenu"><a href="/advantages-of-python">Advantages of Python</a></li><li class="leftmenu"><a href="/python-history">History of Python</a></li><li class="leftmenu"><a href="/python-applications">Python Applications</a></li><li class="leftmenu"><a href="/hello-world-program-in-python">Hello World Program in Python</a></li><li class="leftmenu"><a href="/how-to-install-python">How to Install Python?</a></li><li class="leftmenu"><a href="/python-syntax">Python Syntax</a></li><li class="leftmenu"><a href="/python-keywords">Python Keywords</a></li><li class="leftmenu"><a href="/python-literals">Python Literals</a></li><li class="leftmenu"><a href="/python-operators">Python Operators</a></li><li class="leftmenu"><a href="/python-comments">Python Comments</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading1"><button aria-controls="flush-collapse1" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse1" data-bs-toggle="collapse" type="button">Python Variable &amp; Data Type</button></h2><div aria-labelledby="flush-heading1" class="accordion-collapse collapse show" id="flush-collapse1"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-variables">Python Variables</a></li><li class="leftmenu"><a href="/python-data-types">Python Data Types</a></li><li class="leftmenu"><a href="/python-numbers">Python Numbers</a></li><li class="leftmenu"><a href="/type-casting-in-python-implicit-and-explicit-with-examples">Type Casting in Python</a></li><li class="leftmenu"><a href="/python-strings">Python Strings</a></li><li class="leftmenu"><a href="/python-string-methods">Python String Methods</a></li><li class="leftmenu"><a href="/boolean-data-type-in-python">Python Boolean</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading2"><button aria-controls="flush-collapse2" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse2" data-bs-toggle="collapse" type="button">Python Control Statements</button></h2><div aria-labelledby="flush-heading2" class="accordion-collapse collapse show" id="flush-collapse2"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-if-else">Python If else</a></li><li class="leftmenu"><a href="/python-loops">Python Loops</a></li><li class="leftmenu"><a href="/python-for-loop">Python For Loop</a></li><li class="leftmenu"><a href="/python-while-loop">Python While Loop</a></li><li class="leftmenu"><a href="/python-continue-statement">Python Continue</a></li><li class="leftmenu"><a href="/python-break-statement">Python Break</a></li><li class="leftmenu"><a href="/python-pass">Python Pass</a></li><li class="leftmenu"><a href="/difference-between-break-and-continue-in-python">Difference between Break and Continue in Python</a></li><li class="leftmenu"><a href="/difference-between-for-loop-and-while-loop-in-python">Difference Between For Loop and While Loop in Python</a></li><li class="leftmenu"><a href="/control-statements-in-python">Control Statements in Python</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading3"><button aria-controls="flush-collapse3" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse3" data-bs-toggle="collapse" type="button">Python Data Structures</button></h2><div aria-labelledby="flush-heading3" class="accordion-collapse collapse show" id="flush-collapse3"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-lists">Python Lists</a></li><li class="leftmenu"><a href="/python-list-methods">Python List Methods</a></li><li class="leftmenu"><a href="/python-tuples">Python Tuples</a></li><li class="leftmenu"><a href="/python-tuple-methods">Python Tuple Methods</a></li><li class="leftmenu"><a href="/difference-between-list-and-tuple-in-python">Difference between List and Tuple</a></li><li class="leftmenu"><a href="/python-sets">Python Sets</a></li><li class="leftmenu"><a href="/python-set-methods">Python Set Methods</a></li><li class="leftmenu"><a href="/python-dictionary">Python Dictionary</a></li><li class="leftmenu"><a href="/python-dictionary-methods">Python Dictionary Methods</a></li><li class="leftmenu"><a href="/difference-between-list-and-dictionary-in-python">Difference between List and Dictionary in Python</a></li><li class="leftmenu"><a href="/difference-between-list-set-tuple-and-dictionary-in-python">Difference between List, Set, Tuple, and Dictionary in Python</a></li><li class="leftmenu"><a href="/difference-between-set-and-dictionary-in-python">Difference between Set and Dictionary in Python</a></li><li class="leftmenu"><a href="/python-data-structures">Python Data Structures</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading4"><button aria-controls="flush-collapse4" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse4" data-bs-toggle="collapse" type="button">Python Functions</button></h2><div aria-labelledby="flush-heading4" class="accordion-collapse collapse show" id="flush-collapse4"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-functions">Python Functions</a></li><li class="leftmenu"><a href="/python-built-in-functions">Python Built-in Functions</a></li><li class="leftmenu"><a href="/python-lambda-functions">Python Lambda Functions</a></li><li class="leftmenu"><a href="/def-function-in-python">def Function in Python</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading5"><button aria-controls="flush-collapse5" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse5" data-bs-toggle="collapse" type="button">Python Modules</button></h2><div aria-labelledby="flush-heading5" class="accordion-collapse collapse show" id="flush-collapse5"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-modules">Python Modules</a></li><li class="leftmenu"><a href="/python-list-comprehension">Python List Comprehension</a></li><li class="leftmenu"><a href="/python-collection-module">Python Collection Module</a></li><li class="leftmenu"><a href="/python-math-module">Python Math Module</a></li><li class="leftmenu"><a href="/python-os-module">Python OS Module</a></li><li class="leftmenu"><a href="/python-random-module">Python Random Module</a></li><li class="leftmenu"><a href="/python-statistics-module">Python Statistics Module</a></li><li class="leftmenu"><a href="/python-sys-module">Python Sys Module</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading6"><button aria-controls="flush-collapse6" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse6" data-bs-toggle="collapse" type="button">Python OOPs</button></h2><div aria-labelledby="flush-heading6" class="accordion-collapse collapse show" id="flush-collapse6"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-oops-concepts">Python OOPs Concepts</a></li><li class="leftmenu"><a href="/python-classes-and-objects">Python Classes and Objects</a></li><li class="leftmenu"><a href="/python-constructors">Python Constructors</a></li><li class="leftmenu"><a href="/inheritance-in-python">Python Inheritance</a></li><li class="leftmenu"><a href="/abstraction-in-python">Abstraction in Python</a></li><li class="leftmenu"><a href="/encapsulation-in-python">Encapsulation in Python</a></li><li class="leftmenu"><a href="/access-modifiers-in-python">Access Modifiers in Python</a></li><li class="leftmenu"><a href="/method-overloading-in-python">Method Overloading in Python</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading7"><button aria-controls="flush-collapse7" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse7" data-bs-toggle="collapse" type="button">Python Exception Handling</button></h2><div aria-labelledby="flush-heading7" class="accordion-collapse collapse show" id="flush-collapse7"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-exception-handling">Exception Handling in Python</a></li><li class="leftmenu"><a href="/how-to-catch-multiple-exceptions-in-python">How to Catch Multiple Exceptions in Python?</a></li><li class="leftmenu"><a href="/python-raise-an-exception">Python Raise an Exception</a></li><li class="leftmenu"><a href="/finally-keyword-in-python">Finally Keyword in Python</a></li><li class="leftmenu"><a href="/python-built-in-exceptions">Python Built-in Exceptions</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading8"><button aria-controls="flush-collapse8" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse8" data-bs-toggle="collapse" type="button">Python File Handling</button></h2><div aria-labelledby="flush-heading8" class="accordion-collapse collapse show" id="flush-collapse8"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-file-handling">Python Files I/O</a></li><li class="leftmenu"><a href="/python-read-csv-file">Python Read CSV File</a></li><li class="leftmenu"><a href="/python-write-csv-file">Python Write CSV File</a></li><li class="leftmenu"><a href="/python-read-excel-file">Read Excel File</a></li><li class="leftmenu"><a href="/python-write-excel-file">Write Excel File</a></li><li class="leftmenu"><a href="/python-json">Python JSON</a></li><li class="leftmenu"><a href="/context-manager-in-python">Context Manager in Python</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading9"><button aria-controls="flush-collapse9" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse9" data-bs-toggle="collapse" type="button">Python Searching &amp; Sorting</button></h2><div aria-labelledby="flush-heading9" class="accordion-collapse collapse show" id="flush-collapse9"><div class="accordion-body"><ul><li class="leftmenu"><a href="/searching-algorithms-in-python">Searching algorithms in Python</a></li><li class="leftmenu"><a href="/linear-search-in-python">Linear Search in Python</a></li><li class="leftmenu"><a href="/binary-search-in-python">Binary Search in Python</a></li><li class="leftmenu"><a href="/sorting-algorithms-in-python">Sorting Algorithms in Python</a></li><li class="leftmenu"><a href="/bubble-sort-in-python">Bubble Sort in Python</a></li><li class="leftmenu"><a href="/insertion-sort-in-python">Insertion Sort in Python</a></li><li class="leftmenu"><a href="/selection-sort-in-python">Selection Sort in Python</a></li><li class="leftmenu"><a href="/merge-sort-in-python">Merge Sort in Python</a></li><li class="leftmenu"><a href="/quick-sort-in-python">Quick Sort in Python</a></li><li class="leftmenu"><a href="/heap-sort-in-python">Heap Sort in Python</a></li><li class="leftmenu"><a href="/tim-sort-in-python">Tim Sort in Python</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading10"><button aria-controls="flush-collapse10" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse10" data-bs-toggle="collapse" type="button">Python Advanced Topics</button></h2><div aria-labelledby="flush-heading10" class="accordion-collapse collapse show" id="flush-collapse10"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-decorator">Python Decorator</a></li><li class="leftmenu"><a href="/python-generators">Python Generators</a></li><li class="leftmenu"><a href="/python-multiprocessing">Python Multiprocessing</a></li><li class="leftmenu"><a href="/python-regex">Python Regex</a></li><li class="leftmenu"><a href="/python-sending-email">Python Sending Email</a></li><li class="leftmenu"><a href="/python-datetime">Python Date</a></li><li class="leftmenu"><a href="/python-assert-keyword">Python Assert</a></li><li class="leftmenu"><a href="/python-ides">Python IDEs</a></li><li class="leftmenu"><a href="/python-arrays">Python Arrays</a></li><li class="leftmenu"><a href="/python-command-line-arguments">Command Line Arguments</a></li><li class="leftmenu"><a href="/python-magic-method">Python Magic Method</a></li><li class="leftmenu"><a href="/python-stack-and-queue">Python Stack &amp; Queue</a></li><li class="leftmenu"><a href="/pyspark-mllib">PySpark MLlib</a></li><li class="leftmenu"><a href="/web-scraping-using-python">Web Scraping Using Python</a></li><li class="leftmenu"><a href="/python-itertools">Python Itertools</a></li><li class="leftmenu"><a href="/how-to-calculate-distance-between-two-points-using-geopy">How to Calculate Distance between Two Points using GEOPY</a></li><li class="leftmenu"><a href="/gmail-api-in-python">Gmail API in Python</a></li><li class="leftmenu"><a href="/how-to-plot-the-google-map-using-folium-package-in-python">How to Plot the Google Map using folium package in Python</a></li><li class="leftmenu"><a href="/grid-search-in-python">Grid Search in Python</a></li><li class="leftmenu"><a href="/python-high-order-function">Python High Order Function</a></li><li class="leftmenu"><a href="/nsetools-in-python">nsetools in Python</a></li><li class="leftmenu"><a href="/python-program-to-find-the-nth-fibonacci-number">Python program to find the nth Fibonacci Number</a></li><li class="leftmenu"><a href="/python-opencv-object-detection">Python OpenCV object detection</a></li><li class="leftmenu"><a href="/python-simpleimputer-module">Python SimpleImputer module</a></li><li class="leftmenu"><a href="/second-largest-number-in-python">Second Largest Number in Python</a></li><li class="leftmenu"><a href="/tower-of-hanoi-puzzle-using-python">Tower of Hanoi Puzzle Using Python</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading11"><button aria-controls="flush-collapse11" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse11" data-bs-toggle="collapse" type="button">Python MySQL</button></h2><div aria-labelledby="flush-heading11" class="accordion-collapse collapse show" id="flush-collapse11"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-mysql-environment-setup">Python MySQL Environment Setup</a></li><li class="leftmenu"><a href="/python-mysql-database-connection">Database Connection</a></li><li class="leftmenu"><a href="/python-mysql-create-new-database">Creating New Database</a></li><li class="leftmenu"><a href="/python-mysql-create-table">Creating Tables</a></li><li class="leftmenu"><a href="/python-mysql-insert-operation">Insert Operation</a></li><li class="leftmenu"><a href="/python-mysql-select-query">Read Operation</a></li><li class="leftmenu"><a href="/python-mysql-update-table">Update Operation</a></li><li class="leftmenu"><a href="/python-mysql-join-operation">Join Operation</a></li><li class="leftmenu"><a href="/python-mysql-performing-transactions">Performing Transactions</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading12"><button aria-controls="flush-collapse12" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse12" data-bs-toggle="collapse" type="button">Python MongoDB</button></h2><div aria-labelledby="flush-heading12" class="accordion-collapse collapse show" id="flush-collapse12"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-mongodb">Python MongoDB</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading13"><button aria-controls="flush-collapse13" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse13" data-bs-toggle="collapse" type="button">Python SQLite</button></h2><div aria-labelledby="flush-heading13" class="accordion-collapse collapse show" id="flush-collapse13"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-sqlite">Python SQLite</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading14"><button aria-controls="flush-collapse14" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse14" data-bs-toggle="collapse" type="button">Python MCQ</button></h2><div aria-labelledby="flush-heading14" class="accordion-collapse collapse show" id="flush-collapse14"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-mcq">Python MCQ</a></li><li class="leftmenu"><a href="/python-mcq-part-2">Python MCQ Part 2</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading15"><button aria-controls="flush-collapse15" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse15" data-bs-toggle="collapse" type="button">Python Tkinter (GUI)</button></h2><div aria-labelledby="flush-heading15" class="accordion-collapse collapse show" id="flush-collapse15"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-tkinter">Python Tkinter</a></li><li class="leftmenu"><a href="/python-tkinter-button">Tkinter Button</a></li><li class="leftmenu"><a href="/python-tkinter-canvas">Tkinter Canvas</a></li><li class="leftmenu"><a href="/python-tkinter-checkbutton">Tkinter Checkbutton</a></li><li class="leftmenu"><a href="/python-tkinter-entry">Tkinter Entry</a></li><li class="leftmenu"><a href="/python-tkinter-frame">Tkinter Frame</a></li><li class="leftmenu"><a href="/python-tkinter-label">Tkinter Label</a></li><li class="leftmenu"><a href="/python-tkinter-listbox">Tkinter Listbox</a></li><li class="leftmenu"><a href="/python-tkinter-menubutton">Tkinter Menubutton</a></li><li class="leftmenu"><a href="/python-tkinter-menu">Tkinter Menu</a></li><li class="leftmenu"><a href="/python-tkinter-message">Tkinter Message</a></li><li class="leftmenu"><a href="/python-tkinter-radiobutton">Tkinter Radiobutton</a></li><li class="leftmenu"><a href="/python-tkinter-scale">Tkinter Scale</a></li><li class="leftmenu"><a href="/python-tkinter-scrollbar">Tkinter Scrollbar</a></li><li class="leftmenu"><a href="/python-tkinter-text">Tkinter Text</a></li><li class="leftmenu"><a href="/python-tkinter-toplevel">Tkinter Toplevel</a></li><li class="leftmenu"><a href="/python-tkinter-spinbox">Tkinter Spinbox</a></li><li class="leftmenu"><a href="/python-tkinter-panedwindow">Tkinter PanedWindow</a></li><li class="leftmenu"><a href="/python-tkinter-labelframe">Tkinter LabelFrame</a></li><li class="leftmenu"><a href="/python-tkinter-messagebox">Tkinter MessageBox</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading16"><button aria-controls="flush-collapse16" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse16" data-bs-toggle="collapse" type="button">Python Web Blocker</button></h2><div aria-labelledby="flush-heading16" class="accordion-collapse collapse show" id="flush-collapse16"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-website-blocker">Python Website Blocker</a></li><li class="leftmenu"><a href="/python-website-blocker-building-python-script">Building Python Script</a></li><li class="leftmenu"><a href="/python-website-blocker-script-deployment-on-linux">Script Deployment on Linux</a></li><li class="leftmenu"><a href="/python-website-blocker-script-deployment-on-windows">Script Deployment on Windows</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading17"><button aria-controls="flush-collapse17" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse17" data-bs-toggle="collapse" type="button">Python Built-in Functions</button></h2><div aria-labelledby="flush-heading17" class="accordion-collapse collapse show" id="flush-collapse17"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-abs-function">Python abs()</a></li><li class="leftmenu"><a href="/python-all-function">Python all()</a></li><li class="leftmenu"><a href="/python-bin-function">Python bin()</a></li><li class="leftmenu"><a href="/python-bool-function">Python bool()</a></li><li class="leftmenu"><a href="/python-bytes-function">Python bytes()</a></li><li class="leftmenu"><a href="/python-callable-function">Python callable()</a></li><li class="leftmenu"><a href="/python-compile-function">Python compile()</a></li><li class="leftmenu"><a href="/python-exec-function">Python exec()</a></li><li class="leftmenu"><a href="/python-sum-function">Python sum()</a></li><li class="leftmenu"><a href="/python-any-function">Python any()</a></li><li class="leftmenu"><a href="/python-ascii-function">Python ascii()</a></li><li class="leftmenu"><a href="/python-bytearray-function">Python bytearray()</a></li><li class="leftmenu"><a href="/python-eval-function">Python eval()</a></li><li class="leftmenu"><a href="/python-float-function">Python float()</a></li><li class="leftmenu"><a href="/python-format-function">Python format()</a></li><li class="leftmenu"><a href="/python-frozenset-function">Python frozenset()</a></li><li class="leftmenu"><a href="/python-getattr-function">Python getattr()</a></li><li class="leftmenu"><a href="/python-globals-function">Python globals()</a></li><li class="leftmenu"><a href="/python-hasattr-function">Python hasattr()</a></li><li class="leftmenu"><a href="/python-iter-function">Python iter()</a></li><li class="leftmenu"><a href="/python-len-function">Python len()</a></li><li class="leftmenu"><a href="/python-list-function">Python list()</a></li><li class="leftmenu"><a href="/python-locals-function">Python locals()</a></li><li class="leftmenu"><a href="/python-map-function">Python map()</a></li><li class="leftmenu"><a href="/python-memoryview-function">Python memoryview()</a></li><li class="leftmenu"><a href="/python-object-function">Python object()</a></li><li class="leftmenu"><a href="/python-open-function">Python open()</a></li><li class="leftmenu"><a href="/python-ord-function">Python ord()</a></li><li class="leftmenu"><a href="/python-pow-function">Python pow()</a></li><li class="leftmenu"><a href="/python-print-function">Python print()</a></li><li class="leftmenu"><a href="/python-reversed-function">Python reversed()</a></li><li class="leftmenu"><a href="/python-range-function">Python range()</a></li><li class="leftmenu"><a href="/python-round-function">Python round()</a></li><li class="leftmenu"><a href="/python-str-function">Python str()</a></li><li class="leftmenu"><a href="/python-tuple-function">Python tuple()</a></li><li class="leftmenu"><a href="/python-type-function">Python type()</a></li><li class="leftmenu"><a href="/python-vars-function">Python vars()</a></li><li class="leftmenu"><a href="/python-zip-function">Python zip()</a></li><li class="leftmenu"><a href="/python-chr-function">Python chr()</a></li><li class="leftmenu"><a href="/python-complex-function">Python complex()</a></li><li class="leftmenu"><a href="/python-delattr-function">Python delattr()</a></li><li class="leftmenu"><a href="/python-dir-function">Python dir()</a></li><li class="leftmenu"><a href="/python-divmod-function">Python divmod()</a></li><li class="leftmenu"><a href="/python-enumerate-function">Python enumerate()</a></li><li class="leftmenu"><a href="/python-dict-function">Python dict()</a></li><li class="leftmenu"><a href="/python-filter-function">Python filter()</a></li><li class="leftmenu"><a href="/python-hash-function">Python hash()</a></li><li class="leftmenu"><a href="/python-help-function">Python help()</a></li><li class="leftmenu"><a href="/python-min-function">Python min()</a></li><li class="leftmenu"><a href="/python-set-function">Python set()</a></li><li class="leftmenu"><a href="/python-hex-function">Python hex()</a></li><li class="leftmenu"><a href="/python-id-function">Python id()</a></li><li class="leftmenu"><a href="/python-setattr-function">Python setattr()</a></li><li class="leftmenu"><a href="/python-slice-function">Python slice()</a></li><li class="leftmenu"><a href="/python-sorted-function">Python sorted()</a></li><li class="leftmenu"><a href="/python-next-function">Python next()</a></li><li class="leftmenu"><a href="/python-input-function">Python input()</a></li><li class="leftmenu"><a href="/python-int-function">Python int()</a></li><li class="leftmenu"><a href="/python-isinstance-function">Python isinstance()</a></li><li class="leftmenu"><a href="/python-oct-function">Python oct()</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading18"><button aria-controls="flush-collapse18" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse18" data-bs-toggle="collapse" type="button">Python String functions</button></h2><div aria-labelledby="flush-heading18" class="accordion-collapse collapse show" id="flush-collapse18"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-string-capitalize-method">capitalize()</a></li><li class="leftmenu"><a href="/python-string-casefold-method">casefold()</a></li><li class="leftmenu"><a href="/python-string-center-method">center(width ,fillchar)</a></li><li class="leftmenu"><a href="/python-string-count-method">count(string,begin,end)</a></li><li class="leftmenu"><a href="/python-string-encode-method">encode()</a></li><li class="leftmenu"><a href="/python-string-endswith-method">endswith(suffix ,begin=0,end=len(string))</a></li><li class="leftmenu"><a href="/python-string-expandtabs-method">expandtabs(tabsize = 8)</a></li><li class="leftmenu"><a href="/python-string-find-method">find(substring ,beginIndex, endIndex)</a></li><li class="leftmenu"><a href="/python-string-format-method">format(value)</a></li><li class="leftmenu"><a href="/python-string-index-method">index(subsring, beginIndex, endIndex)</a></li><li class="leftmenu"><a href="/python-string-isalnum-method">isalnum()</a></li><li class="leftmenu"><a href="/python-string-isalpha-method">isalpha()</a></li><li class="leftmenu"><a href="/python-string-isdecimal-method">isdecimal()</a></li><li class="leftmenu"><a href="/python-string-isdigit-method">isdigit()</a></li><li class="leftmenu"><a href="/python-string-isidentifier-method">isidentifier()</a></li><li class="leftmenu"><a href="/python-string-islower-method">islower()</a></li><li class="leftmenu"><a href="/python-string-isnumeric-method">isnumeric()</a></li><li class="leftmenu"><a href="/python-string-isprintable-method">isprintable()</a></li><li class="leftmenu"><a href="/python-string-isupper-method">isupper()</a></li><li class="leftmenu"><a href="/python-string-isspace-method">isspace()</a></li><li class="leftmenu"><a href="/python-string-istitle-method">istitle()</a></li><li class="leftmenu"><a href="/python-string-isupper-method">isupper()</a></li><li class="leftmenu"><a href="/python-string-join-method">join(seq)</a></li><li class="leftmenu"><a href="/python-string-ljust-method">ljust(width[,fillchar])</a></li><li class="leftmenu"><a href="/python-string-lower-method">lower()</a></li><li class="leftmenu"><a href="/python-string-lstrip-method">lstrip()</a></li><li class="leftmenu"><a href="/python-string-partition-method">partition()</a></li><li class="leftmenu"><a href="/python-string-replace-method">Python String replace() Method</a></li><li class="leftmenu"><a href="/python-string-rfind-method">rfind(str,beg=0,end=len(str))</a></li><li class="leftmenu"><a href="/python-string-rindex-method">rindex(str,beg=0,end=len(str))</a></li><li class="leftmenu"><a href="/python-string-rjust-method">rjust(width,[,fillchar])</a></li><li class="leftmenu"><a href="/python-string-rstrip-method">rstrip()</a></li><li class="leftmenu"><a href="/python-string-rsplit-method">rsplit(sep=None, maxsplit = -1)</a></li><li class="leftmenu"><a href="/python-string-split-method">split(str,num=string.count(str))</a></li><li class="leftmenu"><a href="/python-string-splitlines-method">splitlines(num=string.count('\n'))</a></li><li class="leftmenu"><a href="/python-string-startswith-method">startswith(str,beg=0,end=len(str))</a></li><li class="leftmenu"><a href="/python-string-swapcase-method">swapcase()</a></li><li class="leftmenu"><a href="/python-string-translate-method">translate(table,deletechars = '')</a></li><li class="leftmenu"><a href="/python-string-upper-method">upper()</a></li><li class="leftmenu"><a href="/python-string-zfill-method">zfill(width)</a></li><li class="leftmenu"><a href="/python-string-rpartition-method">rpartition()</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading19"><button aria-controls="flush-collapse19" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse19" data-bs-toggle="collapse" type="button">Python List</button></h2><div aria-labelledby="flush-heading19" class="accordion-collapse collapse show" id="flush-collapse19"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-list-append-method">Python List append() Method</a></li><li class="leftmenu"><a href="/python-list-clear-method">Python List clear() Method</a></li><li class="leftmenu"><a href="/python-list-count-method">Python List count() Method</a></li><li class="leftmenu"><a href="/python-list-pop-method">Python List pop() Method</a></li><li class="leftmenu"><a href="/python-list-insert-method">Python List insert(i,x) Method</a></li><li class="leftmenu"><a href="/python-list-index-method">Python list index() method</a></li><li class="leftmenu"><a href="/python-list-sort-method">Python List sort() Method</a></li><li class="leftmenu"><a href="/python-list-copy-method">Python List copy() Method</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading20"><button aria-controls="flush-collapse20" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse20" data-bs-toggle="collapse" type="button">Python Dictionary</button></h2><div aria-labelledby="flush-heading20" class="accordion-collapse collapse show" id="flush-collapse20"><div class="accordion-body"><ul><li class="leftmenu"><a href="/python-dictionary-pop-method">Python Dictionary pop() Method</a></li><li class="leftmenu"><a href="/python-dictionary-values-method">Python Dictionary values() Method</a></li><li class="leftmenu"><a href="/python-dictionary-setdefault-method">Python Dictionary setdefault() Method</a></li><li class="leftmenu"><a href="/python-dictionary-clear-method">Python Dictionary clear() Method</a></li><li class="leftmenu"><a href="/python-dictionary-fromkeys-method">Python Dictionary fromkeys() Method</a></li><li class="leftmenu"><a href="/python-dictionary-keys-method">Python Dictionary keys() Method</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading21"><button aria-controls="flush-collapse21" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse21" data-bs-toggle="collapse" type="button">Plotly</button></h2><div aria-labelledby="flush-heading21" class="accordion-collapse collapse show" id="flush-collapse21"><div class="accordion-body"><ul><li class="leftmenu"><a href="/plotly-with-matplotlib-and-chart-studio">Plotly with Matplotlib and Chart Studio</a></li><li class="leftmenu"><a href="/plotly-with-pandas-and-cufflinks">Plotly with Pandas and Cufflinks</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading22"><button aria-controls="flush-collapse22" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse22" data-bs-toggle="collapse" type="button">Related Tutorials</button></h2><div aria-labelledby="flush-heading22" class="accordion-collapse collapse show" id="flush-collapse22"><div class="accordion-body"><ul><li class="leftmenu"><a href="/pytorch">Pytorch Tutorial</a></li><li class="leftmenu"><a href="/pygame">Pygame Tutorial</a></li><li class="leftmenu"><a href="/python-openpyxl">Openpyxl Tutorial</a></li><li class="leftmenu"><a href="/python-cgi-programming">Python CGI Programming</a></li><li class="leftmenu"><a href="/python-design-pattern">Python Design Pattern</a></li></ul></div></div></div></div></div></div><div class="col-12 col-md-7"><div class="overview"><div id="city"><table><tbody><tr><td><div id="bottomnextup"><a class="next" href="python-lambda-functions">next →</a> <a class="next" href="python-functions">← prev</a></div><h1 class="h1">Python Built-in Functions</h1><div style="font-size:14px;margin-top:5px;margin-bottom:5px;color:#6f6e6e"><span>25 Sept 2025</span> | <span><i aria-hidden="true" class="fa fa-clock-o"></i> 19 min read</span></div><p>The Python built-in functions are defined as the functions whose functionality is pre-defined in Python. The Python interpreter has several functions that are always present for use. These functions are known as Built-in Functions. There are several built-in functions in <a href="python-tutorial">Python</a>, which are listed below:</p><h2 class="h2">Python abs() Function</h2><p>The <a href="python-abs-function">Python abs() function</a> is used to return the absolute value of a number. It takes only one argument, a number whose absolute value is to be returned. The argument can be an integer or a floating-point number. If the argument is a complex number, then abs() returns its magnitude.</p><h3 class="h3">Example</h3><div class="codeblock"><textarea class="python" name="code">#  integer number     
integer = -20  
print('Absolute value of -40 is:', abs(integer))  
  
#  floating number  
floating = -20.83  
print('Absolute value of -40.83 is:', abs(floating))  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Absolute value of -20 is: 20
Absolute value of -20.83 is: 20.83
</pre></div><h2 class="h2">Python all() Function</h2><p>The <a href="python-all-function">Python all() </a>function accepts an iterable object (such as a list, dictionary, etc.). It returns true if all items in the passed iterable are true. Otherwise, it returns False. If the iterable object is empty, the all() function returns True.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># all values true  
k = [1, 3, 4, 6]  
print(all(k))  
  
# all values false  
k = [0, False]  
print(all(k))  
  
# one false value  
k = [1, 3, 7, 0]  
print(all(k))  
  
# one true value  
k = [0, False, 5]  
print(all(k))  
  
# empty iterable  
k = []  
print(all(k))  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
True
False
False
False
True
</pre></div><h2 class="h2">Python bin() Function</h2><p>The <a href="python-bin-function">Python <strong>bin()</strong> </a>function is used to return the binary representation of a specified integer. A result always starts with the prefix 0b.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">x =  10
y =  bin(x)
print (y)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
0b1010
</pre></div><h2 class="h2">Python bool()</h2><p>The <a href="python-bool-function">Python <strong>bool()</strong> </a>converts a value to a Boolean (True or False) using the standard truth testing procedure.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">test1 = []
print(test1,'is',bool(test1))
test1 = [0]
print(test1,'is',bool(test1))
test1 = 0.0
print(test1,'is',bool(test1))
test1 = None
print(test1,'is',bool(test1))
test1 = True
print(test1,'is',bool(test1))
test1 = 'Easy string'
print(test1,'is',bool(test1))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
[] is False
[0] is True
0.0 is False
None is False
True is True
Easy string is True
</pre></div><h2 class="h2">Python bytes()</h2><p>The <a href="python-bytes-function">Python <strong>bytes()</strong> </a>in Python is used for returning a <strong>bytes</strong> object. It is an immutable version of the bytearray() function.</p><p>It can create an empty bytes object of the specified size.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">string = "Hello World."
array = bytes(string, 'utf-8')
print(array)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
b ' Hello World.'
</pre></div><h2 class="h2">Python callable() Function</h2><p>A <a href="python-callable-function">Python callable() </a>function is a built-in function that checks and returns true if the object passed appears to be callable, otherwise false.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">x = 8
print(callable(x))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
False
</pre></div><h2 class="h2">Python compile() Function</h2><p>The <a href="python-compile-function">Python compile() </a>function takes source code as input and returns a code object, which can later be executed by the exec() function.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># compile string source to code  
code_str = 'x=5\ny=10\nprint("sum =",x+y)'  
code = compile(code_str, 'sum.py', 'exec')  
print(type(code))  
exec(code)  
exec(x)  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
&lt;class 'code'&gt;
sum = 15
</pre></div><h2 class="h2">Python exec() Function</h2><p>The <a href="python-exec-function">Python exec() </a>function is used for the dynamic execution of a Python program, which can either be a string or object code, and it accepts large blocks of code, unlike the eval() function, which only accepts a single expression.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">x = 8
exec('print(x==8)')
exec('print(x+4)')
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
True
12
</pre></div><h2 class="h2">Python sum() Function</h2><p>As the name says, <a href="python-sum-function">the Python sum() </a>function is used to get the sum of numbers in an iterable, i.e., a list.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">s = sum([1, 2,4 ])
print(s)

s = sum([1, 2, 4], 10)
print(s)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
7
17
</pre></div><h2 class="h2">Python any() Function</h2><p>The <a href="python-any-function">Python any() </a>function returns true if any item in an iterable is true. Otherwise, it returns False.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">l = [4, 3, 2, 0]                            
print(any(l))                                 

l = [0, False]
print(any(l))

l = [0, False, 5]
print(any(l))

l = []
print(any(l))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
True
False
True
False
</pre></div><h2 class="h2">Python ascii() Function</h2><p>The <a href="python-ascii-function">Python <strong>ascii()</strong> </a>function returns a string containing a printable representation of an object and escapes the non-ASCII characters in the string using \x, \u, or \U escapes.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">normalText = 'Python is interesting'  
print(ascii(normalText))  
  
otherText = 'Python is interesting'  
print(ascii(otherText))  
 
print('Pyth\xf6n is interesting')  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
'Python is interesting'
'Pyth\xf6n is interesting'
Python is interesting
</pre></div><h2 class="h2">Python bytearray()</h2><p>The <a href="python-bytearray-function">Python <strong>bytearray()</strong> </a>returns a bytearray object and can convert objects into bytearray objects, or create an empty bytearray object of the specified size.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">string = "Python is a programming language."

# string with encoding 'utf-8'
arr = bytearray(string, 'utf-8')
print(arr)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
bytearray(b'Python is a programming language.')
</pre></div><h2 class="h2">Python eval() Function</h2><p>The <a href="python-eval-function">Python <strong>eval()</strong> </a>function parses the expression passed to it and runs the Python expression(code) within the program.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">x = 8
print(eval('x + 1'))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
9
</pre></div><h2 class="h2">Python float()</h2><p>The <a href="python-float-function">Python float() </a>function returns a floating-point number from a number or string.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># for integers
print(float(9))

# for floats
print(float(8.19))

# for string floats
print(float("-24.27"))

# for string floats with whitespaces
print(float("     -17.19\n"))

# string float error
print(float("xyz"))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
9.0
8.19
-24.27
-17.19
ValueError: could not convert string to float: 'xyz'
</pre></div><h2 class="h2">Python format() Function</h2><p>The <a href="python-format-function">Python format() </a>function returns a formatted representation of the given value.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># d, f and b are a type

# integer
print(format(123, "d"))

# float arguments
print(format(123.4567898, "f"))

# binary format
print(format(12, "b"))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
123
123.456790
1100
</pre></div><h2 class="h2">Python frozenset()</h2><p>The <a href="python-frozenset-function">Python frozenset() </a>function returns an immutable frozenset object initialized with elements from the given iterable.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># tuple of letters
letters = ('m', 'r', 'o', 't', 's')

fSet = frozenset(letters)
print('Frozen set is:', fSet)
print('Empty frozen set is:', frozenset())
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Frozen set is: frozenset({'o', 'm', 's', 'r', 't'})
Empty frozen set is: frozenset()
</pre></div><h2 class="h2">Python getattr() Function</h2><p>The <a href="python-getattr-function">Python getattr() </a>function returns the value of a named attribute of an object. If it is not found, it returns the default value.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">class Details:
    age = 22
    name = "Phill"

details = Details()
print('The age is:', getattr(details, "age"))
print('The age is:', details.age)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
The age is: 22
The age is: 22
</pre></div><h2 class="h2">Python globals() Function</h2><p>The <a href="python-globals-function">Python globals() </a>function returns the dictionary of the current global symbol table.</p><p>A Symbol table is defined as a data structure that contains all the necessary information about the program. It includes <a href="python-variables">variable</a> names, methods, classes, etc.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">age = 22

globals()['age'] = 22
print('The age is:', age)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
The age is: 22
</pre></div><h2 class="h2">Python any() Function</h2><p>The <a href="python-any-function">Python <strong>any()</strong> </a>function returns true if any item in an iterable is true; otherwise, it returns False.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">l = [4, 3, 2, 0]                              
print(any(l))                                   
  
l = [0, False]  
print(any(l))  
  
l = [0, False, 5]  
print(any(l))  
  
l = []  
print(any(l))  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
True
False
True
False
</pre></div><h2 class="h2">Python iter() Function</h2><p>The <a href="python-iter-function">Python <strong>iter()</strong> </a>function is used to return an iterator object. It creates an object that can be iterated over one element at a time.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># list of numbers
list = [1,2,3,4,5]

listIter = iter(list)

# prints '1'
print(next(listIter))

# prints '2'
print(next(listIter))

# prints '3'
print(next(listIter))

# prints '4'
print(next(listIter))

# prints '5'
print(next(listIter))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
1
2
3
4
5
</pre></div><h2 class="h2">Python len() Function</h2><p>The <a href="python-len-function">Python <strong>len()</strong> </a>function is used to return the length (the number of items) of an object.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">strA = 'Python'
print(len(strA))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
6
</pre></div><h2 class="h2">Python list()</h2><p>The <a href="python-list-function">Python list() </a>creates a list in Python.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># empty list
print(list())

# string
String = 'abcde'     
print(list(String))

# tuple
Tuple = (1,2,3,4,5)
print(list(Tuple))
# list
List = [1,2,3,4,5]
print(list(List))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
[]
['a', 'b', 'c', 'd', 'e']
[1,2,3,4,5]
[1,2,3,4,5]
</pre></div><h2 class="h2">Python locals() Function</h2><p>The <a href="python-locals-function">Python locals() </a>method updates and returns the dictionary of the current local symbol table.</p><p>A Symbol table is defined as a data structure that contains all the necessary information about the program. It includes variable names, methods, classes, etc.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">def localsAbsent():
    return locals()

def localsPresent():
    present = True
    return locals()

print('localsNotPresent:', localsAbsent())
print('localsPresent:', localsPresent())
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
localsAbsent: {}
localsPresent: {'present': True}
</pre></div><h2 class="h2">Python map() Function</h2><p>The <a href="python-map-function">Python map() </a>function is used to return a list of results after applying a given function to each item of an iterable(list, tuple, etc.).</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">def calculateAddition(n):
  return n+n

numbers = (1, 2, 3, 4)
result = map(calculateAddition, numbers)
print(result)

# converting map object to set
numbersAddition = set(result)
print(numbersAddition)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
&lt;map object at 0x7fb04a6bec18&gt;
{8, 2, 4, 6}
</pre></div><h2 class="h2">Python memoryview() Function</h2><p>The <a href="python-memoryview-function">Python memoryview() </a>function returns a memoryview object of the given argument.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">#A random bytearray
randomByteArray = bytearray('ABC', 'utf-8')

mv = memoryview(randomByteArray)

# access the memory view's zeroth index
print(mv[0])

# It create byte from memory view
print(bytes(mv[0:2]))

# It create list from memory view
print(list(mv[0:3]))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
65
b'AB'
[65, 66, 67]
</pre></div><h2 class="h2">Python object()</h2><p>The <a href="python-object-function">Python object() </a>returns an empty object. It is a base for all the classes and holds the built-in properties and methods that are default for all the classes.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">python = object()

print(type(python))
print(dir(python))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
&lt;class 'object'&gt;
['__class__', '__delattr__', '__dir__', '__doc__', '__eq__', '__format__', '__ge__', 
'__getattribute__', '__gt__', '__hash__', '__init__', '__le__', '__lt__', '__ne__', 
'__new__', '__reduce__', '__reduce_ex__', '__repr__', '__setattr__', '__sizeof__', 
'__str__', '__subclasshook__']
</pre></div><h2 class="h2">Python open() Function</h2><p>The <a href="python-open-function">Python open() </a>function opens the file and returns a corresponding file object.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># opens python.text file of the current directory
f = open("python.txt")
# specifying full path
f = open("C:/Python33/README.txt")
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Since the mode is omitted, the file is opened in 'r' mode; opens for reading.
</pre></div><h2 class="h2">Python chr() Function</h2><p><a href="python-chr-function">The Python chr() </a>function is used to get a string representing a character that points to a Unicode code point. For example, chr(97) returns the string 'a'. This function takes an integer argument and throws an error if it exceeds the specified range. The standard range of the argument is from 0 to 1,114,111.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function
result = chr(102) # It returns string representation of a char
result2 = chr(112)
# Displaying result
print(result)
print(result2)
# Verify, is it string type?
print("is it string type:", type(result) is str)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
ValueError: chr() arg not in range(0x110000)
</pre></div><h2 class="h2">Python complex()</h2><p><a href="python-complex-function">Python's complex() </a>function is used to convert numbers or strings into a complex number. This method takes two optional parameters and returns a complex number. The first parameter is called the real part, and the second is the imaginary part.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Python complex() function example
# Calling function
a = complex(1) # Passing single parameter
b = complex(1,2) # Passing both parameters
# Displaying result
print(a)
print(b)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
(1.5+0j)
(1.5+2.2j)
</pre></div><h2 class="h2">Python delattr() Function</h2><p><a href="python-delattr-function">The Python delattr() </a>function is used to delete an attribute from a class. It takes two parameters: the first is an object of the class, and the second is an attribute that we want to delete. After deleting the attribute, it is no longer available in the class and throws an error if you try to call it using the class object.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">class Student:
    id = 101
    name = "Pranshu"
    email = "pranshu@abc.com"
# Declaring function
    def getinfo(self):
        print(self.id, self.name, self.email)
s = Student()
s.getinfo()
delattr(Student,'course') # Removing attribute which is not available
s.getinfo() # error: throws an error
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
101 Pranshu <a class="__cf_email__" data-cfemail="f28280939c819a87b2939091dc919d9f" href="/cdn-cgi/l/email-protection">[email protected]</a>
AttributeError: course
</pre></div><h2 class="h2">Python dir() Function</h2><p><a href="python-dir-function">Python dir() </a>function returns the list of names in the current local scope. If the object on which the method is called has a method named __dir__(), this method will be called and must return the list of attributes. It takes a single object type argument.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function
att = dir()
# Displaying result
print(att)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
['__annotations__', '__builtins__', '__cached__', '__doc__', '__file__', '__loader__', 
'__name__', '__package__', '__spec__']
</pre></div><h2 class="h2">Python divmod() Function</h2><p><a href="python-divmod-function">The Python divmod() </a>function is used to get the remainder and quotient of two numbers. This function takes two numeric arguments and returns a tuple. Both arguments are required and numeric.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Python divmod() function example
# Calling function
result = divmod(10,2)
# Displaying result
print(result)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
(5, 0)
</pre></div><h2 class="h2">Python enumerate() Function</h2><p><a href="python-enumerate-function">The Python enumerate() </a>function returns an enumerated object. It takes two parameters: the first is a sequence of elements, and the second is the start index of the sequence. We can get the elements in sequence either through a loop or the next() method.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function
result = enumerate([1,2,3])
# Displaying result
print(result)
print(list(result))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
&lt;enumerate object at 0x7ff641093d80&gt;
[(0, 1), (1, 2), (2, 3)]
</pre></div><h2 class="h2">Python dict()</h2><p><a href="python-dictionary">The Python <strong>dict()</strong> </a>function is a constructor that creates a dictionary. Python dictionary provides three different constructors to create a dictionary:</p><ul class="points"><li>If no argument is passed, it creates an empty dictionary.</li><li>If a positional argument is given, a dictionary is created with the same key-value pairs. Otherwise, pass an iterable object.</li><li>If keyword arguments are given, the keyword arguments and their values are added to the dictionary created from the positional argument.</li></ul><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function
result = dict() # returns an empty dictionary
result2 = dict(a=1,b=2)
# Displaying result
print(result)
print(result2)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
{}
{'a': 1, 'b': 2}
</pre></div><h2 class="h2">Python filter() Function</h2><p><a href="python-filter-function">The Python filter() </a>function is used to get filtered elements. This function takes two arguments: the first is a function, and the second is an iterable. The filter function returns a sequence of those elements of an iterable object for which the function returns a true value.</p><p>The first argument can be none if the function is not available and returns only elements that are true.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Python filter() function example
def filterdata(x):
    if x&gt;5:
        return x
# Calling function
result = filter(filterdata,(1,2,6))
# Displaying result
print(list(result))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
[6]
</pre></div><h2 class="h2">Python hash() Function</h2><p><a href="python-hash-function">The Python hash() </a>function is used to get the hash value of an object. Python calculates the hash value by using the hash algorithm. The hash values are integers and used to compare dictionary keys during a dictionary lookup. We can hash only the types that are given below:</p><p><strong>Hashable types:</strong> * bool * int * long * float * string * Unicode * tuple * code object.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function
result = hash(21) # integer value
result2 = hash(22.2) # decimal value
# Displaying result
print(result)
print(result2)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
21
461168601842737174
</pre></div><h2 class="h2">Python help() Function</h2><p><a href="python-help-function">Python's help() </a>function is used to get help related to the object passed during the call. It takes an optional parameter and returns help information. If no argument is given, it shows the Python help console. It internally calls Python's help function.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function
info = help() # No argument
# Displaying result
print(info)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Welcome to Python 3.5's help utility!
</pre></div><h2 class="h2">Python min() Function</h2><p><a href="python-min-function">The Python min() </a>function is used to get the smallest element from the collection. This function takes two arguments: the first is a collection of elements, and the second is a key, and returns the smallest element from the collection.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function  
small = min(2225,325,2025) # returns smallest element  
small2 = min(1000.25,2025.35,5625.36,10052.50)  
# Displaying result  
print(small)  
print(small2
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
325
1000.25
</pre></div><h2 class="h2">Python set() Function</h2><p>In Python, a set is a built-in class, and the <a href="python-set-function">Python set()</a> function is a constructor of this class. It is used to create a new set using elements passed during the call. It takes an iterable object as an argument and returns a new set object.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function  
result = set() # empty set  
result2 = set('12')  
result3 = set('TpointTech')  
# Displaying result  
print(result)  
print(result2)  
print(result3)  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
set()
{'2', '1'}
{'i', 't', 'h', 'e', 'p', 'o', 'c', 'n', 'T'}
</pre></div><h2 class="h2">Python hex() Function</h2><p><a href="python-hex-function">Python's <strong>hex()</strong> </a>function is used to generate the hex value of an integer argument. It takes an integer argument and returns an integer converted into a hexadecimal string. In case we want to get a hexadecimal value of a float, then use float.hex() function.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function
result = hex(1) 
# integer value
result2 = hex(342) 
# Displaying result
print(result)
print(result2)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
0x1
0x156
</pre></div><h2 class="h2">Python id() Function</h2><p><a href="python-id-function">Python's id() </a>function returns the identity of an object. This is an integer that is guaranteed to be unique. This function takes an argument as an object and returns a unique integer number that represents identity. Two objects with non-overlapping lifetimes may have the same id() value.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function  
val = id("TpointTech") # string object  
val2 = id(1200) # integer object  
val3 = id([25,336,95,236,92,3225]) # List object  
# Displaying result  
print(val)  
print(val2)  
print(val3)  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
136794813706224
136794813580496
136794813641408
</pre></div><h2 class="h2">Python setattr() Function</h2><p>The <a href="python-setattr-function">Python setattr() </a>function is used to set a value to the object's attribute. It takes three arguments, i.e., an object, a string, and an arbitrary value, and returns none. It is helpful when we want to add a new attribute to an object and set a value to it.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">class Student:  
    id = 0  
    name = ""  
      
    def __init__(self, id, name):  
        self.id = id  
        self.name = name  
          
student = Student(102,"Sohan")  
print(student.id)  
print(student.name)  
#print(student.email) product error  
setattr(student, 'email','sohan@abc.com') # adding new attribute  
print(student.email)  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
102
Sohan
[email protected]
</pre></div><h2 class="h2">Python hasattr() Function</h2><p>In Python, the <a href="python-hasattr-function">hasattr() function</a> is a built-in function used to check whether an object has a specified attribute. It returns True if the attribute exists and False if it does not exist.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">class Car:
    brand = "Ford"
    model = "Mustang"

my_car = Car()

# It checks if the car's brand attribute exists in the Car class
print(hasattr(Car, "brand"))

# It checks if the car's model attribute exists in the my_car object
print(hasattr(my_car, "model"))

# It checks for an attribute that does not exist
print(hasattr(my_car, "year"))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
True
True
False
</pre></div><h2 class="h2">Python slice() Function</h2><p><a href="python-slice-function">The Python slice() </a>function is used to get a slice of elements from a collection of elements. Python provides two overloaded slice functions. The first function takes a single argument, while the second function takes three arguments and returns a slice object. This slice object can be used to get a subsection of the collection.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function
result = slice(5) # returns slice object
result2 = slice(0,5,3) # returns slice object
# Displaying result
print(result)
print(result2)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
slice(None, 5, None)
slice(0, 5, 3)
</pre></div><h2 class="h2">Python sorted() Function</h2><p><a href="python-sorted-function">The Python sorted() </a>function is used to sort elements. By default, it sorts elements in an ascending order, but it can also be sorted in descending order. It takes four arguments and returns a collection in sorted order. In the case of a dictionary, it sorts only keys, not values.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">str = "TpointTech" # declaring string  
# Calling function  
sorted1 = sorted(str) # sorting string  
# Displaying result  
print(sorted1)  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
['T', 'T', 'c', 'e', 'h', 'i', 'n', 'o', 'p', 't']
</pre></div><h2 class="h2">Python next() Function</h2><p><a href="python-next-function">Python next() </a>function is used to fetch the next item from the collection. It takes two arguments, i.e., an iterator and a default value, and returns an element.</p><p>This method calls on the iterator and throws an error if no item is present. To avoid the error, we can set a default value.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">number = iter([256, 32, 82]) # Creating iterator  
# Calling function  
item = next(number)   
# Displaying result  
print(item)  
# second item  
item = next(number)  
print(item)  
# third item  
item = next(number)  
print(item)  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
256
32
82
</pre></div><h2 class="h2">Python input() Function</h2><p><a href="python-input-function">The Python input() </a>function is used to get input from the user. It prompts for the user input and reads a line. After reading the data, it converts it into a string and returns it. It throws an EOFError if EOF is read.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function  
val = input("Enter a value: ")  
# Displaying result  
print("You entered:",val)  
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Enter a value: 45
You entered: 45
</pre></div><h2 class="h2">Python int() Function</h2><p><a href="python-int-function">The Python <strong>int()</strong> </a>function is used to get an integer value. It returns an expression converted into an integer number. If the argument is a floating-point number, the conversion truncates the number. If the argument is outside the integer range, then it converts the number into a long type.</p><p>If the number is not a number or if a base is given, the number must be a string.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function
val = int(10) # integer value
val2 = int(10.52) # float value
val3 = int('10') # string value
# Displaying result
print("integer values :",val, val2, val3)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
integer values : 10 10 10
</pre></div><h2 class="h2">Python isinstance() Function</h2><p>The <a href="python-isinstance-function">Python isinstance() </a>function is used to check whether the given object is an instance of that class. If the object belongs to the class, it returns true. Otherwise returns False. It also returns true if the class is a subclass.</p><p>The isinstance() function takes two arguments, i.e., object and classinfo, and then it returns either True or False.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">class Student:
    id = 101
    name = "John"
    def __init__(self, id, name):
        self.id=id
        self.name=name

student = Student(1010,"John")
lst = [12,34,5,6,767]
# Calling function 
print(isinstance(student, Student)) # isinstance of Student class
print(isinstance(lst, Student))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
True
False
</pre></div><h2 class="h2">Python oct() Function</h2><p><a href="python-oct-function">The Python <strong>oct()</strong> </a>function is used to get the octal value of an integer number. This method takes an argument and returns an integer converted into an octal string. It throws an error, <strong>TypeError</strong>, if the argument type is other than an integer.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Calling function
val = oct(10)
# Displaying result
print("Octal value of 10:",val)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Octal value of 10: 0o12
</pre></div><h2 class="h2">Python ord() Function</h2><p>The <a href="python-ord-function">Python <strong>ord()</strong> </a>function returns an integer representing the Unicode code point for the given Unicode character.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># Code point of an integer
print(ord('8'))

# Code point of an alphabet 
print(ord('R'))

# Code point of a character
print(ord('&amp;'))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
56
82
38
</pre></div><h2 class="h2">Python pow() Function</h2><p>The <a href="python-pow-function">Python <strong>pow()</strong> </a>function is used to compute the power of a number. It returns x to the power of y. If the third argument(z) is given, it returns x to the power of y modulus z, i.e., (x, y) % z.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># positive x, positive y (x**y)
print(pow(4, 2))

# negative x, positive y
print(pow(-4, 2))

# positive x, negative y (x**-y)
print(pow(4, -2))

# negative x, negative y
print(pow(-4, -2))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
16
16
0.0625
0.0625
</pre></div><h2 class="h2">Python print() Function</h2><p>The <a href="python-print-function">Python <strong>print()</strong> </a>function prints the given object to the screen or other standard output devices.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">print("Python is programming language.")

x = 7
# Two objects passed
print("x =", x)

y = x
# Three objects passed
print('x =', x, '= y')
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Python is programming language.
x = 7
x = 7 = y
</pre></div><h2 class="h2">Python range() Function</h2><p>The <a href="python-range-function">Python <strong>range()</strong> </a>function returns an immutable sequence of numbers starting from 0 by default, increments by 1 (by default), and ends at a specified number.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># empty range
print(list(range(0)))

# using the range(stop)
print(list(range(4)))

# using the range(start, stop)
print(list(range(1,7 )))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
[]
[0, 1, 2, 3]
[1, 2, 3, 4, 5, 6]
</pre></div><h2 class="h2">Python reversed() Function</h2><p>The <a href="python-reversed-function">Python reversed() </a>function returns the reversed iterator of the given sequence.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code"># for string
String = 'Java'
print(list(reversed(String)))

# for tuple
Tuple = ('J', 'a', 'v', 'a')
print(list(reversed(Tuple)))

# for range
Range = range(8, 12)
print(list(reversed(Range)))

# for list
List = [1, 2, 7, 5]
print(list(reversed(List)))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
['a', 'v', 'a', 'J']
['a', 'v', 'a', 'J']
[11, 10, 9, 8]
[5, 7, 2, 1]
</pre></div><h2 class="h2">Python round() Function</h2><p>The <a href="python-round-function">Python round() </a>function rounds off the digits of a number and returns the floating-point number.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">#  for integers
print(round(10))

#  for floating point
print(round(10.8))

#  even choice
print(round(6.6))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
10
11
7
</pre></div><h2 class="h2">Python issubclass() Function</h2><p>The Python issubclass() function returns true if the object argument(first argument) is a subclass of the second class(second argument).</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">class Rectangle:
  def __init__(rectangleType):
    print('Rectangle is a ', rectangleType)

class Square(Rectangle):
  def __init__(self):
    Rectangle.__init__('square')
    
print(issubclass(Square, Rectangle))
print(issubclass(Square, list))
print(issubclass(Square, (list, Rectangle)))
print(issubclass(Rectangle, (list, Rectangle)))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
True
False
True
True
</pre></div><h2 class="h2">Python str</h2><p>The <a href="python-str-function">Python <strong>str()</strong> </a>converts a specified value into a string.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">str('4')
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
'4'
</pre></div><h2 class="h2">Python tuple() Function</h2><p>The <a href="python-tuple-function">Python tuple() </a>function is used to create a tuple object.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">t1 = tuple()
print('t1=', t1)

# creating a tuple from a list
t2 = tuple([1, 6, 9])
print('t2=', t2)

# creating a tuple from a string
t1 = tuple('Java')
print('t1=',t1)

# creating a tuple from a dictionary
t1 = tuple({4: 'four', 5: 'five'})
print('t1=',t1)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
t1= ()
t2= (1, 6, 9)
t1= ('J', 'a', 'v', 'a')
t1= (4, 5)
</pre></div><h2 class="h2">Python type()</h2><p>The <a href="python-type-function">Python type() </a>returns the type of the specified object if a single argument is passed to the type() built-in function. If three arguments are passed, then it returns a new type object.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">List = [4, 5]
print(type(List))

Dict = {4: 'four', 5: 'five'}
print(type(Dict))

class Python:
    a = 0

InstanceOfPython = Python()
print(type(InstanceOfPython))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
&lt;class 'list'&gt;
&lt;class 'dict'&gt;
&lt;class '__main__.Python'&gt;
</pre></div><h2 class="h2">Python vars() function</h2><p>The <a href="python-vars-function">Python vars(<strong>)</strong> </a>function returns the __dict__ attribute of the given object.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">class Python:
  def __init__(self, x = 7, y = 9):
    self.x = x
    self.y = y
  
InstanceOfPython = Python()
print(vars(InstanceOfPython))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
{'y': 9, 'x': 7}
</pre></div><h2 class="h2">Python zip() Function</h2><p>The <a href="python-zip-function">Python <strong>zip()</strong> </a>Function returns a zip object, which maps a similar index of multiple containers. It takes iterables (can be zero or more), makes it an iterator that aggregates the elements based on the iterables passed, and returns an iterator of tuples.</p><p><strong>Example</strong></p><div class="codeblock"><textarea class="python" name="code">numList = [4,5, 6]
strList = ['four', 'five', 'six']

# No iterables are passed
result = zip()

# Converting itertor to list
resultList = list(result)
print(resultList)

# Two iterables are passed
result = zip(numList, strList)

# Converting itertor to set
resultSet = set(result)
print(resultSet)
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
[]
{(5, 'five'), (4, 'four'), (6, 'six')}
</pre></div><h2 class="h2">Total Number of Built-in Functions in Python</h2><p>There are a variety of Built-in functions in Python. In the latest 3.11 version of Python, there are more than 70+ built-in functions.</p><p>We can check out all the built-in functions available in Python using the following code:</p><p><strong>Code:</strong></p><div class="codeblock"><textarea class="python" name="code">import builtins
print(dir(builtins))
</textarea></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
['ArithmeticError', 'AssertionError', 'AttributeError', 'BaseException', 'BaseExceptionGroup', 'BlockingIOError', 'BrokenPipeError', 'BufferError', 'BytesWarning', 'ChildProcessError', 'ConnectionAbortedError', 'ConnectionError', 'ConnectionRefusedError', 'ConnectionResetError', 'DeprecationWarning', 'EOFError', 'Ellipsis', 'EncodingWarning', 'EnvironmentError', 'Exception', 'ExceptionGroup', 'False', 'FileExistsError', 'FileNotFoundError', 'FloatingPointError', 'FutureWarning', 'GeneratorExit', 'IOError', 'ImportError', 'ImportWarning', 'IndentationError', 'IndexError', 'InterruptedError', 'IsADirectoryError', 'KeyError', 'KeyboardInterrupt', 'LookupError', 'MemoryError', 'ModuleNotFoundError', 'NameError', 'None', 'NotADirectoryError', 'NotImplemented', 'NotImplementedError', 'OSError', 'OverflowError', 'PendingDeprecationWarning', 'PermissionError', 'ProcessLookupError', 'RecursionError', 'ReferenceError', 'ResourceWarning', 'RuntimeError', 'RuntimeWarning', 'StopAsyncIteration', 'StopIteration', 'SyntaxError', 'SyntaxWarning', 'SystemError', 'SystemExit', 'TabError', 'TimeoutError', 'True', 'TypeError', 'UnboundLocalError', 'UnicodeDecodeError', 'UnicodeEncodeError', 'UnicodeError', 'UnicodeTranslateError', 'UnicodeWarning', 'UserWarning', 'ValueError', 'Warning', 'ZeroDivisionError', '__IPYTHON__', '__build_class__', '__debug__', '__doc__', '__import__', '__loader__', '__name__', '__package__', '__spec__', 'abs', 'aiter', 'all', 'anext', 'any', 'ascii', 'bin', 'bool', 'breakpoint', 'bytearray', 'bytes', 'callable', 'chr', 'classmethod', 'compile', 'complex', 'copyright', 'credits', 'delattr', 'dict', 'dir', 'display', 'divmod', 'enumerate', 'eval', 'exec', 'execfile', 'filter', 'float', 'format', 'frozenset', 'get_iPython', 'getattr', 'globals', 'hasattr', 'hash', 'help', 'hex', 'id', 'input', 'int', 'isinstance', 'issubclass', 'iter', 'len', 'license', 'list', 'locals', 'map', 'max', 'memoryview', 'min', 'next', 'object', 'oct', 'open', 'ord', 'pow', 'print', 'property', 'range', 'repr', 'reversed', 'round', 'runfile', 'set', 'setattr', 'slice', 'sorted', 'staticmethod', 'str', 'sum', 'super', 'tuple', 'type', 'vars', 'zip']</pre></div><h2 class="h2">Conclusion</h2><p>In this tutorial, we covered everything about Python Built-in Functions. We learnt about various types of built-in functions in Python, like abs(), bin(), all(), bool(), compile(), sum(), ascii(), float(), etc. The Python built-in functions are defined as the functions whose functionality is pre-defined in Python. The Python interpreter has several functions that are always present for use. We studied each of these functions in detail with examples and their outputs. In conclusion, Python built-in functions are a vast topic and are necessary for efficient and time-saving coding.</p><h2 class="h2">Python Built-in Functions FAQs</h2><p><strong>1. What are Python's built-in functions?</strong></p><p>The Python built-in functions are defined as the functions whose functionality is pre-defined in Python. The Python interpreter has several functions that are always present for use. There are various types of built-in function in Python like abs(), bin(), all(), bool(), compile(), sum(), ascii(), float(), etc.</p><p><strong>2. How many built-in functions are there in Python?</strong></p><p>In Python version 3.11, there are more than 70 built-in functions. We can check them using:</p><div class="codeblock"><textarea class="python" name="code">import builtins
print(dir(builtins))
</textarea></div><p><strong>3. What is the difference between built-in functions and user-defined functions?</strong></p><p><strong>Built-in functions:</strong> The built-in functions in Python are pre-defined. For example: print(), len(), etc.</p><p><strong>Whereas,</strong></p><p><strong>User-defined functions:</strong> The User-defined functions in Python are created by users or programmers by using the <strong>def </strong>keyword. </p><p><strong>4. What are the commonly used built-in functions in Python?</strong></p><p>There are various built-in functions in Python, but let's have a look at some commonly used:</p><ul class="points"><li><strong>print():</strong> This function displays output</li><li><strong>len():</strong> This helps in finding the length</li><li><strong>max(), min():</strong> Largest/smallest value</li><li><strong>sum():</strong> Produces the Sum of elements</li><li><strong>sorted():</strong> It sorts the sequence</li><li><strong>type():</strong> It returns the type of object</li><li><strong>range():</strong> The range function generates the sequence of numbers</li></ul><p><strong>5. How do abs(), round(), and pow() work?</strong></p><p><strong>The abs() function</strong> is known as the Absolute function, which converts the integers into positive integers. For example: abs(-5) --&gt; 5</p><p><strong>The round() function</strong> rounds the floating numbers. It consists of value and step value, and the step value determines the decimal places till the number is rounded off. For example: round(4.567, 2) --&gt; 4.57</p><p><strong>The pow() function</strong> consists of two components, which are the base and the exponent, used to calculate the value of a base number to the given exponent. For example: pow(2, 3) --&gt; 8</p><hr/><div class="nexttopicdiv"><span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="python-lambda-functions">Python Lambda Functions</a></span></div> <div id="bottomnext"><a class="next" href="python-functions" style="float:left">← prev</a> <a class="next" href="python-lambda-functions" style="float:right">next →</a></div></td></tr></tbody></table></div><br/></div><div class="related-posts-container"><h2 class="h3">Related Posts</h2><ul class="related-posts-list"><li><a class="related-post-item" href="python-lambda-functions"><h3 class="h3">Python Lambda Functions</h3><p class="related-post-content">In Python, Lambda Functions are concise, anonymous functions, which means they are functions without a name. They are used for streamlining and simplifying short tasks. It contributes in improving the readability of the program. Syntax Following is the syntax of the Lambda function in Python: lambda arguments :...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 6 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="def-function-in-python"><h3 class="h3">def Function in Python</h3><p class="related-post-content">due to its simplicity. One basic building block in Python is the def statement, which is used to define functions. In any programming language, the concept of functions is a basic requirement because they allow encapsulation of code into reusable units. To put it simply, a...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 11 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="python-functions"><h3 class="h3">Python Functions</h3><p class="related-post-content">In Python, a function is a block of statements that performs a particular task. The main idea is to group tasks that we often do repeatedly into a single function. This way we can simply call the function whenever needed and reuse the code efficiently...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 5 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li></ul></div><br/><div class="container-xxl" style="position:relative;margin-top:-20px"><div class="aboutus themecolor subscribe"><div class="container px-lg-5 text-center"><h4 class="mb-4 animated zoomIn mediumheading">Subscribe to Tpoint Tech</h4><p class="pb-3 animated zoomIn text-center">We request you to subscribe our newsletter for upcoming updates.</p><div class="position-relative w-100 mt-3"><input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" id="email" placeholder="Your Email" style="height:48px" type="email"/> <button class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2" id="subscribeBtn" type="button">Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i></button></div><p class="mt-3" id="message"></p></div></div></div><br/><div class="ad-container" id="ad-container"></div><br/></div><div class="col-md-2"><div class="advertisement"><div id="sidebar_300x600_1_bq_307_556"></div><div id="sidebar_300x600_2_bq_307_557"></div><div id="sidebar_300x600_3_bq_307_558"></div></div></div></div><script>function closePopup(){document.getElementById("popup").style.display="none"}setTimeout((function(){localStorage.getItem("popupShown")||(document.getElementById("popup").style.display="flex",localStorage.setItem("popupShown","true"))}),5e3)</script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>$(document).ready((function(){$("#subscribeBtn").click((function(){var e=$("#email").val().trim();""!==e?$.ajax({url:"/subscribe",type:"POST",contentType:"application/json",data:JSON.stringify({email:e}),beforeSend:function(){$("#subscribeBtn").prop("disabled",!0).html("Subscribing...")},success:function(e){$("#message").html("<span style='color: green;'>Subscription successful! Please check your email.</span>"),$("#email").val("")},error:function(e){var s=e.responseJSON?e.responseJSON.error:"Subscription failed.";$("#message").html("<span style='color: red;'>"+s+"</span>")},complete:function(){$("#subscribeBtn").prop("disabled",!1).html('Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i>')}}):$("#message").html("<span style='color: red;'>Please enter your email.</span>")}))}))</script><div class="container-fluid footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"><div class="container py-5"><div class="row"><div class="col-md-6 col-lg-5"><img alt="Logo" src="https://images.tpointtech.com/static/images/logo.png"/><p>We provides tutorials and interview questions of all technology like java tutorial, android, java frameworks</p><h5 class="mb-4">Contact info</h5><p><svg viewbox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg>G-13, 2nd Floor, Sec-3, Noida, UP, 201301, India</p><p><svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v128z"></path></svg><a href="mailto:hr@tpointtech.com">hr@tpointtech.com</a></p><p><svg fill="currentColor" height="1.8em" stroke="currentColor" stroke-width="0" viewbox="0 0 24 24" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.49 3c-2.21 0-4.21.9-5.66 2.34l1.06 1.06a6.47 6.47 0 0 1 9.18 0l1.06-1.06A7.932 7.932 0 0 0 16.49 3z"></path><path d="M20.03 7.46a5.022 5.022 0 0 0-7.08 0l1.06 1.06c.63-.63 1.51-1.03 2.47-1.03s1.84.39 2.47 1.03l1.08-1.06zM15.08 9.59 16.49 11l1.41-1.41c-.36-.37-.86-.59-1.41-.59s-1.05.22-1.41.59z"></path><path d="m15.63 14.4-2.52 2.5c-2.5-1.43-4.57-3.5-6-6l2.5-2.52c.23-.24.33-.57.27-.9L9.13 3.8c-.09-.46-.5-.8-.98-.8H4c-.56 0-1.03.47-1 1.03.17 2.89 1.05 5.6 2.43 7.97 1.58 2.73 3.85 4.99 6.57 6.57 2.37 1.37 5.08 2.26 7.97 2.43.56.03 1.03-.44 1.03-1v-4.15c0-.48-.34-.89-.8-.98l-3.67-.73a.985.985 0 0 0-.9.26z"></path></svg><a href="tel:+919599086977">+91-9599086977</a></p><h5 class="mb-4">Follow us</h5><div class="d-flex"><a class="btn btn-outline-light btn-social" href="https://www.facebook.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Facebook Page" src="https://images.tpointtech.com/static/img/facebook.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://x.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech X Page" src="https://images.tpointtech.com/static/images/x.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/tpointtech/" rel="nofollow" target="_blank"><img alt="Tpoint Tech Linkedin Page" src="https://images.tpointtech.com/static/images/linkedin.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://t.me/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Telegram Channel" src="https://images.tpointtech.com/static/images/telegram.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@tpointtechofficial" rel="nofollow" target="_blank"><img alt="Tpoint Tech Youtube Channel" src="https://images.tpointtech.com/static/img/youtube.png"/></a><a class="btn btn-outline-light btn-social" href="https://www.instagram.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech instagram Page" src="https://images.tpointtech.com/static/images/insta.png" width="24"/></a></div></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Tutorials</h5><a class="btn btn-link" href="/java-tutorial">Java</a> <a class="btn btn-link" href="/data-structure-tutorial">Data Structures</a> <a class="btn btn-link" href="/c-programming-language-tutorial">C Programming</a> <a class="btn btn-link" href="/cpp-tutorial">C++ Tutorial</a> <a class="btn btn-link" href="/c-sharp-tutorial">C# Tutorial</a> <a class="btn btn-link" href="/php-tutorial">PHP Tutorial </a><a class="btn btn-link" href="/html-tutorial">HTML Tutorial</a> <a class="btn btn-link" href="/javascript-tutorial">JavaScript Tutorial </a><a class="btn btn-link" href="/jquery-tutorial">jQuery Tutorial </a><a class="btn btn-link" href="/spring-tutorial">Spring Tutorial</a></div><div class="col-md-6 col-lg-3"><h5 class="mb-4">Interview Questions</h5><a class="btn btn-link" href="/microsoft-interview-questions">Microsoft </a><a class="btn btn-link" href="/amazon-interview-questions">Amazon </a><a class="btn btn-link" href="/adobe-interview-questions">Adobe </a><a class="btn btn-link" href="/intuit-interview-questions">Intuit </a><a class="btn btn-link" href="/accenture-interview-questions">Accenture</a> <a class="btn btn-link" href="/cognizant-interview-questions">Cognizant </a><a class="btn btn-link" href="/capgemini-interview-questions">Capgemini </a><a class="btn btn-link" href="/wipro-interview-questions">Wipro </a><a class="btn btn-link" href="/tcs-interview-questions">Tcs </a><a class="btn btn-link" href="/infosys-interview-questions">Infosys</a></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Online Compiler</h5><a class="btn btn-link" href="/compiler/c">C </a><a class="btn btn-link" href="/compiler/r">R </a><a class="btn btn-link" href="/compiler/cpp">C++ </a><a class="btn btn-link" href="/compiler/php">Php </a><a class="btn btn-link" href="/compiler/java">Java </a><a class="btn btn-link" href="/compiler/html">Html </a><a class="btn btn-link" href="/compiler/swift">Swift </a><a class="btn btn-link" href="/compiler/python">Python </a><a class="btn btn-link" href="/compiler/javascript">JavaScript </a><a class="btn btn-link" href="/compiler/typescript">TypeScript</a></div></div></div><div class="container text-center px-lg-5"><div class="col-md-12 text-center mb-3 mb-md-0"></div><a href="/latest-post">Latest Post</a> | <a href="/tutorials-list">Tutorials List</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/about-us">About Us</a> | <a href="/contact-us">Contact Us</a></div><div class="copyright"><div class="row"><div class="col-md-12 text-center mb-3 mb-md-0">© Copyright 2011 - 2025 TpointTech.com. All Rights Reserved.</div></div></div></div></div></section><div aria-hidden="true" aria-labelledby="searchModalLabel" class="modal fade" id="searchModal" tabindex="-1"><div class="modal-dialog modal-dialog-scrollable modal-lg"><div class="modal-content shadow rounded-3"><div class="modal-header text-white"><img alt="TPoint Tech Logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" style="height:30px;margin-right:10px"/> <button aria-label="Close" class="btn-close btn-close-black" data-bs-dismiss="modal" type="button"></button></div><div class="modal-body" id="modalResults"></div></div></div></div><a class="btn btn-info btn-floating btn-lg" href="#" id="scrollButton"><i class="fas fa-arrow-up"></i></a><script defer="defer" src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script><script defer="defer" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.12.1/polyfill.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js"></script><script src="/static/js/categoryDetails.js"></script><script src="/static/js/shcoreandbrush.js"></script><script>dp.SyntaxHighlighter.HighlightAll("code")</script><script async="" src="/static/js/lazysizes.min.js"></script><script src="/static/js/main.js"></script><script>const hamburger=document.querySelector(".hamburger"),navMenu=document.querySelector(".nav");function open_menu(){hamburger.classList.toggle("active"),navMenu.classList.toggle("active")}hamburger?.addEventListener("click",open_menu);const navLink=document.querySelectorAll(".nav-link");function closeMenu(){hamburger?.classList?.remove("active"),navMenu?.classList?.remove("active")}navLink.forEach((e=>e.addEventListener("click",closeMenu)))</script><script>function toggleSidebar(){let e=document.querySelector(".col-md-2.sidebar"),l=document.querySelector(".leftmenu");window.innerWidth<=895&&("none"===e.style.display?(e.style.display="block",l.style.display="block",e.style.position="fixed",e.style.zIndex="555"):(e.style.display="none",l.style.display="none"))}toggleSidebar()</script><script>function handleAccordionOnLoad(){const o=window.innerWidth<=768,e=window.location.pathname,c=document.querySelectorAll(".leftmenu a"),n=document.querySelectorAll(".accordion-collapse");o?(n.forEach((o=>o.classList.remove("show"))),c.forEach((o=>{if(o.getAttribute("href")===e){const e=o.closest(".accordion-item");if(e){const o=e.querySelector(".accordion-collapse");o&&o.classList.add("show")}}}))):n.forEach((o=>o.classList.add("show")))}handleAccordionOnLoad(),window.addEventListener("resize",handleAccordionOnLoad)</script><script>const showhide=s=>{const e=$("#answer"+s),a=$("#btntext"+s);a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-black.png)"),"block"===e.css("display")?(e.css("display","none"),a.text("Show Answer")):(e.css("display","block"),a.empty(),a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-close-black.png)"),a.append("Hide Answer"))}</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");e&&e.addEventListener("wheel",(function(t){0!==t.deltaY&&(t.preventDefault(),e.scrollLeft+=t.deltaY)}))}))</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");let t=!1,n=0,s=0;e.addEventListener("mousedown",(a=>{t=!0,e.classList.add("active"),n=a.pageX,s=e.scrollLeft})),["mouseup","mouseleave"].forEach((n=>{e.addEventListener(n,(()=>{t=!1,e.classList.remove("active")}))})),e.addEventListener("mousemove",(a=>{if(!t)return;a.preventDefault();const d=a.pageX-n;e.scrollLeft=s-d})),e.addEventListener("dragstart",(e=>e.preventDefault()))}))</script><script>let currentPage=1;const resultsPerPage=10;let fullData=[];function renderModalPage(e){const t=fullData.slice(0,100),l=10*(e-1),n=l+10,r=t.slice(l,n);let a="";const i=l+1,o=n>t.length?t.length:n;a+=`<div style="padding: 2px 0; font-size: 14px; color: #555;">\n      Showing ${i}–${o} of ${fullData.length.toLocaleString()} results\n    </div>`,a+="<ul>",r.forEach((e=>{a+=e.url?`<li><a href="${e.url}">${e.title} -Tpoint Tech <br><span style='color:#918a8a;font-size:13px;'>${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</span><br></a></li>`:`<li>${e.title} -Tpoint Tech <br> ${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</li>`})),a+="</ul>";const s=Math.ceil(t.length/10);if(s>1){a+='<div class="pagination-numbers" style="text-align:center;margin-top:15px;">';for(let t=1;t<=s;t++)a+=`<span class="pagination-number" onclick="renderModalPage(${t})" style="margin:0 5px;cursor:pointer;color:${t===e?"#000":"#007bff"};">${t}</span>`;a+="</div>"}$("#modalResults").html(a)}function changePage(e){currentPage=e,renderModalPage(currentPage)}function performSearch(e,t=!1){e.length<2?$("#results").empty().hide():$.get("/search",{q:e},(function(e){if($("#results").empty(),0===e.length?$("#results").append("<li>No results found</li>"):e.forEach((e=>{const t=e.url?`<li><a href="${e.url}">${e.title}</a></li>`:`<li>${e.title}</li>`;$("#results").append(t)})),$("#results").show(),t){fullData=e,currentPage=1,renderModalPage(currentPage);new bootstrap.Modal(document.getElementById("searchModal")).show()}}))}$("#searchInput").on("input",(function(){performSearch($(this).val().trim())})),$("#searchInput").on("keypress",(function(e){if(13===e.which){e.preventDefault();performSearch($(this).val().trim(),!0)}})),$(document).on("click",(function(e){$(e.target).closest("#searchContainer").length||$("#results").hide()}))</script><script>const searchInput=document.getElementById("searchInput"),iconSearch=document.getElementById("iconSearch"),iconClear=document.getElementById("iconClear"),searchBtn=document.getElementById("searchBtn");searchInput.addEventListener("input",(()=>{""!==searchInput.value.trim()?(iconSearch.style.display="none",iconClear.style.display="inline"):(iconSearch.style.display="inline",iconClear.style.display="none")})),searchBtn.addEventListener("click",(e=>{""!==searchInput.value.trim()&&(e.preventDefault(),searchInput.value="",iconSearch.style.display="inline",iconClear.style.display="none",$("#results").empty().hide(),searchInput.focus())}))</script></body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>