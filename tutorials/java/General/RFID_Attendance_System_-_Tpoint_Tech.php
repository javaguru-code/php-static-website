<?php
// Tutorial: RFID Attendance System - Tpoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RFID Attendance System - Tpoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>RFID Attendance System - Tpoint Tech</h1>
        <body onload="highlightlink()"><div class="xyz shadow-sm"><div class="sticky-top p-0" style="position:sticky;background-color:var(--light)"><div class="container-fluid"><div class="position-relative p-0"><nav class="navbar navbar-expand-lg navbar-light px-4 py-lg-0"><a class="navbar-brand p-0" href="/"><img alt="Logo" height="48" id="logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" width="179"/></a><div class="w-100" id="search-box"><div id="searchContainer" style="position:relative"><input autocomplete="off" id="searchInput" placeholder="Search..." type="text"/> <button aria-label="Search" id="searchBtn" style="position:absolute;right:5px;top:50%;transform:translateY(-50%);background:0 0;border:none;cursor:pointer"><span id="iconSearch"><svg fill="none" height="20" stroke="green" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg> </span><span id="iconClear" style="display:none"><svg fill="none" height="20" stroke="red" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><line x1="6" x2="18" y1="6" y2="18"></line><line x1="6" x2="18" y1="18" y2="6"></line></svg></span></button><ul id="results"></ul></div></div><div class="jtp-nav"><button class="navbar-toggler float-left" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button"><span class="fa fa-bars"></span></button></div><div class="collapse navbar-collapse" id="navbarCollapse"><div class="navbar-nav"><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Tutorials</a><div class="dropdown-menu w-100 mt-0" id="tutorials"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("tutorials")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/python-tutorial">Python Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/django-tutorial">Django Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/numpy-tutorial">Numpy Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas">Pandas Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-tkinter">Tkinter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/pytorch">Pytorch Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/flask-tutorial">Flask Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/opencv">OpenCV Tutorial</a><h3 class="jtp-list-group-item">Java</h3><a class="jtp-list-group-item list-group-item-action" href="/java-tutorial">Java Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/servlet-tutorial">Servlet Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jsp-tutorial">JSP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-boot-tutorial">Spring Boot Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-tutorial">Spring Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-tutorial">Hibernate Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javafx-tutorial">JavaFX Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/java-web-services-tutorial">Java Web Services Tutorial</a><h3 class="jtp-list-group-item">.Net Framework</h3><a class="jtp-list-group-item list-group-item-action" href="/net-framework">.Net Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-tutorial">C# Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/asp-net-tutorial">ASP.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/ado-net-tutorial">ADO.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wpf">WPF Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">AI, ML and Data Science</h3><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-ai">Artificial Intelligence Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning">Machine Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-science">Data Science Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/deep-learning">Deep Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/tensorflow">TensorFlow Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/artificial-neural-network">Artificial Neural Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/matplotlib">Matplotlib Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-scipy">Python Scipy Tutorial</a><h3 class="jtp-list-group-item">Cloud Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing">Cloud Computing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-tutorial">AWS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-azure">Microsoft Azure Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/salesforce">Salesforce Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/google-cloud-platform">GCP Tutorial</a><h3 class="jtp-list-group-item">B.Tech and MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-tutorial">DBMS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-tutorial">Data Structures Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system">Operating System Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-network-tutorial">Computer Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/daa-tutorial">DAA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-organization-and-architecture-tutorial">Computer Organization Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/software-engineering">Software Engineering Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-mining">Data Mining Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/html-tutorial">HTML Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/css-tutorial">CSS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-tutorial">JavaScript Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-tutorial">Jquery Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-8">Angular 8 Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/reactjs-tutorial">React Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/react-native-tutorial">React Native Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/nodejs-tutorial">Node.js Tutorial</a><h3 class="jtp-list-group-item">PHP</h3><a class="jtp-list-group-item list-group-item-action" href="/php-tutorial">PHP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-tutorial">MySQL Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel">Laravel Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wordpress-tutorial">WordPress Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/codeigniter-tutorial">CodeIgniter Tutorial</a><h3 class="jtp-list-group-item">Software Testing</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-tutorial">Software Testing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-tutorial">Selenium Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jira-tutorial">JIRA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jmeter-tutorial">JMeter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/postman">Postman Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/testng-tutorial">TestNG Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/soapui">SoapUI Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/cucumber-testing">Cucumber Tutorial</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Interview</a><div class="dropdown-menu w-100 mt-0" id="interview-questions"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("interview-questions")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Technical Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions">Python Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/corejava-interview-questions">Java Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/dot-net-interview-questions">.Net Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/cpp-interview-questions">C++ Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/react-interview-questions">React Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/node-js-interview-questions">Node.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-interview-questions">Angular Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hr-interview-questions">HR Interview Questions</a><h3 class="jtp-list-group-item">Java Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/spring-boot-interview-questions">Spring Boot Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-interview-questions">Spring Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-interview-questions">Hibernate Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jdbc-interview-questions">JDBC Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/servletinterview">Servlet Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/maven-interview-questions">Maven Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jenkins-interview-questions">Jenkins Interview Questions</a><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/django-interview-questions-and-answers">Django Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas-interview-questions">Pandas Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/expressjs-interview-questions">Express.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-coding-interview-questions">Python Coding Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions-for-five-years-experienced">Python Interview Questions for 5 Years</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/html-interview-questions">HTML Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/css-interview-questions">CSS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-interview-questions">JavaScript Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">Jquery Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/php-interview-questions">PHP Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel-interview-questions">Laravel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/ajax-interview-questions">AJAX Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/front-end-developer-interview-questions">Front-End Developer Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">jQuery Interview Questions</a><h3 class="jtp-list-group-item">Database Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/pl-sql-interview-questions">PL/SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oracle-interview-questions">Oracle Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mongodb-interview-questions">MongoDB Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/redis-interview-questions-and-answers">Redis Interview Questions</a><h3 class="jtp-list-group-item">B.Tech / MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system-interview-questions">Operating System Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oops-interview-questions">OOPs Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-interview-questions">DSA Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/networking-interview-questions">Computer Networks Interview Questions</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Important Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/c-interview-questions">C Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/power-bi-interview-questions">Power BI Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/excel-interview-questions">Excel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning-interview-questions">Machine Learning Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-interview-questions">AWS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microservices-interview-questions">Microservices Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a><h3 class="jtp-list-group-item">Software Testing Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-interview-questions">Manual Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-interview-questions">Selenium Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/api-testing-interview-questions">API Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/etl-testing-interview-questions">ETL Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mobile-testing-interview-questions">Mobile Testing Interview Questions</a><h3 class="jtp-list-group-item">Company Interviews</h3><a class="jtp-list-group-item list-group-item-action" href="/ibm-interview-questions">IBM Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/adobe-interview-questions">Adobe Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-interview-questions">Microsoft Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/amazon-interview-questions">Amazon Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/tcs-interview-questions">TCS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/wipro-interview-questions">Wipro Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/accenture-interview-questions">Accenture Interview Questions</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Compiler</a><div class="dropdown-menu w-100 mt-0" id="compiler-menu"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("compiler-menu")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Online Compilers</h3><a class="jtp-list-group-item list-group-item-action" href="/compiler/python">Python Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/java">Java Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/php">PHP Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/c">C Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/cpp">C++ Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html">HTML Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/javascript">JavaScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/typescript">TypeScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/r">R Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/swift">Swift Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/kotlin">Kotlin Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/go">Go Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/csharp">C# Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/perl">Perl Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/groovy">Groovy Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html-css-javascript">HTML, CSS &amp; JavaScript Online Editor</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Multiple Choice Questions</h3><a class="jtp-list-group-item list-group-item-action" href="/python-mcq">Python MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/java-mcq">Java MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/php-mcq">PHP MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/c-language-mcq">C Programming MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cpp-mcq">C++ MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/html-mcq">HTML mcq </a><a class="jtp-list-group-item list-group-item-action" href="/javascript-mcq">JavaScript MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/sql-mcq">SQL MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/operating-system-mcq">Operating System MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-fundamental-mcq">Computer Fundamental MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-network-mcq">Computer Network MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/dbms-mcq">DBMS MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/data-structure-mcq">Data Structure MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/software-engineering-mcq">Software Engineering MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing-mcq">Cloud Computing MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-mcq">Artificial Intelligence MCQ</a></div></div></div></div></div></div></div></div><ul class="d-flex"><li><div class="theme-icon dark-mode-icon" onclick="toggleDarkMode()"><i class="fas fa-moon" id="dark-mode-icon"></i></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#059862","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1C2833","--sidebar":"#eef7f0","--hoverprimary":"#05593a","--codecompile":"#dce8dc"})' style="background-color:#059862"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#0D4549","--secondary":"#b6dde2","--light":"#FFFFFF","--dark":"#17202A","--sidebar":"#F0FAFB","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#0d4549"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#231760","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#e7f6fd","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#231760"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#286562","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#ECF0F1","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#286562"></div></li></ul></div></nav></div></div><div class="borderedelement"></div></div><script async="" src="https://cse.google.com/cse.js?cx=548338c60d2224ac4"></script><script>function applyTheme(e){const t=document.documentElement;Object.keys(e).forEach((o=>{t.style.setProperty(o,e[o])}))}function setThemeColors(e){localStorage.setItem("themeColors",JSON.stringify(e)),applyTheme(e)}window.addEventListener("load",(()=>{const e=JSON.parse(localStorage.getItem("themeColors"));e&&applyTheme(e)}))</script><script>function setThemeColors(t){const e=document.documentElement;Object.keys(t).forEach((o=>{e.style.setProperty(o,t[o])})),localStorage.setItem("themeColors",JSON.stringify(t))}function toggleDarkMode(){const t=document.body,e=document.getElementById("dark-mode-icon"),o=document.getElementById("logo");t.classList.toggle("night-mode")?(e.classList.remove("fa-moon"),e.classList.add("fa-sun"),localStorage.setItem("theme","night"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):(e.classList.remove("fa-sun"),e.classList.add("fa-moon"),localStorage.setItem("theme","day"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg")}window.addEventListener("load",(()=>{const t=JSON.parse(localStorage.getItem("themeColors")),e=localStorage.getItem("theme"),o=document.getElementById("logo");t&&setThemeColors(t),"night"===e?(document.body.classList.add("night-mode"),document.getElementById("dark-mode-icon").classList.remove("fa-moon"),document.getElementById("dark-mode-icon").classList.add("fa-sun"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg"}))</script></div><div class="xyz sticky-top shadow-sm;" id="tpointtech-images" style="z-index:99"><div id="link" style="clear:both;position:sticky;z-index:99"><div class="ddsmoothmenu"><span><button class="jt-nav float-left accordion accordion-flush" data-bs-target="#navbarCollapse" data-bs-toggle="jt-nav" onclick="toggleSidebar()" style="color:#fff;width:50px;margin-top:8px;margin-left:20px;font-size:20px;background:0 0;box-shadow:none;border:none" type="button"><span class="fa fa-bars"></span></button></span><ul class="nav" style="display:inline-flex;margin-left:auto;line-height:2rem"><li class="nav-item"><a class="nav-link" href="/python-tutorial"><img alt="Python Logo" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/python.svg" width="16"/> Python</a></li><li class="nav-item"><a class="nav-link" href="/java-tutorial"><img alt="java" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Java.svg" width="16"/> Java</a></li><li class="nav-item"><a class="nav-link" href="/javascript-tutorial"><img alt="javascript" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/JS.svg" width="16"/> JavaScript</a></li><li class="nav-item"><a class="nav-link" href="/sql-tutorial"><img alt="sql" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/SQL.svg" width="16"/> SQL</a></li><li class="nav-item"><a class="nav-link" href="/c-programming-language-tutorial"><img alt="c" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/C.svg" width="16"/> C</a></li><li class="nav-item"><a class="nav-link" href="/cpp-tutorial"><img alt="c++" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Cpp.svg" width="16"/> C++</a></li><li class="nav-item"><a class="nav-link" href="/html-tutorial"><img alt="html" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/HTML.svg" width="16"/> HTML</a></li><li class="nav-item"><a class="nav-link" href="/css-tutorial"><img alt="css" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/CSS.svg" width="16"/> CSS</a></li><li class="nav-item"><a class="nav-link" href="/reactjs-tutorial"><img alt="React" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/react.svg" width="16"/> React</a></li><li class="nav-item"><a class="nav-link" href="/nodejs-tutorial"><img alt="Node.js" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/nodejs.svg" width="16"/> Node.js</a></li><li class="nav-item"><a class="nav-link" href="/spring-boot-tutorial"><img alt="Spring Boot" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/spring-boot.svg" width="16"/> Spring Boot</a></li><li class="nav-item"><a class="nav-link" href="/c-sharp-tutorial"><img alt="c#" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/csharp.svg" width="16"/> C#</a></li><li class="nav-item"><a class="nav-link" href="/php-tutorial"><img alt="php" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/PHP.svg" width="16"/> PHP</a></li><li class="nav-item"><a class="nav-link" href="/mysql-tutorial"><img alt="MySQL" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mysql.svg" width="16"/> MySQL</a></li><li class="nav-item"><a class="nav-link" href="/mongodb-tutorial"><img alt="MongoDB" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mongodb.svg" width="16"/> MongoDB</a></li><li class="nav-item"><a class="nav-link" href="/artificial-intelligence-ai"><img alt="Artificial Intelligence" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/AI.svg" width="16"/> AI</a></li><li class="nav-item"><a class="nav-link" href="/machine-learning"><img alt="Machine Learning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/ML.svg" width="16"/> ML</a></li><li class="nav-item"><a class="nav-link" href="/data-structures-and-algorithms-dsa"><img alt="data structures" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DS.svg" width="16"/> DSA</a></li><li class="nav-item"><a class="nav-link" href="/dbms-tutorial"><img alt="dbms" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DBMS.svg" width="16"/> DBMS</a></li><li class="nav-item"><a class="nav-link" href="/operating-system"><img alt="Operating System" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/OS.svg" width="16"/> OS</a></li><li class="nav-item"><a class="nav-link" href="/aptitude/quantitative"><img alt="aptitude" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Aptitude.svg" width="16"/> Aptitude</a></li><li class="nav-item"><a class="nav-link" href="/reasoning"><img alt="reasoning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Reasoning.svg" width="16"/> Reasoning</a></li></ul></div></div></div><section class="course-details"><div class="container-fluid"><div class="row"><div class="col-md-2 sidebar" id="sidebar"><div id="menu-sidebar"><div class="accordion accordion-flush" id="accordionFlushExample"><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading0"><button aria-controls="flush-collapse0" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse0" data-bs-toggle="collapse" type="button">Embedded Systems</button></h2><div aria-labelledby="flush-heading0" class="accordion-collapse collapse show" id="flush-collapse0"><div class="accordion-body"><ul><li class="leftmenu"><a href="/embedded-system-tutorial">Introduction to ES</a></li><li class="leftmenu"><a href="/what-is-embedded-system">What is ES</a></li><li class="leftmenu"><a href="/characteristics-of-embedded-system">Characteristic of ES</a></li><li class="leftmenu"><a href="/designing-of-an-embedded-system">Designing of an ES</a></li><li class="leftmenu"><a href="/embedded-system-processors">ES Processors</a></li><li class="leftmenu"><a href="/microprocessor">Microprocessor</a></li><li class="leftmenu"><a href="/microcontroller">Microcontroller</a></li><li class="leftmenu"><a href="/microprocessor-vs-microcontroller">MP vs MC</a></li><li class="leftmenu"><a href="/types-of-microcontroller">Types of MicroController</a></li><li class="leftmenu"><a href="/embedded-system-tools-and-peripherals">ES Tools and Peripherals</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading1"><button aria-controls="flush-collapse1" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse1" data-bs-toggle="collapse" type="button">8051 MicroController</button></h2><div aria-labelledby="flush-heading1" class="accordion-collapse collapse show" id="flush-collapse1"><div class="accordion-body"><ul><li class="leftmenu"><a href="/embedded-system-8051-microcontroller">8051 MicroController</a></li><li class="leftmenu"><a href="/embedded-system-8051-microcontroller-architecture">8051 MC Architecture</a></li><li class="leftmenu"><a href="/embedded-system-8051-microcontroller-pin-diagram">8051 MC Pin Digram</a></li><li class="leftmenu"><a href="/embedded-system-input-output-programming">ES I/O Programming</a></li><li class="leftmenu"><a href="/embedded-system-addressing-modes">Addressing Modes</a></li><li class="leftmenu"><a href="/embedded-system-8051-instruction-set">8051 Instruction Set</a></li><li class="leftmenu"><a href="/embedded-system-assembly-language">Assembly language</a></li><li class="leftmenu"><a href="/embedded-system-interrupts-in-8051-microcontroller">8051 Interrupts</a></li><li class="leftmenu"><a href="/embedded-system-c-programming">Embedded C</a></li><li class="leftmenu"><a href="/embedded-system-led-blinking">LED Blinking</a></li><li class="leftmenu"><a href="/embedded-system-7-segment-display">7-Segment Display</a></li><li class="leftmenu"><a href="/embedded-system-counter-timer">Counter/Timer</a></li><li class="leftmenu"><a href="/embedded-system-serial-communication">Serial Communication</a></li><li class="leftmenu"><a href="/embedded-system-keypad-programming">Keypad Programming</a></li><li class="leftmenu"><a href="/embedded-system-lcd-programmming">LCD Programming</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading2"><button aria-controls="flush-collapse2" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse2" data-bs-toggle="collapse" type="button">AVR MicroController</button></h2><div aria-labelledby="flush-heading2" class="accordion-collapse collapse show" id="flush-collapse2"><div class="accordion-body"><ul><li class="leftmenu"><a href="/what-is-avr-microcontroller">AVR MicroController 10+</a></li><li class="leftmenu"><a href="/atmega32-avr-microcontroller">ATmega32 MicroController</a></li><li class="leftmenu"><a href="/atmega32-pin-diagram">ATmega32 Pin Diagram</a></li><li class="leftmenu"><a href="/atmega32-memories">ATmega32 Memories</a></li><li class="leftmenu"><a href="/atmega8-avr-microcontroller">ATmega8 MicroController</a></li><li class="leftmenu"><a href="/atmega8-pin-diagram">ATmega8 Pin Diagram</a></li><li class="leftmenu"><a href="/avr-input-output-port-programming">I/O Port Programming</a></li><li class="leftmenu"><a href="/avr-registers">AVR Registers</a></li><li class="leftmenu"><a href="/programming-avr-studio">Programming using Studio</a></li><li class="leftmenu"><a href="/lcd-interfacing-avr">LCD Interfacing</a></li><li class="leftmenu"><a href="/spi-in-avr-microcontroller">SPI in AVR</a></li><li class="leftmenu"><a href="/keyboard-interfacing-with-avr">Keyboard Interfacing</a></li><li class="leftmenu"><a href="/adc-interfacing-avr">ADC Interfacing</a></li><li class="leftmenu"><a href="/avr-uart-serial-communication">Serial Communication</a></li><li class="leftmenu"><a href="/pwm-avr-microcontroller">PWM MicroController</a></li><li class="leftmenu"><a href="/interrupts-avr-microcontroller">Interrupts MicroController</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading3"><button aria-controls="flush-collapse3" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse3" data-bs-toggle="collapse" type="button">ES Projects</button></h2><div aria-labelledby="flush-heading3" class="accordion-collapse collapse show" id="flush-collapse3"><div class="accordion-body"><ul><li class="leftmenu"><a href="/embedded-system-projects">ES Projects</a></li><li class="leftmenu"><a href="/embedded-system-project-fire-detection-and-control-system">Fire Detection Project</a></li><li class="leftmenu"><a href="/embedded-system-project-rfid-based-attendance-system">RFID Attendance System</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading4"><button aria-controls="flush-collapse4" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse4" data-bs-toggle="collapse" type="button">Robotics</button></h2><div aria-labelledby="flush-heading4" class="accordion-collapse collapse show" id="flush-collapse4"><div class="accordion-body"><ul><li class="leftmenu"><a href="/robotics-tutorial">Robotics Tutorial</a></li></ul></div></div></div></div></div></div><div class="col-12 col-md-7"><div class="overview"><div id="city"><table><tbody><tr><td><div id="bottomnextup"><a class="next" href="sql-interview-questions">next →</a> <a class="next" href="embedded-system-project-fire-detection-and-control-system">← prev</a></div><h1 class="h1">Embedded System Project: RFID Based Attendance System</h1><div style="font-size:14px;margin-top:5px;margin-bottom:5px;color:#6f6e6e"><span>29 Aug 2024</span> | <span><i aria-hidden="true" class="fa fa-clock-o"></i> 5 min read</span></div><hr/><h2 class="h2">RFID Based Attendance System Using 8051 Microcontroller</h2><p>Nowadays, attendance in schools and colleges is based on paper. Sometimes this process causes errors and takes more time.</p><p>This project uses RFID technology for making a note of every student entering in a classroom and also calculates the time resides in a class.</p><p>In this system every student is allotted with an RFID tag. The attendance can be done by placing card near RFID reader.</p><h2 class="h2">What is RFID?</h2><p>The Radio Frequency Identification (RFID) is an electronic device which includes a small antenna and a chip. This device is used for transmitting information between reader and RFID tag using radio frequency electromagnetic fields.</p><p>The operating frequency ranges of these devices include low, mid and high ranges. The low frequency range is from 30 KHz to 500 KHz, middle frequency range is from 500 KHz to 900 KHz and high frequency range is from 2.4 MHz to 2.5 MHz</p><img alt="Embedded System Project3" src="embeddedsystem/images/embedded-system-project3.png"/><h2 class="h2">Block Diagram of RFID Based Attendance system</h2><p>The attendance system in most of schools and colleges is mostly documented based. For automatic attendance system a wireless technology based RFID system is proposed. Every student is provided with an RFID tag, which uses inbuilt IC for storing and processing the information.</p><p>The block diagram of this system includes preset circuit, a microcontroller, an oscillator circuit, LCD display and an RFID reader.</p><img alt="Embedded System Project4" src="embeddedsystem/images/embedded-system-project4.png"/><ul class="points"><li><strong>Microcontroller</strong>-The microcontroller used in a RFID based attendance system is AT89C52 from the family of 8051. It includes 4-I/O ports and 40-pins.</li><li><strong>Oscillator Circuit</strong>-Oscillator circuit is connected in between the pins of 18 and 19 of a microcontroller. This circuit is built with a combination of oscillator and two 33 pF capacitors at 11.0592 MHz operational frequency.</li><li><strong>Preset Circuit</strong>-The microcontroller AT89C52 9th pin is reset pin. The circuit of the preset is built with a capacitor, a resistor and a switch. When switch is pressed, the reset pin is connected with and the microcontroller becomes reset.</li><li><strong>LCD Display</strong>-LCD display is consists of 16 pins, where 3 pins are connected with and remaining all pins are connected with the port-2 of the microcontroller.</li><li><strong>RFID Reader</strong>-RFID reader is used for reading the information which is stored in the RFID tags. It incorporates with any type of hardware design.</li></ul><h2 class="h2">Working of Attendance System Circuit</h2><p>After connecting all the components of attendance system, give the power supply to switch on the circuit. Then LCD will displays, please swipe the card. The information contain in the RFID tag is stated as the ID and attendance of the student. When person placed card in front of RFID reader, it reads the information and start matching with the information stored in the AT89S52 microcontroller. Before operation microcontroller is preprogrammed with embedded C language.</p><img alt="Embedded System Project5" src="embeddedsystem/images/embedded-system-project5.png"/><p>If the data of the card matches with RFID reader, then information will display on LCD. By using this system the operational time can be save as all the information is stored directly inside the database.</p><p><strong>Source Code:</strong></p><p><strong>Consider the embedded system program required for operating the microcontroller system as RFID based attendance system is:-</strong></p><div class="codeblock"><textarea class="xml" name="code">#include&lt;reg51.h&gt;
