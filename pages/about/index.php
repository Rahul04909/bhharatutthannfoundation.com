<?php
// pages/about/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Bhharat Utthann Foundation</title>
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
            <h1>About Our Foundation</h1>
            <p>Dedicated to the upliftment of the marginalized sections of Bharat through sustainable empowerment, transparency, and grassroots action.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row"><div class="col-lg-12"><h2 class="section-title">A Vision for Unified Growth</h2><div class="content-block"><p>Bhharat Utthann Foundation was established with the core belief that every individual, regardless of their social or economic background, deserves the opportunity to lead a dignified and prosperous life. Our work is driven by the spirit of 'Antyodaya'—serving the last person in the line.</p></div></div></div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6"><div class="content-block"><h3>Who We Are</h3><p>We are a dedicated group of professionals, social workers, and volunteers committed to creating a tangible impact at the ground level. Our foundation works across multiple domains including healthcare, education, women empowerment, and environmental sustainability, ensuring a holistic approach to national development.</p></div></div>
                <div class="col-lg-6"><div class="img-container"><img src="https://picsum.photos/seed/about/800/500" alt="About Our Work"></div></div>
            </div>
            <div class="highlight-box"><p>"True development is not measured by the skyscrapers we build, but by the smiles we bring to the most remote villages of our nation."</p></div>
        </div>
    </section>
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Core Values</h2>
            <div class="row"><div class="col-lg-12"><div class="content-block"><p>Our foundation's culture and strategy are rooted in four fundamental pillars that guide every project we undertake.</p>
                <ul class="numbered-list mt-5">
                    <li><strong>Radical Transparency:</strong> We ensure that every rupee donated is accounted for and its impact is clearly visible to our supporters.</li>
                    <li><strong>Community Ownership:</strong> We don't just provide aid; we build capabilities within the community to ensure our projects are sustainable in the long run.</li>
                    <li><strong>Spirit of Service (Sewa):</strong> Our team works with a selfless attitude, prioritizing the needs of the beneficiaries above all else.</li>
                    <li><strong>Integrity & Excellence:</strong> We strive for professional excellence in our executions, ensuring high-quality clinical and educational outcomes.</li>
                </ul>
            </div></div></div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container"><div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1"><div class="img-container"><img src="https://picsum.photos/seed/foundation/800/500" alt="Foundation Team"></div></div>
            <div class="col-lg-6 order-1 order-lg-2 ps-lg-5"><h2 class="section-title">Our Roadmap Ahead</h2><p>Our long-term goal is to extend our reach to every district in Bharat. By establishing local chapters and collaborating with government agencies, we aim to scale our impact and contribute directly to the vision of a self-reliant and prosperous nation. We invite you to join us on this transformative journey.</p></div>
        </div></div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
