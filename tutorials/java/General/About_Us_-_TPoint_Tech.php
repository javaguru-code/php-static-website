<?php
// Tutorial: About Us - TPoint Tech
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>About Us - TPoint Tech</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tutorial-container">
        <h1>About Us - TPoint Tech</h1>
        <body>
<div class="xyz sticky-top shadow-sm">
<div class="sticky-top p-0" style="position: sticky; background-color: var(--light);">
<!-- Navbar & Hero Start -->
<div class="container-fluid">
<div class="position-relative p-0">
<nav class="navbar navbar-expand-lg navbar-light px-4 py-lg-0">
<a class="navbar-brand p-0" href="/">
<img alt="Logo" height="48" id="logo" src="https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg" width="179"/>
</a>
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
<div class="jtp-nav">
<button class="navbar-toggler float-left" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button">
<span class="fa fa-bars"></span>
</button>
</div>
<div class="collapse navbar-collapse" id="navbarCollapse">
<!--<ul class="d-flex">
              <li>
                  <div onclick="toggleDarkMode()" class="theme-icon dark-mode-icon">
                      <i id="dark-mode-icon" class="fas fa-moon"></i>
                  </div>
              </li>
          </ul>-->
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
</div><div class="borderedelement"></div>
</div>
<script async="" src="https://cse.google.com/cse.js?cx=548338c60d2224ac4"></script>
<script>
  // Function to apply theme colors
  function applyTheme(colors) {
      const root = document.documentElement;
      Object.keys(colors).forEach(key => {
          root.style.setProperty(key, colors[key]);
      });
  }

  // Load theme colors from localStorage on page load
  window.addEventListener('load', () => {
      const savedTheme = JSON.parse(localStorage.getItem('themeColors'));
      if (savedTheme) {
          applyTheme(savedTheme);
      }
  });

  // Save selected theme colors to localStorage
  function setThemeColors(newColors) {
      localStorage.setItem('themeColors', JSON.stringify(newColors));
      applyTheme(newColors);
  }
</script>
<!-- DARK MODE JS -->
<script>
 function setThemeColors(colors) {
    const root = document.documentElement;
    Object.keys(colors).forEach(key => {
        root.style.setProperty(key, colors[key]);
    });
    localStorage.setItem('themeColors', JSON.stringify(colors));
}

function toggleDarkMode() {
      const body = document.body;
      const icon = document.getElementById('dark-mode-icon');
      const logo = document.getElementById('logo'); // Get logo element
      const isNightMode = body.classList.toggle('night-mode');

      if (isNightMode) {
          icon.classList.remove('fa-moon');
          icon.classList.add('fa-sun');
          localStorage.setItem('theme', 'night');

          // Change to dark mode logo
          logo.src = "https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg";
      } else {
          icon.classList.remove('fa-sun');
          icon.classList.add('fa-moon');
          localStorage.setItem('theme', 'day');

          // Change to light mode logo
          logo.src = "https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg";
      }
  }

  // Load theme settings on page load
  window.addEventListener('load', () => {
      const savedThemeColors = JSON.parse(localStorage.getItem('themeColors'));
      const savedTheme = localStorage.getItem('theme');
      const logo = document.getElementById('logo'); // Get logo element

      if (savedThemeColors) {
          setThemeColors(savedThemeColors);
      }

      if (savedTheme === 'night') {
          document.body.classList.add('night-mode');
          document.getElementById('dark-mode-icon').classList.remove('fa-moon');
          document.getElementById('dark-mode-icon').classList.add('fa-sun');

          // Change to dark mode logo on page load
          logo.src = "https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/light-logo.svg";
      } else {
          // Default to light mode logo
          logo.src = "https://tpointtech-images.s3.eu-north-1.amazonaws.com/static/images/dark-logo.svg";
      }
  });
