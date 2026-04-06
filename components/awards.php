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
        font-size: 24px;
        margin-bottom: 30px;
        line-height: 1.3;
    }
    
    .award-img-box {
        width: 100%;
        max-width: 280px;
        margin: 0 auto;
        background: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .award-img-box img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
    }
    
    /* Hover effect */
    .award-block:hover .award-img-box {
        transform: translateY(-10px) scale(1.05);
    }
    
    .award-block:hover {
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
        .award-img-box {
            max-width: 220px;
        }
    }
</style>

<section class="awards-section-full">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-stretch">
            
            <!-- Award 1 - Dark Blue -->
            <div class="col-lg-4 col-md-6">
                <div class="award-block award-block-dark">
                    <h3>Excellence Service</h3>
                    <div class="award-img-box">
                        <img src="assets/images/awards/award-1.jpg" alt="Excellence in Social Service">
                    </div>
                </div>
            </div>
            
            <!-- Award 2 - Teal -->
            <div class="col-lg-4 col-md-6">
                <div class="award-block award-block-teal">
                    <h3>Empowerment Award</h3>
                    <div class="award-img-box">
                        <img src="assets/images/awards/award-2.jpg" alt="Community Empowerment">
                    </div>
                </div>
            </div>
            
            <!-- Award 3 - Dark Blue -->
            <div class="col-lg-4 col-md-12">
                <div class="award-block award-block-dark">
                    <h3>Heritage Award</h3>
                    <div class="award-img-box">
                        <img src="assets/images/awards/award-3.jpg" alt="Cultural Heritage Recognition">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