#include&lt;string.h&gt;

//0000 to 7FFF

sbit RS = P0^7;
sbit EN = P0^6;

sbit SDA = P1^0;
sbit SCL = P1^1;
sbit RELAY = P1^2;

code unsigned char RFID_1[] = "34006C9C04C0"; //34006C9C04+NULL
code unsigned char RFID_2[] = "34006C549C90";
code unsigned char RFID_3[] = "1300F8FAC1D0";
code unsigned char RFID_4[] = "34006CD5AD20";
code unsigned char RFID_5[] = "420061231E1E";

code unsigned char name_1[] = "SANJAY JAIN";
code unsigned char name_2[] = "SHEKHAT HARSH";
code unsigned char name_3[] = "DHOLARIYA RAKSHIT";
code unsigned char name_4[] = "DIVYANG SINGH ";
code unsigned char name_5[] = "NAKUL JAIN";

unsigned char rs[15];

unsigned int no_of_records;

void delay()
{
	int j;
	for(j=0;j&lt;500;j++);
}

void long_delay()
{
	unsigned int j;
	for(j=0;j&lt;65000;j++);
}

void idelay()
{
	unsigned int j;
	for(j=0;j&lt;10000;j++);
}

void lcd_command(char lc)
{
	P2 = lc;
	RS = 0;
	EN = 1;
	delay();
	EN = 0;
}

