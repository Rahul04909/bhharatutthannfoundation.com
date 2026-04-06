<?php
// Hero Slider Component
// Autoplaying Carousel similar to e-commerce platforms
$hero_images = [
    ['src' => 'assets/images/hero/hero-1.png', 'alt' => 'Foundation Banner 1'],
    ['src' => 'assets/images/hero/hero-2.png', 'alt' => 'Foundation Banner 2'],
    ['src' => 'assets/images/hero/hero-3.png', 'alt' => 'Foundation Banner 3'],
];
?>
<style>
    .hero-carousel {
        width: 100%;
        overflow: hidden;
        background-color: #f0f0f0;
    }
    
    .hero-carousel .carousel-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
        /* Desktop optimal height for banners */
        max-height: 600px;
        display: block;
    }

    /* Mobile specific adjustments to keep banners looking good */
    @media (max-width: 768px) {
        .hero-carousel .carousel-item img {
            min-height: 250px;
            max-height: 350px;
            object-fit: cover;
        }
    }
    
    .hero-carousel .carousel-control-prev-icon,
    .hero-carousel .carousel-control-next-icon {
        background-color: rgba(5, 27, 96, 0.6); /* Use Dark Blue from theme */
        border-radius: 50%;
        width: 45px;
        height: 45px;
        background-size: 50%;
    }
    
    .carousel-indicators [data-bs-target] {
        background-color: #f96302; /* Use theme orange for indicators */
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin: 0 5px;
    }
</style>

<div id="heroSlider" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="5000">
    
    <!-- Dynamic Indicators -->
    <div class="carousel-indicators">
        <?php foreach($hero_images as $index => $image): ?>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="<?php echo $index; ?>" 
                <?php echo ($index === 0) ? 'class="active" aria-current="true"' : ''; ?> 
                aria-label="Slide <?php echo ($index + 1); ?>">
            </button>
        <?php endforeach; ?>
    </div>

    <!-- Dynamic Slides Inner -->
    <div class="carousel-inner">
        <?php foreach($hero_images as $index => $image): ?>
            <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                <img src="<?php echo $image['src']; ?>" class="d-block w-100" alt="<?php echo $image['alt']; ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Navigation Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
