    <!-- Epic 6: Footer -->
    <footer class="main-footer">
        <div class="footer-content">
            <div class="container">
                <div class="footer-grid">
                    <!-- Company Info -->
                    <div class="footer-column">
                        <div class="footer-logo">
                            <i class="fas fa-cash-register"></i>
                            <span class="logo-text">Quick<span class="logo-highlight">POS</span></span>
                        </div>
                        <p class="footer-description">
                            The last POS system you'll ever need. Streamline your business operations and grow faster.
                        </p>
                        <div class="social-links">
                            <a href="https://facebook.com" target="_blank" class="social-link" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" class="social-link" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://linkedin.com" target="_blank" class="social-link" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" class="social-link" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://youtube.com" target="_blank" class="social-link" aria-label="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="footer-column">
                        <h4 class="footer-title">Product</h4>
                        <ul class="footer-links">
                            <li><a href="#features">Features</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#">Integrations</a></li>
                            <li><a href="#">API Documentation</a></li>
                            <li><a href="#">Changelog</a></li>
                        </ul>
                    </div>

                    <!-- Company Links -->
                    <div class="footer-column">
                        <h4 class="footer-title">Company</h4>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#">Partners</a></li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="footer-column">
                        <h4 class="footer-title">Stay Updated</h4>
                        <p class="newsletter-description">Subscribe to our newsletter for updates and tips.</p>
                        <form class="newsletter-form" id="newsletterForm">
                            <div class="newsletter-input-group">
                                <input type="email" placeholder="Enter your email" class="newsletter-input" id="newsletterEmail" required>
                                <button type="submit" class="newsletter-btn">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                            <div class="newsletter-message" id="newsletterMessage"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p class="copyright">
                        &copy; <?php echo date('Y'); ?> QuickPOS. All rights reserved.
                    </p>
                    <div class="footer-bottom-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            menuToggle.classList.toggle('active');
        });

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu after clicking
                    navLinks.classList.remove('active');
                    menuToggle.classList.remove('active');
                }
            });
        });

        // Add shadow to header on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.main-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Newsletter Form Submission
        const newsletterForm = document.getElementById('newsletterForm');
        const newsletterEmail = document.getElementById('newsletterEmail');
        const newsletterMessage = document.getElementById('newsletterMessage');

        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = newsletterEmail.value.trim();
            
            if (email) {
                // Simulate newsletter subscription
                newsletterMessage.textContent = 'Thank you for subscribing!';
                newsletterMessage.className = 'newsletter-message success';
                newsletterEmail.value = '';
                
                // Hide message after 3 seconds
                setTimeout(() => {
                    newsletterMessage.textContent = '';
                    newsletterMessage.className = 'newsletter-message';
                }, 3000);
            }
        });

        // Social Links Animation on Hover
        document.querySelectorAll('.social-link').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) rotate(5deg)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotate(0deg)';
            });
        });

        // Footer Links Hover Effect
        document.querySelectorAll('.footer-links a').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.paddingLeft = '8px';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.paddingLeft = '0';
            });
        });
    </script>
</body>
</html>
