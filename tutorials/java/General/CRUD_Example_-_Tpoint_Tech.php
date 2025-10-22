<?php
// Tutorial: CRUD Example - Tpoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CRUD Example - Tpoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>CRUD Example - Tpoint Tech</h1>
        <body onload="highlightlink()"><div class="xyz shadow-sm"><div class="sticky-top p-0" style="position:sticky;background-color:var(--light)"><div class="container-fluid"><div class="position-relative p-0"><nav class="navbar navbar-expand-lg navbar-light px-4 py-lg-0"><a class="navbar-brand p-0" href="/"><img alt="Logo" height="48" id="logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" width="179"/></a><div class="w-100" id="search-box"><div id="searchContainer" style="position:relative"><input autocomplete="off" id="searchInput" placeholder="Search..." type="text"/> <button aria-label="Search" id="searchBtn" style="position:absolute;right:5px;top:50%;transform:translateY(-50%);background:0 0;border:none;cursor:pointer"><span id="iconSearch"><svg fill="none" height="20" stroke="green" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg> </span><span id="iconClear" style="display:none"><svg fill="none" height="20" stroke="red" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><line x1="6" x2="18" y1="6" y2="18"></line><line x1="6" x2="18" y1="18" y2="6"></line></svg></span></button><ul id="results"></ul></div></div><div class="jtp-nav"><button class="navbar-toggler float-left" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button"><span class="fa fa-bars"></span></button></div><div class="collapse navbar-collapse" id="navbarCollapse"><div class="navbar-nav"><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Tutorials</a><div class="dropdown-menu w-100 mt-0" id="tutorials"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("tutorials")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/python-tutorial">Python Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/django-tutorial">Django Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/numpy-tutorial">Numpy Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas">Pandas Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-tkinter">Tkinter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/pytorch">Pytorch Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/flask-tutorial">Flask Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/opencv">OpenCV Tutorial</a><h3 class="jtp-list-group-item">Java</h3><a class="jtp-list-group-item list-group-item-action" href="/java-tutorial">Java Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/servlet-tutorial">Servlet Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jsp-tutorial">JSP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-boot-tutorial">Spring Boot Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-tutorial">Spring Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-tutorial">Hibernate Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javafx-tutorial">JavaFX Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/java-web-services-tutorial">Java Web Services Tutorial</a><h3 class="jtp-list-group-item">.Net Framework</h3><a class="jtp-list-group-item list-group-item-action" href="/net-framework">.Net Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-tutorial">C# Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/asp-net-tutorial">ASP.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/ado-net-tutorial">ADO.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wpf">WPF Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">AI, ML and Data Science</h3><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-ai">Artificial Intelligence Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning">Machine Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-science">Data Science Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/deep-learning">Deep Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/tensorflow">TensorFlow Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/artificial-neural-network">Artificial Neural Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/matplotlib">Matplotlib Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-scipy">Python Scipy Tutorial</a><h3 class="jtp-list-group-item">Cloud Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing">Cloud Computing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-tutorial">AWS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-azure">Microsoft Azure Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/salesforce">Salesforce Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/google-cloud-platform">GCP Tutorial</a><h3 class="jtp-list-group-item">B.Tech and MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-tutorial">DBMS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-tutorial">Data Structures Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system">Operating System Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-network-tutorial">Computer Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/daa-tutorial">DAA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-organization-and-architecture-tutorial">Computer Organization Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/software-engineering">Software Engineering Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-mining">Data Mining Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/html-tutorial">HTML Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/css-tutorial">CSS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-tutorial">JavaScript Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-tutorial">Jquery Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-8">Angular 8 Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/reactjs-tutorial">React Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/react-native-tutorial">React Native Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/nodejs-tutorial">Node.js Tutorial</a><h3 class="jtp-list-group-item">PHP</h3><a class="jtp-list-group-item list-group-item-action" href="/php-tutorial">PHP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-tutorial">MySQL Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel">Laravel Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wordpress-tutorial">WordPress Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/codeigniter-tutorial">CodeIgniter Tutorial</a><h3 class="jtp-list-group-item">Software Testing</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-tutorial">Software Testing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-tutorial">Selenium Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jira-tutorial">JIRA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jmeter-tutorial">JMeter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/postman">Postman Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/testng-tutorial">TestNG Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/soapui">SoapUI Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/cucumber-testing">Cucumber Tutorial</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Interview</a><div class="dropdown-menu w-100 mt-0" id="interview-questions"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("interview-questions")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Technical Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions">Python Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/corejava-interview-questions">Java Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/dot-net-interview-questions">.Net Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/cpp-interview-questions">C++ Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/react-interview-questions">React Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/node-js-interview-questions">Node.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-interview-questions">Angular Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hr-interview-questions">HR Interview Questions</a><h3 class="jtp-list-group-item">Java Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/spring-boot-interview-questions">Spring Boot Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-interview-questions">Spring Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-interview-questions">Hibernate Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jdbc-interview-questions">JDBC Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/servletinterview">Servlet Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/maven-interview-questions">Maven Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jenkins-interview-questions">Jenkins Interview Questions</a><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/django-interview-questions-and-answers">Django Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas-interview-questions">Pandas Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/expressjs-interview-questions">Express.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-coding-interview-questions">Python Coding Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions-for-five-years-experienced">Python Interview Questions for 5 Years</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/html-interview-questions">HTML Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/css-interview-questions">CSS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-interview-questions">JavaScript Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">Jquery Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/php-interview-questions">PHP Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel-interview-questions">Laravel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/ajax-interview-questions">AJAX Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/front-end-developer-interview-questions">Front-End Developer Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">jQuery Interview Questions</a><h3 class="jtp-list-group-item">Database Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/pl-sql-interview-questions">PL/SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oracle-interview-questions">Oracle Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mongodb-interview-questions">MongoDB Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/redis-interview-questions-and-answers">Redis Interview Questions</a><h3 class="jtp-list-group-item">B.Tech / MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system-interview-questions">Operating System Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oops-interview-questions">OOPs Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-interview-questions">DSA Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/networking-interview-questions">Computer Networks Interview Questions</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Important Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/c-interview-questions">C Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/power-bi-interview-questions">Power BI Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/excel-interview-questions">Excel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning-interview-questions">Machine Learning Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-interview-questions">AWS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microservices-interview-questions">Microservices Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a><h3 class="jtp-list-group-item">Software Testing Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-interview-questions">Manual Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-interview-questions">Selenium Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/api-testing-interview-questions">API Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/etl-testing-interview-questions">ETL Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mobile-testing-interview-questions">Mobile Testing Interview Questions</a><h3 class="jtp-list-group-item">Company Interviews</h3><a class="jtp-list-group-item list-group-item-action" href="/ibm-interview-questions">IBM Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/adobe-interview-questions">Adobe Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-interview-questions">Microsoft Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/amazon-interview-questions">Amazon Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/tcs-interview-questions">TCS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/wipro-interview-questions">Wipro Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/accenture-interview-questions">Accenture Interview Questions</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Compiler</a><div class="dropdown-menu w-100 mt-0" id="compiler-menu"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("compiler-menu")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Online Compilers</h3><a class="jtp-list-group-item list-group-item-action" href="/compiler/python">Python Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/java">Java Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/php">PHP Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/c">C Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/cpp">C++ Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html">HTML Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/javascript">JavaScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/typescript">TypeScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/r">R Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/swift">Swift Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/kotlin">Kotlin Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/go">Go Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/csharp">C# Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/perl">Perl Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/groovy">Groovy Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html-css-javascript">HTML, CSS &amp; JavaScript Online Editor</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Multiple Choice Questions</h3><a class="jtp-list-group-item list-group-item-action" href="/python-mcq">Python MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/java-mcq">Java MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/php-mcq">PHP MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/c-language-mcq">C Programming MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cpp-mcq">C++ MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/html-mcq">HTML mcq </a><a class="jtp-list-group-item list-group-item-action" href="/javascript-mcq">JavaScript MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/sql-mcq">SQL MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/operating-system-mcq">Operating System MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-fundamental-mcq">Computer Fundamental MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-network-mcq">Computer Network MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/dbms-mcq">DBMS MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/data-structure-mcq">Data Structure MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/software-engineering-mcq">Software Engineering MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing-mcq">Cloud Computing MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-mcq">Artificial Intelligence MCQ</a></div></div></div></div></div></div></div></div><ul class="d-flex"><li><div class="theme-icon dark-mode-icon" onclick="toggleDarkMode()"><i class="fas fa-moon" id="dark-mode-icon"></i></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#059862","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1C2833","--sidebar":"#eef7f0","--hoverprimary":"#05593a","--codecompile":"#dce8dc"})' style="background-color:#059862"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#0D4549","--secondary":"#b6dde2","--light":"#FFFFFF","--dark":"#17202A","--sidebar":"#F0FAFB","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#0d4549"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#231760","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#e7f6fd","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#231760"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#286562","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#ECF0F1","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#286562"></div></li></ul></div></nav></div></div><div class="borderedelement"></div></div><script async="" src="https://cse.google.com/cse.js?cx=548338c60d2224ac4"></script><script>function applyTheme(e){const t=document.documentElement;Object.keys(e).forEach((o=>{t.style.setProperty(o,e[o])}))}function setThemeColors(e){localStorage.setItem("themeColors",JSON.stringify(e)),applyTheme(e)}window.addEventListener("load",(()=>{const e=JSON.parse(localStorage.getItem("themeColors"));e&&applyTheme(e)}))</script><script>function setThemeColors(t){const e=document.documentElement;Object.keys(t).forEach((o=>{e.style.setProperty(o,t[o])})),localStorage.setItem("themeColors",JSON.stringify(t))}function toggleDarkMode(){const t=document.body,e=document.getElementById("dark-mode-icon"),o=document.getElementById("logo");t.classList.toggle("night-mode")?(e.classList.remove("fa-moon"),e.classList.add("fa-sun"),localStorage.setItem("theme","night"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):(e.classList.remove("fa-sun"),e.classList.add("fa-moon"),localStorage.setItem("theme","day"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg")}window.addEventListener("load",(()=>{const t=JSON.parse(localStorage.getItem("themeColors")),e=localStorage.getItem("theme"),o=document.getElementById("logo");t&&setThemeColors(t),"night"===e?(document.body.classList.add("night-mode"),document.getElementById("dark-mode-icon").classList.remove("fa-moon"),document.getElementById("dark-mode-icon").classList.add("fa-sun"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg"}))</script></div><div class="xyz sticky-top shadow-sm;" id="tpointtech-images" style="z-index:99"><div id="link" style="clear:both;position:sticky;z-index:99"><div class="ddsmoothmenu"><span><button class="jt-nav float-left accordion accordion-flush" data-bs-target="#navbarCollapse" data-bs-toggle="jt-nav" onclick="toggleSidebar()" style="color:#fff;width:50px;margin-top:8px;margin-left:20px;font-size:20px;background:0 0;box-shadow:none;border:none" type="button"><span class="fa fa-bars"></span></button></span><ul class="nav" style="display:inline-flex;margin-left:auto;line-height:2rem"><li class="nav-item"><a class="nav-link" href="/python-tutorial"><img alt="Python Logo" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/python.svg" width="16"/> Python</a></li><li class="nav-item"><a class="nav-link" href="/java-tutorial"><img alt="java" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Java.svg" width="16"/> Java</a></li><li class="nav-item"><a class="nav-link" href="/javascript-tutorial"><img alt="javascript" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/JS.svg" width="16"/> JavaScript</a></li><li class="nav-item"><a class="nav-link" href="/sql-tutorial"><img alt="sql" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/SQL.svg" width="16"/> SQL</a></li><li class="nav-item"><a class="nav-link" href="/c-programming-language-tutorial"><img alt="c" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/C.svg" width="16"/> C</a></li><li class="nav-item"><a class="nav-link" href="/cpp-tutorial"><img alt="c++" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Cpp.svg" width="16"/> C++</a></li><li class="nav-item"><a class="nav-link" href="/html-tutorial"><img alt="html" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/HTML.svg" width="16"/> HTML</a></li><li class="nav-item"><a class="nav-link" href="/css-tutorial"><img alt="css" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/CSS.svg" width="16"/> CSS</a></li><li class="nav-item"><a class="nav-link" href="/reactjs-tutorial"><img alt="React" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/react.svg" width="16"/> React</a></li><li class="nav-item"><a class="nav-link" href="/nodejs-tutorial"><img alt="Node.js" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/nodejs.svg" width="16"/> Node.js</a></li><li class="nav-item"><a class="nav-link" href="/spring-boot-tutorial"><img alt="Spring Boot" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/spring-boot.svg" width="16"/> Spring Boot</a></li><li class="nav-item"><a class="nav-link" href="/c-sharp-tutorial"><img alt="c#" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/csharp.svg" width="16"/> C#</a></li><li class="nav-item"><a class="nav-link" href="/php-tutorial"><img alt="php" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/PHP.svg" width="16"/> PHP</a></li><li class="nav-item"><a class="nav-link" href="/mysql-tutorial"><img alt="MySQL" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mysql.svg" width="16"/> MySQL</a></li><li class="nav-item"><a class="nav-link" href="/mongodb-tutorial"><img alt="MongoDB" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mongodb.svg" width="16"/> MongoDB</a></li><li class="nav-item"><a class="nav-link" href="/artificial-intelligence-ai"><img alt="Artificial Intelligence" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/AI.svg" width="16"/> AI</a></li><li class="nav-item"><a class="nav-link" href="/machine-learning"><img alt="Machine Learning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/ML.svg" width="16"/> ML</a></li><li class="nav-item"><a class="nav-link" href="/data-structures-and-algorithms-dsa"><img alt="data structures" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DS.svg" width="16"/> DSA</a></li><li class="nav-item"><a class="nav-link" href="/dbms-tutorial"><img alt="dbms" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DBMS.svg" width="16"/> DBMS</a></li><li class="nav-item"><a class="nav-link" href="/operating-system"><img alt="Operating System" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/OS.svg" width="16"/> OS</a></li><li class="nav-item"><a class="nav-link" href="/aptitude/quantitative"><img alt="aptitude" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Aptitude.svg" width="16"/> Aptitude</a></li><li class="nav-item"><a class="nav-link" href="/reasoning"><img alt="reasoning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Reasoning.svg" width="16"/> Reasoning</a></li></ul></div></div></div><section class="course-details"><div class="container-fluid"><div class="row"><div class="col-md-2 sidebar" id="sidebar"><div id="menu-sidebar"><div class="accordion accordion-flush" id="accordionFlushExample"><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading0"><button aria-controls="flush-collapse0" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse0" data-bs-toggle="collapse" type="button">Angular 2 Tutorial</button></h2><div aria-labelledby="flush-heading0" class="accordion-collapse collapse show" id="flush-collapse0"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-2">Angular 2 Tutorial</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading1"><button aria-controls="flush-collapse1" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse1" data-bs-toggle="collapse" type="button">Angular 7 Tutorial</button></h2><div aria-labelledby="flush-heading1" class="accordion-collapse collapse show" id="flush-collapse1"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-tutorial">Angular 7 Tutorial</a></li><li class="leftmenu"><a href="/angular-7-introduction">Angular 7 Introduction</a></li><li class="leftmenu"><a href="/angular-7-features">Angular 7 Features</a></li><li class="leftmenu"><a href="/angular-7-installation">Angular 7 Installation</a></li><li class="leftmenu"><a href="/angular-7-history-and-versions">History &amp; Versions</a></li><li class="leftmenu"><a href="/angular-7-first-app">Angular 7 First App</a></li><li class="leftmenu"><a href="/angular-7-files-explanation">Angular 7 Files Explanation</a></li><li class="leftmenu"><a href="/angular-7-with-bootstrap">Angular 7 with Bootstrap</a></li><li class="leftmenu"><a href="/angular-7-all-cli-commands">All CLI commands</a></li><li class="leftmenu"><a href="/angular-7-libraries">Angular 7 Libraries</a></li><li class="leftmenu"><a href="/angular-7-architecture">Angular 7 Architecture</a></li><li class="leftmenu"><a href="/angular-7-components">Angular 7 Components</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading2"><button aria-controls="flush-collapse2" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse2" data-bs-toggle="collapse" type="button">Angular 7 Directives</button></h2><div aria-labelledby="flush-heading2" class="accordion-collapse collapse show" id="flush-collapse2"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-directives">Angular 7 Directives</a></li><li class="leftmenu"><a href="/angular-7-ngif-directive">Angular 7 ngIf Directive</a></li><li class="leftmenu"><a href="/angular-7-ngstyle-directive">Angular 7 ngStyle Directive</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading3"><button aria-controls="flush-collapse3" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse3" data-bs-toggle="collapse" type="button">Angular 7 Databinding</button></h2><div aria-labelledby="flush-heading3" class="accordion-collapse collapse show" id="flush-collapse3"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-databinding">Angular 7 Databinding</a></li><li class="leftmenu"><a href="/angular-7-string-interpolation">Angular 7 String Interpolation</a></li><li class="leftmenu"><a href="/angular-7-event-binding">Angular 7 Event Binding</a></li><li class="leftmenu"><a href="/angular-7-property-binding">Angular 7 Property Binding</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading4"><button aria-controls="flush-collapse4" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse4" data-bs-toggle="collapse" type="button">Angular 7 Pipes</button></h2><div aria-labelledby="flush-heading4" class="accordion-collapse collapse show" id="flush-collapse4"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-pipes">Angular 7 Pipes</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading5"><button aria-controls="flush-collapse5" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse5" data-bs-toggle="collapse" type="button">Error Fixing</button></h2><div aria-labelledby="flush-heading5" class="accordion-collapse collapse show" id="flush-collapse5"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-error-fixing">Angular 7 Error Fixing</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading6"><button aria-controls="flush-collapse6" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse6" data-bs-toggle="collapse" type="button">Angular 7 Forms</button></h2><div aria-labelledby="flush-heading6" class="accordion-collapse collapse show" id="flush-collapse6"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-forms">Angular 7 Forms</a></li><li class="leftmenu"><a href="/data-flow-in-angular-7-forms">Data Flow in Angular Forms</a></li><li class="leftmenu"><a href="/angular-reactive-forms">Angular Reactive Forms</a></li><li class="leftmenu"><a href="/angular-template-driven-forms">Template-driven Forms</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading7"><button aria-controls="flush-collapse7" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse7" data-bs-toggle="collapse" type="button">Angular Misc</button></h2><div aria-labelledby="flush-heading7" class="accordion-collapse collapse show" id="flush-collapse7"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-vs-react">Angular vs React</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading8"><button aria-controls="flush-collapse8" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse8" data-bs-toggle="collapse" type="button">Angular + Spring</button></h2><div aria-labelledby="flush-heading8" class="accordion-collapse collapse show" id="flush-collapse8"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-spring-crud-example">CRUD Example</a></li><li class="leftmenu"><a href="/angular-spring-login-and-logout-example">Login &amp; Logout Example</a></li><li class="leftmenu"><a href="/angular-spring-search-field-example">Search Field Example</a></li></ul></div></div></div></div></div></div><div class="col-12 col-md-7"><div class="overview"><html><head></head><body><div id="city"><table><tbody><tr><td><div id="bottomnextup"><a class="next" href="angular-spring-login-and-logout-example">next →</a> <a class="next" href="angular-18">← prev</a></div><h1 class="h1">Spring Angular CRUD Application</h1><div style="font-size:14px;margin-top:5px;margin-bottom:5px;color:#6f6e6e"><span>26 Apr 2025</span> | <span><i aria-hidden="true" class="fa fa-clock-o"></i> 10 min read</span></div><p>In this section, we are going to develop a CRUD (create-read-update-delete) web application. This application contains the student form that includes the CRUD features like add, view, delete, and update student. In this integration, we are using Spring Boot to handle the backend part and Angular to handle the frontend part.</p><h2 class="h2">Working of Application</h2><ul class="points"><li>Once we deployed our application on the server, a student form generates at the web browser.</li><li>The form facilitates to add and view students.</li><li>On clicking add student link, the page redirects to create student form where we can add a student by filling the required details and submit them.</li><li>Using view student link, we can fetch the details of the existing student. Here, each student also contains update and delete link.</li><li>So, we can update the details of the student and also delete them from the database.</li><li>Once completed, provide the URL http://localhost:4200/ at the web browser.</li></ul><h2 class="h2">Tools to be used</h2><ul class="points"><li>Use any IDE to develop the Spring and Hibernate project. It may be STS/Eclipse/Netbeans. Here, we are using STS (Spring Tool Suite).</li><li>MySQL for the database.</li><li>Use any IDE to develop the Angular project. It may be Visual Studio Code/Sublime. Here, we are using Visual Studio Code.</li><li>Server: Apache Tomcat/JBoss/Glassfish/Weblogic/Websphere.</li></ul><h2 class="h2">Technologies we used</h2><p>Here, we are using the following technologies:</p><ul class="points"><li>SpringBoot 2</li><li>Hibernate 5</li><li>Angular 6</li><li>MYSQL</li></ul><h2 class="h2">Create Database</h2><p>Let's create a database <strong>indigo</strong>. There is no need to create a table as Hibernate automatically created it.</p><h2 class="h2">Spring Module</h2><p>Let's see the directory structure of Spring Boot we need to follow:</p><img alt="Angular + Spring CRUD Example" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application.png"/><p>To develop a CRUD application, follow the below steps: -</p><ul class="points"><li>Add dependencies to pom.xml file.</li></ul><div class="codeblock"><textarea class="xml" name="code">&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/xsd/maven-4.0.0.xsd"&gt;
	&lt;modelVersion&gt;4.0.0&lt;/modelVersion&gt;
	&lt;parent&gt;
		&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
		&lt;artifactId&gt;spring-boot-starter-parent&lt;/artifactId&gt;
		&lt;version&gt;2.1.4.RELEASE&lt;/version&gt;
		&lt;relativePath/&gt; &lt;!-- lookup parent from repository --&gt;
	&lt;/parent&gt;
	&lt;groupId&gt;com.main&lt;/groupId&gt;
	&lt;artifactId&gt;Student&lt;/artifactId&gt;
	&lt;version&gt;0.0.1-SNAPSHOT&lt;/version&gt;
	&lt;name&gt;Student&lt;/name&gt;
	&lt;description&gt;Demo project for Spring Boot&lt;/description&gt;

	&lt;properties&gt;
		&lt;java.version&gt;1.8&lt;/java.version&gt;
	&lt;/properties&gt;

	&lt;dependencies&gt;
	
		&lt;dependency&gt;
		    &lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
		    &lt;artifactId&gt;spring-boot-devtools&lt;/artifactId&gt;
            &lt;optional&gt;true&lt;/optional&gt;
		&lt;/dependency&gt;
	
		&lt;dependency&gt;
			&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
			&lt;artifactId&gt;spring-boot-starter-data-jpa&lt;/artifactId&gt;
		&lt;/dependency&gt;
		&lt;dependency&gt;
			&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
			&lt;artifactId&gt;spring-boot-starter-web&lt;/artifactId&gt;
		&lt;/dependency&gt;

		&lt;dependency&gt;
			&lt;groupId&gt;mysql&lt;/groupId&gt;
			&lt;artifactId&gt;mysql-connector-java&lt;/artifactId&gt;
			&lt;scope&gt;runtime&lt;/scope&gt;
		&lt;/dependency&gt;
		&lt;dependency&gt;
			&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
			&lt;artifactId&gt;spring-boot-starter-test&lt;/artifactId&gt;
			&lt;scope&gt;test&lt;/scope&gt;
		&lt;/dependency&gt;
	&lt;/dependencies&gt;

	&lt;build&gt;
		&lt;plugins&gt;
			&lt;plugin&gt;
				&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
				&lt;artifactId&gt;spring-boot-maven-plugin&lt;/artifactId&gt;
			&lt;/plugin&gt;
		&lt;/plugins&gt;
	&lt;/build&gt;