</script>
<div id="link" style="clear:both;position:sticky;z-index: 99;">
<div class="ddsmoothmenu">
<span>
<button class="jt-nav float-left accordion accordion-flush" data-bs-target="#navbarCollapse" data-bs-toggle="jt-nav" onclick="toggleSidebar()" style="color: white;width: 50px;margin-top:8px;margin-left: 20px;font-size:20px;background:none;box-shadow: none;border:none;" type="button">
<span class="fa fa-bars"></span>
</button>
</span>
<!-- Menu Start-->
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
<!-- Menu End-->
</div>
</div>
</div>
<section class="about-us-section py-5">
<div class="container">
<div class="row align-items-center">
<!-- Image Section -->
<div class="col-lg-4 mb-4 mb-lg-0 text-center">
<img alt="About Us" class="img-fluid rounded shadow-lg" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=400&amp;q=80"/>
</div>
<!-- Content Section -->
<div class="col-lg-8">
<h2 class="mb-4">About TpointTech</h2>
<p>
            At <strong>TPoint Tech</strong>,
            is an all-in-one educational platform dedicated to providing learners at every stage, from school students
            to working
            professionals. Our comprehensive tutorials offer a wide range of subjects, including a special focus on
            computer science
            and other core academic topics, as well as productivity tools like Excel and Word. In addition, it covers
            competitive
            exam prep also such as UPSC and other govt. exams.
            <br/><br/>
            With a growing global user base including countries such as United States, UK, India, Germany and
            other countries exceeding
            millions of users visiting daily, TpointTech delivers a vast collection of tutorials, online coding
            platform, online compilers in
            every language such as Python, Java, C++, PHP, JavaScript and several others. Here, you find Concept guides,
            interview preparation
            MCQs content, and other learning materials to complete both your academic and career-focused goals.
          </p>
<!-- <ul class="list-unstyled mt-4">
                    <li class="mb-3">
                      <i class="fa fa-check-circle text-success me-2"></i>
                      Industry-standard curriculum in Java, Python, PHP, and Power BI
                    </li>
                    <li class="mb-3">
                      <i class="fa fa-check-circle text-success me-2"></i>
                      Both Online and Offline Training Programs
                    </li>
                    <li class="mb-3">
                      <i class="fa fa-check-circle text-success me-2"></i>
                      100% practical sessions & real-time project exposure
                    </li>
                    <li class="mb-3">
                      <i class="fa fa-check-circle text-success me-2"></i>
                      Trusted by thousands of learners and professionals
                    </li>
                  </ul> -->
<a class="btn mt-3" href="/contact-us" style="background-color:var(--primary);color:var(--light)">Get in
            Touch</a>
</div>
<div class="col-lg-12">
<h2 class="mb-4">Who We Are?</h2>
<p>
            We’re specially known for our excellence in providing concise, comprehensive, informative and to the point
            tutorials on
            Python, Java, PHP, JavaScript, AI, ML and other several top notch tutorials as well as we provide interview
            preparation
            materials. With the help of our expert-curated content, mock interview questions, and detailed
            company-specific interview
            ideas helping thousands and lakhs of students by getting their secure positions at top tech companies.
            <br/><br/>
            Our career-focused tutorials in trending domains such as AI (Artificial Intelligence), ML (Machine
            Learning), Python, Data Structures and Algorithms (DSA), and Web Development are developed to help
            professionals pivot into tech-driven roles.
            <br/><br/>
            All content is carefully developed and curated by our Tech Content Developer experts and industry
            professionals from best institutions, ensuring it is accurate, practical, and learner-friendly. We focus on
            clarity, accessibility, and practical learning, not only covers the theoretical part in fact provide a real
            word example to our learners to understand even the complex terms in an easy way. Our Motive is "Practical
            is much better than Theoretical". TpointTech supports both students and professionals in transforming
            curiosity into real-world expertise.
          </p>
<strong class="mb-5">Every Second, More than 10 Thousands Readers Read More than 1000 of our Website Pages</strong>
<p>
            Our tutorial content and resources are freely and easily accessible by simply visiting
            <a href="https://www.tpointtech.com">https://www.tpointtech.com.</a> Here, one can access more than 100+
            tutorials and other study
            materials that encourage our readers. On this website, we don't require to sign up and login with us or
            submit
            any type of details to get our free tutorials library.
            <br/><br/>
            No Restrictions and no Limit, Just Read, Do Practical, Boost Your Knowledge and more. We have established an
            all-in-one Tutorial Content Marketplace to access it easily.
            <br/><br/>
