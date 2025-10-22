<?php
// Tutorial: Login & Logout Example - Tpoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login & Logout Example - Tpoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>Login & Logout Example - Tpoint Tech</h1>
        <body onload="highlightlink()"><div class="xyz shadow-sm"><div class="sticky-top p-0" style="position:sticky;background-color:var(--light)"><div class="container-fluid"><div class="position-relative p-0"><nav class="navbar navbar-expand-lg navbar-light px-4 py-lg-0"><a class="navbar-brand p-0" href="/"><img alt="Logo" height="48" id="logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" width="179"/></a><div class="w-100" id="search-box"><div id="searchContainer" style="position:relative"><input autocomplete="off" id="searchInput" placeholder="Search..." type="text"/> <button aria-label="Search" id="searchBtn" style="position:absolute;right:5px;top:50%;transform:translateY(-50%);background:0 0;border:none;cursor:pointer"><span id="iconSearch"><svg fill="none" height="20" stroke="green" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg> </span><span id="iconClear" style="display:none"><svg fill="none" height="20" stroke="red" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><line x1="6" x2="18" y1="6" y2="18"></line><line x1="6" x2="18" y1="18" y2="6"></line></svg></span></button><ul id="results"></ul></div></div><div class="jtp-nav"><button class="navbar-toggler float-left" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button"><span class="fa fa-bars"></span></button></div><div class="collapse navbar-collapse" id="navbarCollapse"><div class="navbar-nav"><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Tutorials</a><div class="dropdown-menu w-100 mt-0" id="tutorials"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("tutorials")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/python-tutorial">Python Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/django-tutorial">Django Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/numpy-tutorial">Numpy Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas">Pandas Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-tkinter">Tkinter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/pytorch">Pytorch Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/flask-tutorial">Flask Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/opencv">OpenCV Tutorial</a><h3 class="jtp-list-group-item">Java</h3><a class="jtp-list-group-item list-group-item-action" href="/java-tutorial">Java Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/servlet-tutorial">Servlet Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jsp-tutorial">JSP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-boot-tutorial">Spring Boot Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-tutorial">Spring Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-tutorial">Hibernate Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javafx-tutorial">JavaFX Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/java-web-services-tutorial">Java Web Services Tutorial</a><h3 class="jtp-list-group-item">.Net Framework</h3><a class="jtp-list-group-item list-group-item-action" href="/net-framework">.Net Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-tutorial">C# Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/asp-net-tutorial">ASP.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/ado-net-tutorial">ADO.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wpf">WPF Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">AI, ML and Data Science</h3><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-ai">Artificial Intelligence Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning">Machine Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-science">Data Science Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/deep-learning">Deep Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/tensorflow">TensorFlow Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/artificial-neural-network">Artificial Neural Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/matplotlib">Matplotlib Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-scipy">Python Scipy Tutorial</a><h3 class="jtp-list-group-item">Cloud Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing">Cloud Computing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-tutorial">AWS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-azure">Microsoft Azure Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/salesforce">Salesforce Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/google-cloud-platform">GCP Tutorial</a><h3 class="jtp-list-group-item">B.Tech and MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-tutorial">DBMS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-tutorial">Data Structures Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system">Operating System Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-network-tutorial">Computer Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/daa-tutorial">DAA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-organization-and-architecture-tutorial">Computer Organization Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/software-engineering">Software Engineering Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-mining">Data Mining Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/html-tutorial">HTML Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/css-tutorial">CSS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-tutorial">JavaScript Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-tutorial">Jquery Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-8">Angular 8 Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/reactjs-tutorial">React Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/react-native-tutorial">React Native Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/nodejs-tutorial">Node.js Tutorial</a><h3 class="jtp-list-group-item">PHP</h3><a class="jtp-list-group-item list-group-item-action" href="/php-tutorial">PHP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-tutorial">MySQL Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel">Laravel Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wordpress-tutorial">WordPress Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/codeigniter-tutorial">CodeIgniter Tutorial</a><h3 class="jtp-list-group-item">Software Testing</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-tutorial">Software Testing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-tutorial">Selenium Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jira-tutorial">JIRA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jmeter-tutorial">JMeter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/postman">Postman Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/testng-tutorial">TestNG Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/soapui">SoapUI Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/cucumber-testing">Cucumber Tutorial</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Interview</a><div class="dropdown-menu w-100 mt-0" id="interview-questions"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("interview-questions")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Technical Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions">Python Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/corejava-interview-questions">Java Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/dot-net-interview-questions">.Net Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/cpp-interview-questions">C++ Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/react-interview-questions">React Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/node-js-interview-questions">Node.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-interview-questions">Angular Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hr-interview-questions">HR Interview Questions</a><h3 class="jtp-list-group-item">Java Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/spring-boot-interview-questions">Spring Boot Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-interview-questions">Spring Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-interview-questions">Hibernate Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jdbc-interview-questions">JDBC Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/servletinterview">Servlet Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/maven-interview-questions">Maven Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jenkins-interview-questions">Jenkins Interview Questions</a><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/django-interview-questions-and-answers">Django Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas-interview-questions">Pandas Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/expressjs-interview-questions">Express.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-coding-interview-questions">Python Coding Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions-for-five-years-experienced">Python Interview Questions for 5 Years</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/html-interview-questions">HTML Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/css-interview-questions">CSS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-interview-questions">JavaScript Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">Jquery Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/php-interview-questions">PHP Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel-interview-questions">Laravel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/ajax-interview-questions">AJAX Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/front-end-developer-interview-questions">Front-End Developer Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">jQuery Interview Questions</a><h3 class="jtp-list-group-item">Database Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/pl-sql-interview-questions">PL/SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oracle-interview-questions">Oracle Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mongodb-interview-questions">MongoDB Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/redis-interview-questions-and-answers">Redis Interview Questions</a><h3 class="jtp-list-group-item">B.Tech / MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system-interview-questions">Operating System Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oops-interview-questions">OOPs Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-interview-questions">DSA Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/networking-interview-questions">Computer Networks Interview Questions</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Important Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/c-interview-questions">C Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/power-bi-interview-questions">Power BI Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/excel-interview-questions">Excel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning-interview-questions">Machine Learning Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-interview-questions">AWS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microservices-interview-questions">Microservices Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a><h3 class="jtp-list-group-item">Software Testing Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-interview-questions">Manual Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-interview-questions">Selenium Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/api-testing-interview-questions">API Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/etl-testing-interview-questions">ETL Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mobile-testing-interview-questions">Mobile Testing Interview Questions</a><h3 class="jtp-list-group-item">Company Interviews</h3><a class="jtp-list-group-item list-group-item-action" href="/ibm-interview-questions">IBM Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/adobe-interview-questions">Adobe Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-interview-questions">Microsoft Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/amazon-interview-questions">Amazon Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/tcs-interview-questions">TCS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/wipro-interview-questions">Wipro Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/accenture-interview-questions">Accenture Interview Questions</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Compiler</a><div class="dropdown-menu w-100 mt-0" id="compiler-menu"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("compiler-menu")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Online Compilers</h3><a class="jtp-list-group-item list-group-item-action" href="/compiler/python">Python Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/java">Java Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/php">PHP Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/c">C Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/cpp">C++ Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html">HTML Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/javascript">JavaScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/typescript">TypeScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/r">R Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/swift">Swift Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/kotlin">Kotlin Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/go">Go Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/csharp">C# Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/perl">Perl Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/groovy">Groovy Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html-css-javascript">HTML, CSS &amp; JavaScript Online Editor</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Multiple Choice Questions</h3><a class="jtp-list-group-item list-group-item-action" href="/python-mcq">Python MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/java-mcq">Java MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/php-mcq">PHP MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/c-language-mcq">C Programming MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cpp-mcq">C++ MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/html-mcq">HTML mcq </a><a class="jtp-list-group-item list-group-item-action" href="/javascript-mcq">JavaScript MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/sql-mcq">SQL MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/operating-system-mcq">Operating System MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-fundamental-mcq">Computer Fundamental MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-network-mcq">Computer Network MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/dbms-mcq">DBMS MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/data-structure-mcq">Data Structure MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/software-engineering-mcq">Software Engineering MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing-mcq">Cloud Computing MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-mcq">Artificial Intelligence MCQ</a></div></div></div></div></div></div></div></div><ul class="d-flex"><li><div class="theme-icon dark-mode-icon" onclick="toggleDarkMode()"><i class="fas fa-moon" id="dark-mode-icon"></i></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#059862","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1C2833","--sidebar":"#eef7f0","--hoverprimary":"#05593a","--codecompile":"#dce8dc"})' style="background-color:#059862"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#0D4549","--secondary":"#b6dde2","--light":"#FFFFFF","--dark":"#17202A","--sidebar":"#F0FAFB","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#0d4549"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#231760","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#e7f6fd","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#231760"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#286562","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#ECF0F1","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#286562"></div></li></ul></div></nav></div></div><div class="borderedelement"></div></div><script async="" src="https://cse.google.com/cse.js?cx=548338c60d2224ac4"></script><script>function applyTheme(e){const t=document.documentElement;Object.keys(e).forEach((o=>{t.style.setProperty(o,e[o])}))}function setThemeColors(e){localStorage.setItem("themeColors",JSON.stringify(e)),applyTheme(e)}window.addEventListener("load",(()=>{const e=JSON.parse(localStorage.getItem("themeColors"));e&&applyTheme(e)}))</script><script>function setThemeColors(t){const e=document.documentElement;Object.keys(t).forEach((o=>{e.style.setProperty(o,t[o])})),localStorage.setItem("themeColors",JSON.stringify(t))}function toggleDarkMode(){const t=document.body,e=document.getElementById("dark-mode-icon"),o=document.getElementById("logo");t.classList.toggle("night-mode")?(e.classList.remove("fa-moon"),e.classList.add("fa-sun"),localStorage.setItem("theme","night"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):(e.classList.remove("fa-sun"),e.classList.add("fa-moon"),localStorage.setItem("theme","day"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg")}window.addEventListener("load",(()=>{const t=JSON.parse(localStorage.getItem("themeColors")),e=localStorage.getItem("theme"),o=document.getElementById("logo");t&&setThemeColors(t),"night"===e?(document.body.classList.add("night-mode"),document.getElementById("dark-mode-icon").classList.remove("fa-moon"),document.getElementById("dark-mode-icon").classList.add("fa-sun"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg"}))</script></div><div class="xyz sticky-top shadow-sm;" id="tpointtech-images" style="z-index:99"><div id="link" style="clear:both;position:sticky;z-index:99"><div class="ddsmoothmenu"><span><button class="jt-nav float-left accordion accordion-flush" data-bs-target="#navbarCollapse" data-bs-toggle="jt-nav" onclick="toggleSidebar()" style="color:#fff;width:50px;margin-top:8px;margin-left:20px;font-size:20px;background:0 0;box-shadow:none;border:none" type="button"><span class="fa fa-bars"></span></button></span><ul class="nav" style="display:inline-flex;margin-left:auto;line-height:2rem"><li class="nav-item"><a class="nav-link" href="/python-tutorial"><img alt="Python Logo" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/python.svg" width="16"/> Python</a></li><li class="nav-item"><a class="nav-link" href="/java-tutorial"><img alt="java" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Java.svg" width="16"/> Java</a></li><li class="nav-item"><a class="nav-link" href="/javascript-tutorial"><img alt="javascript" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/JS.svg" width="16"/> JavaScript</a></li><li class="nav-item"><a class="nav-link" href="/sql-tutorial"><img alt="sql" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/SQL.svg" width="16"/> SQL</a></li><li class="nav-item"><a class="nav-link" href="/c-programming-language-tutorial"><img alt="c" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/C.svg" width="16"/> C</a></li><li class="nav-item"><a class="nav-link" href="/cpp-tutorial"><img alt="c++" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Cpp.svg" width="16"/> C++</a></li><li class="nav-item"><a class="nav-link" href="/html-tutorial"><img alt="html" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/HTML.svg" width="16"/> HTML</a></li><li class="nav-item"><a class="nav-link" href="/css-tutorial"><img alt="css" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/CSS.svg" width="16"/> CSS</a></li><li class="nav-item"><a class="nav-link" href="/reactjs-tutorial"><img alt="React" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/react.svg" width="16"/> React</a></li><li class="nav-item"><a class="nav-link" href="/nodejs-tutorial"><img alt="Node.js" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/nodejs.svg" width="16"/> Node.js</a></li><li class="nav-item"><a class="nav-link" href="/spring-boot-tutorial"><img alt="Spring Boot" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/spring-boot.svg" width="16"/> Spring Boot</a></li><li class="nav-item"><a class="nav-link" href="/c-sharp-tutorial"><img alt="c#" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/csharp.svg" width="16"/> C#</a></li><li class="nav-item"><a class="nav-link" href="/php-tutorial"><img alt="php" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/PHP.svg" width="16"/> PHP</a></li><li class="nav-item"><a class="nav-link" href="/mysql-tutorial"><img alt="MySQL" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mysql.svg" width="16"/> MySQL</a></li><li class="nav-item"><a class="nav-link" href="/mongodb-tutorial"><img alt="MongoDB" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mongodb.svg" width="16"/> MongoDB</a></li><li class="nav-item"><a class="nav-link" href="/artificial-intelligence-ai"><img alt="Artificial Intelligence" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/AI.svg" width="16"/> AI</a></li><li class="nav-item"><a class="nav-link" href="/machine-learning"><img alt="Machine Learning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/ML.svg" width="16"/> ML</a></li><li class="nav-item"><a class="nav-link" href="/data-structures-and-algorithms-dsa"><img alt="data structures" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DS.svg" width="16"/> DSA</a></li><li class="nav-item"><a class="nav-link" href="/dbms-tutorial"><img alt="dbms" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DBMS.svg" width="16"/> DBMS</a></li><li class="nav-item"><a class="nav-link" href="/operating-system"><img alt="Operating System" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/OS.svg" width="16"/> OS</a></li><li class="nav-item"><a class="nav-link" href="/aptitude/quantitative"><img alt="aptitude" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Aptitude.svg" width="16"/> Aptitude</a></li><li class="nav-item"><a class="nav-link" href="/reasoning"><img alt="reasoning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Reasoning.svg" width="16"/> Reasoning</a></li></ul></div></div></div><section class="course-details"><div class="container-fluid"><div class="row"><div class="col-md-2 sidebar" id="sidebar"><div id="menu-sidebar"><div class="accordion accordion-flush" id="accordionFlushExample"><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading0"><button aria-controls="flush-collapse0" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse0" data-bs-toggle="collapse" type="button">Angular 2 Tutorial</button></h2><div aria-labelledby="flush-heading0" class="accordion-collapse collapse show" id="flush-collapse0"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-2">Angular 2 Tutorial</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading1"><button aria-controls="flush-collapse1" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse1" data-bs-toggle="collapse" type="button">Angular 7 Tutorial</button></h2><div aria-labelledby="flush-heading1" class="accordion-collapse collapse show" id="flush-collapse1"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-tutorial">Angular 7 Tutorial</a></li><li class="leftmenu"><a href="/angular-7-introduction">Angular 7 Introduction</a></li><li class="leftmenu"><a href="/angular-7-features">Angular 7 Features</a></li><li class="leftmenu"><a href="/angular-7-installation">Angular 7 Installation</a></li><li class="leftmenu"><a href="/angular-7-history-and-versions">History &amp; Versions</a></li><li class="leftmenu"><a href="/angular-7-first-app">Angular 7 First App</a></li><li class="leftmenu"><a href="/angular-7-files-explanation">Angular 7 Files Explanation</a></li><li class="leftmenu"><a href="/angular-7-with-bootstrap">Angular 7 with Bootstrap</a></li><li class="leftmenu"><a href="/angular-7-all-cli-commands">All CLI commands</a></li><li class="leftmenu"><a href="/angular-7-libraries">Angular 7 Libraries</a></li><li class="leftmenu"><a href="/angular-7-architecture">Angular 7 Architecture</a></li><li class="leftmenu"><a href="/angular-7-components">Angular 7 Components</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading2"><button aria-controls="flush-collapse2" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse2" data-bs-toggle="collapse" type="button">Angular 7 Directives</button></h2><div aria-labelledby="flush-heading2" class="accordion-collapse collapse show" id="flush-collapse2"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-directives">Angular 7 Directives</a></li><li class="leftmenu"><a href="/angular-7-ngif-directive">Angular 7 ngIf Directive</a></li><li class="leftmenu"><a href="/angular-7-ngstyle-directive">Angular 7 ngStyle Directive</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading3"><button aria-controls="flush-collapse3" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse3" data-bs-toggle="collapse" type="button">Angular 7 Databinding</button></h2><div aria-labelledby="flush-heading3" class="accordion-collapse collapse show" id="flush-collapse3"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-databinding">Angular 7 Databinding</a></li><li class="leftmenu"><a href="/angular-7-string-interpolation">Angular 7 String Interpolation</a></li><li class="leftmenu"><a href="/angular-7-event-binding">Angular 7 Event Binding</a></li><li class="leftmenu"><a href="/angular-7-property-binding">Angular 7 Property Binding</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading4"><button aria-controls="flush-collapse4" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse4" data-bs-toggle="collapse" type="button">Angular 7 Pipes</button></h2><div aria-labelledby="flush-heading4" class="accordion-collapse collapse show" id="flush-collapse4"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-pipes">Angular 7 Pipes</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading5"><button aria-controls="flush-collapse5" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse5" data-bs-toggle="collapse" type="button">Error Fixing</button></h2><div aria-labelledby="flush-heading5" class="accordion-collapse collapse show" id="flush-collapse5"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-error-fixing">Angular 7 Error Fixing</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading6"><button aria-controls="flush-collapse6" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse6" data-bs-toggle="collapse" type="button">Angular 7 Forms</button></h2><div aria-labelledby="flush-heading6" class="accordion-collapse collapse show" id="flush-collapse6"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-7-forms">Angular 7 Forms</a></li><li class="leftmenu"><a href="/data-flow-in-angular-7-forms">Data Flow in Angular Forms</a></li><li class="leftmenu"><a href="/angular-reactive-forms">Angular Reactive Forms</a></li><li class="leftmenu"><a href="/angular-template-driven-forms">Template-driven Forms</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading7"><button aria-controls="flush-collapse7" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse7" data-bs-toggle="collapse" type="button">Angular Misc</button></h2><div aria-labelledby="flush-heading7" class="accordion-collapse collapse show" id="flush-collapse7"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-vs-react">Angular vs React</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading8"><button aria-controls="flush-collapse8" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse8" data-bs-toggle="collapse" type="button">Angular + Spring</button></h2><div aria-labelledby="flush-heading8" class="accordion-collapse collapse show" id="flush-collapse8"><div class="accordion-body"><ul><li class="leftmenu"><a href="/angular-spring-crud-example">CRUD Example</a></li><li class="leftmenu"><a href="/angular-spring-login-and-logout-example">Login &amp; Logout Example</a></li><li class="leftmenu"><a href="/angular-spring-search-field-example">Search Field Example</a></li></ul></div></div></div></div></div></div><div class="col-12 col-md-7"><div class="overview"><html><head></head><body><div id="city"><table><tbody><tr><td><div id="bottomnextup"><a class="next" href="angular-spring-search-field-example">next →</a> <a class="next" href="angular-spring-crud-example">← prev</a></div><h1 class="h1">Spring Angular Login &amp; Logout Application</h1><div style="font-size:14px;margin-top:5px;margin-bottom:5px;color:#6f6e6e"><span>25 Mar 2025</span> | <span><i aria-hidden="true" class="fa fa-clock-o"></i> 16 min read</span></div><p>In this section, we are going to create a login and logout web application. This application includes a signup and login form. In this integration, we are using Spring to handle the backend part and Angular to handle the frontend part.</p><h2 class="h2">Working of Application</h2><ul class="points"><li>Once we deployed our application on the server, a welcome page generates that contains two links - signup and login.</li><li>A new user can choose the signup and register themselves by filling up the required details.</li><li>However, the existing user can use their email id and password to log in.</li><li>Once we logged in, we can fetch the details of existing users.</li><li>In the end, we can exit from the current state by clicking the logout link.</li></ul><h2 class="h2">Tools to be used</h2><ul class="points"><li>Use any IDE to develop the Spring and Hibernate project. It may be MyEclipse/Eclipse/Netbeans. Here, we are using Eclipse.</li><li>MySQL for the database.</li><li>Use any IDE to develop the Angular project. It may be Visual Studio Code/Sublime. Here, we are using Visual Studio Code.</li><li>Server: Apache Tomcat/JBoss/Glassfish/Weblogic/Websphere.</li></ul><h2 class="h2">Technologies we used</h2><p>Here, we are using the following technologies:</p><ul class="points"><li>Spring 5</li><li>Hibernate 5</li><li>Angular 6</li><li>MYSQL</li></ul><h2 class="h2">Create Database</h2><p>Let's create a database <strong>loginlogoutexample</strong>. There is no need to create a table as Hibernate automatically created it.</p><h2 class="h2">Spring Module</h2><p>Let's see the directory structure of Spring we need to follow:</p><img alt="Spring Angular Login and Logout Application" src="https://images.tpointtech.com/sppages/angular/images/spring-angular-login-and-logout-application.png"/><p>To develop a login and logout application, follow the below steps: -</p><ul class="points"><li>Add dependencies to pom.xml file.</li></ul><div class="codeblock"><textarea class="java" name="code">&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd"&gt;
  &lt;modelVersion&gt;4.0.0&lt;/modelVersion&gt;
  &lt;groupId&gt;com.javatpoint&lt;/groupId&gt;
  &lt;artifactId&gt;LoginLogoutExample&lt;/artifactId&gt;
  &lt;packaging&gt;war&lt;/packaging&gt;
  &lt;version&gt;0.0.1-SNAPSHOT&lt;/version&gt;
  &lt;name&gt;LoginLogoutExample Maven Webapp&lt;/name&gt;
  &lt;url&gt;http://maven.apache.org&lt;/url&gt;
  
  
  	&lt;properties&gt;
		&lt;springframework.version&gt;5.0.6.RELEASE&lt;/springframework.version&gt;
		&lt;hibernate.version&gt;5.2.16.Final&lt;/hibernate.version&gt;
		&lt;mysql.connector.version&gt;5.1.45&lt;/mysql.connector.version&gt;
		&lt;c3po.version&gt;0.9.5.2&lt;/c3po.version&gt;

		&lt;maven.compiler.source&gt;1.8&lt;/maven.compiler.source&gt;
		&lt;maven.compiler.target&gt;1.8&lt;/maven.compiler.target&gt;
	&lt;/properties&gt;
  
  
  &lt;dependencies&gt;
  
  &lt;!-- Spring --&gt;
	&lt;dependency&gt;
		&lt;groupId&gt;org.springframework&lt;/groupId&gt;
		&lt;artifactId&gt;spring-webmvc&lt;/artifactId&gt;
		&lt;version&gt;${springframework.version}&lt;/version&gt;
	&lt;/dependency&gt;

	&lt;dependency&gt;
		&lt;groupId&gt;org.springframework&lt;/groupId&gt;
		&lt;artifactId&gt;spring-tx&lt;/artifactId&gt;
		&lt;version&gt;${springframework.version}&lt;/version&gt;
	&lt;/dependency&gt;
		
	&lt;dependency&gt;
		&lt;groupId&gt;org.springframework&lt;/groupId&gt;
		&lt;artifactId&gt;spring-orm&lt;/artifactId&gt;
		&lt;version&gt;${springframework.version}&lt;/version&gt;
	&lt;/dependency&gt;

	&lt;!-- Add Jackson for JSON converters --&gt;
	&lt;dependency&gt;
		&lt;groupId&gt;com.fasterxml.jackson.core&lt;/groupId&gt;
		&lt;artifactId&gt;jackson-databind&lt;/artifactId&gt;
		&lt;version&gt;2.9.5&lt;/version&gt;
	&lt;/dependency&gt;

	&lt;!-- Hibernate --&gt;
	&lt;dependency&gt;
		&lt;groupId&gt;org.hibernate&lt;/groupId&gt;
		&lt;artifactId&gt;hibernate-core&lt;/artifactId&gt;
		&lt;version&gt;${hibernate.version}&lt;/version&gt;
	&lt;/dependency&gt;

	&lt;!-- MySQL --&gt;
	&lt;dependency&gt;
		&lt;groupId&gt;mysql&lt;/groupId&gt;
		&lt;artifactId&gt;mysql-connector-java&lt;/artifactId&gt;
		&lt;version&gt;${mysql.connector.version}&lt;/version&gt;
	&lt;/dependency&gt;

	&lt;!-- C3PO --&gt;
	&lt;dependency&gt;
		&lt;groupId&gt;com.mchange&lt;/groupId&gt;
		&lt;artifactId&gt;c3p0&lt;/artifactId&gt;
		&lt;version&gt;${c3po.version}&lt;/version&gt;
	&lt;/dependency&gt;

	&lt;!-- Servlet+JSP+JSTL --&gt;
	&lt;dependency&gt;
		&lt;groupId&gt;javax.servlet&lt;/groupId&gt;
		&lt;artifactId&gt;javax.servlet-api&lt;/artifactId&gt;
		&lt;version&gt;3.1.0&lt;/version&gt;
	&lt;/dependency&gt;

	&lt;dependency&gt;
		&lt;groupId&gt;javax.servlet.jsp&lt;/groupId&gt;
		&lt;artifactId&gt;javax.servlet.jsp-api&lt;/artifactId&gt;
		&lt;version&gt;2.3.1&lt;/version&gt;
	&lt;/dependency&gt;

	&lt;dependency&gt;
		&lt;groupId&gt;javax.servlet&lt;/groupId&gt;
		&lt;artifactId&gt;jstl&lt;/artifactId&gt;
		&lt;version&gt;1.2&lt;/version&gt;
	&lt;/dependency&gt;

	&lt;!-- to compensate for java 9 not including jaxb --&gt;
	&lt;dependency&gt;
		&lt;groupId&gt;javax.xml.bind&lt;/groupId&gt;
		&lt;artifactId&gt;jaxb-api&lt;/artifactId&gt;
		&lt;version&gt;2.3.0&lt;/version&gt;
	&lt;/dependency&gt;
		
	&lt;!--  Web token dependency --&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;io.jsonwebtoken&lt;/groupId&gt;
    	&lt;artifactId&gt;jjwt&lt;/artifactId&gt;
    	&lt;version&gt;0.9.1&lt;/version&gt;
	&lt;/dependency&gt;
	 	
 	&lt;!--  JUnit dependency --&gt;
    &lt;dependency&gt;
        &lt;groupId&gt;junit&lt;/groupId&gt;
        &lt;artifactId&gt;junit&lt;/artifactId&gt;
        &lt;version&gt;3.8.1&lt;/version&gt;
        &lt;scope&gt;test&lt;/scope&gt;
    &lt;/dependency&gt;
    
	&lt;!-- https://mvnrepository.com/artifact/org.apache.commons/commons-dbcp2 --&gt;
	&lt;dependency&gt;
	    &lt;groupId&gt;org.apache.commons&lt;/groupId&gt;
	    &lt;artifactId&gt;commons-dbcp2&lt;/artifactId&gt;
	    &lt;version&gt;2.0&lt;/version&gt;
	&lt;/dependency&gt; 

  &lt;/dependencies&gt;
  
  
  &lt;build&gt;
    &lt;finalName&gt;LoginLogoutExample&lt;/finalName&gt;
  &lt;/build&gt;
