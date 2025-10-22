<?php
// Tutorial: WPF in C# - Tpoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WPF in C# - Tpoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>WPF in C# - Tpoint Tech</h1>
        <body onload="highlightlink()"><div class="xyz shadow-sm"><div class="sticky-top p-0" style="position:sticky;background-color:var(--light)"><div class="container-fluid"><div class="position-relative p-0"><nav class="navbar navbar-expand-lg navbar-light px-4 py-lg-0"><a class="navbar-brand p-0" href="/"><img alt="Logo" height="48" id="logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" width="179"/></a><div class="w-100" id="search-box"><div id="searchContainer" style="position:relative"><input autocomplete="off" id="searchInput" placeholder="Search..." type="text"/> <button aria-label="Search" id="searchBtn" style="position:absolute;right:5px;top:50%;transform:translateY(-50%);background:0 0;border:none;cursor:pointer"><span id="iconSearch"><svg fill="none" height="20" stroke="green" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg> </span><span id="iconClear" style="display:none"><svg fill="none" height="20" stroke="red" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><line x1="6" x2="18" y1="6" y2="18"></line><line x1="6" x2="18" y1="18" y2="6"></line></svg></span></button><ul id="results"></ul></div></div><div class="jtp-nav"><button class="navbar-toggler float-left" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button"><span class="fa fa-bars"></span></button></div><div class="collapse navbar-collapse" id="navbarCollapse"><div class="navbar-nav"><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Tutorials</a><div class="dropdown-menu w-100 mt-0" id="tutorials"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("tutorials")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/python-tutorial">Python Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/django-tutorial">Django Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/numpy-tutorial">Numpy Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas">Pandas Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-tkinter">Tkinter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/pytorch">Pytorch Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/flask-tutorial">Flask Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/opencv">OpenCV Tutorial</a><h3 class="jtp-list-group-item">Java</h3><a class="jtp-list-group-item list-group-item-action" href="/java-tutorial">Java Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/servlet-tutorial">Servlet Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jsp-tutorial">JSP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-boot-tutorial">Spring Boot Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-tutorial">Spring Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-tutorial">Hibernate Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javafx-tutorial">JavaFX Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/java-web-services-tutorial">Java Web Services Tutorial</a><h3 class="jtp-list-group-item">.Net Framework</h3><a class="jtp-list-group-item list-group-item-action" href="/net-framework">.Net Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-tutorial">C# Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/asp-net-tutorial">ASP.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/ado-net-tutorial">ADO.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wpf">WPF Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">AI, ML and Data Science</h3><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-ai">Artificial Intelligence Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning">Machine Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-science">Data Science Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/deep-learning">Deep Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/tensorflow">TensorFlow Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/artificial-neural-network">Artificial Neural Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/matplotlib">Matplotlib Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-scipy">Python Scipy Tutorial</a><h3 class="jtp-list-group-item">Cloud Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing">Cloud Computing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-tutorial">AWS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-azure">Microsoft Azure Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/salesforce">Salesforce Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/google-cloud-platform">GCP Tutorial</a><h3 class="jtp-list-group-item">B.Tech and MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-tutorial">DBMS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-tutorial">Data Structures Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system">Operating System Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-network-tutorial">Computer Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/daa-tutorial">DAA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-organization-and-architecture-tutorial">Computer Organization Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/software-engineering">Software Engineering Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-mining">Data Mining Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/html-tutorial">HTML Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/css-tutorial">CSS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-tutorial">JavaScript Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-tutorial">Jquery Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-8">Angular 8 Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/reactjs-tutorial">React Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/react-native-tutorial">React Native Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/nodejs-tutorial">Node.js Tutorial</a><h3 class="jtp-list-group-item">PHP</h3><a class="jtp-list-group-item list-group-item-action" href="/php-tutorial">PHP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-tutorial">MySQL Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel">Laravel Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wordpress-tutorial">WordPress Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/codeigniter-tutorial">CodeIgniter Tutorial</a><h3 class="jtp-list-group-item">Software Testing</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-tutorial">Software Testing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-tutorial">Selenium Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jira-tutorial">JIRA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jmeter-tutorial">JMeter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/postman">Postman Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/testng-tutorial">TestNG Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/soapui">SoapUI Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/cucumber-testing">Cucumber Tutorial</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Interview</a><div class="dropdown-menu w-100 mt-0" id="interview-questions"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("interview-questions")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Technical Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions">Python Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/corejava-interview-questions">Java Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/dot-net-interview-questions">.Net Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/cpp-interview-questions">C++ Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/react-interview-questions">React Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/node-js-interview-questions">Node.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-interview-questions">Angular Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hr-interview-questions">HR Interview Questions</a><h3 class="jtp-list-group-item">Java Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/spring-boot-interview-questions">Spring Boot Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-interview-questions">Spring Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-interview-questions">Hibernate Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jdbc-interview-questions">JDBC Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/servletinterview">Servlet Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/maven-interview-questions">Maven Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jenkins-interview-questions">Jenkins Interview Questions</a><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/django-interview-questions-and-answers">Django Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas-interview-questions">Pandas Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/expressjs-interview-questions">Express.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-coding-interview-questions">Python Coding Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions-for-five-years-experienced">Python Interview Questions for 5 Years</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/html-interview-questions">HTML Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/css-interview-questions">CSS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-interview-questions">JavaScript Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">Jquery Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/php-interview-questions">PHP Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel-interview-questions">Laravel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/ajax-interview-questions">AJAX Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/front-end-developer-interview-questions">Front-End Developer Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">jQuery Interview Questions</a><h3 class="jtp-list-group-item">Database Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/pl-sql-interview-questions">PL/SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oracle-interview-questions">Oracle Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mongodb-interview-questions">MongoDB Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/redis-interview-questions-and-answers">Redis Interview Questions</a><h3 class="jtp-list-group-item">B.Tech / MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system-interview-questions">Operating System Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oops-interview-questions">OOPs Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-interview-questions">DSA Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/networking-interview-questions">Computer Networks Interview Questions</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Important Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/c-interview-questions">C Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/power-bi-interview-questions">Power BI Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/excel-interview-questions">Excel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning-interview-questions">Machine Learning Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-interview-questions">AWS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microservices-interview-questions">Microservices Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a><h3 class="jtp-list-group-item">Software Testing Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-interview-questions">Manual Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-interview-questions">Selenium Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/api-testing-interview-questions">API Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/etl-testing-interview-questions">ETL Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mobile-testing-interview-questions">Mobile Testing Interview Questions</a><h3 class="jtp-list-group-item">Company Interviews</h3><a class="jtp-list-group-item list-group-item-action" href="/ibm-interview-questions">IBM Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/adobe-interview-questions">Adobe Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-interview-questions">Microsoft Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/amazon-interview-questions">Amazon Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/tcs-interview-questions">TCS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/wipro-interview-questions">Wipro Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/accenture-interview-questions">Accenture Interview Questions</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Compiler</a><div class="dropdown-menu w-100 mt-0" id="compiler-menu"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("compiler-menu")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Online Compilers</h3><a class="jtp-list-group-item list-group-item-action" href="/compiler/python">Python Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/java">Java Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/php">PHP Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/c">C Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/cpp">C++ Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html">HTML Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/javascript">JavaScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/typescript">TypeScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/r">R Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/swift">Swift Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/kotlin">Kotlin Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/go">Go Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/csharp">C# Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/perl">Perl Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/groovy">Groovy Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html-css-javascript">HTML, CSS &amp; JavaScript Online Editor</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Multiple Choice Questions</h3><a class="jtp-list-group-item list-group-item-action" href="/python-mcq">Python MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/java-mcq">Java MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/php-mcq">PHP MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/c-language-mcq">C Programming MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cpp-mcq">C++ MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/html-mcq">HTML mcq </a><a class="jtp-list-group-item list-group-item-action" href="/javascript-mcq">JavaScript MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/sql-mcq">SQL MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/operating-system-mcq">Operating System MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-fundamental-mcq">Computer Fundamental MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-network-mcq">Computer Network MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/dbms-mcq">DBMS MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/data-structure-mcq">Data Structure MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/software-engineering-mcq">Software Engineering MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing-mcq">Cloud Computing MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-mcq">Artificial Intelligence MCQ</a></div></div></div></div></div></div></div></div><ul class="d-flex"><li><div class="theme-icon dark-mode-icon" onclick="toggleDarkMode()"><i class="fas fa-moon" id="dark-mode-icon"></i></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#059862","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1C2833","--sidebar":"#eef7f0","--hoverprimary":"#05593a","--codecompile":"#dce8dc"})' style="background-color:#059862"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#0D4549","--secondary":"#b6dde2","--light":"#FFFFFF","--dark":"#17202A","--sidebar":"#F0FAFB","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#0d4549"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#231760","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#e7f6fd","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#231760"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#286562","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#ECF0F1","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#286562"></div></li></ul></div></nav></div></div><div class="borderedelement"></div></div><script async="" src="https://cse.google.com/cse.js?cx=548338c60d2224ac4"></script><script>function applyTheme(e){const t=document.documentElement;Object.keys(e).forEach((o=>{t.style.setProperty(o,e[o])}))}function setThemeColors(e){localStorage.setItem("themeColors",JSON.stringify(e)),applyTheme(e)}window.addEventListener("load",(()=>{const e=JSON.parse(localStorage.getItem("themeColors"));e&&applyTheme(e)}))</script><script>function setThemeColors(t){const e=document.documentElement;Object.keys(t).forEach((o=>{e.style.setProperty(o,t[o])})),localStorage.setItem("themeColors",JSON.stringify(t))}function toggleDarkMode(){const t=document.body,e=document.getElementById("dark-mode-icon"),o=document.getElementById("logo");t.classList.toggle("night-mode")?(e.classList.remove("fa-moon"),e.classList.add("fa-sun"),localStorage.setItem("theme","night"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):(e.classList.remove("fa-sun"),e.classList.add("fa-moon"),localStorage.setItem("theme","day"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg")}window.addEventListener("load",(()=>{const t=JSON.parse(localStorage.getItem("themeColors")),e=localStorage.getItem("theme"),o=document.getElementById("logo");t&&setThemeColors(t),"night"===e?(document.body.classList.add("night-mode"),document.getElementById("dark-mode-icon").classList.remove("fa-moon"),document.getElementById("dark-mode-icon").classList.add("fa-sun"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg"}))</script></div><div class="xyz sticky-top shadow-sm;" id="tpointtech-images" style="z-index:99"><div id="link" style="clear:both;position:sticky;z-index:99"><div class="ddsmoothmenu"><span><button class="jt-nav float-left accordion accordion-flush" data-bs-target="#navbarCollapse" data-bs-toggle="jt-nav" onclick="toggleSidebar()" style="color:#fff;width:50px;margin-top:8px;margin-left:20px;font-size:20px;background:0 0;box-shadow:none;border:none" type="button"><span class="fa fa-bars"></span></button></span><ul class="nav" style="display:inline-flex;margin-left:auto;line-height:2rem"><li class="nav-item"><a class="nav-link" href="/python-tutorial"><img alt="Python Logo" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/python.svg" width="16"/> Python</a></li><li class="nav-item"><a class="nav-link" href="/java-tutorial"><img alt="java" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Java.svg" width="16"/> Java</a></li><li class="nav-item"><a class="nav-link" href="/javascript-tutorial"><img alt="javascript" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/JS.svg" width="16"/> JavaScript</a></li><li class="nav-item"><a class="nav-link" href="/sql-tutorial"><img alt="sql" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/SQL.svg" width="16"/> SQL</a></li><li class="nav-item"><a class="nav-link" href="/c-programming-language-tutorial"><img alt="c" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/C.svg" width="16"/> C</a></li><li class="nav-item"><a class="nav-link" href="/cpp-tutorial"><img alt="c++" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Cpp.svg" width="16"/> C++</a></li><li class="nav-item"><a class="nav-link" href="/html-tutorial"><img alt="html" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/HTML.svg" width="16"/> HTML</a></li><li class="nav-item"><a class="nav-link" href="/css-tutorial"><img alt="css" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/CSS.svg" width="16"/> CSS</a></li><li class="nav-item"><a class="nav-link" href="/reactjs-tutorial"><img alt="React" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/react.svg" width="16"/> React</a></li><li class="nav-item"><a class="nav-link" href="/nodejs-tutorial"><img alt="Node.js" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/nodejs.svg" width="16"/> Node.js</a></li><li class="nav-item"><a class="nav-link" href="/spring-boot-tutorial"><img alt="Spring Boot" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/spring-boot.svg" width="16"/> Spring Boot</a></li><li class="nav-item"><a class="nav-link" href="/c-sharp-tutorial"><img alt="c#" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/csharp.svg" width="16"/> C#</a></li><li class="nav-item"><a class="nav-link" href="/php-tutorial"><img alt="php" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/PHP.svg" width="16"/> PHP</a></li><li class="nav-item"><a class="nav-link" href="/mysql-tutorial"><img alt="MySQL" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mysql.svg" width="16"/> MySQL</a></li><li class="nav-item"><a class="nav-link" href="/mongodb-tutorial"><img alt="MongoDB" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mongodb.svg" width="16"/> MongoDB</a></li><li class="nav-item"><a class="nav-link" href="/artificial-intelligence-ai"><img alt="Artificial Intelligence" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/AI.svg" width="16"/> AI</a></li><li class="nav-item"><a class="nav-link" href="/machine-learning"><img alt="Machine Learning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/ML.svg" width="16"/> ML</a></li><li class="nav-item"><a class="nav-link" href="/data-structures-and-algorithms-dsa"><img alt="data structures" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DS.svg" width="16"/> DSA</a></li><li class="nav-item"><a class="nav-link" href="/dbms-tutorial"><img alt="dbms" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DBMS.svg" width="16"/> DBMS</a></li><li class="nav-item"><a class="nav-link" href="/operating-system"><img alt="Operating System" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/OS.svg" width="16"/> OS</a></li><li class="nav-item"><a class="nav-link" href="/aptitude/quantitative"><img alt="aptitude" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Aptitude.svg" width="16"/> Aptitude</a></li><li class="nav-item"><a class="nav-link" href="/reasoning"><img alt="reasoning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Reasoning.svg" width="16"/> Reasoning</a></li></ul></div></div></div><section class="course-details"><div class="container-fluid"><div class="row"><div class="col-md-2 sidebar" id="sidebar"><div id="menu-sidebar"><div class="accordion accordion-flush" id="accordionFlushExample"><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading0"><button aria-controls="flush-collapse0" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse0" data-bs-toggle="collapse" type="button">WPF Tutorial</button></h2><div aria-labelledby="flush-heading0" class="accordion-collapse collapse show" id="flush-collapse0"><div class="accordion-body"><ul><li class="leftmenu"><a href="/wpf">WPF</a></li><li class="leftmenu"><a href="/wpf-in-c-sharp">WPF in C#</a></li><li class="leftmenu"><a href="/wpf-listbox">WPF ListBox</a></li><li class="leftmenu"><a href="/wpf-vs-winform">WPF vs WinForm</a></li><li class="leftmenu"><a href="/wpf-button-control">WPF Button Control</a></li><li class="leftmenu"><a href="/wpf-checkbox-cntrol">WPF CheckBox Control</a></li><li class="leftmenu"><a href="/wpf-combobox">WPF ComboBox</a></li><li class="leftmenu"><a href="/wpf-stackpanel-control">StackPanel Control</a></li><li class="leftmenu"><a href="/wpf-dockpanel-layout">WPF DockPanel Layout</a></li><li class="leftmenu"><a href="/wpf-canvas-panel">WPF Canvas Panel</a></li><li class="leftmenu"><a href="/wpf-dialog-box">WPF Dialog Box</a></li><li class="leftmenu"><a href="/wpf-context-menu">WPF Context Menu</a></li><li class="leftmenu"><a href="/wpf-gridview-control">GridView Control</a></li><li class="leftmenu"><a href="/wpf-image-control">WPF Image Control</a></li><li class="leftmenu"><a href="/wpf-progress-bar">WPF Progress Bar</a></li><li class="leftmenu"><a href="/wpf-radiobutton-control">RadioButton Control</a></li><li class="leftmenu"><a href="/wpf-togglebutton-control">ToggleButton Control</a></li><li class="leftmenu"><a href="/wpf-tooltip-control">ToolTip Control</a></li></ul></div></div></div></div></div></div><div class="col-12 col-md-7"><div class="overview"><div id="city"><table><tbody><tr><td><div id="bottomnextup"><a class="next" href="wpf-listbox">next →</a> <a class="next" href="wpf">← prev</a></div><h1 class="h1">WPF in C#</h1><div style="font-size:14px;margin-top:5px;margin-bottom:5px;color:#6f6e6e"><span>17 Mar 2025</span> | <span><i aria-hidden="true" class="fa fa-clock-o"></i> 24 min read</span></div><p>WPF is known as Windows Presentation Foundation. Windows Presentation Foundation is known as the development framework. WPF is also known as the sub-system of the .Net framework. Windows Presentation Foundation framework can build the Windows Client Application. Windows Application can run on the Windows Operating System. We use XAML language for the frontend and C# language as the backend.</p><p>In the <a href="net-framework">.NET framework</a>, WPF was present as a Windows library. Windows client apps can be built through the Windows library. Windows library can also be used to generate the next generation of the Windows Form. Currently, we are using the 4.5 version of the WPF. We can also call the WPF as the engine. By using the Windows Presentation Foundation, we can create, display, and manipulate the user-interfaces (UI), documents, movies, images, and media in windows7 and Windows Operating Systems. WPF contains the set of the library. Library of WPF provides the functionality through which we can build, run, execute, and through the WPF library, we can manage all the Windows Client Applications.</p><p>WPF employs XAML, which is an XML based language. <a href="xml-tutorial">XML</a> is used to define and link the various elements. An application that is developed with the use of the WPF, we can deploy them as the Standalone desktop programs, or we can host the WPF applications as the embedded object on a <a href="website">website</a>.</p><p>The WPF application aims to do the unification of the user interface elements. All these include fixed and adaptive documents, 2D/3D rendering, run-time Animation, pre-rendered media. WPF run-time libraries include all the versions of the Microsoft Windows.</p><p>Functionality provided by the Microsoft Silverlight, is the subset of the WPF, which provides the embedded Web Controls as compared to the Adobe Flash.</p><h2 class="h2">Features of WPF in C#</h2><ul class="points"><li>Windows Presentation Foundation is a graphical system. WPF gives us the functionality through which we can create the next-generation Windows applications.</li><li>WPF combines the feature of the user interface 2D,3D graphics, documents, and multimedia.</li><li>WPF is also known as API through which we can build bulk Windows Client Application in bulk with the fabulous user experience.</li><li>Windows Presentation Foundation contains all the capabilities with the help of which we can precede the technology such as MFC, Windows Forms Including GDI, GDI+HTML, etc.</li></ul><h2 class="h2">Features of WPF are as:</h2><h3 class="h3">1. Direct3D</h3><p>Graphics include desktop items such as windows. Graphics are rendered using Direct3D. Through this, we can display sophisticated graphics and custom themes. With the use of the Direct3D, we can offload graphic tasks to the GPU in Windows. The use of Direct3D reduces the workload on the <a href="cpu-full-form">CPU</a>. We optimize the GPU for parallel pixel computation. By using the Direct3D feature of the WPF, the screen can be refreshed easily and can decrease the compatibility in the markets where we do not need the GPUs as powerful, such as the netbook market.</p><p>Windows Presentation Foundation is Microsoft's UI framework used to create the application with rich user experience. The focus of the WPF is mainly on the vector graphics, where we will allow the controls and elements to be scaled without any loss in the quality or pixelization.</p><h3 class="h3">2. XAML</h3><p>The use of the XAML language is one of the features of the WPF. XAML is also known as the XML based language. The purpose of the XAML in the WPF is to design the presentation logic. The XAML enables the programming model. With the use of the XAML, we can split the presentation logic and business logic. After the design of the application, we can handover to the developer for the integration and business logic of the application. This approach will be more readable and will be shorter than the code.</p><h3 class="h3">3. Control Set</h3><p>WPF contains the lots of controls set through which we can enable the quick assembling of the user interface. The rich control set is also the feature of the WPF. Most of the controls are similar to the windows forms control with the small changes in the controls.</p><ul class="points"><li><strong>ListBox</strong></li></ul><p>The Listbox in windows form contains the text value only. In ListBox, we can't display the list of the images with the text.</p><p><strong>Example of the ListBox</strong></p><p>The ListBox class in <a href="c-sharp-tutorial">C#</a> and WPF shows the Listbox control. ListBox in WPF has contained the collection of the items in the ListBox. Here we will show how to add the items, remove the item from the Listbox, and bind the Listbox to the data source.</p><p>The height and width properties will show us the width and height of the Listbox. The name property of the ListBox will show us the name of the control. Name is known as the unique identifier. Margin property of the ListBox shows us the margin of the Listbox on the parent control. Horizontal and VerticalAlignment properties of ListBox are used to set the horizontal and vertical alignment.</p><p>The below code is used to set the name, height, and width of the ListBox Control.</p><div class="codeblock"><textarea class="xml" name="code">&lt;ListBox Margin="10,10,0,13" Name="listBox1" HorizontalAlignment="Left" VerticalAlignment="Top" Width="194" Height="200"/&gt;