&lt;/project&gt;
</textarea></div><ul class="points"><li>Create the configuration class<br/>Instead of XML, we perform annotation-based configuration. So, we create a class Config.java and specify the required configuration in it. However, there is one more configuration class StudentApplication.java. This class is provided by Spring Boot automatically.q</li></ul><p><strong>Config.java</strong></p><div class="codeblock"><textarea class="java" name="code">package config;

import java.util.Properties;
import javax.sql.DataSource;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.boot.autoconfigure.EnableAutoConfiguration;
import org.springframework.boot.autoconfigure.orm.jpa.HibernateJpaAutoConfiguration;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.ComponentScans;
import org.springframework.context.annotation.Configuration;
import org.springframework.jdbc.datasource.DriverManagerDataSource;
import org.springframework.orm.hibernate5.HibernateTransactionManager;
import org.springframework.orm.hibernate5.LocalSessionFactoryBean;
import org.springframework.transaction.annotation.EnableTransactionManagement;
import org.springframework.web.servlet.view.InternalResourceViewResolver;


@Configuration
@EnableTransactionManagement
@EnableAutoConfiguration(exclude = { HibernateJpaAutoConfiguration.class})
@ComponentScans(value = { @ComponentScan("boot.entry"),
	      @ComponentScan("Model"),
	      @ComponentScan("Controller"),
	      @ComponentScan("DAO"),
	      @ComponentScan("Miscallaneous"),
	      @ComponentScan("Service")})