void lcd_data(char ld)
{
	P2 = ld;
	RS = 1;
	EN = 1;
	delay();
	EN = 0;
}

void lcd_init()
{
	lcd_command(0x38);
	lcd_command(0x0E);
	lcd_command(0x01);
}

void serial_init()
{
	 TMOD = 0x20;
	SCON = 0x50;
	TH1 = 0xFD;
	TR1 = 1;
}

void transmit(unsigned char tx)
{
	SBUF = tx;
	while(TI==0);
	TI = 0;
}

void send_string(unsigned char *str)
{
	int j;
	for(j=0;str[j]!='\0';j++)
		transmit(str[j]);	
}

unsigned char receive()
{
	char rx;
	while(RI==0);
	RI = 0;
	rx = SBUF;
	return(rx);
}

void lcd_string(char add,char *str)
{
	int j;
	lcd_command(add);
	for(j=0;str[j]!='\0';j++)
		lcd_data(str[j]);	
}

void start()
{
	SDA = 1;
	SCL = 1;
	SDA = 0;
}

void stop()
{
	SDA = 0;
	SCL = 1;
	SDA = 1;
}

void write(unsigned char w)
{
	int j;
	SCL = 0;
	for(j=0;j&lt;8;j++)
	{
		if((w &amp; 0x80)==0)
			SDA = 0;
		else
			SDA = 1;
		SCL = 1;
		SCL = 0;
		w = w &lt;&lt; 1;
	}
	SCL = 1;
	SCL = 0;
}