</textarea></div><p>Here we will perform the different functions on the Listbox.</p><h3 class="h3">Statically addition of the item to the ListBox Control</h3><p>ListBox control is a collection of the ListBox item. To add the item in the ListBox control, we will write the following code:</p><p>To add the item in the ListBox control in WPF, we will follow the following steps:</p><p>For the WPF application click on File-&gt;New-&gt;Project as shown in the below screenshot:</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-1.png"/><p>After this, the following window will appear as shown in the below screenshot:</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-2.png"/><p>As per the above screenshot, click on <strong>Visual C#-&gt;WPF App (.NET Framework)-&gt;Name of App (WPF_App1)-&gt;Click OK.</strong></p><p>After this, the following window will appear as shown in the below screenshot:</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-3.png"/><p><strong>To add the ListBox control statically, we will write the following code in the MainWindow.XAML window:</strong></p><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WPF_App1.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WPF_App1"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;ListBox Margin="10,10,0,13" Name="listBox1" HorizontalAlignment="Left" VerticalAlignment="Top" Width="194" Height="200"&gt;
            &lt;ListBoxItem Content="Coffie"&gt;&lt;/ListBoxItem&gt;
            &lt;ListBoxItem Content="Tea"&gt;&lt;/ListBoxItem&gt;
            &lt;ListBoxItem Content="Orange Juice"&gt;&lt;/ListBoxItem&gt;
            &lt;ListBoxItem Content="Milk"&gt;&lt;/ListBoxItem&gt;
            &lt;ListBoxItem Content="Iced Tea"&gt;&lt;/ListBoxItem&gt;
            &lt;ListBoxItem Content="Mango Shake"&gt;&lt;/ListBoxItem&gt;
        &lt;/ListBox&gt;


    &lt;/Grid&gt;
