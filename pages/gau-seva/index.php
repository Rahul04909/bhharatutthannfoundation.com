<?php
// pages/gau-seva/index.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gau Seva | Bhharat Utthann Foundation</title>

    <!-- Base tag for root relative paths -->
    <base href="../../">

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
        .project-section {
            padding: 0 0 80px 0;
            margin: 0;
            width: 100%;
        }

        .project-block {
            display: flex;
            align-items: stretch;
            min-height: 500px;
            margin-bottom: 40px;
        }

        .project-content {
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex: 1;
        }

        .project-image {
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

        .project-title {
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

        .project-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: #ffb700;
        }

        .project-text {
            font-size: 17px;
            line-height: 1.8;
            opacity: 0.95;
            margin-bottom: 20px;
        }

        .project-text:last-child {
            margin-bottom: 0;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .project-block {
                flex-direction: column;
            }

            .project-block.reverse {
                flex-direction: column;
            }

            .project-content {
                padding: 60px 30px;
            }

            .project-image {
                min-height: 350px;
            }

            .page-header h1 {
                font-size: 36px;
            }
        }
    </style>
</head>

<body>

    <?php include_once '../../includes/header.php'; ?>

    <!-- Hero Header -->
    <section class="page-header">
        <div class="container">
            <h1>Gau Seva</h1>
            <p>Fostering compassion, protecting our heritage, and supporting sustainable rural livelihoods.</p>
        </div>
    </section>

    <!-- Project Content Section -->
    <section class="project-section">

        <!-- Block 1: Main Content -->
        <div class="project-block">
            <div class="project-content bg-white">
                <h2 class="project-title" style="color: #051b60;">Spiritual & Cultural Responsibility</h2>
                <p class="project-text">
                    At Bharat Utthann Foundation, Gau Seva (cow service) is seen as both a spiritual and cultural
                    responsibility. We recognize the vital role cows play in India’s agricultural, economic, and
                    spiritual traditions. Our efforts focus on the protection, care, and nourishment of cows, ensuring
                    they are treated with respect and compassion.
                </p>
                <p class="project-text">
                    The Foundation encourages sustainable practices in cow rearing, promoting environmentally friendly
                    and rural livelihood-supporting methods. Through Gau Seva, we aim to inspire self-reliance in
                    communities, preserve India’s cultural heritage, and strengthen the bond between humanity and
                    nature.
                </p>
            </div>
            <div class="project-image"
                style="background-image: url('assets/images/pages/gau-seva.jpeg'); border: 15px solid #ffffff; margin: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            </div>
        </div>

    </section>

    <!-- Include Footer -->
    <?php include_once '../../includes/footer.php'; ?>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>