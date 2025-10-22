<?php
// Tutorial: Tpoint Tech - Free Online Tutorials
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tpoint Tech - Free Online Tutorials</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>Tpoint Tech - Free Online Tutorials</h1>
        <body class="home" onload="updateImageLink()">
<!-- Navbar & Hero Start -->
<div class="sticky-top p-0" style="position: sticky; background-color: var(--sidebar);"> <!-- class="bg-primary p-0" -->
<!-- Navbar & Hero Start -->
<div class="container-fluid">
<div class="position-relative p-0">
<nav class="navbar navbar-expand-lg navbar-light px-4 py-lg-0">
<a class="navbar-brand p-0" href="/">
<img alt="Logo" height="48" id="logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" width="179"/>
</a>
<div class="jtp-nav homepage">
<button class="navbar-toggler float-left" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button">
<span class="fa fa-bars"></span>
</button>
</div>
<div class="collapse navbar-collapse" id="navbarCollapse">
<!-- Mega Menu Start-->
<div class="navbar-nav">
<div class="nav-item show">
<a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding: 2.2rem;">Tutorials</a>
<div class="dropdown-menu w-100 mt-0" id="tutorials">
<div class="container">
<div class="row overlay jtp-megamenu">
<div class="mega_menuClose">
<button class="jtp-btn">
<span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick="megaMenu_close('tutorials')" style="float: right;color:white;padding-right: 4rem;">×</span><br/>
</button>
</div>
<div class="mega_menu">
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
<div class="list-group list-group-flush">
<h3 class="jtp-list-group-item">Python</h3>
<a class="jtp-list-group-item list-group-item-action" href="/python-tutorial">Python Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/django-tutorial">Django Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/numpy-tutorial">Numpy Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/python-pandas">Pandas Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/python-tkinter">Tkinter Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/pytorch">Pytorch Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/flask-tutorial">Flask Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/opencv">OpenCV Tutorial</a>
<h3 class="jtp-list-group-item">Java</h3>
<a class="jtp-list-group-item list-group-item-action" href="/java-tutorial">Java Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/servlet-tutorial">Servlet Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/jsp-tutorial">JSP Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/spring-boot-tutorial">Spring Boot Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/spring-tutorial">Spring Framework Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/hibernate-tutorial">Hibernate Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/javafx-tutorial">JavaFX Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/java-web-services-tutorial">Java Web Services Tutorial</a>
<h3 class="jtp-list-group-item">.Net Framework</h3>
<a class="jtp-list-group-item list-group-item-action" href="/net-framework">.Net Framework Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/c-sharp-tutorial">C# Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/asp-net-tutorial">ASP.Net Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/ado-net-tutorial">ADO.Net Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/wpf">WPF Tutorial</a>
</div>
</div>
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
<div class="list-group list-group-flush">
<h3 class="jtp-list-group-item">AI, ML and Data Science</h3>
<a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-ai">Artificial Intelligence Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/machine-learning">Machine Learning Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/data-science">Data Science Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/deep-learning">Deep Learning Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/tensorflow">TensorFlow Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/artificial-neural-network">Artificial Neural Network Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/matplotlib">Matplotlib Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/python-scipy">Python Scipy Tutorial</a>
<h3 class="jtp-list-group-item">Cloud Technology</h3>
<a class="jtp-list-group-item list-group-item-action" href="/cloud-computing">Cloud Computing Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/aws-tutorial">AWS Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/microsoft-azure">Microsoft Azure Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/salesforce">Salesforce Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/google-cloud-platform">GCP Tutorial</a>
<h3 class="jtp-list-group-item">B.Tech and MCA</h3>
<a class="jtp-list-group-item list-group-item-action" href="/dbms-tutorial">DBMS Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/data-structure-tutorial">Data Structures Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/operating-system">Operating System Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/computer-network-tutorial">Computer Network Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/daa-tutorial">DAA Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/computer-organization-and-architecture-tutorial">Computer Organization Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/software-engineering">Software Engineering Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/data-mining">Data Mining Tutorial</a>
</div>
</div>
<div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend">
<div class="list-group list-group-flush">
<h3 class="jtp-list-group-item">Web Technology</h3>
<a class="jtp-list-group-item list-group-item-action" href="/html-tutorial">HTML Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/css-tutorial">CSS Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/javascript-tutorial">JavaScript Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/jquery-tutorial">Jquery Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/angular-8">Angular 8 Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/reactjs-tutorial">React Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/react-native-tutorial">React Native Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/nodejs-tutorial">Node.js Tutorial</a>
<h3 class="jtp-list-group-item">PHP</h3>
<a class="jtp-list-group-item list-group-item-action" href="/php-tutorial">PHP Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/mysql-tutorial">MySQL Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/laravel">Laravel Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/wordpress-tutorial">WordPress Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/codeigniter-tutorial">CodeIgniter Tutorial</a>
<h3 class="jtp-list-group-item">Software Testing</h3>
<a class="jtp-list-group-item list-group-item-action" href="/software-testing-tutorial">Software Testing Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/selenium-tutorial">Selenium Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/jira-tutorial">JIRA Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/jmeter-tutorial">JMeter Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/postman">Postman Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/testng-tutorial">TestNG Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/soapui">SoapUI Tutorial</a>
<a class="jtp-list-group-item list-group-item-action" href="/cucumber-testing">Cucumber Tutorial</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="nav-item show">
<a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding: 2.2rem;">Interview</a>
<div class="dropdown-menu w-100 mt-0" id="interview-questions">
<div class="container">
<div class="row overlay jtp-megamenu">
<div class="mega_menuClose">
<button class="jtp-btn">
<span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick="megaMenu_close('interview-questions')" style="float: right;color:white;padding-right: 4rem;">×</span><br/>
</button>
</div>
<div class="mega_menu">
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
<div class="list-group list-group-flush">
<h3 class="jtp-list-group-item">Technical Interview</h3>
<a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions">Python Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/corejava-interview-questions">Java Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/dot-net-interview-questions">.Net Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/cpp-interview-questions">C++ Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/react-interview-questions">React Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/node-js-interview-questions">Node.js Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/angular-interview-questions">Angular Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/hr-interview-questions">HR Interview Questions</a>
<h3 class="jtp-list-group-item">Java Interview</h3>
<a class="jtp-list-group-item list-group-item-action" href="/spring-boot-interview-questions">Spring Boot Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/spring-interview-questions">Spring Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/hibernate-interview-questions">Hibernate Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/jdbc-interview-questions">JDBC Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/servletinterview">Servlet Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/maven-interview-questions">Maven Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/jenkins-interview-questions">Jenkins Interview Questions</a>
<h3 class="jtp-list-group-item">Python</h3>
<a class="jtp-list-group-item list-group-item-action" href="/django-interview-questions-and-answers">Django Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/python-pandas-interview-questions">Pandas Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/expressjs-interview-questions">Express.js Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/python-coding-interview-questions">Python Coding Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/python-interview-questions-for-five-years-experienced">Python Interview Questions for 5 Years</a>
</div>
</div>
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
<div class="list-group list-group-flush">
<h3 class="jtp-list-group-item">Web Interview</h3>
<a class="jtp-list-group-item list-group-item-action" href="/html-interview-questions">HTML Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/css-interview-questions">CSS Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/javascript-interview-questions">JavaScript Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">Jquery Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/php-interview-questions">PHP Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/laravel-interview-questions">Laravel Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/ajax-interview-questions">AJAX Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/front-end-developer-interview-questions">Front-End Developer Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/jquery-interview-questions">jQuery Interview Questions</a>
<h3 class="jtp-list-group-item">Database Interview</h3>
<a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/sql-interview-questions">SQL Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/pl-sql-interview-questions">PL/SQL Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/oracle-interview-questions">Oracle Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/mongodb-interview-questions">MongoDB Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/redis-interview-questions-and-answers">Redis Interview Questions</a>
<h3 class="jtp-list-group-item">B.Tech / MCA</h3>
<a class="jtp-list-group-item list-group-item-action" href="/dbms-interview-questions">DBMS Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/operating-system-interview-questions">Operating System Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/oops-interview-questions">OOPs Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/data-structure-interview-questions">DSA Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/networking-interview-questions">Computer Networks Interview Questions</a>
</div>
</div>
<div class="col-md-6 col-lg-3 mb-3 mb-md-0 jtp-backend">
<div class="list-group list-group-flush">
<h3 class="jtp-list-group-item">Important Interview</h3>
<a class="jtp-list-group-item list-group-item-action" href="/c-interview-questions">C Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/power-bi-interview-questions">Power BI Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/excel-interview-questions">Excel Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/c-sharp-interview-questions">C# Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/machine-learning-interview-questions">Machine Learning Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/aws-interview-questions">AWS Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/microservices-interview-questions">Microservices Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/mysql-interview-questions">MySQL Interview Questions</a>
<h3 class="jtp-list-group-item">Software Testing Interview</h3>
<a class="jtp-list-group-item list-group-item-action" href="/software-testing-interview-questions">Manual Testing Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/selenium-interview-questions">Selenium Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/api-testing-interview-questions">API Testing Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/etl-testing-interview-questions">ETL Testing Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/mobile-testing-interview-questions">Mobile Testing Interview Questions</a>
<h3 class="jtp-list-group-item">Company Interviews</h3>
<a class="jtp-list-group-item list-group-item-action" href="/ibm-interview-questions">IBM Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/adobe-interview-questions">Adobe Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/microsoft-interview-questions">Microsoft Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/amazon-interview-questions">Amazon Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/tcs-interview-questions">TCS Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/wipro-interview-questions">Wipro Interview Questions</a>
<a class="jtp-list-group-item list-group-item-action" href="/accenture-interview-questions">Accenture Interview Questions</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="nav-item show">
<a class="nav-link dropdown-toggle" data-bs-auto-close="false" data-bs-toggle="dropdown" href="#" style="padding: 2.2rem;">Compiler</a>
<div class="dropdown-menu w-100 mt-0" id="compiler-menu">
<div class="container">
<div class="row overlay jtp-megamenu">
<div class="mega_menuClose">
<button class="jtp-btn">
<span class="float-end jtp-xxxlarge jtp-display-topright closeaccbtn jtp-hide-small" onclick="megaMenu_close('compiler-menu')" style="float: right; color: white; padding-right: 4rem;">×</span><br/>
</button>
</div>
<div class="mega_menu">
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
<div class="list-group list-group-flush">
<h3 class="jtp-list-group-item">Online Compilers</h3>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/python">
                  Python Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/java">
                  Java Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/php">
                  PHP Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/c">
                  C Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/cpp">
                  C++ Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/html">
                  HTML Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/javascript">
                  JavaScript Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/typescript">
                  TypeScript Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/r">
                  R Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/swift">
                  Swift Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/kotlin">
                  Kotlin Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/go">
                 Go Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/csharp">
                  C# Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/perl">
                 Perl Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/groovy">
                  Groovy Online Compiler
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/compiler/html-css-javascript">
                  HTML, CSS &amp; JavaScript Online Editor
              </a>