&lt;/project&gt;
</textarea></div><ul class="points"><li>Create the configuration classes<br/>Instead of XML, we perform annotation-based configuration. So, we create two classes and specify the required configuration in it.</li></ul><p><strong>DemoAppConfig.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.config;

import java.beans.PropertyVetoException;
import java.util.Properties;
import javax.sql.DataSource;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.PropertySource;
import org.springframework.core.env.Environment;
import org.springframework.orm.hibernate5.HibernateTransactionManager;
import org.springframework.orm.hibernate5.LocalSessionFactoryBean;
import org.springframework.transaction.annotation.EnableTransactionManagement;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;

import org.springframework.web.servlet.config.annotation.WebMvcConfigurer;

import com.mchange.v2.c3p0.ComboPooledDataSource;

@Configuration
@EnableWebMvc
@EnableTransactionManagement
@ComponentScan("com.javatpoint.LoginLogoutExample")
@PropertySource(value = { "classpath:persistence-mysql.properties" })
@PropertySource(value = { "classpath:persistence-mysql.properties" })
@PropertySource(value = { "classpath:application.properties" })
public class DemoAppConfig implements WebMvcConfigurer {
	
	@Autowired
	private Environment env;
	
	@Bean
	public DataSource myDataSource() {
		
		// create connection pool
		ComboPooledDataSource myDataSource = new ComboPooledDataSource();

		// set the jdbc driver
		try {
			myDataSource.setDriverClass("com.mysql.jdbc.Driver");		
		}
		catch (PropertyVetoException exc) {
			throw new RuntimeException(exc);
		}
		
		// set database connection props
		myDataSource.setJdbcUrl(env.getProperty("jdbc.url"));
		myDataSource.setUser(env.getProperty("jdbc.user"));
		myDataSource.setPassword(env.getProperty("jdbc.password"));
		
		// set connection pool props
		myDataSource.setInitialPoolSize(getIntProperty("connection.pool.initialPoolSize"));
		myDataSource.setMinPoolSize(getIntProperty("connection.pool.minPoolSize"));
		myDataSource.setMaxPoolSize(getIntProperty("connection.pool.maxPoolSize"));		
		myDataSource.setMaxIdleTime(getIntProperty("connection.pool.maxIdleTime"));

		return myDataSource;
	}
	
