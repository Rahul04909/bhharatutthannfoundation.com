<?php
// pages/about/our-vision/index.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Vision | Bhharat Utthann Foundation</title>

    <!-- Base tag for root relative paths -->
    <base href="../../../">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts: Inter & Poppins -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            color: #333;
            overflow-x: hidden;
        }

        /* 1. Hero Header Section */
        .page-header {
            background-color: #051b60;
            color: #ffffff;
            padding: 100px 0 80px;
            text-align: center;
            position: relative;
        }

        .page-header h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #ffb700;
            /* Yellow Theme */
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 48px;
        }

        .page-header p {
            font-size: 20px;
            max-width: 900px;
            margin: 0 auto;
            opacity: 0.9;
            line-height: 1.6;
            font-weight: 300;
        }

        /* Section Styling */
        .vision-section {
            padding: 0;
            margin: 0;
            width: 100%;
        }

        .vision-block {
            display: flex;
            align-items: stretch;
            min-height: 500px;
        }

        .vision-content {
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex: 1;
        }

        .vision-image {
            flex: 1;
            background-size: cover;
            background-position: center;
            min-height: 400px;
            transition: all 0.4s ease;
        }

        .bg-dark-blue {
            background-color: #051b60;
            color: #ffffff;
        }

        .bg-orange {
            background-color: #f96302;
            color: #ffffff;
        }

        .bg-white {
            background-color: #ffffff;
            color: #333;
        }

        .vision-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 28px;
            text-transform: uppercase;
            margin-bottom: 25px;
            letter-spacing: 1px;
            position: relative;
            padding-bottom: 15px;
        }

        .vision-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: #ffb700;
        }

        .vision-text {
            font-size: 17px;
            line-height: 1.8;
            opacity: 0.95;
            margin-bottom: 0;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .vision-block {
                flex-direction: column;
            }

            .vision-block.reverse {
                flex-direction: column;
            }

            .vision-content {
                padding: 60px 30px;
            }

            .vision-image {
                min-height: 350px;
            }

            .page-header h1 {
                font-size: 36px;
            }
        }
    </style>
</head>

<body>

    <?php include_once '../../../includes/header.php'; ?>

    <!-- Hero Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Vision</h1>
            <p>Empowering lives, preserving heritage, and building a self-reliant nation through selfless service.</p>
        </div>
    </section>

    <!-- Vision Content Sections -->
    <section class="vision-section">

        <!-- Block 1: The Core Vision -->
        <div class="vision-block">
            <div class="vision-content bg-white">
                <h2 class="vision-title" style="color: #051b60;">Society of Dignity</h2>
                <p class="vision-text">
                    Our vision is to create a self-reliant, harmonious, and culturally vibrant society that empowers
                    individuals to lead lives of dignity, independence, and purpose. Rooted in the timeless values of
                    sanskar (cultural values) and seva (selfless service), we aim to build strong, compassionate
                    communities dedicated to holistic development.
                </p>
            </div>
            <div class="vision-image"
                style="background-image: url('assets/images/pages/our-vision-1.jpg'); border: 15px solid #ffffff; margin: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            </div>
        </div>

        <!-- Block 2: Marginilized Support -->
        <div class="vision-block reverse" style="flex-direction: row-reverse;">
            <div class="vision-content bg-dark-blue">
                <h2 class="vision-title">Global Resilience</h2>
                <p class="vision-text">
                    We envision a world where marginalized communities are no longer vulnerable but thrive with access
                    to education, healthcare, and sustainable livelihood opportunities. By fostering ethical leadership,
                    cultural preservation, and community resilience, we strive to bridge the gap between traditional
                    values and modern progress.
                </p>
            </div>
            <div class="vision-image"
                style="background-image: url('assets/images/pages/our-vision-2.jpg'); border: 15px solid #ffffff; margin: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            </div>
        </div>

        <!-- Block 3: Environmental & Heritage -->
        <div class="vision-block">
            <div class="vision-content bg-orange">
                <h2 class="vision-title">Collective Responsibility</h2>
                <p class="vision-text">
                    Our vision extends to promoting environmental conservation, women empowerment, and the preservation
                    of India’s rich heritage. Through the principles of unity, responsibility, and service, we aim to
                    inspire a sense of collective responsibility that strengthens the moral fabric of our nation.
                </p>
            </div>
            <div class="vision-content bg-dark-blue" style="background-color: #031245;">
                <h2 class="vision-title">Nurturing Roots</h2>
                <p class="vision-text">
                    At Bharat Utthann Foundation, we are committed to nurturing a society where every individual
                    contributes to a brighter, more inclusive, and prosperous future while staying connected to their
                    roots and cultural identity.
                </p>
            </div>
        </div>

    </section>

    <!-- Include Footer -->
    <?php include_once '../../../includes/footer.php'; ?>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>