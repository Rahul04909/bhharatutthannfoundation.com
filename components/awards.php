<?php
// Awards Component
?>
<style>
    .awards-section {
        background-color: #fcfcfc; /* Very light background for contrast */
        padding: 80px 0;
        font-family: 'Poppins', 'Inter', sans-serif;
    }
    
    .awards-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .awards-header h2 {
        color: #051b60; /* Dark blue theme */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
        display: inline-block;
        padding-bottom: 15px;
    }
    
    /* Decorative underline */
    .awards-header h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: #f96302; /* Vibrant orange underline */
        border-radius: 2px;
    }
    
    .award-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .award-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.12);
    }
    
    /* Image wrapper enforcing consistent height */
    .award-img-wrapper {
        position: relative;
        width: 100%;
        padding-top: 70%; /* Box aspect ratio */
        overflow: hidden;
        background-color: #ffffff; 
        border-bottom: 1px solid #f4f4f4;
    }
    
    /* Using object-fit contain so certificates or trophies don't get cropped out */
    .award-img-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain; 
        padding: 15px;
        transition: transform 0.5s ease;
    }
    
    .award-card:hover .award-img-wrapper img {
        transform: scale(1.05); /* Elegant zoom on hovering over the card */
    }
    
    .award-content {
        padding: 30px 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        text-align: center;
    }
    
    .award-title {
        color: #051b60; /* Dark Blue */
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.4;
    }
    
    .award-desc {
        color: #555555;
        font-size: 15px;
        line-height: 1.6;
        flex-grow: 1;
        margin-bottom: 0;
        font-weight: 400;
    }
    
    /* Mobile responsive breakpoints */
    @media (max-width: 991px) {
        .award-card {
            margin-bottom: 30px;
        }
    }
    @media (max-width: 768px) {
        .awards-section {
            padding: 50px 0 20px;
        }
        .awards-header h2 {
            font-size: 26px;
        }
    }
</style>

<section class="awards-section">
    <div class="container">
        <!-- Section Heading -->
        <div class="awards-header">
            <h2>Our Awards & Recognitions</h2>
        </div>
        
        <!-- Horizontal Grid of Awards -->
        <div class="row align-items-stretch">
            
            <!-- Award 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="award-card">
                    <div class="award-img-wrapper">
                        <!-- Loaded from assets/images/awards -->
                        <img src="assets/images/awards/award-1.jpg" alt="Excellence in Social Service">
                    </div>
                    <div class="award-content">
                        <h4 class="award-title">Excellence in Social Service</h4>
                        <p class="award-desc">Recognized for outstanding contribution toward uplifting underprivileged communities and actively promoting comprehensive social welfare across the region.</p>
                    </div>
                </div>
            </div>
            
            <!-- Award 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="award-card">
                    <div class="award-img-wrapper">
                        <img src="assets/images/awards/award-2.jpg" alt="Community Empowerment Award">
                    </div>
                    <div class="award-content">
                        <h4 class="award-title">Community Empowerment Award</h4>
                        <p class="award-desc">Honored for consistent efforts in organizing educational camps, health drives, and empowering marginalized individuals through multi-faceted skill building programs.</p>
                    </div>
                </div>
            </div>
            
            <!-- Award 3 -->
            <div class="col-lg-4 col-md-12">
                <div class="award-card">
                    <div class="award-img-wrapper">
                        <img src="assets/images/awards/award-3.jpg" alt="Cultural Heritage Recognition">
                    </div>
                    <div class="award-content">
                        <h4 class="award-title">Cultural Heritage Recognition</h4>
                        <p class="award-desc">Awarded for unwavering dedication to preserving India's timeless cultural heritage through impactful, values-based initiatives and mass awareness campaigns.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