	private Properties getHibernateProperties() {

		// set hibernate properties
		Properties props = new Properties();
		props.setProperty("hibernate.dialect", env.getProperty("hibernate.dialect"));
		props.setProperty("hibernate.show_sql", env.getProperty("hibernate.show_sql"));
		props.setProperty("hibernate.format_sql", env.getProperty("hibernate.format_sql"));
		props.setProperty("hibernate.hbm2ddl.auto", env.getProperty("hibernate.hbm2ddl"));
		return props;				
	}
	
	// need a helper method 
		// read environment property and convert to int
		
		private int getIntProperty(String propName) {
			
			String propVal = env.getProperty(propName);
			
			// now convert to int
			int intPropVal = Integer.parseInt(propVal);
			return intPropVal;
		}
		
		@Bean
		public LocalSessionFactoryBean sessionFactory(){
			
			// create session factory
			LocalSessionFactoryBean sessionFactory = new LocalSessionFactoryBean();
			
			// set the properties
			sessionFactory.setDataSource(myDataSource());
			sessionFactory.setPackagesToScan(env.getProperty("hibernate.packagesToScan"));
			sessionFactory.setHibernateProperties(getHibernateProperties());
			
			return sessionFactory;
		}
		
		@Bean
		@Autowired
		public HibernateTransactionManager transactionManager(SessionFactory sessionFactory) {
			
			// setup transaction manager based on session factory
			HibernateTransactionManager txManager = new HibernateTransactionManager();
			txManager.setSessionFactory(sessionFactory);

			return txManager;
		}	

}
</textarea></div><p><strong>MySpringMvcDispatcherServletInitializer.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.config;

