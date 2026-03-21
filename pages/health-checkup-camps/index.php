<?php
// pages/health-checkup-camps/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Checkup Camps | Bhharat Utthann Foundation</title>
    
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
            <h1>Health Checkup Camps</h1>
            <p>Bringing high-quality primary healthcare services directly to underserved communities for a healthier and more prosperous Bharat.</p>
        </div>
    </section>

    <!-- Main Content Sections -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Bringing Change through Healthcare</h2>
                    <div class="content-block">
                        <p>At Bhharat Utthann Foundation, we believe that primary healthcare is a basic human right. Millions of people in rural areas and urban slums remain deprived of these essential services due to high costs and lack of infrastructure. Our Free Medical Camps aim to fill this critical gap by providing expert consultations and diagnostics at zero cost to the beneficiaries.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-4">
                <div class="col-lg-6">
                    <div class="content-block">
                        <h3>Bridging the Medical Gap</h3>
                        <p>Our camps are led by board-certified doctors and specialists who provide comprehensive body checkups, BP and sugar monitoring, eye screenings, and dental procedures. Beyond just a checkup, we focus on providing the necessary follow-up care and free lifelong medication for chronic cases discovered during our camps.</p>
                        <p>By bringing the clinic to the doorstep, we ensure that the most vulnerable populations receive the attention they deserve, drastically reducing the burden on public hospitals.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-container">
                        <img src="https://picsum.photos/seed/doctor_camp/800/500" alt="Specialized Medical Camp">
                    </div>
                </div>
            </div>

            <div class="highlight-box">
                <p>"Healthcare must reach those who cannot reach healthcare. Our mission is to ensure every life is saved through early diagnosis and consistent care."</p>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Health Execution Pillar</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-block">
                        <p>To ensure maximum impact and efficiency, all our health checkup initiatives follow a strictly managed execution methodology.</p>
                        
                        <ul class="numbered-list mt-5">
                            <li>
                                <strong>Site Mapping & Survey:</strong> We identify areas with the least access to medical facilities by conducting ground-level surveys and collaborating with local community leaders.
                            </li>
                            <li>
                                <strong>Specialized Doctor Mobilization:</strong> We partner with expert physicians, pediatricians, ophthalmologists, and nurses to ensure a high standard of professional clinical care at every camp.
                            </li>
                            <li>
                                <strong>Diagnostic & Medicine Distribution:</strong> On-site pathology collection for blood tests and distribution of genuine, free medicines to all patients based on their specific diagnoses.
                            </li>
                            <li>
                                <strong>Post-Camp Follow-up:</strong> Patients requiring surgeries or advanced treatments are referred and connected to our partner base hospitals for subsidized or free secondary care.
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
                        <img src="https://picsum.photos/seed/med_lab/800/500" alt="Diagnostics on Site">
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 ps-lg-5">
                    <h2 class="section-title">Long-term Health Impact</h2>
                    <div class="content-block">
                        <p>Sustainability in healthcare means moving from crisis management to preventive care. All our camps include a health education element where we teach families about nutrition, maternal hygiene, and the importance of regular screening.</p>
                        <p>Our goal is to create a culture of health-consciousness within underserved communities. We are continuously expanding our fleet of mobile health units to reach the remotest corners of Bharat, ensuring the foundation of our nation remains strong and healthy.</p>
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
