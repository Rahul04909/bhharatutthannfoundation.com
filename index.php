<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhharat Utthann Foundation</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Swiper CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }
    </style>
</head>
<body>

    <!-- Include Header Component -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Include Hero Slider Component -->
    <?php include_once 'components/hero.php'; ?>

    <!-- Include News Ticker Component -->
    <?php include_once 'components/news-ticker.php'; ?>

    <!-- Include Awards Component -->
    <?php include_once 'components/awards.php'; ?>

    <!-- Include Features Component -->
    <?php include_once 'components/features.php'; ?>

    <!-- Include Our Work Component -->
    <?php include_once 'components/our-work.php'; ?>

    <!-- Include Contact Component -->
    <?php include_once 'components/contact.php'; ?>

    <!-- Include Footer Component -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
