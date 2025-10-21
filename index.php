<?php
$page_title = 'Full Stack Master - Programming Tutorials';
$page_description = 'Full Stack Master - Learn programming with comprehensive tutorials on Java, MEAN/MERN Stack, and modern web technologies.';
$active_page = 'home';
include 'includes/header.php';
?>

    <!-- ============================================
         SECTION: Hero Section
         - Eye-catching introduction with CTA buttons
    ============================================= -->
    <header class="hero-section py-5 bg-gradient">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-3 fw-bold mb-4">Master Full Stack Development</h1>
                    <p class="lead mb-4">
                        Learn modern web development with comprehensive tutorials on Java, JavaScript, React, Angular, Spring Boot, and more. 
                        Start your journey from basics to advanced concepts.
                    </p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a href="./tutorials/java/core-java" class="btn btn-primary btn-lg px-4 gap-3">
                            <i class="bi bi-book"></i> Start Learning
                        </a>
                        <a href="#featured-tutorials" class="btn btn-outline-secondary btn-lg px-4">
                            Browse Tutorials
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ============================================
         SECTION: Featured Tutorials
         - Grid of tutorial categories with cards
    ============================================= -->
    <section id="featured-tutorials" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Tutorials</h2>
            <div class="row g-4">
                <!-- Java Technologies Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm hover-lift">
                        <div class="card-body">
                            <div class="text-primary mb-3">
                                <i class="bi bi-cup-hot" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Java Technologies</h5>
                            <p class="card-text">Master Java from fundamentals to enterprise frameworks including Spring Boot, Kafka, and more.</p>
                            <a href="java/core-java" class="btn btn-outline-primary">Explore Java</a>
                        </div>
                    </div>
                </div>
                
                <!-- MEAN/MERN Stack Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm hover-lift">
                        <div class="card-body">
                            <div class="text-success mb-3">
                                <i class="bi bi-layers" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">MEAN/MERN Stack</h5>
                            <p class="card-text">Build full-stack applications with Angular, React, Node.js, MongoDB, and modern databases.</p>
                            <a href="mern-stack/react" class="btn btn-outline-success">Explore Stack</a>
                        </div>
                    </div>
                </div>
                
                <!-- Web Basics Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm hover-lift">
                        <div class="card-body">
                            <div class="text-info mb-3">
                                <i class="bi bi-globe" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Web Basics</h5>
                            <p class="card-text">Start with HTML, CSS, JavaScript fundamentals and modern frameworks like Tailwind CSS.</p>
                            <a href="web-basics/html" class="btn btn-outline-info">Start Basics</a>
                        </div>
                    </div>
                </div>
                
                <!-- Tools Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm hover-lift">
                        <div class="card-body">
                            <div class="text-warning mb-3">
                                <i class="bi bi-tools" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Developer Tools</h5>
                            <p class="card-text">Master essential tools like Git, Docker, Jira for modern software development.</p>
                            <a href="tools/git" class="btn btn-outline-warning">Learn Tools</a>
                        </div>
                    </div>
                </div>
                
                <!-- Interview Prep Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm hover-lift">
                        <div class="card-body">
                            <div class="text-danger mb-3">
                                <i class="bi bi-briefcase" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Interview Preparation</h5>
                            <p class="card-text">Ace your technical interviews with curated questions and system design concepts.</p>
                            <a href="interview/java-interview" class="btn btn-outline-danger">Prepare Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Code Runner Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm hover-lift">
                        <div class="card-body">
                            <div class="text-secondary mb-3">
                                <i class="bi bi-play-circle" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Try Code Online</h5>
                            <p class="card-text">Practice coding directly in your browser with our interactive code runner.</p>
                            <a href="web-basics/javascript#code-runner" class="btn btn-outline-secondary">Try Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
