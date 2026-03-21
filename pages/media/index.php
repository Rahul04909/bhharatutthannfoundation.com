<?php
// pages/media/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media & News | Bhharat Utthann Foundation</title>
    <base href="../../">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .page-header { background-color: #051b60; color: #ffffff; padding: 80px 0 60px; text-align: center; }
        .page-header h1 { font-family: 'Poppins', sans-serif; font-weight: 700; color: #ffb700; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px; font-size: 42px; }
        .page-header p { font-size: 18px; max-width: 800px; margin: 0 auto; opacity: 0.95; line-height: 1.6; }
        .section-padding { padding: 80px 0; }
        .bg-white { background-color: #ffffff; }
        .bg-light { background-color: #fcfcfc; }
        .section-title { font-family: 'Poppins', sans-serif; color: #051b60; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 32px; margin-bottom: 30px; position: relative; padding-bottom: 15px; }
        .section-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 70px; height: 3px; background-color: #f96302; }
        .content-block { font-size: 16px; line-height: 1.8; color: #444; margin-bottom: 30px; }
        .content-block h3 { font-family: 'Poppins', sans-serif; color: #f96302; font-weight: 600; font-size: 24px; margin-bottom: 15px; }
        .gallery-item { margin-bottom: 30px; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .gallery-item img { width: 100%; transition: transform 0.3s ease; }
        .gallery-item img:hover { transform: scale(1.05); }
        @media (max-width: 768px) { .page-header h1 { font-size: 32px; } .section-title { font-size: 26px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>Media & Impact Stories</h1>
            <p>Catch up on our latest initiatives, news coverage, and the inspiring stories of change from the ground level.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <h2 class="section-title center">Latest Updates</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="gallery-item"><img src="https://picsum.photos/seed/news1/600/400" alt="Media Update"></div>
                    <div class="content-block"><h3>Mega Health Camp Success</h3><p>Successfully serving over 2000 beneficiaries in our recent rural camp last month.</p></div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item"><img src="https://picsum.photos/seed/news2/600/400" alt="Media Update"></div>
                    <div class="content-block"><h3>Green Earth Initiative</h3><p>Our plantation drive reached a milestone of 10,000 trees planted this season.</p></div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item"><img src="https://picsum.photos/seed/news3/600/400" alt="Media Update"></div>
                    <div class="content-block"><h3>Award for Excellence</h3><p>Foundation recognized for outstanding contribution to women empowerment.</p></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Press Coverage</h2>
            <div class="row align-items-center">
                <div class="col-lg-6"><div class="content-block"><h3>Voices in the News</h3><p>Bhharat Utthann Foundation’s transparency and ground-level impact have been featured in several leading national and regional publications. These stories help us amplify our message and reach more potential partners who can support our mission.</p></div></div>
                <div class="col-lg-6"><div class="img-container"><img src="https://picsum.photos/seed/press/800/500" alt="Press Release"></div></div>
            </div>
        </div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