public class Config {

	 @Value("${db.driver}")
	    private String DB_DRIVER;

	    @Value("${db.password}")
	    private String DB_PASSWORD;

	    @Value("${db.url}")
	    private String DB_URL;

	    @Value("${db.username}")
	    private String DB_USERNAME;

	    @Value("${hibernate.dialect}")
	    private String HIBERNATE_DIALECT;

	    @Value("${hibernate.show_sql}")
	    private String HIBERNATE_SHOW_SQL;

	    @Value("${hibernate.hbm2ddl.auto}")
	    private String HIBERNATE_HBM2DDL_AUTO;

	    @Value("${entitymanager.packagesToScan}")
	    private String ENTITYMANAGER_PACKAGES_TO_SCAN;

	    @Bean
	    public LocalSessionFactoryBean sessionFactory() {
	        LocalSessionFactoryBean sessionFactory = new LocalSessionFactoryBean();
	        sessionFactory.setDataSource(dataSource());
	        sessionFactory.setPackagesToScan(ENTITYMANAGER_PACKAGES_TO_SCAN);
	        Properties hibernateProperties = new Properties();
	        hibernateProperties.put("hibernate.dialect", HIBERNATE_DIALECT);
	        hibernateProperties.put("hibernate.show_sql", HIBERNATE_SHOW_SQL);
	        hibernateProperties.put("hibernate.hbm2ddl.auto", HIBERNATE_HBM2DDL_AUTO);
	        sessionFactory.setHibernateProperties(hibernateProperties);
	        return sessionFactory;
	    }