<strong>You can also visit our official YouTube channel:</strong>
<a href="https://www.youtube.com/@tpointtechofficial">https://www.youtube.com/@tpointtechofficial.</a> To
            access some popular programming languages tutorials content such as Java, Python, C++, C, and more into a
            video format.
          </p>
<h2 class="mb-4">Our Goal</h2>
<p>
            At TpointTech, we don’t just provide content; we promote a community where learning, collaboration, and
            growth are encouraged in the ever-evolving world of technology and education. Our goal is to deliver easy to
            read, concise, informative and quality content with clear, and to-the-point content on a wide range of
            technical and non-technical subjects.
          </p>
<h2 class="mb-4">Our History</h2>
<p>
            TpointTech was founded in 2011 by Mr. Sonoo Jaiswal, a well-educated and expert in computer science.
            TpointTech started as a simple educational website which allows easy access to programming languages for the
            coders or programmers. Over the years, it has evolved into a leading educational website that supports
            learners across various domains, from academics to career development.
            <br/><br/>
            By offering high-quality, accessible learning resources that connect theoretical knowledge with practical
            skills provide individuals to excel academically and professionally.

          </p>
<h2 class="mb-4">Vision</h2>
<p>
            To become the most trusted, inclusive, and comprehensive learning platform equipping people from diverse
            backgrounds with the tools they need to gain knowledge, grow their skills, and achieve their career goals at
            some popular IT companies, such as IBM, Google, Wipro, etc.
            <br/>
<strong>"Learn, Practice, and Excel Embracing a culture of continuous learning, hands-on engagement, and
              personal excellence across disciplines.</strong>
</p>
<h2 class="mb-4">Founder</h2>
<p>
            Sonoo Jaiswal, the founder of TpointTech, is an iconic in the education space and a highly respected
            computer science mentor. His deep passion for coding and teaching (especially Java programming language)
            laid the foundation for what has now become one of the most impactful learning platforms. Under his
            guidance, TpointTech has obtained new heights and transforming from a normal idea into a global community of
            learners. His leadership continues to inspire all the team of TpointTech to innovate, push restrictions, and
            deliver exceptional educational experiences that shape future-ready individuals.
          </p>
</div>
</div>
</div>
</section>
<!-- Footer links Start-->
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

<!-- Footer links End-->


<!-- Back to Top -->
<a class="btn btn-info btn-floating btn-lg" href="#" id="scrollButton"><i class="fas fa-arrow-up"></i></a>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/static/lib/wow/wow.min.js"></script>
<script src="/static/lib/easing/easing.min.js"></script>
<script src="/static/lib/waypoints/waypoints.min.js"></script>
<script src="/static/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/static/lib/isotope/isotope.pkgd.min.js"></script>
<!-- Include polyfills for older browsers -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.12.1/polyfill.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js"></script>
<!-- Template Javascript -->
<script src="/static/js/categoryDetails.js"></script>
<script src="/static/js/shcoreandbrush.js"></script>
<script> dp.SyntaxHighlighter.HighlightAll('code'); </script>
<script async="" src="/static/js/lazysizes.min.js"></script>
<script src="/static/js/main.js"></script>
<!-- Google Analytics -->
<script>
      var _gaq = _gaq || [];
      _gaq.push(["_setAccount", "UA-24880427-1"]);
      _gaq.push(["_trackPageview"]);
      (function () {
        var ga = document.createElement("script");
        ga.type = "text/javascript";
        ga.async = true;
        ga.src = ("https:" == document.location.protocol ? "https://ssl" : "https://www") + ".google-analytics.com/ga.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>
</body>
        <p><a href="../index.php">Back to Index</a></p>
    </div>
</body>
</html>