&lt;/Window&gt;
</textarea></div><p><strong>Design of the above code is as shown below:</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-4.png"/><p>In the above code, we add the item in the ListBox at the time of the design from XAML.</p><p><strong>OutPut</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-5.png"/><h3 class="h3">4. Independent Screen Resolution</h3><p>Independent Screen Resolution is a clear feature of the Screen Resolution. In the form of the Independent screen, the resolution user interface of WPF will look better even on the low-resolution screen. For the Screen Resolution of the WPF independently, screen resolution uses the DirectX component, and the Windows Form application uses the 32 components of the machine. To talk with the DirectX component, <a href="wpf">WPF</a> uses the Media Integration Layer (MIL). The direct component will show the vector-based graphics on the user interface of WPF.</p><p>With the help of the below screenshot, we can easily find out the difference between the Windows Forms UI and WPF UI in the presence of the low-resolution screen.</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-6.jpg"/><p>Here in the above screenshot if we see the character 'W' at the lower resolution we found that the Windows Forms looks like the distorted image and the vector based WPF looks like elegant.</p><h3 class="h3">5. Control inside the control</h3><p>In the WPF along with the text, we can also define the control as a content of another basic control. For example: like as button. This feature of WPF is really an astonishing fact for the developer and through this we know about the power of the WPF when we talk about the user interfaces.</p><p><strong>Here is the XAML code for the control inside the control for the Window is:</strong></p><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WpfApp2.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WpfApp2"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;Button Margin="90,88,75,124" Name="ButtonWithTextBox" FontSize="16"&gt;
            &lt;TextBox Width="75"&gt;Enter Text&lt;/TextBox&gt;
        &lt;/Button&gt;

    &lt;/Grid&gt;
&lt;/Window&gt;
</textarea></div><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-7.png"/><h3 class="h3">6. ontrol Template</h3><p>If we want to change the shape of the button with WPF we can change the shape of the button. Here we will take an example of WPF where we can declare the button and can change the shape of the elliptical.</p><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WpfApp2.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WpfApp2"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;Button x:Name="EllipticalButton" Margin="30,12,45,0" Content="Elliptical Button" FontSize="18"&gt;
            &lt;Button.Template&gt;
                &lt;ControlTemplate TargetType="{x:Type Button}"&gt;
                    &lt;Grid&gt;
                        &lt;Ellipse Width="500" Height="80" Fill="Yellow"/&gt;
                        &lt;ContentPresenter HorizontalAlignment="Center"         VerticalAlignment="Center"/&gt;
                    &lt;/Grid&gt;
                &lt;/ControlTemplate&gt;
            &lt;/Button.Template&gt;
        &lt;/Button&gt;


    &lt;/Grid&gt;
&lt;/Window&gt;
</textarea></div><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-8.png"/><h3 class="h3">7. Animations</h3><p>WPF supports the animations, which is time-based, in contrast with the frame-based approach. This separates the speed of the system from the performance of the system. WPF supports the Animation at a low level by timers and also supports the high-level abstraction by the animation classes.</p><ul class="points"><li>We can animate any WPF element property when we registered it as the dependent property.</li><li>We can animate the classes based on the .NET type of property, which is going to be animated. The ColorAnimation class can change the color of the element, and the width of the element can be animated by using the DoubleAnimation class.</li><li>StoryBoards can contain the group of the Animations.<ul class="points"><li>For manipulating the animations, StoryBoards are the primary way to start, stop, and pause.</li><li>We can trigger the Animation with the external events, which includes the user Action.</li><li>To redraw, the scene is the time triggered.</li></ul></li></ul><h3 class="h3">8. Documents</h3><p>The WPF supports the pagination of the documents. DocumentViewer class of the WPF is used to read the fixed-layout documents. View of the page is shown by the FlowDocumentReader class through which we can see the different modes of the opinions like scrollable, per-page, and flow of the text after resizing the viewing area.</p><p>WPF supports us with the XML paper specification documents. It also supports the reading and writing of the paginated documents using the Open Packaging Conventions.</p><h3 class="h3">9. Interoperability</h3><p>Windows Forms can be used with the <strong>ElementHost</strong> and <strong>WindowsFormsHost</strong> classes.</p><p>To use the Windows Form, we will execute the below WPF C# code:</p><div class="codeblock"><textarea class="xml" name="code">System.Windows.Forms.Integration.WindowsFormsHost.EnableWindowsFormsInterop();
</textarea></div><h3 class="h3">10. Availability of the Different Layouts</h3><p>We used the layouts to separate the controls on the User Interface logically. With the use of the layouts, we show the controls on the window clearly. There is a powerful layout control of set in the WPF.</p><p><strong>Layouts in the WPF are:</strong></p><p><strong>1. Stack Panel:</strong> The StackPanel is a simple and the useful layout panel in WPF. StackPanel contains the elements in the form of the stack where the elements can be arranged below or besides each other and the stack of the elements depend on the orientation. StackPanel is used to create the list of any types. For the use of the internal layout panel, we used the WPF items controls like <a href="wpf-listbox">ListBox</a>, Combo Box or Menu .</p><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WpfApp2.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WpfApp2"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800" FontSize="20"&gt;
    
        &lt;StackPanel&gt;
            &lt;TextBlock Margin="10" FontSize="25" FontWeight="Bold" FontStyle="Italic"&gt;Which type of Coffee would you like?&lt;/TextBlock&gt;
            &lt;Button Margin="10" FontSize="16"&gt;Black&lt;/Button&gt;
            &lt;Button Margin="10" Click="Button_Click" FontSize="16"&gt;With milk&lt;/Button&gt;
            &lt;Button Margin="10" FontSize="16"&gt;Latte machiato&lt;/Button&gt;
            &lt;Button Margin="10" FontSize="16"&gt;Chappuchino&lt;/Button&gt;
        &lt;/StackPanel&gt;