import org.springframework.web.servlet.support.AbstractAnnotationConfigDispatcherServletInitializer;

public class MySpringMvcDispatcherServletInitializer extends AbstractAnnotationConfigDispatcherServletInitializer {
	
	@Override
	protected Class&lt;?&gt;[] getRootConfigClasses() {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	protected Class&lt;?&gt;[] getServletConfigClasses() {
		return new Class[] { DemoAppConfig.class };
	}

	@Override
	protected String[] getServletMappings() {
		return new String[] { "/" };
	}

	
}
</textarea></div><ul class="points"><li>Create the entity classes<br/>Here, we are creating the following entity classes:<ol class="points"><li>AdminDetail.java - It is an Entity/POJO (Plain Old Java Object) class.</li><li>Token.java - It is used for authentication purposes.</li></ol></li></ul><p><strong>AdminDetail.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.entity;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="admin_detail")
public class AdminDetail {

	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	@Column(name="admin_id")
	private int adminID;
	
	@Column(name="email_id" , unique=true)
	public String emailId;
	
	@Column(name="name")
	public String name;
	
	@Column(name="password")
	public String password;
	
	@Column(name="role")
	public String role;
	
	public AdminDetail() { }

	public AdminDetail(int adminID, String emailId, String name, String password, String role) {
		super();
		this.adminID = adminID;
		this.emailId = emailId;
		this.name = name;
		this.password = password;
		this.role = role;
	}

	public int getAdminID() {
		return adminID;
	}

	public void setAdminID(int adminID) {
		this.adminID = adminID;
	}

	public String getEmailId() {
		return emailId;
	}

	public void setEmailId(String emailId) {
		this.emailId = emailId;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public String getRole() {
		return role;
	}

	public void setRole(String role) {
		this.role = role;
	}

	@Override
	public String toString() {
		return "AdminDetail [adminID=" + adminID + ", emailId=" + emailId + ", name=" + name + ", password=" + password
				+ ", role=" + role + "]";
	}

	
	
}
</textarea></div><p><strong>Token.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.entity;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="Token")
public class Token {
	
	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	@Column(name="token_id")
	private int tokenID;
	
	@Column(name="user_id" , unique=true)
	private int userID;
	 
	@Column(name="authenticationToken")
	private String authenticationToken;
	
	@Column(name="secretKey")
	private String secretKey;
	
	@Column(name="email_id")
	private String emailId;
	
	public Token() { }

	public Token(int tokenID, int userID, String authenticationToken, String secretKey, String emailId) {
		super();
		this.tokenID = tokenID;
		this.userID = userID;
		this.authenticationToken = authenticationToken;
		this.secretKey = secretKey;
		this.emailId = emailId;
	}

	public int getTokenID() {
		return tokenID;
	}

	public void setTokenID(int tokenID) {
		this.tokenID = tokenID;
	}

	public int getUserID() {
		return userID;
	}

	public void setUserID(int userID) {
		this.userID = userID;
	}

	public String getAuthenticationToken() {
		return authenticationToken;
	}

	public void setAuthenticationToken(String authenticationToken) {
		this.authenticationToken = authenticationToken;
	}

	public String getSecretKey() {
		return secretKey;
	}

	public void setSecretKey(String secretKey) {
		this.secretKey = secretKey;
	}

	public String getEmailId() {
		return emailId;
	}

	public void setEmailId(String emailId) {
		this.emailId = emailId;
	}

	@Override
	public String toString() {
		return "Token [tokenID=" + tokenID + ", userID=" + userID + ", authenticationToken=" + authenticationToken
				+ ", secretKey=" + secretKey + ", emailId=" + emailId + "]";
	}

	
}
</textarea></div><ul class="points"><li>Create the DAO interfaces<br/>Here, we are creating two DAO interfaces to perform database related operations.</li></ul><p><strong>AdminDAO.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.DAO.interfaces;

import java.util.List;
import com.javatpoint.LoginLogoutExample.entity.AdminDetail;

public interface AdminDAO {

	public int saveAdminDetail(AdminDetail adminDetail);
	
	public int adminLogin(String emailId , String password);
	
	public List&lt;AdminDetail&gt; getAdminData();
}
</textarea></div><p><strong>TokenDAO.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.DAO.interfaces;

public interface TokenDAO {
	
	public void saveUserEmail(String email , int adminId);
	
	public boolean updateToken(String email , String authenticationToken , String secretKey);
	
	public int getTokenDetail(String email );

	public int tokenAuthentication(String token , int emailId);

}
</textarea></div><ul class="points"><li>Create the DAO interface implementation classes</li></ul><p><strong>AdminDAOImpl.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.DAO.implementation;

import java.util.List;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.query.Query;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import com.javatpoint.LoginLogoutExample.DAO.interfaces.AdminDAO;
import com.javatpoint.LoginLogoutExample.entity.AdminDetail;

@Repository("adminDAO")
public class AdminDAOImpl implements AdminDAO {

	// Autowired SessionFactory Object So that we can get session object used for interaction with Database.
	@Autowired
	private SessionFactory sessionFactory;
		
	/*
	 * Register Admin Details. 
	*/
	public int saveAdminDetail(AdminDetail adminDetail) {
		
		Session session = null;
		try
		{
			session = sessionFactory.getCurrentSession();
			
			int id = (Integer) session.save(adminDetail);
			return id;
		}
		catch(Exception exception)
		{
			System.out.println("Excecption while saving admin Details : " + exception.getMessage());
			return 0;
		}
		finally
		{
			session.flush();
		}
	}

	public int adminLogin(String emailId, String password) {
		
		Session session = null;
		try
		{
			session = sessionFactory.getCurrentSession();
			
			Query query = session.createQuery("from AdminDetail where emailId=:emailId and password=:password");
			query.setParameter("emailId", emailId);
			query.setParameter("password", password);
			List&lt;AdminDetail&gt; list = query.list();
			
			int size = list.size();
			if(size == 1)
			{
				return list.get(0).getAdminID();
			}
			else
			{
				return -1;
			}
		}
		catch(Exception exception)
		{
			System.out.println("Excecption while saving admin Details : " + exception.getMessage());
			return 0;
		}
		finally
		{
			session.flush();
		}
		
	}

	
	public List&lt;AdminDetail&gt; getAdminData() {
		Session session = null;
		try
		{
			session = sessionFactory.getCurrentSession();
			
			Query&lt;AdminDetail&gt; query = session.createQuery("from AdminDetail");
			List&lt;AdminDetail&gt; list = query.list();
			
			if(list.size() &gt; 0)
			{
				return list;
			}
			else
			{
				return null;
			}
			
		}
		catch(Exception exception)
		{
			System.out.println("Excecption while saving admin Details : " + exception.getMessage());
			return null;
		}
		finally
		{
			session.flush();
		}
		
	}

	
}
</textarea></div><p><strong>TokenDAOImpl.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.DAO.implementation;

import java.util.List;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.query.Query;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import com.javatpoint.LoginLogoutExample.DAO.interfaces.TokenDAO;
import com.javatpoint.LoginLogoutExample.entity.Token;

@Repository("tokenDAO")
public class TokenDAOImpl implements TokenDAO  {
	
	@Autowired
	SessionFactory sessionFactory;

	public void saveUserEmail(String email, int adminId) {
		Session session = null; 
		try
		{
			session = sessionFactory.getCurrentSession();
			Token t = new Token();
			t.setUserID(adminId);
			t.setEmailId(email);
			session.save(t); 
		}
		catch(Exception exception)
		{
			System.out.println("Exception in saving UserEmail In Token Table :: " + exception.getMessage());
		}
		finally
		{
			session.flush();
		}
		
	}

