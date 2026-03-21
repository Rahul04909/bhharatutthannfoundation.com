<?php
// pages/faq/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions | Bhharat Utthann Foundation</title>
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
        .section-title { font-family: 'Poppins', sans-serif; color: #051b60; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 32px; margin-bottom: 30px; position: relative; padding-bottom: 15px; }
        .section-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 70px; height: 3px; background-color: #f96302; }
        .faq-item { background-color: #f8f9fa; border: 1px solid #e9ecef; border-radius: 8px; margin-bottom: 15px; overflow: hidden; }
        .faq-question { padding: 20px; font-weight: 600; color: #051b60; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: background 0.2s; }
        .faq-question:hover { background-color: #eff1f5; }
        .faq-answer { padding: 0 20px 20px; color: #555; line-height: 1.6; }
        @media (max-width: 768px) { .page-header h1 { font-size: 32px; } .section-title { font-size: 26px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <p>Providing clear and transparent answers to the most common queries about our foundation, projects, and donation processes.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <h2 class="section-title center">General Inquiries</h2>
            <div class="row"><div class="col-lg-12">
                <div class="faq-item">
                    <div class="faq-question">What is the main mission of Bhharat Utthann Foundation? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Our mission is to empower the marginalized sections of Bharat through holistic development in healthcare, education, and economic self-reliance.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How are the funds utilized? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Transparency is our core value. All funds are directly used for project implementation, ensuring zero waste and maximum impact for our beneficiaries.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How can I volunteer for the foundation? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">We welcome enthusiasts from all backgrounds. You can reach out via our contact form or feedback page to join our volunteer network.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Are donations tax-exempt? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Yes, we are a registered foundation and provide all necessary tax-exemption certificates for every contribution made towards our mission.</div>
                </div>
            </div></div>
        </div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