</div>
</div>
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
<div class="list-group list-group-flush">
<h3 class="jtp-list-group-item">Multiple Choice Questions</h3>
<a class="jtp-list-group-item list-group-item-action" href="/python-mcq">
                  Python MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/java-mcq">
                  Java MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/php-mcq">
                  PHP MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/c-language-mcq">
                  C Programming MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/cpp-mcq">
                  C++ MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/html-mcq">
                  HTML mcq
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/javascript-mcq">
                  JavaScript MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/sql-mcq">
                SQL MCQ
            </a>
<a class="jtp-list-group-item list-group-item-action" href="/operating-system-mcq">
                  Operating System MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/computer-fundamental-mcq">
                  Computer Fundamental MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/computer-network-mcq">
                  Computer Network MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/dbms-mcq">
                  DBMS MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/data-structure-mcq">
                 Data Structure MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/software-engineering-mcq">
                  Software Engineering MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/cloud-computing-mcq">
                 Cloud Computing MCQ
              </a>
<a class="jtp-list-group-item list-group-item-action" href="/artificial-intelligence-mcq">
                  Artificial Intelligence MCQ
              </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Mega Menu End-->
<ul class="d-flex">
<li>
<div class="theme-icon dark-mode-icon" onclick="toggleDarkMode()">
<i class="fas fa-moon" id="dark-mode-icon"></i>
</div>
</li>
<li>
<div class="theme-icon" onclick="setThemeColors({'--primary': '#059862', '--secondary': '#B6DDE2', '--light': '#FFFFFF', '--dark': '#1C2833', '--sidebar': '#eef7f0', '--hoverprimary': '#05593a', '--codecompile': '#dce8dc'})" style="background-color: #059862;"></div>
</li>
<li>
<div class="theme-icon" onclick="setThemeColors({'--primary': '#0D4549', '--secondary': '#b6dde2', '--light': '#FFFFFF', '--dark': '#17202A', '--sidebar': '#F0FAFB', '--hoverprimary': '#0b3133', '--codecompile': '#d9e5e5'})" style="background-color: #0D4549;"></div>
</li>
<li>
<div class="theme-icon" onclick="setThemeColors({'--primary': '#231760', '--secondary': '#B6DDE2', '--light': '#FFFFFF', '--dark': '#1D1D27', '--sidebar': '#e7f6fd', '--hoverprimary': '#0b3133', '--codecompile': '#d9e5e5'})" style="background-color: #231760;"></div>
</li>
<li>
<div class="theme-icon" onclick="setThemeColors({'--primary': '#286562', '--secondary': '#B6DDE2', '--light': '#FFFFFF', '--dark': '#1D1D27', '--sidebar': '#ECF0F1', '--hoverprimary': '#0b3133', '--codecompile': '#d9e5e5'})" style="background-color: #286562;"></div>
</li>
</ul>
</div>
</nav>
</div>
</div>
<div class="borderedelement"></div>
</div>
<!-- menu link start-->
<div id="link" style="clear:both;position:sticky;z-index: 99;">
<div class="ddsmoothmenu">
<span>
<button class="jt-nav float-left accordion accordion-flush" data-bs-target="#navbarCollapse" data-bs-toggle="jt-nav" onclick="toggleSidebar()" style="color: white;width: 50px;margin-top:8px;margin-left: 20px;font-size:20px;background:none;box-shadow: none;border:none;" type="button">
<span class="fa fa-bars"></span>
</button>
</span>
<ul class="nav" style="display: inline-flex;margin-left: auto; line-height: 2rem;">
<!--<li class="nav-item">
        <a class="nav-link" href="/"> <img src="https://static.javatpoint.com/images/icon/home.png" alt="home">Home</a>
      </li>-->
<li class="nav-item">
<a class="nav-link" href="/python-tutorial">
<img alt="Python Logo" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/python.svg" width="16"/>
        Python
      </a></li>
