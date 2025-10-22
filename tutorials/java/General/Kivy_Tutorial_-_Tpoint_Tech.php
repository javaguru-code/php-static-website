<?php
// Tutorial: Kivy Tutorial - Tpoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kivy Tutorial - Tpoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>Kivy Tutorial - Tpoint Tech</h1>
        <body onload="highlightlink()"><div class="xyz shadow-sm"><div class="sticky-top p-0" style="position:sticky;background-color:var(--light)"><div class="container-fluid"><div class="position-relative p-0"><nav class="navbar navbar-expand-lg navbar-light px-4 py-lg-0"><a class="navbar-brand p-0" href="/"><img alt="Logo" height="48" id="logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" width="179"/></a><div class="w-100" id="search-box"><div id="searchContainer" style="position:relative"><input autocomplete="off" id="searchInput" placeholder="Search..." type="text"/> <button aria-label="Search" id="searchBtn" style="position:absolute;right:5px;top:50%;transform:translateY(-50%);background:0 0;border:none;cursor:pointer"><span id="iconSearch"><svg fill="none" height="20" stroke="green" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg> </span><span id="iconClear" style="display:none"><svg fill="none" height="20" stroke="red" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><line x1="6" x2="18" y1="6" y2="18"></line><line x1="6" x2="18" y1="18" y2="6"></line></svg></span></button><ul id="results"></ul></div></div><div class="jtp-nav"><button class="navbar-toggler float-left" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button"><span class="fa fa-bars"></span></button></div><div class="collapse navbar-collapse" id="navbarCollapse"><div class="navbar-nav"><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Tutorials</a><div class="dropdown-menu w-100 mt-0" id="tutorials"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("tutorials")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/python-tutorial">Python Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/django-tutorial">Django Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/numpy-tutorial">Numpy Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas">Pandas Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-tkinter">Tkinter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/pytorch">Pytorch Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/flask-tutorial">Flask Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/opencv">OpenCV Tutorial</a><h3 class="jtp-list-group-item">Java</h3><a class="jtp-list-group-item list-group-item-action" href="/java-tutorial">Java Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/servlet-tutorial">Servlet Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jsp-tutorial">JSP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-boot-tutorial">Spring Boot Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-tutorial">Spring Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-tutorial">Hibernate Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javafx-tutorial">JavaFX Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/java-web-services-tutorial">Java Web Services Tutorial</a><h3 class="jtp-list-group-item">.Net Framework</h3><a class="jtp-list-group-item list-group-item-action" href="/net-framework">.Net Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-tutorial">C# Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/asp-net-tutorial">ASP.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/ado-net-tutorial">ADO.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wpf">WPF Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">AI, ML and Data Science</h3><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-ai">Artificial Intelligence Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning">Machine Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-science">Data Science Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/deep-learning">Deep Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/tensorflow">TensorFlow Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/artificial-neural-network">Artificial Neural Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/matplotlib">Matplotlib Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-scipy">Python Scipy Tutorial</a><h3 class="jtp-list-group-item">Cloud Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing">Cloud Computing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-tutorial">AWS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-azure">Microsoft Azure Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/salesforce">Salesforce Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/google-cloud-platform">GCP Tutorial</a><h3 class="jtp-list-group-item">B.Tech and MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-tutorial">DBMS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-tutorial">Data Structures Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system">Operating System Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-network-tutorial">Computer Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/daa-tutorial">DAA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-organization-and-architecture-tutorial">Computer Organization Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/software-engineering">Software Engineering Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-mining">Data Mining Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/html-tutorial">HTML Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/css-tutorial">CSS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-tutorial">JavaScript Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-tutorial">Jquery Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-8">Angular 8 Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/reactjs-tutorial">React Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/react-native-tutorial">React Native Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/nodejs-tutorial">Node.js Tutorial</a><h3 class="jtp-list-group-item">PHP</h3><a class="jtp-list-group-item list-group-item-action" href="/php-tutorial">PHP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-tutorial">MySQL Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel">Laravel Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wordpress-tutorial">WordPress Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/codeigniter-tutorial">CodeIgniter Tutorial</a><h3 class="jtp-list-group-item">Software Testing</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-tutorial">Software Testing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-tutorial">Selenium Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jira-tutorial">JIRA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jmeter-tutorial">JMeter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/postman">Postman Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/testng-tutorial">TestNG Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/soapui">SoapUI Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/cucumber-testing">Cucumber Tutorial</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Interview</a><div class="dropdown-menu w-100 mt-0" id="interview-questions"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("interview-questions")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Technical Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions">Python Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/corejava-interview-questions">Java Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/dot-net-interview-questions">.Net Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/cpp-interview-questions">C++ Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/react-interview-questions">React Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/node-js-interview-questions">Node.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-interview-questions">Angular Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hr-interview-questions">HR Interview Questions</a><h3 class="jtp-list-group-item">Java Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/spring-boot-interview-questions">Spring Boot Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-interview-questions">Spring Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-interview-questions">Hibernate Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jdbc-interview-questions">JDBC Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/servletinterview">Servlet Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/maven-interview-questions">Maven Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jenkins-interview-questions">Jenkins Interview Questions</a><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/django-interview-questions-and-answers">Django Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas-interview-questions">Pandas Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/expressjs-interview-questions">Express.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-coding-interview-questions">Python Coding Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions-for-five-years-experienced">Python Interview Questions for 5 Years</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/html-interview-questions">HTML Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/css-interview-questions">CSS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-interview-questions">JavaScript Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">Jquery Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/php-interview-questions">PHP Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel-interview-questions">Laravel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/ajax-interview-questions">AJAX Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/front-end-developer-interview-questions">Front-End Developer Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">jQuery Interview Questions</a><h3 class="jtp-list-group-item">Database Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/pl-sql-interview-questions">PL/SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oracle-interview-questions">Oracle Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mongodb-interview-questions">MongoDB Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/redis-interview-questions-and-answers">Redis Interview Questions</a><h3 class="jtp-list-group-item">B.Tech / MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system-interview-questions">Operating System Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oops-interview-questions">OOPs Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-interview-questions">DSA Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/networking-interview-questions">Computer Networks Interview Questions</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Important Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/c-interview-questions">C Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/power-bi-interview-questions">Power BI Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/excel-interview-questions">Excel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning-interview-questions">Machine Learning Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-interview-questions">AWS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microservices-interview-questions">Microservices Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a><h3 class="jtp-list-group-item">Software Testing Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-interview-questions">Manual Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-interview-questions">Selenium Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/api-testing-interview-questions">API Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/etl-testing-interview-questions">ETL Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mobile-testing-interview-questions">Mobile Testing Interview Questions</a><h3 class="jtp-list-group-item">Company Interviews</h3><a class="jtp-list-group-item list-group-item-action" href="/ibm-interview-questions">IBM Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/adobe-interview-questions">Adobe Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-interview-questions">Microsoft Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/amazon-interview-questions">Amazon Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/tcs-interview-questions">TCS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/wipro-interview-questions">Wipro Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/accenture-interview-questions">Accenture Interview Questions</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Compiler</a><div class="dropdown-menu w-100 mt-0" id="compiler-menu"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("compiler-menu")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Online Compilers</h3><a class="jtp-list-group-item list-group-item-action" href="/compiler/python">Python Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/java">Java Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/php">PHP Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/c">C Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/cpp">C++ Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html">HTML Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/javascript">JavaScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/typescript">TypeScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/r">R Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/swift">Swift Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/kotlin">Kotlin Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/go">Go Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/csharp">C# Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/perl">Perl Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/groovy">Groovy Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html-css-javascript">HTML, CSS &amp; JavaScript Online Editor</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Multiple Choice Questions</h3><a class="jtp-list-group-item list-group-item-action" href="/python-mcq">Python MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/java-mcq">Java MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/php-mcq">PHP MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/c-language-mcq">C Programming MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cpp-mcq">C++ MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/html-mcq">HTML mcq </a><a class="jtp-list-group-item list-group-item-action" href="/javascript-mcq">JavaScript MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/sql-mcq">SQL MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/operating-system-mcq">Operating System MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-fundamental-mcq">Computer Fundamental MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-network-mcq">Computer Network MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/dbms-mcq">DBMS MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/data-structure-mcq">Data Structure MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/software-engineering-mcq">Software Engineering MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing-mcq">Cloud Computing MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-mcq">Artificial Intelligence MCQ</a></div></div></div></div></div></div></div></div><ul class="d-flex"><li><div class="theme-icon dark-mode-icon" onclick="toggleDarkMode()"><i class="fas fa-moon" id="dark-mode-icon"></i></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#059862","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1C2833","--sidebar":"#eef7f0","--hoverprimary":"#05593a","--codecompile":"#dce8dc"})' style="background-color:#059862"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#0D4549","--secondary":"#b6dde2","--light":"#FFFFFF","--dark":"#17202A","--sidebar":"#F0FAFB","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#0d4549"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#231760","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#e7f6fd","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#231760"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#286562","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#ECF0F1","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#286562"></div></li></ul></div></nav></div></div><div class="borderedelement"></div></div><script async="" src="https://cse.google.com/cse.js?cx=548338c60d2224ac4"></script><script>function applyTheme(e){const t=document.documentElement;Object.keys(e).forEach((o=>{t.style.setProperty(o,e[o])}))}function setThemeColors(e){localStorage.setItem("themeColors",JSON.stringify(e)),applyTheme(e)}window.addEventListener("load",(()=>{const e=JSON.parse(localStorage.getItem("themeColors"));e&&applyTheme(e)}))</script><script>function setThemeColors(t){const e=document.documentElement;Object.keys(t).forEach((o=>{e.style.setProperty(o,t[o])})),localStorage.setItem("themeColors",JSON.stringify(t))}function toggleDarkMode(){const t=document.body,e=document.getElementById("dark-mode-icon"),o=document.getElementById("logo");t.classList.toggle("night-mode")?(e.classList.remove("fa-moon"),e.classList.add("fa-sun"),localStorage.setItem("theme","night"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):(e.classList.remove("fa-sun"),e.classList.add("fa-moon"),localStorage.setItem("theme","day"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg")}window.addEventListener("load",(()=>{const t=JSON.parse(localStorage.getItem("themeColors")),e=localStorage.getItem("theme"),o=document.getElementById("logo");t&&setThemeColors(t),"night"===e?(document.body.classList.add("night-mode"),document.getElementById("dark-mode-icon").classList.remove("fa-moon"),document.getElementById("dark-mode-icon").classList.add("fa-sun"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg"}))</script></div><div class="xyz sticky-top shadow-sm;" id="tpointtech-images" style="z-index:99"><div id="link" style="clear:both;position:sticky;z-index:99"><div class="ddsmoothmenu"><span><button class="jt-nav float-left accordion accordion-flush" data-bs-target="#navbarCollapse" data-bs-toggle="jt-nav" onclick="toggleSidebar()" style="color:#fff;width:50px;margin-top:8px;margin-left:20px;font-size:20px;background:0 0;box-shadow:none;border:none" type="button"><span class="fa fa-bars"></span></button></span><ul class="nav" style="display:inline-flex;margin-left:auto;line-height:2rem"><li class="nav-item"><a class="nav-link" href="/python-tutorial"><img alt="Python Logo" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/python.svg" width="16"/> Python</a></li><li class="nav-item"><a class="nav-link" href="/java-tutorial"><img alt="java" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Java.svg" width="16"/> Java</a></li><li class="nav-item"><a class="nav-link" href="/javascript-tutorial"><img alt="javascript" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/JS.svg" width="16"/> JavaScript</a></li><li class="nav-item"><a class="nav-link" href="/sql-tutorial"><img alt="sql" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/SQL.svg" width="16"/> SQL</a></li><li class="nav-item"><a class="nav-link" href="/c-programming-language-tutorial"><img alt="c" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/C.svg" width="16"/> C</a></li><li class="nav-item"><a class="nav-link" href="/cpp-tutorial"><img alt="c++" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Cpp.svg" width="16"/> C++</a></li><li class="nav-item"><a class="nav-link" href="/html-tutorial"><img alt="html" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/HTML.svg" width="16"/> HTML</a></li><li class="nav-item"><a class="nav-link" href="/css-tutorial"><img alt="css" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/CSS.svg" width="16"/> CSS</a></li><li class="nav-item"><a class="nav-link" href="/reactjs-tutorial"><img alt="React" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/react.svg" width="16"/> React</a></li><li class="nav-item"><a class="nav-link" href="/nodejs-tutorial"><img alt="Node.js" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/nodejs.svg" width="16"/> Node.js</a></li><li class="nav-item"><a class="nav-link" href="/spring-boot-tutorial"><img alt="Spring Boot" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/spring-boot.svg" width="16"/> Spring Boot</a></li><li class="nav-item"><a class="nav-link" href="/c-sharp-tutorial"><img alt="c#" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/csharp.svg" width="16"/> C#</a></li><li class="nav-item"><a class="nav-link" href="/php-tutorial"><img alt="php" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/PHP.svg" width="16"/> PHP</a></li><li class="nav-item"><a class="nav-link" href="/mysql-tutorial"><img alt="MySQL" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mysql.svg" width="16"/> MySQL</a></li><li class="nav-item"><a class="nav-link" href="/mongodb-tutorial"><img alt="MongoDB" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mongodb.svg" width="16"/> MongoDB</a></li><li class="nav-item"><a class="nav-link" href="/artificial-intelligence-ai"><img alt="Artificial Intelligence" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/AI.svg" width="16"/> AI</a></li><li class="nav-item"><a class="nav-link" href="/machine-learning"><img alt="Machine Learning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/ML.svg" width="16"/> ML</a></li><li class="nav-item"><a class="nav-link" href="/data-structures-and-algorithms-dsa"><img alt="data structures" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DS.svg" width="16"/> DSA</a></li><li class="nav-item"><a class="nav-link" href="/dbms-tutorial"><img alt="dbms" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DBMS.svg" width="16"/> DBMS</a></li><li class="nav-item"><a class="nav-link" href="/operating-system"><img alt="Operating System" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/OS.svg" width="16"/> OS</a></li><li class="nav-item"><a class="nav-link" href="/aptitude/quantitative"><img alt="aptitude" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Aptitude.svg" width="16"/> Aptitude</a></li><li class="nav-item"><a class="nav-link" href="/reasoning"><img alt="reasoning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Reasoning.svg" width="16"/> Reasoning</a></li></ul></div></div></div><section class="course-details"><div class="container-fluid"><div class="row"><div class="col-md-2 sidebar" id="sidebar"><div id="menu-sidebar"><div class="accordion accordion-flush" id="accordionFlushExample"><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading0"><button aria-controls="flush-collapse0" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse0" data-bs-toggle="collapse" type="button">Kivy Tutorial</button></h2><div aria-labelledby="flush-heading0" class="accordion-collapse collapse show" id="flush-collapse0"><div class="accordion-body"><ul><li class="leftmenu"><a href="/kivy">Kivy Tutorial</a></li><li class="leftmenu"><a href="/dropdown-list-in-kivy">Dropdown List in Kivy</a></li><li class="leftmenu"><a href="/create-a-stopwatch-using-a-clock-object-in-kivy-using-kv-file">Create a Stopwatch Using a Clock Object in kivy using .kv File</a></li><li class="leftmenu"><a href="/creating-a-simple-drawing-app-in-kivy">Creating a Simple Drawing App in kivy</a></li><li class="leftmenu"><a href="/how-to-use-multiple-kv-files-in-kivy">How to use Multiple kv files in kivy</a></li></ul></div></div></div></div></div></div><div class="col-12 col-md-7"><div class="overview"><div id="city"><table><tbody><tr><td><div id="bottomnextup"><a class="next" href="dropdown-list-in-kivy">next →</a></div><h1 class="h1">Kivy Tutorial</h1><div style="font-size:14px;margin-top:5px;margin-bottom:5px;color:#6f6e6e"><span>17 Mar 2025</span> | <span><i aria-hidden="true" class="fa fa-clock-o"></i> 18 min read</span></div><img alt="Kivy Tutorial" class="imageright" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-tutorial.png"><p>Kivy tutorial provides basic and advances concepts of Kivy. Our Kivy tutorial is designed for beginners as well as working professionals.</p><p>Kivy is a <strong>multi-platform application development framework</strong> for <a href="https://www.tpointtech.com/python-tutorial">Python</a>. It allows us to develop multi-platform applications on various platforms such as <strong><a href="https://www.tpointtech.com/windows">Windows</a>, <a href="https://www.tpointtech.com/linux-tutorial">Linux</a>, <a href="https://www.tpointtech.com/android-tutorial">Android</a>, macOS, iOS, and Raspberry Pi</strong>.</p><p>In our Kivy tutorial, we will discuss the following topics -</p><ul class="points"><li><a href="#Whatis">What is Kivy</a></li><li><a href="#Features">Features of Kivy</a></li><li><a href="#AdvantagesDisadvantages">Advantages &amp; Disadvantages of Kivy</a></li><li><a href="#Architecture">Kivy Architecture</a></li><li><a href="#Installation">Kivy Installation on Windows</a></li><li><a href="#HelloWorldprogram">Create a Hello World program in Kivy</a></li><li><a href="#Addimage">Add image in Kivy</a></li><li><a href="#Buttons">Kivy Buttons</a></li><li><a href="#Widgets">Kivy Widgets</a></li><li><a href="#Layouts">Kivy Layouts</a></li><li><a href="#popupwindow">Create popup window in Kivy</a></li><li><a href="#SigninWindow">Crete Sign in Window in Kivy</a></li></ul><hr/><h2 class="h2" id="Whatis">What is Kivy?</h2><ul class="points"><li>Kivy is an <strong>open-source</strong> and <strong>Graphical User Interface</strong> (GUI) development platform for Python.</li><li>It helps us to develop <strong>mobile applications</strong> and <strong>multi-touch application software</strong> with a NUI (Natural User Interface)</li><li>It allows developers to build an application once and use it across all devices.</li><li>It can also access mobile APIs to manipulate things such as the <strong>camera on a phone, GPS tracking, vibrator, and so on</strong>.</li><li>It contains various components for creating an application such as:<ul class="points"><li>A <strong>graphical library</strong> OpenGL ES 2.</li><li>An extensive range of <strong>widgets</strong> that support multi-touch.</li><li>An intermediate <strong>Kv language</strong> to design custom widgets.</li><li>An extensive support for <strong>input devices</strong> such as a mouse, keyboard, TUIO, as well as OS-specific multi touches events.</li></ul></li></ul><hr/><h2 class="h2" id="Features">Features of Kivy</h2><p>There are the following cool features of Kivy -</p><h3 class="h3">1. Video</h3><p>Kivy includes various modules to play video files and streams. Kivy Video player also supports some common requirements related to videos such as play, pause, stop buttons, text that can be used as a subtitle, display messages to the user on videos, and more.</p><p><strong>Example:</strong> pygame video provider supports MPEG1 on Linux.</p><h3 class="h3">2. Multi-touch and gestures</h3><p>Kivy uses a wide range of widgets that support multi-touch and gestures. Kivy developers provide a gesture library to record the user's gesture.</p><p>There are the following three gestures that we can record -</p><ul class="points"><li>Left to right horizontal line</li><li>Right to left horizontal line</li><li>Bottom to top vertical line</li></ul><h3 class="h3">3. UI features</h3><p>Kivy comes with a number of widgets and controls to make our mobile interface more attractive and beautiful. It is also used to improve one-handed usability, navigate gestures, create new icons or design elements, dark mode, and new animations.</p><h3 class="h3">4. Visual effects and OpenGL</h3><p>Kivy uses PyGame for easily creating new games. PyGame comes with various modules to drawing shapes, dealing with colors, and playing music.</p><h3 class="h3">5. Flexible</h3><p>Kivy is more flexible because it can run on a variety of devices, including <strong>Linux, mobile phones, <a href="https://www.tpointtech.com/what-is-windows">windows</a>, tablets, iOS</strong>, and <strong>Raspberry Pi</strong>. Kivy is flexible so it can adapt to new technologies quickly.</p><h3 class="h3">6. Free</h3><p>Kivy framework is completely free to use. To work with Kivy, you must have 1 GHz 32 bit (x86), or 64 bit (x64) <a href="https://www.tpointtech.com/central-processing-unit">CPU</a>, 1 GB of <a href="https://www.tpointtech.com/ram-full-form">RAM</a>, 128 MB of graphical memory, and Python installed on your system.</p><hr/><h2 class="h2" id="AdvantagesDisadvantages">Advantages and Disadvantages of Kivy</h2><h3 class="h3">Advantages</h3><p>A list of advantages of Kivy is given below -</p><ul class="points"><li>Kivy helps us to design innovative user interfaces with multi-touch functionalities.</li><li>It can smoothly work with various platforms such as Windows, Android, Linux, iOs, macOS, and Raspberry Pi.</li><li>It helps us to run code on all supported platforms.</li><li>It provides well-documented APIs.</li><li>It offers a better representation of programs, including classes, widget configuration, and inherited classes.</li><li>It performs better than HTML 5.</li></ul><h3 class="h3">Disadvantages</h3><ul class="points"><li>Kivy uses kV language, which is not suitable for us to compile our code alone.</li><li>It is not always up-to-date with the latest Android APIs.</li><li>It takes a lot of time for building and compiling mobile applications.</li><li>The sizes of the package are unnecessarily huge.</li><li>It has a lack of community support.</li></ul><hr/><h2 class="h2" id="Architecture">Kivy Architecture</h2><p>The below screenshot shows the Kivy Architecture -</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-architecture.png"><p>Kivy Architecture contains the following components -</p><h3 class="h3">1. Core Providers and Input Providers</h3><p>Kivy Providers mainly abstract the various core tasks includes <strong>opening a window, displaying images and text, playing audio, spelling correction, fetching images from a camera, and so on.</strong></p><p>An input provider is a piece of code that helps us to add support for a specific input device such as TUIO, mouse emulator, or Apple's trackpads. We can also add support for new input devices by providing a new class that reads our input data from our device and transform them into Kivy events.</p><h3 class="h3">2. Graphics</h3><p>Kivy Graphics APIs have the ability to automatically optimize the drawing commands.</p><h3 class="h3">3. Core</h3><p>Core provides the following features -</p><ul class="points"><li><strong>Clock</strong><br>A clock is used to schedule the timer events. Clock supported both <strong>one-shot timers</strong> and <strong>periodic timers</strong>.</br></li><li><strong>Cache</strong><br>In Kivy, the cache is used to store python objects. We can control the cache in the following two ways -<ul class="points"><li>Object limit</li><li>Timeout</li></ul></br></li></ul><h4 class="n">Note: We can also create a new cache in the Kivy with the limit of 10 objects and a timeout of 5 seconds.</h4><ul class="points"><li><strong>Gesture Detection</strong><br>Kivy uses a simple gesture detection, which is used to detect various types of strokes, circles, rectangles, or squares.</br></li><li><strong>Kivy Language</strong><br/>Kivy language is used to describe user interfaces more quickly and easily.</li><li><strong>Properties</strong><br/>In Kivy, properties classes are used to link our widget code to the user interface description.</li></ul><h3 class="h3">4. UIX</h3><p>The UIX module commonly contains Widgets and Layouts to quickly create a user interface.</p><p><strong>Widgets</strong></p><p>Widgets are the user interface components that we add to our program to provide some kind of functionality.</p><p><strong>Example:</strong> file browser, buttons, lists, sliders, and more.</p><p><strong>Layouts</strong></p><p>Layouts are used to arrange widgets.</p><h3 class="h3">5. Modules</h3><p>Modules are the classes that can be loaded on the Kivy when we start the Kivy application. The config file is used to manage the loading of modules.</p><h4 class="n">Note: In Kivy, we can also write our own modules.</h4><h3 class="h3">6. Input Events</h3><p>Kivy Input events are an essential part of the kivy Architecture. Kivy abstract contains different input events such as touches, mice, TUIO, Mouse, MTDev, and HIDInput. We can also add 2D onscreen-position with any individual input event.</p><p>All input types are characterized by an instance of the touch () class. A touch () class instance can be one of the following three states.</p><ul class="points"><li>Down</li><li>Move</li><li>Up</li></ul><h3 class="h3">7. Widgets and Input Dispatching</h3><p>The term Widgets are most frequently used in <a href="gui-full-form">GUI</a> programming to describe that part of the program which interacts with a user. In kivy, widgets are works as an object that receives input events. All widgets are arranged in the form of a widget tree. One widget may contain any number of child or none child.</p><p>Whenever new data is available, Kivy sends one per touch. Every event is first received by the root widget of the widget tree.</p><hr/><h2 class="h2" id="Installation">Kivy Installation on Windows</h2><p>To install the kivy on Windows, first, we need to install Python and Anaconda on our system.</p><p>Follow the below steps to install Python -</p><p><strong>Step 1:</strong> Copy-paste the below link on any browser or you just simply click on the below link - https://www.python.org/</p><p><strong>Step 2:</strong> The following page appears on the screen, in which click on the <strong>Downloads</strong> and select <strong>Windows</strong> from the drop-down menu.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation.png"><p><strong>Step 3:</strong> Select the Python Releases version for windows.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation2.png"><p><strong>Step 4:</strong> Double click on the downloaded file, the below window appears on the screen in which click on <strong>Install Now</strong>.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation3.png"><p><strong>Step 5:</strong> The below screenshot shows that Python installation is in progress.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation4.png"><p><strong>Step 6:</strong> The below screenshot shows that the setup is installed successfully. You just simply click on the <strong>Close</strong> button.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation5.png"><p>Now, follow the below steps to download the Anaconda -</p><p><strong>Step 1:</strong> Click on the below link to install Anaconda https://www.anaconda.com/products/individual</p><p><strong>Step 2:</strong> The following page appears on the screen. Scroll down the window and click on <strong>64-bit Graphical Installer (446 MB)</strong> at the bottom of the screen.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation6.png"><p><strong>Step 3:</strong> You can see that Anaconda Graphical Installer is to started download. Once the file is downloaded, double click on that executable file. The following window appears on the screen in which click on the <strong>Next</strong>.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation10.png"><p><strong>Step 4:</strong> A License Agreement window appears on the screen, in which click on the <strong>I Agree.</strong></p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation11.png"><p><strong>Step 5:</strong> In Installer type, select Install for <strong>Just Me (recommended)</strong>.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation12.png"><p><strong>Step 6: Browse the location</strong> where you want to install Anaconda and click on the <strong>Next</strong>.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation13.png"><p><strong>Step 7: An Advanced Installation Options</strong> window appears on the screen, tick on <strong>Register Anaconda3 as my default Python 3.7</strong>. And click on the <strong>Install</strong>.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation14.png"><p><strong>Step 8:</strong> The below screenshot shows that Anaconda Installation is in progress.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation15.png"><p><strong>Step 9:</strong> Once the Installation process is completed, click on the <strong>Next</strong> button.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation16.png"><p><strong>Step 10:</strong> The following window appears on the screen in which click on the <strong>Next</strong>.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-installation17.png"><p><strong>Step 11:</strong> A completing Anaconda set up window appears on the screen, simply click on the <strong>Finish</strong> on that window.</p><h3 class="h3">Install Kivy</h3><p>Once you installed the Anaconda, now we are able to install kivy.</p><p>There are the following steps to install kivy -</p><p><strong>Step 1:</strong> Go to the Anaconda Prompt.</p><p><strong>Step 2:</strong> Before installing kivy, first update the pip by using the following command.</p><div class="codeblock"><textarea class="python" name="code">python -m pip install - -upgrade pip wheel setuptools
