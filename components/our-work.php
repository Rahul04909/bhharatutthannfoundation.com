<?php
// Our Work Component (Full-Width Boxed Slider)

$services = [
    [
        "title" => "Women Empowerment",
        "desc" => "Empowering women through education, skill development, and opportunities for independence and leadership.",
        "img" => "../assets/images/frontend/women-empowerment.jpeg"
    ],
    [
        "title" => "Health Checkup Camps",
        "desc" => "Providing free medical checkups and health awareness to underserved communities.",
        "img" => "https://picsum.photos/seed/health_camp/600/600"
    ],
    [
        "title" => "Water Conservation",
        "desc" => "Promoting sustainable water use practices to conserve and protect water resources.",
        "img" => "../assets/images/frontend/save-water.jpeg"
    ],
    [
        "title" => "Plantation Drive",
        "desc" => "Encouraging environmental sustainability through tree planting and green initiatives.",
        "img" => "../assets/images/frontend/tree-plantation.jpeg"
    ],
    [
        "title" => "Self Reliance in Women",
        "desc" => "Equipping women with skills and resources to become independent and financially self-sufficient.",
        "img" => "https://picsum.photos/seed/self_reliance/600/600"
    ],
    [
        "title" => "Self Defence Camp",
        "desc" => "Teaching women and girls practical self-defense skills to ensure personal safety and confidence.",
        "img" => "https://picsum.photos/seed/defence/600/600"
    ],
    [
        "title" => "Skill Development",
        "desc" => "Providing vocational training and skills to youth for better job opportunities and self-reliance.",
        "img" => "https://picsum.photos/seed/skill_dev/600/600"
    ],
    [
        "title" => "Handicapped Assistance",
        "desc" => "Supporting differently-abled individuals with mobility aids, healthcare, and access to opportunities.",
        "img" => "https://picsum.photos/seed/handicap/600/600"
    ],
    [
        "title" => "Cultural Camps",
        "desc" => "Preserving and promoting India’s cultural heritage through traditional arts, crafts, and values.",
        "img" => "https://picsum.photos/seed/culture_camp/600/600"
    ],
    [
        "title" => "Swachh Bharat Abhiyan",
        "desc" => "Promoting cleanliness, hygiene, and sanitation in communities for a healthier environment.",
        "img" => "https://picsum.photos/seed/swachh/600/600"
    ],
    [
        "title" => "Blood Donation Camp",
        "desc" => "Organizing voluntary blood donation drives to save lives and support healthcare needs.",
        "img" => "../assets/images/frontend/blood-donation-camp.jpeg"
    ],
    [
        "title" => "Covid 19",
        "desc" => "Bharat Utthann Foundation supports COVID-19 awareness, relief, and recovery efforts.",
        "img" => "https://picsum.photos/seed/covid19/600/600"
    ]
];
?>
<style>
    .our-work-section-full {
        padding: 50px 0 0;
        background-color: #ffffff;
        font-family: 'Poppins', sans-serif;
    }

    .work-title-box {
        text-align: center;
        margin-bottom: 40px;
    }

    .work-title-box h2 {
        color: #051b60;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
    }

    .work-title-box h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background-color: #f96302;
    }

    .boxed-service-card {
        background: #051b60;
        /* Dark Blue matching boxed theme */
        height: 100%;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        transition: all 0.4s ease;
    }

    .boxed-img-wrapper {
        width: 100%;
        aspect-ratio: 1 / 1;
        overflow: hidden;
    }

    .boxed-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .boxed-content {
        padding: 40px 30px;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .boxed-title {
        color: #f96302;
        /* Theme Orange */
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 15px;
        letter-spacing: 1px;
    }

    .boxed-desc {
        color: #ffffff;
        font-size: 14px;
        line-height: 1.6;
        opacity: 0.9;
        margin-bottom: 0;
    }

    .boxed-service-card:hover {
        filter: brightness(1.1);
    }

    .boxed-service-card:hover .boxed-img-wrapper img {
        transform: scale(1.1);
    }

    /* Swiper custom arrows */
    .swiper-button-white {
        color: #ffffff;
        background: rgba(249, 99, 2, 0.8);
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .swiper-button-white::after {
        font-size: 18px;
        font-weight: bold;
    }
</style>

<section class="our-work-section-full">
    <div class="work-title-box">
        <h2>Initiatives & Works</h2>
    </div>

    <div class="container-fluid p-0">
        <div class="swiper swiper-boxed-work">
            <div class="swiper-wrapper">
                <?php foreach ($services as $service): ?>
                    <div class="swiper-slide h-auto">
                        <div class="boxed-service-card">
                            <div class="boxed-img-wrapper">
                                <img src="<?php echo $service['img']; ?>"
                                    alt="<?php echo htmlspecialchars($service['title']); ?>">
                            </div>
                            <div class="boxed-content">
                                <h4 class="boxed-title"><?php echo $service['title']; ?></h4>
                                <p class="boxed-desc"><?php echo $service['desc']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Navigation -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".swiper-boxed-work", {
            slidesPerView: 1,
            spaceBetween: 0, // Zero space for boxed effect
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // Mobile Landscape
                576: {
                    slidesPerView: 2,
                },
                // Tablet
                992: {
                    slidesPerView: 3,
                },
                // High-res Desktop
                1400: {
                    slidesPerView: 4,
                },
                // Ultra-wide
                1800: {
                    slidesPerView: 5,
                }
            }
        });
    });
</script>