&lt;/Window&gt;
</textarea></div><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-9.png"/><h3 class="h3">Horizontally place the Stack Items.</h3><p>To place the item horizontally in Stack Panel we will take the example of two buttons "OK"," Cancel" buttons of the dialog window, because the size of the text can change if the user changes the font-size or switches the language we should avoid the fixed size buttons, both buttons depend on their size. If the button needs spaces, they will get it automatically.</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-10.png"/><h3 class="h3">2. Grid Layout</h3><p>Grid is a layout panel; with the help of the Grid Layout we can arrange child controls in a tabular structure which contains the rows and columns. The grid layout will work like as the <a href="html-tutorial">HTML</a> table but this layout is flexible. A cell can have multiple controls in it. Controls can span over the multiple cells and can overlap themselves.</p><p>Controls can resize themselves with the use of the HorizontalAlignment and VerticaAlignment properties, and these properties are defined by the anchors. The distance between the anchor and the grid line is defined by the margin of the control.</p><h3 class="h3">Define Rows and Columns</h3><p>By default, grid contains one row and one column. We will add the RowDefiniton items to the collection of RowDefinition and the ColumnDefinition items to the ColumnDefinition collection.</p><p>Here we are taking an example which shows the grid with three rows and two columns:</p><p>The size can be defined as the absolute amount of the logical units as the percentage value or logical units:</p><p>Fixed: Fixed shows the fix size of the logical units (1/96 units).</p><p>Auto: With the auto, it takes the space how much they needed for the control.</p><p>Star (*): This will take the available space.</p><p>Grid is known as the powerful and useful layout in WPF. In Grid, we have to arrange the child elements in cells in rows and columns. When the XAML document is added or when we create a new WPF project in Visual Studio, Visual Studio automatically adds the Grid as the first container in the window element.</p><p>We can create Rows and Columns in the two ways:</p><h3 class="h3">First Method: By XAML code</h3><p>By default, Grid contains the one Row and one Column. We can add the more rows and columns with the use of the RowDefinition element for each row inside the Grid.RowDefinition property and for the column element used the ColumnDefinition property inside the Grid.ColumnDefinition property. Grid is invisible. For showing the GridLines, we set the ShowGridLines property as true. GridLines are helpful for the debugging to determine the element in which cell they are situated.</p><p>Here we will take an example where we have to create the 3 rows and 3 Columns. Now we can add the 9 TextBlock and maintain the position of the TextBlock in the Grid by defining the Grid.Row and Grid.Column values. If the Grid.Row and Grid.Column property are not defined then in that case we can place the element in Grid.Row="0" and Grid.Column="0". In other words, we can say that we can place the element in the first row and first column.</p><p>To show the rows and columns in the grid we will write the following code:</p><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="Grid_WPF.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:Grid_WPF"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;Grid ShowGridLines="True"&gt;
            &lt;Grid.ColumnDefinitions&gt;
                &lt;ColumnDefinition&gt;&lt;/ColumnDefinition&gt;
                &lt;ColumnDefinition&gt;&lt;/ColumnDefinition&gt;
                &lt;ColumnDefinition&gt;&lt;/ColumnDefinition&gt;
            &lt;/Grid.ColumnDefinitions&gt;
            &lt;Grid.RowDefinitions&gt;
                &lt;RowDefinition&gt;&lt;/RowDefinition&gt;
                &lt;RowDefinition&gt;&lt;/RowDefinition&gt;
                &lt;RowDefinition&gt;&lt;/RowDefinition&gt;
            &lt;/Grid.RowDefinitions&gt;
            &lt;TextBlock Text="Row0 Column0" Grid.Row="0" Grid.Column="0" FontSize="16" VerticalAlignment="Center" HorizontalAlignment="Center"&gt;&lt;/TextBlock&gt;
            &lt;TextBlock Text="Row0 Column1" Grid.Row="0" Grid.Column="1" FontSize="16" VerticalAlignment="Center" HorizontalAlignment="Center"&gt;&lt;/TextBlock&gt;
            &lt;TextBlock Text="Row0 Column2" Grid.Row="0" Grid.Column="2" FontSize="16" VerticalAlignment="Center" HorizontalAlignment="Center"&gt;&lt;/TextBlock&gt;
            &lt;TextBlock Text="Row1 Column0" Grid.Row="1" Grid.Column="0" FontSize="16" VerticalAlignment="Center" HorizontalAlignment="Center"&gt;&lt;/TextBlock&gt;
            &lt;TextBlock Text="Row1 Column1" Grid.Row="1" Grid.Column="1" FontSize="16" VerticalAlignment="Center" HorizontalAlignment="Center"&gt;&lt;/TextBlock&gt;
            &lt;TextBlock Text="Row1 Column2" Grid.Row="1" Grid.Column="2" FontSize="16" VerticalAlignment="Center" HorizontalAlignment="Center"&gt;&lt;/TextBlock&gt;
            &lt;TextBlock Text="Row2 Column0" Grid.Row="2" Grid.Column="0" FontSize="16" VerticalAlignment="Center" HorizontalAlignment="Center"&gt;&lt;/TextBlock&gt;
            &lt;TextBlock Text="Row2 Column1" Grid.Row="2" Grid.Column="1" FontSize="16" VerticalAlignment="Center" HorizontalAlignment="Center"&gt;&lt;/TextBlock&gt;
            &lt;TextBlock Text="Row2 Column2" Grid.Row="2" Grid.Column="2" FontSize="16" VerticalAlignment="Center" HorizontalAlignment="Center"&gt;&lt;/TextBlock&gt;
        &lt;/Grid&gt;

    &lt;/Grid&gt;
&lt;/Window&gt;
</textarea></div><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-11.png"/><h3 class="h3">Adding the control to the Grid</h3><p>For adding the controls to the Grid Layout, we just have to put the declaration between the opening and closing tags of the Grid.</p><p>The row and columndefinitions must proceed the definition of child control.</p><p>Grid Layout panel provide us the two attached properties Grid.Column and Grid.Row. These two properties define the location of the control.</p><p>For adding the control in the Grid in WPF, we will write the following code:</p><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="Grid_WPF.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:Grid_WPF"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition Height="Auto" /&gt;
            &lt;RowDefinition Height="Auto" /&gt;
            &lt;RowDefinition Height="*" /&gt;
            &lt;RowDefinition Height="28" /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition Width="Auto" /&gt;
            &lt;ColumnDefinition Width="200" /&gt;
        &lt;/Grid.ColumnDefinitions&gt;
        &lt;Label Grid.Row="0" Grid.Column="0" Content="Name:"/&gt;
        &lt;Label Grid.Row="1" Grid.Column="0" Content="E-Mail:"/&gt;
        &lt;Label Grid.Row="2" Grid.Column="0" Content="Comment:"/&gt;
        &lt;TextBox Grid.Column="1" Grid.Row="0" Margin="3" /&gt;
        &lt;TextBox Grid.Column="1" Grid.Row="1" Margin="3" /&gt;
        &lt;TextBox Grid.Column="1" Grid.Row="2" Margin="3" /&gt;
        &lt;Button Grid.Column="1" Grid.Row="3" HorizontalAlignment="Right" 
            MinWidth="80" Margin="3" Content="Send"  /&gt;

    &lt;/Grid&gt;
&lt;/Window&gt;
</textarea></div><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-12.png"/><h3 class="h3">3. Dock Panel</h3><p>DockPanel is used to define the area where we can arrange the element relative to each other. We can arrange the elements either horizontally or vertically. With the dock panel, we can easily dock the child elements at the top, bottom, right, left, and on the centre using the dock Property. The dockside of the element is defined by the attached property, which is <strong>DockPanel.Dock</strong>. The LastChildFill property must be set to true.</p><p>With the <strong>LastChildFill</strong> property, this will fill the remaining space of the last child element. The hierarchical dock panel class is as shown below:</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-13.png"/><p>To set the dock element each side, we will write the following code for that:</p><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="Grid_WPF.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:Grid_WPF"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;DockPanel LastChildFill="True"&gt;
            &lt;Button Content="Dock=Top" DockPanel.Dock="Top"/&gt;
            &lt;Button Content="Dock=Bottom" DockPanel.Dock="Bottom"/&gt;
            &lt;Button Content="Dock=Left"/&gt;
            &lt;Button Content="Dock=Right" DockPanel.Dock="Right"/&gt;
            &lt;Button Content="LastChildFill=True"/&gt;
        &lt;/DockPanel&gt;
    &lt;/Grid&gt;
&lt;/Window&gt;
</textarea></div><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-14.png"/><h3 class="h3">Properties of DockPanel</h3><p>Here we have the most commonly used Dock Property. Here is the list of the DockPanel properties:</p><table class="alt"><tbody><tr><th>Sr No.</th><th>Property</th><th>Description</th></tr><tr><td>1.</td><td>Background</td><td>The background property is used to Gets or Sets the brush, which will fill the content area of the Panel. This property is inherited from Panel.</td></tr><tr><td>2.</td><td>Children</td><td>Children's property is used to Gets the collection of UIElement of the child element of this Panel. Children are also inherited from the Panel.</td></tr><tr><td>3.</td><td>Dock</td><td>With the help of the dock property, we can Gets or Sets the value, which shows the position of the child element within the parent dock panel.</td></tr><tr><td>4.</td><td>Height</td><td>With this property, we can Gets or Sets the height of the element. Height property is inherited from the Framework Element.</td></tr><tr><td>5.</td><td>ItemWidth</td><td>With the use of this property, we Gets or Sets a value through which we specify the width of all the items which is contained by the WrapPanel.</td></tr><tr><td>6.</td><td>LastChildFill</td><td>With the use of this property, we Gets or Sets a value which shows that the last child element within the DockPanel stretch itself to fill the remaining available space.</td></tr><tr><td>7.</td><td>LogicalChilderen</td><td>Through this property, we Gets an Enumerator, which can iterate the logical child element of this Panel. This property is inherited from the Panel.</td></tr><tr><td>8.</td><td>LogicalOrientation</td><td>This property helps in the orientation of the Panel in those scenarios where the Panel supports the layout in only a single dimension. LogicalOrientaton property is inherited from the Panel.</td></tr><tr><td>9.</td><td>Margin</td><td>Margin property will Gets or Sets the outer margin of the element.</td></tr><tr><td>10.</td><td>Name</td><td>Name property Gets or Sets the name of the element for the identification. The name gives us a reference in the code-behind, such as event-handler code. We can refer it to the markup element after its construction during the processing of the XAML processor. The name property is inherited from the FrameworkElement.</td></tr><tr><td>11.</td><td>Orientation</td><td>With this property, we Gets or Sets a value that is used for the specification of the dimension where the content of the child element is arranged.</td></tr><tr><td>12.</td><td>Parent</td><td>Parent property will Gets the logical parent element of the element. The parent is inherited from the FrameworkElement.</td></tr><tr><td>13.</td><td>Resources</td><td>This property Gets or Sets the local-defined element. Resource property is inherited from the FrameworkElement.</td></tr><tr><td>14.</td><td>Style</td><td>Style property Gets or Sets the style for the element when the element is rendered. Style property is inherited from the FrameworkElement.</td></tr></tbody></table><h3 class="h3">Most commonly used method of Dock Panel</h3><p>Here are the most commonly used methods of DockPanel:</p><table class="alt"><tbody><tr><th>Sr. No.</th><th>Method</th><th>Description</th></tr><tr><td><strong>1.</strong></td><td><strong>GetDock</strong></td><td><strong>GetDock</strong> method <strong>Gets</strong> the value of the attached property of Dock for the specific UI element.</td></tr><tr><td><strong>2.</strong></td><td><strong>SetDock</strong></td><td><strong>SetDock</strong> method <strong>Sets</strong> the value of the attached property of Dock to a specific element.</td></tr></tbody></table><h3 class="h3">Here we are going to take an example to show how to add the child element to the DockPanel.</h3><h3 class="h3">For this we are going to take an XAML example for creating a button inside the panel.</h3><h3 class="h3">Example:</h3><h3 class="h3">MainWindow.XAML</h3><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WPF_App6.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WPF_App6"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;DockPanel LastChildFill = "True"&gt;
            &lt;Button Content = "Top" DockPanel.Dock = "Top" Click="Button_Click"/&gt;
            &lt;Button Content = "Bottom" DockPanel.Dock = "Bottom" Click="Button_Click" /&gt;
            &lt;Button Content = "Left" Click="Button_Click"/&gt;
            &lt;Button Content = "Right" DockPanel.Dock = "Right" Click="Button_Click" /&gt;
            &lt;Button Content = "Center" Click="Button_Click"/&gt;
        &lt;/DockPanel&gt;

    &lt;/Grid&gt;