unsigned char read()
{
	int j;
	unsigned char r = 0x00;
	SDA = 1;

	for(j=0;j&lt;8;j++)
	{
		SCL = 1;
		r = r &lt;&lt; 1;
		if(SDA == 1)
			r = r | 0x01;
		SCL = 0;
	}
	return(r);
}

void ack()
{
	SDA = 0;
	SCL = 1;
	SCL = 0;
}

void nack()
{
	SDA = 1;
	SCL = 1;
	SCL = 0;
}

void rtc_read()
{
		unsigned char ss,mm,hh,day,mn,date,yr;
		start();
		write(0xD0);
		write(0x00);		
		stop();
		start();
		write(0xD1);
		ss = read();
		ack();
		mm = read();
		ack();
		hh = read();
		ack();
		day = read();
		ack();
		date = read();
		ack();
		mn = read();
		ack();
		yr = read();
		nack();
		stop();

		rs[0] = hh/0x10 + 48;
		rs[1] = hh%0x10 + 48;
		rs[2] = ':';
		rs[3] = mm/0x10 + 48;
		rs[4] = mm%0x10 + 48;
		rs[5] = ',';
		rs[6] = date/0x10 + 48;
		rs[7] = date%0x10 + 48;
		rs[8] = '/';
		rs[9] = mn/0x10 + 48;
		rs[10] = mn%0x10 + 48;
		rs[11] = '/';
		rs[12] = yr/0x10 + 48;
		rs[13] = yr%0x10 + 48;
		rs[14] = '\0';
}