</textarea></div><p><strong>Step 3: Install the Dependencies</strong></p><p>There are the following 3 dependencies that we need to install while installing the Kivy.</p><div class="codeblock"><textarea class="python" name="code">Python -m pip install docutils pygments pypiwin32 kivy.deps.sdl2 kivy.deps.glew
</textarea></div> <div class="codeblock"><textarea class="python" name="code">python -m pip install kivy.deps.gstreamer
</textarea></div> <div class="codeblock"><textarea class="python" name="code">python -m pip install kivy.deps.angle
</textarea></div><p><strong>Step 4: Install Kivy</strong></p><p>Use the following command to install Kivy.</p><div class="codeblock"><textarea class="python" name="code">python -m pip install kivy
</textarea></div><hr/><h2 class="h2" id="HelloWorldprogram">Create a Hello World program in Kivy</h2><p>There are the following steps to create a Hello World program in Kivy -</p><p><strong>Step 1:</strong> Open any text editor (Notepad or Notepad++)</p><p><strong>Step 2:</strong> Write the following code on the Editor.</p><div class="codeblock"><textarea class="java" name="code">import kivy  # import kivy module
from kivy.app import App # import Kivy App module to create a Kivy interface
from kivy.uix.label import Label # import Label Module
  
kivy.require('1.11.1')  # version required to run Kivy Application  
  
 
class MyKivyApp(App): # Create a class MyKivyApp
      
    
    def build(self): 
          
        return Label(text ="Hello World !") #return a Label with text Hello World ! as a root widget       
  
  
 