<li class="nav-item">
<a class="nav-link" href="/java-tutorial"><img alt="java" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Java.svg" width="16"/> Java</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/javascript-tutorial"><img alt="javascript" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/JS.svg" width="16"/> JavaScript</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/sql-tutorial"><img alt="sql" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/SQL.svg" width="16"/> SQL</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/c-programming-language-tutorial"><img alt="c" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/C.svg" width="16"/> C</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/cpp-tutorial"><img alt="c++" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Cpp.svg" width="16"/> C++</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/html-tutorial"> <img alt="html" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/HTML.svg" width="16"/> HTML</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/css-tutorial"> <img alt="css" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/CSS.svg" width="16"/> CSS</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/reactjs-tutorial"> <img alt="React" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/react.svg" width="16"/> React</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/nodejs-tutorial"><img alt="Node.js" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/nodejs.svg" width="16"/> Node.js</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/spring-boot-tutorial"><img alt="Spring Boot" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/spring-boot.svg" width="16"/> Spring Boot</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/c-sharp-tutorial"><img alt="c#" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/csharp.svg" width="16"/> C#</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/php-tutorial"><img alt="php" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/PHP.svg" width="16"/> PHP</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/mysql-tutorial"><img alt="MySQL" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mysql.svg" width="16"/> MySQL</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/mongodb-tutorial"><img alt="MongoDB" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/mongodb.svg" width="16"/> MongoDB</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/artificial-intelligence-ai"><img alt="Artificial Intelligence" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/AI.svg" width="16"/> AI</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/machine-learning"><img alt="Machine Learning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/ML.svg" width="16"/> ML</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/data-structures-and-algorithms-dsa"><img alt="data structures" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DS.svg" width="16"/> DSA</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/dbms-tutorial"><img alt="dbms" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/DBMS.svg" width="16"/> DBMS</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/operating-system"><img alt="Operating System" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/OS.svg" width="16"/> OS</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/aptitude/quantitative"><img alt="aptitude" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Aptitude.svg" width="16"/> Aptitude</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/reasoning"><img alt="reasoning" height="16" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/Reasoning.svg" width="16"/> Reasoning</a>
</li>
</ul>
</div>
</div>
<!-- menu link end-->
<!-- <div class="borderedelement"></div> -->
<div class="p-0" style="background-color: var(--sidebar);"> <!-- class="bg-primary p-0" -->
<div class="container">
<div class="position-relative p-0">
<div class="hero-header mb-5" style="background-color: var(--sidebar);">
<div class="container my-5">
<div class="row g-5 d-flex align-items-center">
<!-- LEFT SECTION -->
<div class="col-lg-6 text-center text-lg-start"> <!-- already responsive -->
<div class="w-100 mx-auto">
<p class="subheading d-none d-lg-block" id="text"></p>
<script>
                                                const text = "The 14+ Years of Trust with New Name Tpoint Tech";
                                                let i = 0;
                                                const speed = 100;
                                                function typeWriter() {
                                                    i < 51 ? (document.getElementById("text").innerHTML += text.charAt(i), i++, setTimeout(typeWriter, 100)) : setTimeout(resetText, 1e3)
                                                }
                                                function resetText() {
                                                    i = 0,
                                                    document.getElementById("text").innerHTML = "",
                                                    typeWriter()
                                                }
                                                typeWriter()
                                                </script>
<h1 class="mb-4 animated zoomIn Heading text-center text-lg-start">Welcome to Tpoint Tech</h1>
<p class="pb-3 animated zoomIn submain d-none d-lg-block">
                                        Get access to 500+ tutorials from top instructors around the world in one place.
                                    </p>
<div class="w-100" id="search-box">
<div id="searchContainer" style="position: relative;">
<input autocomplete="off" id="searchInput" placeholder="Search..." type="text"/>
<!-- Button (dynamic icon inside) -->
<button aria-label="Search" id="searchBtn" style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
<span id="iconSearch">
<!-- Search Icon -->
<svg fill="none" height="20" stroke="green" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
<circle cx="11" cy="11" r="8"></circle>
<line x1="21" x2="16.65" y1="21" y2="16.65"></line>
</svg>
</span>
<span id="iconClear" style="display: none;">
<!-- X Icon -->
<svg fill="none" height="20" stroke="red" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
<line x1="6" x2="18" y1="6" y2="18"></line>
<line x1="6" x2="18" y1="18" y2="6"></line>
</svg>
</span>
</button>
<ul id="results"></ul>
</div>
</div>
</div>
</div>
<!-- RIGHT SECTION -->
<div class="col-lg-6 text-center text-lg-start d-none d-lg-block">
<div class="img-right d-flex">
<img alt="Banner-2" src="https://images.tpointtech.com/images/small_home.png" style="height: fit-content;"/>
<img alt="Banner Main" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/home-1.webp"/>
<div class="rect small">
<h3><strong>500+</strong><br/>TUTORIALS</h3>
</div>
</div>
<div class="relativesection">
<img alt="Shape-4" src="/static/img/shape4.png"/>
<img alt="Shape-2" class="roundanim" src="/static/img/shape2.png"/>
<img alt="Shape-3" class="roundanim" src="/static/img/shape3.png"/>
<img alt="Shape-1" class="roundanim" src="/static/img/shape1.png"/>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Navbar & Hero End -->
<!-- Logo slider starts -->
<div class="container">
<!--  <div class="float--left">
            <h2 class="mb-4 animated zoomIn mediumheading">Tutorials</h2>
            <p class="pb-3 animated zoomIn subhead">Start learning programming language of your choice.</p>
        </div> -->
