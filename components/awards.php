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
        height: 100%; /* Ensure blocks fill the column height */
        min-height: 400px;
    }
    
    /* Alternating Colors for 3 Blocks */
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
        font-size: 26px;
        margin-bottom: 25px;
        line-height: 1.3;
    }
    
    .award-block p {
        color: #ffffff; /* White text for descriptions */
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 0;
        opacity: 0.95;
        font-weight: 400;
    }
    
    /* Hover effect */
    .award-block:hover {
        opacity: 1;
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
            font-size: 22px;
        }
    }
</style>

<section class="awards-section-full">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-stretch">
            
            <!-- Award 1 - Dark Blue -->
            <div class="col-lg-4 col-md-6">
                <div class="award-block award-block-dark">
                    <h3>Excellence in Social Service</h3>
                    <p>Recognized for outstanding contribution toward uplifting underprivileged communities and actively promoting comprehensive social welfare across Bharat.</p>
                </div>
            </div>
            
            <!-- Award 2 - Teal -->
            <div class="col-lg-4 col-md-6">
                <div class="award-block award-block-teal">
                    <h3>Community Empowerment</h3>
                    <p>Honored for consistent efforts in organizing educational camps, health drives, and empowering marginalized individuals through skill-building programs.</p>
                </div>
            </div>
            
            <!-- Award 3 - Dark Blue -->
            <div class="col-lg-4 col-md-12">
                <div class="award-block award-block-dark">
                    <h3>Cultural Heritage Recognition</h3>
                    <p>Awarded for unwavering dedication to preserving India's timeless cultural heritage through impactful, values-based initiatives and mass awareness campaigns.</p>
                </div>
            </div>
            
        </div>
    </div>
</section>