MyKivyApp().run()  # Class MyKivyApp is initialized and run () method is called to run the App.
</textarea></div><p><strong>Step 3:</strong> Save the file with <strong>.py</strong> extension for example Javatpoint.py</p><p><strong>Step 4:</strong> Open the Anaconda Prompt and provide the valid path where your kivy program is saved.</p><p><strong>Step 5:</strong> To run program, use the flowing command and press Enter.</p><div class="codeblock"><textarea class="java" name="code">python file_name.py (Ex: python javatpoint.py) 
</textarea></div><p>When you run the command following output appears on the screen.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/create-hello-world-program.png"><hr/><h2 class="h2" id="Addimage">Add image widget in Kivy</h2><p>Kivy image widget uses <strong>kivy.uix.image</strong> module to display image. There are the following two ways to add images in Kivy.</p><h3 class="h3">From System</h3><p>From system, image widget is used to load images from the system.</p><p>The below code is used to add an image widget in Kivy.</p><div class="codeblock"><textarea class="java" name="code">import kivy  # import kivy module
from kivy.app import App # import Kivy App module to create a Kivy interface
from kivy.uix.image import Image # import image Module
  
kivy.require('1.11.1')  # version required to run Kivy Application  
  
 
class MyKivyApp(App): # Create a class MyKivyApp
      
    
    def build(self): 
          
       return Image(source ="G:\Office\Images\Kivy\download.jpg") #return an Image as a root widget       
  
  
 