	public boolean updateToken(String email, String authenticationToken, String secretKey) {
		Session session = null;
		try 
		{
			session = sessionFactory.getCurrentSession();
			Query theQuery = null;		
			
			theQuery = session.createQuery("Update Token set authenticationToken = :authenticationToken , secretKey = :secretKey where emailId =:userEmail ");
				
			theQuery.setParameter("authenticationToken", authenticationToken);
			theQuery.setParameter("userEmail", email);
			theQuery.setParameter("secretKey", secretKey);

			int result = theQuery.executeUpdate();
					
			if(result == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		catch(Exception exception)
		{
			System.out.println("Error while updating token :: " + exception.getMessage());
			return false;
		}
		finally
		{
			session.flush();
		}			
	}

	public int getTokenDetail(String email) {
		Session session = null;
		try
		{
			session = sessionFactory.getCurrentSession();
			Query&lt;Token&gt; query = session.createQuery("from Token where emailId =:userEmail");
			query.setParameter("userEmail", email);
			
			List&lt;Token&gt; tokenDetails = query.list();
			
			if(tokenDetails.size() &gt; 0)
			{
				return tokenDetails.get(0).getTokenID();
			}
			else
			{
				return 0;
			}
			
		}
		catch(Exception exception)
		{
			System.out.println("Exception while getting token ID :: " + exception.getMessage());		
		}
		finally
		{
			session.flush();
		}
		
		return 0;
	}

	public int tokenAuthentication(String token, int emailId) {
		Session session = null;
		
		try 
		{
			session = sessionFactory.getCurrentSession();
			
			Query query = session.createQuery("from Token where userID =:userID and authenticationToken = :token");
			query.setParameter("userID", emailId);
			query.setParameter("token", token);
			List&lt;Token&gt; tokenDetails = query.list();
			
			if(tokenDetails.size() &gt; 0)
			{
				return tokenDetails.get(0).getTokenID();
			}
			else
			{
				return 0;
			}

		}
		catch(Exception exception)
		{
			System.out.println("Exception while Authenticating token :: "+ exception);
			return 0;
		}
		finally
		{
			session.flush();
		}
		
		
	}

}
</textarea></div><ul class="points"><li>Create the service layer interfaces</li></ul><p>Here, we are creating the service layer interfaces that act as a bridge between DAO and Entity classes.</p><p><strong>AdminService.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.service.interfaces;

import java.util.List;
import com.javatpoint.LoginLogoutExample.entity.AdminDetail;

public interface AdminService {

	public int saveAdminDetail(AdminDetail adminDetail);
	
	public int adminLogin(String emailId , String password);
	
	public List&lt;AdminDetail&gt; getAdminData();
}
</textarea></div><p><strong>TokenService.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.service.interfaces;

public interface TokenService {
	
	public void saveUserEmail(String email , int adminId);
	
	public boolean updateToken(String email , String authenticationToken , String secretKey);
	
	public int getTokenDetail(String email );

	public int tokenAuthentication(String token , int emailId);

}
</textarea></div><ul class="points"><li>Create the service layer implementation classes</li></ul><p><strong>AdminServiceImpl.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.service.implementation;

import java.util.List;
import javax.transaction.Transactional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import com.javatpoint.LoginLogoutExample.DAO.interfaces.AdminDAO;
import com.javatpoint.LoginLogoutExample.entity.AdminDetail;
import com.javatpoint.LoginLogoutExample.service.interfaces.AdminService;

@Service("adminService")
public class AdminServiceImpl implements AdminService {
	
	@Autowired
	private AdminDAO adminDAO;

	@Transactional
	public int saveAdminDetail(AdminDetail adminDetail) {
		return adminDAO.saveAdminDetail(adminDetail);
	}
	
	@Transactional
	public int adminLogin(String emailId, String password) {
		return adminDAO.adminLogin(emailId, password);
	}

	@Transactional
	public List&lt;AdminDetail&gt; getAdminData() {
		return adminDAO.getAdminData();
	}
	
	

}
</textarea></div><p><strong>TokenServiceImpl.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.service.implementation;

import javax.transaction.Transactional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import com.javatpoint.LoginLogoutExample.DAO.interfaces.TokenDAO;
import com.javatpoint.LoginLogoutExample.service.interfaces.TokenService;

@Service("tokenService")
public class TokenServiceImpl implements TokenService {

	@Autowired
	private TokenDAO tokenDAO;
	
	@Transactional
	public void saveUserEmail(String email, int adminId) {
		tokenDAO.saveUserEmail(email, adminId);
	}

	@Transactional
	public boolean updateToken(String email, String authenticationToken, String secretKey) {
		return tokenDAO.updateToken(email, authenticationToken, secretKey);
	}

	@Transactional
	public int getTokenDetail(String email) {
		return tokenDAO.getTokenDetail(email);
	}

	@Transactional
	public int tokenAuthentication(String token, int emailId) {
		return tokenDAO.tokenAuthentication(token, emailId);
	}

}
</textarea></div><ul class="points"><li>Create the token class</li></ul><p><strong>GenerateToken.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javavtpoint.LoginLogoutExample.Token;

import javax.crypto.spec.SecretKeySpec;
import javax.xml.bind.DatatypeConverter;
import java.security.Key;
import java.util.Date;
import java.util.Random;

import io.jsonwebtoken.*;

public class GenerateToken {
	
public String[] createJWT(String id, String issuer, String subject, String role , long ttlMillis) {
		
	    //The JWT signature algorithm we will be using to sign the token
	    SignatureAlgorithm signatureAlgorithm = SignatureAlgorithm.HS256;
	 
	    long nowMillis = System.currentTimeMillis();
	    Date now = new Date(nowMillis);
	    
		Random random = new Random();
		String secretKey = id  + Integer.toString(random.nextInt(1000));
	
	    byte[] apiKeySecretBytes = DatatypeConverter.parseBase64Binary(secretKey);
	    
	    Key signingKey = null;
	    try{
	    	
	    	signingKey = new SecretKeySpec(apiKeySecretBytes, signatureAlgorithm.getJcaName());
	    }
	    catch(Exception e)
	    {
	    	System.out.println("Exception while generating key " + e.getMessage() );
	    }
	    
	    JwtBuilder builder = Jwts.builder().setId(id)
	                                .setIssuedAt(now)
	                                .setSubject(subject)
	                                .setIssuer(issuer)
	                                .setPayload(role)
	                                .signWith(signatureAlgorithm, signingKey);
	    
	    //if it has been specified, let's add the expiration
	    if (ttlMillis &gt;= 0) {
	    long expMillis = nowMillis + ttlMillis;
	        Date exp = new Date(expMillis);
	        builder.setExpiration(exp);
	    }
	    
	    String[] tokenInfo = {builder.compact() , secretKey};
	    return tokenInfo;
	    
	}
}
</textarea></div><ul class="points"><li>Create the controller class</li></ul><p><strong>AdminController.java</strong></p><div class="codeblock"><textarea class="java" name="code">package com.javatpoint.LoginLogoutExample.restController;

import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpHeaders;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestHeader;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.javatpoint.LoginLogoutExample.entity.AdminDetail;
import com.javatpoint.LoginLogoutExample.service.interfaces.AdminService;
import com.javatpoint.LoginLogoutExample.service.interfaces.TokenService;
import com.javavtpoint.LoginLogoutExample.Token.GenerateToken;

@RestController
@RequestMapping("/api")
@CrossOrigin(origins = "http://localhost:4200", allowedHeaders = "*", exposedHeaders = "Authorization")
public class AdminController {
	
	@Autowired
	private AdminService adminService;
	
	@Autowired
	private TokenService tokenService;
	
	GenerateToken generateToken = new GenerateToken();
	
	@PostMapping("/saveAdmin")
	public int saveAdminDetail(@RequestBody AdminDetail adminDetail) {
		return adminService.saveAdminDetail(adminDetail);
	}
	
	@PostMapping("/login")
	public ResponseEntity&lt;Integer&gt; login(@RequestBody AdminDetail adminDetail)
	{
		int status;
		HttpHeaders httpHeader = null;
	
		// Authenticate User.
		status = adminService.adminLogin(adminDetail.getEmailId(), adminDetail.getPassword());
		
		/*
		 * If User is authenticated then Do Authorization Task.
		 */
		if (status &gt; 0) 
		{
			/*
			 * Generate token.
			 */
			String tokenData[] = generateToken.createJWT(adminDetail.getEmailId(), "JavaTpoint", "JWT Token",
					adminDetail.getRole(), 43200000);
			
			// get Token.
			String token = tokenData[0];
			
			System.out.println("Authorization :: " + token);

			// Create the Header Object
			httpHeader = new HttpHeaders();

			// Add token to the Header.
			httpHeader.add("Authorization", token);

			// Check if token is already exist.
			long isUserEmailExists = tokenService.getTokenDetail(adminDetail.getEmailId());
			
			/*
			 * If token exist then update Token else create and insert the token.
			 */
			if (isUserEmailExists &gt; 0) 
			{
				tokenService.updateToken(adminDetail.getEmailId(), token, tokenData[1]);
			} 
			else 
			{
				tokenService.saveUserEmail(adminDetail.getEmailId(), status);
				tokenService.updateToken(adminDetail.getEmailId(), token, tokenData[1]);
			}

			return new ResponseEntity&lt;Integer&gt;(status, httpHeader, HttpStatus.OK);
		} 
		
		// if not authenticated return  status what we get.
		else 
		{
			return new ResponseEntity&lt;Integer&gt;(status, httpHeader, HttpStatus.OK);
		}
		

	}
	
	
	@GetMapping("/getAdminData/{adminId}")
	public List&lt;AdminDetail&gt; getAdminData(@PathVariable int adminId, @RequestHeader("Authorization") String authorizationToken)
	{
		String token[] = authorizationToken.split(" ");
		int result = tokenService.tokenAuthentication(token[1], adminId);
		
		if (result &gt; 0) {
			return adminService.getAdminData();
		} else {
			return null;
		}
	}
	
}
</textarea></div><ul class="points"><li><strong>reate the properties file</strong></li></ul><p>Here, we are creating the properties file inside the <strong>src/main/resources</strong> in the project. The following file contains the hibernate connection configuration.</p><p><strong>persistence-mysql.properties</strong></p><div class="codeblock"><textarea class="java" name="code">#
# JDBC connection properties
#
jdbc.driver=com.mysql.jdbc.Driver
jdbc.url=jdbc:mysql://localhost:3306/loginlogoutexample?useSSL=false
jdbc.user=root
jdbc.password=

#
# Connection pool properties
#
connection.pool.initialPoolSize=5
connection.pool.minPoolSize=5
connection.pool.maxPoolSize=20
connection.pool.maxIdleTime=3000

#
# Hibernate properties
#
&lt;!-- hibernate.dialect=org.hibernate.dialect.MySQLDialect --&gt;
hibernate.dialect=org.hibernate.dialect.MySQL5Dialect
hibernate.show_sql=true
hibernate.format_sql=true
hibernate.hbm2ddl=update
hibernate.packagesToScan=com.javatpoint.LoginLogoutExample.entity
</textarea></div><h2 class="h2">Angular Module</h2><p>Let's see the directory structure of Angular we need to follow:</p><img alt="Spring Angular Login and Logout Application" src="https://images.tpointtech.com/sppages/angular/images/spring-angular-login-and-logout-application2.png"/><ul class="points"><li>Create an Angular project</li></ul><p>Let's create an Angular project by using the following command:</p><p><em>ng new LoginLogoutExample</em></p><p>Here, LoginLogoutExample is the name of the project.</p><h2 class="h2">Install Bootstrap CSS framework</h2><p>Use the following command to install bootstrap in the project.</p><p><em>npm install <a class="__cf_email__" data-cfemail="e7858888939493958697a7d4c9d4c9d0" href="/cdn-cgi/l/email-protection">[email protected]</a> --save</em></p><p>Now, include the following code in the style.css file.</p><div class="codeblock"><textarea class="java" name="code">@import "~bootstrap/dist/css/bootstrap.css";
</textarea></div><ul class="points"><li>Generate Components<br/>Open the project in visual studio and then use the following command to generate the following Angular components:<br/><em>ng g c Home</em><br/><em>ng g c Login</em><br/><em>ng g c Signup</em><br/><em>ng g c Profile</em></li></ul><img alt="Spring Angular Login and Logout Application" src="https://images.tpointtech.com/sppages/angular/images/spring-angular-login-and-logout-application3.png"/><br/><img alt="Spring Angular Login and Logout Application" src="https://images.tpointtech.com/sppages/angular/images/spring-angular-login-and-logout-application4.png"/><p>Let's also create a service class by using the following command: -</p><p><em>ng g s services/Admin</em></p><img alt="Spring Angular Login and Logout Application" src="https://images.tpointtech.com/sppages/angular/images/spring-angular-login-and-logout-application5.png"/><ul class="points"><li>Edit <strong>app.module.ts</strong> file<ul class="points"><li><strong>Implement Routing</strong> - Here, we are importing <strong>RouterModule</strong> present inside <strong>@angular/router</strong> package and define path in the import array.</li><li><strong>Import ReactiveFormsModule</strong> - Here, we are importing <strong>ReactiveFormsModule</strong> for reactive forms and specify it in imports array.</li><li><strong>Import HttpModule</strong> - Here, we are importing <strong>HttpModule</strong> for server requests and specify it in imports array.</li><li><strong>Register Service class</strong> - Here, we are mentioning the service class in providers array.</li></ul></li></ul><div class="codeblock"><textarea class="java" name="code">import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

// import Http module
import { HttpModule} from '@angular/http';

// import ReactiveFormsModule for reactive form
import { ReactiveFormsModule } from '@angular/forms';

// import module for Routing.
import { RouterModule } from '@angular/router';

import { AppComponent } from './app.component';
import { LoginComponent } from './login/login.component';
import { HomeComponent } from './home/home.component';
import { SignupComponent } from './signup/signup.component';
import { AdminService } from './services/admin.service';
import { ProfileComponent } from './profile/profile.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    HomeComponent,
    SignupComponent,
    ProfileComponent
  ],
  imports: [
    BrowserModule,
    ReactiveFormsModule,
    HttpModule,
    RouterModule.forRoot([
      {
        path : '',
        component : HomeComponent 
      },
      {
        path : 'login',
        component : LoginComponent  
      },
      {
        path : 'signup',
        component : SignupComponent 
      },
      {
        path : 'profile/:adminId',
        component : ProfileComponent
      }
    ])

  ],
  providers: [
    AdminService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
</textarea></div><ul class="points"><li>Edit the <strong>app.component.html</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">&lt;router-outlet&gt;&lt;/router-outlet&gt;
</textarea></div><ul class="points"><li>Edit the <strong>home.component.html</strong> file<br/>This is a welcome page of the application that includes two links - SignUp and Login.</li></ul><div class="codeblock"><textarea class="java" name="code">&lt;div style="text-align: center"&gt;

    &lt;h2&gt;  &lt;a [routerLink]="['/signup']"&gt;SignUp&lt;/a&gt; &lt;br&gt;&lt;br&gt; &lt;/h2&gt;
    &lt;h2&gt;  &lt;a [routerLink]="['/login']"&gt;Login&lt;/a&gt; &lt;br&gt;&lt;br&gt; &lt;/h2&gt;
    
&lt;/div&gt;
</textarea></div><img alt="Spring Angular Login and Logout Application" src="https://images.tpointtech.com/sppages/angular/images/spring-angular-login-and-logout-application6.png"/><ul class="points"><li>Create the <strong>AdminDetail.ts</strong> class</li></ul><p>Let's create a class by using the following command: -</p><p><em>ng g class classes/AdminDetail</em></p><img alt="Spring Angular Login and Logout Application" src="https://images.tpointtech.com/sppages/angular/images/spring-angular-login-and-logout-application7.png"/><p>Now, specify the required fields within <strong>AdminDetail</strong> class.</p><div class="codeblock"><textarea class="java" name="code">export class AdminDetail {
    emailId : string;
    name : string;
    password : string ;
    role : string;
}
</textarea></div><p>The purpose of this class is to map the specified fields with the fields of Spring entity class.</p><ul class="points"><li>Edit the <strong>admin.service.ts</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">import { Injectable } from '@angular/core';
import { Http, RequestOptions , Headers } from '@angular/http';
import { Observable } from 'rxjs';
import { AdminDetail } from '../classes/admin-detail';
import { Router } from '@angular/router';

import { JwtHelperService } from '@auth0/angular-jwt';

@Injectable({
  providedIn: 'root'
})
export class AdminService {

