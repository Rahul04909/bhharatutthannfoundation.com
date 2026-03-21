<?php
// pages/swachh-bharat/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swachh Bharat Abhiyan | Bhharat Utthann Foundation</title>
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
            <h1>Swachh Bharat Abhiyan</h1>
            <p>Cleaning our neighborhoods, rejuvenating public spaces, and fostering a culture of hygiene and environmental responsibility.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row"><div class="col-lg-12"><h2 class="section-title">Cleanliness is a Collective Responsibility</h2><div class="content-block"><p>A clean environment is the foundation of a healthy society. Bhharat Utthann Foundation actively drives the Swachh Bharat mission by organizing regular cleanliness drives and waste management awareness programs across towns and villages.</p></div></div></div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6"><div class="content-block"><h3>Beyond Just Sweeping</h3><p>Our mission focuses on creating permanent behavioral changes in the way communities manage waste. We work in urban slums and rural areas to set up decentralized waste segregation units and educate families on the importance of sanitary living conditions.</p></div></div>
                <div class="col-lg-6"><div class="img-container"><img src="https://picsum.photos/seed/swachh/800/500" alt="Cleanliness Drive"></div></div>
            </div>
            <div class="highlight-box"><p>"Cleanliness is next to Godliness. Our mission is to ensure that every street, every park, and every corner of Bharat breathes with purity."</p></div>
        </div>
    </section>
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Sanitation Pillars</h2>
            <div class="row"><div class="col-lg-12"><div class="content-block"><p>We follow a 4-step framework to ensure that our cleanliness drives result in long-term environmental improvement.</p>
                <ul class="numbered-list mt-5">
                    <li><strong>Community Cleaning Drives:</strong> Weekly mobilization of volunteers to clean public parks, water bodies, and neighborhood streets.</li>
                    <li><strong>Waste Segregation Awareness:</strong> Training households on the segregation of dry and wet waste at the source for efficient recycling.</li>
                    <li><strong>Sanitation Infrastructure:</strong> Working with local bodies to repair public toilets and ensure functional drainage systems in underserved areas.</li>
                    <li><strong>Anti-Plastic Campaigns:</strong> Driving awareness against single-use plastics and promoting the use of sustainable jute and cloth alternatives.</li>
                </ul>
            </div></div></div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container"><div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1"><div class="img-container"><img src="https://picsum.photos/seed/waste_man/800/500" alt="Waste Management Training"></div></div>
            <div class="col-lg-6 order-1 order-lg-2 ps-lg-5"><h2 class="section-title">Towards a Pure Bharat</h2><p>Our long-term goal is to transform every region we touch into a 'Zero-Waste Zone'. By fostering a sense of ownership among citizens, we are building a more hygienic and beautiful Bharat. We invite student groups, corporate teams, and resident associations to partner with us in our mission for a cleaner nation.</p></div>
        </div></div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