MyKivyApp().run()  # Class MyKivyApp is initialized and run () method is called to run the App.
</textarea></div><p>When we run code, the following output will appear on the screen.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/add-image-widget.png"><h3 class="h3">Asynchronous Loading</h3><p>The asynchronous loading e image widget is used to load images from the external web server.</p><p>We can use the following code to add an image from the external web server.</p><div class="codeblock"><textarea class="java" name="code">import kivy  # import kivy module
from kivy.app import App # import Kivy App module to create a Kivy interface
from kivy.uix.image import AsyncImage # import image Module
  
kivy.require('1.11.1')  # version required to run Kivy Application  
  	
 
class MyKivyApp(App): # Create a class MyKivyApp
      
    
    def build(self): 
          
       return AsyncImage(source ="https://media.gettyimages.com/photos/stack-of-books-picture-id157482029?s=612x612") #return an Image as a root widget       
  
      #Copy the image link address.
 
MyKivyApp().run()  # Class MyKivyApp is initialized and run () method is called to run the App.
</textarea></div><p>The below screenshot shows that an image is added from the external web server.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/add-image-widget2.png"><hr/><h2 class="h2" id="Buttons">Kivy Buttons</h2><p>Buttons are an essential part of every application. It performs some specific tasks when we click on the button. The main advantage of a button is that it allows users to interact with the software and application directly.</p><p>To create a button in Kivy, we need to import Button <strong>form kivy.uix.button</strong>.</p><div class="codeblock"><textarea class="java" name="code">import kivy 
from kivy.app import App 
from kivy.uix.button import Button #import Button
kivy.require("1.9.1") 
 
class kivyButtonApp(App): 
      
    def build(self): 
          
        btn = Button(text = "Press Me!") 
        return btn 
  
  
root = kivyButtonApp() 
root.run()
</textarea></div><p><strong>Output:</strong></p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-buttons.png"><h3 class="h3">Create a stylish button</h3><p>In Kivy, we can also design a stylish button using various different background colors, size_hint, and pos.</p><div class="codeblock"><textarea class="java" name="code">import kivy 
from kivy.app import App 
from kivy.uix.button import Button #import Button
kivy.require("1.9.1") 
 
class kivyButtonApp(App): 
      
    def build(self): 
          
        btn = Button(text = "Press Me!", size_hint = (.2,.2), pos = (300,250)) 
        return btn 
  	
  
root = kivyButtonApp() 
root.run()
</textarea></div><p>The below screenshot shows the output of a stylish button.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-buttons2.png"><h3 class="h3">Add an image in the button</h3><p>Kivy allows us to add an image in the button to make the button more effective and attractive.</p><p>To add an image in the button, we need to import the following module:</p><div class="codeblock"><textarea class="java" name="code">from kivy.uix.button import Button
from kivy.config import Config
</textarea></div><p><strong>Code:</strong></p><div class="codeblock"><textarea class="java" name="code">import kivy    
kivy.require("1.9.1")  
from kivy.app import App    
from kivy.uix.button import Button 
from kivy.config import Config   
Config.set('graphics', 'resizable', True) 
    
class Button_Demo(App):  
         
    def build(self):  
   
          	
        btn = Button(text ="Click ME", 
                     color =(1, 0, .65, 1), 
                     background_normal = 'G:\Office\Images\Kivy\download.jpg', 
                     
                     size_hint = (.4, .4), 
                     pos_hint = {"x":0.39, "y":0.3} 
                   )  
      
        return btn  
             
     
  
root = Button_Demo()  
     

root.run()
</textarea></div><p><strong>Output:</strong></p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-buttons3.png"><hr/><h2 class="h2" id="Widgets">Kivy Widgets</h2><p>Kivy Widgets are used to develop GUI interfaces in kivy. Kivy widgets allow us to create Labels, Canvas, drop-down menu, and more.</p><h3 class="h3">1. Label Widgets</h3><p>Label widget is used for rendering the text. To make labels more attractive, we can add font size, color, and text color in the label.</p><p>To create label, we need to import <strong>from kivy.uix.label import Label</strong> module.</p><p><strong>Code:</strong></p><div class="codeblock"><textarea class="java" name="code">import kivy  
from kivy.app import App 
from kivy.uix.label import Label  #import Label Module
  
 
class Label_Demo(App): 
    def build(self): 
       
        label1 = Label(text ="javaTpoint", font_size = 120) #Disply label on the screen
        return label1 
  
root=Label_Demo()
root.run()
</textarea></div><p><strong>Output:</strong> The below screenshot shows the output of the label.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-widgets.png"><h3 class="h3">3. Checkbox</h3><p>Checkbox is also referred to as a selection box, tick box, and checkmark. It is used in the forms to make forms options easier to read and answer.</p><p><strong>Code:</strong></p><div class="codeblock"><textarea class="java" name="code">import kivy   
from kivy.app import App  
from kivy.uix.widget import Widget 
from kivy.uix.label import Label  
from kivy.uix.gridlayout import GridLayout 
from kivy.uix.checkbox import CheckBox  

class checkboxDemo(GridLayout): 
  
    def __init__(self, **kwargs): 
         
        super().__init__() 
  
         
        self.cols = 2
  
      
        self.add_widget(Label(text ='Python')) #add checkbox
        self.check = CheckBox(active = True) 
        self.add_widget(self.check) 
  
        self.add_widget(Label(text ='C')) 
        self.check = CheckBox(active = False) 
        self.add_widget(self.check) 
  
        self.add_widget(Label(text ='C++')) 
        self.check= CheckBox(active = False) 
        self.add_widget(self.check)
		
		
        self.add_widget(Label(text ='Java')) 
        self.check = CheckBox(active = True) 
        self.add_widget(self.check) 
  
        self.add_widget(Label(text ='Other')) 
        self.check = CheckBox(active = False) 
        self.add_widget(self.check)
 