&lt;/Window&gt;
</textarea></div><p>The implementation of XAML code in C# is as:</p><div class="codeblock"><textarea class="java" name="code">using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace WPF_App6
{
    /// &lt;summary&gt;
    /// Interaction logic for MainWindow.xaml
    /// &lt;/summary&gt;
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            Button btn = sender as Button;
            string str = btn.Content.ToString() + " button clicked";
            MessageBox.Show(str);


        }
    }
}
</textarea></div><p>After clicking on any button, this will display the message. Here we will take an example when we click on any button, we click on the centre button then it displays the message as shown below:</p><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-15.png"/><h3 class="h3">3. Canvas Panel</h3><p>Canvas is the most basic layout panel in WPF. Canvas Layout allows us to arrange the child elements by using the coordinates, which are very similar to the Windows Forms Application. With the help of the canvas, we can specify the coordinates which are related to any corner. We can use the attached properties (Top, Bottom, Left, and Right) for adjusting the position of the Child elements inside the Canvas.</p><p>Canvas is a lightweight container. We cannot resize the child element of the canvas when we resize the window at the running time, and this thing makes it less useful during the creation of the forms. Canvas is helpful in those scenarios when we need to work on the Graphics.</p><p>The Panel is used to group the 2D graphic (like an ellipse, rectangle) elements. It is not used to layout the user interface elements.</p><p>The hierarchical inheritance of canvas panel is as shown below:</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-16.png"/><h3 class="h3">The most commonly used properties of the canvas class are as shown below:</h3><table class="alt"><tbody><tr><th>Sr.No.</th><th>Property</th><th>Description</th></tr><tr><td>1.</td><td>Background</td><td>We will Gets or Sets the brush with the use of the BackGround property and can fill the content area of the Panel. The backGround is inherited from the Panel.</td></tr><tr><td>2.</td><td>ZIndexProperty</td><td>This property is used for the identification of the <strong>Canvas.ZIndex</strong> XAML attached property.</td></tr><tr><td>3.</td><td>Resources</td><td>To Gets or Sets the local resources, we use Resources property. Resource Property is inherited from the <strong>FrameworkElement</strong>.</td></tr><tr><td>4.</td><td>Parent</td><td>Parent property is used to Gets the logical parent element. Parent property inherited from the <strong>FrameworkElement</strong>.</td></tr></tbody></table><h2 class="h2">Method of Canvas</h2><p>The commonly used method of Canvas is as shown below:</p><table class="alt"><tbody><tr><th>Sr. No.</th><th>Methods</th><th>Description</th></tr><tr><td>1.</td><td>GetLeft</td><td>GetLeft method is used to Gets the value of the Canvas. Left attached property of the XAML.</td></tr><tr><td>2.</td><td>GetTop</td><td>GetTop method is used for getting the value of the Canvas. Top the attached property of the XAML. This method is used for the target element.</td></tr><tr><td>3.</td><td>GetZIndex</td><td>GetZIndex method is used to Gets the value of the Canvas.ZIndex. This method is the attached property of the XAML, which is used for the target element.</td></tr><tr><td>4.</td><td>SetLeft</td><td>SetLeft method is used to Sets the value of the Canvas. Left. For the target element, we used the XAML property.</td></tr><tr><td>5.</td><td>SetTop</td><td>For Sets and Gets the value of the Canvas. Top SetTop method is used. We used XAML attached property for the target element.</td></tr><tr><td>6.</td><td>SetZIndex</td><td>For Sets and Gets the value of the Canvas.ZIndex, we use SetZindex method. XAML attached property is used for the target element.</td></tr></tbody></table><h3 class="h3">Example: Here we have an example which shows how to add the child elements in the Canvas. Here we will write a code which creates an ellipse inside the Canvas which is having the different offset:</h3><h3 class="h3">MainWindow.XAML</h3><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WpfApp7.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WpfApp7"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;Canvas Width = "580" Height = "360" &gt;
            &lt;Ellipse Canvas.Left = "30" Canvas.Top = "30"  
            Fill = "Gray" Width = "200" Height = "120" /&gt;
            &lt;Ellipse Canvas.Right = "30" Canvas.Top = "30"  
            Fill = "Aqua" Width = "200" Height = "120" /&gt;
            &lt;Ellipse Canvas.Left = "30" Canvas.Bottom = "30"  
            Fill = "Gainsboro" Width = "200" Height = "120" /&gt;
            &lt;Ellipse Canvas.Right = "30" Canvas.Bottom = "30"  
            Fill = "LightCyan" Width = "200" Height = "120" /&gt;
        &lt;/Canvas&gt;
    &lt;/Grid&gt;
</textarea></div><p><strong>Output</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-17.png"/><h3 class="h3">Canvas Property used for the positioning</h3><ul class="points"><li><strong>Top:</strong> This property is used to Gets or Sets the value, which represents the distance between the top of an element and the top of its parent canvas.</li><li><strong>Left:</strong> This property is used to Gets or Sets the value, which represents the distance between the left side element and the left side of its parent canvas.</li><li><strong>Right:</strong> This property is used to Gets or Sets the value, which shows the distance between the right side of the canvas and the right side of its parent canvas.</li><li><strong>Bottom:</strong> This property is used to Gets or Sets the value, which shows the distance between the top of the element and the top of its parent canvas.</li></ul><h3 class="h3">Example of the Canvas layout</h3><p>Canvas layout is used for the correct position of the element, alignment of the element. If we do not use the canvas property, then the element will overlap them.</p><p><strong>Here we are going to take an example when we haven't used the canvas property.</strong></p><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WpfApp7.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WpfApp7"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;Canvas&gt;
            &lt;Label Content="Canvas Layout Demo" 
        FontSize="15" FontWeight="Bold"
        Foreground="Blue"/&gt;

            &lt;Label Content="Label1" FontSize="15" FontWeight="Bold" /&gt;
            &lt;Label Content="Label2" FontSize="15" FontWeight="Bold" /&gt;
            &lt;Label Content="Label3" FontSize="15" FontWeight="Bold" /&gt;
        &lt;/Canvas&gt;
    &lt;/Grid&gt;
</textarea></div><p>Now the output will look like as shown below:</p><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-18.png"/><h3 class="h3">When we assigned the Canvas Property</h3><p>For the absolute position, most of the time we use the canvas property like <strong>canvas.Top</strong> and <strong>Canvas.Left</strong> property.</p><h3 class="h3">MainWindow.XAML</h3><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WpfApp7.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WpfApp7"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;Canvas&gt;
            &lt;Label Content="Canvas Layout Demo" 
        FontSize="15" FontWeight="Bold"
        Foreground="Blue"
        Canvas.Top="10" Canvas.Left="25"/&gt;

            &lt;Label Content="Label1" FontSize="15" FontWeight="Bold" 
           Canvas.Top="40" Canvas.Left="25"/&gt;

            &lt;Label Content="Label2" FontSize="15" FontWeight="Bold" 
           Canvas.Top="70" Canvas.Left="75"/&gt;

            &lt;Label Content="Label3" FontSize="15" FontWeight="Bold" 
           Canvas.Top="100" Canvas.Left="125"/&gt;
        &lt;/Canvas&gt;
    &lt;/Grid&gt;
&lt;/Window&gt;
</textarea></div><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-19.png"/><h3 class="h3">5. WPF Wrap Panel</h3><p>WPF WrapPanel control is a panel which locates the child elements in the sequential position by default from left to right. If the stacked child element does not fit in a row or column where they are in right now then the remaining elements will wrap the remaining space in the same sequence.</p><p>Here we are going to take an example of two wrap panel where the one is in horizontal and the other is in vertical.</p><p>The WrapPanel element in XAML shows the Wrap Panel WPF Control.</p><p>Here we have a code snippet which declares the <strong>WrapPanel</strong> in XAML which sets the height, width, and background property.</p><p>Here we have a code for the Wrap Panel as shown below:</p><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WpfApp7.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WpfApp7"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;Ellipse Width="100" Height="100" Fill="Red" /&gt;
        &lt;Ellipse Width="90" Height="90" Fill="Orange" /&gt;
        &lt;Ellipse Width="80" Height="80" Fill="Yellow" /&gt;
        &lt;Ellipse Width="70" Height="70" Fill="LightGreen" /&gt;
        &lt;Ellipse Width="60" Height="60" Fill="Green" /&gt;
        &lt;Ellipse Width="50" Height="50" Fill="LightBlue" /&gt;
        &lt;Ellipse Width="40" Height="40" Fill="Blue" /&gt;
        &lt;Ellipse Width="30" Height="30" Fill="Black" /&gt;
    &lt;/Grid&gt;


