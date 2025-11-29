<?php
/**
 * QuickPOS Landing Page
 * Epic 1: Navigation & Header
 */
?>

<?php include 'includes/header.php'; ?>

<!-- Main Content -->
<main class="main-content">
    <!-- Epic 2: Hero Section -->
    <section id="hero" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">
                        The Last <span class="highlight">POS System</span><br>
                        You'll Ever Need
                    </h1>
                    <p class="hero-subtitle">
                        Streamline your business operations with our powerful, intuitive point-of-sale system.
                        Manage inventory, track sales, and grow your business effortlessly.
                    </p>
                    <div class="hero-cta">
                        <a href="#signup" class="btn btn-primary btn-large">
                            <i class="fas fa-rocket"></i>
                            Get Started for Free
                        </a>
                        <a href="#features" class="btn btn-secondary btn-large">
                            <i class="fas fa-play-circle"></i>
                            Watch Demo
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">10K+</span>
                            <span class="stat-label">Active Users</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">99.9%</span>
                            <span class="stat-label">Uptime</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4.9/5</span>
                            <span class="stat-label">Rating</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-wrapper">
                        <img src="assets/images/pos-mockup.svg" alt="QuickPOS Software Dashboard" class="mockup-image">
                        <div class="floating-badge badge-1">
                            <i class="fas fa-check-circle"></i>
                            <span>Easy Setup</span>
                        </div>
                        <div class="floating-badge badge-2">
                            <i class="fas fa-shield-alt"></i>
                            <span>Secure</span>
                        </div>
                        <div class="floating-badge badge-3">
                            <i class="fas fa-bolt"></i>
                            <span>Fast</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Decorations -->
        <div class="hero-bg-shape shape-1"></div>
        <div class="hero-bg-shape shape-2"></div>
    </section>

    <!-- Epic 3: Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header">
                <h2 class="section-title">Powerful Features for Your Business</h2>
                <p class="section-subtitle">
                    Everything you need to manage your business efficiently and grow faster.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="features-grid">
                <!-- Feature 1: Inventory Management -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h3 class="feature-title">Inventory Management</h3>
                    <p class="feature-description">
                        Track stock levels in real-time, set automatic reorder points, and manage multiple locations seamlessly.
                        Never run out of stock again.
                    </p>
                    <a href="#" class="feature-link">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Feature 2: Sales Analytics -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Sales Analytics</h3>
                    <p class="feature-description">
                        Get detailed insights into your sales performance with beautiful reports and dashboards.
                        Make data-driven decisions.
                    </p>
                    <a href="#" class="feature-link">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Feature 3: Easy Integration -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3 class="feature-title">Easy Integration</h3>
                    <p class="feature-description">
                        Connect with your favorite tools and services. Seamlessly integrate with accounting, e-commerce,
                        and payment platforms.
                    </p>
                    <a href="#" class="feature-link">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Feature 4: Cloud-Based System -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3 class="feature-title">Cloud-Based System</h3>
                    <p class="feature-description">
                        Access your business data anywhere, anytime. Automatic backups and enterprise-grade security
                        keep your data safe.
                    </p>
                    <a href="#" class="feature-link">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Epic 4: Pricing Section -->
    <section id="pricing" class="pricing-section">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header">
                <h2 class="section-title">Choose Your Perfect Plan</h2>
                <p class="section-subtitle">
                    Flexible pricing options designed to scale with your business needs.
                </p>
            </div>

            <!-- Pricing Cards -->
            <div class="pricing-grid">
                <!-- Basic Plan -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="plan-name">Basic</h3>
                        <p class="plan-description">Perfect for small businesses</p>
                    </div>
                    <div class="pricing-price">
                        <span class="currency">$</span>
                        <span class="amount">29</span>
                        <span class="period">/month</span>
                    </div>
                    <ul class="pricing-features">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Up to 1,000 products</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>1 location</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Basic reporting</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Email support</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Mobile app access</span>
                        </li>
                        <li class="disabled">
                            <i class="fas fa-times-circle"></i>
                            <span>Advanced analytics</span>
                        </li>
                        <li class="disabled">
                            <i class="fas fa-times-circle"></i>
                            <span>Multi-user access</span>
                        </li>
                    </ul>
                    <a href="#signup" class="btn btn-pricing btn-outline">Get Started</a>
                </div>

                <!-- Pro Plan (Featured) -->
                <div class="pricing-card featured">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i>
                        Most Popular
                    </div>
                    <div class="pricing-header">
                        <h3 class="plan-name">Pro</h3>
                        <p class="plan-description">Best for growing businesses</p>
                    </div>
                    <div class="pricing-price">
                        <span class="currency">$</span>
                        <span class="amount">79</span>
                        <span class="period">/month</span>
                    </div>
                    <ul class="pricing-features">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Unlimited products</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Up to 5 locations</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Advanced reporting</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Priority support</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Mobile app access</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Advanced analytics</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Up to 10 users</span>
                        </li>
                    </ul>
                    <a href="#signup" class="btn btn-pricing btn-primary">Get Started</a>
                </div>

                <!-- Enterprise Plan -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="plan-name">Enterprise</h3>
                        <p class="plan-description">For large organizations</p>
                    </div>
                    <div class="pricing-price">
                        <span class="amount custom">Custom</span>
                    </div>
                    <ul class="pricing-features">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Unlimited everything</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Unlimited locations</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Custom reporting</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>24/7 dedicated support</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>White-label solution</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Custom integrations</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Unlimited users</span>
                        </li>
                    </ul>
                    <a href="#contact" class="btn btn-pricing btn-outline">Contact Sales</a>
                </div>
            </div>

            <!-- Pricing Note -->
            <div class="pricing-note">
                <p><i class="fas fa-info-circle"></i> All plans include a 14-day free trial. No credit card required.</p>
            </div>
        </div>
    </section>

    <!-- Epic 5: Contact Us Form - Coming Soon -->
    <!-- Epic 6: Footer - Coming Soon -->
</main>

<?php include 'includes/footer.php'; ?>