class CheckBox_App(App): 
    def build(self):       
        return checkboxDemo()
		
root= CheckBox_App()
root.run()
</textarea></div><p>The below screenshot shows the output of checkbox:</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-widgets2.png"/><h3 class="h3">Slider</h3><p>Slider is used to handle a specific numeric value within a range (minimum to maximum values). Mostly, Sliders are used in mobile phones to increase and decrease the volume as well as the brightness of the mobile phone.</p><p>To create the slider, first, we have to import <strong>from kivy.uix.slider import Slider</strong> Module.</p><p>In Kivy, we use the below code to create the Range Slider:</p><p><strong>Code:</strong></p><div class="codeblock"><textarea class="java" name="code">from kivy.app import App
from kivy.uix.slider import Slider
from kivy.uix.gridlayout import GridLayout
from kivy.uix.label import Label
 	
class Slider_Demo(GridLayout):
    def __init__(self):
        super().__init__()
 
        self.cols = 2
 
        self.slider = Slider(min = 0, max = 100)
        self.add_widget(self.slider)
        self.slider.bind(value = self.on_value_change)
 
        self.label = Label(text = "0")
        self.add_widget(self.label)
 
    def on_value_change(self, instance, value):
        self.label.text = "Value Is : {} ".format(int(value))
 
 
class SliderWindow(App):
    def build(self):
 
        return Slider_Demo()
 
 
 
root = SliderWindow()
root.run()
</textarea></div><p>The below screenshot shows the output of the slider.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-widgets3.png"/><h4 class="n">Note: Kivy also supports normalized slider, which contains minimum value 0 and maximum value 1.</h4><h3 class="h3">Switch Widget</h3><p>Switch widget contains only two states (On or OFF).</p><p>To create a Switch widget, we need to import <strong>from kivy.uix.switch import Switch</strong> module.</p><p><strong>Code:</strong></p><div class="codeblock"><textarea class="java" name="code">import kivy    
from kivy.app import App   
kivy.require('1.9.0') 
from kivy.uix.switch import Switch #import switch Module 
from kivy.uix.gridlayout import GridLayout   
from kivy.uix.label import Label 
  
class SimpleSwitch(GridLayout): 
  
     
     def __init__(self, **kwargs): 
  
          
          super(SimpleSwitch, self).__init__(**kwargs) 
  
          
          self.cols = 2
  
      
          self.add_widget(Label(text ="Switch")) 
  
          
          self.settings_sample = Switch(active = False) 
  
         
          self.add_widget(self.settings_sample) 
  
          
          self.settings_sample.bind(active = switch_callback)        
  
 
def switch_callback(switchObject, switchValue): 
      
   
    if(switchValue): 
        print('Switch is ON:):):)') 
    else: 
        print('Switch is OFF:(:(:(') 
  
   

class SwitchApp(App): 
     
     def build(self): 
          
          return SimpleSwitch() 
  
   

if __name__ == '__main__': 
     SwitchApp().run()
</textarea></div><p><strong>Output:</strong> The below screenshot shows the output of the Switch Widget.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-widgets4.png"/><h3 class="h3">Progress Bar</h3><p>Progress Bar in one of the most important graphical control element, which is used to analyze the progress of operation such as <strong>downloading progress, file transfer progress, loading app, saving updates, and installation progress</strong>.</p><p>To create a progress bar, fist import the below module:</p><p><strong>from kivy.uix.progressbar import ProgressBar</strong></p><div class="codeblock"><textarea class="java" name="code">import kivy
from kivy.app import App
from kivy.uix.widget import Widget
from kivy.uix.button import Button
from kivy.uix.progressbar import ProgressBar
from kivy.uix.boxlayout import BoxLayout
from kivy.clock import Clock
from time import sleep
 
class MainMenu(BoxLayout):
    def __init__(self):
        super().__init__()
        self.orientation = 'vertical'
       
        btn = Button(text="Start")
        btn.bind(on_release=self.trigger)
        self.add_widget(btn)
       
        self.MyList = ('My', 'first', 'Progress', 'Bar')
        self.i = 0
        self.pb = ProgressBar(max = len(self.MyList), value = 0)    
        self.add_widget(self.pb)
               
    def trigger(self, *args):
      self.i = 0
      self.pb.value = 0
     
      Clock.schedule_interval(self.heavyFunc,0.1)
   
    def heavyFunc(self, dt):
        sleep(0.5)
        print(self.MyList[self.i])
        self.i += 1
        self.pb.value +=1
        if self.i &gt;= len(self.MyList):
            Clock.unschedule(self.heavyFunc)
            print('unscheduled')
 
class TestApp(App):
    def build(self):
        return MainMenu()
 
root = TestApp()
root.run()
</textarea></div><p><strong>Output:</strong></p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-widgets5.png"/><p>When we click on the Start, the below progress bar appears on the screen.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-widgets6.png"/><hr/><h2 class="h2" id="Layouts">Kivy Layouts</h2><p>Layout is the most important term in graphics design. It is used to arrange elements for a better look.</p><p>There are the following different types of layout that we generally use in the Kivy.</p><h3 class="h3">1. GridLayout</h3><p>GridLayout is designed to arrange the components in the form of a rectangular grid. In GridLayout, every rectangular grid is exactly the same in size.</p><p>To create Grid layout in Kivy, first, we need to import the following GridLayout module -</p><div class="codeblock"><textarea class="java" name="code">from kivy.uix.gridlayout import GridLayout
</textarea></div><p><strong>Implement Grid Layout:</strong></p><div class="codeblock"><textarea class="java" name="code">import kivy  #import kivy    
from kivy.app import App   
from kivy.uix.button import Button
from kivy.uix.gridlayout import GridLayout #import GridLayout
class Grid_LayoutApp(App):   
    def build(self):  
        layout = GridLayout(cols = 3) #define number of columns
  
        layout.add_widget(Button(text = 'java')) #first row 
        layout.add_widget(Button(text = 'T'))
        layout.add_widget(Button(text = 'point'))		
  
        layout.add_widget(Button(text = 'Python')) #second row
        layout.add_widget(Button(text = '+'))
        layout.add_widget(Button(text = 'Kivy'))
		
        return layout 
		
root = Grid_LayoutApp() 

root.run()
</textarea></div><p>The below screenshot shows the output of the Grid Layout.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-layouts.png"/><h3 class="h3">2. BoxLayout</h3><p>BoxLayout is used to arrange the component based on the axis's [along X-axis (horizontally) and along Y-axis (Vertically)].</p><p>To import BoxLayout, we need to import BoxLayout using below module:</p><div class="codeblock"><textarea class="java" name="code">from kivy.uix.boxlayout import BoxLayout.
</textarea></div><p><strong>Implement Box Layout:</strong></p><div class="codeblock"><textarea class="java" name="code">import kivy
from kivy.app import App
from kivy.uix.boxlayout import BoxLayout
from kivy.uix.button import Button

class Box_LayoutApp(App):

    def build(self):

        superBox        = BoxLayout(orientation='vertical')

        horizontalBox   = BoxLayout(orientation='horizontal')

        button1         = Button(text = "Python")

        button2         = Button(text = "Pygame")

        horizontalBox.add_widget(button1)

        horizontalBox.add_widget(button2)

        verticalBox     = BoxLayout(orientation = 'vertical')

        button3         = Button(text = "Jupyter")

        button4         = Button(text = "OpenGL")

        verticalBox.add_widget(button3)

        verticalBox.add_widget(button4)
	    
        button1         = Button(text = "Kivy")

        horizontalBox.add_widget(button1)

        superBox.add_widget(horizontalBox)

        superBox.add_widget(verticalBox)

        return superBox

root= Box_LayoutApp()
root.run()
</textarea></div><p>The below screenshot shows the output of the Box Layout:</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-layouts2.png"/><h3 class="h3">3. FloatLayout</h3><p>FloatLayout is used to place element according to the size of the current window (in terms of height and width of window).</p><p>FloatLayout contains <strong>pos_hint</strong> and <strong>size_hint</strong>, which are the properties of its children.</p><h4 class="n">Note 1: FloatLayout is mostly used in the Mobile Applications.</h4><h4 class="n">Note 2: By default, size_hint is (1,1) for all widgets.</h4><p>To create FloatLayout, we need to import the below module:</p><div class="codeblock"><textarea class="java" name="code">from kivy.uix.floatlayout import FloatLayout
</textarea></div><p><strong>Implement FloatLayout:</strong></p><div class="codeblock"><textarea class="java" name="code">import kivy 
from kivy.app import App   
from kivy.uix.button import Button 
from kivy.uix.floatlayout import FloatLayout # import FloatLayout
class Float_LayoutApp(App): 
  
    def build(self): 
  
       
        Layout = FloatLayout(size = (300,300))  
        btn = Button(text ='Kivy', 
		size_hint = (.3, .5), 
        background_color = (.6, .7, .7, 1), 
        pos_hint = {'x':.4, 'y':.3 }) 
  
         
        Layout.add_widget(btn) 
  
        
        return Layout 
  