  // Base URL
  private  baseUrl = "http://localhost:8080/LoginLogoutExample/api/";

  

  constructor(private http: Http, private router : Router) { }

  saveAdminDetails(adminDetail : AdminDetail) : Observable&lt;any&gt;
  {
      let url = this.baseUrl + "saveAdmin";
      return this.http.post(url,adminDetail);
  }

  login(adminDetail : AdminDetail) : Observable&lt;any&gt;
  {
      let url = this.baseUrl + "login";
      return this.http.post(url, adminDetail);
  }

  logout() 
  { 
    // Remove the token from the localStorage.
    localStorage.removeItem('token');

    this.router.navigate(['']);

  }

  /*
  * Check whether User is loggedIn or not.
  */

  isLoggedIn() { 

    // create an instance of JwtHelper class.
    let jwtHelper = new JwtHelperService();

    // get the token from the localStorage as we have to work on this token.
    let token = localStorage.getItem('token');

    // check whether if token have something or it is null.
    if(!token)
    {
      return false;
    }

    // get the Expiration date of the token by calling getTokenExpirationDate(String) method of JwtHelper class. this method accepts a string value which is nothing but a token.

    if(token)
    {
      let expirationDate = jwtHelper.getTokenExpirationDate(token);

      // check whether the token is expired or not by calling isTokenExpired() method of JwtHelper class.

      let isExpired = jwtHelper.isTokenExpired(token);

      return !isExpired;    
    }   
  }
  
  
  getAdminDetail(adminId) : Observable&lt;any&gt;
  {
      let url = this.baseUrl + "getAdminData/" + adminId;

       // create an instance of Header object.
      let headers = new Headers();

      // get token from localStorage.
      let token = localStorage.getItem('token');

      // Append Authorization header.
      headers.append('Authorization' , 'Bearer ' + token);

      // create object of RequestOptions and include that in it.
      let options = new RequestOptions( { headers : headers } );

      return this.http.get(url , options);
  }
  
}
</textarea></div><ul class="points"><li>Edit the <strong>signup.component.ts</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { AdminDetail } from '../classes/admin-detail';
import { AdminService } from '../services/admin.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  private adminDetail = new AdminDetail();

  constructor(private adminService : AdminService, private router : Router) { }

  ngOnInit() {
  }

  // create the form object.
  form = new FormGroup({
      fullName : new FormControl('' , Validators.required),
      email : new FormControl('' , Validators.required),
      password : new FormControl('' , Validators.required),
      confirmPassword : new FormControl('' , Validators.required),
      role : new FormControl('' , Validators.required),
  });

  AdminForm(AdminInformation)
  {
     let pass = this.Password.value;
     let confirmPass = this.ConfirmPassword.value;

     if(pass == confirmPass)
     {
        this.adminDetail.name = this.FullName.value;
        this.adminDetail.emailId = this.Email.value;
        this.adminDetail.password = this.Password.value;
        this.adminDetail.role = this.Role.value;

        this.adminService.saveAdminDetails(this.adminDetail).subscribe(
          response =&gt; {
              let result = response.json();

              if(result &gt; 0)
              {
                this.router.navigate(['/login']);
              }
              else
              {
                  alert("error occur while registring User. please try after sometime.")
              }
          },
          error =&gt; {
            alert("error occur while registring User. please try after sometime.")
          }
        );
        
     }
     else
     {
        alert("Password and confirm password not match.");
     }
  }

  get FullName(){
    return this.form.get('fullName');
  }

  get Email(){
      return this.form.get('email');
  }

  get Password(){
      return this.form.get('password');
  }

  get ConfirmPassword(){
      return this.form.get('confirmPassword');
  }

  get Role(){
      return this.form.get('role');
  }


}
</textarea></div><ul class="points"><li>Edit the <strong>signup.component.html</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">&lt;h2&gt;SignUp form&lt;/h2&gt;

&lt;form [formGroup]="form" #AdminInformation (ngSubmit)="AdminForm(AdminInformation)"&gt;

  &lt;div class="row"&gt;
    &lt;div class=" col-md-offset-1 col-md-4"&gt;
        &lt;label for="fullName"&gt; Name &lt;/label&gt;
        &lt;input formControlName="fullName" class="form-control" type="text"&gt; 
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="row"&gt;
    &lt;div class=" col-md-offset-1 col-md-4"&gt;
        &lt;label for="email"&gt; Email &lt;/label&gt;
        &lt;input formControlName="email" class="form-control" type="text"&gt; 
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="row"&gt;
    &lt;div class=" col-md-offset-1 col-md-4"&gt;
        &lt;label for="password"&gt; Password &lt;/label&gt;
        &lt;input formControlName="password" class="form-control" type="password"&gt; 
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="row"&gt;
    &lt;div class=" col-md-offset-1 col-md-4"&gt;
        &lt;label for="confirmPassword"&gt; Confirm Password &lt;/label&gt;
        &lt;input formControlName="confirmPassword" class="form-control" type="password"&gt; 
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="row"&gt;
    &lt;div class=" col-md-offset-1 col-md-4"&gt;
        &lt;label for="role"&gt; Role &lt;/label&gt;
        &lt;input formControlName="role" class="form-control" type="text"&gt; 
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="row" style="margin-top: 40px;"&gt;
    &lt;div class="col-md-offset-1 col-md-4"&gt;
        &lt;button class="btn btn-md btn-primary btn-style"  &gt;Save&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;

