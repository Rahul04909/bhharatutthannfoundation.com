<?php
// Features Component
?>
<style>
    /* Professional Serif font for the quote */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;1,600&display=swap');
    
    .features-section {
        background-color: #129af6; /* Vibrant blue matching the sample */
        color: #ffffff;
        padding: 60px 0 40px;
        font-family: 'Poppins', 'Inter', sans-serif;
    }
    
    .feature-card {
        padding: 20px 15px;
        border-radius: 8px;
        height: 100%;
    }
    
    .feature-icon {
        color: #ff9800; /* Distinct orange icon color */
        font-size: 45px;
        margin-bottom: 20px;
    }
    
    .feature-title {
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 15px;
        letter-spacing: 0.5px;
    }
    
    .feature-desc {
        font-size: 14px;
        line-height: 1.7;
        font-weight: 400;
        opacity: 0.95;
    }
    
    .features-quote {
        margin-top: 50px;
        text-align: center;
        font-family: 'Playfair Display', serif; /* Professional quote font */
        font-size: 22px;
        font-style: italic;
        padding-top: 30px;
        position: relative;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }
    
    /* Clean separator line above the quote */
    .features-quote::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 150px;
        height: 2px;
        background-color: rgba(255, 255, 255, 0.4);
    }

    /* Mobile Responsive Enhancements */
    @media (max-width: 768px) {
        .features-section {
            padding: 40px 0 30px;
        }
        .feature-card {
            margin-bottom: 25px;
            text-align: center; /* Centering content on mobile for better aesthetics */
        }
        .feature-icon {
            font-size: 38px;
        }
        .feature-title {
            font-size: 18px;
        }
        .features-quote {
            font-size: 18px;
            margin-top: 15px;
            padding-top: 25px;
            line-height: 1.5;
        }
    }
    
    /* Tablet specific */
    @media (min-width: 769px) and (max-width: 991px) {
        .feature-desc {
            font-size: 13px;
        }
    }
</style>

<section class="features-section">
    <div class="container">
        <div class="row">
            <!-- Feature 1: Holistic Development -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icon matching the building -->
                        <i class="fa-regular fa-building"></i>
                    </div>
                    <div class="feature-title text-uppercase">Holistic Development:</div>
                    <div class="feature-desc">
                        The Foundation supports women empowerment, environmental care, and skill-building programs. These efforts aim to create strong, self-reliant communities and promote a balanced, caring, and inclusive society.
                    </div>
                </div>
            </div>
            
            <!-- Feature 2: Cultural Preservation -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icon matching the wheelchair/accessibility -->
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <div class="feature-title">Cultural Preservation:</div>
                    <div class="feature-desc">
                        Rooted in India's rich heritage, the Foundation promotes cultural values (sanskar) and selfless service (seva). Programs like Gau Seva (cow care) and cultural camps help keep traditions alive while encouraging unity, strong leadership, and respect for our culture.
                    </div>
                </div>
            </div>
            
            <!-- Feature 3: Empowering Communities -->
            <div class="col-lg-4 col-md-12">
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icon matching the book -->
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <div class="feature-title">Empowering Communities:</div>
                    <div class="feature-desc">
                        The Bharat Utthann Foundation focuses on helping underprivileged communities by providing education, healthcare, and job opportunities. These efforts aim to give people dignity, independence, and the chance to build a better future for themselves and their families.
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Quote Section -->
        <div class="row">
            <div class="col-12">
                <div class="features-quote">
                    An organization dedicated to uplifting communities and serving the nation with care and selfless service.
                </div>
            </div>
        </div>
    </div>
</section>