	    @Bean
	    public DataSource dataSource() {
	        DriverManagerDataSource dataSource = new DriverManagerDataSource();
	        dataSource.setDriverClassName(DB_DRIVER);
	        dataSource.setUrl(DB_URL);
	        dataSource.setUsername(DB_USERNAME);
	        dataSource.setPassword(DB_PASSWORD);
	        return dataSource;
	    }

	    @Bean
	    public HibernateTransactionManager transactionManager() {
	        HibernateTransactionManager txManager = new HibernateTransactionManager();
	        txManager.setSessionFactory(sessionFactory().getObject());
	        return txManager;
	    }
	    
	    @Bean
	    public InternalResourceViewResolver jspViewResolver() {
	        InternalResourceViewResolver resolver= new InternalResourceViewResolver();
	        resolver.setPrefix("/views/");
	        resolver.setSuffix(".jsp");
	        return resolver;
	    } 
	   
	   
	   
	}
</textarea></div><p><strong>StudentApplication.java</strong></p><div class="codeblock"><textarea class="java" name="code">package config;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class StudentApplication {

	public static void main(String[] args) {
		SpringApplication.run(StudentApplication.class, args);
	}

}
</textarea></div><ul class="points"><li>Create the entity class<br/>Here, we are creating an Entity/POJO (Plain Old Java Object) class.</li></ul><p><strong>Student.java</strong></p><div class="codeblock"><textarea class="java" name="code">package Model;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="student")
public class Student {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private int student_id;
	private String student_name;
	private String student_email;
	private String student_branch;
	public int getStudent_id() {
		return student_id;
	}
	public void setStudent_id(int student_id) {
		this.student_id = student_id;
	}
	public String getStudent_name() {
		return student_name;
	}
	public void setStudent_name(String student_name) {
		this.student_name = student_name;
	}
	public String getStudent_email() {
		return student_email;
	}
	public void setStudent_email(String student_email) {
		this.student_email = student_email;
	}
	public String getStudent_branch() {
		return student_branch;
	}
	public void setStudent_branch(String student_branch) {
		this.student_branch = student_branch;
	}

	
}
</textarea></div><ul class="points"><li>Create the DAO interface<br/>Here, we are creating the DAO interface to perform database related operations.</li></ul><p><strong>Student_DAO.java</strong></p><div class="codeblock"><textarea class="java" name="code">package DAO;

import java.util.List;

import Model.Student;

public interface Student_DAO {

	public boolean saveStudent(Student student);
	public List&lt;Student&gt; getStudents();
	public boolean deleteStudent(Student student);
	public List&lt;Student&gt; getStudentByID(Student student);
	public boolean updateStudent(Student student);
}
</textarea></div><ul class="points"><li>Create the DAO interface implementation class</li></ul><p><strong>Student_DAO_Imp.java</strong></p><div class="codeblock"><textarea class="java" name="code">package DAO;

import java.util.List;


import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.query.Query;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;


import Model.Student;

@Repository
public class Student_DAO_Imp  implements Student_DAO{

	@Autowired
	private SessionFactory sessionFactory;
	
	@Override
	public boolean saveStudent(Student student) {
		boolean status=false;
		try {
			sessionFactory.getCurrentSession().save(student);
			status=true;
		} catch (Exception e) {
			e.printStackTrace();
		}
		return status;
	}

	@Override
	public List&lt;Student&gt; getStudents() {
		Session currentSession = sessionFactory.getCurrentSession();
		Query&lt;Student&gt; query=currentSession.createQuery("from Student", Student.class);
		List&lt;Student&gt; list=query.getResultList();
		return list;
	}

	@Override
	public boolean deleteStudent(Student student) {
		boolean status=false;
		try {
			sessionFactory.getCurrentSession().delete(student);
			status=true;
		} catch (Exception e) {
			e.printStackTrace();
		}
		return status;
	}

	@Override
	public List&lt;Student&gt; getStudentByID(Student student) {
		Session currentSession = sessionFactory.getCurrentSession();
		Query&lt;Student&gt; query=currentSession.createQuery("from Student where student_id=:student_id", Student.class);
		query.setParameter("student_id", student.getStudent_id());
		List&lt;Student&gt; list=query.getResultList();
		return list;
	}

	@Override
	public boolean updateStudent(Student student) {
		boolean status=false;
		try {
			sessionFactory.getCurrentSession().update(student);
			status=true;
		} catch (Exception e) {
			e.printStackTrace();
		}
		return status;
	}
	
	

}
</textarea></div><ul class="points"><li>Create the service layer interface</li></ul><p>Here, we are creating a service layer interface that acts as a bridge between DAO and Entity classes.</p><p><strong>Student_Service.java</strong></p><div class="codeblock"><textarea class="java" name="code">package Service;

import java.util.List;
import Model.Student;

public interface Student_Service {

	
	public boolean saveStudent(Student student);
	public List&lt;Student&gt; getStudents();
	public boolean deleteStudent(Student student);
	public List&lt;Student&gt; getStudentByID(Student student);
	public boolean updateStudent(Student student);
}
</textarea></div><ul class="points"><li>Create the service layer implementation class</li></ul><p><strong>Student_Service_Imp.java</strong></p><div class="codeblock"><textarea class="java" name="code">package Service;

import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import DAO.Student_DAO;
import Model.Student;

@Service
@Transactional
public class Student_Service_Imp implements Student_Service {
 
	@Autowired
	private Student_DAO studentdao;
	
	@Override
	public boolean saveStudent(Student student) {
		return studentdao.saveStudent(student);
	}

	@Override
	public List&lt;Student&gt; getStudents() {
		return studentdao.getStudents();
	}

	@Override
	public boolean deleteStudent(Student student) {
		return studentdao.deleteStudent(student);
	}

	@Override
	public List&lt;Student&gt; getStudentByID(Student student) {
		return studentdao.getStudentByID(student);
	}

	@Override
	public boolean updateStudent(Student student) {
		return studentdao.updateStudent(student);
	}

}
</textarea></div><ul class="points"><li>Create the controller class</li></ul><p><strong>Controller.java</strong></p><div class="codeblock"><textarea class="java" name="code">package Controller;

import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import Model.Student;
import Service.Student_Service;

@RestController
@CrossOrigin(origins="http://localhost:4200")
@RequestMapping(value="/api")
public class Controller {
	
	@Autowired
	private Student_Service studentservice;
	
	@PostMapping("save-student")
	public boolean saveStudent(@RequestBody Student student) {
		 return studentservice.saveStudent(student);
		
	}
	
	@GetMapping("students-list")
	public List&lt;Student&gt; allstudents() {
		 return studentservice.getStudents();
		
	}
	
	@DeleteMapping("delete-student/{student_id}")
	public boolean deleteStudent(@PathVariable("student_id") int student_id,Student student) {
		student.setStudent_id(student_id);
		return studentservice.deleteStudent(student);
	}

	@GetMapping("student/{student_id}")
	public List&lt;Student&gt; allstudentByID(@PathVariable("student_id") int student_id,Student student) {
		 student.setStudent_id(student_id);
		 return studentservice.getStudentByID(student);
		
	}
	
	@PostMapping("update-student/{student_id}")
	public boolean updateStudent(@RequestBody Student student,@PathVariable("student_id") int student_id) {
		student.setStudent_id(student_id);
		return studentservice.updateStudent(student);
	}
}
</textarea></div><ul class="points"><li>Edit application.properties file<br/>Here, we are editing the <strong>application.properties</strong> file present inside the <strong>src/main/resources</strong> folder. The following file contains the configuration properties.</li></ul><p><strong>application.properties</strong></p><div class="codeblock"><textarea class="java" name="code"># Database
db.driver= com.mysql.jdbc.Driver
db.url= jdbc:mysql://localhost:3306/indigo
db.username=root
db.password=