root=Float_LayoutApp()
root.run()
</textarea></div><p>The below screenshot shows the output of the FloatLayout:</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-layouts3.png"/><h3 class="h3">4. AnchorLayout</h3><p>AnchorLayout is used to align the border top, bottom, left, right, or center.</p><p>AnchorLayout is initialized using the below parameters:</p><ul class="points"><li>anchor_x = (Parameter can be passed: "left", "right", and "center")</li><li>anchor_y = (Parameter can be passed: "top", "bottom", and "center")</li></ul><p>We can implement Anchor Layout using the following module:</p><div class="codeblock"><textarea class="java" name="code">from kivy.uix.anchorlayout.AnchorLayout
</textarea></div><p>The below code is used to create AnchorLayout.</p><div class="codeblock"><textarea class="java" name="code">import kivy 
from kivy.app import App 
from kivy.uix.anchorlayout import AnchorLayout  # import AnchorLayout
from kivy.uix.boxlayout import BoxLayout 
from kivy.uix.button import Button 
  
class Anchor_LayoutDemo(App): 
      
    def build(self):

        # Anchor1 (anchor_x = Left, anchor_y = center)

        anchorLayout1 = AnchorLayout(anchor_x = 'left', anchor_y = 'center')

        button1       = Button(text ='Python', size_hint = (0.4, 0.4), 
		                       background_color = (.6,1.0,.7,1))

        anchorLayout1.add_widget(button1)

        # Anchor2 (anchor_x = center, anchor_y = top)

        anchorLayout2    = AnchorLayout()

        anchorLayout2 = AnchorLayout(anchor_x = 'center', anchor_y = 'top')

        button2       = Button(text = 'Kivy', size_hint = (0.2, 0.2), 
		                       background_color = (.6,1.0,.7,1))

        anchorLayout2.add_widget(button2)
		 
		
		# Anchor3 (anchor_x = right anchor_y = center)

        anchorLayout3    = AnchorLayout()

        anchorLayout3 = AnchorLayout(anchor_x = 'right', anchor_y = 'center')

        button3       = Button(text = 'OpenGL', size_hint = (0.4, 0.4), 
		                       background_color = (.6,1.0,.8,1))

        anchorLayout3.add_widget(button3)

        boxLayout = BoxLayout() # crete boxLayout

        # Add the anchor layouts to the box layout

        boxLayout.add_widget(anchorLayout1)

        boxLayout.add_widget(anchorLayout2)

        boxLayout.add_widget(anchorLayout3)

        return boxLayout

root = Anchor_LayoutDemo()
root.run()
</textarea></div><p><strong>Output:</strong></p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-layouts4.png"/><h3 class="h3">5. StackLayout</h3><p>StackLayout helps us to arrange buttons vertically and horizontally. In StackLayout, it is not compulsory that the sizes of all buttons are the same, so we can arrange buttons according to our requirement.</p><p>To create StackLayout, we need to import the below module:</p><div class="codeblock"><textarea class="java" name="code">from kivy.uix.stacklayout import StackLayout 
</textarea></div><p><strong>Code:</strong></p><div class="codeblock"><textarea class="java" name="code">import kivy   
kivy.require("1.9.1")    
from kivy.app import App   
from kivy.uix.button import Button  
from kivy.uix.stacklayout import StackLayout 

class StackLayout_Demo(App):  
        
    def build(self): 
           
        SL = StackLayout(orientation ='lr-tb') # Different orientation ['lr-tb', 'tb-lr', 'rl-tb', 'tb-rl', 'lr-bt', 'bt-lr', 'rl-bt', 'bt-rl']
       
         
        button1 = Button(text ="1", 
                      font_size = 18, 
                      size_hint =(.1, .1)) 
        button2 = Button(text ="2", 
                      font_size = 18, 
                      size_hint =(.1, .1)) 
        button3 = Button(text ="3", 
                      font_size = 18, 
                      size_hint =(.1, .1)) 
        button4 = Button(text ="4", 
                      font_size = 18, 
                      size_hint =(.1, .1)) 
        button5 = Button(text ="5", 
                      font_size = 18, 
                      size_hint =(.1, .1)) 
        button6 = Button(text ="6", 
                      font_size = 18, 
                      size_hint =(.1, .1)) 
        button7 = Button(text ="7", 
                      font_size = 18, 
                      size_hint =(.1, .1)) 
        button8 = Button(text ="8", 
                      font_size = 18, 
                      size_hint =(.1, .1)) 
        button9 = Button(text ="9", 
                      font_size = 18, 
                      size_hint =(.1, .1)) 
        button0 = Button(text ="0", 
                      font_size = 18, 
                      size_hint =(.1, .1)) 
		
        button11 = Button(text ="11", 
                      font_size = 18, 
                      size_hint =(.1, .1))
        # adding widgets 
        SL.add_widget(button1) 
        SL.add_widget(button2) 
        SL.add_widget(button3) 
        SL.add_widget(button4) 
        SL.add_widget(button5) 
        SL.add_widget(button6) 
        SL.add_widget(button7) 
        SL.add_widget(button8) 
        SL.add_widget(button9) 
        SL.add_widget(button0) 
	
        return SL 
root = StackLayout_Demo()
root.run()
</textarea></div><p>The output of the StackLayout is shown below:</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/kivy-layouts5.png"/><hr/><h2 class="h2" id="popupwindow">Create a Popup Window in Kivy</h2><p>Popup window is a type of window that suddenly pops up on the screen. Generally, a popup window appears to users when they visit a page or closes a window.</p><p>In Kivy, we create a popup window using the below code:</p><div class="codeblock"><textarea class="java" name="code">import kivy
from kivy.app import App
from kivy.uix.button import Button
from kivy.uix.label import Label
from kivy.uix.popup import Popup
from kivy.uix.gridlayout import GridLayout

class Popup_Demo(App):

    def build(self):

        layout = GridLayout(cols = 1, padding = 10)

        self.button = Button(text="Click Here to view Popup",
		                     size_hint = (0.8, 0.2),
                             pos_hint = {"x":0.1, "y":0.1})

        layout.add_widget(self.button)

        self.button.bind(on_press = self.onButtonPress) 

        return layout

    def onButtonPress(self, button):

        layout      = GridLayout(cols = 1, padding = 10)

        popupLabel  = Label(text  = "Welcome User")

        closeButton = Button(text = "Close the pop-up window")

        layout.add_widget(popupLabel)

        layout.add_widget(closeButton)       

        popup = Popup(title = 'Demo Popup',

                      content = layout)  

                 

        popup.open()   

        closeButton.bind(on_press = popup.dismiss)   

root = Popup_Demo()
root.run()
</textarea></div><p><strong>Output:</strong></p><p>The below screenshot shows the output of popup window -</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/create-popup-window.png"/><p>When we click on the popup window, the following screen appears on the screen.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/create-popup-window2.png"/><hr/><h2 class="h2" id="SigninWindow">Create a Sign in Window in Kivy</h2><p>Now, we are going to create a simple sign in page using Kivy. To create a sign in page in kivy, we need to create the following two files -</p><ol class="points"><li><strong>.py file -</strong> .py file is a script file which is written in Python. It can be created in any text editor but requires a Python interpreter to run.</li><li><strong>.kv file -</strong> .kv file is same as css file in the HTML.</li></ol><h4 class="n">Note: Here, we are using .kv file to create Sign in window.</h4><p><strong>.py file</strong></p><div class="codeblock"><textarea class="java" name="code">import kivy
from kivy.app import App
from kivy.uix.boxlayout import BoxLayout

class SigninWindow(BoxLayout):

    def __init__(self, **kwargs):
        super().__init__(**kwargs)

    def validate_user(self):
        user = self.ids.username_field
        pwd = self.ids.pwd_field
        info = self.ids.info

        uname = user.text
        passwd = pwd.text

        if uname == '' or passwd == '':
            info.text = '[color=#FF0000]username and password are required[/color]'
        else:
            if uname == 'admin' and passwd == 'admin':
                info.text = '[color=#00FF00]Logged In successfully!!![/color]'
            else:
                info.text = '[color=#FF0000]Invalid Username and Password[/color]'



class SigninApp(App):
    def build(self):
	    return SigninWindow()
	
	
root = SigninApp()
root.run()
</textarea></div><p><strong>.kv file</strong></p><div class="codeblock"><textarea class="java" name="code">&lt;FlatButton@ButtonBehavior+Label&gt;:
    font_sixe: 16