void rtc_init()
{
	start();
	write(0xD0);
	write(0x00);
	write(0x00);
	write(0x00);
	write(0x13);
	write(0x05);
	write(0x12);
	write(0x04);
	write(0x12);
	stop();

}

void write_records(unsigned char *str);
void read_records();

void main()
{
	unsigned char rec_data[13],i,t;

	RELAY = 0;

	lcd_init();
	serial_init();
	rtc_init();
	idelay();
	start();
	write(0xA0);
	write(0x7F);
	write(0xFF);
	stop();
	start();
	write(0xA1);
	no_of_records = read();
	nack();
	stop();

//	no_of_records = 0;

	while(1)
	{
	start:
		lcd_command(0x01);
		lcd_string(0x80,"RFID ATTENDANCE");
		lcd_string(0xC5,"SYSTEM");

		j = 0;
		while(1)
		{
			if(RI==1)
			{
				RI = 0;
				t = receive();
				if(t == '+')
				{
					read_records();
					goto start;
				}
				else
				{
					rec_data[j] = t;
					for(j=1;j&lt;12;j++)
						rec_data[j] = receive();
					rec_data[j] = '\0';	
					break;
				}
			}
		}

		j = strcmp(RFID_1,rec_data);	//match =&gt; j = 0

		lcd_command(0x01);

		if(j==0)
		{
			RELAY = 1;
			lcd_string(0x80,name_1);
			rtc_read();
			lcd_string(0xC0,rs);
			long_delay();
			write_records(name_1);
			RELAY = 0;
			goto start;		
		}

//
		j = strcmp(RFID_2,rec_data);	//match =&gt; j = 0

		if(j==0)
		{
			RELAY = 1;
			lcd_string(0x80,name_2);
			rtc_read();
			lcd_string(0xC0,rs);
			long_delay();
			write_records(name_2);
			RELAY = 0;
			goto start;		
		}

//
		j = strcmp(RFID_3,rec_data);	//match =&gt; j = 0

		if(j==0)
		{
			RELAY = 1;
			lcd_string(0x80,name_3);
			rtc_read();
			lcd_string(0xC0,rs);
			long_delay();
			write_records(name_3);
			RELAY = 0;
			goto start;		
		}

		j = strcmp(RFID_4,rec_data);	//match =&gt; j = 0

		if(j==0)
		{
			RELAY = 1;
			lcd_string(0x80,name_4);
			rtc_read();
			lcd_string(0xC0,rs);
			long_delay();
			write_records(name_4);
			RELAY = 0;
			goto start;		
		}

		j = strcmp(RFID_5,rec_data);	//match =&gt; j = 0

		if(j==0)
		{
			RELAY = 1;
			lcd_string(0x80,name_5);
			no_of_records = 0;
			start();
			write(0xA0);
			write(0x7F);
			write(0xFF);
			write(0x00);
			stop();
			lcd_string(0xC0,"MEMORY CLEARED");
			long_delay();
			RELAY = 0;
			goto start;		
		}
		lcd_string(0x80,"ERROR");
		lcd_string(0xC0,rec_data);
		long_delay();
	}
}

