<?php
// Hero Slider Component
// Autoplaying Carousel similar to e-commerce platforms (Flipkart, Amazon)
?>
<style>
    .hero-carousel {
        width: 100%;
        overflow: hidden;
    }
    
    .hero-carousel .carousel-item img {
        width: 100%;
        /* Setting a default min-height or aspect ratio can help keep it consistent */
        height: auto;
        object-fit: cover;
        /* Desktop height */
        max-height: 500px;
    }

    /* Mobile specific adjustments */
    @media (max-width: 768px) {
        .hero-carousel .carousel-item img {
            /* On mobile, you might want to constrain the height or change aspect ratio */
            min-height: 200px;
            max-height: 300px;
            object-fit: cover;
        }
    }
    
    /* Customising Carousel Control Colors/Shadows for better visibility */
    .hero-carousel .carousel-control-prev-icon,
    .hero-carousel .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for controls */
        border-radius: 50%;
        padding: 20px;
        background-size: 50%; /* Adjusted icon size within the circle */
    }
</style>

<!-- Bootstrap Carousel -->
<!-- data-bs-ride="carousel" ensures autoplay. data-bs-interval defines the time between slides in ms -->
<div id="heroSlider" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="4000">
    
    <!-- Indicators (Optional: small dots at the bottom, typical for e-commerce) -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- The Slides -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <!-- Replace src with your actual slider image (e.g., assets/images/slider1.jpg) -->
            <!-- Using high-res placeholder images for demonstration -->
            <img src="https://picsum.photos/1920/600?random=1" class="d-block w-100" alt="Slider Banner 1">
        </div>
        
        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="https://picsum.photos/1920/600?random=2" class="d-block w-100" alt="Slider Banner 2">
        </div>
        
        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="https://picsum.photos/1920/600?random=3" class="d-block w-100" alt="Slider Banner 3">
        </div>
    </div>

    <!-- Navigation Controls (Previous/Next Arrows) -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