&lt;/form&gt;
</textarea></div><img alt="Spring Angular Login and Logout Application" src="https://images.tpointtech.com/sppages/angular/images/spring-angular-login-and-logout-application8.png"/><ul class="points"><li>Edit the <strong>login.component.ts</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">import { Component, OnInit } from '@angular/core';
import { FormGroup, Validators, FormControl } from '@angular/forms';
import { AdminDetail } from '../classes/admin-detail';
import { AdminService } from '../services/admin.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  private adminDetail = new AdminDetail();

  constructor(private adminService : AdminService, private router : Router) { }

  ngOnInit() {
    if((this.adminService.isLoggedIn()) )
    {
        this.router.navigate(['/profile' , localStorage.getItem('id')]);
    }
    else
    {
        this.router.navigate(['/login']);
    }
  }

  // create the form object.
  form = new FormGroup({
    email : new FormControl('' , Validators.required),
    password : new FormControl('' , Validators.required)
  });

  Login(LoginInformation)
  {
      this.adminDetail.emailId = this.Email.value;
      this.adminDetail.password = this.Password.value;

      this.adminService.login(this.adminDetail).subscribe(
        response =&gt; {
            let result =  response.json();
            
            if(result &gt; 0)
            {
              let token = response.headers.get("Authorization");

              localStorage.setItem("token" , token);
              localStorage.setItem("id" , result);
  
              this.router.navigate(['/profile', result]);
            }
            if(result == -1)
            {
              alert("please register before login Or Invalid combination of Email and password");
            }
           
        },
        error =&gt; {
            console.log("Error in authentication");
        }
      );
  }

  get Email(){
      return this.form.get('email');
  }

  get Password(){
      return this.form.get('password');
  }

}
</textarea></div><ul class="points"><li>Edit the <strong>login.component.html</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">&lt;h2&gt;Login form&lt;/h2&gt;

&lt;form [formGroup]="form" #LoginInformation (ngSubmit)="Login(LoginInformation)"&gt;

  &lt;div class="row"&gt;
    &lt;div class=" col-md-offset-1 col-md-4"&gt;
        &lt;label for="email"&gt; Email &lt;/label&gt;
        &lt;input formControlName="email" class="form-control" type="text"&gt; 
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="row"&gt;
    &lt;div class=" col-md-offset-1 col-md-4"&gt;
        &lt;label for="password"&gt; Password &lt;/label&gt;
        &lt;input formControlName="password" class="form-control" type="password"&gt; 
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="row" style="margin-top: 40px;"&gt;
    &lt;div class="col-md-offset-1 col-md-4"&gt;
        &lt;button class="btn btn-md btn-primary btn-style"  &gt;Login&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;

&lt;/form&gt;
</textarea></div><img alt="Spring Angular Login and Logout Application" src="https://images.tpointtech.com/sppages/angular/images/spring-angular-login-and-logout-application9.png"/><ul class="points"><li>Edit the <strong>profile.component.ts</strong> file<br/>Once the user logged in, it will redirected to the profile component.</li></ul><div class="codeblock"><textarea class="java" name="code">import { Component, OnInit } from '@angular/core';
import { AdminService } from '../services/admin.service';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {

  private adminId;
  private haveData= 0;

  private data = [];

  private dataRequest = false;

  constructor(private adminService  : AdminService, private route : ActivatedRoute, private router : Router) { }

  ngOnInit() {

    if((this.adminService.isLoggedIn()) )
    {
      this.route.paramMap.subscribe(params =&gt; {
        this.adminId =+ params.get('adminId');
      });
    }
    else
    {
        this.router.navigate(['/login']);
    }

  }

  getAdminData()
  {
      this.haveData = 0;

      this.dataRequest = true;

      this.adminService.getAdminDetail(this.adminId).subscribe(
          response =&gt; {

              let result = response.json();
              this.data = result;

              if(result == " ")
              {
                  this.haveData = 0;
              }
              else
              {
                this.haveData = this.haveData + 1;
              }
          },
          error =&gt; {
              console.log("error while getting Admin Data");
          }
      );
  }

}
</textarea></div><ul class="points"><li>Edit the <strong>profile.component.html</strong> file</li></ul><div class="codeblock"><textarea class="java" name="code">&lt;div style="text-align: right ; margin-right: 40px;"&gt;

  &lt;h2&gt;  &lt;a (click)= "adminService.logout()"&gt;Logout&lt;/a&gt; &lt;br&gt; &lt;/h2&gt;
  
&lt;/div&gt;

&lt;div style="text-align: center ; margin-right: 40px;"&gt;

  &lt;h2&gt;  &lt;a (click)="getAdminData()" &gt;Get Admin Details&lt;/a&gt; &lt;br&gt; &lt;/h2&gt;
  
&lt;/div&gt;

&lt;div *ngIf="haveData &gt; 0 &amp;&amp; dataRequest"&gt;
    &lt;table class="table table-responsive table-striped"&gt;

        &lt;tr&gt;
          &lt;th&gt;Email ID&lt;/th&gt;
          &lt;th&gt;Name&lt;/th&gt;
          &lt;th&gt;Password&lt;/th&gt;
          &lt;th&gt;Role&lt;/th&gt;
        &lt;/tr&gt;
        
        &lt;ng-container *ngFor = "let item of data"&gt;
            &lt;tr&gt;
              &lt;td&gt;{{item.emailId}}&lt;/td&gt;
              &lt;td&gt;{{item.name}}&lt;/td&gt;
              &lt;td&gt;{{item.password}}&lt;/td&gt;
              &lt;td&gt;{{item.role}}&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/ng-container&gt;
  
      &lt;/table&gt;
&lt;/div&gt;

&lt;div *ngIf="haveData == 0 &amp;&amp; dataRequest"&gt;
    Don't have Data.