</textarea></div><div class="nexttopicdiv"><span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="embedded-system-projects">Embedded System Projects</a></span></div><br/><br/><div id="bottomnext"><a class="next" href="embedded-system-project-fire-detection-and-control-system" style="float:left">← prev</a> <a class="next" href="embedded-system-projects" style="float:right">next →</a></div><br/><br/></td></tr></tbody></table></div><br/></div><div class="related-posts-container"><h2 class="h3">Related Posts</h2><ul class="related-posts-list"><li><a class="related-post-item" href="embedded-system-project-fire-detection-and-control-system"><h3 class="h3">Fire Detection Project</h3><p class="related-post-content">Embedded System Project: Fire Detection and Control System Fire Sense using 8051 Microcontroller and Flame Sensor To avoid all the problems mentioned about the current fire fighting system and to have a better and reliable security system against fire accidents. There is used fire sensor which senses fire....</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="embedded-system-projects"><h3 class="h3">ES Projects</h3><p class="related-post-content">Embedded System Projects A list of embedded system projects are given below. These projects are based on fire detection and attendance system. 1) Fire Detection and Control System Fire Detection and Control System Project 2) RFID Based Attendance System RFID Based Attendance System Project TopicFire Detection and Control System Project ...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 1 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li></ul></div><br/><div class="container-xxl" style="position:relative;margin-top:-20px"><div class="aboutus themecolor subscribe"><div class="container px-lg-5 text-center"><h4 class="mb-4 animated zoomIn mediumheading">Subscribe to Tpoint Tech</h4><p class="pb-3 animated zoomIn text-center">We request you to subscribe our newsletter for upcoming updates.</p><div class="position-relative w-100 mt-3"><input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" id="email" placeholder="Your Email" style="height:48px" type="email"/> <button class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2" id="subscribeBtn" type="button">Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i></button></div><p class="mt-3" id="message"></p></div></div></div><br/><div class="ad-container" id="ad-container"></div><br/></div><div class="col-md-2"><div class="advertisement"><div id="sidebar_300x600_1_bq_307_556"></div><div id="sidebar_300x600_2_bq_307_557"></div><div id="sidebar_300x600_3_bq_307_558"></div></div></div></div><script>function closePopup(){document.getElementById("popup").style.display="none"}setTimeout((function(){localStorage.getItem("popupShown")||(document.getElementById("popup").style.display="flex",localStorage.setItem("popupShown","true"))}),5e3)</script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>$(document).ready((function(){$("#subscribeBtn").click((function(){var e=$("#email").val().trim();""!==e?$.ajax({url:"/subscribe",type:"POST",contentType:"application/json",data:JSON.stringify({email:e}),beforeSend:function(){$("#subscribeBtn").prop("disabled",!0).html("Subscribing...")},success:function(e){$("#message").html("<span style='color: green;'>Subscription successful! Please check your email.</span>"),$("#email").val("")},error:function(e){var s=e.responseJSON?e.responseJSON.error:"Subscription failed.";$("#message").html("<span style='color: red;'>"+s+"</span>")},complete:function(){$("#subscribeBtn").prop("disabled",!1).html('Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i>')}}):$("#message").html("<span style='color: red;'>Please enter your email.</span>")}))}))</script><div class="container-fluid footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"><div class="container py-5"><div class="row"><div class="col-md-6 col-lg-5"><img alt="Logo" src="https://images.tpointtech.com/static/images/logo.png"/><p>We provides tutorials and interview questions of all technology like java tutorial, android, java frameworks</p><h5 class="mb-4">Contact info</h5><p><svg viewbox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg>G-13, 2nd Floor, Sec-3, Noida, UP, 201301, India</p><p><svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v128z"></path></svg><a href="mailto:hr@tpointtech.com">hr@tpointtech.com</a></p><p><svg fill="currentColor" height="1.8em" stroke="currentColor" stroke-width="0" viewbox="0 0 24 24" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.49 3c-2.21 0-4.21.9-5.66 2.34l1.06 1.06a6.47 6.47 0 0 1 9.18 0l1.06-1.06A7.932 7.932 0 0 0 16.49 3z"></path><path d="M20.03 7.46a5.022 5.022 0 0 0-7.08 0l1.06 1.06c.63-.63 1.51-1.03 2.47-1.03s1.84.39 2.47 1.03l1.08-1.06zM15.08 9.59 16.49 11l1.41-1.41c-.36-.37-.86-.59-1.41-.59s-1.05.22-1.41.59z"></path><path d="m15.63 14.4-2.52 2.5c-2.5-1.43-4.57-3.5-6-6l2.5-2.52c.23-.24.33-.57.27-.9L9.13 3.8c-.09-.46-.5-.8-.98-.8H4c-.56 0-1.03.47-1 1.03.17 2.89 1.05 5.6 2.43 7.97 1.58 2.73 3.85 4.99 6.57 6.57 2.37 1.37 5.08 2.26 7.97 2.43.56.03 1.03-.44 1.03-1v-4.15c0-.48-.34-.89-.8-.98l-3.67-.73a.985.985 0 0 0-.9.26z"></path></svg><a href="tel:+919599086977">+91-9599086977</a></p><h5 class="mb-4">Follow us</h5><div class="d-flex"><a class="btn btn-outline-light btn-social" href="https://www.facebook.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Facebook Page" src="https://images.tpointtech.com/static/img/facebook.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://x.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech X Page" src="https://images.tpointtech.com/static/images/x.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/tpointtech/" rel="nofollow" target="_blank"><img alt="Tpoint Tech Linkedin Page" src="https://images.tpointtech.com/static/images/linkedin.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://t.me/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Telegram Channel" src="https://images.tpointtech.com/static/images/telegram.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@tpointtechofficial" rel="nofollow" target="_blank"><img alt="Tpoint Tech Youtube Channel" src="https://images.tpointtech.com/static/img/youtube.png"/></a><a class="btn btn-outline-light btn-social" href="https://www.instagram.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech instagram Page" src="https://images.tpointtech.com/static/images/insta.png" width="24"/></a></div></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Tutorials</h5><a class="btn btn-link" href="/java-tutorial">Java</a> <a class="btn btn-link" href="/data-structure-tutorial">Data Structures</a> <a class="btn btn-link" href="/c-programming-language-tutorial">C Programming</a> <a class="btn btn-link" href="/cpp-tutorial">C++ Tutorial</a> <a class="btn btn-link" href="/c-sharp-tutorial">C# Tutorial</a> <a class="btn btn-link" href="/php-tutorial">PHP Tutorial </a><a class="btn btn-link" href="/html-tutorial">HTML Tutorial</a> <a class="btn btn-link" href="/javascript-tutorial">JavaScript Tutorial </a><a class="btn btn-link" href="/jquery-tutorial">jQuery Tutorial </a><a class="btn btn-link" href="/spring-tutorial">Spring Tutorial</a></div><div class="col-md-6 col-lg-3"><h5 class="mb-4">Interview Questions</h5><a class="btn btn-link" href="/microsoft-interview-questions">Microsoft </a><a class="btn btn-link" href="/amazon-interview-questions">Amazon </a><a class="btn btn-link" href="/adobe-interview-questions">Adobe </a><a class="btn btn-link" href="/intuit-interview-questions">Intuit </a><a class="btn btn-link" href="/accenture-interview-questions">Accenture</a> <a class="btn btn-link" href="/cognizant-interview-questions">Cognizant </a><a class="btn btn-link" href="/capgemini-interview-questions">Capgemini </a><a class="btn btn-link" href="/wipro-interview-questions">Wipro </a><a class="btn btn-link" href="/tcs-interview-questions">Tcs </a><a class="btn btn-link" href="/infosys-interview-questions">Infosys</a></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Online Compiler</h5><a class="btn btn-link" href="/compiler/c">C </a><a class="btn btn-link" href="/compiler/r">R </a><a class="btn btn-link" href="/compiler/cpp">C++ </a><a class="btn btn-link" href="/compiler/php">Php </a><a class="btn btn-link" href="/compiler/java">Java </a><a class="btn btn-link" href="/compiler/html">Html </a><a class="btn btn-link" href="/compiler/swift">Swift </a><a class="btn btn-link" href="/compiler/python">Python </a><a class="btn btn-link" href="/compiler/javascript">JavaScript </a><a class="btn btn-link" href="/compiler/typescript">TypeScript</a></div></div></div><div class="container text-center px-lg-5"><div class="col-md-12 text-center mb-3 mb-md-0"></div><a href="/latest-post">Latest Post</a> | <a href="/tutorials-list">Tutorials List</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/about-us">About Us</a> | <a href="/contact-us">Contact Us</a></div><div class="copyright"><div class="row"><div class="col-md-12 text-center mb-3 mb-md-0">© Copyright 2011 - 2025 TpointTech.com. All Rights Reserved.</div></div></div></div></div></section><div aria-hidden="true" aria-labelledby="searchModalLabel" class="modal fade" id="searchModal" tabindex="-1"><div class="modal-dialog modal-dialog-scrollable modal-lg"><div class="modal-content shadow rounded-3"><div class="modal-header text-white"><img alt="TPoint Tech Logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" style="height:30px;margin-right:10px"/> <button aria-label="Close" class="btn-close btn-close-black" data-bs-dismiss="modal" type="button"></button></div><div class="modal-body" id="modalResults"></div></div></div></div><a class="btn btn-info btn-floating btn-lg" href="#" id="scrollButton"><i class="fas fa-arrow-up"></i></a><script defer="defer" src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script><script defer="defer" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.12.1/polyfill.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js"></script><script src="/static/js/categoryDetails.js"></script><script src="/static/js/shcoreandbrush.js"></script><script>dp.SyntaxHighlighter.HighlightAll("code")</script><script async="" src="/static/js/lazysizes.min.js"></script><script src="/static/js/main.js"></script><script>const hamburger=document.querySelector(".hamburger"),navMenu=document.querySelector(".nav");function open_menu(){hamburger.classList.toggle("active"),navMenu.classList.toggle("active")}hamburger?.addEventListener("click",open_menu);const navLink=document.querySelectorAll(".nav-link");function closeMenu(){hamburger?.classList?.remove("active"),navMenu?.classList?.remove("active")}navLink.forEach((e=>e.addEventListener("click",closeMenu)))</script><script>function toggleSidebar(){let e=document.querySelector(".col-md-2.sidebar"),l=document.querySelector(".leftmenu");window.innerWidth<=895&&("none"===e.style.display?(e.style.display="block",l.style.display="block",e.style.position="fixed",e.style.zIndex="555"):(e.style.display="none",l.style.display="none"))}toggleSidebar()</script><script>function handleAccordionOnLoad(){const o=window.innerWidth<=768,e=window.location.pathname,c=document.querySelectorAll(".leftmenu a"),n=document.querySelectorAll(".accordion-collapse");o?(n.forEach((o=>o.classList.remove("show"))),c.forEach((o=>{if(o.getAttribute("href")===e){const e=o.closest(".accordion-item");if(e){const o=e.querySelector(".accordion-collapse");o&&o.classList.add("show")}}}))):n.forEach((o=>o.classList.add("show")))}handleAccordionOnLoad(),window.addEventListener("resize",handleAccordionOnLoad)</script><script>const showhide=s=>{const e=$("#answer"+s),a=$("#btntext"+s);a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-black.png)"),"block"===e.css("display")?(e.css("display","none"),a.text("Show Answer")):(e.css("display","block"),a.empty(),a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-close-black.png)"),a.append("Hide Answer"))}</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");e&&e.addEventListener("wheel",(function(t){0!==t.deltaY&&(t.preventDefault(),e.scrollLeft+=t.deltaY)}))}))</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");let t=!1,n=0,s=0;e.addEventListener("mousedown",(a=>{t=!0,e.classList.add("active"),n=a.pageX,s=e.scrollLeft})),["mouseup","mouseleave"].forEach((n=>{e.addEventListener(n,(()=>{t=!1,e.classList.remove("active")}))})),e.addEventListener("mousemove",(a=>{if(!t)return;a.preventDefault();const d=a.pageX-n;e.scrollLeft=s-d})),e.addEventListener("dragstart",(e=>e.preventDefault()))}))</script><script>let currentPage=1;const resultsPerPage=10;let fullData=[];function renderModalPage(e){const t=fullData.slice(0,100),l=10*(e-1),n=l+10,r=t.slice(l,n);let a="";const i=l+1,o=n>t.length?t.length:n;a+=`<div style="padding: 2px 0; font-size: 14px; color: #555;">\n      Showing ${i}–${o} of ${fullData.length.toLocaleString()} results\n    </div>`,a+="<ul>",r.forEach((e=>{a+=e.url?`<li><a href="${e.url}">${e.title} -Tpoint Tech <br><span style='color:#918a8a;font-size:13px;'>${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</span><br></a></li>`:`<li>${e.title} -Tpoint Tech <br> ${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</li>`})),a+="</ul>";const s=Math.ceil(t.length/10);if(s>1){a+='<div class="pagination-numbers" style="text-align:center;margin-top:15px;">';for(let t=1;t<=s;t++)a+=`<span class="pagination-number" onclick="renderModalPage(${t})" style="margin:0 5px;cursor:pointer;color:${t===e?"#000":"#007bff"};">${t}</span>`;a+="</div>"}$("#modalResults").html(a)}function changePage(e){currentPage=e,renderModalPage(currentPage)}function performSearch(e,t=!1){e.length<2?$("#results").empty().hide():$.get("/search",{q:e},(function(e){if($("#results").empty(),0===e.length?$("#results").append("<li>No results found</li>"):e.forEach((e=>{const t=e.url?`<li><a href="${e.url}">${e.title}</a></li>`:`<li>${e.title}</li>`;$("#results").append(t)})),$("#results").show(),t){fullData=e,currentPage=1,renderModalPage(currentPage);new bootstrap.Modal(document.getElementById("searchModal")).show()}}))}$("#searchInput").on("input",(function(){performSearch($(this).val().trim())})),$("#searchInput").on("keypress",(function(e){if(13===e.which){e.preventDefault();performSearch($(this).val().trim(),!0)}})),$(document).on("click",(function(e){$(e.target).closest("#searchContainer").length||$("#results").hide()}))</script><script>const searchInput=document.getElementById("searchInput"),iconSearch=document.getElementById("iconSearch"),iconClear=document.getElementById("iconClear"),searchBtn=document.getElementById("searchBtn");searchInput.addEventListener("input",(()=>{""!==searchInput.value.trim()?(iconSearch.style.display="none",iconClear.style.display="inline"):(iconSearch.style.display="inline",iconClear.style.display="none")})),searchBtn.addEventListener("click",(e=>{""!==searchInput.value.trim()&&(e.preventDefault(),searchInput.value="",iconSearch.style.display="inline",iconClear.style.display="none",$("#results").empty().hide(),searchInput.focus())}))</script></body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>