<?php
// Footer Component (Orange Theme matching News Ticker)
?>
<style>
    .footer-section {
        background-color: #f96302; /* Vibrant Orange matching News Ticker */
        color: #ffffff;
        padding: 70px 0 20px;
        font-family: 'Poppins', 'Inter', sans-serif;
    }
    
    .footer-section h4 {
        color: #051b60; /* Dark Blue Contrast */
        font-weight: 700;
        margin-bottom: 25px;
        letter-spacing: 0.5px;
        font-size: 22px;
    }
    
    .footer-section h5 {
        color: #051b60; /* Dark Blue Contrast */
        font-weight: 700;
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 16px;
    }
    
    .footer-text {
        font-size: 14px;
        line-height: 1.8;
        margin-bottom: 25px;
        font-weight: 400;
        color: #ffffff;
    }
    
    /* Elegant Underline for About Title */
    .footer-about-title {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 20px;
    }
    .footer-about-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        height: 3px;
        width: 60px;
        background-color: #051b60;
    }
    
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .footer-links li {
        margin-bottom: 12px;
    }
    
    .footer-links a {
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s, padding-left 0.3s;
        display: inline-block;
        font-weight: 500;
    }
    
    .footer-links a:hover {
        color: #051b60; /* Hover changes to Dark Blue */
        padding-left: 8px; /* Elegant interactive slide right */
    }
    
    .footer-contact-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        font-size: 14px;
        line-height: 1.6;
        color: #ffffff;
        font-weight: 500;
    }
    
    .footer-contact-icon {
        color: #051b60; /* Dark Blue */
        margin-right: 15px;
        font-size: 18px;
        margin-top: 2px;
    }
    
    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.4); /* Stronger separator for orange */
        padding-top: 25px;
        margin-top: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap; 
    }
    
    .footer-copyright {
        font-size: 14px;
        color: #ffffff;
        font-weight: 500;
    }
    
    .social-links {
        display: flex;
        gap: 12px;
    }
    
    .social-links a {
        color: #f96302;
        background-color: #ffffff; /* White background for icons */
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s, transform 0.3s;
    }
    
    .social-links a:hover {
        background-color: #051b60;
        color: #ffffff;
        transform: translateY(-4px); /* Hover bounce */
    }

    /* Mobile handling */
    @media (max-width: 991px) {
        .footer-column {
            margin-bottom: 45px;
        }
    }
    @media (max-width: 768px) {
        .footer-section {
            padding: 50px 0 20px;
        }
        .footer-bottom {
            flex-direction: column;
            text-align: center;
            gap: 15px;
            justify-content: center;
        }
    }
</style>

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <!-- About Foundation Column -->
            <div class="col-lg-4 col-md-6 footer-column">
                <h4 class="footer-about-title">Bhharat Utthann Foundation</h4>
                <p class="footer-text">
                    An organization dedicated to uplifting communities and serving the Motherland with compassion and selfless service. We focus on holistic development, cultural preservation, and empowering those in need to build a better future.
                </p>
                <!-- Attractive Social Links -->
                <div class="social-links mt-4">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 footer-column">
                <h5>Navigation</h5>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fa-solid fa-angle-right me-2"></i>Home</a></li>
                    <li><a href="pages/about/index.php"><i class="fa-solid fa-angle-right me-2"></i>About Us</a></li>
                    <li><a href="index.php#our-work"><i class="fa-solid fa-angle-right me-2"></i>Projects</a></li>
                    <li><a href="pages/finance/index.php"><i class="fa-solid fa-angle-right me-2"></i>Finance</a></li>
                    <li><a href="pages/media/index.php"><i class="fa-solid fa-angle-right me-2"></i>Media</a></li>
                    <li><a href="pages/feedback/index.php"><i class="fa-solid fa-angle-right me-2"></i>Feedback</a></li>
                </ul>
            </div>
            
            <!-- Legal/Important Links -->
            <div class="col-lg-3 col-md-6 footer-column">
                <h5>Important Links</h5>
                <ul class="footer-links">
                    <li><a href="pages/privacy-policy/index.php"><i class="fa-solid fa-circle-notch fa-xs me-2"></i>Privacy Policy</a></li>
                    <li><a href="pages/terms-conditions/index.php"><i class="fa-solid fa-circle-notch fa-xs me-2"></i>Terms & Conditions</a></li>
                    <li><a href="pages/refund-policy/index.php"><i class="fa-solid fa-circle-notch fa-xs me-2"></i>Refund Policy</a></li>
                    <li><a href="pages/payment-details/index.php"><i class="fa-solid fa-circle-notch fa-xs me-2"></i>Payment Details</a></li>
                    <li><a href="pages/disclaimer/index.php"><i class="fa-solid fa-circle-notch fa-xs me-2"></i>Disclaimer</a></li>
                </ul>
            </div>
            
            <!-- Contact Information -->
            <div class="col-lg-3 col-md-6 footer-column">
                <h5>Contact Info</h5>
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        Bhharat Utthann Foundation,<br>
                        Regd. Office Address Here,<br>
                        State, India
                    </div>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <div>
                        +91 98765 43210<br>
                        +91 87654 32109
                    </div>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <div>
                        info@bhharatutthanfoundation.com
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Bar (Copyright) -->
        <div class="footer-bottom">
            <div class="footer-copyright">
                &copy; <?php echo date("Y"); ?> Bhharat Utthann Foundation (Regd.). All Rights Reserved.
            </div>
            <div class="footer-copyright" style="color: #051b60; font-weight: 700;">
                <i class="fa-solid fa-heart"></i> Serving the Motherland
            </div>
        </div>
    </div>
</footer>