&lt;SigninWindow&gt;:
    id: main_win
    orientation: "vertical"
	spacing: 10
	space_x: self.size[0]/3
	canvas.before:
	    Color:
		    rgba: (255, 255, 255, 255)
		Rectangle:
		    size: self.size
			pos: self.pos
	
	BoxLayout:
	    size_hint_y: None
		height: 100
		canvas.before:
	        Color:
		        rgba: (128, 0, 0, 1)
		    Rectangle:
		        size: self.size
			    pos: self.pos
	    Label:
		    text: "Login Page"
			bold: True
			size_hint_x: .9
			FlatButton:
			    text: "x"
				size_hint_x: .1
		
	BoxLayout:
	    orientation: 'vertical'
		padding: main_win.space_x, 10
		spacing: 20
		size_hint_y: None
		height: 500
	    BoxLayout:
	        orientation: "vertical"
			spacing: 10
			size_hint_y: None
			height: 80
			Label
			    id: info
				text: ''
				markup: True
	        TextInput:
			    id: username_field
		        hint_text: "Username"
				multiline: False
				focus: True
				on_text_validate: pwd_field.focus= True
				size_hint_y: None
				height: 30
				
		    TextInput:
			    id: pwd_field
		        hint_text: "Password"
				multiline: False
				password: True #for * pattern password
				on_text_validate: root.validate_user()
				size_hint_y: None
				height: 30
		Label:
		    id: sp
			size_hint_y: None
			height: 20
	    Button:
		    text: "Sign In" 
            size_hint_y: None
            height: 40
            background_color: (.06,.06,.06,1)
            background_normal: ''
            on_release: root.validate_user()			
        Label:
		    id: sp2
