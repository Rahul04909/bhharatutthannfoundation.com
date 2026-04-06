<?php
// Awards Component
?>
<style>
    .awards-section-full {
        padding: 0;
        margin: 0;
        width: 100%;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
    }
    
    .award-block {
        padding: 80px 40px;
        text-align: center;
        transition: background 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 350px;
    }
    
    /* Alternating Colors from the Sample */
    .award-block-dark {
        background-color: #051b60; /* Foundation Dark Blue */
    }
    
    .award-block-teal {
        background-color: #1e7069; /* Sample Teal/Green */
    }
    
    .award-block h3 {
        color: #f96302; /* Vibrant Orange for Titles */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-size: 24px;
        margin-bottom: 25px;
        line-height: 1.3;
    }
    
    .award-block p {
        color: #ffffff; /* White text for descriptions */
        font-size: 16px;
        line-height: 1.7;
        margin-bottom: 0;
        opacity: 0.9;
        font-weight: 400;
    }
    
    /* Hover effect for interactivity */
    .award-block:hover {
        opacity: 0.95;
        filter: brightness(1.1);
    }

    /* Mobile handling - Stacking and layout adjustments */
    @media (max-width: 991px) {
        .award-block {
            padding: 60px 30px;
            min-height: auto;
        }
    }
    
    @media (max-width: 768px) {
        .award-block h3 {
            font-size: 20px;
        }
        .award-block p {
            font-size: 15px;
        }
    }
</style>

<section class="awards-section-full">
    <div class="container-fluid p-0">
        <div class="row g-0">
            
            <!-- Award 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="award-block award-block-dark">
                    <h3>Excellence in Social Service</h3>
                    <p>Recognized for outstanding contribution toward uplifting underprivileged communities and actively promoting comprehensive social welfare across Bharat.</p>
                </div>
            </div>
            
            <!-- Award 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="award-block award-block-teal">
                    <h3>Community Empowerment</h3>
                    <p>Honored for consistent efforts in organizing educational camps, health drives, and empowering marginalized individuals through skill-building programs.</p>
                </div>
            </div>
            
            <!-- Award 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="award-block award-block-dark">
                    <h3>Cultural Heritage Recognition</h3>
                    <p>Awarded for unwavering dedication to preserving India's timeless cultural heritage through impactful, values-based initiatives and mass awareness.</p>
                </div>
            </div>
            
            <!-- Award 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="award-block award-block-teal">
                    <h3>National Visionary Award</h3>
                    <p>Celebrated for innovative leadership in social reforms and creating scalable models for rural development and sustainable living across the nation.</p>
                </div>
            </div>
            
        </div>
    </div>
</section>
