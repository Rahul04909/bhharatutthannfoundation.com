<?php
// pages/about/our-mission/index.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mission | Bhharat Utthann Foundation</title>

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

        /* Hero Header Section */
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
        .mission-section {
            padding: 0 0 80px 0;
            margin: 0;
            width: 100%;
        }

        .mission-block {
            display: flex;
            align-items: stretch;
            min-height: 500px;
            margin-bottom: 40px;
        }

        .mission-content {
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex: 1;
        }

        .mission-image {
            flex: 1;
            background-size: cover;
            background-position: center;
            min-height: 400px;
            transition: all 0.4s ease;
        }

        .bg-white {
            background-color: #ffffff;
            color: #333;
        }
        
        .bg-dark-blue {
            background-color: #051b60;
            color: #ffffff;
        }

        .mission-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 28px;
            text-transform: uppercase;
            margin-bottom: 25px;
            letter-spacing: 1px;
            position: relative;
            padding-bottom: 15px;
        }

        .mission-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: #ffb700;
        }

        .mission-text {
            font-size: 17px;
            line-height: 1.8;
            opacity: 0.95;
            margin-bottom: 20px;
        }
        
        .mission-text:last-child {
            margin-bottom: 0;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .mission-block {
                flex-direction: column;
            }

            .mission-block.reverse {
                flex-direction: column-reverse; /* Ensure image goes below text on mobile if reversed */
            }

            .mission-content {
                padding: 60px 30px;
            }

            .mission-image {
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
            <h1>Our Mission</h1>
            <p>Empowering communities, preserving heritage, and building a sustainable future through selfless service.</p>
        </div>
    </section>

    <!-- Mission Content Section -->
    <section class="mission-section">

        <!-- Block 1: Empowerment & Care -->
        <div class="mission-block">
            <div class="mission-content bg-white">
                <h2 class="mission-title" style="color: #051b60;">Empowerment & Care</h2>
                <p class="mission-text">
                    Our mission is to uplift marginalized communities by providing access to education, healthcare, and sustainable livelihood opportunities while fostering self-reliance and resilience. We are committed to empowering women, supporting children, and promoting Gau Seva (cow service) as part of our dedication to cultural preservation and community development.
                </p>
                <p class="mission-text">
                    We aim to address the practical needs of individuals and families through capacity-building initiatives, skill development programs, and health campaigns, enabling them to lead dignified and independent lives. By integrating cultural values (sanskar) with selfless service (seva), we strive to create a balanced and inclusive society rooted in ethical leadership and unity.
                </p>
            </div>
            <div class="mission-image"
                style="background-image: url('assets/images/pages/our-mission.jpg'); border: 15px solid #ffffff; margin: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            </div>
        </div>

        <!-- Block 2: Preservation & Future (Reversed) -->
        <div class="mission-block reverse" style="flex-direction: row-reverse;">
            <div class="mission-content bg-dark-blue">
                <h2 class="mission-title" style="color: #ffffff;">Preservation & Future</h2>
                <p class="mission-text">
                    Our mission extends to preserving India’s cultural heritage, advocating environmental conservation, and building compassionate communities that prioritize holistic development, ensuring a brighter and more sustainable future for all.
                </p>
            </div>
            <div class="mission-image"
                style="background-image: url('assets/images/pages/our-mission-1.jpg'); border: 15px solid #ffffff; margin: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            </div>
        </div>

    </section>

    <!-- Include Footer -->
    <?php include_once '../../../includes/footer.php'; ?>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