<!-- Vertical section starts -->
<section class="course-sections py-5">
<div class="container">
<div class="row">
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">Python</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="python-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Python" src="https://images.tpointtech.com/images/homeicon/python.png"/>
<div class="course-name">Python</div>
</div></a>
<a href="selenium-python">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Selenium Python" src="https://images.tpointtech.com/images/homeicon/selenium-python.png"/>
<div class="course-name">Selenium Python</div>
</div></a>
<a href="django-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Django" src="https://images.tpointtech.com/images/homeicon/django.png"/>
<div class="course-name">Django</div>
</div></a>
<a href="flask-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Flask" src="https://images.tpointtech.com/images/homeicon/flask.png"/>
<div class="course-name">Flask</div>
</div></a>
<a href="numpy-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="NumPy" src="https://images.tpointtech.com/images/homeicon/numpy.png"/>
<div class="course-name">NumPy</div>
</div></a>
<a href="python-tkinter">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Tkinter" src="https://images.tpointtech.com/images/homeicon/tkinter.png"/>
<div class="course-name">Tkinter</div>
</div></a>
<a href="pytorch">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Pytorch" src="https://images.tpointtech.com/images/homeicon/pytorch.png"/>
<div class="course-name">Pytorch</div>
</div></a>
<a href="pygame">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Pygame" src="https://images.tpointtech.com/images/homeicon/pygame.png"/>
<div class="course-name">Pygame</div>
</div></a>
<a href="python-scipy">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Scipy" src="https://images.tpointtech.com/images/homeicon/scipy.png"/>
<div class="course-name">Scipy</div>
</div></a>
<a href="python-pandas">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Pandas" src="https://images.tpointtech.com/images/homeicon/pandas.png"/>
<div class="course-name">Pandas</div>
</div></a>
<a href="opencv">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="OpenCV" src="https://images.tpointtech.com/images/homeicon/opencv.png"/>
<div class="course-name">OpenCV</div>
</div></a>
<a href="matplotlib">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Matplotlib" src="https://images.tpointtech.com/images/homeicon/matplotlib.png"/>
<div class="course-name">Matplotlib</div>
</div></a>
<a href="python-openpyxl">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Openpyxl" src="https://images.tpointtech.com/images/homeicon/openpyxl.png"/>
<div class="course-name">Openpyxl</div>
</div></a>
<a href="kivy">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Kivy" src="https://images.tpointtech.com/images/homeicon/kivy.png"/>
<div class="course-name">Kivy</div>
</div></a>
<a href="jupyter-notebook">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Jupyter" src="https://images.tpointtech.com/images/homeicon/jupyter.png"/>
<div class="course-name">Jupyter</div>
</div></a>
<a href="python-cgi-programming">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Python CGI Programming" src="https://images.tpointtech.com/images/homeicon/cgi.png"/>
<div class="course-name">Python CGI Programming</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">Java</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="java-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Java" src="https://images.tpointtech.com/images/homeicon/new/core-java.png"/>
<div class="course-name">Java</div>
</div></a>
<a href="servlet-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Servlet" src="https://images.tpointtech.com/images/homeicon/new/servlet.png"/>
<div class="course-name">Servlet</div>
</div></a>
<a href="jsp-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="JSP" src="https://images.tpointtech.com/images/homeicon/jsp.png"/>
<div class="course-name">JSP</div>
</div></a>
<a href="spring-boot-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Spring Boot" src="https://images.tpointtech.com/images/homeicon/spring-boot.png"/>
<div class="course-name">Spring Boot</div>
</div></a>
<a href="spring-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Spring Framework" src="https://images.tpointtech.com/images/homeicon/spring.png"/>
<div class="course-name">Spring Framework</div>
</div></a>
<a href="hibernate-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Hibernate" src="https://images.tpointtech.com/images/homeicon/hibernate.png"/>
<div class="course-name">Hibernate</div>
</div></a>
<a href="java-web-services-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Java Web Services" src="https://images.tpointtech.com/images/homeicon/java-ws.png"/>
<div class="course-name">Java Web Services</div>
</div></a>
<a href="spring-cloud">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Spring Cloud" src="https://images.tpointtech.com/images/homeicon/spring-cloud.png"/>
<div class="course-name">Spring Cloud</div>
</div></a>
<a href="java-swing">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Java Swing" src="https://images.tpointtech.com/images/homeicon/new/java-swing.png"/>
<div class="course-name">Java Swing</div>
</div></a>
<a href="javafx-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="JavaFX" src="https://images.tpointtech.com/images/homeicon/new/java-fx.png"/>
<div class="course-name">JavaFX</div>
</div></a>
<a href="apache-poi-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Apache POI" src="https://images.tpointtech.com/images/homeicon/poi.png"/>
<div class="course-name">Apache POI</div>
</div></a>
<a href="jsf-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="JSF" src="https://images.tpointtech.com/images/homeicon/jsf.png"/>
<div class="course-name">JSF</div>
</div></a>
<a href="jstl">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="JSTL" src="https://images.tpointtech.com/images/homeicon/jstl.png"/>
<div class="course-name">JSTL</div>
</div></a>
<a href="java-mail-api-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Java Mail" src="https://images.tpointtech.com/images/homeicon/new/java-mail.png"/>
<div class="course-name">Java Mail</div>
</div></a>
<a href="java-io">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Java I/O" src="https://images.tpointtech.com/images/homeicon/new/java-io.png"/>
<div class="course-name">Java I/O</div>
</div></a>
<a href="java-awt">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Java AWT" src="https://images.tpointtech.com/images/homeicon/new/java-awt.png"/>
<div class="course-name">Java AWT</div>
</div></a>
<a href="java-date">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Java Date" src="https://images.tpointtech.com/images/homeicon/new/java-date.png"/>
<div class="course-name">Java Date</div>
</div></a>
<a href="java-9-features">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Java 9" src="https://images.tpointtech.com/images/homeicon/new/java-9.png"/>
<div class="course-name">Java 9</div>
</div></a>
<a href="java-8-features">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Java 8" src="https://images.tpointtech.com/images/homeicon/new/java-8.png"/>
<div class="course-name">Java 8</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">PHP</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="php-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="PHP" src="https://images.tpointtech.com/images/logo/php-logo.png"/>
<div class="course-name">PHP</div>
</div></a>
<a href="framework7-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Framework7" src="https://images.tpointtech.com/framework7/images/framework7-home.jpg"/>
<div class="course-name">Framework7</div>
</div></a>
<a href="laravel">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Laravel" src="https://images.tpointtech.com/tutorial/laravel/images/laravel-home.png"/>
<div class="course-name">Laravel</div>
</div></a>
<a href="wordpress-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="WordPress" src="https://images.tpointtech.com/wordpress/images/wordpress.png"/>
<div class="course-name">WordPress</div>
</div></a>
<a href="codeigniter-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="CodeIgniter" src="https://images.tpointtech.com/codeigniter/images/codeigniter-home.png"/>
<div class="course-name">CodeIgniter</div>
</div></a>
<a href="magento-2">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Magento 2" src="https://images.tpointtech.com/tutorial/magento2/images/magento-home.png"/>
<div class="course-name">Magento 2</div>
</div></a>
<a href="joomla">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Joomla" src="https://images.tpointtech.com/tutorial/joomla/images/joomla-home.png"/>
<div class="course-name">Joomla</div>
</div></a>
<a href="phalcon-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Phalcon" src="https://images.tpointtech.com/phalcon/images/phalcon-home.jpg"/>
<div class="course-name">Phalcon</div>
</div></a>
<a href="yii-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="YII" src="https://images.tpointtech.com/yii/images/yii-home.png"/>
<div class="course-name">YII</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">Software Testing</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="software-testing-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Software Testing" src="https://images.tpointtech.com/images/homeicon/software-testing.png"/>
<div class="course-name">Software Testing</div>
</div></a>
<a href="agile">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Agile" src="https://images.tpointtech.com/images/homeicon/agile.png"/>
<div class="course-name">Agile</div>
</div></a>
<a href="jira-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="JIRA" src="https://images.tpointtech.com/images/homeicon/jira.png"/>
<div class="course-name">JIRA</div>
</div></a>
<a href="bugzilla">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Bugzilla" src="https://images.tpointtech.com/images/homeicon/bugzilla.png"/>
<div class="course-name">Bugzilla</div>
</div></a>
<a href="etl-testing">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="ETL" src="https://images.tpointtech.com/images/homeicon/etl.png"/>
<div class="course-name">ETL</div>
</div></a>
<a href="jmeter-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="JMeter" src="https://images.tpointtech.com/images/homeicon/jmeter.png"/>
<div class="course-name">JMeter</div>
</div></a>
<a href="quality-assurance">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="QA" src="https://images.tpointtech.com/images/homeicon/quality-assurance.png"/>
<div class="course-name">QA</div>
</div></a>
<a href="testng-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="TestNG" src="https://images.tpointtech.com/images/homeicon/new/testng.png"/>
<div class="course-name">TestNG</div>
</div></a>
<a href="automation-anywhere">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Automation Anywhere" src="https://images.tpointtech.com/images/homeicon/automation-anywhere.png"/>
<div class="course-name">Automation Anywhere</div>
</div></a>
<a href="uipath">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="UiPath" src="https://images.tpointtech.com/images/homeicon/uipath.png"/>
<div class="course-name">UiPath</div>
</div></a>
<a href="selenium-python">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Selenium Python" src="https://images.tpointtech.com/images/homeicon/selenium-python.png"/>
<div class="course-name">Selenium Python</div>
</div></a>
<a href="postman">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Postman" src="https://images.tpointtech.com/images/homeicon/postman.png"/>
<div class="course-name">Postman</div>
</div></a>
<a href="junit-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Junit" src="https://images.tpointtech.com/images/homeicon/junit.png"/>
<div class="course-name">Junit</div>
</div></a>
<a href="soapui">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="SoapUI" src="https://images.tpointtech.com/images/homeicon/soapui.png"/>
<div class="course-name">SoapUI</div>
</div></a>
<a href="rpa">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="RPA" src="https://images.tpointtech.com/images/homeicon/rpa.png"/>
<div class="course-name">RPA</div>
</div></a>
<a href="manual-testing">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Manual Testing" src="https://images.tpointtech.com/images/homeicon/manual-testing.png"/>
<div class="course-name">Manual Testing</div>
</div></a>
<a href="cucumber-testing">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Cucumber" src="https://images.tpointtech.com/images/homeicon/cucumber.png"/>
<div class="course-name">Cucumber</div>
</div></a>
<a href="appium">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Appium" src="https://images.tpointtech.com/images/homeicon/appium.png"/>
<div class="course-name">Appium</div>
</div></a>
<a href="mobile-application-testing">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Mobile Testing" src="https://images.tpointtech.com/images/homeicon/mobile-testing.png"/>
<div class="course-name">Mobile Testing</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">.NET Framework</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="net-framework">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt=".Net" src="https://images.tpointtech.com/images/homeicon/dot-net.png"/>
<div class="course-name">.Net</div>
</div></a>
<a href="c-sharp-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="C#" src="https://images.tpointtech.com/csharp/images/c-sharp-home.png"/>
<div class="course-name">C#</div>
</div></a>
<a href="asp-net-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="ASP.NET" src="https://images.tpointtech.com/asp/images/asp-net-home.png"/>
<div class="course-name">ASP.NET</div>
</div></a>
<a href="ado-net-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="ADO.NET" src="https://images.tpointtech.com/ado/images/ado-net-home.jpg"/>
<div class="course-name">ADO.NET</div>
</div></a>
<a href="wpf">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="WPF" src="https://images.tpointtech.com/tutorial/wpf/images/wpf-home.png"/>
<div class="course-name">WPF</div>
</div></a>
<a href="ssrs">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="SSRS" src="https://images.tpointtech.com/tutorial/ssrs/images/ssrs-home.png"/>
<div class="course-name">SSRS</div>
</div></a>
<a href="ssis">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="SSIS" src="https://images.tpointtech.com/tutorial/ssis/images/ssis-home.png"/>
<div class="course-name">SSIS</div>
</div></a>
<a href="web-api">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Web API" src="https://images.tpointtech.com/tutorial/webapi/images/web-api-home.png"/>
<div class="course-name">Web API</div>
</div></a>
<a href="linq">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="LINQ" src="https://images.tpointtech.com/tutorial/linq/images/linq-home.png"/>
<div class="course-name">LINQ</div>
</div></a>
<a href="sharepoint">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="SharePoint" src="https://images.tpointtech.com/tutorial/sharepoint/images/sharepoint-home.png"/>
<div class="course-name">SharePoint</div>
</div></a>
<a href="f-sharp-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="F#" src="https://images.tpointtech.com/fsharp/images/fsharp-home.png"/>
<div class="course-name">F#</div>
</div></a>
<a href="vb-net">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="VB.NET" src="https://images.tpointtech.com/tutorial/vb-net/images/vb-net-home.png"/>
<div class="course-name">VB.NET</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">B.Tech/MCA</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="dbms-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="DBMS" src="https://images.tpointtech.com/images/homeicon/dbms.png"/>
<div class="course-name">DBMS</div>
</div></a>
<a href="data-structure-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Data Structures" src="https://images.tpointtech.com/images/homeicon/data-structures.png"/>
<div class="course-name">Data Structures</div>
</div></a>
<a href="daa-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="DAA" src="https://images.tpointtech.com/images/homeicon/daa.png"/>
<div class="course-name">DAA</div>
</div></a>
<a href="operating-system">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Operating System" src="https://images.tpointtech.com/images/homeicon/operating-system.png"/>
<div class="course-name">Operating System</div>
</div></a>
<a href="computer-network-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Computer Network" src="https://images.tpointtech.com/images/homeicon/computer-network.png"/>
<div class="course-name">Computer Network</div>
</div></a>
<a href="compiler-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Compiler Design" src="https://images.tpointtech.com/images/homeicon/compiler-design.png"/>
<div class="course-name">Compiler Design</div>
</div></a>
<a href="computer-organization-and-architecture-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Computer Organization" src="https://images.tpointtech.com/images/homeicon/computer-organization.png"/>
<div class="course-name">Computer Organization</div>
</div></a>
<a href="discrete-mathematics-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Discrete Mathematics" src="https://images.tpointtech.com/images/homeicon/discrete-mathematics.png"/>
<div class="course-name">Discrete Mathematics</div>
</div></a>
<a href="ethical-hacking">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Ethical Hacking" src="https://images.tpointtech.com/images/homeicon/ethical-hacking.png"/>
<div class="course-name">Ethical Hacking</div>
</div></a>
<a href="computer-graphics-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Computer Graphics" src="https://images.tpointtech.com/images/homeicon/computer-graphics.png"/>
<div class="course-name">Computer Graphics</div>
</div></a>
<a href="software-engineering">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Software Engineering" src="https://images.tpointtech.com/images/homeicon/software-engineering.png"/>
<div class="course-name">Software Engineering</div>
</div></a>
<a href="c-programming-language-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="C Programming" src="https://images.tpointtech.com/images/homeicon/c-programming.png"/>
<div class="course-name">C Programming</div>
</div></a>
<a href="cpp-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="C++" src="https://images.tpointtech.com/images/homeicon/cpp.png"/>
<div class="course-name">C++</div>
</div></a>
<a href="java-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Java" src="https://images.tpointtech.com/images/homeicon/new/core-java.png"/>
<div class="course-name">Java</div>
</div></a>
<a href="net-framework">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt=".Net" src="https://images.tpointtech.com/images/homeicon/dot-net.png"/>
<div class="course-name">.Net</div>
</div></a>
<a href="python-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Python" src="https://images.tpointtech.com/images/homeicon/python.png"/>
<div class="course-name">Python</div>
</div></a>
<a href="programs-list">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Programs" src="https://images.tpointtech.com/images/homeicon/programs.png"/>
<div class="course-name">Programs</div>
</div></a>
<a href="control-system-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Control System" src="https://images.tpointtech.com/images/homeicon/control-system.png"/>
<div class="course-name">Control System</div>
</div></a>
<a href="data-mining">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Data Mining" src="https://images.tpointtech.com/images/homeicon/data-mining.png"/>
<div class="course-name">Data Mining</div>
</div></a>
<a href="data-warehouse">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Data Warehouse" src="https://images.tpointtech.com/images/homeicon/data-warehouse.png"/>
<div class="course-name">Data Warehouse</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">Trending Technology</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="angular-8">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Angular 8" src="https://images.tpointtech.com/images/homeicon/angular-8.png"/>
<div class="course-name">Angular 8</div>
</div></a>
<a href="reactjs-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="ReactJS" src="https://images.tpointtech.com/images/homeicon/react.png"/>
<div class="course-name">ReactJS</div>
</div></a>
<a href="react-native-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="React Native" src="https://images.tpointtech.com/images/homeicon/react-native.png"/>
<div class="course-name">React Native</div>
</div></a>
<a href="artificial-intelligence-ai">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Artificial Intelligence" src="https://images.tpointtech.com/images/homeicon/artificial-intelligence.png"/>
<div class="course-name">Artificial Intelligence</div>
</div></a>
<a href="aws-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="AWS" src="https://images.tpointtech.com/images/homeicon/amazon-web-services.png"/>
<div class="course-name">AWS</div>
</div></a>
<a href="selenium-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Selenium" src="https://images.tpointtech.com/images/homeicon/selenium.png"/>
<div class="course-name">Selenium</div>
</div></a>
<a href="cloud-computing">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Cloud Computing" src="https://images.tpointtech.com/images/homeicon/cloud-computing.png"/>
<div class="course-name">Cloud Computing</div>
</div></a>
<a href="hadoop-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Hadoop" src="https://images.tpointtech.com/images/homeicon/hadoop.png"/>
<div class="course-name">Hadoop</div>
</div></a>
<a href="data-science">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Data Science" src="https://images.tpointtech.com/images/homeicon/data-science.png"/>
<div class="course-name">Data Science</div>
</div></a>
<a href="angular-7-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Angular 7" src="https://images.tpointtech.com/images/homeicon/angular7.png"/>
<div class="course-name">Angular 7</div>
</div></a>
<a href="git">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Git" src="https://images.tpointtech.com/images/homeicon/git.png"/>
<div class="course-name">Git</div>
</div></a>
<a href="machine-learning">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Machine Learning" src="https://images.tpointtech.com/images/homeicon/machine-learning.png"/>
<div class="course-name">Machine Learning</div>
</div></a>
<a href="microsoft-azure">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Azure" src="https://images.tpointtech.com/images/homeicon/azure.png"/>
<div class="course-name">Azure</div>
</div></a>
<a href="google-cloud-platform">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Google Cloud" src="https://images.tpointtech.com/images/homeicon/google-cloud-platform.png"/>
<div class="course-name">Google Cloud</div>
</div></a>
<a href="angularjs-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="AngularJS" src="https://images.tpointtech.com/js/angularjs/images/angularjs-logo.png"/>
<div class="course-name">AngularJS</div>
</div></a>
<a href="nodejs-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Node.js" src="https://images.tpointtech.com/js/nodejs/images/nodejs-logo.png"/>
<div class="course-name">Node.js</div>
</div></a>
<a href="power-bi">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Power BI" src="https://images.tpointtech.com/tutorial/power-bi/images/power-bi-home.png"/>
<div class="course-name">Power BI</div>
</div></a>
<a href="go-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Go Lang" src="https://images.tpointtech.com/go/images/go-home.jpg"/>
<div class="course-name">Go Lang</div>
</div></a>
<a href="typescript-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="TypeScript" src="https://images.tpointtech.com/tutorial/typescript/images/typescript-home.png"/>
<div class="course-name">TypeScript</div>
</div></a>
<a href="github">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="GitHub" src="https://images.tpointtech.com/tutorial/github/images/github-home.png"/>
<div class="course-name">GitHub</div>
</div></a>
<a href="flutter">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Flutter" src="https://images.tpointtech.com/tutorial/flutter/images/flutter-home.png"/>
<div class="course-name">Flutter</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">Web Technology</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="html-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="HTML" src="https://images.tpointtech.com/images/logo/html-tutorial.png"/>
<div class="course-name">HTML</div>
</div></a>
<a href="css-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="CSS" src="https://images.tpointtech.com/images/logo/css3.jpg"/>
<div class="course-name">CSS</div>
</div></a>
<a href="javascript-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="JavaScript" src="https://images.tpointtech.com/images/logo/javascripthome.png"/>
<div class="course-name">JavaScript</div>
</div></a>
<a href="jquery-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="jQuery" src="https://images.tpointtech.com/images/logo/jquery.png"/>
<div class="course-name">jQuery</div>
</div></a>
<a href="jquery-ui-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="jQuery UI" src="https://images.tpointtech.com/images/logo/jquery-ui.jpg"/>
<div class="course-name">jQuery UI</div>
</div></a>
<a href="xml-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="XML" src="https://images.tpointtech.com/images/logo/xml-home.png"/>
<div class="course-name">XML</div>
</div></a>
<a href="json-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="JSON" src="https://images.tpointtech.com/images/logo/json.png"/>
<div class="course-name">JSON</div>
</div></a>
<a href="bootstrap-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Bootstrap" src="https://images.tpointtech.com/bootstrappages/images/bootstrap-logo.jpg"/>
<div class="course-name">Bootstrap</div>
</div></a>
<a href="angularjs-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="AngularJS" src="https://images.tpointtech.com/js/angularjs/images/angularjs-logo.png"/>
<div class="course-name">AngularJS</div>
</div></a>
<a href="nodejs-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Node.js" src="https://images.tpointtech.com/js/nodejs/images/nodejs-logo.png"/>
<div class="course-name">Node.js</div>
</div></a>
<a href="expressjs-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Express.js" src="https://images.tpointtech.com/js/nodejs/express/images/expressjs-logo.png"/>
<div class="course-name">Express.js</div>
</div></a>
<a href="backbonejs-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Backbone" src="https://images.tpointtech.com/backbonejs/images/backbonejs-logo.png"/>
<div class="course-name">Backbone</div>
</div></a>
<a href="sass-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Sass" src="https://images.tpointtech.com/sass/images/sass.png"/>
<div class="course-name">Sass</div>
</div></a>
<a href="less-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Less" src="https://images.tpointtech.com/less/images/less-logo.png"/>
<div class="course-name">Less</div>
</div></a>
<a href="xslt-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="XSLT" src="https://images.tpointtech.com/xslt/images/xslt-home.png"/>
<div class="course-name">XSLT</div>
</div></a>
<a href="xpath-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="XPath" src="https://images.tpointtech.com/xpath/images/xpath-home.jpg"/>
<div class="course-name">XPath</div>
</div></a>
<a href="xquery-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="XQuery" src="https://images.tpointtech.com/xquery/images/xquery-home.png"/>
<div class="course-name">XQuery</div>
</div></a>
<a href="xhtml-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="XHTML" src="https://images.tpointtech.com/xhtml/images/xhtml-home.jpg"/>
<div class="course-name">XHTML</div>
</div></a>
<a href="pure-css-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Pure.CSS" src="https://images.tpointtech.com/purecss/images/pure-css-home.png"/>
<div class="course-name">Pure.CSS</div>
</div></a>
<a href="materialize-css-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Materialize" src="https://images.tpointtech.com/materializecss/images/materialize-home.png"/>
<div class="course-name">Materialize</div>
</div></a>
<a href="http-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="HTTP" src="https://images.tpointtech.com/tutorial/http/images/http-home.png"/>
<div class="course-name">HTTP</div>
</div></a>
<a href="dhtml">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="DHTML" src="https://images.tpointtech.com/tutorial/dhtml/images/dhtml-home.png"/>
<div class="course-name">DHTML</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">Database</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="sql-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="SQL" src="https://images.tpointtech.com/images/homeicon/sql.png"/>
<div class="course-name">SQL</div>
</div></a>
<a href="pl-sql-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="PL/SQL" src="https://images.tpointtech.com/images/homeicon/pl-sql.png"/>
<div class="course-name">PL/SQL</div>
</div></a>
<a href="mysql-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="MySQL" src="https://images.tpointtech.com/images/homeicon/mysql.png"/>
<div class="course-name">MySQL</div>
</div></a>
<a href="mongodb-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="MongoDB" src="https://images.tpointtech.com/images/homeicon/mongodb.png"/>
<div class="course-name">MongoDB</div>
</div></a>
<a href="postgresql-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="PostgreSQL" src="https://images.tpointtech.com/images/homeicon/postgresql.png"/>
<div class="course-name">PostgreSQL</div>
</div></a>
<a href="sql-server-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="SQL Server" src="https://images.tpointtech.com/images/homeicon/sql-server.png"/>
<div class="course-name">SQL Server</div>
</div></a>
<a href="oracle-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Oracle" src="https://images.tpointtech.com/images/homeicon/oracle.png"/>
<div class="course-name">Oracle</div>
</div></a>
<a href="cassandra-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Cassandra" src="https://images.tpointtech.com/images/homeicon/cassandra.png"/>
<div class="course-name">Cassandra</div>
</div></a>
<a href="sqlite-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="SQLite" src="https://images.tpointtech.com/images/homeicon/sqlite.png"/>
<div class="course-name">SQLite</div>
</div></a>
<a href="neo4j-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Neo4j" src="https://images.tpointtech.com/images/homeicon/neo4j.png"/>
<div class="course-name">Neo4j</div>
</div></a>
<a href="couchdb-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="CouchDB" src="https://images.tpointtech.com/images/homeicon/couchdb.png"/>
<div class="course-name">CouchDB</div>
</div></a>
<a href="mariadb-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="MariaDB" src="https://images.tpointtech.com/images/homeicon/mariadb.png"/>
<div class="course-name">MariaDB</div>
</div></a>
<a href="db2-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="DB2" src="https://images.tpointtech.com/images/homeicon/db2.png"/>
<div class="course-name">DB2</div>
</div></a>
<a href="pouchdb-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="PouchDB" src="https://images.tpointtech.com/images/homeicon/pouchdb.png"/>
<div class="course-name">PouchDB</div>
</div></a>
<a href="redis-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Redis" src="https://images.tpointtech.com/images/homeicon/redis.png"/>
<div class="course-name">Redis</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">Cloud Computing</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="aws-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="AWS" src="https://images.tpointtech.com/images/homeicon/amazon-web-services.png"/>
<div class="course-name">AWS</div>
</div></a>
<a href="cloud-computing">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Cloud Computing" src="https://images.tpointtech.com/images/homeicon/cloud-computing.png"/>
<div class="course-name">Cloud Computing</div>
</div></a>
<a href="microsoft-azure">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Azure" src="https://images.tpointtech.com/images/homeicon/azure.png"/>
<div class="course-name">Azure</div>
</div></a>
<a href="salesforce">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Salesforce" src="https://images.tpointtech.com/images/homeicon/salesforce.png"/>
<div class="course-name">Salesforce</div>
</div></a>
<a href="google-cloud-platform">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Google Cloud" src="https://images.tpointtech.com/images/homeicon/google-cloud-platform.png"/>
<div class="course-name">Google Cloud</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">Big Data Technologies</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="splunk">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Splunk" src="https://images.tpointtech.com/images/homeicon/splunk.png"/>
<div class="course-name">Splunk</div>
</div></a>
<a href="hadoop-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Hadoop" src="https://images.tpointtech.com/images/homeicon/hadoop.png"/>
<div class="course-name">Hadoop</div>
</div></a>
<a href="data-mining">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Data Mining" src="https://images.tpointtech.com/images/homeicon/data-mining.png"/>
<div class="course-name">Data Mining</div>
</div></a>
<a href="mongodb-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="MongoDB" src="https://images.tpointtech.com/images/homeicon/mongodb.png"/>
<div class="course-name">MongoDB</div>
</div></a>
<a href="cassandra-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Cassandra" src="https://images.tpointtech.com/images/homeicon/cassandra.png"/>
<div class="course-name">Cassandra</div>
</div></a>
<a href="apache-spark-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Spark" src="https://images.tpointtech.com/tutorial/spark/images/apache-spark-home.png"/>
<div class="course-name">Spark</div>
</div></a>
<a href="hive">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Hive" src="https://images.tpointtech.com/hadooppages/images/hive-home.png"/>
<div class="course-name">Hive</div>
</div></a>
<a href="tableau">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Tableau" src="https://images.tpointtech.com/tutorial/tableau/images/tableau-home.png"/>
<div class="course-name">Tableau</div>
</div></a>
<a href="tensorflow">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Tensorflow" src="https://images.tpointtech.com/tutorial/tensorflow/images/tensorflow-home.png"/>
<div class="course-name">Tensorflow</div>
</div></a>
<a href="apache-kafka">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Kafka" src="https://images.tpointtech.com/tutorial/kafka/images/kafka-home.png"/>
<div class="course-name">Kafka</div>
</div></a>
<a href="kubernetes">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Kubernetes" src="https://images.tpointtech.com/tutorial/kubernetes/images/kubernetes-home.png"/>
<div class="course-name">Kubernetes</div>
</div></a>
<a href="elasticsearch">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Elasticsearch" src="https://images.tpointtech.com/images/homeicon/elasticsearch.png"/>
<div class="course-name">Elasticsearch</div>
</div></a>
</div>
</div>
</div>
<div class="col-lg-12 section-content mb-5">
<!-- Section Heading -->
<h3 class="section-heading mb-4 text-center">Important Tutorials</h3>
<!-- Section Categories -->
<div class="categories-container d-flex flex-wrap justify-content-center">
<div class="courses-grid clients">
<a href="what-is-chatgpt">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="ChatGPT" src="https://images.tpointtech.com/images/homeicon/chatgpt.png"/>
<div class="course-name">ChatGPT</div>
</div></a>
<a href="r-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="R Programming" src="https://images.tpointtech.com/images/homeicon/r-programming.png"/>
<div class="course-name">R Programming</div>
</div></a>
<a href="devops">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="DevOps" src="https://images.tpointtech.com/images/homeicon/devops.png"/>
<div class="course-name">DevOps</div>
</div></a>
<a href="aptitude/quantitative">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Aptitude" src="https://images.tpointtech.com/images/homeicon/aptitude.png"/>
<div class="course-name">Aptitude</div>
</div></a>
<a href="reasoning">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Reasoning" src="https://images.tpointtech.com/images/homeicon/reasoning.png"/>
<div class="course-name">Reasoning</div>
</div></a>
<a href="verbal-ability">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Verbal Ability" src="https://images.tpointtech.com/images/homeicon/verbal-ability.png"/>
<div class="course-name">Verbal Ability</div>
</div></a>
<a href="jenkins">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Jenkins" src="https://images.tpointtech.com/images/homeicon/jenkins.png"/>
<div class="course-name">Jenkins</div>
</div></a>
<a href="excel-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Excel" src="https://images.tpointtech.com/ms/excel/images/excel-logo.png"/>
<div class="course-name">Excel</div>
</div></a>
<a href="android-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Android" src="https://images.tpointtech.com/images/logo/androidhome.png"/>
<div class="course-name">Android</div>
</div></a>
<a href="computer-fundamentals-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Computer" src="https://images.tpointtech.com/computer/images/computer-logo.png"/>
<div class="course-name">Computer</div>
</div></a>
<a href="linux-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Linux" src="https://images.tpointtech.com/linux/images/linux-logo.png"/>
<div class="course-name">Linux</div>
</div></a>
<a href="docker-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Docker" src="https://images.tpointtech.com/docker/images/docker-home.png"/>
<div class="course-name">Docker</div>
</div></a>
<a href="kotlin-tutorial">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Kotlin" src="https://images.tpointtech.com/kotlin/images/kotlin-home.png"/>
<div class="course-name">Kotlin</div>
</div></a>
<a href="tableau">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Tableau" src="https://images.tpointtech.com/tutorial/tableau/images/tableau-home.png"/>
<div class="course-name">Tableau</div>
</div></a>
<a href="math">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Math" src="https://images.tpointtech.com/math/images/math-home.jpeg"/>
<div class="course-name">Math</div>
</div></a>
<a href="dart-programming">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Dart" src="https://images.tpointtech.com/images/homeicon/dart.png"/>
<div class="course-name">Dart</div>
</div></a>
<a href="photoshop">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Photoshop" src="https://images.tpointtech.com/images/homeicon/photoshop.png"/>
<div class="course-name">Photoshop</div>
</div></a>
<a href="pyspark">
<div class="item">
<span class="arrow-position"><svg fill="currentColor" height="1.3rem" stroke="currentColor" stroke-width="0" viewbox="0 0 512 512" width="1.3rem" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg></span>
<img alt="Pyspark" src="https://images.tpointtech.com/images/homeicon/pyspark.png"/>
<div class="course-name">Pyspark</div>
</div></a>
</div>
</div>
</div>
</div>
</div>
</section>
<div aria-hidden="true" aria-labelledby="searchModalLabel" class="modal fade" id="searchModal" tabindex="-1">
<div class="modal-dialog modal-dialog-scrollable modal-lg">
<div class="modal-content shadow rounded-3">
<div class="modal-header text-white">
<img alt="TPoint Tech Logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" style="height: 30px; margin-right: 10px;"/>
<!-- <h5 class="modal-title" id="searchModalLabel">Search Results</h5> -->
<button aria-label="Close" class="btn-close btn-close-black" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body" id="modalResults">
<!-- Results injected via JavaScript -->
</div>
</div>
</div>
</div>
<!-- Vertical section endss -->
</div>
<!-- About Start -->
<div class="container-xxl py-5">
<div class="aboutus themecolor">
<div class="container px-lg-5">
<div class="row g-5">
<div class="col-lg-6 d-flex">
<div class="rounds"><img alt="Ellipse-1" src="/static/img/Ellipse 1.png"/>
<img alt="Ellipse-2" src="/static/img/Ellipse 2.png"/>
</div>
<img alt="About Jp" class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="/static/img/aboutjp.png"/>
<div class="rect">
<img alt="Followers" src="/static/img/followers.png"/>
<h3><strong>100K+</strong><br/>SUBSCRIBERS</h3>
</div>
</div>
<div class="col-lg-6 d-flex flex-column" data-wow-delay="0.1s">
<div class="section-title position-relative">
<p class="subheading">Youtube Channel</p>
<h2 class="mt-2 mediumheading">Explore Latest Tutorials by
                                Subscribing to Our YouTube Channel</h2>