# Hibernate
hibernate.dialect=org.hibernate.dialect.MySQL5Dialect
hibernate.show_sql=true
hibernate.hbm2ddl.auto=update
entitymanager.packagesToScan=Model
</textarea></div><h2 class="h2">Angular Module</h2><p>Let's see the directory structure of Angular we need to follow:</p><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application2.png"/><ul class="points"><li>Create an Angular project</li></ul><p>Let's create an Angular project by using the following command:</p><p><em>ng new Angular</em></p><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application3.png"/><br/><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application4.png"/><p>Here, <strong>Angular</strong> is the name of the project.</p><h2 class="h2">Install Bootstrap CSS framework</h2><p>Use the following command to install bootstrap in the project.</p><p><em>npm install <a class="__cf_email__" data-cfemail="e7858888939493958697a7d4c9d4c9d0" href="/cdn-cgi/l/email-protection">[email protected]</a> --save</em></p><p>Now, include the following code in the style.css file.</p><div class="codeblock"><textarea class="java" name="code">@import "~bootstrap/dist/css/bootstrap.css";
</textarea></div><h2 class="h2">Install Angular-DataTable</h2><p>Use the following command to install angular datatable in the project.</p><p><em>npm install angular-datatable --save</em></p><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application5.png"/><p>It is required to include <strong>DataTableModule</strong> in imports array of <strong>app.module.ts</strong> file.</p><ul class="points"><li>Generate Components<br/>Open the project in visual studio and then use the following command to generate Angular components:<br/><em>ng g c AddStudent</em><br/><em>ng g c StudentList</em></li></ul><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application6.png"/><p>Let's also create a service class by using the following command: -</p><p><em>ng g s Student</em></p><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application7.png"/><ul class="points"><li>Edit the <strong>app.module.ts</strong> file<ul class="points"><li><strong>Import Routing</strong> - Here, we are importing routing file (app-routing.module.ts) and include it in imports array.</li><li><strong>Import ReactiveFormsModule</strong> - Here, we are importing <strong>ReactiveFormsModule</strong> for reactive forms and specify it in imports array.</li><li><strong>Import HttpModule</strong> - Here, we are importing <strong>HttpModule</strong> for server requests and specifying it in imports array.</li><li><strong>Register Service class</strong> - Here, we are mentioning the service class in provider's array.</li></ul></li></ul><div class="codeblock"><textarea class="java" name="code">import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import {DataTablesModule} from 'angular-datatables';
import { StudentListComponent } from './student-list/student-list.component';
import { AddStudentComponent } from './add-student/add-student.component';