&lt;/div&gt;
</textarea></div><p>User can fetch the admin details by clicking on the <strong>Get Admin Details</strong> link.</p><img alt="Spring Angular Login and Logout Application" src="https://images.tpointtech.com/sppages/angular/images/spring-angular-login-and-logout-application10.png"/><p>Now, the user can exit the current state by clicking <strong>Logout</strong>.</p><div class="download"><a href="https://images.tpointtech.com/sppages/download/angular/AngularSpringLoginLogout.zip">Download this example</a></div><hr/><div class="nexttopicdiv"><span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="angular-spring-search-field-example">Search Field Example</a></span></div><br/><br/><div id="bottomnext"><a class="next" href="angular-spring-crud-example" style="float:left">← prev</a> <a class="next" href="angular-spring-search-field-example" style="float:right">next →</a></div><br/><br/></td></tr></tbody></table></div></body></html><br/></div><div class="related-posts-container"><h2 class="h3">Related Posts</h2><ul class="related-posts-list"><li><a class="related-post-item" href="angular-spring-crud-example"><h3 class="h3">CRUD Example</h3><p class="related-post-content">Spring Angular CRUD Application In this section, we are going to develop a CRUD (create-read-update-delete) web application. This application contains the student form that includes the CRUD features like add, view, delete, and update student. In this integration, we are using Spring Boot to handle the backend...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 21 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="angular-spring-search-field-example"><h3 class="h3">Search Field Example</h3><p class="related-post-content">Spring Angular Search Field Application In this section, we are going to create a Search Field web application. This application includes data in a tabular form with search fields. In this integration, we are using Spring to handle the backend part and Angular to handle the frontend...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 8 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li></ul></div><br/><div class="container-xxl" style="position:relative;margin-top:-20px"><div class="aboutus themecolor subscribe"><div class="container px-lg-5 text-center"><h4 class="mb-4 animated zoomIn mediumheading">Subscribe to Tpoint Tech</h4><p class="pb-3 animated zoomIn text-center">We request you to subscribe our newsletter for upcoming updates.</p><div class="position-relative w-100 mt-3"><input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" id="email" placeholder="Your Email" style="height:48px" type="email"/> <button class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2" id="subscribeBtn" type="button">Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i></button></div><p class="mt-3" id="message"></p></div></div></div><br/><div class="ad-container" id="ad-container"></div><br/></div><div class="col-md-2"><div class="advertisement"><div id="sidebar_300x600_1_bq_307_556"></div><div id="sidebar_300x600_2_bq_307_557"></div><div id="sidebar_300x600_3_bq_307_558"></div></div></div></div><script>function closePopup(){document.getElementById("popup").style.display="none"}setTimeout((function(){localStorage.getItem("popupShown")||(document.getElementById("popup").style.display="flex",localStorage.setItem("popupShown","true"))}),5e3)</script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>$(document).ready((function(){$("#subscribeBtn").click((function(){var e=$("#email").val().trim();""!==e?$.ajax({url:"/subscribe",type:"POST",contentType:"application/json",data:JSON.stringify({email:e}),beforeSend:function(){$("#subscribeBtn").prop("disabled",!0).html("Subscribing...")},success:function(e){$("#message").html("<span style='color: green;'>Subscription successful! Please check your email.</span>"),$("#email").val("")},error:function(e){var s=e.responseJSON?e.responseJSON.error:"Subscription failed.";$("#message").html("<span style='color: red;'>"+s+"</span>")},complete:function(){$("#subscribeBtn").prop("disabled",!1).html('Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i>')}}):$("#message").html("<span style='color: red;'>Please enter your email.</span>")}))}))</script><div class="container-fluid footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"><div class="container py-5"><div class="row"><div class="col-md-6 col-lg-5"><img alt="Logo" src="https://images.tpointtech.com/static/images/logo.png"/><p>We provides tutorials and interview questions of all technology like java tutorial, android, java frameworks</p><h5 class="mb-4">Contact info</h5><p><svg viewbox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg>G-13, 2nd Floor, Sec-3, Noida, UP, 201301, India</p><p><svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v128z"></path></svg><a href="mailto:hr@tpointtech.com">hr@tpointtech.com</a></p><p><svg fill="currentColor" height="1.8em" stroke="currentColor" stroke-width="0" viewbox="0 0 24 24" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.49 3c-2.21 0-4.21.9-5.66 2.34l1.06 1.06a6.47 6.47 0 0 1 9.18 0l1.06-1.06A7.932 7.932 0 0 0 16.49 3z"></path><path d="M20.03 7.46a5.022 5.022 0 0 0-7.08 0l1.06 1.06c.63-.63 1.51-1.03 2.47-1.03s1.84.39 2.47 1.03l1.08-1.06zM15.08 9.59 16.49 11l1.41-1.41c-.36-.37-.86-.59-1.41-.59s-1.05.22-1.41.59z"></path><path d="m15.63 14.4-2.52 2.5c-2.5-1.43-4.57-3.5-6-6l2.5-2.52c.23-.24.33-.57.27-.9L9.13 3.8c-.09-.46-.5-.8-.98-.8H4c-.56 0-1.03.47-1 1.03.17 2.89 1.05 5.6 2.43 7.97 1.58 2.73 3.85 4.99 6.57 6.57 2.37 1.37 5.08 2.26 7.97 2.43.56.03 1.03-.44 1.03-1v-4.15c0-.48-.34-.89-.8-.98l-3.67-.73a.985.985 0 0 0-.9.26z"></path></svg><a href="tel:+919599086977">+91-9599086977</a></p><h5 class="mb-4">Follow us</h5><div class="d-flex"><a class="btn btn-outline-light btn-social" href="https://www.facebook.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Facebook Page" src="https://images.tpointtech.com/static/img/facebook.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://x.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech X Page" src="https://images.tpointtech.com/static/images/x.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/tpointtech/" rel="nofollow" target="_blank"><img alt="Tpoint Tech Linkedin Page" src="https://images.tpointtech.com/static/images/linkedin.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://t.me/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Telegram Channel" src="https://images.tpointtech.com/static/images/telegram.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@tpointtechofficial" rel="nofollow" target="_blank"><img alt="Tpoint Tech Youtube Channel" src="https://images.tpointtech.com/static/img/youtube.png"/></a><a class="btn btn-outline-light btn-social" href="https://www.instagram.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech instagram Page" src="https://images.tpointtech.com/static/images/insta.png" width="24"/></a></div></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Tutorials</h5><a class="btn btn-link" href="/java-tutorial">Java</a> <a class="btn btn-link" href="/data-structure-tutorial">Data Structures</a> <a class="btn btn-link" href="/c-programming-language-tutorial">C Programming</a> <a class="btn btn-link" href="/cpp-tutorial">C++ Tutorial</a> <a class="btn btn-link" href="/c-sharp-tutorial">C# Tutorial</a> <a class="btn btn-link" href="/php-tutorial">PHP Tutorial </a><a class="btn btn-link" href="/html-tutorial">HTML Tutorial</a> <a class="btn btn-link" href="/javascript-tutorial">JavaScript Tutorial </a><a class="btn btn-link" href="/jquery-tutorial">jQuery Tutorial </a><a class="btn btn-link" href="/spring-tutorial">Spring Tutorial</a></div><div class="col-md-6 col-lg-3"><h5 class="mb-4">Interview Questions</h5><a class="btn btn-link" href="/microsoft-interview-questions">Microsoft </a><a class="btn btn-link" href="/amazon-interview-questions">Amazon </a><a class="btn btn-link" href="/adobe-interview-questions">Adobe </a><a class="btn btn-link" href="/intuit-interview-questions">Intuit </a><a class="btn btn-link" href="/accenture-interview-questions">Accenture</a> <a class="btn btn-link" href="/cognizant-interview-questions">Cognizant </a><a class="btn btn-link" href="/capgemini-interview-questions">Capgemini </a><a class="btn btn-link" href="/wipro-interview-questions">Wipro </a><a class="btn btn-link" href="/tcs-interview-questions">Tcs </a><a class="btn btn-link" href="/infosys-interview-questions">Infosys</a></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Online Compiler</h5><a class="btn btn-link" href="/compiler/c">C </a><a class="btn btn-link" href="/compiler/r">R </a><a class="btn btn-link" href="/compiler/cpp">C++ </a><a class="btn btn-link" href="/compiler/php">Php </a><a class="btn btn-link" href="/compiler/java">Java </a><a class="btn btn-link" href="/compiler/html">Html </a><a class="btn btn-link" href="/compiler/swift">Swift </a><a class="btn btn-link" href="/compiler/python">Python </a><a class="btn btn-link" href="/compiler/javascript">JavaScript </a><a class="btn btn-link" href="/compiler/typescript">TypeScript</a></div></div></div><div class="container text-center px-lg-5"><div class="col-md-12 text-center mb-3 mb-md-0"></div><a href="/latest-post">Latest Post</a> | <a href="/tutorials-list">Tutorials List</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/about-us">About Us</a> | <a href="/contact-us">Contact Us</a></div><div class="copyright"><div class="row"><div class="col-md-12 text-center mb-3 mb-md-0">© Copyright 2011 - 2025 TpointTech.com. All Rights Reserved.</div></div></div></div></div></section><div aria-hidden="true" aria-labelledby="searchModalLabel" class="modal fade" id="searchModal" tabindex="-1"><div class="modal-dialog modal-dialog-scrollable modal-lg"><div class="modal-content shadow rounded-3"><div class="modal-header text-white"><img alt="TPoint Tech Logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" style="height:30px;margin-right:10px"/> <button aria-label="Close" class="btn-close btn-close-black" data-bs-dismiss="modal" type="button"></button></div><div class="modal-body" id="modalResults"></div></div></div></div><a class="btn btn-info btn-floating btn-lg" href="#" id="scrollButton"><i class="fas fa-arrow-up"></i></a><script defer="defer" src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script><script defer="defer" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.12.1/polyfill.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js"></script><script src="/static/js/categoryDetails.js"></script><script src="/static/js/shcoreandbrush.js"></script><script>dp.SyntaxHighlighter.HighlightAll("code")</script><script async="" src="/static/js/lazysizes.min.js"></script><script src="/static/js/main.js"></script><script>const hamburger=document.querySelector(".hamburger"),navMenu=document.querySelector(".nav");function open_menu(){hamburger.classList.toggle("active"),navMenu.classList.toggle("active")}hamburger?.addEventListener("click",open_menu);const navLink=document.querySelectorAll(".nav-link");function closeMenu(){hamburger?.classList?.remove("active"),navMenu?.classList?.remove("active")}navLink.forEach((e=>e.addEventListener("click",closeMenu)))</script><script>function toggleSidebar(){let e=document.querySelector(".col-md-2.sidebar"),l=document.querySelector(".leftmenu");window.innerWidth<=895&&("none"===e.style.display?(e.style.display="block",l.style.display="block",e.style.position="fixed",e.style.zIndex="555"):(e.style.display="none",l.style.display="none"))}toggleSidebar()</script><script>function handleAccordionOnLoad(){const o=window.innerWidth<=768,e=window.location.pathname,c=document.querySelectorAll(".leftmenu a"),n=document.querySelectorAll(".accordion-collapse");o?(n.forEach((o=>o.classList.remove("show"))),c.forEach((o=>{if(o.getAttribute("href")===e){const e=o.closest(".accordion-item");if(e){const o=e.querySelector(".accordion-collapse");o&&o.classList.add("show")}}}))):n.forEach((o=>o.classList.add("show")))}handleAccordionOnLoad(),window.addEventListener("resize",handleAccordionOnLoad)</script><script>const showhide=s=>{const e=$("#answer"+s),a=$("#btntext"+s);a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-black.png)"),"block"===e.css("display")?(e.css("display","none"),a.text("Show Answer")):(e.css("display","block"),a.empty(),a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-close-black.png)"),a.append("Hide Answer"))}</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");e&&e.addEventListener("wheel",(function(t){0!==t.deltaY&&(t.preventDefault(),e.scrollLeft+=t.deltaY)}))}))</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");let t=!1,n=0,s=0;e.addEventListener("mousedown",(a=>{t=!0,e.classList.add("active"),n=a.pageX,s=e.scrollLeft})),["mouseup","mouseleave"].forEach((n=>{e.addEventListener(n,(()=>{t=!1,e.classList.remove("active")}))})),e.addEventListener("mousemove",(a=>{if(!t)return;a.preventDefault();const d=a.pageX-n;e.scrollLeft=s-d})),e.addEventListener("dragstart",(e=>e.preventDefault()))}))</script><script>let currentPage=1;const resultsPerPage=10;let fullData=[];function renderModalPage(e){const t=fullData.slice(0,100),l=10*(e-1),n=l+10,r=t.slice(l,n);let a="";const i=l+1,o=n>t.length?t.length:n;a+=`<div style="padding: 2px 0; font-size: 14px; color: #555;">\n      Showing ${i}–${o} of ${fullData.length.toLocaleString()} results\n    </div>`,a+="<ul>",r.forEach((e=>{a+=e.url?`<li><a href="${e.url}">${e.title} -Tpoint Tech <br><span style='color:#918a8a;font-size:13px;'>${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</span><br></a></li>`:`<li>${e.title} -Tpoint Tech <br> ${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</li>`})),a+="</ul>";const s=Math.ceil(t.length/10);if(s>1){a+='<div class="pagination-numbers" style="text-align:center;margin-top:15px;">';for(let t=1;t<=s;t++)a+=`<span class="pagination-number" onclick="renderModalPage(${t})" style="margin:0 5px;cursor:pointer;color:${t===e?"#000":"#007bff"};">${t}</span>`;a+="</div>"}$("#modalResults").html(a)}function changePage(e){currentPage=e,renderModalPage(currentPage)}function performSearch(e,t=!1){e.length<2?$("#results").empty().hide():$.get("/search",{q:e},(function(e){if($("#results").empty(),0===e.length?$("#results").append("<li>No results found</li>"):e.forEach((e=>{const t=e.url?`<li><a href="${e.url}">${e.title}</a></li>`:`<li>${e.title}</li>`;$("#results").append(t)})),$("#results").show(),t){fullData=e,currentPage=1,renderModalPage(currentPage);new bootstrap.Modal(document.getElementById("searchModal")).show()}}))}$("#searchInput").on("input",(function(){performSearch($(this).val().trim())})),$("#searchInput").on("keypress",(function(e){if(13===e.which){e.preventDefault();performSearch($(this).val().trim(),!0)}})),$(document).on("click",(function(e){$(e.target).closest("#searchContainer").length||$("#results").hide()}))</script><script>const searchInput=document.getElementById("searchInput"),iconSearch=document.getElementById("iconSearch"),iconClear=document.getElementById("iconClear"),searchBtn=document.getElementById("searchBtn");searchInput.addEventListener("input",(()=>{""!==searchInput.value.trim()?(iconSearch.style.display="none",iconClear.style.display="inline"):(iconSearch.style.display="inline",iconClear.style.display="none")})),searchBtn.addEventListener("click",(e=>{""!==searchInput.value.trim()&&(e.preventDefault(),searchInput.value="",iconSearch.style.display="inline",iconClear.style.display="none",$("#results").empty().hide(),searchInput.focus())}))</script></body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>