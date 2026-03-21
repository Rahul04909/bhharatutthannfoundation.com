<?php
// pages/blood-donation/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Camp | Bhharat Utthann Foundation</title>
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
            <h1>Blood Donation Camp</h1>
            <p>Saving lives one unit at a time by organizing regular community-led blood donation drives in partnership with leading hospitals and blood banks.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row"><div class="col-lg-12"><h2 class="section-title">The Gift of Life</h2><div class="content-block"><p>Every second, someone in Bharat needs a lifesaving blood transfusion. Bhharat Utthann Foundation’s Blood Donation drives aim to ensure that no life is lost due to a shortage of blood. We facilitate a safe and efficient bridge between voluntary donors and hospital blood banks.</p></div></div></div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6"><div class="content-block"><h3>Building a Reliable Blood Network</h3><p>We organize large-scale donation camps in corporate offices, residential complexes, and educational institutions. Each camp is conducted under the supervision of medical professionals, ensuring the highest standards of safety and hygiene for every donor.</p></div></div>
                <div class="col-lg-6"><div class="img-container"><img src="https://picsum.photos/seed/blood_cam/800/500" alt="Blood Donation Session"></div></div>
            </div>
            <div class="highlight-box"><p>"Your blood can be the reason for someone's heartbeat. Donating blood is not just an act; it's a testament to our shared humanity."</p></div>
        </div>
    </section>
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Donation Framework</h2>
            <div class="row"><div class="col-lg-12"><div class="content-block"><p>We follow a strictly managed process to ensure that every drop donated is handled with professional care and reaches the right patient.</p>
                <ul class="numbered-list mt-5">
                    <li><strong>Pre-Donation Screening:</strong> Comprehensive medical checks including hemoglobin levels and blood pressure to ensure donor safety.</li>
                    <li><strong>Medical Supervision:</strong> Collaborating with certified blood banks and government hospitals to provide expert medical oversight during the camp.</li>
                    <li><strong>Donor Care & Refreshments:</strong> Providing high-quality post-donation care and nutritional support to ensure quick recovery of every hero.</li>
                    <li><strong>Recipient Registry Tracking:</strong> Maintaining an active database of voluntary donors to facilitate emergency requirements quickly.</li>
                </ul>
            </div></div></div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container"><div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1"><div class="img-container"><img src="https://picsum.photos/seed/donor/800/500" alt="Happy Donor"></div></div>
            <div class="col-lg-6 order-1 order-lg-2 ps-lg-5"><h2 class="section-title">Be a Lifesaver</h2><p>Our long-term goal is to make voluntary blood donation a regular habit among the youth of Bharat. By training individuals, we are creating a safer nation where medical emergencies are handled with ease. We invite organizations and community leaders to partner with us in hosting these heroic sessions.</p></div>
        </div></div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
