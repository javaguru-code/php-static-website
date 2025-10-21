<?php
$page_title = 'Contact Us - Full Stack Master';
$page_description = 'Contact Full Stack Master - Get in touch with us for questions and feedback.';
$active_page = 'contact';
include 'includes/header.php';
?>

    <!-- Contact Content -->
    <main class="container my-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4">Get In Touch</h1>
                <p class="lead mb-5">
                    Have questions, suggestions, or feedback? We'd love to hear from you!
                </p>
                
                <!-- Contact Form -->
                <div class="card shadow-sm mb-5">
                    <div class="card-body p-4">
                        <form id="contactForm" action="/api/contact" method="POST">
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" id="name" name="name" required type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" id="email" name="email" required type="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="subject">Subject</label>
                                <input class="form-control" id="subject" name="subject" required type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" required rows="5"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-send"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="row g-4">
                    <div class="col-md-4 text-center">
                        <div class="mb-3">
                            <i class="bi bi-envelope-fill text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <h5>Email</h5>
                        <p class="text-muted">contact@fsmaster.in</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="mb-3">
                            <i class="bi bi-globe text-success" style="font-size: 2rem;"></i>
                        </div>
                        <h5>Website</h5>
                        <p class="text-muted">www.fsmaster.in</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="mb-3">
                            <i class="bi bi-chat-dots-fill text-info" style="font-size: 2rem;"></i>
                        </div>
                        <h5>Social Media</h5>
                        <div>
                            <a class="text-decoration-none me-2" href="#"><i class="bi bi-github"></i></a>
                            <a class="text-decoration-none me-2" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="text-decoration-none" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>

    <!-- Contact Form Handler -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const form = e.target;
            const formData = new FormData(form);
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            
            try {
                // Show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
                
                console.log('Form data:', Object.fromEntries(formData));
                
                const response = await fetch('/api/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        name: formData.get('name'),
                        email: formData.get('email'),
                        subject: formData.get('subject'),
                        message: formData.get('message')
                    })
                });
                
                console.log('Response status:', response.status);
                
                let result;
                try {
                    result = await response.json();
                    console.log('Response data:', result);
                } catch (jsonError) {
                    console.error('Error parsing JSON response:', jsonError);
                    throw new Error('Invalid response from server');
                }
                
                if (!response.ok) {
                    throw new Error(result.message || `HTTP error! status: ${response.status}`);
                }
                
                alert('Thank you for your message! We will get back to you soon.');
                form.reset();
                
            } catch (error) {
                console.error('Error:', {
                    message: error.message,
                    name: error.name,
                    stack: error.stack
                });
                
                let errorMessage = 'There was an error sending your message. ';
                
                // More specific error messages
                if (error.message.includes('Failed to fetch')) {
                    errorMessage += 'Please check your internet connection.';
                } else if (error.message.includes('404')) {
                    errorMessage = 'The server endpoint was not found. Please try again later or contact support.';
                } else if (error.message) {
                    errorMessage += error.message;
                }
                
                alert(errorMessage);
            } finally {
                // Reset button state
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        });
    </script>
