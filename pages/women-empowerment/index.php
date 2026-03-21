<?php
// pages/women-empowerment/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Empowerment | Bhharat Utthann Foundation</title>
    
    <!-- Base tag perfectly resolves header/footer relative paths to the root directory -->
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
            <h1>Women Empowerment</h1>
            <p>Empowering women through education, skill development, and opportunities for independence, creating self-reliant leaders for tomorrow's Bharat.</p>
        </div>
    </section>

    <!-- Main Content Sections -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Enabling Equality & Independence</h2>
                    <div class="content-block">
                        <p>At Bhharat Utthann Foundation, we firmly believe that empowering a woman empowers an entire generation. Women form the core foundation of our society, yet thousands remain deprived of basic education and economic independence. Our mission is to bridge this gap through sustainable empowerment.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-4">
                <div class="col-lg-6">
                    <div class="content-block">
                        <h3>Bridging the Educational Gap</h3>
                        <p>Education is the most powerful tool for change. Our educational support programs ensure that young girls are not pulled out of school due to financial hardships. We provide holistic academic mentoring, tuition fees assistance, and necessary learning materials to help them excel in their educational journey.</p>
                        <p>Beyond academic success, we focus on building confidence and leadership qualities that allow them to compete in every field.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-container">
                        <img src="https://picsum.photos/seed/women_edu/800/500" alt="Education for Girls">
                    </div>
                </div>
            </div>

            <div class="highlight-box">
                <p>"When you empower a woman, you change a family. When you empower a generation of women, you change the world."</p>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Strategic Pillars</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-block">
                        <p>To create lasting change, we work across multiple dimensions of empowerment. Each pillar is designed to move women from a state of dependency to self-reliance.</p>
                        
                        <ul class="numbered-list mt-5">
                            <li>
                                <strong>Skill & Vocational Training:</strong> We offer specialized trades such as stitching, digital literacy, artisan crafts, and beauty training. These practical skills allow women to start small businesses or find employment immediately.
                            </li>
                            <li>
                                <strong>Safety & Self Defence:</strong> Physical safety is a prerequisite for mobility and confidence. We conduct regular self-defense camps to equip women with tactical awareness and the skills needed for personal protection.
                            </li>
                            <li>
                                <strong>Financial Literacy & Micro-Finance:</strong> We teach women how to manage their earnings and provide seed funding for small-scale local businesses, ensuring they sustain their families independently.
                            </li>
                            <li>
                                <strong>Rights & Awareness Workshops:</strong> Educating women about their legal rights and health initiatives, including maternal hygiene and nutritional standards, ensuring they lead healthy and dignified lives.
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
                        <img src="https://picsum.photos/seed/women_skill/800/500" alt="Skill Training">
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 ps-lg-5">
                    <h2 class="section-title">The Path Forward</h2>
                    <div class="content-block">
                        <p>Empowerment is an ongoing journey. Our success is measured by the number of women who can stand tall, make their own decisions, and contribute to their community’s growth. By focusing on long-term skill development rather than short-term relief, we ensure that the impact of our programs lasts a lifetime.</p>
                        <p>We continue to expand our reach, bringing these essential resources to more villages and urban slums, building a Bharat where every woman has the right to lead a life of choice and opportunity.</p>
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
