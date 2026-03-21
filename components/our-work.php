<?php
// Our Work Component (Services Slider)

$services = [
    [
        "title" => "Women Empowerment",
        "desc" => "Empowering women through education, skill development, and opportunities for independence and leadership.",
        "img" => "https://picsum.photos/seed/women_empower/600/400"
    ],
    [
        "title" => "Health Checkup Camps",
        "desc" => "Providing free medical checkups and health awareness to underserved communities.",
        "img" => "https://picsum.photos/seed/health_camp/600/400"
    ],
    [
        "title" => "Water Conservation",
        "desc" => "Promoting sustainable water use practices to conserve and protect water resources.",
        "img" => "https://picsum.photos/seed/water_save/600/400"
    ],
    [
        "title" => "Plantation Drive",
        "desc" => "Encouraging environmental sustainability through tree planting and green initiatives.",
        "img" => "https://picsum.photos/seed/trees/600/400"
    ],
    [
        "title" => "Self Reliance in Women",
        "desc" => "Equipping women with skills and resources to become independent and financially self-sufficient.",
        "img" => "https://picsum.photos/seed/self_reliance/600/400"
    ],
    [
        "title" => "Self Defence Camp",
        "desc" => "Teaching women and girls practical self-defense skills to ensure personal safety and confidence.",
        "img" => "https://picsum.photos/seed/defence/600/400"
    ],
    [
        "title" => "Skill Development",
        "desc" => "Providing vocational training and skills to youth for better job opportunities and self-reliance.",
        "img" => "https://picsum.photos/seed/skill_dev/600/400"
    ],
    [
        "title" => "Handicapped Assistance",
        "desc" => "Supporting differently-abled individuals with mobility aids, healthcare, and access to opportunities.",
        "img" => "https://picsum.photos/seed/handicap/600/400"
    ],
    [
        "title" => "Cultural Camps",
        "desc" => "Preserving and promoting India’s cultural heritage through traditional arts, crafts, and values.",
        "img" => "https://picsum.photos/seed/culture_camp/600/400"
    ],
    [
        "title" => "Swachh Bharat Abhiyan",
        "desc" => "Promoting cleanliness, hygiene, and sanitation in communities for a healthier environment.",
        "img" => "https://picsum.photos/seed/swachh/600/400"
    ],
    [
        "title" => "Blood Donation Camp",
        "desc" => "Organizing voluntary blood donation drives to save lives and support healthcare needs.",
        "img" => "https://picsum.photos/seed/blood_donate/600/400"
    ],
    [
        "title" => "Covid 19",
        "desc" => "Bharat Utthann Foundation supports COVID-19 awareness, relief, and recovery efforts.",
        "img" => "https://picsum.photos/seed/covid19/600/400"
    ]
];
?>
<style>
    .our-work-section {
        background-color: #f4f6f9;
        padding: 80px 0;
        font-family: 'Poppins', 'Inter', sans-serif;
    }
    
    .our-work-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .our-work-header h2 {
        color: #051b60; /* Dark blue theme */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
        display: inline-block;
        padding-bottom: 15px;
    }
    
    /* Elegant underline matching theme */
    .our-work-header h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: #ffb700; /* Yellow Theme */
        border-radius: 2px;
    }
    
    .service-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        height: 100%; /* Restored uniform slider height */
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .service-img-wrapper {
        position: relative;
        width: 100%;
        padding-top: 60%; /* Aspect ratio to maintain image grid perfectly */
        overflow: hidden;
        background-color: #e0e0e0;
    }
    
    .service-img-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    
    .service-card:hover .service-img-wrapper img {
        transform: scale(1.08); /* Premium hover zoom */
    }
    
    .service-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    
    .service-title {
        color: #051b60;
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 12px;
        line-height: 1.3;
    }
    
    .service-desc {
        color: #555555;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 25px;
        /* Uniform height enforcing */
        min-height: 68px; /* Approx 3 lines of 1.6 line-height at 14px */
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .service-btn {
        margin-top: auto; /* Perfectly aligns all buttons to the bottom */
        display: inline-block;
        padding: 10px 22px;
        background-color: #f96302; /* Vibrant Orange Theme */
        color: #ffffff;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        border-radius: 6px;
        transition: background-color 0.3s, transform 0.2s;
        text-transform: uppercase;
        align-self: flex-start;
        border: 2px solid #f96302;
    }
    
    .service-btn:hover {
        background-color: transparent;
        color: #f96302;
    }
    
    /* Swiper customized nav controls */
    .swiper-button-next, .swiper-button-prev {
        color: #f96302;
        background-color: rgba(255, 255, 255, 0.95);
        width: 45px;
        height: 45px;
        border-radius: 50%;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        transition: background-color 0.3s, color 0.3s;
    }
    .swiper-button-next:hover, .swiper-button-prev:hover {
        background-color: #f96302;
        color: #ffffff;
    }
    .swiper-button-next::after, .swiper-button-prev::after {
        font-size: 20px;
        font-weight: bold;
    }
    
    .swiper-pagination-bullet-active {
        background-color: #f96302;
    }

    .swiper-container-padding {
        padding: 20px 10px 60px; /* Essential space for drop shadow and pagination */
    }

    /* Fix Swiper overlapping on mobile */
    @media (max-width: 576px) {
        .swiper-button-next, .swiper-button-prev {
            display: none; /* Hide arrows on very small mobile devices; dots & drag are enough */
        }
    }
</style>

<section class="our-work-section">
    <div class="container">
        <div class="our-work-header">
            <h2>Our Works</h2>
        </div>
        
        <!-- Swiper Initialization Container -->
        <div class="swiper swiper-services swiper-container-padding">
            <div class="swiper-wrapper">
                <?php foreach($services as $service): ?>
                <div class="swiper-slide h-auto">
                    <div class="service-card">
                        <div class="service-img-wrapper">
                            <img src="<?php echo $service['img']; ?>" alt="<?php echo htmlspecialchars($service['title']); ?>">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><?php echo $service['title']; ?></h4>
                            <p class="service-desc"><?php echo $service['desc']; ?></p>
                            <a href="#" class="service-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- Initialize Swiper Script specifically for this component -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    var swiperOptions = {
        slidesPerView: 1,
        spaceBetween: 25,
        loop: true,
        autoplay: {
            delay: 3500, // Carousel speed
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // Mobile Landscape
            576: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // Tablet
            992: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // Desktop
            1200: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    };
    
    var swiper = new Swiper(".swiper-services", swiperOptions);
});
</script>
