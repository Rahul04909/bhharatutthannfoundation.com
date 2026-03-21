<?php
// pages/water-conservation/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Conservation | Bhharat Utthann Foundation</title>
    
    <!-- Base tag for root relative paths -->
    <base href="../../">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts: Inter & Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        
        /* 1. Hero Header Section */
        .page-header {
            background-color: #051b60; 
            color: #ffffff;
            padding: 80px 0 60px;
            text-align: center;
        }
        .page-header h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #ffb700; /* Yellow Theme */
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 42px;
        }
        .page-header p {
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.95;
            line-height: 1.6;
        }
        
        /* Global Section Utilities */
        .section-padding { padding: 80px 0; }
        .bg-white { background-color: #ffffff; }
        .bg-light { background-color: #fcfcfc; }
        
        .section-title {
            font-family: 'Poppins', sans-serif;
            color: #051b60;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 32px;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
        }
        .section-title.center { text-align: center; margin-bottom: 50px; }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 70px;
            height: 3px;
            background-color: #f96302;
        }
        .section-title.center::after { left: 50%; transform: translateX(-50%); }

        .content-block {
            font-size: 16px;
            line-height: 1.8;
            color: #444;
            margin-bottom: 30px;
        }
        .content-block h3 {
            font-family: 'Poppins', sans-serif;
            color: #f96302;
            font-weight: 600;
            font-size: 24px;
            margin-bottom: 15px;
        }
        
        .img-container {
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(5, 27, 96, 0.1);
            overflow: hidden;
            width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        .img-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .highlight-box {
            background-color: #e3f2fd;
            border-left: 5px solid #051b60;
            padding: 30px;
            margin: 40px 0;
            border-radius: 4px;
        }
        .highlight-box p {
            margin-bottom: 0;
            font-style: italic;
            font-weight: 500;
            color: #051b60;
            font-size: 18px;
        }

        .numbered-list {
            list-style: none;
            padding: 0;
        }
        .numbered-list li {
            position: relative;
            padding-left: 50px;
            margin-bottom: 25px;
            font-size: 16px;
            line-height: 1.7;
        }
        .numbered-list li::before {
            content: counter(li-counter);
            counter-increment: li-counter;
            position: absolute;
            left: 0;
            top: 0;
            width: 35px;
            height: 35px;
            background-color: #f96302;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
        }
        .numbered-list { counter-reset: li-counter; }

        /* Responsive Breakpoints */
        @media (max-width: 991px) {
            .section-padding { padding: 60px 0; }
        }
        @media (max-width: 768px) {
            .page-header h1 { font-size: 32px; }
            .section-title { font-size: 26px; }
        }
    </style>
</head>
<body>

    <!-- Include Header -->
    <?php include_once '../../includes/header.php'; ?>

    <!-- Hero Header -->
    <section class="page-header">
        <div class="container">
            <h1>Water Conservation</h1>
            <p>Preserving our most precious resource through sustainable practices, community awareness, and innovative conservation techniques.</p>
        </div>
    </section>

    <!-- Main Content Sections -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">A Vital Mission for the Future</h2>
                    <div class="content-block">
                        <p>Water is the essence of life. However, with increasing global temperatures and expanding urban landscapes, our natural water sources are under immense pressure. At Bhharat Utthann Foundation, we recognize that water conservation is not just an environmental goal, but a prerequisite for human survival and community stability.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-4">
                <div class="col-lg-6">
                    <div class="content-block">
                        <h3>Understanding the Crisis</h3>
                        <p>The depletion of groundwater tables and the pollution of river systems present a growing threat to agriculture and domestic consumption alike. Our mission is to educate and implement strategies that reduce waste, encourage recycling, and protect local watersheds from further degradation.</p>
                        <p>Through grassroots movements, we aim to transform how individuals and communities perceive water usage, turning basic awareness into long-term sustainable action.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-container">
                        <img src="https://picsum.photos/seed/water_save/800/500" alt="Water Conservation Efforts">
                    </div>
                </div>
            </div>

            <div class="highlight-box">
                <p>"When the well is dry, we know the worth of water. Conservation is the only way to ensure our future generations never find themselves in that position."</p>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Conservation Methodology</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-block">
                        <p>Our approach integrates traditional wisdom with modern technology to create scalable solutions for water management. We focus on the following core areas:</p>
                        
                        <ul class="numbered-list mt-5">
                            <li>
                                <strong>Rainwater Harvesting:</strong> Implementing rooftop and surface-based collection systems to redirect natural precipitation back into the ground or storage units for future use, particularly in drought-prone areas.
                            </li>
                            <li>
                                <strong>Community Awareness Workshops:</strong> Conducting educational sessions in schools, colleges, and rural clusters to teach simple yet effective methods for reducing daily water footprints at home.
                            </li>
                            <li>
                                <strong>Watershed Restoration:</strong> Working on the rejuvenation of local ponds, wells, and small water bodies that have been neglected or filled with silt, restoring their natural capacity to hold water.
                            </li>
                            <li>
                                <strong>Agricultural Best Practices:</strong> Encouraging farmers to adopt drip irrigation and other water-efficient farming techniques that maximize crop yield while minimizing water consumption.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="img-container">
                        <img src="https://picsum.photos/seed/river/800/500" alt="River Restoration">
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 ps-lg-5">
                    <h2 class="section-title">Long-term Sustainability</h2>
                    <div class="content-block">
                        <p>Sustainability is achieved when community ownership meets technical expertise. All our projects involve local stakeholders to ensure that the infrastructure we build is maintained and the habits we form are passed down.</p>
                        <p>We are constantly seeking new partners and innovators who can bring fresh ideas to the table, helping us scale our impact from single villages to entire districts. Together, we can ensure that every drop is accounted for and every community has access to clean, safe, and abundant water.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include_once '../../includes/footer.php'; ?>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