&lt;/Window&gt;
</textarea></div><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-20.png"/><h3 class="h3">6. ViewBox in WPF</h3><p>ViewBox is a beneficial control in WPF. ViewBox fit itself to the available size. It does not resize the content but transforms itself. ViewBox is another standard of WPF control. ViewBox contains the only one child control. If we want to add more than one child control to the ViewBox, this will give us an error.</p><p>ViewBox elements shows the WPF ViewBox control in XAML as shown below:</p><div class="codeblock"><textarea class="xml" name="code">&lt;Viewbox /&gt;
</textarea></div><p>ViewBox has a Stretch property which shows how the contents are fit in the space and we can fill its value.</p><p>Here we are going to take an example. Now we will create a New WPF application with the name ViewBoxDemo.</p><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WpfApp7.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WpfApp7"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;DockPanel Width="250" Height="200"&gt;
            &lt;StackPanel Orientation="Horizontal" DockPanel.Dock="Top" Background="LightBlue"&gt;
                &lt;Button Content="01" Margin="1"/&gt;
                &lt;Button Content="02" Margin="1"/&gt;
                &lt;Button Content="03" Margin="1 1 10 1"/&gt;
                &lt;Button Content="04" Margin="1"/&gt;
                &lt;Button Content="05" Margin="1"/&gt;
                &lt;Button Content="06" Margin="1"/&gt;
            &lt;/StackPanel&gt;

            &lt;StackPanel Orientation="Horizontal"
                    DockPanel.Dock="Bottom"
                    Background="Lightblue"
                    Height="25"&gt;
                &lt;TextBlock VerticalAlignment="Center"&gt;Processing&lt;/TextBlock&gt;
                &lt;ProgressBar Value="75" Width="100" Margin="4"/&gt;
            &lt;/StackPanel&gt;

            &lt;Grid&gt;
                &lt;TextBlock&gt;Content area&lt;/TextBlock&gt;
            &lt;/Grid&gt;
        &lt;/DockPanel&gt;
        &lt;DockPanel Width="250" Height="200"&gt;
            &lt;StackPanel Orientation="Horizontal" DockPanel.Dock="Top" Background="LightBlue"&gt;
                &lt;Button Content="01" Margin="1"/&gt;
                &lt;Button Content="02" Margin="1"/&gt;
                &lt;Button Content="03" Margin="1 1 10 1"/&gt;
                &lt;Button Content="04" Margin="1"/&gt;
                &lt;Button Content="05" Margin="1"/&gt;
                &lt;Button Content="06" Margin="1"/&gt;
            &lt;/StackPanel&gt;

            &lt;StackPanel Orientation="Horizontal"
                    DockPanel.Dock="Bottom"
                    Background="Lightblue"
                    Height="25"&gt;
                &lt;TextBlock VerticalAlignment="Center"&gt;Processing&lt;/TextBlock&gt;
                &lt;ProgressBar Value="75" Width="100" Margin="4"/&gt;
            &lt;/StackPanel&gt;

            &lt;Grid&gt;
                &lt;TextBlock&gt;Content area&lt;/TextBlock&gt;
            &lt;/Grid&gt;
        &lt;/DockPanel&gt;
        &lt;DockPanel Width="250" Height="200"&gt;
            &lt;StackPanel Orientation="Horizontal" DockPanel.Dock="Top" Background="LightBlue"&gt;
                &lt;Button Content="01" Margin="1"/&gt;
                &lt;Button Content="02" Margin="1"/&gt;
                &lt;Button Content="03" Margin="1 1 10 1"/&gt;
                &lt;Button Content="04" Margin="1"/&gt;
                &lt;Button Content="05" Margin="1"/&gt;
                &lt;Button Content="06" Margin="1"/&gt;
            &lt;/StackPanel&gt;

            &lt;StackPanel Orientation="Horizontal"
                    DockPanel.Dock="Bottom"
                    Background="Lightblue"
                    Height="25"&gt;
                &lt;TextBlock VerticalAlignment="Center"&gt;Processing&lt;/TextBlock&gt;
                &lt;ProgressBar Value="75" Width="100" Margin="4"/&gt;
            &lt;/StackPanel&gt;

            &lt;Grid&gt;
                &lt;TextBlock&gt;Content area&lt;/TextBlock&gt;
            &lt;/Grid&gt;
        &lt;/DockPanel&gt;
    &lt;/Grid&gt;


&lt;/Window&gt;
</textarea></div><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-21.png"/><h3 class="h3">Data Binding in WPF</h3><p>Data Binding provides us a simple and powerful way to auto-update the data between the business model and the user-interface. We called this mechanism Data Binding. When we change the data of our business model, this will automatically reflect the changes to the user-interface and vice-versa. To bring the data to the user interface, we use this method.</p><p>DataBinding can be unidirectional, which can be from <strong>the source to target or can be from target to Source</strong> or Bidirectional, which is <strong>Source to Target or Target to Source</strong>.</p><p>For the properly working of the data binding, we have to provide the change notification on both of the sides, which shows us when we have to update the target value in the <strong>DataBinding.</strong></p><p>In the .NET properties, we do the DataBinding by raising the event <strong>PropertyChanged</strong> of the <strong>INotifyPropertyChanged</strong> Interface. Typically, we do the data binding in XAML by using the markup extension.</p><p>Data Binding gives us a mechanism that provides us a simple and easy way for the Windows Runtime apps to shows the interaction of the data.</p><p>Through Data binding, we can do the flow of data between the UI element and the data object on the user interface. When the binding is done and the data or our business model changes after that, this will reflect the changes automatically on the User Interface element and vice versa.</p><p>There are two types of Data Binding:</p><ol class="points"><li>One Way DataBinding</li><li>Two Way DataBinding</li></ol><h3 class="h3">One Way DataBinding</h3><p>In the one-way binding, we can bound the data from the source (source is an object which holds the data) to the target (target is known as that object through which we can see the data).</p><p>To understand the one-way binding, we will take the following example:</p><p>To understand the one-way binding, we will create the WPF project whose name is WPFData.</p><p>For that we will write the XAML code where we will create the two labels, two textboxes, one button and will initialize them with the use of some property.</p><h3 class="h3">MainWindow.XAML</h3><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WpfApp7.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WpfApp7"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition Height = "Auto" /&gt;
            &lt;RowDefinition Height = "Auto" /&gt;
            &lt;RowDefinition Height = "*" /&gt;
        &lt;/Grid.RowDefinitions&gt;

        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition Width = "Auto" /&gt;
            &lt;ColumnDefinition Width = "200" /&gt;
        &lt;/Grid.ColumnDefinitions&gt;

        &lt;Label Name = "nameLabel" Margin = "2"&gt;_Name:&lt;/Label&gt;

        &lt;TextBox Name = "nameText" Grid.Column = "1" Margin = "2" 
         Text = "{Binding Name, Mode = OneWay}"/&gt;

        &lt;Label Name = "ageLabel" Margin = "2" Grid.Row = "1"&gt;_Age:&lt;/Label&gt;

        &lt;TextBox Name = "ageText" Grid.Column = "1" Grid.Row = "1" Margin = "2" 
         Text = "{Binding Age, Mode = OneWay}"/&gt;

        &lt;StackPanel Grid.Row = "2" Grid.ColumnSpan = "2"&gt;
            &lt;Button Content = "_Show..." Click="Button_Click" /&gt;
        &lt;/StackPanel&gt;

        
    &lt;/Grid&gt;


&lt;/Window&gt;
</textarea></div><h3 class="h3">MainWindow.XAML.cs</h3><div class="codeblock"><textarea class="java" name="code">using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace WpfApp7
{
    /// &lt;summary&gt;
    /// Interaction logic for MainWindow.xaml
    /// &lt;/summary&gt;
    public partial class MainWindow : Window
    {
        Person person = new Person { Name = "Steve", Age = 26 };

        public MainWindow()
        {
            InitializeComponent();
            this.DataContext = person;
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            string message = person.Name + " is " + person.Age;
            MessageBox.Show(message);
        }
    }

    public class Person
    {

        private string nameValue;

        public string Name
        {
            get { return nameValue; }
            set { nameValue = value; }
        }

        private double ageValue;

        public double Age
        {
            get { return ageValue; }

            set
            {
                if (value != ageValue)
                {
                    ageValue = value;
                }
            }
        }

    }
}
</textarea></div><p>We can easily run this application after that we will see the output of the MainWindow. We can bound the Name and Age of the person easily.</p><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-22.png"/><p>After clicking on the Show button, this shows the name and age on the message box.</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-23.png"/><p>In the dialogue box, we can modify the Name and Age of the person.</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-24.png"/><p>But after updating the values, we will see the same message again.</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-25.png"/><p>This is because of we set the data binding mode to one-way in XAML. If we want to show the updated data, we need to understand the two-way data binding.</p><h3 class="h3">Two-way Data Binding</h3><p>In the two-way Data Binding, we can update the data through the Graphical User Interface and can get the updated data in the source. If we change the source at the time of the viewing and we want that view to be updated.</p><p>Here we will take an example where we will change the binding mode from one-way to two-way binding through the XAML code:</p><h3 class="h3">MainWindow.XAML</h3><div class="codeblock"><textarea class="xml" name="code">&lt;Window x:Class="WpfApp7.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:WpfApp7"
        mc:Ignorable="d"
        Title="MainWindow" Height="450" Width="800"&gt;
    &lt;Grid&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition Height = "Auto" /&gt;
            &lt;RowDefinition Height = "Auto" /&gt;
            &lt;RowDefinition Height = "*" /&gt;
        &lt;/Grid.RowDefinitions&gt;

        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition Width = "Auto" /&gt;
            &lt;ColumnDefinition Width = "200" /&gt;
        &lt;/Grid.ColumnDefinitions&gt;

        &lt;Label Name = "nameLabel" Margin = "2"&gt;_Name:&lt;/Label&gt;
        &lt;TextBox Name = "nameText" Grid.Column = "1" Margin = "2" 
         Text = "{Binding Name, Mode = TwoWay}"/&gt;
        &lt;Label Name = "ageLabel" Margin = "2" Grid.Row = "1"&gt;_Age:&lt;/Label&gt;
        &lt;TextBox Name = "ageText" Grid.Column = "1" Grid.Row = "1" Margin = "2" 
         Text = "{Binding Age, Mode = TwoWay}"/&gt;

        &lt;StackPanel Grid.Row = "2" Grid.ColumnSpan = "2"&gt;
            &lt;Button Content = "_Show..." Click = "Button_Click" /&gt;
        &lt;/StackPanel&gt;


    &lt;/Grid&gt;