@NgModule({
  declarations: [
    AppComponent,
    StudentListComponent,
    AddStudentComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule,
    DataTablesModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
</textarea></div><ul class="points"><li>Edit the <strong>app-routing.module.ts</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { StudentListComponent } from './student-list/student-list.component';
import { AddStudentComponent } from './add-student/add-student.component';

const routes: Routes = [
  { path: '', redirectTo: 'view-student', pathMatch: 'full' },
  { path: 'view-student', component: StudentListComponent },
  { path: 'add-student', component: AddStudentComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
</textarea></div><ul class="points"><li>Edit the <strong>app.component.html</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">    &lt;div  class="container-fluid"&gt;
    &lt;nav class="navbar navbar-expand-sm bg-dark navbar-dark"&gt;
        &lt;ul class="navbar-nav"&gt;
          &lt;li class="nav-item "&gt;
            &lt;a routerLink="view-student" class="nav-link" class="btn btn-primary active" role="button" &gt;View Student&lt;/a&gt;
          &lt;/li&gt; 
          &lt;li class="nav-item"&gt;
            &lt;a  routerLink="add-student" class="nav-link" class="btn btn-primary active" role="button" &gt;Add Student&lt;/a&gt;
          &lt;/li&gt;          
        &lt;/ul&gt;
      &lt;/nav&gt;   
        &lt;router-outlet&gt;&lt;/router-outlet&gt;
    &lt;/div&gt;
</textarea></div><ul class="points"><li>Create the <strong>Student.ts</strong> class</li></ul><p>Let's create a class by using the following command: -</p><p><em>ng g class Student</em></p><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application8.png"/><p>Now, specify the required fields within the <strong>Student</strong> class.</p><div class="codeblock"><textarea class="java" name="code">export class Student {

    student_id:number;
    student_name:String;
    student_email:String;
    student_branch:String;
}
</textarea></div><p>The purpose of this class is to map the specified fields with the fields of Spring entity class.</p><ul class="points"><li>Edit the <strong>student.service.ts</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})

export class StudentService {

  private baseUrl = 'http://localhost:8080/api/';

  constructor(private http:HttpClient) { }

  getStudentList(): Observable&lt;any&gt; {
    return this.http.get(`${this.baseUrl}`+'students-list');
  }

  createStudent(student: object): Observable&lt;object&gt; {
    return this.http.post(`${this.baseUrl}`+'save-student', student);
  }

  deleteStudent(id: number): Observable&lt;any&gt; {
    return this.http.delete(`${this.baseUrl}/delete-student/${id}`, { responseType: 'text' });
  }

  getStudent(id: number): Observable&lt;Object&gt; {
    return this.http.get(`${this.baseUrl}/student/${id}`);
  }

  updateStudent(id: number, value: any): Observable&lt;Object&gt; {
    return this.http.post(`${this.baseUrl}/update-student/${id}`, value);
  }
  
}
</textarea></div><ul class="points"><li>Edit the <strong>add-student.component.ts</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">import { Component, OnInit } from '@angular/core';
import { StudentService } from '../student.service';
import {FormControl,FormGroup,Validators} from '@angular/forms';
import { Student } from '../student';
@Component({
  selector: 'app-add-student',
  templateUrl: './add-student.component.html',
  styleUrls: ['./add-student.component.css']
})
export class AddStudentComponent implements OnInit {

  constructor(private studentservice:StudentService) { }

  student : Student=new Student();
  submitted = false;

  ngOnInit() {
    this.submitted=false;
  }

  studentsaveform=new FormGroup({
    student_name:new FormControl('' , [Validators.required , Validators.minLength(5) ] ),
    student_email:new FormControl('',[Validators.required,Validators.email]),
    student_branch:new FormControl()
  });

  saveStudent(saveStudent){
    this.student=new Student();   
    this.student.student_name=this.StudentName.value;
    this.student.student_email=this.StudentEmail.value;
    this.student.student_branch=this.StudentBranch.value;
    this.submitted = true;
    this.save();
  }

  

  save() {
    this.studentservice.createStudent(this.student)
      .subscribe(data =&gt; console.log(data), error =&gt; console.log(error));
    this.student = new Student();
  }

  get StudentName(){
    return this.studentsaveform.get('student_name');
  }

  get StudentEmail(){
    return this.studentsaveform.get('student_email');
  }

  get StudentBranch(){
    return this.studentsaveform.get('student_branch');
  }

  addStudentForm(){
    this.submitted=false;
    this.studentsaveform.reset();
  }
}
</textarea></div><ul class="points"><li>Edit the <strong>add-student.component.html</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">&lt;h3&gt;Create Student&lt;/h3&gt;
&lt;div class="row"&gt;
  &lt;div class="col-sm-4"&gt;&lt;/div&gt;
  &lt;div class="col-sm-4" &gt;
    &lt;div [hidden]="submitted" style="width: 400px;"&gt;
      &lt;form [formGroup]="studentsaveform" #savestudent (ngSubmit)="saveStudent(saveStudent)"&gt;
          &lt;div class="form-group"&gt;
              &lt;label for="name"&gt;Student Name&lt;/label&gt;
              &lt;input type="text" class="form-control"  formControlName="student_name" data-toggle="tooltip" 
                 data-placement="right" title="Enter Student Name" &gt;
              &lt;div class="alert alert-danger" *ngIf = "(StudentName.touched) &amp;&amp; (StudentName.invalid)" 
                style="margin-top: 5px;"&gt;
                  &lt;span *ngIf="StudentName.errors.required"&gt;Student Name is Required&lt;/span&gt;
                    &lt;span *ngIf = "StudentName.errors.minlength"&gt; 
                        MinLength Error 
                    &lt;/span&gt;                   
                &lt;/div&gt;
          &lt;/div&gt;
  
          &lt;div class="form-group"&gt;
              &lt;label for="name"&gt;Student Email&lt;/label&gt;
              &lt;input type="text" class="form-control" formControlName="student_email" 
                data-toggle="tooltip" data-placement="right" title="Enter Student Email"&gt;
                &lt;div class="alert alert-danger" *ngIf = "(StudentEmail.touched) &amp;&amp; (StudentEmail.invalid)" 
                style="margin-top: 5px;"&gt;
                  &lt;span *ngIf="StudentEmail.errors.required"&gt;Student Email is Required&lt;/span&gt;
                    &lt;span *ngIf = "StudentEmail.errors.email"&gt; 
                        Invalid Email Format 
                    &lt;/span&gt;                   
                &lt;/div&gt;
          &lt;/div&gt;
  
          &lt;div class="form-group"&gt;
              &lt;label for="branch"&gt;Student Branch&lt;/label&gt;
                &lt;select class="form-control" formControlName="student_branch" data-toggle="tooltip" 
                      data-placement="right" title="Select Student Branch"&gt;
                    &lt;option value="null"&gt;--Select Branch--&lt;/option&gt;
                  &lt;option value="B-Tech"&gt;B-Tech&lt;/option&gt;
                  &lt;option value="BCA"&gt;BCA&lt;/option&gt;
                  &lt;option value="MCA"&gt;MCA&lt;/option&gt;
                  &lt;option value="M-Tech"&gt;M-Tech&lt;/option&gt;
                &lt;/select&gt;
          &lt;/div&gt;
  
          &lt;button type="submit" class="btn btn-success"&gt;Submit&lt;/button&gt;
      &lt;/form&gt;
  &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-sm-4"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="col-sm-4"&gt;&lt;/div&gt;
  &lt;div class="col-sm-4"&gt;
      &lt;div [hidden]="!submitted"&gt;
         &lt;h4&gt;Student Added SuccessFully!&lt;/h4&gt;
         &lt;button (click)="addStudentForm()" class='btn btn-primary'&gt;Add More Student&lt;/button&gt;
      &lt;/div&gt;      
  &lt;/div&gt;
  &lt;div class="col-sm-4"&gt;&lt;/div&gt;
&lt;/div&gt;
</textarea></div><p>On clicking <strong>Add Student</strong>, the following page generates:</p><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application9.png"/><p>Now, fill the required details and submit them to add student.</p><ul class="points"><li>Edit the <strong>student-list.component.ts</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">import { Component, OnInit } from '@angular/core';
import { StudentService } from '../student.service';
import { Student } from '../student';
import { Observable,Subject } from "rxjs";

import {FormControl,FormGroup,Validators} from '@angular/forms';

@Component({
  selector: 'app-student-list',
  templateUrl: './student-list.component.html',
  styleUrls: ['./student-list.component.css']
})
export class StudentListComponent implements OnInit {

 constructor(private studentservice:StudentService) { }

  studentsArray: any[] = [];
  dtOptions: DataTables.Settings = {};
  dtTrigger: Subject&lt;any&gt;= new Subject();

  students: Observable&lt;Student[]&gt;;
  student : Student=new Student();
  deleteMessage=false;
  studentlist:any;
  isupdated = false;    
 

  ngOnInit() {
    this.isupdated=false;
    this.dtOptions = {
      pageLength: 6,
      stateSave:true,
      lengthMenu:[[6, 16, 20, -1], [6, 16, 20, "All"]],
      processing: true
    };   
    this.studentservice.getStudentList().subscribe(data =&gt;{
    this.students =data;
    this.dtTrigger.next();
    })
  }
  
  deleteStudent(id: number) {
    this.studentservice.deleteStudent(id)
      .subscribe(
        data =&gt; {
          console.log(data);
          this.deleteMessage=true;
          this.studentservice.getStudentList().subscribe(data =&gt;{
            this.students =data
            })
        },
        error =&gt; console.log(error));
  }

  updateStudent(id: number){
    this.studentservice.getStudent(id)
      .subscribe(
        data =&gt; {
          this.studentlist=data           
        },
        error =&gt; console.log(error));
  }

  studentupdateform=new FormGroup({
    student_id:new FormControl(),
    student_name:new FormControl(),
    student_email:new FormControl(),
    student_branch:new FormControl()
  });

  updateStu(updstu){
    this.student=new Student(); 
   this.student.student_id=this.StudentId.value;
   this.student.student_name=this.StudentName.value;
   this.student.student_email=this.StudentEmail.value;
   this.student.student_branch=this.StudentBranch.value;
   console.log(this.StudentBranch.value);
   

   this.studentservice.updateStudent(this.student.student_id,this.student).subscribe(
    data =&gt; {     
      this.isupdated=true;
      this.studentservice.getStudentList().subscribe(data =&gt;{
        this.students =data
        })
    },
    error =&gt; console.log(error));
  }

  get StudentName(){
    return this.studentupdateform.get('student_name');
  }

  get StudentEmail(){
    return this.studentupdateform.get('student_email');
  }

  get StudentBranch(){
    return this.studentupdateform.get('student_branch');
  }

  get StudentId(){
    return this.studentupdateform.get('student_id');
  }

  changeisUpdate(){
    this.isupdated=false;
  }
}
</textarea></div><ul class="points"><li>Edit the <strong>student-list.component.html</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">&lt;div class="panel panel-default"&gt;
  &lt;div class="panel-heading"&gt;
      &lt;h1 style="text-align: center"&gt;Students&lt;/h1&gt;&lt;br&gt;
      &lt;div class="row" [hidden]="!deleteMessage"&gt;
           
                &lt;div class="col-sm-4"&gt;&lt;/div&gt;
                &lt;div class="col-sm-4"&gt;
                        &lt;div class="alert alert-info alert-dismissible"&gt;
                                &lt;button type="button" class="close" data-dismiss="alert"&gt;×&lt;/button&gt;
                                &lt;strong&gt;Student Data Deleted&lt;/strong&gt;
                        &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="col-sm-4"&gt;&lt;/div&gt;
        &lt;/div&gt;           
    &lt;/div&gt;

  
  &lt;div class="panel-body"&gt;
      &lt;table  class="table table-hover table-sm" datatable [dtOptions]="dtOptions"
      [dtTrigger]="dtTrigger"  &gt;
          &lt;thead class="thead-light"&gt;
              &lt;tr&gt;
                  &lt;th&gt;Student Name&lt;/th&gt;
                  &lt;th&gt;Student Email&lt;/th&gt;
                  &lt;th&gt;Student Branch&lt;/th&gt;
                  &lt;th&gt;Action&lt;/th&gt;
                  
              &lt;/tr&gt;
          &lt;/thead&gt;
          &lt;tbody&gt;
               &lt;tr *ngFor="let student of students "&gt;
                  &lt;td&gt;{{student.student_name}}&lt;/td&gt;
                  &lt;td&gt;{{student.student_email}}&lt;/td&gt;
                  &lt;td&gt;{{student.student_branch}}&lt;/td&gt;
                  &lt;td&gt;&lt;button (click)="deleteStudent(student.student_id)" class='btn btn-primary'&gt;&lt;i class="fa fa-futboll-0"&gt;Delete&lt;/i&gt;&lt;/button&gt; 
                    &lt;button (click)="updateStudent(student.student_id)" class='btn btn-info'
                    data-toggle="modal" data-target="#myModal"&gt;Update&lt;/button&gt;
                  &lt;/td&gt;
                &lt;/tr&gt; 
          &lt;/tbody&gt;&lt;br&gt;
      &lt;/table&gt;
  &lt;/div&gt;
&lt;/div&gt; 

&lt;div class="modal" id="myModal"&gt;
        &lt;div class="modal-dialog"&gt;
          &lt;div class="modal-content"&gt;
                &lt;form [formGroup]="studentupdateform" #updstu (ngSubmit)="updateStu(updstu)"&gt;
            &lt;!-- Modal Header --&gt;
            &lt;div class="modal-header"&gt;
              &lt;h4 class="modal-title" style="text-align: center"&gt;Update Student&lt;/h4&gt;
              
            &lt;/div&gt;
            
            &lt;!-- Modal body --&gt;
            &lt;div class="modal-body" *ngFor="let student of studentlist " &gt;
                &lt;div [hidden]="isupdated"&gt;

                    &lt;input type="hidden" class="form-control"  formControlName="student_id" [(ngModel)]="student.student_id"&gt;
                            &lt;div class="form-group"&gt;
                                &lt;label for="name"&gt;Student Name&lt;/label&gt;
                                &lt;input type="text" class="form-control"  formControlName="student_name" [(ngModel)]="student.student_name"  &gt;
                            &lt;/div&gt;
                    
                            &lt;div class="form-group"&gt;
                                &lt;label for="name"&gt;Student Email&lt;/label&gt;
                                &lt;input type="text" class="form-control" formControlName="student_email" [(ngModel)]="student.student_email"&gt;
                            &lt;/div&gt;
                    
                            &lt;div class="form-group"&gt;
                                &lt;label for="name"&gt;Student Branch&lt;/label&gt;
                                  &lt;select class="form-control" formControlName="student_branch" required&gt;                                   
                                    &lt;option value="B-Tech" [selected]="'B-Tech' == student.student_branch"&gt;B-Tech&lt;/option&gt;
                                    &lt;option value="BCA" [selected]="'BCA' == student.student_branch"&gt;BCA&lt;/option&gt;
                                    &lt;option value="MCA" [selected]="'MCA' == student.student_branch" &gt;MCA&lt;/option&gt;
                                    &lt;option value="M-Tech" [selected]="'M-Tech' == student.student_branch"&gt;M-Tech&lt;/option&gt;
                                  &lt;/select&gt;                               
                            &lt;/div&gt;                   
                  &lt;/div&gt;  
                  &lt;div [hidden]="!isupdated"&gt;
                      &lt;h4&gt;Student Detail Updated!&lt;/h4&gt;
                  &lt;/div&gt;        
                    
            &lt;/div&gt;
            
            &lt;!-- Modal footer --&gt;
            &lt;div class="modal-footer" &gt;
              &lt;button type="submit" class="btn btn-success" [hidden]="isupdated"&gt;Update&lt;/button&gt;
              &lt;button type="button" class="btn btn-danger" data-dismiss="modal" (click)="changeisUpdate()"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
            
        &lt;/form&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
</textarea></div><p>On clicking <strong>View Student</strong>, the following page generates:</p><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application10.png"/><p>On clicking <strong>Update Student</strong>, the following bootstrap modal appears:</p><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application11.png"/><p>Here, we can update the details of the existing student.</p><p>On clicking <strong>Delete</strong>, the existing student is deleted from the database. Let's see the result after deleting the particular student.</p><img alt="Spring Angular CRUD Application" src="https://d2jdgazzki9vjm.cloudfront.net/sppages/angular/images/spring-angular-crud-application12.png"/><div class="download"><a href="https://d2jdgazzki9vjm.cloudfront.net/sppages/download/angular/AngularSpringBootCrud.zip">Download this example</a></div><hr/><div class="nexttopicdiv"><span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="angular-spring-file-upload-example">File Upload Example</a></span></div><br/><br/><div id="bottomnext"><a class="next" href="angular-18" style="float:left">← prev</a> <a class="next" href="angular-spring-login-and-logout-example" style="float:right">next →</a></div><br/><br/></td></tr></tbody></table></div></body></html><br/></div><div class="related-posts-container"><h2 class="h3">Related Posts</h2><ul class="related-posts-list"><li><a class="related-post-item" href="angular-spring-login-and-logout-example"><h3 class="h3">Login &amp; Logout Example</h3><p class="related-post-content">Spring Angular Login &amp;amp; Logout Application In this section, we are going to create a login and logout web application. This application includes a signup and login form. In this integration, we are using Spring to handle the backend part and Angular to handle the frontend part. Working...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 20 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="angular-spring-search-field-example"><h3 class="h3">Search Field Example</h3><p class="related-post-content">Spring Angular Search Field Application In this section, we are going to create a Search Field web application. This application includes data in a tabular form with search fields. In this integration, we are using Spring to handle the backend part and Angular to handle the frontend...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 8 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li></ul></div><br/><div class="container-xxl" style="position:relative;margin-top:-20px"><div class="aboutus themecolor subscribe"><div class="container px-lg-5 text-center"><h4 class="mb-4 animated zoomIn mediumheading">Subscribe to Tpoint Tech</h4><p class="pb-3 animated zoomIn text-center">We request you to subscribe our newsletter for upcoming updates.</p><div class="position-relative w-100 mt-3"><input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" id="email" placeholder="Your Email" style="height:48px" type="email"/> <button class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2" id="subscribeBtn" type="button">Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i></button></div><p class="mt-3" id="message"></p></div></div></div><br/><div class="ad-container" id="ad-container"></div><br/></div><div class="col-md-2"><div class="advertisement"><div id="sidebar_300x600_1_bq_307_556"></div><div id="sidebar_300x600_2_bq_307_557"></div><div id="sidebar_300x600_3_bq_307_558"></div></div></div></div><script>function closePopup(){document.getElementById("popup").style.display="none"}setTimeout((function(){localStorage.getItem("popupShown")||(document.getElementById("popup").style.display="flex",localStorage.setItem("popupShown","true"))}),5e3)</script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>$(document).ready((function(){$("#subscribeBtn").click((function(){var e=$("#email").val().trim();""!==e?$.ajax({url:"/subscribe",type:"POST",contentType:"application/json",data:JSON.stringify({email:e}),beforeSend:function(){$("#subscribeBtn").prop("disabled",!0).html("Subscribing...")},success:function(e){$("#message").html("<span style='color: green;'>Subscription successful! Please check your email.</span>"),$("#email").val("")},error:function(e){var s=e.responseJSON?e.responseJSON.error:"Subscription failed.";$("#message").html("<span style='color: red;'>"+s+"</span>")},complete:function(){$("#subscribeBtn").prop("disabled",!1).html('Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i>')}}):$("#message").html("<span style='color: red;'>Please enter your email.</span>")}))}))</script><div class="container-fluid footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"><div class="container py-5"><div class="row"><div class="col-md-6 col-lg-5"><img alt="Logo" src="https://images.tpointtech.com/static/images/logo.png"/><p>We provides tutorials and interview questions of all technology like java tutorial, android, java frameworks</p><h5 class="mb-4">Contact info</h5><p><svg viewbox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg>G-13, 2nd Floor, Sec-3, Noida, UP, 201301, India</p><p><svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v128z"></path></svg><a href="mailto:hr@tpointtech.com">hr@tpointtech.com</a></p><p><svg fill="currentColor" height="1.8em" stroke="currentColor" stroke-width="0" viewbox="0 0 24 24" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.49 3c-2.21 0-4.21.9-5.66 2.34l1.06 1.06a6.47 6.47 0 0 1 9.18 0l1.06-1.06A7.932 7.932 0 0 0 16.49 3z"></path><path d="M20.03 7.46a5.022 5.022 0 0 0-7.08 0l1.06 1.06c.63-.63 1.51-1.03 2.47-1.03s1.84.39 2.47 1.03l1.08-1.06zM15.08 9.59 16.49 11l1.41-1.41c-.36-.37-.86-.59-1.41-.59s-1.05.22-1.41.59z"></path><path d="m15.63 14.4-2.52 2.5c-2.5-1.43-4.57-3.5-6-6l2.5-2.52c.23-.24.33-.57.27-.9L9.13 3.8c-.09-.46-.5-.8-.98-.8H4c-.56 0-1.03.47-1 1.03.17 2.89 1.05 5.6 2.43 7.97 1.58 2.73 3.85 4.99 6.57 6.57 2.37 1.37 5.08 2.26 7.97 2.43.56.03 1.03-.44 1.03-1v-4.15c0-.48-.34-.89-.8-.98l-3.67-.73a.985.985 0 0 0-.9.26z"></path></svg><a href="tel:+919599086977">+91-9599086977</a></p><h5 class="mb-4">Follow us</h5><div class="d-flex"><a class="btn btn-outline-light btn-social" href="https://www.facebook.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Facebook Page" src="https://images.tpointtech.com/static/img/facebook.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://x.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech X Page" src="https://images.tpointtech.com/static/images/x.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/tpointtech/" rel="nofollow" target="_blank"><img alt="Tpoint Tech Linkedin Page" src="https://images.tpointtech.com/static/images/linkedin.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://t.me/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Telegram Channel" src="https://images.tpointtech.com/static/images/telegram.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@tpointtechofficial" rel="nofollow" target="_blank"><img alt="Tpoint Tech Youtube Channel" src="https://images.tpointtech.com/static/img/youtube.png"/></a><a class="btn btn-outline-light btn-social" href="https://www.instagram.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech instagram Page" src="https://images.tpointtech.com/static/images/insta.png" width="24"/></a></div></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Tutorials</h5><a class="btn btn-link" href="/java-tutorial">Java</a> <a class="btn btn-link" href="/data-structure-tutorial">Data Structures</a> <a class="btn btn-link" href="/c-programming-language-tutorial">C Programming</a> <a class="btn btn-link" href="/cpp-tutorial">C++ Tutorial</a> <a class="btn btn-link" href="/c-sharp-tutorial">C# Tutorial</a> <a class="btn btn-link" href="/php-tutorial">PHP Tutorial </a><a class="btn btn-link" href="/html-tutorial">HTML Tutorial</a> <a class="btn btn-link" href="/javascript-tutorial">JavaScript Tutorial </a><a class="btn btn-link" href="/jquery-tutorial">jQuery Tutorial </a><a class="btn btn-link" href="/spring-tutorial">Spring Tutorial</a></div><div class="col-md-6 col-lg-3"><h5 class="mb-4">Interview Questions</h5><a class="btn btn-link" href="/microsoft-interview-questions">Microsoft </a><a class="btn btn-link" href="/amazon-interview-questions">Amazon </a><a class="btn btn-link" href="/adobe-interview-questions">Adobe </a><a class="btn btn-link" href="/intuit-interview-questions">Intuit </a><a class="btn btn-link" href="/accenture-interview-questions">Accenture</a> <a class="btn btn-link" href="/cognizant-interview-questions">Cognizant </a><a class="btn btn-link" href="/capgemini-interview-questions">Capgemini </a><a class="btn btn-link" href="/wipro-interview-questions">Wipro </a><a class="btn btn-link" href="/tcs-interview-questions">Tcs </a><a class="btn btn-link" href="/infosys-interview-questions">Infosys</a></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Online Compiler</h5><a class="btn btn-link" href="/compiler/c">C </a><a class="btn btn-link" href="/compiler/r">R </a><a class="btn btn-link" href="/compiler/cpp">C++ </a><a class="btn btn-link" href="/compiler/php">Php </a><a class="btn btn-link" href="/compiler/java">Java </a><a class="btn btn-link" href="/compiler/html">Html </a><a class="btn btn-link" href="/compiler/swift">Swift </a><a class="btn btn-link" href="/compiler/python">Python </a><a class="btn btn-link" href="/compiler/javascript">JavaScript </a><a class="btn btn-link" href="/compiler/typescript">TypeScript</a></div></div></div><div class="container text-center px-lg-5"><div class="col-md-12 text-center mb-3 mb-md-0"></div><a href="/latest-post">Latest Post</a> | <a href="/tutorials-list">Tutorials List</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/about-us">About Us</a> | <a href="/contact-us">Contact Us</a></div><div class="copyright"><div class="row"><div class="col-md-12 text-center mb-3 mb-md-0">© Copyright 2011 - 2025 TpointTech.com. All Rights Reserved.</div></div></div></div></div></section><div aria-hidden="true" aria-labelledby="searchModalLabel" class="modal fade" id="searchModal" tabindex="-1"><div class="modal-dialog modal-dialog-scrollable modal-lg"><div class="modal-content shadow rounded-3"><div class="modal-header text-white"><img alt="TPoint Tech Logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" style="height:30px;margin-right:10px"/> <button aria-label="Close" class="btn-close btn-close-black" data-bs-dismiss="modal" type="button"></button></div><div class="modal-body" id="modalResults"></div></div></div></div><a class="btn btn-info btn-floating btn-lg" href="#" id="scrollButton"><i class="fas fa-arrow-up"></i></a><script defer="defer" src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script><script defer="defer" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.12.1/polyfill.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js"></script><script src="/static/js/categoryDetails.js"></script><script src="/static/js/shcoreandbrush.js"></script><script>dp.SyntaxHighlighter.HighlightAll("code")</script><script async="" src="/static/js/lazysizes.min.js"></script><script src="/static/js/main.js"></script><script>const hamburger=document.querySelector(".hamburger"),navMenu=document.querySelector(".nav");function open_menu(){hamburger.classList.toggle("active"),navMenu.classList.toggle("active")}hamburger?.addEventListener("click",open_menu);const navLink=document.querySelectorAll(".nav-link");function closeMenu(){hamburger?.classList?.remove("active"),navMenu?.classList?.remove("active")}navLink.forEach((e=>e.addEventListener("click",closeMenu)))</script><script>function toggleSidebar(){let e=document.querySelector(".col-md-2.sidebar"),l=document.querySelector(".leftmenu");window.innerWidth<=895&&("none"===e.style.display?(e.style.display="block",l.style.display="block",e.style.position="fixed",e.style.zIndex="555"):(e.style.display="none",l.style.display="none"))}toggleSidebar()</script><script>function handleAccordionOnLoad(){const o=window.innerWidth<=768,e=window.location.pathname,c=document.querySelectorAll(".leftmenu a"),n=document.querySelectorAll(".accordion-collapse");o?(n.forEach((o=>o.classList.remove("show"))),c.forEach((o=>{if(o.getAttribute("href")===e){const e=o.closest(".accordion-item");if(e){const o=e.querySelector(".accordion-collapse");o&&o.classList.add("show")}}}))):n.forEach((o=>o.classList.add("show")))}handleAccordionOnLoad(),window.addEventListener("resize",handleAccordionOnLoad)</script><script>const showhide=s=>{const e=$("#answer"+s),a=$("#btntext"+s);a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-black.png)"),"block"===e.css("display")?(e.css("display","none"),a.text("Show Answer")):(e.css("display","block"),a.empty(),a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-close-black.png)"),a.append("Hide Answer"))}</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");e&&e.addEventListener("wheel",(function(t){0!==t.deltaY&&(t.preventDefault(),e.scrollLeft+=t.deltaY)}))}))</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");let t=!1,n=0,s=0;e.addEventListener("mousedown",(a=>{t=!0,e.classList.add("active"),n=a.pageX,s=e.scrollLeft})),["mouseup","mouseleave"].forEach((n=>{e.addEventListener(n,(()=>{t=!1,e.classList.remove("active")}))})),e.addEventListener("mousemove",(a=>{if(!t)return;a.preventDefault();const d=a.pageX-n;e.scrollLeft=s-d})),e.addEventListener("dragstart",(e=>e.preventDefault()))}))</script><script>let currentPage=1;const resultsPerPage=10;let fullData=[];function renderModalPage(e){const t=fullData.slice(0,100),l=10*(e-1),n=l+10,r=t.slice(l,n);let a="";const i=l+1,o=n>t.length?t.length:n;a+=`<div style="padding: 2px 0; font-size: 14px; color: #555;">\n      Showing ${i}–${o} of ${fullData.length.toLocaleString()} results\n    </div>`,a+="<ul>",r.forEach((e=>{a+=e.url?`<li><a href="${e.url}">${e.title} -Tpoint Tech <br><span style='color:#918a8a;font-size:13px;'>${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</span><br></a></li>`:`<li>${e.title} -Tpoint Tech <br> ${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</li>`})),a+="</ul>";const s=Math.ceil(t.length/10);if(s>1){a+='<div class="pagination-numbers" style="text-align:center;margin-top:15px;">';for(let t=1;t<=s;t++)a+=`<span class="pagination-number" onclick="renderModalPage(${t})" style="margin:0 5px;cursor:pointer;color:${t===e?"#000":"#007bff"};">${t}</span>`;a+="</div>"}$("#modalResults").html(a)}function changePage(e){currentPage=e,renderModalPage(currentPage)}function performSearch(e,t=!1){e.length<2?$("#results").empty().hide():$.get("/search",{q:e},(function(e){if($("#results").empty(),0===e.length?$("#results").append("<li>No results found</li>"):e.forEach((e=>{const t=e.url?`<li><a href="${e.url}">${e.title}</a></li>`:`<li>${e.title}</li>`;$("#results").append(t)})),$("#results").show(),t){fullData=e,currentPage=1,renderModalPage(currentPage);new bootstrap.Modal(document.getElementById("searchModal")).show()}}))}$("#searchInput").on("input",(function(){performSearch($(this).val().trim())})),$("#searchInput").on("keypress",(function(e){if(13===e.which){e.preventDefault();performSearch($(this).val().trim(),!0)}})),$(document).on("click",(function(e){$(e.target).closest("#searchContainer").length||$("#results").hide()}))</script><script>const searchInput=document.getElementById("searchInput"),iconSearch=document.getElementById("iconSearch"),iconClear=document.getElementById("iconClear"),searchBtn=document.getElementById("searchBtn");searchInput.addEventListener("input",(()=>{""!==searchInput.value.trim()?(iconSearch.style.display="none",iconClear.style.display="inline"):(iconSearch.style.display="inline",iconClear.style.display="none")})),searchBtn.addEventListener("click",(e=>{""!==searchInput.value.trim()&&(e.preventDefault(),searchInput.value="",iconSearch.style.display="inline",iconClear.style.display="none",$("#results").empty().hide(),searchInput.focus())}))</script></body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>