<?php
// Tutorial: Array Programs in Java - Tpoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array Programs in Java - Tpoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>Array Programs in Java - Tpoint Tech</h1>
        <body onload="highlightlink()"><div class="xyz shadow-sm"><div class="sticky-top p-0" style="position:sticky;background-color:var(--light)"><div class="container-fluid"><div class="position-relative p-0"><nav class="navbar navbar-expand-lg navbar-light px-4 py-lg-0"><a class="navbar-brand p-0" href="/"><img alt="Logo" height="48" id="logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" width="179"/></a><div class="w-100" id="search-box"><div id="searchContainer" style="position:relative"><input autocomplete="off" id="searchInput" placeholder="Search..." type="text"/> <button aria-label="Search" id="searchBtn" style="position:absolute;right:5px;top:50%;transform:translateY(-50%);background:0 0;border:none;cursor:pointer"><span id="iconSearch"><svg fill="none" height="20" stroke="green" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg> </span><span id="iconClear" style="display:none"><svg fill="none" height="20" stroke="red" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><line x1="6" x2="18" y1="6" y2="18"></line><line x1="6" x2="18" y1="18" y2="6"></line></svg></span></button><ul id="results"></ul></div></div><div class="jtp-nav"><button class="navbar-toggler float-left" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button"><span class="fa fa-bars"></span></button></div><div class="collapse navbar-collapse" id="navbarCollapse"><div class="navbar-nav"><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Tutorials</a><div class="dropdown-menu w-100 mt-0" id="tutorials"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("tutorials")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/python-tutorial">Python Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/django-tutorial">Django Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/numpy-tutorial">Numpy Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas">Pandas Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-tkinter">Tkinter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/pytorch">Pytorch Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/flask-tutorial">Flask Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/opencv">OpenCV Tutorial</a><h3 class="jtp-list-group-item">Java</h3><a class="jtp-list-group-item list-group-item-action" href="/java-tutorial">Java Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/servlet-tutorial">Servlet Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jsp-tutorial">JSP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-boot-tutorial">Spring Boot Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-tutorial">Spring Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-tutorial">Hibernate Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javafx-tutorial">JavaFX Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/java-web-services-tutorial">Java Web Services Tutorial</a><h3 class="jtp-list-group-item">.Net Framework</h3><a class="jtp-list-group-item list-group-item-action" href="/net-framework">.Net Framework Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-tutorial">C# Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/asp-net-tutorial">ASP.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/ado-net-tutorial">ADO.Net Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wpf">WPF Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">AI, ML and Data Science</h3><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-ai">Artificial Intelligence Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning">Machine Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-science">Data Science Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/deep-learning">Deep Learning Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/tensorflow">TensorFlow Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/artificial-neural-network">Artificial Neural Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/matplotlib">Matplotlib Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/python-scipy">Python Scipy Tutorial</a><h3 class="jtp-list-group-item">Cloud Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing">Cloud Computing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-tutorial">AWS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-azure">Microsoft Azure Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/salesforce">Salesforce Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/google-cloud-platform">GCP Tutorial</a><h3 class="jtp-list-group-item">B.Tech and MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-tutorial">DBMS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-tutorial">Data Structures Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system">Operating System Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-network-tutorial">Computer Network Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/daa-tutorial">DAA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/computer-organization-and-architecture-tutorial">Computer Organization Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/software-engineering">Software Engineering Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/data-mining">Data Mining Tutorial</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Technology</h3><a class="jtp-list-group-item list-group-item-action" href="/html-tutorial">HTML Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/css-tutorial">CSS Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-tutorial">JavaScript Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-tutorial">Jquery Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-8">Angular 8 Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/reactjs-tutorial">React Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/react-native-tutorial">React Native Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/nodejs-tutorial">Node.js Tutorial</a><h3 class="jtp-list-group-item">PHP</h3><a class="jtp-list-group-item list-group-item-action" href="/php-tutorial">PHP Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-tutorial">MySQL Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel">Laravel Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/wordpress-tutorial">WordPress Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/codeigniter-tutorial">CodeIgniter Tutorial</a><h3 class="jtp-list-group-item">Software Testing</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-tutorial">Software Testing Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-tutorial">Selenium Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jira-tutorial">JIRA Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/jmeter-tutorial">JMeter Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/postman">Postman Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/testng-tutorial">TestNG Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/soapui">SoapUI Tutorial</a> <a class="jtp-list-group-item list-group-item-action" href="/cucumber-testing">Cucumber Tutorial</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Interview</a><div class="dropdown-menu w-100 mt-0" id="interview-questions"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("interview-questions")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Technical Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions">Python Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/corejava-interview-questions">Java Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/dot-net-interview-questions">.Net Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/cpp-interview-questions">C++ Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/react-interview-questions">React Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/node-js-interview-questions">Node.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/angular-interview-questions">Angular Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hr-interview-questions">HR Interview Questions</a><h3 class="jtp-list-group-item">Java Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/spring-boot-interview-questions">Spring Boot Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/spring-interview-questions">Spring Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/hibernate-interview-questions">Hibernate Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jdbc-interview-questions">JDBC Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/servletinterview">Servlet Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/maven-interview-questions">Maven Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jenkins-interview-questions">Jenkins Interview Questions</a><h3 class="jtp-list-group-item">Python</h3><a class="jtp-list-group-item list-group-item-action" href="/django-interview-questions-and-answers">Django Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-pandas-interview-questions">Pandas Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/expressjs-interview-questions">Express.js Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-coding-interview-questions">Python Coding Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions-for-five-years-experienced">Python Interview Questions for 5 Years</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Web Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/html-interview-questions">HTML Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/css-interview-questions">CSS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/javascript-interview-questions">JavaScript Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">Jquery Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/php-interview-questions">PHP Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/laravel-interview-questions">Laravel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/ajax-interview-questions">AJAX Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/front-end-developer-interview-questions">Front-End Developer Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">jQuery Interview Questions</a><h3 class="jtp-list-group-item">Database Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/pl-sql-interview-questions">PL/SQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oracle-interview-questions">Oracle Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mongodb-interview-questions">MongoDB Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/redis-interview-questions-and-answers">Redis Interview Questions</a><h3 class="jtp-list-group-item">B.Tech / MCA</h3><a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/operating-system-interview-questions">Operating System Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/oops-interview-questions">OOPs Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/data-structure-interview-questions">DSA Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/networking-interview-questions">Computer Networks Interview Questions</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Important Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/c-interview-questions">C Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/power-bi-interview-questions">Power BI Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/excel-interview-questions">Excel Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/machine-learning-interview-questions">Machine Learning Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/aws-interview-questions">AWS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microservices-interview-questions">Microservices Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a><h3 class="jtp-list-group-item">Software Testing Interview</h3><a class="jtp-list-group-item list-group-item-action" href="/software-testing-interview-questions">Manual Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/selenium-interview-questions">Selenium Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/api-testing-interview-questions">API Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/etl-testing-interview-questions">ETL Testing Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/mobile-testing-interview-questions">Mobile Testing Interview Questions</a><h3 class="jtp-list-group-item">Company Interviews</h3><a class="jtp-list-group-item list-group-item-action" href="/ibm-interview-questions">IBM Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/adobe-interview-questions">Adobe Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/microsoft-interview-questions">Microsoft Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/amazon-interview-questions">Amazon Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/tcs-interview-questions">TCS Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/wipro-interview-questions">Wipro Interview Questions</a> <a class="jtp-list-group-item list-group-item-action" href="/accenture-interview-questions">Accenture Interview Questions</a></div></div></div></div></div></div></div><div class="nav-item show"><a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding:2.2rem">Compiler</a><div class="dropdown-menu w-100 mt-0" id="compiler-menu"><div class="container"><div class="row overlay jtp-megamenu"><div class="mega_menuClose"><button class="jtp-btn"><span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick='megaMenu_close("compiler-menu")' style="float:right;color:#fff;padding-right:4rem">×</span><br/></button></div><div class="mega_menu"><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Online Compilers</h3><a class="jtp-list-group-item list-group-item-action" href="/compiler/python">Python Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/java">Java Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/php">PHP Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/c">C Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/cpp">C++ Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html">HTML Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/javascript">JavaScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/typescript">TypeScript Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/r">R Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/swift">Swift Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/kotlin">Kotlin Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/go">Go Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/csharp">C# Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/perl">Perl Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/groovy">Groovy Online Compiler </a><a class="jtp-list-group-item list-group-item-action" href="/compiler/html-css-javascript">HTML, CSS &amp; JavaScript Online Editor</a></div></div><div class="col-md-6 col-lg-3 mb-3 mb-lg-0"><div class="list-group list-group-flush"><h3 class="jtp-list-group-item">Multiple Choice Questions</h3><a class="jtp-list-group-item list-group-item-action" href="/python-mcq">Python MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/java-mcq">Java MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/php-mcq">PHP MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/c-language-mcq">C Programming MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cpp-mcq">C++ MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/html-mcq">HTML mcq </a><a class="jtp-list-group-item list-group-item-action" href="/javascript-mcq">JavaScript MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/sql-mcq">SQL MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/operating-system-mcq">Operating System MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-fundamental-mcq">Computer Fundamental MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/computer-network-mcq">Computer Network MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/dbms-mcq">DBMS MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/data-structure-mcq">Data Structure MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/software-engineering-mcq">Software Engineering MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/cloud-computing-mcq">Cloud Computing MCQ </a><a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-mcq">Artificial Intelligence MCQ</a></div></div></div></div></div></div></div></div><ul class="d-flex"><li><div class="theme-icon dark-mode-icon" onclick="toggleDarkMode()"><i class="fas fa-moon" id="dark-mode-icon"></i></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#059862","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1C2833","--sidebar":"#eef7f0","--hoverprimary":"#05593a","--codecompile":"#dce8dc"})' style="background-color:#059862"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#0D4549","--secondary":"#b6dde2","--light":"#FFFFFF","--dark":"#17202A","--sidebar":"#F0FAFB","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#0d4549"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#231760","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#e7f6fd","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#231760"></div></li><li><div class="theme-icon" onclick='setThemeColors({"--primary":"#286562","--secondary":"#B6DDE2","--light":"#FFFFFF","--dark":"#1D1D27","--sidebar":"#ECF0F1","--hoverprimary":"#0b3133","--codecompile":"#d9e5e5"})' style="background-color:#286562"></div></li></ul></div></nav></div></div><div class="borderedelement"></div></div><script async="" src="https://cse.google.com/cse.js?cx=548338c60d2224ac4"></script><script>function applyTheme(e){const t=document.documentElement;Object.keys(e).forEach((o=>{t.style.setProperty(o,e[o])}))}function setThemeColors(e){localStorage.setItem("themeColors",JSON.stringify(e)),applyTheme(e)}window.addEventListener("load",(()=>{const e=JSON.parse(localStorage.getItem("themeColors"));e&&applyTheme(e)}))</script><script>function setThemeColors(t){const e=document.documentElement;Object.keys(t).forEach((o=>{e.style.setProperty(o,t[o])})),localStorage.setItem("themeColors",JSON.stringify(t))}function toggleDarkMode(){const t=document.body,e=document.getElementById("dark-mode-icon"),o=document.getElementById("logo");t.classList.toggle("night-mode")?(e.classList.remove("fa-moon"),e.classList.add("fa-sun"),localStorage.setItem("theme","night"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):(e.classList.remove("fa-sun"),e.classList.add("fa-moon"),localStorage.setItem("theme","day"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg")}window.addEventListener("load",(()=>{const t=JSON.parse(localStorage.getItem("themeColors")),e=localStorage.getItem("theme"),o=document.getElementById("logo");t&&setThemeColors(t),"night"===e?(document.body.classList.add("night-mode"),document.getElementById("dark-mode-icon").classList.remove("fa-moon"),document.getElementById("dark-mode-icon").classList.add("fa-sun"),o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg"):o.src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg"}))</script></div><div class="xyz sticky-top shadow-sm;" id="tpointtech-images" style="z-index:99"><div id="link" style="clear:both;position:sticky;z-index:99"><div class="ddsmoothmenu"><span><button class="jt-nav float-left accordion accordion-flush" data-bs-target="#navbarCollapse" data-bs-toggle="jt-nav" onclick="toggleSidebar()" style="color:#fff;width:50px;margin-top:8px;margin-left:20px;font-size:20px;background:0 0;box-shadow:none;border:none" type="button"><span class="fa fa-bars"></span></button></span><ul class="nav" style="display:inline-flex;margin-left:auto;line-height:2rem"><li class="nav-item"><a class="nav-link" href="/python-tutorial"><img alt="Python Logo" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/python.svg" width="16"/> Python</a></li><li class="nav-item"><a class="nav-link" href="/java-tutorial"><img alt="java" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Java.svg" width="16"/> Java</a></li><li class="nav-item"><a class="nav-link" href="/javascript-tutorial"><img alt="javascript" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/JS.svg" width="16"/> JavaScript</a></li><li class="nav-item"><a class="nav-link" href="/sql-tutorial"><img alt="sql" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/SQL.svg" width="16"/> SQL</a></li><li class="nav-item"><a class="nav-link" href="/c-programming-language-tutorial"><img alt="c" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/C.svg" width="16"/> C</a></li><li class="nav-item"><a class="nav-link" href="/cpp-tutorial"><img alt="c++" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Cpp.svg" width="16"/> C++</a></li><li class="nav-item"><a class="nav-link" href="/html-tutorial"><img alt="html" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/HTML.svg" width="16"/> HTML</a></li><li class="nav-item"><a class="nav-link" href="/css-tutorial"><img alt="css" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/CSS.svg" width="16"/> CSS</a></li><li class="nav-item"><a class="nav-link" href="/reactjs-tutorial"><img alt="React" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/react.svg" width="16"/> React</a></li><li class="nav-item"><a class="nav-link" href="/nodejs-tutorial"><img alt="Node.js" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/nodejs.svg" width="16"/> Node.js</a></li><li class="nav-item"><a class="nav-link" href="/spring-boot-tutorial"><img alt="Spring Boot" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/spring-boot.svg" width="16"/> Spring Boot</a></li><li class="nav-item"><a class="nav-link" href="/c-sharp-tutorial"><img alt="c#" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/csharp.svg" width="16"/> C#</a></li><li class="nav-item"><a class="nav-link" href="/php-tutorial"><img alt="php" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/PHP.svg" width="16"/> PHP</a></li><li class="nav-item"><a class="nav-link" href="/mysql-tutorial"><img alt="MySQL" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mysql.svg" width="16"/> MySQL</a></li><li class="nav-item"><a class="nav-link" href="/mongodb-tutorial"><img alt="MongoDB" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mongodb.svg" width="16"/> MongoDB</a></li><li class="nav-item"><a class="nav-link" href="/artificial-intelligence-ai"><img alt="Artificial Intelligence" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/AI.svg" width="16"/> AI</a></li><li class="nav-item"><a class="nav-link" href="/machine-learning"><img alt="Machine Learning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/ML.svg" width="16"/> ML</a></li><li class="nav-item"><a class="nav-link" href="/data-structures-and-algorithms-dsa"><img alt="data structures" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DS.svg" width="16"/> DSA</a></li><li class="nav-item"><a class="nav-link" href="/dbms-tutorial"><img alt="dbms" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DBMS.svg" width="16"/> DBMS</a></li><li class="nav-item"><a class="nav-link" href="/operating-system"><img alt="Operating System" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/OS.svg" width="16"/> OS</a></li><li class="nav-item"><a class="nav-link" href="/aptitude/quantitative"><img alt="aptitude" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Aptitude.svg" width="16"/> Aptitude</a></li><li class="nav-item"><a class="nav-link" href="/reasoning"><img alt="reasoning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Reasoning.svg" width="16"/> Reasoning</a></li></ul></div></div></div><section class="course-details"><div class="container-fluid"><div class="row"><div class="col-md-2 sidebar" id="sidebar"><div id="menu-sidebar"><div class="accordion accordion-flush" id="accordionFlushExample"><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading0"><button aria-controls="flush-collapse0" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse0" data-bs-toggle="collapse" type="button">Java Tutorial</button></h2><div aria-labelledby="flush-heading0" class="accordion-collapse collapse show" id="flush-collapse0"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-tutorial">Java Tutorial</a></li><li class="leftmenu"><a href="/history-of-java">History of Java</a></li><li class="leftmenu"><a href="/features-of-java">Features of Java</a></li><li class="leftmenu"><a href="/cpp-vs-java">Difference between C++ and Java</a></li><li class="leftmenu"><a href="/java-hello-world-program">Java Hello World Program</a></li><li class="leftmenu"><a href="/internal-details-of-hello-java-program">Program Internal</a></li><li class="leftmenu"><a href="/how-to-set-path-in-java">How to set path in Java</a></li><li class="leftmenu"><a href="/difference-between-jdk-jre-and-jvm">Difference between JDK, JRE and JVM</a></li><li class="leftmenu"><a href="/jvm-java-virtual-machine">JVM: Java Virtual Machine</a></li><li class="leftmenu"><a href="/java-variables">Java Variables</a></li><li class="leftmenu"><a href="/java-data-types">Data Types in Java</a></li><li class="leftmenu"><a href="/unicode-system-in-java">Unicode System in Java</a></li><li class="leftmenu"><a href="/java-operators">Java Operators</a></li><li class="leftmenu"><a href="/java-keywords">Java Keywords</a></li><li class="leftmenu"><a href="/java-program-to-find-the-minimum-number-of-operations-required-to-reach-n-steps">Java Program to Find the Minimum Number of Operations Required to Reach N Steps</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading1"><button aria-controls="flush-collapse1" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse1" data-bs-toggle="collapse" type="button">Control Statements</button></h2><div aria-labelledby="flush-heading1" class="accordion-collapse collapse show" id="flush-collapse1"><div class="accordion-body"><ul><li class="leftmenu"><a href="/control-statements-in-java">Control Statements in Java</a></li><li class="leftmenu"><a href="/java-if-else">Java If-else Statement</a></li><li class="leftmenu"><a href="/java-switch">Java Switch Statement</a></li><li class="leftmenu"><a href="/java-for-loop">Java For Loop</a></li><li class="leftmenu"><a href="/for-each-loop-in-java">For-Each Loop in Java</a></li><li class="leftmenu"><a href="/java-while-loop">Java While Loop</a></li><li class="leftmenu"><a href="/java-do-while-loop">Java Do-While Loop</a></li><li class="leftmenu"><a href="/java-break">Java Break</a></li><li class="leftmenu"><a href="/java-continue">Java Continue</a></li><li class="leftmenu"><a href="/java-comments">Java Comments</a></li><li class="leftmenu"><a href="/java-programs">Java Programs</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading2"><button aria-controls="flush-collapse2" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse2" data-bs-toggle="collapse" type="button">Java Object Class</button></h2><div aria-labelledby="flush-heading2" class="accordion-collapse collapse show" id="flush-collapse2"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-oops-concepts">OOPs Concepts in Java</a></li><li class="leftmenu"><a href="/java-naming-conventions">Java Naming Convention</a></li><li class="leftmenu"><a href="/java-classes-and-objects">Java Classes and Objects</a></li><li class="leftmenu"><a href="/method-in-java">Methods in Java</a></li><li class="leftmenu"><a href="/java-constructor">Constructors in Java</a></li><li class="leftmenu"><a href="/static-keyword-in-java">static keyword in Java</a></li><li class="leftmenu"><a href="/this-keyword-in-java">this Keyword in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading3"><button aria-controls="flush-collapse3" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse3" data-bs-toggle="collapse" type="button">Java Inheritance</button></h2><div aria-labelledby="flush-heading3" class="accordion-collapse collapse show" id="flush-collapse3"><div class="accordion-body"><ul><li class="leftmenu"><a href="/inheritance-in-java">Inheritance in Java</a></li><li class="leftmenu"><a href="/aggregation-in-java">Aggregation in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading4"><button aria-controls="flush-collapse4" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse4" data-bs-toggle="collapse" type="button">Java Polymorphism</button></h2><div aria-labelledby="flush-heading4" class="accordion-collapse collapse show" id="flush-collapse4"><div class="accordion-body"><ul><li class="leftmenu"><a href="/method-overloading-in-java">Method Overloading in Java</a></li><li class="leftmenu"><a href="/method-overriding-in-java">Method Overriding in Java</a></li><li class="leftmenu"><a href="/covariant-return-type-in-java">Covariant Return Type in Java</a></li><li class="leftmenu"><a href="/super-keyword-in-java">Super Keyword in Java</a></li><li class="leftmenu"><a href="/instance-initializer-block-in-java">Instance Initializer Block in Java</a></li><li class="leftmenu"><a href="/final-keyword-in-java">Final Keyword in Java</a></li><li class="leftmenu"><a href="/polymorphism-in-java">Polymorphism in Java</a></li><li class="leftmenu"><a href="/static-and-dynamic-binding-in-java">Static and Dynamic Binding in Java</a></li><li class="leftmenu"><a href="/downcasting-with-instanceof-operator">Java instanceof Keyword</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading5"><button aria-controls="flush-collapse5" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse5" data-bs-toggle="collapse" type="button">Java Abstraction</button></h2><div aria-labelledby="flush-heading5" class="accordion-collapse collapse show" id="flush-collapse5"><div class="accordion-body"><ul><li class="leftmenu"><a href="/abstract-class-in-java">Abstract class in Java</a></li><li class="leftmenu"><a href="/interface-in-java">Interface in java</a></li><li class="leftmenu"><a href="/difference-between-abstract-class-and-interface">Difference between Abstract Class and Interface in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading6"><button aria-controls="flush-collapse6" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse6" data-bs-toggle="collapse" type="button">Java Encapsulation</button></h2><div aria-labelledby="flush-heading6" class="accordion-collapse collapse show" id="flush-collapse6"><div class="accordion-body"><ul><li class="leftmenu"><a href="/packages-in-java">Packages in Java</a></li><li class="leftmenu"><a href="/access-modifiers-in-java">Access Modifiers in Java</a></li><li class="leftmenu"><a href="/encapsulation-in-java">Encapsulation in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading7"><button aria-controls="flush-collapse7" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse7" data-bs-toggle="collapse" type="button">Java Array</button></h2><div aria-labelledby="flush-heading7" class="accordion-collapse collapse show" id="flush-collapse7"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-arrays">Java Arrays</a></li><li class="leftmenu"><a href="/multidimensional-arrays-in-java">Multidimensional Arrays in Java</a></li><li class="leftmenu"><a href="/java-array-length">Java Array length</a></li><li class="leftmenu"><a href="/jagged-array-in-java">Jagged Array in Java</a></li><li class="leftmenu"><a href="/array-programs-in-java">Array Programs in Java</a></li><li class="leftmenu"><a href="/arrays-class-in-java">Arrays Class in Java</a></li><li class="leftmenu"><a href="/array-of-objects-in-java">Array of Objects in Java</a></li><li class="leftmenu"><a href="/string-array-in-java">String Arrays in Java</a></li><li class="leftmenu"><a href="/reverse-an-array-in-java">Reverse an Array in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading8"><button aria-controls="flush-collapse8" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse8" data-bs-toggle="collapse" type="button">Java OOPs Misc</button></h2><div aria-labelledby="flush-heading8" class="accordion-collapse collapse show" id="flush-collapse8"><div class="accordion-body"><ul><li class="leftmenu"><a href="/object-class-in-java">Object class in Java</a></li><li class="leftmenu"><a href="/object-cloning">Object Cloning in Java | clone() Method</a></li><li class="leftmenu"><a href="/java-math">Java Math Class (Methods with Examples)</a></li><li class="leftmenu"><a href="/wrapper-class-in-java">Wrapper Class in Java</a></li><li class="leftmenu"><a href="/recursion-in-java">Recursion in Java</a></li><li class="leftmenu"><a href="/call-by-value-and-call-by-reference-in-java">Call by Value and Call by Reference in Java</a></li><li class="leftmenu"><a href="/java-enums">Java Enums</a></li><li class="leftmenu"><a href="/command-line-arguments-in-java">Command Line Arguments in Java</a></li><li class="leftmenu"><a href="/difference-between-object-and-class">Difference between Object and Class</a></li><li class="leftmenu"><a href="/method-overloading-vs-method-overriding-in-java">Difference Between Method Overloading and Method Overriding in Java</a></li><li class="leftmenu"><a href="/difference-between-class-and-interface-in-java">Difference Between Class and Interface in Java</a></li><li class="leftmenu"><a href="/abstraction-in-java">Abstraction in Java</a></li><li class="leftmenu"><a href="/compile-time-polymorphism-in-java">Compile-Time Polymorphism in Java</a></li><li class="leftmenu"><a href="/dynamic-method-dispatch-in-java">Dynamic Method Dispatch in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading9"><button aria-controls="flush-collapse9" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse9" data-bs-toggle="collapse" type="button">Java String</button></h2><div aria-labelledby="flush-heading9" class="accordion-collapse collapse show" id="flush-collapse9"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-string">Java Strings</a></li><li class="leftmenu"><a href="/why-string-is-immutable-in-java">Why String is Immutable in Java</a></li><li class="leftmenu"><a href="/string-comparison-in-java">String Comparison in Java</a></li><li class="leftmenu"><a href="/string-concatenation-in-java">String Concatenation in Java</a></li><li class="leftmenu"><a href="/substring-in-java">Substring in Java</a></li><li class="leftmenu"><a href="/java-string-methods">Java String Methods</a></li><li class="leftmenu"><a href="/stringbuffer-in-java">StringBuffer in Java</a></li><li class="leftmenu"><a href="/stringbuilder-in-java">StringBuilder in Java</a></li><li class="leftmenu"><a href="/difference-between-string-and-stringbuffer">Difference between String and StringBuffer</a></li><li class="leftmenu"><a href="/difference-between-stringbuffer-and-stringbuilder">StringBuffer vs StringBuilder in Java</a></li><li class="leftmenu"><a href="/how-to-create-immutable-class-in-java">How to create Immutable Class in Java</a></li><li class="leftmenu"><a href="/understanding-toString()-method">Java toString method</a></li><li class="leftmenu"><a href="/string-tokenizer-in-java">StringTokenizer class</a></li><li class="leftmenu"><a href="/java-string-faqs">Java String FAQs</a></li><li class="leftmenu"><a href="/how-to-reverse-a-string-in-java">How to Reverse a String in Java?</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading10"><button aria-controls="flush-collapse10" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse10" data-bs-toggle="collapse" type="button">Java Regex</button></h2><div aria-labelledby="flush-heading10" class="accordion-collapse collapse show" id="flush-collapse10"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-regex">Java Regular Expressions (Regex)</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading11"><button aria-controls="flush-collapse11" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse11" data-bs-toggle="collapse" type="button">Exception Handling</button></h2><div aria-labelledby="flush-heading11" class="accordion-collapse collapse show" id="flush-collapse11"><div class="accordion-body"><ul><li class="leftmenu"><a href="/exception-handling-in-java">Exception Handling in Java</a></li><li class="leftmenu"><a href="/try-catch-in-java">Java try-catch Block</a></li><li class="leftmenu"><a href="/multiple-catch-block-in-java">Multiple Catch Block in Java</a></li><li class="leftmenu"><a href="/nested-try-block-in-java">Nested Try Block in Java</a></li><li class="leftmenu"><a href="/finally-block-in-java">Finally Block in Java</a></li><li class="leftmenu"><a href="/java-throw-exception">Java Throw Exception</a></li><li class="leftmenu"><a href="/exception-propagation-in-java">Exception Propagation in Java</a></li><li class="leftmenu"><a href="/java-throws">Java throws Keyword</a></li><li class="leftmenu"><a href="/difference-between-throw-and-throws-in-java">Difference Between throw and throws in Java</a></li><li class="leftmenu"><a href="/difference-between-final-finally-and-finalize">Difference between final, finally and finalize in Java</a></li><li class="leftmenu"><a href="/exception-handling-with-method-overriding">Exception Handling with Method Overriding</a></li><li class="leftmenu"><a href="/custom-exception-in-java">Custom Exception in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading12"><button aria-controls="flush-collapse12" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse12" data-bs-toggle="collapse" type="button">Java Inner Class</button></h2><div aria-labelledby="flush-heading12" class="accordion-collapse collapse show" id="flush-collapse12"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-inner-class">Inner Classes in Java</a></li><li class="leftmenu"><a href="/member-inner-class">Java Member Inner class</a></li><li class="leftmenu"><a href="/anonymous-inner-class">Anonymous Inner class</a></li><li class="leftmenu"><a href="/local-inner-class">Local Inner class</a></li><li class="leftmenu"><a href="/static-nested-class">static nested class</a></li><li class="leftmenu"><a href="/nested-interface">Java Nested Interface</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading13"><button aria-controls="flush-collapse13" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse13" data-bs-toggle="collapse" type="button">Java Multithreading</button></h2><div aria-labelledby="flush-heading13" class="accordion-collapse collapse show" id="flush-collapse13"><div class="accordion-body"><ul><li class="leftmenu"><a href="/multithreading-in-java">Multithreading in Java</a></li><li class="leftmenu"><a href="/thread-life-cycle-in-java">Thread Life Cycle in Java</a></li><li class="leftmenu"><a href="/how-to-create-a-thread-in-java">How to Create Thread in Java?</a></li><li class="leftmenu"><a href="/thread-scheduler-in-java">Thread Scheduler in Java</a></li><li class="leftmenu"><a href="/thread-sleep-in-java">Thread.sleep() in Java with Examples</a></li><li class="leftmenu"><a href="/can-we-start-a-thread-twice">Start a thread twice</a></li><li class="leftmenu"><a href="/what-if-we-call-java-run-method-directly">Calling run() method</a></li><li class="leftmenu"><a href="/join-thread-in-java">Joining Threads in Java</a></li><li class="leftmenu"><a href="/java-naming-thread-and-current-thread">Java Naming Thread and Current Thread</a></li><li class="leftmenu"><a href="/thread-priority-in-java">Thread Priority in Java</a></li><li class="leftmenu"><a href="/daemon-thread-in-java">Daemon Thread in Java</a></li><li class="leftmenu"><a href="/java-thread-pool">Thread Pool in Java</a></li><li class="leftmenu"><a href="/threadgroup-in-java">ThreadGroup in Java</a></li><li class="leftmenu"><a href="/ShutdownHook-thread">ShutdownHook</a></li><li class="leftmenu"><a href="/multitasking-in-multithreading">Performing multiple task</a></li><li class="leftmenu"><a href="/garbage-collection-in-java">Garbage Collection in Java</a></li><li class="leftmenu"><a href="/java-runtime-class">Runtime class</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading14"><button aria-controls="flush-collapse14" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse14" data-bs-toggle="collapse" type="button">Java Synchronization</button></h2><div aria-labelledby="flush-heading14" class="accordion-collapse collapse show" id="flush-collapse14"><div class="accordion-body"><ul><li class="leftmenu"><a href="/synchronization-in-java">Synchronization in Java</a></li><li class="leftmenu"><a href="/java-synchronized-block">Java Synchronized Block</a></li><li class="leftmenu"><a href="/static-synchronization-in-java">Static Synchronization in Java</a></li><li class="leftmenu"><a href="/deadlock-in-java">Deadlock in Java</a></li><li class="leftmenu"><a href="/inter-thread-communication-in-java">Inter-thread Communication in Java</a></li><li class="leftmenu"><a href="/interrupting-a-thread">Interrupting Thread</a></li><li class="leftmenu"><a href="/reentrant-monitor-in-java">Reentrant Monitor</a></li><li class="leftmenu"><a href="/volatile-keyword-in-java">Volatile Keyword in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading15"><button aria-controls="flush-collapse15" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse15" data-bs-toggle="collapse" type="button">Java I/O</button></h2><div aria-labelledby="flush-heading15" class="accordion-collapse collapse show" id="flush-collapse15"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-io">Java Input/Output</a></li><li class="leftmenu"><a href="/java-fileoutputstream-class">FileOutputStream</a></li><li class="leftmenu"><a href="/java-fileinputstream-class">FileInputStream</a></li><li class="leftmenu"><a href="/java-bufferedoutputstream-class">BufferedOutputStream</a></li><li class="leftmenu"><a href="/java-bufferedinputstream-class">BufferedInputStream</a></li><li class="leftmenu"><a href="/java-sequenceinputstream-class">SequenceInputStream</a></li><li class="leftmenu"><a href="/java-bytearrayoutputstream-class">ByteArrayOutputStream</a></li><li class="leftmenu"><a href="/java-bytearrayinputstream-class">ByteArrayInputStream</a></li><li class="leftmenu"><a href="/java-dataoutputstream-class">DataOutputStream</a></li><li class="leftmenu"><a href="/java-datainputstream-class">DataInputStream</a></li><li class="leftmenu"><a href="/java-filteroutputstream-class">Java FilterOutputStream</a></li><li class="leftmenu"><a href="/java-filterinputstream-class">Java FilterInputStream</a></li><li class="leftmenu"><a href="/java-objectstream-class">Java ObjectStream</a></li><li class="leftmenu"><a href="/java-objectstreamfield-class">Java ObjectStreamField</a></li><li class="leftmenu"><a href="/java-console-class">Console</a></li><li class="leftmenu"><a href="/java-writer-class">Writer</a></li><li class="leftmenu"><a href="/java-reader-class">Reader</a></li><li class="leftmenu"><a href="/java-filewriter-class">FileWriter</a></li><li class="leftmenu"><a href="/java-filereader-class">FileReader</a></li><li class="leftmenu"><a href="/java-bufferedwriter-class">BufferedWriter</a></li><li class="leftmenu"><a href="/java-bufferedreader-class">BufferedReader</a></li><li class="leftmenu"><a href="/java-chararrayreader-class">CharArrayReader</a></li><li class="leftmenu"><a href="/java-chararraywriter-class">CharArrayWriter</a></li><li class="leftmenu"><a href="/java-printstream-class">PrintStream</a></li><li class="leftmenu"><a href="/java-printwriter-class">PrintWriter</a></li><li class="leftmenu"><a href="/java-outputstreamwriter-class">OutputStreamWriter</a></li><li class="leftmenu"><a href="/java-inputstreamreader-class">InputStreamReader</a></li><li class="leftmenu"><a href="/java-pushbackinputstream-class">PushbackInputStream</a></li><li class="leftmenu"><a href="/java-pushbackreader-class">PushbackReader</a></li><li class="leftmenu"><a href="/java-stringwriter-class">StringWriter</a></li><li class="leftmenu"><a href="/java-stringreader-class">StringReader</a></li><li class="leftmenu"><a href="/java-pipedwriter-class">PipedWriter</a></li><li class="leftmenu"><a href="/java-pipedreader-class">PipedReader</a></li><li class="leftmenu"><a href="/java-filterwriter-class">FilterWriter</a></li><li class="leftmenu"><a href="/java-filterreader-class">FilterReader</a></li><li class="leftmenu"><a href="/scanner-class-in-java">Scanner class in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading16"><button aria-controls="flush-collapse16" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse16" data-bs-toggle="collapse" type="button">File Handling in Java</button></h2><div aria-labelledby="flush-heading16" class="accordion-collapse collapse show" id="flush-collapse16"><div class="accordion-body"><ul><li class="leftmenu"><a href="/file-handling-in-java">File Handling in Java</a></li><li class="leftmenu"><a href="/java-file-class">Java File</a></li><li class="leftmenu"><a href="/how-to-create-a-file-in-java">How to Create a File in Java?</a></li><li class="leftmenu"><a href="/how-to-read-file-line-by-line-in-java">How to read file line by line in Java?</a></li><li class="leftmenu"><a href="/how-to-delete-a-file-in-java">How to delete a file in Java?</a></li><li class="leftmenu"><a href="/java-filepermission-class">Java FilePermission</a></li><li class="leftmenu"><a href="/java-filedescriptor-class">Java FileDescriptor</a></li><li class="leftmenu"><a href="/java-randomaccessfile-class">Java RandomAccessFile</a></li><li class="leftmenu"><a href="/how-to-create-zip-file-in-java">How to Create a Zip File in Java?</a></li><li class="leftmenu"><a href="/read-and-print-all-files-from-a-zip-file-in-java">How to Read and Print All Files From a Zip File in Java?</a></li><li class="leftmenu"><a href="/how-to-write-to-a-file-in-java">How to Write to a File in Java</a></li><li class="leftmenu"><a href="/java-path-vs-file">Java Path Vs File</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading17"><button aria-controls="flush-collapse17" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse17" data-bs-toggle="collapse" type="button">Java Serialization</button></h2><div aria-labelledby="flush-heading17" class="accordion-collapse collapse show" id="flush-collapse17"><div class="accordion-body"><ul><li class="leftmenu"><a href="/serialization-in-java">Java Serialization | Serialization and Deserialization in Java</a></li><li class="leftmenu"><a href="/transient-keyword-in-java">transient Keyword in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading18"><button aria-controls="flush-collapse18" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse18" data-bs-toggle="collapse" type="button">Java Networking</button></h2><div aria-labelledby="flush-heading18" class="accordion-collapse collapse show" id="flush-collapse18"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-networking">Networking Concepts</a></li><li class="leftmenu"><a href="/socket-programming">Socket Programming</a></li><li class="leftmenu"><a href="/URL-class">URL class</a></li><li class="leftmenu"><a href="/URLConnection-class">URLConnection class</a></li><li class="leftmenu"><a href="/java-http-url-connection">HttpURLConnection</a></li><li class="leftmenu"><a href="/InetAddress-class">InetAddress class</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading19"><button aria-controls="flush-collapse19" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse19" data-bs-toggle="collapse" type="button">Java Reflection</button></h2><div aria-labelledby="flush-heading19" class="accordion-collapse collapse show" id="flush-collapse19"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-reflection">Reflection API</a></li><li class="leftmenu"><a href="/new-instance()-method">newInstance() method</a></li><li class="leftmenu"><a href="/understanding-javap-tool">javap tool</a></li><li class="leftmenu"><a href="/creating-javap-tool">creating javap tool</a></li><li class="leftmenu"><a href="/creating-appletviewer-tool">creating appletviewer</a></li><li class="leftmenu"><a href="/how-to-call-private-method-from-another-class-in-java">Call private method</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading20"><button aria-controls="flush-collapse20" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse20" data-bs-toggle="collapse" type="button">Java Collections</button></h2><div aria-labelledby="flush-heading20" class="accordion-collapse collapse show" id="flush-collapse20"><div class="accordion-body"><ul><li class="leftmenu"><a href="/collections-in-java">Collections in Java</a></li><li class="leftmenu"><a href="/java-arraylist">Java ArrayList</a></li><li class="leftmenu"><a href="/java-linkedlist">Java LinkedList</a></li><li class="leftmenu"><a href="/difference-between-arraylist-and-linkedlist">Difference Between ArrayList and LinkedList in Java</a></li><li class="leftmenu"><a href="/java-list">Java List Interface</a></li><li class="leftmenu"><a href="/java-hashset">Java HashSet</a></li><li class="leftmenu"><a href="/java-linkedhashset">Java LinkedHashSet</a></li><li class="leftmenu"><a href="/java-treeset">Java TreeSet</a></li><li class="leftmenu"><a href="/java-priorityqueue">Queue &amp; PriorityQueue</a></li><li class="leftmenu"><a href="/java-deque-arraydeque">Deque &amp; ArrayDeque</a></li><li class="leftmenu"><a href="/java-map">Java Map Interface</a></li><li class="leftmenu"><a href="/java-hashmap">Java HashMap</a></li><li class="leftmenu"><a href="/working-of-hashmap-in-java">Working of HashMap</a></li><li class="leftmenu"><a href="/java-linkedhashmap">Java LinkedHashMap</a></li><li class="leftmenu"><a href="/java-treemap">Java TreeMap</a></li><li class="leftmenu"><a href="/java-hashtable">Java Hashtable</a></li><li class="leftmenu"><a href="/difference-between-hashmap-and-hashtable">Difference between HashMap and Hashtable</a></li><li class="leftmenu"><a href="/java-enumset">Java EnumSet</a></li><li class="leftmenu"><a href="/java-enummap">Java EnumMap</a></li><li class="leftmenu"><a href="/java-collections-class">Collections class</a></li><li class="leftmenu"><a href="/Sorting-in-collection-framework">Sorting Collections</a></li><li class="leftmenu"><a href="/comparable-interface-in-java">Java Comparable</a></li><li class="leftmenu"><a href="/java-comparator">Java Comparator</a></li><li class="leftmenu"><a href="/difference-between-comparable-and-comparator">Comparable vs Comparator in Java</a></li><li class="leftmenu"><a href="/properties-class-in-java">Properties class</a></li><li class="leftmenu"><a href="/difference-between-arraylist-and-vector">Difference Between ArrayList and Vector in Java</a></li><li class="leftmenu"><a href="/java-vector">Java Vector</a></li><li class="leftmenu"><a href="/java-stack">Java Stack</a></li><li class="leftmenu"><a href="/java-collection">Java Collection Interface</a></li><li class="leftmenu"><a href="/java-iterator">Java Iterator</a></li><li class="leftmenu"><a href="/java-deque">Java Deque Interface</a></li><li class="leftmenu"><a href="/working-of-hashset-in-java">Working of HashSet in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading21"><button aria-controls="flush-collapse21" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse21" data-bs-toggle="collapse" type="button">Java 5 Features</button></h2><div aria-labelledby="flush-heading21" class="accordion-collapse collapse show" id="flush-collapse21"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-generics">Java Generics</a></li><li class="leftmenu"><a href="/java-annotations">Java Annotations</a></li><li class="leftmenu"><a href="/autoboxing-and-unboxing-in-java">Autoboxing and Unboxing in Java</a></li><li class="leftmenu"><a href="/java-varargs">Java Varargs</a></li><li class="leftmenu"><a href="/java-static-import">Java Static Import</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading22"><button aria-controls="flush-collapse22" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse22" data-bs-toggle="collapse" type="button">Java 8 Features</button></h2><div aria-labelledby="flush-heading22" class="accordion-collapse collapse show" id="flush-collapse22"><div class="accordion-body"><ul><li class="leftmenu"><a href="/java-8-features">Java 8 Features</a></li><li class="leftmenu"><a href="/java-lambda-expressions">Java Lambda Expressions</a></li><li class="leftmenu"><a href="/java-8-method-reference">Java Method References</a></li><li class="leftmenu"><a href="/functional-interfaces-in-java">Functional Interfaces in Java</a></li><li class="leftmenu"><a href="/java-8-stream">Java Stream API</a></li><li class="leftmenu"><a href="/java-8-stream-filter">Java Stream Filter</a></li><li class="leftmenu"><a href="/java-base64-encode-decode">Java Base64 Encode Decode</a></li><li class="leftmenu"><a href="/java-default-methods">Java Default Methods</a></li><li class="leftmenu"><a href="/java-8-foreach">Java 8 forEach() method</a></li><li class="leftmenu"><a href="/collectors-class-in-java">Collectors class in Java</a></li><li class="leftmenu"><a href="/optional-class-in-java">Optional class in Java</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading23"><button aria-controls="flush-collapse23" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse23" data-bs-toggle="collapse" type="button">Java JDBC</button></h2><div aria-labelledby="flush-heading23" class="accordion-collapse collapse show" id="flush-collapse23"><div class="accordion-body"><ul><li class="leftmenu"><a href="/jdbc-tutorial">JDBC in Java</a></li><li class="leftmenu"><a href="/jdbc-driver">JDBC Driver</a></li><li class="leftmenu"><a href="/steps-to-connect-to-the-database-in-java">5 Steps to Connect Database in Java</a></li><li class="leftmenu"><a href="/example-to-connect-to-the-oracle-database">Java Database Connectivity with Oracle</a></li><li class="leftmenu"><a href="/example-to-connect-to-the-mysql-database">Java Database Connectivity with MySQL</a></li><li class="leftmenu"><a href="/connectivity-with-access-without-dsn">Access without DSN</a></li><li class="leftmenu"><a href="/DriverManager-class">DriverManager</a></li><li class="leftmenu"><a href="/Connection-interface">Java Connection interface</a></li><li class="leftmenu"><a href="/Statement-interface">Java Statement Interface</a></li><li class="leftmenu"><a href="/ResultSet-interface">ResultSet</a></li><li class="leftmenu"><a href="/PreparedStatement-interface">PreparedStatement interface</a></li><li class="leftmenu"><a href="/ResultSetMetaData-interface">Java ResultSetMetaData Interface</a></li><li class="leftmenu"><a href="/DatabaseMetaData-interface">DatabaseMetaData</a></li><li class="leftmenu"><a href="/storing-image-in-oracle-database">Store image</a></li><li class="leftmenu"><a href="/retrieving-image-from-oracle-database">Retrieve image</a></li><li class="leftmenu"><a href="/storing-file-in-oracle-database">Store file</a></li><li class="leftmenu"><a href="/retrieving-file-from-oracle-database">Retrieve file</a></li><li class="leftmenu"><a href="/CallableStatement-interface">CallableStatement</a></li><li class="leftmenu"><a href="/transaction-management-in-jdbc">Transaction Management</a></li><li class="leftmenu"><a href="/batch-processing-in-jdbc">Batch Processing</a></li><li class="leftmenu"><a href="/jdbc-rowset">RowSet Interface</a></li><li class="leftmenu"><a href="/jdbc-mcq">JDBC MCQ</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading24"><button aria-controls="flush-collapse24" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse24" data-bs-toggle="collapse" type="button">RMI</button></h2><div aria-labelledby="flush-heading24" class="accordion-collapse collapse show" id="flush-collapse24"><div class="accordion-body"><ul><li class="leftmenu"><a href="/RMI">Java RMI</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading25"><button aria-controls="flush-collapse25" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse25" data-bs-toggle="collapse" type="button">Internationalization</button></h2><div aria-labelledby="flush-heading25" class="accordion-collapse collapse show" id="flush-collapse25"><div class="accordion-body"><ul><li class="leftmenu"><a href="/internationalization">Internationalization</a></li><li class="leftmenu"><a href="/ResourceBundle-class">ResourceBundle class</a></li><li class="leftmenu"><a href="/internationalizing-date">I18N with Date</a></li><li class="leftmenu"><a href="/internationalizing-time">I18N with Time</a></li><li class="leftmenu"><a href="/internationalizing-number">I18N with Number</a></li><li class="leftmenu"><a href="/internationalizing-currency">I18N with Currency</a></li></ul></div></div></div><div class="accordion-item" style="background-color:var(--sidebar)"><h2 class="accordion-header" id="flush-heading26"><button aria-controls="flush-collapse26" aria-expanded="true" class="accordion-button sidebar-btn" data-bs-target="#flush-collapse26" data-bs-toggle="collapse" type="button">Java Projects</button></h2><div aria-labelledby="flush-heading26" class="accordion-collapse collapse show" id="flush-collapse26"><div class="accordion-body"><ul><li class="leftmenu"><a href="/free-java-projects">Free Java Projects</a></li><li class="leftmenu"><a href="/payment-billing-product-project">Payment Bill(JSP)</a></li><li class="leftmenu"><a href="/transport-company-project">Transport (JSP)</a></li><li class="leftmenu"><a href="/connect-globe-project">Connect Globe (JSP)</a></li><li class="leftmenu"><a href="/online-banking-project">Online Banking (JSP)</a></li><li class="leftmenu"><a href="/online-quiz-project">Online Quiz (JSP)</a></li><li class="leftmenu"><a href="/city-classified-and-search-project">Classified (JSP)</a></li><li class="leftmenu"><a href="/mailcasting-project">Mailcasting (JSP)</a></li><li class="leftmenu"><a href="/online-library-project">Online Library (JSP)</a></li><li class="leftmenu"><a href="/pharmacy-project">Pharmacy (JSP)</a></li><li class="leftmenu"><a href="/company-mailer-servlet-project">Mailer (Servlet)</a></li><li class="leftmenu"><a href="/baby-care-project-in-servlet">Baby Care (Servlet)</a></li><li class="leftmenu"><a href="/broadcasting-chat-server-project">Chat Server (Core)</a></li><li class="leftmenu"><a href="/library-management-system-in-java-swing">Library (Core)</a></li><li class="leftmenu"><a href="/online-exam-project-in-java-swing-without-database">Exam System (Core)</a></li><li class="leftmenu"><a href="/java-application-world-project">Java Apps (Core)</a></li><li class="leftmenu"><a href="/fee-report-project-in-java">Fee Report (Core)</a></li><li class="leftmenu"><a href="/fee-management-project-in-servlet">Fee (Servlet)</a></li><li class="leftmenu"><a href="/elibrary-project-in-servlet">eLibrary (Servlet)</a></li><li class="leftmenu"><a href="/embedded-system-project-fire-detection-and-control-system">Fire Detection</a></li><li class="leftmenu"><a href="/embedded-system-project-rfid-based-attendance-system">Attendance System</a></li><li class="leftmenu"><a href="/java-mcq">Java MCQ</a></li></ul></div></div></div></div></div></div><div class="col-12 col-md-7"><div class="overview"><div id="city"><table><tbody><tr><td><div id="bottomnextup"><a class="next" href="arrays-class-in-java">next →</a> <a class="next" href="jagged-array-in-java">← prev</a></div><h1 class="h1">Array Programs in Java</h1><div style="font-size:14px;margin-top:5px;margin-bottom:5px;color:#6f6e6e"><span>6 May 2025</span> | <span><i aria-hidden="true" class="fa fa-clock-o"></i> 30 min read</span></div><p>In Java, an array is a linear data structure that has a collection of the same data type. These elements are stored in a contiguous memory location. In this section, we will discuss a variety of array programs, including array operations, manipulation, sorting, searching, etc.</p><h3 class="h3">1. Java program to find the sum of the array elements.</h3><p>To find the sum of the array's elements, first we have defined and declared an array. After that, we have defined a sum() method that adds array elements. Inside this method, the loop iterates over each element of the array and adds an element to the sum variable, repeatedly. In the main() method, we have called the sum() method that returns the sum of the array elements.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">class Main {
    static int arr[] = { 7, 4, 10, 9, 13, 26 };
    // method for the sum of elements 
    static int sum()
    {
        int i, sum = 0; 
        // Iterate through all elements and add them to the sum
        for (i = 0; i &lt; arr.length; i++)
            sum += arr[i];
        return sum;
    }
    public static void main(String[] args)
    {
        System.out.println("The sum of the given array is: "+ sum());
    }
}
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java1" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
The sum of the given array is: 69</pre></div><h3 class="h3">2. Java program to find the reverse of an array.</h3><p>Reversing an array means writing an array from the last element to the first element. First, we have initializead an array. The loop iterates over the array until the array is reversed. We swap the first element with the last, the second with the second last, and so on. At last, we convert the array into a string and print the reversed array.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.Arrays;
public class Main {
    public static void main(String[] args) {     
        int[] arr = {1, 2, 3, 4, 5};
        // Swap elements from start to end
        for (int i = 0; i &lt; arr.length / 2; i++) {
            int t = arr[i];
            arr[i] = arr[arr.length - 1 - i];
            arr[arr.length - 1 - i] = t;
        }
        System.out.println("" + Arrays.toString(arr));
    }
}
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java2" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
[5, 4, 3, 2, 1]</pre></div><h3 class="h3">3. Java program to merge two arrays.</h3><p>There are various ways to merge two arrays. But in this program, we have used user-defined logic to merge two arrays. This method is useful when we need full control over the merging process without relying on built-in functions. It directly merges the arrays.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.Arrays;
public class Main {
    public static void main(String[] args) {
        int arr1[] = { 23, 45, 56, 78, 90};
        int arr2[] = { 3, 4, 6, 8, 9, 0, 7};
        // determining the length of both arrays
        int sizearr1 = arr1.length;
        int sizearr2 = arr2.length;
        // resultant array size
        int sizearr3 = sizearr1 + sizearr2;
        // Creating a new array 
        int[] arr3 = new int[sizearr3];
        // Loop to store the elements of the first array into the resultant array
        for (int i = 0; i &lt; sizearr1; i = i + 1) {  
            // Storing the elements in the resultant array
            arr3[i] = arr1[i];
        }
        // Loop to concatenate the elements of the second array into the resultant array
        for (int i = 0; i &lt; sizearr2; i = i + 1) {
            // Storing the elements in the resultant array
            arr3[sizearr1 + i] = arr2[i];
        }
        System.out.println("" + Arrays.toString(arr3));
    }
}
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java3" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
[23, 45, 56, 78, 90, 3, 4, 6, 8, 9, 0, 7]</pre></div><h3 class="h3">4. Java program to find the second most significant element in a sorted matrix.</h3><p>In a sorted matrix, the rows and columns of the elements are placed in ascending order. We can navigate the matrix and note the largest and second-largest elements to determine the second-largest element. The second-largest element will have been stored when the traverse is complete.</p><p>The program uses a simple approach to find the second-largest element in a sorted matrix. It applies a nested loop to traverse the matrix in reverse order and compares each element with the largest and second-largest elements found so far. The program updates the largest and second-largest variables accordingly. Finally, it prints the value of the second-largest element.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main
{  
    public static void main(String[] args)   
    {  
        int[][] matrix =   
        {  
            {1,2,3},  
            {4,5,6},  
            {7,8,9}  
        };  
        int rows=matrix.length;  
        int cols=matrix[0].length;  
        int largest=matrix[rows-1][cols-1]; // Initialize largest with the bottom-right element  
        int secondLargest=matrix[rows-1][cols-2]; // Initialize secondLargest with the element before largest  
          
        // Traverse the matrix in reverse order  
        for (int i=rows-1;i&gt;=0;i--)   
        {  
            for (int j=cols-1;j&gt;=0;j--)   
            {  
                if (matrix[i][j]&gt;largest)   
                {  
                    secondLargest=largest; // Update secondLargest to the previous largest  
                    largest=matrix[i][j]; // Update largest to the new largest element  
                }   
              else if(matrix[i][j]&gt;secondLargest&amp;&amp;matrix[i][j]&lt;largest)   
                {  
                    secondLargest=matrix[i][j];   
                }  
            }  
        }  
        System.out.println("Second largest element in the sorted matrix is: "+secondLargest);  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java4" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Second largest element in the sorted matrix is: 8</pre></div><p><strong>Complexity Analysis</strong></p><p><strong>Time Complexity:</strong> O(rows * cols), where rows and cols are the dimensions of the matrix.</p><p><strong>Space Complexity:</strong> O(1), as we use constant additional space.</p><h3 class="h3">5. Java program to find the k-th smallest element in a sorted matrix.</h3><p>In a sorted matrix, elements are arranged in ascending order, both row-wise and column-wise. The task is to find the kth smallest element in the matrix.</p><p>The program uses a min-heap implemented with a PriorityQueue to find the kth smallest element in a sorted matrix. The findKthSmallest() method initializes the minHeap and adds the elements from the first column. It then performs k-1 iterations, extracting the minimum element, finding its indices, and adding the next element from the same row to the minHeap. Finally, the method returns the kth smallest element. The main function showcases the method by providing a sample matrix and k value.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.*;  
public class Main  
{  
    public static int findKthSmallest(int[][] matrix,int k)   
    {  
        int rows=matrix.length;  
        int cols=matrix[0].length;  
        PriorityQueue&lt;Integer&gt; minHeap=new PriorityQueue&lt;&gt;();  
        for (int i=0;i&lt;rows;i++) {  
            minHeap.add(matrix[i][0]);  
        }  
        // Perform k-1 iterations  
        for (int i=0;i&lt;k-1;i++)   
        {  
            int minElement=minHeap.poll(); // Extract the minimum element  
            // Get the row and column index of the extracted element  
            int rowIndex=-1;  
            int colIndex=-1;  
            for (int j=0;j&lt;rows;j++)   
            {  
                for (int p=0;p&lt;cols;p++)   
                {  
                    if (matrix[j][p]==minElement)   
                    {  
                        rowIndex=j;  
                        colIndex=p+1;  
                        break;  
                    }  
                }  
            }  
            // Add the next element from the same row to the min-heap  
            if (colIndex&lt;cols) {  
                minHeap.add(matrix[rowIndex][colIndex]);  
            }  
        }  
        return minHeap.peek(); // Return the kth smallest element  
    }  
    public static void main(String[] args)   
    {  
        int[][] matrix={  
            {1,3,5},  
            {6,7,12},  
            {11,14,14}  
        };  
        int k=4;  
        int kthSmallest=findKthSmallest(matrix,k);  
        System.out.println("The "+ k+"-th smallest element in the sorted matrix is: "+kthSmallest);  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java5" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
The 4-th smallest element in the sorted matrix is: 6</pre></div><p><strong>Complexity Analysis</strong></p><p><strong>Time Complexity:</strong> The time complexity is O(k * log(rows)).</p><p><strong>Space Complexity:</strong> The space complexity is O(rows) for storing the elements in the min-heap.</p><h3 class="h3">6. Java program to remove duplicate elements from a sorted array.</h3><p>In a sorted array, duplicate elements may occur consecutively. To put off duplicates from a looked-after array, we need to adjust the array in-place, making sure that each detail appears as effective as soon as. The Java program removes duplicates from a sorted array using the "RemoveDuplicates" class. The method "removeDuplicates" returns the new length of the modified array without duplicates. It checks if the array is empty, initializes "nextUnique" to 1, and traverses the array starting from the second element. It assigns unique elements to the position of "nextUnique" and increments it. After the loop, "nextUnique" represents the new length. The "main" function showcases the method by printing the modified array.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.*;  
public class Main  
{  
    public static int removeDuplicates(int[] nums)   
    {  
        int n=nums.length;  
        if (n==0)   
        {  
            return 0;   
        }  
        int nextUnique=1;   
        // Pointer to track the position of the next unique element  
        // Traverse the array starting from the second element  
        for (int current=1;current&lt;n;current++)   
        {  
            // Compare the current element with the element at the next unique - 1  
            if (nums[current]!=nums[nextUnique-1])   
            {  
   nums[nextUnique]=nums[current]; // Assign current element to nextUnique position  
                nextUnique++; // Increment nextUnique  
            }  
        }  
        return nextUnique;   
    }  
    public static void main(String[] args)   
    {  
        int[] nums={1,1,2,2,3,4,4,5};  
        int length=removeDuplicates(nums);  
        System.out.print("Modified Array: ");  
        for (int i=0;i&lt;length;i++)   
        {  
            System.out.print(nums[i]+" ");  
        }  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java6" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Modified Array: 1 2 3 4 5</pre></div><p><strong>Complexity Analysis</strong></p><p>Time Complexity is O(n), where n is the array's element count.</p><p>Space complexity is O(1) since the array is modified directly without additional data structures.</p><h3 class="h3">7. Java program to find the frequency of each word in a string array.</h3><p>We shall calculate the frequency of each word in a string array using a Java program. In a list of strings, we want to know how frequently each word appears. To calculate the frequency of each word in a string array, the program employs a hash map.</p><p>A simple approach separates each string into words, and the number of each word is then saved in the hash map. After initializing a blank HashMap, the program loops through each string in the array. It determines if a word is present in the HashMap for each one it encounters.</p><p>If it does, the frequency increases; if not, it is set to 1, and the word is added to the hash map. Finally, the program prints the word-frequency pairs stored in the HashMap. The approach efficiently tracks and counts the occurrences of each word, allowing for accurate frequency analysis of the words in the string array.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.*;  
public class Main 
{  
    public static void main(String[] args)   
    {  
        String[] strings={"Hello world","Hello Java","Java is great","Java is powerful"};         // Create a HashMap to store word-frequency pairs  
        Map&lt;String,Integer&gt; frequencyMap=new HashMap&lt;&gt;();  
        for (String str:strings)   
        {  
            // Split the string into words using whitespace as the delimiter  
            String[] words=str.split("\\s+");  
            // Count the occurrences of each word  
            for (String word:words)   
            {  
                // Check if the word already exists in the HashMap  
                if (frequencyMap.containsKey(word))   
                {  
                    // If it exists, increment its frequency by 1  
                    frequencyMap.put(word,frequencyMap.get(word)+1);  
                } else {  
                    // If it does not exist, add it to the HashMap with a frequency of 1  
                    frequencyMap.put(word,1);  
                }  
            }  
        }  
        // Print the word-frequency pairs  
        for (Map.Entry&lt;String, Integer&gt; entry : frequencyMap.entrySet()) {  
            System.out.println("Word: " + entry.getKey() + ", Frequency: " + entry.getValue());  
        }  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java7" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Word: Java, Frequency: 3
Word: world, Frequency: 1
Word: Hello, Frequency: 2
Word: powerful, Frequency: 1
Word: is, Frequency: 2
Word: great, Frequency: 1
</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity is O(n*m), where n represents the number of strings within the array and m is the maximum common sort of phrase in every string.</p><p>The space complexity of the program is O(n), where n is the total wide variety of words inside the array.</p><h3 class="h3">8. Java program to find the missing number in a sorted array of consecutive integers.</h3><p>Using the binary search method, we locate the missing integer in a sorted array of succeeding integers. The first detail's index is low, and the remaining is high. We determine whether or not the missing integer is on the left or proper side of the array by computing the expected value for the middle element, which ought to be the same as the first element plus the centre index. The operation is repeated until there is only one element left in the search space, at which point we update low or high as necessary. The missing number will be the expected value at the index low.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main 
{  
    public static int findMissingNumber(int[] nums)   
    {  
        int low=0;  
        int high=nums.length-1;  
        // Perform binary search  
        while (low&lt;=high)   
        {  
            int mid=low+(high-low)/2;  
            int expectedValue=nums[0]+mid;  
            if (nums[mid]==expectedValue)   
            {  
                // Missing number lies in the right half  
                low=mid+1;  
            } else   
            {  
                // Missing number lies in the left half  
                high=mid-1;  
            }  
        }  
        // Return the missing number  
        return nums[0]+low;  
    }  
    public static void main(String[] args)   
    {  
        int[] nums={1,2,3,4,6,7,8,9};  
        int missingNumber=findMissingNumber(nums);  
        System.out.println("Missing number: "+missingNumber);  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java8" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Missing number: 5</pre></div><p><strong>Complexity Analysis</strong></p><p><strong>Time Complexity:</strong> The binary search approach has a time complexity of O(log n), where n is the size of the array</p><p><strong>Space Complexity:</strong> The program has a space complexity of O(1), only using a few variables to track the low, high, and mid indices and the expected value.</p><h3 class="h3">9. Java program to find the element that appears only once in an array.</h3><p>The technique used to find the element that appears most effectively at least once in an array is primarily based on the XOR operation. By XORing all the factors within the array, the factors that seem a fair number of instances will cancel out, leaving only the detail that appears best once. To enforce this approach, we initialize a variable 'unique' to zero. Then, we iterate through each detail inside the array and XOR it with the 'particular' variable. The result is stored back in 'unique.' At the end of the iteration, 'unique' will hold the element's value that appears only once.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main   
{  
    public static int findUnique(int[] nums)   
    {  
        int unique=0;  
        for (int num:nums)   
        {  
            unique^=num; // XOR the current element with 'unique'  
        }  
        return unique;  
    }  
  
    public static void main(String[] args)   
    {  
        int[] nums = {1,2,3,4,3,2,1};  
        int uniqueElement=findUnique(nums);  
        System.out.println("The element that appears only once: " + uniqueElement);  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java9" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
The element that appears only once: 4</pre></div><p><strong>Complexity Analysis</strong></p><p><strong>Time Complexity:</strong> The time complexity of this technique is O(n), where n is the length of the array.</p><p><strong>Space Complexity:</strong> The Space complexity is O(1) because we simplest use a single variable to keep the result.</p><h3 class="h3">10. Java program to check if an array is a palindrome.</h3><p>To check if an array is a palindrome, we will use a pointer method where one pointer starts evolving at the start of the array and the alternative at the end. The elements are as compared to those suggestions, and we move them closer and nearer collectively until they meet at the centre. We conclude that the array is not a palindrome if the elements at any point at the pointers are not equal. Otherwise, if the loop completes without finding any unequal elements, then the array is a palindrome. The two-pointer approach allows us to efficiently check for palindromicity by eliminating the need for additional space.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main
{  
    public static boolean isPalindrome(int[] nums)   
    {  
        int left=0;                     // Initialize the left pointer at the beginning of the array  
        int right=nums.length-1;      // Initialize the right pointer at the end of the array  
while (left&lt;=right) {      // Continue the loop until the pointers meet or cross each other  
 if (nums[left]!=nums[right])   
{  
   return false;             // If the elements at the pointers are not equal, the array is not a palindrome  
            }  
            left++;                         
            right--;                        
        }  
 return true;    // If the loop completes without finding unequal elements, the array is a palindrome  
    }  
    public static void main(String[] args) {  
        int[] nums={1,2,3,2,1};     
        boolean isPalindrome=isPalindrome(nums);    
        if (isPalindrome)   
       {  
            System.out.println("The array is a palindrome.");  
        }   
       else   
       {  
            System.out.println("The array is not a palindrome.");  
        }  
    }  
}
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java10" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
The array is a palindrome.</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of the above approach is O(n), where n is the length of the array.</p><p>The space complexity is O(1) as we are not using any extra space.</p><h3 class="h3">11. Java program to shuffle elements of an array.</h3><p>To shuffle the elements of an array, we use the Fisher-Yates shuffle algorithm is commonly used. The procedure ensures that each array's item is randomly permuted. Starting with the final entry in the array, the process iterates through the array in reverse order to get started. Each time, the current element is added to the range of the remaining unshrunk elements to create a random index. The element at the current index is then swapped with the element at the randomly generated index. The swapping continues until the first element is reached, resulting in a shuffled array with elements in random order.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.Random;  
public class Main   
{  
    public static void shuffle(int[] nums)   
    {  
        Random rand=new Random();  
        for (int i=nums.length-1;i&gt;=1;i--)   
        {  
            int j=rand.nextInt(i+1);  
            // Swap the current element with the randomly selected element  
            int temp=nums[i];  
            nums[i]=nums[j];  
            nums[j]=temp;  
        }  
    }  
    public static void main(String[] args)   
    {  
        int[] nums = {1,2,3,4,5};  
        System.out.println("Original array: ");  
        for (int num:nums)   
      {  
            System.out.print(num + " ");  
        }  
        shuffle(nums);  
        System.out.println("\nShuffled array: ");  
        for (int num:nums)   
      {  
            System.out.print(num + " ");  
        }  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java11" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Original array: 
1 2 3 4 5 
Shuffled array: 
5 2 1 3 4 
</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this technique is O(N), where N is the size of the array.</p><p>The space complexity is O(1) since we use a consistent quantity of extra space for the random variety.</p><h3 class="h3">12. Java program to check if two matrices are orthogonal.</h3><p>To examine if two matrices are orthogonal, we evaluate the dot manufactured of corresponding rows or columns of the matrices. The matrices are said to be orthogonal if the dot product is 0 for all pairs. The algorithm iterates through the rows or columns, then calculates the dot product and returns false if any dot product is non-zero. It then checks for appropriate dimensions. If all dot products are zero, it returns true to indicate that the matrices are orthogonal.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main  
{  
    public static boolean areMatricesOrthogonal(int[][] matrix1,int[][] matrix2)   
{  
        int rows1=matrix1.length;  
        int cols1=matrix1[0].length;  
        int rows2=matrix2.length;  
        int cols2=matrix2[0].length;  
        // Check if matrices have compatible dimensions  
        if (rows1 != rows2 || cols1 != cols2) {  
            return false;  
        }  
        // Check the dot product for each row/column pair  
        for (int i=0;i&lt;rows1;i++) {  
            int dotProduct = 0;  
            for (int j=0;j&lt;cols1;j++) {  
                dotProduct += matrix1[i][j] * matrix2[i][j];  
            }  
            if (dotProduct!=0)   
            {  
                return false;  
            }  
        }  
        return true;  
    }  
    public static void main(String[] args) {  
        int[][] matrix1={{1,2},{3,4}};  
        int[][] matrix2={{0,1},{-1,0}};  
          
        boolean areOrthogonal = areMatricesOrthogonal(matrix1, matrix2);  
        if (areOrthogonal) {  
            System.out.println("The matrices are orthogonal.");  
        } else {  
            System.out.println("The matrices are not orthogonal.");  
        }  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java12" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
The matrices are not orthogonal.</pre></div><p><strong>Complexity Analysis:</strong></p><p>The time complexity of this technique is O(n), where n is the range of rows or columns in the matrices.</p><p>The space complexity is O(1), as no additional data structures are used.</p><h3 class="h3">13. Java program to find the maximum element in a two-dimensional array.</h3><p>We initialize the variable ' max' with the smallest value conceivable given the data type of the array elements to determine the greatest element in a two-dimensional array. The next step is to loop separately via the array's rows and factors. Every element is compared to the modern fee of "max," and if the detail is more, "max" is up to date. The maximum element in the two-dimensional array will be contained in 'max' once all items have been iterated through. By comparing each element to the current maximum value, the method enables us to determine the maximum element quickly.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main
{  
    public static int findMaximumElement(int[][] array) {  
        int max=Integer.MIN_VALUE; // Initialize max with the minimum value  
        for (int i=0;i&lt;array.length;i++)   
        {  
            // Iterate through each element of the row  
            for (int j=0;j&lt;array[i].length;j++)   
            {  
                // Compare the current element with the current max value  
                if (array[i][j] &gt; max) {  
                    max=array[i][j];   
                }  
            }  
        }  
        return max; // Return the maximum element  
    }  
    public static void main(String[] args) {  
        int[][] array={  
            {1, 2, 3},  
            {4, 5, 6},  
            {7, 8, 9}  
        };  
        int maximum=findMaximumElement(array);  
        System.out.println("The maximum element in the array is: "+maximum);  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java13" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
The maximum element in the array is: 9</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this approach is O(n * m), where n is the number of rows and m is the number of columns in the two-dimensional array.</p><p>The space complexity is O(1) when you consider that we are not the usage of any extra area that grows with the entered size.</p><h3 class="h3">14. Java program to find the sum of each diagonal in a matrix.</h3><p>To find the sum of each diagonal in a matrix, we iterate through the elements and calculate the diagonal index of every component by summing its row and column indices. We then add the element's value to the corresponding diagonal sum in an array. After processing all elements, the array will contain the sum of each diagonal.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main {  
    public static int[] getDiagonalSums(int[][] matrix) {  
        int rows=matrix.length;  
        int cols=matrix[0].length;  
        int numDiagonals=rows+cols-1;  
        int[] sums=new int[numDiagonals];  
        for (int i=0;i&lt;rows;i++)   {  
            for (int j=0;j&lt;cols;j++)    {  
                int diagonalIndex=i+j;  
                sums[diagonalIndex]+=matrix[i][j];  
            }  
        }  
        return sums;  
    }  
    public static void main(String[] args) {  
        int[][] matrix={  
            {1, 2, 3},  
            {4, 5, 6},  
            {7, 8, 9}  
        };  
        int[] diagonalSums=getDiagonalSums(matrix);  
        System.out.println("Sum of each diagonal:");  
        for (int sum:diagonalSums)  {  
            System.out.println(sum);  
        }  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java14" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Sum of each diagonal:
1
6
15
14
9
</pre></div><p><strong>Complexity Analysis</strong></p><p>The approach has a time complexity of O(m*n), where m is the number of rows and n is the number of columns in the matrix.</p><p>The space complexity is O(m + n), as we must store the diagonal sums in an array.</p><h3 class="h3">15. Java program to find the element with the maximum frequency in an array.</h3><p>We use a HashMap to record the frequency of each element in the array to locate the element with the highest frequency. The element with the highest frequency can be recognized via looping through the array and updating the frequency within the hash map. Then, by comparing the frequency counts in the HashMap, we identify the element with the maximum frequency. The approach allows us to efficiently find the element with the highest frequency in the array.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.*;
public class Main {
    public static int findMaxFrequencyElement(int[] nums) {
        Map&lt;Integer, Integer&gt; frequencyMap = new HashMap&lt;&gt;();
        for (int num : nums) {
            frequencyMap.put(num, frequencyMap.getOrDefault(num, 0) + 1);
        }
        return Collections.max(frequencyMap.entrySet(), Map.Entry.comparingByValue()).getKey();
    }
    public static void main(String[] args) {
        int[] nums = {1, 2, 3, 2, 1, 2, 3, 3, 3};
        System.out.println("Element with maximum frequency is: " + findMaxFrequencyElement(nums));
    }
}

</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java15" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Element with maximum frequency is: 3</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this technique is O(n), where n is the size of the array.</p><p>The area complexity is O(n) because a HashMap can save up to n unique elements in the worst case.</p><h3 class="h3">16. Java program to rotate a two-dimensional array clockwise.</h3><p>To rotate a two-dimensional array clockwise, we can follow a two-step approach: transposing the array and reversing each row. First, we iterate via the array and switch each detail at function (i, j) with the detail at the role (j, i), then successfully transpose the array. After, we iterate through each row of the transposed array and reverse it by swapping the elements from the start and end of the row until they meet in the middle. The process rotates the array clockwise.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main  {  
    public static void rotateClockwise(int[][] matrix)  {  
        int rows=matrix.length;  
        int cols=matrix[0].length;  
        // Transpose the array  
        for (int i=0;i&lt;rows;i++)    {  
            for (int j=i;j&lt;cols;j++)   {  
                int temp=matrix[i][j];  
                matrix[i][j]=matrix[j][i];  
                matrix[j][i]=temp;  
            }  
        }  
        // Reverse each row  
        for (int i=0;i&lt;rows;i++)   {  
            int left=0;  
            int right=cols-1;  
            while (left&lt;right)    {  
                int temp=matrix[i][left];  
                matrix[i][left]=matrix[i][right];  
                matrix[i][right]=temp;  
                left++;  
                right--;  
            }  
        }  
    }  
    public static void main(String[] args) {  
        int[][] matrix = {  
            {1, 2, 3},  
            {4, 5, 6},  
            {7, 8, 9}  
        };  
        System.out.println("Original Matrix:");  
        printMatrix(matrix);  
        rotateClockwise(matrix);  
        System.out.println("Rotated Matrix:");  
        printMatrix(matrix);  
    }  
    public static void printMatrix(int[][] matrix) {  
        int rows=matrix.length;  
        int cols=matrix[0].length;  
        for (int i=0;i&lt;rows;i++)   {  
            for (int j=0;j&lt;cols;j++)       {  
                System.out.print(matrix[i][j]+" ");  
            }  
            System.out.println();  
        }  
        System.out.println();  
    }  
} 
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java16" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Original Matrix:
1 2 3 
4 5 6 
7 8 9 

Rotated Matrix:
7 4 1 
8 5 2 
9 6 3 
</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this approach is O(n<sup>2</sup>), where n is the size of the array.</p><p>The space complexity is O(1) as we carry out the rotation in-place without using any additional storage systems.</p><h3 class="h3">17. Java program to sort a two-dimensional array across columns.</h3><p>We construct a custom comparator that compares rows based on the required column to sort a two-dimensional array across columns. The Arrays.sort() method is called with the custom comparator as an argument. The sorting algorithm employs a comparator to compare rows according to the selected column and arrange them correctly. We can quickly sort the two-dimensional array across columns using this method.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.Arrays;  
import java.util.Comparator;  
public class Main {  
    public static void sortByColumn(int[][] matrix, int column) {  
        // Use Arrays.sort() with a custom comparator to sort the matrix by the specified column  
        Arrays.sort(matrix,Comparator.comparingInt(row -&gt; row[column]));  
    }  
    public static void main(String[] args) {  
        int[][] matrix = {  
            {13, 12, 11},  
            {6, 5, 4},  
            {19, 18, 17}  
        };  
        int columnToSortBy=1;  
        System.out.println("Original Matrix:");  
        printMatrix(matrix);  
        sortByColumn(matrix,columnToSortBy);  
        System.out.println("Sorted Matrix by Column " + columnToSortBy + ":");  
        printMatrix(matrix);  
    }  
    public static void printMatrix(int[][] matrix) {  
        int rows=matrix.length;  
        int cols=matrix[0].length;  
        for (int i=0;i&lt;rows;i++)   {  
            for (int j=0;j&lt;cols;j++)   {  
                System.out.print(matrix[i][j]+" ");  
            }  
            System.out.println();  
        }  
        System.out.println();  
    }  
}  

</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java17" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Original Matrix:
13 12 11 
 6    5   4 
19 18 17 

Sorted Matrix by Column 1:
 6    5   4 
13 12 11 
19 18 17 
</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this approach is O(n log n), where n is the number of rows in the matrix.</p><p>The space complexity is O(1) since the sorting is done in place.</p><h3 class="h3">18. Java program to perform matrix exponentiation to compute Fibonacci numbers efficiently.</h3><p>We might also describe the Fibonacci sequence as a matrix and calculate matrix multiplication to compute the Fibonacci numbers using matrix exponentiation speedily. The manner includes creating a transformation matrix that represents the Fibonacci series, utilizing matrix multiplication and exponentiation strategies, and then elevating the matrix to the necessary power using the powerMatrix approach. By deleting the Fibonacci number from the following matrix, we can also quickly calculate Fibonacci numbers.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main {  
    public static long computeFibonacci(int n)   {  
        if (n&lt;=0)   {  
            return 0;  
        }  
        // Fibonacci transformation matrix  
        long[][] fibMatrix = {{1, 1}, {1, 0}};  
        // Raise fibMatrix to the power of (n-1)  
        fibMatrix = powerMatrix(fibMatrix, n - 1);  
        // Extract the Fibonacci number from the matrix  
        return fibMatrix[0][0];  
    }  
    private static long[][] powerMatrix(long[][] matrix, int power) {  
        if (power == 0) {  
            // Identity matrix  
            return new long[][]{{1, 0}, {0, 1}};  
        }  
        if (power == 1) {  
            return matrix;  
        }  
        long[][] result = powerMatrix(matrix, power / 2);  
        result = multiplyMatrices(result, result);  
        if (power % 2 != 0) {  
            result = multiplyMatrices(result, matrix);  
        }  
        return result;  
    }  
    private static long[][] multiplyMatrices(long[][] matrix1,long[][] matrix2)    {  
        long[][] result=new long[2][2];  
        result[0][0]=matrix1[0][0]*matrix2[0][0]+matrix1[0][1]*matrix2[1][0];  
        result[0][1]=matrix1[0][0]*matrix2[0][1]+matrix1[0][1]*matrix2[1][1];  
        result[1][0]=matrix1[1][0]*matrix2[0][0]+matrix1[1][1]*matrix2[1][0];  
        result[1][1]=matrix1[1][0]*matrix2[0][1]+matrix1[1][1]*matrix2[1][1];  
        return result;  
    }  
    public static void main(String[] args)    {  
        int n=10;  
        long fibonacci=computeFibonacci(n);  
        System.out.println("Fibonacci number at position "+n+" is: "+fibonacci);  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java18" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Fibonacci number at position 10 is: 55</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this approach is O(log n) since we perform matrix multiplication using the exponentiation by squaring technique.</p><p>The space complexity is O(1) since we only need a fixed-size matrix and a few additional variables.</p><h3 class="h3">19. Given an array of integers, rearrange the array such that all even numbers appear before all odd numbers.</h3><h4 class="n">Note: Maintaining the relative order is not relevant for this problem.</h4><p>We can use a two-pointer technique to reorder an array so that all even numbers appear before all odd numbers. While the right pointer begins at the end and advances backwards, the left pointer moves ahead from the beginning. The elements pointed by the left and right pointers are examined at each step, and swaps are made as needed. All even numbers will be arranged before odd numbers by the time the loop is complete.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main   
{  
    public static void rearrangeArray(int[] arr)   
    {  
        int left=0;  
        int right=arr.length-1;  
        while (left&lt;=right)   {  
            if (arr[left]%2==0)    {  
                left++; // Move the left pointer forward if the element is even  
            } else if (arr[right]%2==1)   {  
                right--; // Move the right pointer backwards if the element is odd  
            } else {  
    swap(arr,left,right); // Swap the elements if the left element is odd and the right element is even  
                left++; // Move the left pointer forward  
                right--; // Move the right pointer backwards  
            }  
        }  
    }  
    public static void swap(int[] arr,int i,int j)   {  
        int temp=arr[i];  
        arr[i]=arr[j];  
        arr[j]=temp;  
    }  
    public static void main(String[] args)    {  
        int[] arr = {1,2,3,4,5,6,7,8,9};  
        System.out.println("Original Array: ");  
        printArray(arr);  
        rearrangeArray(arr);  
        System.out.println("Rearranged Array: ");  
        printArray(arr);  
    }  
    public static void printArray(int[] arr)   {  
        for (int num:arr)   {  
            System.out.print(num+" ");  
        }  
        System.out.println();  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java19" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Original Array: 
1 2 3 4 5 6 7 8 9 
Rearranged Array: 
8 2 6 4 5 3 7 1 9 
</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this approach is O(n), where n is the number of elements in the array.</p><p>The space complexity is O(1) as we perform the rearrangement in place without using any additional data structures.</p><h3 class="h3">20. Java program to find the smallest missing positive number in an unsorted array.</h3><p>We can rearrange the array by assigning each positive integer to its appropriate index to discover the smallest missing positive number in an unsorted array. You can accomplish this by looping through the array and switching each element with a positive integer with the one at the desired index. The array is iterated once more to locate the first index where an element no longer corresponds to the required value after the rearrangement. The index corresponds to the smallest missing positive number. If all elements match their desired values, the smallest missing positive number is the next positive integer after the array size.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main  
{  
    public static int findSmallestMissingPositive(int[] nums)  
    {  
        int n=nums.length;  
        // Rearrange the array  
        for (int i=0;i&lt;n;i++)   
        {  
            while (nums[i]&gt;0&amp;&amp;nums[i]&lt;=n&amp;&amp;nums[nums[i]-1]!=nums[i])   
            {  
                swap(nums,i,nums[i]-1);  
            }  
        }  
        //Find the smallest missing positive number  
        for (int i=0;i&lt;n;i++)   
        {  
            if (nums[i]!=i+1)   
            {  
                return i+1;  
            }  
        }  
        // If all elements match their desired values, return the next positive integer  
        return n+1;  
    }  
    public static void swap(int[] nums,int i,int j)   
    {  
        int temp=nums[i];  
        nums[i]=nums[j];  
        nums[j]=temp;  
    }  
    public static void main(String[] args)   
    {  
        int[] nums={3,4,-1,1};  
        int smallestMissingPositive = findSmallestMissingPositive(nums);  
        System.out.println("Smallest Missing Positive Number: "+smallestMissingPositive);  
    }  
} 
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java20" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Smallest Missing Positive Number: 2</pre></div><p><strong>Complexity Analysis</strong></p><p>The approach ensures a time complexity of O(n) and a space complexity of O(1) as we perform the rearrangement and search in place without additional data structures.</p><h3 class="h3">21. Java program to find the intersection of two arrays.</h3><p>The best approach to finding the intersection of two arrays is to use a HashSet data structure. We create a HashSet and add all elements from one array to it. Then, we iterate through the second array and check if each element exists in the HashSet. If it does, we add it to the result ArrayList and remove it from the HashSet to avoid duplicates.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.ArrayList;  
import java.util.HashSet;  
import java.util.List;  
public class Main{  
    public static List&lt;Integer&gt; intersection(int[] nums1, int[] nums2) {  
        HashSet&lt;Integer&gt; set=new HashSet&lt;&gt;();  
        List&lt;Integer&gt; result=new ArrayList&lt;&gt;();  
        // Add elements of nums1 to the set  
        for (int num:nums1)  {  
            set.add(num);  
        }  
        // Check for intersection in nums2  
        for (int num:nums2)   {  
            if (set.contains(num))   {  
                result.add(num);  
                set.remove(num);  
            }  
        }  
        return result;  
    }  
    public static void main(String[] args) {  
        int[] nums1 = {1, 2, 2, 1};  
        int[] nums2 = {2, 2};  
        List&lt;Integer&gt; intersection=intersection(nums1, nums2);  
        System.out.println("Intersection: "+intersection);  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java21" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Intersection: [2]</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this approach is O(n), where n is the size of the larger array.</p><p>The space complexity is O(m), where m is the size of the HashSet.</p><h3 class="h3">22. Java program to find the longest subarray with an equal number of 0s and 1s.</h3><p>Utilizing the prefix sum method, we can determine the longest subarray that contains an equal number of 0s and 1s. We can calculate the running sum while traversing the array by assigning a value of 1 for every 1 and -1 for every 0. When the running sum reaches zero, the number of 0s and 1s we have seen thus far is equal. To find the longest subarray, we store the running sum in a HashMap and its corresponding index. If the same running sum appears again, we update the maximum length by subtracting the stored index from the current index. By keeping track of the maximum length throughout the iteration, we can find the longest subarray with equal 0s and 1s.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.HashMap;  
public class Main {  
    public static int findMaxLength(int[] nums)   {  
        int maxLength=0;  
        int runningSum=0;  
        HashMap&lt;Integer,Integer&gt; sumMap=new HashMap&lt;&gt;();  
        sumMap.put(0,-1); // Handle the case when the subarray starts from the beginning  
        for (int i=0;i&lt;nums.length;i++)   {  
            runningSum+=nums[i]==0?-1:1;  
            if (sumMap.containsKey(runningSum))    {  
                int startIndex=sumMap.get(runningSum);  
                maxLength=Math.max(maxLength,i-startIndex);  
            } else {  
                sumMap.put(runningSum,i);  
            }  
        }  
        return maxLength;  
    }  
    public static void main(String[] args)    {  
        int[] nums = {0, 1, 0, 0, 1, 1, 0};  
        int maxLength=findMaxLength(nums);  
  System.out.println("Length of the longest subarray with equal 0s and 1s is: "+maxLength);  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java22" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Length of the longest subarray with equal 0s and 1s: 6</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this approach is O(n) since we iterate through the array once.</p><p>The space complexity is O(n) as we store the running sum and its corresponding index in the HashMap.</p><h3 class="h3">23. Java program to find the maximum product of two integers in an array.</h3><p>To find the maximum product of two integers in an array, we iterate through the array and keep track of the maximum and second maximum elements. We initialize max1 and max2 to the smallest possible integer values. Then, for each element, we compare it with max1 and update max2 and max1 accordingly. After iterating through the array, the maximum product is the product of max1 and max2, as max1 will hold the largest element and max2 will hold the second largest element.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main {  
    public static int findMaximumProduct(int[] arr)  {  
      int max1=Integer.MIN_VALUE; // Initialize the maximum element to the smallest possible value  
        int max2=Integer.MIN_VALUE; // Initialize the second maximum element to the smallest possible value  
        for (int num:arr)    {  
            if (num&gt;max1)    {  
                max2=max1; // Update the second maximum element  
                max1=num; // Update the maximum element  
            }   
            else if (num&gt;max2)    {  
                max2=num; // Update the second maximum element  
            }  
        }  
        return max1*max2; // Return the maximum product  
    }  
    public static void main(String[] args)    {  
        int[] arr={1,2,3,4,5};  
        int maximumProduct=findMaximumProduct(arr);  
        System.out.println("Maximum Product: "+maximumProduct);  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java23" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Maximum Product: 20</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this approach is O(n), where n is the size of the array.</p><p>The space complexity is O(1) since we only use constant extra space to store the maximum and second maximum elements.</p><h3 class="h3">24. Java program to find the smallest subarray length with a sum greater than a given value.</h3><p>To find the smallest subarray length with a sum greater than a given value, we can utilize the sliding window technique. The approach involves maintaining a window that expands and contracts while calculating the current sum. We start with an empty window and gradually expand it by adding elements from the right end. If the current sum exceeds the given value, we update the minimum length of the subarray. Then, until the current total is less than or equal to the specified value, we contract the window from the left end by eliminating items. Until we reach the end of the array, we keep doing this.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main{  
    public static int findSmallestSubarray(int[] arr,int target)   {  
        int minLength=Integer.MAX_VALUE; // Variable to store the minimum length of the subarray  
        int currentSum=0; // Variable to track the current sum of the subarray  
        int left=0; // Left pointer to mark the start of the subarray  
        int right=0; // Right pointer to mark the end of the subarray  
        while (right&lt;arr.length) {  
        currentSum+=arr[right]; // Add the element at the right pointer to the current sum            while (currentSum&gt;target)   {  
  minLength=Math.min(minLength,rightleft+1); // Update the minimum length if necessary  
    currentSum=arr[left]; // Subtract the element at the left pointer from the current sum
                left++; // Move the left pointer to the right to contract the window  
            }  
            right++; // Move the right pointer to the right to expand the window  
        }  
        return (minLength==Integer.MAX_VALUE)?-1:minLength;   
    }  
    public static void main(String[] args)   {  
        int[] arr={1, 4, 45, 6, 0, 19};  
        int target=51;  
        int smallestSubarrayLength=findSmallestSubarray(arr,target);  
        System.out.println("Smallest Subarray Length: "+smallestSubarrayLength);  
    }  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java24" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Smallest Subarray Length: 3</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this approach is O(n), where n is the size of the array.</p><p>The space complexity is O(1) since we only use constant extra space to store variables.</p><h3 class="h3">25. Java program to find the triplet with the smallest sum in an array.</h3><p>We can take the help of three variables (an integer array of size three will also do the work), and using a loop, we can find the minimum elements present in the given array. We will be looking for the minimum elements as we have to find the smallest sum.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main   {  
public static void findSmallestTripletSum(int[] arr)  {  
int n = arr.length; // finding the size  
// for storing the first three minimum values present in the given array.  
int fMin = Integer.MAX_VALUE;  
int sMin = Integer.MAX_VALUE;  
int tMin = Integer.MAX_VALUE;   
for (int i = 0; i &lt; n; i++)   {   
// getting the first, second and third minimum elements   
if (arr[i] &lt; fMin)   {   
    tMin = sMin;   
    sMin = fMin;   
    fMin = arr[i];   
}   
// updating the second and third minimum elements   
else if (arr[i] &lt; sMin)   {   
    tMin = sMin;   
    sMin = arr[i];   
}   
else if (arr[i] &lt; tMin)   {   
    tMin = arr[i];   
}   
}  
// print statement  
System.out.println("The Triplet with the smallest sum is: {"+ fMin + ", " + sMin + ", " + tMin + "}");  
}  
// main method  
public static void main(String[] args)   {  
int[] arr = {5, 1, -3, -4, -2, 6};  
findSmallestTripletSum(arr);  
}  
}  
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java25" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
The Triplet with the smallest sum is: {-4, -3, -2}</pre></div><p><strong>Complexity Analysis</strong></p><p>The time complexity of this approach is O(n) since we are only using one loop in the program.</p><p>The space complexity is O(1), as we are not using any extra space that grows with the input size.</p><h3 class="h3">26. Java program to increment all elements of an array by one.</h3><p>The input array is defined as {1, 2, 3, 4, 5}. The method incrementArrayElements(int[] array) accepts an array as an argument. It then uses a for loop to iterate over each element in the array. Increment Operation: Inside the loop, the code array[i]++ increments each element by one. The final output is printed in the main() method, where the incremented array elements are displayed.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main {  
    public static void main(String[] args) {  
        int[] array = {1, 2, 3, 4, 5};  
        incrementArrayElements(array);  
        // Print the incremented array  
        for (int i = 0; i &lt; array.length; i++) {  
            System.out.print(array[i] + " ");  
        }  
    }  
    public static void incrementArrayElements(int[] array) {  
        for (int i = 0; i &lt; array.length; i++) {  
            array[i]++;  
        }  
    }  
} 
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java26" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
2 3 4 5 6</pre></div><h3 class="h3">27. Java program to move all zeroes to the end of the array.</h3><p>For this approach, we traverse the array twice. In the first traversal, we do the following:</p><ul class="points"><li>Iterate through the array while counting non-zero elements. Initialize the count at 0, which also indicates the position for the next non-zero element in the array.</li><li>For each non-zero element, position it at arr[count] and then increase the count by 1.</li><li>Once all elements have been processed, all non-zero entries will be moved to the front, keeping their original sequence.</li></ul><p>In the second traversal, we do the following:</p><ul class="points"><li>Following the initial traversal, all non-zero elements will occupy the beginning of the array, while the variable 'count' will indicate the position for the first zero.</li><li>Proceed from 'count' to the end of the array, filling all subsequent indices with 0.</li></ul><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main {
    public static void main(String[] args) {
        int[] arr = {1, 0, 2, 0, 3, 0, 4, 0};
        int n = arr.length;  //finding array length
        int count = 0;
        for (int i = 0; i &lt; n; i++) { //loop iterate over the array
            if (arr[i] != 0) {  //compare if the array element is equals to zero or not
                arr[count++] = arr[i];  //
            }
        }
        while (count &lt; n) {
            arr[count++] = 0;
        }
        System.out.println("Array after moving zeroes: " + java.util.Arrays.toString(arr));
    }
}
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java27" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Array after moving zeroes: [1, 2, 3, 4, 0, 0, 0, 0]</pre></div><h3 class="h3">28. Reverse an array without changing the position of zeroes.</h3><p>To solve the problem, the method involves moving through the array from both ends and swapping non-zero elements until reaching the centre. Throughout this procedure, the positions of zeroes are left intact. The code employs a while loop to bypass zeroes while decrementing the index from the end. When a non-zero element is detected, it gets swapped with the corresponding non-zero element from the opposite end. This swapping continues until the centre of the array is reached.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.Arrays;
public class Main {
// Print function
public static void printReverse(int[] arr) {
    // Print the original array
    System.out.print("Original array: ");
    System.out.println(Arrays.toString(arr));
    // Reverse the array without changing the position of zeroes
    // Initialize the index to the last element
    int j = arr.length - 1;
    for (int i = 0; i &lt; j; i++) {
    // If the current element is zero, skip to the next element
    if (arr[i] == 0) {
        continue;
    }
    // If the current element is zero from the end
    while (j &gt; i &amp;&amp; arr[j] == 0) {
        // Decrement the index to the previous element
        j--;
    }
    // Swap the elements
    int temp = arr[i];
    arr[i] = arr[j];
    arr[j] = temp;
    // Decrement the index to the previous element
    j--;
    }
    // Prints the reversed array
    System.out.print("Reversed array: ");
    System.out.println(Arrays.toString(arr));
}
public static void main(String[] args) {
    int[] arr = { 6, 0, 8, 0, 2, 0, 1 };
    printReverse(arr);
}
}
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java28" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Original array: [6, 0, 8, 0, 2, 0, 1]
Reversed array: [1, 0, 2, 0, 8, 0, 6]
</pre></div><h3 class="h3">29. Java program to find the leader element in an array.</h3><p>Given an array <strong>arr[]</strong> of size <strong>n</strong>, the task is to find all the Leaders in the array. An element is a Leader if it is greater than or equal to all the elements to its right side.</p><h4 class="n">Note: The rightmost element is always a leader.</h4><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">public class Main {
    public static void main(String[] args) {
        int[] arr = {12, 11, 4, 7, 9, 6, 8, 15};
        int n = arr.length;
        int maxFromRight = arr[n - 1];
        System.out.print("Leader is: " + maxFromRight + " ");
        for (int i = n - 2; i &gt;= 0; i--) {
            if (arr[i] &gt; maxFromRight) {
                maxFromRight = arr[i];
                System.out.print(maxFromRight + " ");
            }
        }
    }
}
</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java29" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Leader is: 15</pre></div><h3 class="h3">30. Java program to find all the non-empty subarrays.</h3><p>To create a subarray, we first need a starting index from the original array. We can choose this starting index by looping through the range [0 to n-1] and treating each index i as a potential starting point. For each selected starting index i, we then determine an ending index from the range [i to n-1]. A nested loop, running from [i to n-1], will assist in selecting the ending index. Once both the starting and ending indices are established, an innermost loop will be required to print the elements of the subarray.</p><div class="codewrapper"><h3 class="h3">Example</h3><div class="codeblock"><textarea class="java" name="code">import java.util.ArrayList;
public class Main {
    //Prints all subarrays in arr[0..n-1]
    static void findSubArray(ArrayList&lt;Integer&gt; arr) {
        int n = arr.size();
        // Pick starting point
        for (int i = 0; i &lt; n; i++) {         
            // Pick ending point
            for (int j = i; j &lt; n; j++) {             
                // Print subarray between current starting and ending points
                for (int k = i; k &lt;= j; k++) {
                    System.out.print(arr.get(k) + " ");
                }
                System.out.println();
            }
        }
    }
    public static void main(String[] args) {
        ArrayList&lt;Integer&gt; arr = new ArrayList&lt;&gt;();
        arr.add(1);
        arr.add(2);
        arr.add(3);
        System.out.println("Subarrays are:");
        findSubArray(arr);
    }
}

</textarea></div><a class="btn btn-apna" href="https://www.tpointtech.com/java/tryit?program=array-programs-in-java30" target="_blank">Compile and Run</a></div><p><strong>Output:</strong></p><div class="codeblock3"><pre>
Subarrays are:
1 
1 2 
1 2 3 
2 
2 3 
3
</pre></div><hr/><div class="nexttopicdiv"><span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="arrays-class-in-java">Arrays Class in Java</a></span></div> <div id="bottomnext"><a class="next" href="jagged-array-in-java" style="float:left">← prev</a> <a class="next" href="arrays-class-in-java" style="float:right">next →</a></div><br> </br></td></tr></tbody></table></div><br/></div><div class="related-posts-container"><h2 class="h3">Related Posts</h2><ul class="related-posts-list"><li><a class="related-post-item" href="string-array-in-java"><h3 class="h3">String Arrays in Java</h3><p class="related-post-content">An Array is an essential and most used data structure in Java. It is one of the most used data structure by programmers due to its efficient and productive nature; The Array is a collection of similar data type elements. It uses a contiguous memory...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 10 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="java-arrays"><h3 class="h3">Java Arrays</h3><p class="related-post-content">An array is typically a grouping of elements of the same kind that are stored in a single, contiguous block of memory. Java array is an object which contains elements of a similar data type. Additionally, The elements of an array are stored in a contiguous...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 18 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="jagged-array-in-java"><h3 class="h3">Jagged Array in Java</h3><p class="related-post-content">A jagged array in Java is a collection of arrays where each array may contain a varied number of elements. A two-dimensional array, in contrast, requires all rows and columns to have the same length. Jagged arrays are also known as &amp;quot;ragged arrays&amp;quot; or &amp;quot;irregular arrays&amp;quot;....</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 12 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="array-of-objects-in-java"><h3 class="h3">Array of Objects in Java</h3><p class="related-post-content">In Java, an array is a collection of the same data type that dynamically creates objects and can have elements of primitive types. Java allows us to store objects in an array. An array of objects is a collection of multiple objects stored in a single...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 8 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="reverse-an-array-in-java"><h3 class="h3">Reverse an Array in Java</h3><p class="related-post-content">In this tutorial, we will discuss how one can reverse an array in Java. In the input, an integer array is given, and the task is to reverse the input array. Reversing an array means the last element of the input array should be the...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 12 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="multidimensional-arrays-in-java"><h3 class="h3">Multidimensional Arrays in Java</h3><p class="related-post-content">Multi-Dimensional Arrays in Java Multi-dimensional arrays in Java are basically arrays of arrays. It allows us to store data in a tabular or grid-like structure, making them useful for scenarios like matrices, game boards, or any data that requires multiple dimensions. It is useful when we...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 8 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="java-array-length"><h3 class="h3">Java Array length</h3><p class="related-post-content">Property In Java, the array length is the number of elements that an array can hold. There is no predefined method to obtain the length of an array. We can find the array length in Java by using the array attribute length. We use this...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 7 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li><li><a class="related-post-item" href="arrays-class-in-java"><h3 class="h3">Arrays Class in Java</h3><p class="related-post-content">In Java, the Arrays class is a utility class that is a member of the Java collection framework. It belongs to java.util package. The class provides various static methods for manipulating arrays efficiently. It simplifies common operations (like searching, sorting, copying and comparison) on the...</p><p class="reading-time"><i aria-hidden="true" class="fa fa-clock-o"></i> 19 min read <span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span></p></a></li></ul></div><br/><div class="container-xxl" style="position:relative;margin-top:-20px"><div class="aboutus themecolor subscribe"><div class="container px-lg-5 text-center"><h4 class="mb-4 animated zoomIn mediumheading">Subscribe to Tpoint Tech</h4><p class="pb-3 animated zoomIn text-center">We request you to subscribe our newsletter for upcoming updates.</p><div class="position-relative w-100 mt-3"><input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" id="email" placeholder="Your Email" style="height:48px" type="email"/> <button class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2" id="subscribeBtn" type="button">Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i></button></div><p class="mt-3" id="message"></p></div></div></div><br/><div class="ad-container" id="ad-container"></div><br/></div><div class="col-md-2"><div class="advertisement"><div id="sidebar_300x600_1_bq_307_556"></div><div id="sidebar_300x600_2_bq_307_557"></div><div id="sidebar_300x600_3_bq_307_558"></div></div></div></div><script>function closePopup(){document.getElementById("popup").style.display="none"}setTimeout((function(){localStorage.getItem("popupShown")||(document.getElementById("popup").style.display="flex",localStorage.setItem("popupShown","true"))}),5e3)</script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>$(document).ready((function(){$("#subscribeBtn").click((function(){var e=$("#email").val().trim();""!==e?$.ajax({url:"/subscribe",type:"POST",contentType:"application/json",data:JSON.stringify({email:e}),beforeSend:function(){$("#subscribeBtn").prop("disabled",!0).html("Subscribing...")},success:function(e){$("#message").html("<span style='color: green;'>Subscription successful! Please check your email.</span>"),$("#email").val("")},error:function(e){var s=e.responseJSON?e.responseJSON.error:"Subscription failed.";$("#message").html("<span style='color: red;'>"+s+"</span>")},complete:function(){$("#subscribeBtn").prop("disabled",!1).html('Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i>')}}):$("#message").html("<span style='color: red;'>Please enter your email.</span>")}))}))</script><div class="container-fluid footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"><div class="container py-5"><div class="row"><div class="col-md-6 col-lg-5"><img alt="Logo" src="https://images.tpointtech.com/static/images/logo.png"/><p>We provides tutorials and interview questions of all technology like java tutorial, android, java frameworks</p><h5 class="mb-4">Contact info</h5><p><svg viewbox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg>G-13, 2nd Floor, Sec-3, Noida, UP, 201301, India</p><p><svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v128z"></path></svg><a href="mailto:hr@tpointtech.com">hr@tpointtech.com</a></p><p><svg fill="currentColor" height="1.8em" stroke="currentColor" stroke-width="0" viewbox="0 0 24 24" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.49 3c-2.21 0-4.21.9-5.66 2.34l1.06 1.06a6.47 6.47 0 0 1 9.18 0l1.06-1.06A7.932 7.932 0 0 0 16.49 3z"></path><path d="M20.03 7.46a5.022 5.022 0 0 0-7.08 0l1.06 1.06c.63-.63 1.51-1.03 2.47-1.03s1.84.39 2.47 1.03l1.08-1.06zM15.08 9.59 16.49 11l1.41-1.41c-.36-.37-.86-.59-1.41-.59s-1.05.22-1.41.59z"></path><path d="m15.63 14.4-2.52 2.5c-2.5-1.43-4.57-3.5-6-6l2.5-2.52c.23-.24.33-.57.27-.9L9.13 3.8c-.09-.46-.5-.8-.98-.8H4c-.56 0-1.03.47-1 1.03.17 2.89 1.05 5.6 2.43 7.97 1.58 2.73 3.85 4.99 6.57 6.57 2.37 1.37 5.08 2.26 7.97 2.43.56.03 1.03-.44 1.03-1v-4.15c0-.48-.34-.89-.8-.98l-3.67-.73a.985.985 0 0 0-.9.26z"></path></svg><a href="tel:+919599086977">+91-9599086977</a></p><h5 class="mb-4">Follow us</h5><div class="d-flex"><a class="btn btn-outline-light btn-social" href="https://www.facebook.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Facebook Page" src="https://images.tpointtech.com/static/img/facebook.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://x.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech X Page" src="https://images.tpointtech.com/static/images/x.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/tpointtech/" rel="nofollow" target="_blank"><img alt="Tpoint Tech Linkedin Page" src="https://images.tpointtech.com/static/images/linkedin.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://t.me/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Telegram Channel" src="https://images.tpointtech.com/static/images/telegram.png" width="24"/></a><a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@tpointtechofficial" rel="nofollow" target="_blank"><img alt="Tpoint Tech Youtube Channel" src="https://images.tpointtech.com/static/img/youtube.png"/></a><a class="btn btn-outline-light btn-social" href="https://www.instagram.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech instagram Page" src="https://images.tpointtech.com/static/images/insta.png" width="24"/></a></div></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Tutorials</h5><a class="btn btn-link" href="/java-tutorial">Java</a> <a class="btn btn-link" href="/data-structure-tutorial">Data Structures</a> <a class="btn btn-link" href="/c-programming-language-tutorial">C Programming</a> <a class="btn btn-link" href="/cpp-tutorial">C++ Tutorial</a> <a class="btn btn-link" href="/c-sharp-tutorial">C# Tutorial</a> <a class="btn btn-link" href="/php-tutorial">PHP Tutorial </a><a class="btn btn-link" href="/html-tutorial">HTML Tutorial</a> <a class="btn btn-link" href="/javascript-tutorial">JavaScript Tutorial </a><a class="btn btn-link" href="/jquery-tutorial">jQuery Tutorial </a><a class="btn btn-link" href="/spring-tutorial">Spring Tutorial</a></div><div class="col-md-6 col-lg-3"><h5 class="mb-4">Interview Questions</h5><a class="btn btn-link" href="/microsoft-interview-questions">Microsoft </a><a class="btn btn-link" href="/amazon-interview-questions">Amazon </a><a class="btn btn-link" href="/adobe-interview-questions">Adobe </a><a class="btn btn-link" href="/intuit-interview-questions">Intuit </a><a class="btn btn-link" href="/accenture-interview-questions">Accenture</a> <a class="btn btn-link" href="/cognizant-interview-questions">Cognizant </a><a class="btn btn-link" href="/capgemini-interview-questions">Capgemini </a><a class="btn btn-link" href="/wipro-interview-questions">Wipro </a><a class="btn btn-link" href="/tcs-interview-questions">Tcs </a><a class="btn btn-link" href="/infosys-interview-questions">Infosys</a></div><div class="col-md-6 col-lg-2"><h5 class="mb-4">Online Compiler</h5><a class="btn btn-link" href="/compiler/c">C </a><a class="btn btn-link" href="/compiler/r">R </a><a class="btn btn-link" href="/compiler/cpp">C++ </a><a class="btn btn-link" href="/compiler/php">Php </a><a class="btn btn-link" href="/compiler/java">Java </a><a class="btn btn-link" href="/compiler/html">Html </a><a class="btn btn-link" href="/compiler/swift">Swift </a><a class="btn btn-link" href="/compiler/python">Python </a><a class="btn btn-link" href="/compiler/javascript">JavaScript </a><a class="btn btn-link" href="/compiler/typescript">TypeScript</a></div></div></div><div class="container text-center px-lg-5"><div class="col-md-12 text-center mb-3 mb-md-0"></div><a href="/latest-post">Latest Post</a> | <a href="/tutorials-list">Tutorials List</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/about-us">About Us</a> | <a href="/contact-us">Contact Us</a></div><div class="copyright"><div class="row"><div class="col-md-12 text-center mb-3 mb-md-0">© Copyright 2011 - 2025 TpointTech.com. All Rights Reserved.</div></div></div></div></div></section><div aria-hidden="true" aria-labelledby="searchModalLabel" class="modal fade" id="searchModal" tabindex="-1"><div class="modal-dialog modal-dialog-scrollable modal-lg"><div class="modal-content shadow rounded-3"><div class="modal-header text-white"><img alt="TPoint Tech Logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" style="height:30px;margin-right:10px"/> <button aria-label="Close" class="btn-close btn-close-black" data-bs-dismiss="modal" type="button"></button></div><div class="modal-body" id="modalResults"></div></div></div></div><a class="btn btn-info btn-floating btn-lg" href="#" id="scrollButton"><i class="fas fa-arrow-up"></i></a><script defer="defer" src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script><script defer="defer" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.12.1/polyfill.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js"></script><script src="/static/js/categoryDetails.js"></script><script src="/static/js/shcoreandbrush.js"></script><script>dp.SyntaxHighlighter.HighlightAll("code")</script><script async="" src="/static/js/lazysizes.min.js"></script><script src="/static/js/main.js"></script><script>const hamburger=document.querySelector(".hamburger"),navMenu=document.querySelector(".nav");function open_menu(){hamburger.classList.toggle("active"),navMenu.classList.toggle("active")}hamburger?.addEventListener("click",open_menu);const navLink=document.querySelectorAll(".nav-link");function closeMenu(){hamburger?.classList?.remove("active"),navMenu?.classList?.remove("active")}navLink.forEach((e=>e.addEventListener("click",closeMenu)))</script><script>function toggleSidebar(){let e=document.querySelector(".col-md-2.sidebar"),l=document.querySelector(".leftmenu");window.innerWidth<=895&&("none"===e.style.display?(e.style.display="block",l.style.display="block",e.style.position="fixed",e.style.zIndex="555"):(e.style.display="none",l.style.display="none"))}toggleSidebar()</script><script>function handleAccordionOnLoad(){const o=window.innerWidth<=768,e=window.location.pathname,c=document.querySelectorAll(".leftmenu a"),n=document.querySelectorAll(".accordion-collapse");o?(n.forEach((o=>o.classList.remove("show"))),c.forEach((o=>{if(o.getAttribute("href")===e){const e=o.closest(".accordion-item");if(e){const o=e.querySelector(".accordion-collapse");o&&o.classList.add("show")}}}))):n.forEach((o=>o.classList.add("show")))}handleAccordionOnLoad(),window.addEventListener("resize",handleAccordionOnLoad)</script><script>const showhide=s=>{const e=$("#answer"+s),a=$("#btntext"+s);a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-black.png)"),"block"===e.css("display")?(e.css("display","none"),a.text("Show Answer")):(e.css("display","block"),a.empty(),a.parent().css("background-image","url(https://tpointtech-images.s3.eu-north-1.amazonaws.com/images/eye-close-black.png)"),a.append("Hide Answer"))}</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");e&&e.addEventListener("wheel",(function(t){0!==t.deltaY&&(t.preventDefault(),e.scrollLeft+=t.deltaY)}))}))</script><script>document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("link");let t=!1,n=0,s=0;e.addEventListener("mousedown",(a=>{t=!0,e.classList.add("active"),n=a.pageX,s=e.scrollLeft})),["mouseup","mouseleave"].forEach((n=>{e.addEventListener(n,(()=>{t=!1,e.classList.remove("active")}))})),e.addEventListener("mousemove",(a=>{if(!t)return;a.preventDefault();const d=a.pageX-n;e.scrollLeft=s-d})),e.addEventListener("dragstart",(e=>e.preventDefault()))}))</script><script>let currentPage=1;const resultsPerPage=10;let fullData=[];function renderModalPage(e){const t=fullData.slice(0,100),l=10*(e-1),n=l+10,r=t.slice(l,n);let a="";const i=l+1,o=n>t.length?t.length:n;a+=`<div style="padding: 2px 0; font-size: 14px; color: #555;">\n      Showing ${i}–${o} of ${fullData.length.toLocaleString()} results\n    </div>`,a+="<ul>",r.forEach((e=>{a+=e.url?`<li><a href="${e.url}">${e.title} -Tpoint Tech <br><span style='color:#918a8a;font-size:13px;'>${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</span><br></a></li>`:`<li>${e.title} -Tpoint Tech <br> ${e.title} with examples. Let's start learning ${e.title} in detail on our website tpointtech.com</li>`})),a+="</ul>";const s=Math.ceil(t.length/10);if(s>1){a+='<div class="pagination-numbers" style="text-align:center;margin-top:15px;">';for(let t=1;t<=s;t++)a+=`<span class="pagination-number" onclick="renderModalPage(${t})" style="margin:0 5px;cursor:pointer;color:${t===e?"#000":"#007bff"};">${t}</span>`;a+="</div>"}$("#modalResults").html(a)}function changePage(e){currentPage=e,renderModalPage(currentPage)}function performSearch(e,t=!1){e.length<2?$("#results").empty().hide():$.get("/search",{q:e},(function(e){if($("#results").empty(),0===e.length?$("#results").append("<li>No results found</li>"):e.forEach((e=>{const t=e.url?`<li><a href="${e.url}">${e.title}</a></li>`:`<li>${e.title}</li>`;$("#results").append(t)})),$("#results").show(),t){fullData=e,currentPage=1,renderModalPage(currentPage);new bootstrap.Modal(document.getElementById("searchModal")).show()}}))}$("#searchInput").on("input",(function(){performSearch($(this).val().trim())})),$("#searchInput").on("keypress",(function(e){if(13===e.which){e.preventDefault();performSearch($(this).val().trim(),!0)}})),$(document).on("click",(function(e){$(e.target).closest("#searchContainer").length||$("#results").hide()}))</script><script>const searchInput=document.getElementById("searchInput"),iconSearch=document.getElementById("iconSearch"),iconClear=document.getElementById("iconClear"),searchBtn=document.getElementById("searchBtn");searchInput.addEventListener("input",(()=>{""!==searchInput.value.trim()?(iconSearch.style.display="none",iconClear.style.display="inline"):(iconSearch.style.display="inline",iconClear.style.display="none")})),searchBtn.addEventListener("click",(e=>{""!==searchInput.value.trim()&&(e.preventDefault(),searchInput.value="",iconSearch.style.display="inline",iconClear.style.display="none",$("#results").empty().hide(),searchInput.focus())}))</script></body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>