</textarea></div><p>When we run the code, the following window appears on the screen.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/create-sign-in-window.png"/><p><strong>Case1:</strong> If the username and the password are empty, then the following screen appears on the screen.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/create-sign-in-window2.png"/><p><strong>Case 2:</strong> If we enter an invalid username and password, the following screen appears on the screen.</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/create-sign-in-window3.png"/><p><strong>Case 3:</strong> If we enter username <strong>admin</strong> and password is <strong>admin</strong> then the following screen appears on the screen</p><img alt="Kivy Tutorial" src="https://d2jdgazzki9vjm.cloudfront.net/tutorial/kivy/images/create-sign-in-window4.png"/><h2 class="h2">Prerequisite</h2><p>Before learning Kivy, you must have the fundamental knowledge of Python so that you can understand the Kivy concepts easily.</p><h2 class="h2">Audience</h2><p>Our Kivy tutorial is designed for beginners and working professionals.</p><h2 class="h2">Problem</h2><p>We assure you that you will not find any difficulty while learning our Kivy tutorial. Buts if there any mistake, kindly posts the problem in the contact form.</p><hr/><div class="nexttopicdiv"><span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="dropdown-list-in-kivy">Dropdown List in Kivy</a></span></div> <div id="bottomnext"><a class="next" href="dropdown-list-in-kivy" style="float:right">next →</a></div><br/> </img></img></img></img></img></img></img></img></img></img></img></img></img></img></img></img></img></img></img></img></img></img></img></td></tr></tbody></table></div><br/></div><div class="related-posts-container"><h2 class="h3">Related Posts</h2><ul class="related-posts-list"><li><a class="related-post-item" href="dropdown-list-in-kivy"><h3 class="h3">Dropdown List in Kivy</h3><p class="related-post-content">The dropdown list is used with custom widgets. The users use the dropdown list for displaying the list of the widgets that are under the displayed widgets. The list of widgets is used for storing any type of widgets, such as images, simple buttons, and many...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="creating-a-simple-drawing-app-in-kivy"><h3 class="h3">Creating a Simple Drawing App in kivy</h3><p class="related-post-content">What is Kivy? Kivy is a platform offering GUI tools for creating different applications that can be made on Android, IOS, Windows, and various other platforms. It is mainly used to build Android applications but also to make interactive and interesting desktop applications. Problem Statement Here, We will...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 8 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="how-to-use-multiple-kv-files-in-kivy"><h3 class="h3">How to use Multiple kv files in kivy</h3><p class="related-post-content">Kivy is a tool provided by Python used to develop applications that can run on different platforms like Android, IOS, Linux, Windows, etc. It is mainly used to build Android applications but can also make desktop applications. In addition to the main kv file, we can...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 4 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="create-a-stopwatch-using-a-clock-object-in-kivy-using-kv-file"><h3 class="h3">Create a Stopwatch Using a Clock Object in kivy using .kv File</h3><p class="related-post-content">Kivy is a tool provided by Python used to develop applications that can run on different platforms like Android, IOS, Linux, Windows, etc. Problem Statement We will create a stopwatch using the Clock object in the Kivy framework with the help of a .kv file. This easy-to-use kivy...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 7 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li></ul></div><br/><div class="container-xxl" style="position:relative;margin-top:-20px"><div class="aboutus themecolor subscribe"><div class="container px-lg-5 text-center"><h4 class="mb-4 animated zoomIn mediumheading">Subscribe to Tpoint Tech</h4><p class="pb-3 animated zoomIn text-center">We request you to subscribe our newsletter for upcoming updates.</p><div class="position-relative w-100 mt-3"><input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" id="email" placeholder="Your Email" style="height:48px" type="email"/> <button class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2" id="subscribeBtn" type="button">Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i></button></div><p class="mt-3" id="message"></p></div></div></div><br/><div class="ad-container" id="ad-container"></div><br/></div><div class="col-md-2"><div class="advertisement"><div id="sidebar_300x600_1_bq_307_556"></div><div id="sidebar_300x600_2_bq_307_557"></div><div id="sidebar_300x600_3_bq_307_558"></div></div></div></div><script>function closePopup(){document.getElementById("popup").style.display="none"}setTimeout((function(){localStorage.getItem("popupShown")||(document.getElementById("popup").style.display="flex",localStorage.setItem("popupShown","true"))}),5e3)</script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>$(document).ready((function(){$("#subscribeBtn").click((function(){var e=$("#email").val().trim();""!==e?$.ajax({url:"/subscribe",type:"POST",contentType:"application/json",data:JSON.stringify({email:e}),beforeSend:function(){$("#subscribeBtn").prop("disabled",!0).html("Subscribing...")},success:function(e){$("#message").html("<span style='color: green;'>Subscription successful! Please check your email.</span>"),$("#email").val("")},error:function(e){var s=e.responseJSON?e.responseJSON.error:"Subscription failed.";$("#message").html("<span style='color: red;'>"+s+"</span>")},complete:function(){$("#subscribeBtn").prop("disabled",!1).html('Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i>')}}):$("#message").html("<span style='color: red;'>Please enter your email.</span>")}))}))</script><div class="container-fluid footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"><div class="container py-5"><div class="row"><div class="col-md-6 col-lg-5"><img alt="Logo" src="https://images.tpointtech.com/static/images/logo.png"/><p>We provides tutorials and interview questions of all technology like java tutorial, android, java frameworks</p><h5 class="mb-4">Contact info</h5><p><svg viewbox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg>G-13, 2nd Floor, Sec-3, Noida, UP, 201301, India</p><p><svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v128z"></path></svg><a href="mailto:hr@tpointtech.com">hr@tpointtech.com</a></p><p><svg fill="currentColor" height="1.8em" stroke="currentColor" stroke-width="0" viewbox="0 0 24 24" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.49 3c-2.21 0-4.21.9-5.66 2.34l1.06 1.06a6.47 6.47 0 0 1 9.18 0l1.06-1.06A7.932 7.932 0 0 0 16.49 3z"></path><path d="M20.03 7.46a5.022 5.022 0 0 0-7.08 0l1.06 1.06c.63-.63 1.51-1.03 2.47-1.03s1.84.39 2.47 1.03l1.08-1.06zM15.08 9.59 16.49 11l1.41-1.41c-.36-.37-.86-.59-1.41-.59s-1.05.22-1.41.59z"></path><path d="m15.63 14.4-2.52 2.5c-2.5-1.43-4.57-3.5-6-6l2.5-2.52c.23-.24.33-.57.27-.9L9.13 3.8c-.09-.46-.5-.8-.98-.8H4c-.56 0-1.03.47-1 1.03.17 2.89 1.05 5.6 2.43 7.97 1.58 2.73 3.85 4.99 6.57 6.57 2.37 1.37 5.08 2.26 7.97 2.43.56.03 1.03-.44 1.03-1v-4.15c0-.48-.34-.89-.8-.98l-3.67-.73a.985.985 0 0 0-.9.26z"></path></svg><a href="tel:+919599086977">+91-9599086977</a></p><h5 class="mb-4">Follow us</h5><div class="d-flex"><a class="btn btn-outline-light btn-social" href="https://www.facebook.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Facebook Page" src="https://images.tpointtech.com/static/img/facebook.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://x.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech X Page" src="https://images.tpointtech.com/static/images/x.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/tpointtech/" rel="nofollow" target="_blank"><img alt="Tpoint Tech Linkedin Page" src="https://images.tpointtech.com/static/images/linkedin.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://t.me/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Telegram Channel" src="https://images.tpointtech.com/static/images/telegram.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@tpointtechofficial" rel="nofollow" target="_blank"><img alt="Tpoint Tech Youtube Channel" src="https://images.tpointtech.com/static/img/youtube.png"/></a><a class="btn btn-outline-light btn-social" href="https://www.instagram.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech instagram Page" src="https://images.tpointtech.com/static/images/insta.png" width="24"/></a></div></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Tutorials</h5><a class="btn btn-link" href="/java-tutorial">Java</a> <a class="btn btn-link" href="/data-structure-tutorial">Data Structures</a> <a class="btn btn-link" href="/c-programming-language-tutorial">C Programming</a> <a class="btn btn-link" href="/cpp-tutorial">C++ Tutorial</a> <a class="btn btn-link" href="/c-sharp-tutorial">C# Tutorial</a> <a class="btn btn-link" href="/php-tutorial">PHP Tutorial </a><a class="btn btn-link" href="/html-tutorial">HTML Tutorial</a> <a class="btn btn-link" href="/javascript-tutorial">JavaScript Tutorial </a><a class="btn btn-link" href="/jquery-tutorial">jQuery Tutorial </a><a class="btn btn-link" href="/spring-tutorial">Spring Tutorial</a></div><div class="col-md-6 col-lg-3"><h5 class="mb-4">Interview Questions</h5><a class="btn btn-link" href="/microsoft-interview-questions">Microsoft </a><a class="btn btn-link" href="/amazon-interview-questions">Amazon </a><a class="btn btn-link" href="/adobe-interview-questions">Adobe </a><a class="btn btn-link" href="/intuit-interview-questions">Intuit </a><a class="btn btn-link" href="/accenture-interview-questions">Accenture</a> <a class="btn btn-link" href="/cognizant-interview-questions">Cognizant </a><a class="btn btn-link" href="/capgemini-interview-questions">Capgemini </a><a class="btn btn-link" href="/wipro-interview-questions">Wipro </a><a class="btn btn-link" href="/tcs-interview-questions">Tcs </a><a class="btn btn-link" href="/infosys-interview-questions">Infosys</a></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Online Compiler</h5><a class="btn btn-link" href="/compiler/c">C </a><a class="btn btn-link" href="/compiler/r">R </a><a class="btn btn-link" href="/compiler/cpp">C++ </a><a class="btn btn-link" href="/compiler/php">Php </a><a class="btn btn-link" href="/compiler/java">Java </a><a class="btn btn-link" href="/compiler/html">Html </a><a class="btn btn-link" href="/compiler/swift">Swift </a><a class="btn btn-link" href="/compiler/python">Python </a><a class="btn btn-link" href="/compiler/javascript">JavaScript </a><a class="btn btn-link" href="/compiler/typescript">TypeScript</a></div></div></div><div class="container text-center px-lg-5"><div class="col-md-12 text-center mb-3 mb-md-0"></div><a href="/latest-post">Latest Post</a> | <a href="/tutorials-list">Tutorials List</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/about-us">About Us</a> | <a href="/contact-us">Contact Us</a></div><div class="copyright"><div class="row"><div class="col-md-12 text-center mb-3 mb-md-0">© Copyright 2011 - 2025 TpointTech.com. All Rights Reserved.</div></div></div></div></div></section><div aria-hidden="true" aria-labelledby="searchModalLabel" class="modal fade" id="searchModal" tabindex="-1"><div class="modal-dialog modal-dialog-scrollable modal-lg"><div class="modal-content shadow rounded-3"><div class="modal-header text-white"><img alt="TPoint Tech Logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" style="height:30px;margin-right:10px"/> <button aria-label="Close" class="btn-close btn-close-black" data-bs-dismiss="modal" type="button"></button></div><div class="modal-body" id="modalResults"></div></div></div></div><a class="btn btn-info btn-floating btn-lg" href="#" id="scrollButton"><i class="fas fa-arrow-up"></i></a><script defer="defer" src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script><script defer="defer" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.12.1/polyfill.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js"></script><script src="/static/js/categoryDetails.js"></script><script src="/static/js/shcoreandbrush.js"></script><script>dp.SyntaxHighlighter.HighlightAll("code")</script><script async="" src="/static/js/lazysizes.min.js"></script><script src="/static/js/main.js"></script><script>const hamburger=document.querySelector(".hamburger"),navMenu=document.querySelector(".nav");function open_menu(){hamburger.classList.toggle("active"),navMenu.classList.toggle("active")}hamburger?.addEventListener("click",open_menu);const navLink=document.querySelectorAll(".nav-link");function closeMenu(){hamburger?.classList?.remove("active"),navMenu?.classList?.remove("active")}navLink.forEach((e=>e.addEventListener("click",closeMenu)))</script><script>function toggleSidebar(){let e=document.querySelector(".col-md-2.sidebar"),l=document.querySelector(".leftmenu");window.innerWidth<=895&&("none"===e.style.display?(e.style.display="block",l.style.display="block",e.style.position="fixed",e.style.zIndex="555"):(e.style.display="none",l.style.display="none"))}toggleSidebar()</script><script>function handleAccordionOnLoad(){const o=window.innerWidth<=768,e=window.location.pathname,c=document.querySelectorAll(".leftmenu a"),n=document.querySelectorAll(".accordion-collapse");o?(n.forEach((o=>o.classList.remove("show"))),c.forEach((o=>{if(o.getAttribute("href")===e){const e=o.closest(".accordion-item");if(e){const o=e.querySelector(".accordion-collapse");o&&o.classList.add("show")}}}))):n.forEach((o=>o.classList.add("show")))}handleAccordionOnLoad(),window.addEventListener("resize",handleAccordionOnLoad)</script><script>const showhide=s=>{const e=$("#answer"+s),a=$("#btntext"+s);a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-black.png)"),"block"===e.css("display")?(e.css("display","none"),a.text("Show Answer")):(e.css("display","block"),a.empty(),a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-close-black.png)"),a.append("Hide Answer"))}</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");e&&e.addEventListener("wheel",(function(t){0!==t.deltaY&&(t.preventDefault(),e.scrollLeft+=t.deltaY)}))}))</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");let t=!1,n=0,s=0;e.addEventListener("mousedown",(a=>{t=!0,e.classList.add("active"),n=a.pageX,s=e.scrollLeft})),["mouseup","mouseleave"].forEach((n=>{e.addEventListener(n,(()=>{t=!1,e.classList.remove("active")}))})),e.addEventListener("mousemove",(a=>{if(!t)return;a.preventDefault();const d=a.pageX-n;e.scrollLeft=s-d})),e.addEventListener("dragstart",(e=>e.preventDefault()))}))</script><script>let currentPage=1;const resultsPerPage=10;let fullData=[];function renderModalPage(e){const t=fullData.slice(0,100),l=10*(e-1),n=l+10,r=t.slice(l,n);let a="";const i=l+1,o=n>t.length?t.length:n;a+=`<div style="padding: 2px 0; font-size: 14px; color: #555;">\n      Showing ${i}–${o} of ${fullData.length.toLocaleString()} results\n    </div>`,a+="<ul>",r.forEach((e=>{a+=e.url?`<li><a href="${e.url}">${e.title} -Tpoint Tech <br><span style='color:#918a8a;font-size:13px;'>${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</span><br></a></li>`:`<li>${e.title} -Tpoint Tech <br> ${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</li>`})),a+="</ul>";const s=Math.ceil(t.length/10);if(s>1){a+='<div class="pagination-numbers" style="text-align:center;margin-top:15px;">';for(let t=1;t<=s;t++)a+=`<span class="pagination-number" onclick="renderModalPage(${t})" style="margin:0 5px;cursor:pointer;color:${t===e?"#000":"#007bff"};">${t}</span>`;a+="</div>"}$("#modalResults").html(a)}function changePage(e){currentPage=e,renderModalPage(currentPage)}function performSearch(e,t=!1){e.length<2?$("#results").empty().hide():$.get("/search",{q:e},(function(e){if($("#results").empty(),0===e.length?$("#results").append("<li>No results found</li>"):e.forEach((e=>{const t=e.url?`<li><a href="${e.url}">${e.title}</a></li>`:`<li>${e.title}</li>`;$("#results").append(t)})),$("#results").show(),t){fullData=e,currentPage=1,renderModalPage(currentPage);new bootstrap.Modal(document.getElementById("searchModal")).show()}}))}$("#searchInput").on("input",(function(){performSearch($(this).val().trim())})),$("#searchInput").on("keypress",(function(e){if(13===e.which){e.preventDefault();performSearch($(this).val().trim(),!0)}})),$(document).on("click",(function(e){$(e.target).closest("#searchContainer").length||$("#results").hide()}))</script><script>const searchInput=document.getElementById("searchInput"),iconSearch=document.getElementById("iconSearch"),iconClear=document.getElementById("iconClear"),searchBtn=document.getElementById("searchBtn");searchInput.addEventListener("input",(()=>{""!==searchInput.value.trim()?(iconSearch.style.display="none",iconClear.style.display="inline"):(iconSearch.style.display="inline",iconClear.style.display="none")})),searchBtn.addEventListener("click",(e=>{""!==searchInput.value.trim()&&(e.preventDefault(),searchInput.value="",iconSearch.style.display="inline",iconClear.style.display="none",$("#results").empty().hide(),searchInput.focus())}))</script></body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>