&lt;/Window&gt;
</textarea></div><h3 class="h3">MainWindow.XAML.cs</h3><div class="codeblock"><textarea class="java" name="code">using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace WpfApp7
{
    /// &lt;summary&gt;
    /// Interaction logic for MainWindow.xaml
    /// &lt;/summary&gt;
    public partial class MainWindow : Window
    {
        Person person = new Person { Name = "Steve", Age = 26 };

        public MainWindow()
        {
            InitializeComponent();
            this.DataContext = person;
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            string message = person.Name + " is " + person.Age;
            MessageBox.Show(message);
        }
    }

    public class Person
    {

        private string nameValue;

        public string Name
        {
            get { return nameValue; }
            set { nameValue = value; }
        }

        private double ageValue;

        public double Age
        {
            get { return ageValue; }

            set
            {
                if (value != ageValue)
                {
                    ageValue = value;
                }
            }
        }

    }
}
</textarea></div><p>When we run this application, this will show us the output as shown below:</p><p><strong>OUTPUT</strong></p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-26.png"/><p>After clicking on the show button, this will show us the message in the dialog box.</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-27.png"/><p>Now we want to change the value of the Name and Age through the user interface:</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-28.png"/><p>This will show us the updated value in the dialog box:</p><img alt="WPF Tutorial" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-29.png"/><p><strong>Here in the above section, we have described all the basic concepts about the WPF.</strong></p><hr/><div class="nexttopicdiv"><span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="wpf-listbox">WPF ListBox</a></span></div><br/><br/><div id="bottomnext"><a class="next" href="wpf" style="float:left">← prev</a> <a class="next" href="wpf-listbox" style="float:right">next →</a></div><br/><br/></td></tr></tbody></table></div><br/></div><div class="related-posts-container"><h2 class="h3">Related Posts</h2><ul class="related-posts-list"><li><a class="related-post-item" href="wpf-dialog-box"><h3 class="h3">WPF Dialog Box</h3><p class="related-post-content">The standalone application contains the main window where they will show the data of the application. Standalone application will acquire the functionality of the process which will show the data through the user interface mechanism like menu bars, toolbars, and status bars. The non-trivial application can...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 6 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="wpf-listbox"><h3 class="h3">WPF ListBox</h3><p class="related-post-content">The Listbox in windows form contains the text value only. In ListBox, we can't display the list of the images with the text. Example of the ListBox The ListBox class in C# and WPF shows the Listbox control. ListBox in WPF has contained the collection of the items...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 13 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="wpf-togglebutton-control"><h3 class="h3">ToggleButton Control</h3><p class="related-post-content">WPF Toggle Button is known as a control with the help of which we can move from one state to another state. CheckBox and RadioButton are an example of the Toggle Button. Here we are going to take an example of the . In this example, we...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 5 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="wpf-image-control"><h3 class="h3">WPF Image Control</h3><p class="related-post-content">With the help of the WPF image control, we can show the images in our application. WPF image control is a versatile control. WPF image control shows the image. For that, we can use either the ImageObject or the ImageBrush object. ImageObject will display the image,...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 11 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="wpf-dockpanel-layout"><h3 class="h3">WPF DockPanel Layout</h3><p class="related-post-content">DockPanel gives us an area to arrange the elements with each other. We can place the child elements either horizontally or vertically. With the help of the DockPanel, we can easily arrange the child elements at the top, bottom, right, left, and the center by using the...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 6 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="wpf-progress-bar"><h3 class="h3">WPF Progress Bar</h3><p class="related-post-content">When we run any application, the long-running task will make the application or software non-responsive. Here, if we want to update the user about the status of the long-running task and keep the application responsive at the time of the long-running task we can use the...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 5 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="wpf-tooltip-control"><h3 class="h3">ToolTip Control</h3><p class="related-post-content">WPF Tooltip is a small pop-up window. We will see this window when the mouse is pause over the element. Like when the mouse is on the button. Now we will discuss the ToolTip. What is Tooltip? What is Tooltip? When we move the mouse's pointer over the element,...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 5 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="wpf"><h3 class="h3">WPF</h3><p class="related-post-content">Tutorial stands as Windows Presentation Foundation. is known as the robust framework while we are thinking of creating the Windows application. is known as the ideal framework to build the Windows Application. Why we want to use the framework, the purpose was that...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 1 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="wpf-button-control"><h3 class="h3">WPF Button Control</h3><p class="related-post-content">WPF is easy to use; with the help of the WPF, developers can easily create UI based applications. Here are some points which should be noted: All the controls of the WPF can be found in the Toolbox. The Toolbox is part of the System.Windows.Controls. We can create the...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 4 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="wpf-combobox"><h3 class="h3">WPF ComboBox</h3><p class="related-post-content">ComboBox control is an item control that will work like the ListBox control. But there is the difference between the ComboBox and the ListBox control is that we can choose only one item from the collection of a ComboBox. At a time, only one item will...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 15 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li></ul></div><br/><div class="container-xxl" style="position:relative;margin-top:-20px"><div class="aboutus themecolor subscribe"><div class="container px-lg-5 text-center"><h4 class="mb-4 animated zoomIn mediumheading">Subscribe to Tpoint Tech</h4><p class="pb-3 animated zoomIn text-center">We request you to subscribe our newsletter for upcoming updates.</p><div class="position-relative w-100 mt-3"><input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" id="email" placeholder="Your Email" style="height:48px" type="email"/> <button class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2" id="subscribeBtn" type="button">Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i></button></div><p class="mt-3" id="message"></p></div></div></div><br/><div class="ad-container" id="ad-container"></div><br/></div><div class="col-md-2"><div class="advertisement"><div id="sidebar_300x600_1_bq_307_556"></div><div id="sidebar_300x600_2_bq_307_557"></div><div id="sidebar_300x600_3_bq_307_558"></div></div></div></div><script>function closePopup(){document.getElementById("popup").style.display="none"}setTimeout((function(){localStorage.getItem("popupShown")||(document.getElementById("popup").style.display="flex",localStorage.setItem("popupShown","true"))}),5e3)</script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>$(document).ready((function(){$("#subscribeBtn").click((function(){var e=$("#email").val().trim();""!==e?$.ajax({url:"/subscribe",type:"POST",contentType:"application/json",data:JSON.stringify({email:e}),beforeSend:function(){$("#subscribeBtn").prop("disabled",!0).html("Subscribing...")},success:function(e){$("#message").html("<span style='color: green;'>Subscription successful! Please check your email.</span>"),$("#email").val("")},error:function(e){var s=e.responseJSON?e.responseJSON.error:"Subscription failed.";$("#message").html("<span style='color: red;'>"+s+"</span>")},complete:function(){$("#subscribeBtn").prop("disabled",!1).html('Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i>')}}):$("#message").html("<span style='color: red;'>Please enter your email.</span>")}))}))</script><div class="container-fluid footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"><div class="container py-5"><div class="row"><div class="col-md-6 col-lg-5"><img alt="Logo" src="https://images.tpointtech.com/static/images/logo.png"/><p>We provides tutorials and interview questions of all technology like java tutorial, android, java frameworks</p><h5 class="mb-4">Contact info</h5><p><svg viewbox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg>G-13, 2nd Floor, Sec-3, Noida, UP, 201301, India</p><p><svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v128z"></path></svg><a href="mailto:hr@tpointtech.com">hr@tpointtech.com</a></p><p><svg fill="currentColor" height="1.8em" stroke="currentColor" stroke-width="0" viewbox="0 0 24 24" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.49 3c-2.21 0-4.21.9-5.66 2.34l1.06 1.06a6.47 6.47 0 0 1 9.18 0l1.06-1.06A7.932 7.932 0 0 0 16.49 3z"></path><path d="M20.03 7.46a5.022 5.022 0 0 0-7.08 0l1.06 1.06c.63-.63 1.51-1.03 2.47-1.03s1.84.39 2.47 1.03l1.08-1.06zM15.08 9.59 16.49 11l1.41-1.41c-.36-.37-.86-.59-1.41-.59s-1.05.22-1.41.59z"></path><path d="m15.63 14.4-2.52 2.5c-2.5-1.43-4.57-3.5-6-6l2.5-2.52c.23-.24.33-.57.27-.9L9.13 3.8c-.09-.46-.5-.8-.98-.8H4c-.56 0-1.03.47-1 1.03.17 2.89 1.05 5.6 2.43 7.97 1.58 2.73 3.85 4.99 6.57 6.57 2.37 1.37 5.08 2.26 7.97 2.43.56.03 1.03-.44 1.03-1v-4.15c0-.48-.34-.89-.8-.98l-3.67-.73a.985.985 0 0 0-.9.26z"></path></svg><a href="tel:+919599086977">+91-9599086977</a></p><h5 class="mb-4">Follow us</h5><div class="d-flex"><a class="btn btn-outline-light btn-social" href="https://www.facebook.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Facebook Page" src="https://images.tpointtech.com/static/img/facebook.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://x.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech X Page" src="https://images.tpointtech.com/static/images/x.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/tpointtech/" rel="nofollow" target="_blank"><img alt="Tpoint Tech Linkedin Page" src="https://images.tpointtech.com/static/images/linkedin.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://t.me/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Telegram Channel" src="https://images.tpointtech.com/static/images/telegram.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@tpointtechofficial" rel="nofollow" target="_blank"><img alt="Tpoint Tech Youtube Channel" src="https://images.tpointtech.com/static/img/youtube.png"/></a><a class="btn btn-outline-light btn-social" href="https://www.instagram.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech instagram Page" src="https://images.tpointtech.com/static/images/insta.png" width="24"/></a></div></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Tutorials</h5><a class="btn btn-link" href="/java-tutorial">Java</a> <a class="btn btn-link" href="/data-structure-tutorial">Data Structures</a> <a class="btn btn-link" href="/c-programming-language-tutorial">C Programming</a> <a class="btn btn-link" href="/cpp-tutorial">C++ Tutorial</a> <a class="btn btn-link" href="/c-sharp-tutorial">C# Tutorial</a> <a class="btn btn-link" href="/php-tutorial">PHP Tutorial </a><a class="btn btn-link" href="/html-tutorial">HTML Tutorial</a> <a class="btn btn-link" href="/javascript-tutorial">JavaScript Tutorial </a><a class="btn btn-link" href="/jquery-tutorial">jQuery Tutorial </a><a class="btn btn-link" href="/spring-tutorial">Spring Tutorial</a></div><div class="col-md-6 col-lg-3"><h5 class="mb-4">Interview Questions</h5><a class="btn btn-link" href="/microsoft-interview-questions">Microsoft </a><a class="btn btn-link" href="/amazon-interview-questions">Amazon </a><a class="btn btn-link" href="/adobe-interview-questions">Adobe </a><a class="btn btn-link" href="/intuit-interview-questions">Intuit </a><a class="btn btn-link" href="/accenture-interview-questions">Accenture</a> <a class="btn btn-link" href="/cognizant-interview-questions">Cognizant </a><a class="btn btn-link" href="/capgemini-interview-questions">Capgemini </a><a class="btn btn-link" href="/wipro-interview-questions">Wipro </a><a class="btn btn-link" href="/tcs-interview-questions">Tcs </a><a class="btn btn-link" href="/infosys-interview-questions">Infosys</a></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Online Compiler</h5><a class="btn btn-link" href="/compiler/c">C </a><a class="btn btn-link" href="/compiler/r">R </a><a class="btn btn-link" href="/compiler/cpp">C++ </a><a class="btn btn-link" href="/compiler/php">Php </a><a class="btn btn-link" href="/compiler/java">Java </a><a class="btn btn-link" href="/compiler/html">Html </a><a class="btn btn-link" href="/compiler/swift">Swift </a><a class="btn btn-link" href="/compiler/python">Python </a><a class="btn btn-link" href="/compiler/javascript">JavaScript </a><a class="btn btn-link" href="/compiler/typescript">TypeScript</a></div></div></div><div class="container text-center px-lg-5"><div class="col-md-12 text-center mb-3 mb-md-0"></div><a href="/latest-post">Latest Post</a> | <a href="/tutorials-list">Tutorials List</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/about-us">About Us</a> | <a href="/contact-us">Contact Us</a></div><div class="copyright"><div class="row"><div class="col-md-12 text-center mb-3 mb-md-0">© Copyright 2011 - 2025 TpointTech.com. All Rights Reserved.</div></div></div></div></div></section><div aria-hidden="true" aria-labelledby="searchModalLabel" class="modal fade" id="searchModal" tabindex="-1"><div class="modal-dialog modal-dialog-scrollable modal-lg"><div class="modal-content shadow rounded-3"><div class="modal-header text-white"><img alt="TPoint Tech Logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" style="height:30px;margin-right:10px"/> <button aria-label="Close" class="btn-close btn-close-black" data-bs-dismiss="modal" type="button"></button></div><div class="modal-body" id="modalResults"></div></div></div></div><a class="btn btn-info btn-floating btn-lg" href="#" id="scrollButton"><i class="fas fa-arrow-up"></i></a><script defer="defer" src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script><script defer="defer" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.12.1/polyfill.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js"></script><script src="/static/js/categoryDetails.js"></script><script src="/static/js/shcoreandbrush.js"></script><script>dp.SyntaxHighlighter.HighlightAll("code")</script><script async="" src="/static/js/lazysizes.min.js"></script><script src="/static/js/main.js"></script><script>const hamburger=document.querySelector(".hamburger"),navMenu=document.querySelector(".nav");function open_menu(){hamburger.classList.toggle("active"),navMenu.classList.toggle("active")}hamburger?.addEventListener("click",open_menu);const navLink=document.querySelectorAll(".nav-link");function closeMenu(){hamburger?.classList?.remove("active"),navMenu?.classList?.remove("active")}navLink.forEach((e=>e.addEventListener("click",closeMenu)))</script><script>function toggleSidebar(){let e=document.querySelector(".col-md-2.sidebar"),l=document.querySelector(".leftmenu");window.innerWidth<=895&&("none"===e.style.display?(e.style.display="block",l.style.display="block",e.style.position="fixed",e.style.zIndex="555"):(e.style.display="none",l.style.display="none"))}toggleSidebar()</script><script>function handleAccordionOnLoad(){const o=window.innerWidth<=768,e=window.location.pathname,c=document.querySelectorAll(".leftmenu a"),n=document.querySelectorAll(".accordion-collapse");o?(n.forEach((o=>o.classList.remove("show"))),c.forEach((o=>{if(o.getAttribute("href")===e){const e=o.closest(".accordion-item");if(e){const o=e.querySelector(".accordion-collapse");o&&o.classList.add("show")}}}))):n.forEach((o=>o.classList.add("show")))}handleAccordionOnLoad(),window.addEventListener("resize",handleAccordionOnLoad)</script><script>const showhide=s=>{const e=$("#answer"+s),a=$("#btntext"+s);a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-black.png)"),"block"===e.css("display")?(e.css("display","none"),a.text("Show Answer")):(e.css("display","block"),a.empty(),a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-close-black.png)"),a.append("Hide Answer"))}</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");e&&e.addEventListener("wheel",(function(t){0!==t.deltaY&&(t.preventDefault(),e.scrollLeft+=t.deltaY)}))}))</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");let t=!1,n=0,s=0;e.addEventListener("mousedown",(a=>{t=!0,e.classList.add("active"),n=a.pageX,s=e.scrollLeft})),["mouseup","mouseleave"].forEach((n=>{e.addEventListener(n,(()=>{t=!1,e.classList.remove("active")}))})),e.addEventListener("mousemove",(a=>{if(!t)return;a.preventDefault();const d=a.pageX-n;e.scrollLeft=s-d})),e.addEventListener("dragstart",(e=>e.preventDefault()))}))</script><script>let currentPage=1;const resultsPerPage=10;let fullData=[];function renderModalPage(e){const t=fullData.slice(0,100),l=10*(e-1),n=l+10,r=t.slice(l,n);let a="";const i=l+1,o=n>t.length?t.length:n;a+=`<div style="padding: 2px 0; font-size: 14px; color: #555;">\n      Showing ${i}–${o} of ${fullData.length.toLocaleString()} results\n    </div>`,a+="<ul>",r.forEach((e=>{a+=e.url?`<li><a href="${e.url}">${e.title} -Tpoint Tech <br><span style='color:#918a8a;font-size:13px;'>${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</span><br></a></li>`:`<li>${e.title} -Tpoint Tech <br> ${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</li>`})),a+="</ul>";const s=Math.ceil(t.length/10);if(s>1){a+='<div class="pagination-numbers" style="text-align:center;margin-top:15px;">';for(let t=1;t<=s;t++)a+=`<span class="pagination-number" onclick="renderModalPage(${t})" style="margin:0 5px;cursor:pointer;color:${t===e?"#000":"#007bff"};">${t}</span>`;a+="</div>"}$("#modalResults").html(a)}function changePage(e){currentPage=e,renderModalPage(currentPage)}function performSearch(e,t=!1){e.length<2?$("#results").empty().hide():$.get("/search",{q:e},(function(e){if($("#results").empty(),0===e.length?$("#results").append("<li>No results found</li>"):e.forEach((e=>{const t=e.url?`<li><a href="${e.url}">${e.title}</a></li>`:`<li>${e.title}</li>`;$("#results").append(t)})),$("#results").show(),t){fullData=e,currentPage=1,renderModalPage(currentPage);new bootstrap.Modal(document.getElementById("searchModal")).show()}}))}$("#searchInput").on("input",(function(){performSearch($(this).val().trim())})),$("#searchInput").on("keypress",(function(e){if(13===e.which){e.preventDefault();performSearch($(this).val().trim(),!0)}})),$(document).on("click",(function(e){$(e.target).closest("#searchContainer").length||$("#results").hide()}))</script><script>const searchInput=document.getElementById("searchInput"),iconSearch=document.getElementById("iconSearch"),iconClear=document.getElementById("iconClear"),searchBtn=document.getElementById("searchBtn");searchInput.addEventListener("input",(()=>{""!==searchInput.value.trim()?(iconSearch.style.display="none",iconClear.style.display="inline"):(iconSearch.style.display="inline",iconClear.style.display="none")})),searchBtn.addEventListener("click",(e=>{""!==searchInput.value.trim()&&(e.preventDefault(),searchInput.value="",iconSearch.style.display="inline",iconClear.style.display="none",$("#results").empty().hide(),searchInput.focus())}))</script></body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>