</div>
<div class="d-flex align-items-center mt-4">
<a class="btn btn-primary rounded-pill px-4 me-3 btntheme" href="https://www.youtube.com/channel/UCUnYvQVCrJoFWZhKK3O2xLg" target="_blank"><i aria-hidden="true" class="fa fa-long-arrow-right"></i>
                                Join Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- About End -->
<!-- suscribe Start -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).ready(function () {
            $("#subscribeBtn").click(function () {
                var email = $("#email").val().trim();
                
                if (email === "") {
                    $("#message").html("<span style='color: red;'>Please enter your email.</span>");
                    return;
                }
    
                $.ajax({
                    url: "/subscribe", // Your Express.js API endpoint
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({ email: email }),
                    beforeSend: function() {
                        $("#subscribeBtn").prop("disabled", true).html("Subscribing...");
                    },
                    success: function (response) {
                        $("#message").html("<span style='color: green;'>Subscription successful! Please check your email.</span>");
                        $("#email").val("");
                    },
                    error: function (xhr) {
                        var errorMessage = xhr.responseJSON ? xhr.responseJSON.error : "Subscription failed.";
                        $("#message").html("<span style='color: red;'>" + errorMessage + "</span>");
                    },
                    complete: function() {
                        $("#subscribeBtn").prop("disabled", false).html('Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i>');
                    }
                });
            });
        });
    </script>
