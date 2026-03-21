<?php
// pages/self-reliance-women/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Reliance in Women | Bhharat Utthann Foundation</title>
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
        .img-container { border-radius: 12px; box-shadow: 0 10px 30px rgba(5, 27, 96, 0.1); overflow: hidden; width: 100%; height: auto; margin-bottom: 30px; }
        .img-container img { width: 100%; height: auto; display: block; }
        .highlight-box { background-color: #e3f2fd; border-left: 5px solid #051b60; padding: 30px; margin: 40px 0; border-radius: 4px; }
        .highlight-box p { margin-bottom: 0; font-style: italic; font-weight: 500; color: #051b60; font-size: 18px; }
        .numbered-list { list-style: none; padding: 0; counter-reset: li-counter; }
        .numbered-list li { position: relative; padding-left: 50px; margin-bottom: 25px; font-size: 16px; line-height: 1.7; }
        .numbered-list li::before { content: counter(li-counter); counter-increment: li-counter; position: absolute; left: 0; top: 0; width: 35px; height: 35px; background-color: #f96302; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; }
        @media (max-width: 768px) { .page-header h1 { font-size: 32px; } .section-title { font-size: 26px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>Self Reliance in Women</h1>
            <p>Creating independent and self-assured women through economic opportunities, skill diversification, and holistic social support systems.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row"><div class="col-lg-12"><h2 class="section-title">Enabling Financial Autonomy</h2><div class="content-block"><p>Financial independence is the true mark of empowerment. Bhharat Utthann Foundation focuses on transforming women into micro-entrepreneurs and skilled professionals, ensuring they never have to depend on others for their survival.</p></div></div></div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6"><div class="content-block"><h3>Beyond Charity to Capability</h3><p>We work in rural and urban clusters to identify women with the potential for entrepreneurship. By providing them with essential business training, financial literacy, and initial seed funding, we empower them to start small-scale industries at the local level.</p></div></div>
                <div class="col-lg-6"><div class="img-container"><img src="https://picsum.photos/seed/women_sew/800/500" alt="Self Reliance Training"></div></div>
            </div>
            <div class="highlight-box"><p>"True self-reliance comes from the confidence that one can earn their own bread and build their own future. We are here to nurture that confidence."</p></div>
        </div>
    </section>
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Self-Reliance Pillars</h2>
            <div class="row"><div class="col-lg-12"><div class="content-block"><p>Our multi-faceted approach ensures that women are not just earning, but thriving as independent leaders within their communities.</p>
                <ul class="numbered-list mt-5">
                    <li><strong>Micro-Finance Seed Funding:</strong> Providing interest-free or low-interest initial capital to set up local ventures like tailoring, organic farming, or handmade crafts.</li>
                    <li><strong>Market Linkages:</strong> Connecting artisan women to urban markets and digital platforms, ensuring their products reach a global audience.</li>
                    <li><strong>Entrepreneurship Mentorship:</strong> Guiding women through the basics of accounting, branding, and customer management for their small businesses.</li>
                    <li><strong>Social Support Networks:</strong> Creating "Bachat Gat" (Self-Help Groups) where women can pool resources and provide mutual support to one another.</li>
                </ul>
            </div></div></div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container"><div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1"><div class="img-container"><img src="https://picsum.photos/seed/women_lead/800/500" alt="Empowered Leaders"></div></div>
            <div class="col-lg-6 order-1 order-lg-2 ps-lg-5"><h2 class="section-title">The Path to Dignity</h2><p>Self-reliance leads to dignity. When a woman starts earning, she gains a voice in her family and community. Our long-term mission is to see every woman from the marginalized sections of Bharat leading a life of self-respect, choice, and economic security.</p></div>
        </div></div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
