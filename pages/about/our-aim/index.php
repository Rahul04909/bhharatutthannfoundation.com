<?php
// pages/about/our-aim/index.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Aim | Bhharat Utthann Foundation</title>

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
        .aim-section {
            padding: 0 0 80px 0;
            margin: 0;
            width: 100%;
        }

        .aim-block {
            display: flex;
            align-items: stretch;
            min-height: 500px;
            margin-bottom: 40px;
        }

        .aim-content {
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex: 1;
        }

        .aim-image {
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

        .aim-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 28px;
            text-transform: uppercase;
            margin-bottom: 25px;
            letter-spacing: 1px;
            position: relative;
            padding-bottom: 15px;
            color: #051b60;
        }

        .aim-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: #ffb700;
        }

        .aim-text {
            font-size: 17px;
            line-height: 1.8;
            opacity: 0.95;
            margin-bottom: 20px;
        }
        
        .aim-text:last-child {
            margin-bottom: 0;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .aim-block {
                flex-direction: column;
            }

            .aim-block.reverse {
                flex-direction: column;
            }

            .aim-content {
                padding: 60px 30px;
            }

            .aim-image {
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
            <h1>Our Aim</h1>
            <p>Uplifting the vulnerable, fostering self-reliance, and strengthening the foundation of our society.</p>
        </div>
    </section>

    <!-- Aim Content Section -->
    <section class="aim-section">

        <!-- Block 1: Main Aim -->
        <div class="aim-block">
            <div class="aim-content bg-white">
                <h2 class="aim-title" style="color: #051b60;">Fostering Resilience & Independence</h2>
                <p class="aim-text">
                    Our aim is to uplift vulnerable and underserved sections of society by providing them with essential resources, skills, and guidance to lead lives of dignity, independence, and purpose. We seek to empower individuals and families to become active contributors to their communities, inspiring them to lead by example in selfless service and cultural stewardship.
                </p>
                <p class="aim-text">
                    By promoting education, health, and livelihood opportunities, we aim to bridge gaps in societal development while fostering resilience and self-reliance. Rooted in the values of sanskar (cultural values) and seva (selfless service), we strive to create a just, inclusive, and harmonious society deeply connected to India’s cultural and spiritual heritage.
                </p>
            </div>
            <div class="aim-image"
                style="background-image: url('assets/images/pages/our-aim.jpg'); border: 15px solid #ffffff; margin: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            </div>
        </div>

    </section>

    <!-- Include Footer -->
    <?php include_once '../../../includes/footer.php'; ?>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
