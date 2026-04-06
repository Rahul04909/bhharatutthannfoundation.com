<?php
// components/ads.php
// Full-width Advertising/Notice Banner Component
?>
<style>
    .ad-banner-section {
        width: 100%;
        padding: 40px 0;
        background-color: #f4f6f9;
    }
    
    .ad-banner-wrapper {
        width: 100%;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        line-height: 0; /* Fixes stray baseline gap */
    }
    
    .ad-banner-img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.6s ease;
    }
    
    /* Subtle zoom effect on hover for interactivity */
    .ad-banner-wrapper:hover .ad-banner-img {
        transform: scale(1.02);
    }

    /* Target specific aspect ratio for responsiveness */
    @media (min-width: 1200px) {
        .ad-banner-img {
            aspect-ratio: 16 / 9;
            object-fit: cover;
        }
    }
</style>

<section class="ad-banner-section">
    <div class="container-fluid p-0">
        <div class="ad-banner-wrapper">
            <img src="assets/images/banners/women-empowerment.jpeg" alt="Women Empowerment Initiative" class="ad-banner-img">
        </div>
    </div>
</section>