<!-- <div class="container-xxl" style="position: relative;">
    <div class="aboutus themecolor subscribe">
    <div class="container px-lg-5 text-center py-5">
        <h2 class="mb-4 animated zoomIn mediumheading">Subscribe Our Newsletter </h2>
        <p class="pb-3 animated zoomIn submain text-center">Get the latest updates or newsletter right at your inbox.</p>
        <div class="position-relative w-100 mt-3">
            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">Subscribe <i class="fa fa-paper-plane text-primary fs-4"></i></button>
        </div> 
        <p id="message" class="mt-3"></p>  
    </div>
    </div>
    </div> -->
<!-- subscribe End -->
<!-- Footer Start -->
<div class="container-fluid footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container py-5">
<div class="row">
<div class="col-md-6 col-lg-5">
<img alt="Logo" src="https://images.tpointtech.com/static/images/logo.png"/>
<p>We provides tutorials and interview questions of all technology like java tutorial, android, java frameworks</p>
<h5 class="mb-4">Contact info</h5>
<p><svg viewbox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg>G-13, 2nd Floor, Sec-3, Noida, UP, 201301, India</p>
<p><svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v128z"></path></svg><a href="mailto:hr@tpointtech.com">hr@tpointtech.com</a></p>
<p><svg fill="currentColor" height="1.8em" stroke="currentColor" stroke-width="0" viewbox="0 0 24 24" width="1.8em" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.49 3c-2.21 0-4.21.9-5.66 2.34l1.06 1.06a6.47 6.47 0 0 1 9.18 0l1.06-1.06A7.932 7.932 0 0 0 16.49 3z"></path><path d="M20.03 7.46a5.022 5.022 0 0 0-7.08 0l1.06 1.06c.63-.63 1.51-1.03 2.47-1.03s1.84.39 2.47 1.03l1.08-1.06zM15.08 9.59 16.49 11l1.41-1.41c-.36-.37-.86-.59-1.41-.59s-1.05.22-1.41.59z"></path><path d="m15.63 14.4-2.52 2.5c-2.5-1.43-4.57-3.5-6-6l2.5-2.52c.23-.24.33-.57.27-.9L9.13 3.8c-.09-.46-.5-.8-.98-.8H4c-.56 0-1.03.47-1 1.03.17 2.89 1.05 5.6 2.43 7.97 1.58 2.73 3.85 4.99 6.57 6.57 2.37 1.37 5.08 2.26 7.97 2.43.56.03 1.03-.44 1.03-1v-4.15c0-.48-.34-.89-.8-.98l-3.67-.73a.985.985 0 0 0-.9.26z"></path></svg><a href="tel:+919599086977">+91-9599086977</a></p>
<h5 class="mb-4">Follow us</h5>
<div class="d-flex">
<a class="btn btn-outline-light btn-social" href="https://www.facebook.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Facebook Page" src="https://images.tpointtech.com/static/img/facebook.png" width="24"/></a>
<a class="btn btn-outline-light btn-social" href="https://x.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech X Page" src="https://images.tpointtech.com/static/images/x.png" width="24"/></a>
<a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/tpointtech/" rel="nofollow" target="_blank"><img alt="Tpoint Tech Linkedin Page" src="https://images.tpointtech.com/static/images/linkedin.png" width="24"/></a>
<a class="btn btn-outline-light btn-social" href="https://t.me/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech Telegram Channel" src="https://images.tpointtech.com/static/images/telegram.png" width="24"/></a>
<a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@tpointtechofficial" rel="nofollow" target="_blank"><img alt="Tpoint Tech Youtube Channel" src="https://images.tpointtech.com/static/img/youtube.png"/></a>
<a class="btn btn-outline-light btn-social" href="https://www.instagram.com/tpointtech" rel="nofollow" target="_blank"><img alt="Tpoint Tech instagram Page" src="https://images.tpointtech.com/static/images/insta.png" width="24"/></a>
</div>
</div>
<div class="col-md-6 col-lg-2">
<h5 class="mb-4">Tutorials</h5>
<a class="btn btn-link" href="/java-tutorial">Java</a>
<a class="btn btn-link" href="/data-structure-tutorial">Data Structures</a>
<a class="btn btn-link" href="/c-programming-language-tutorial">C Programming</a>
<a class="btn btn-link" href="/cpp-tutorial">C++ Tutorial</a>
<a class="btn btn-link" href="/c-sharp-tutorial">C# Tutorial</a>
<a class="btn btn-link" href="/php-tutorial">PHP Tutorial </a>
<a class="btn btn-link" href="/html-tutorial">HTML Tutorial</a>
<a class="btn btn-link" href="/javascript-tutorial">JavaScript Tutorial </a>
<a class="btn btn-link" href="/jquery-tutorial">jQuery Tutorial </a>
<a class="btn btn-link" href="/spring-tutorial">Spring Tutorial</a>
</div>
<div class="col-md-6 col-lg-3">
<h5 class="mb-4">Interview Questions</h5>
<a class="btn btn-link" href="/microsoft-interview-questions">Microsoft </a>
<a class="btn btn-link" href="/amazon-interview-questions">Amazon </a>
<a class="btn btn-link" href="/adobe-interview-questions">Adobe </a>
<a class="btn btn-link" href="/intuit-interview-questions">Intuit </a>
<a class="btn btn-link" href="/accenture-interview-questions">Accenture</a>
<a class="btn btn-link" href="/cognizant-interview-questions">Cognizant </a>
<a class="btn btn-link" href="/capgemini-interview-questions">Capgemini </a>
<a class="btn btn-link" href="/wipro-interview-questions">Wipro </a>
<a class="btn btn-link" href="/tcs-interview-questions">Tcs </a>
<a class="btn btn-link" href="/infosys-interview-questions">Infosys </a>
</div>
<div class="col-md-6 col-lg-2">
<h5 class="mb-4">Online Compiler</h5>
<a class="btn btn-link" href="/compiler/c"> C </a>
<a class="btn btn-link" href="/compiler/r"> R </a>
<a class="btn btn-link" href="/compiler/cpp"> C++ </a>
<a class="btn btn-link" href="/compiler/php"> Php </a>
<a class="btn btn-link" href="/compiler/java"> Java  </a>
<a class="btn btn-link" href="/compiler/html"> Html </a>
<a class="btn btn-link" href="/compiler/swift"> Swift </a>
<a class="btn btn-link" href="/compiler/python"> Python </a>
<a class="btn btn-link" href="/compiler/javascript"> JavaScript </a>
<a class="btn btn-link" href="/compiler/typescript"> TypeScript </a>
</div>
</div>
</div>
<div class="container text-center px-lg-5">
<div class="col-md-12 text-center mb-3 mb-md-0"></div>
<a href="/latest-post">Latest Post</a> | <a href="/tutorials-list">Tutorials List</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/about-us">About Us</a> | <a href="/contact-us">Contact Us</a>
</div>
<div class="copyright">
<div class="row">
<div class="col-md-12 text-center mb-3 mb-md-0">
                    © Copyright 2011 - 2025 TpointTech.com. All Rights Reserved.
                </div>
</div>
</div>
</div>

<!-- Footer End -->
<!-- Back to Top -->
<a class="btn btn-info btn-floating btn-lg" href="#" id="scrollButton" style="position: fixed; bottom: 20px; right: 20px; border-radius: 50%;"><i class="fas fa-arrow-up"></i></a>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/static/lib/wow/wow.min.js"></script>
<script src="/static/lib/easing/easing.min.js"></script>
<script src="/static/lib/waypoints/waypoints.min.js"></script>
<script src="/static/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/static/lib/isotope/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>
<!-- Template Javascript -->
<script src="/static/js/main.js"></script>
</body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>