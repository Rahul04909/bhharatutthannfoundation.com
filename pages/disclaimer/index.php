<?php
// pages/disclaimer/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disclaimer | Bhharat Utthann Foundation</title>
    <base href="../../">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; color: #444; }
        .page-header { background-color: #051b60; color: #ffffff; padding: 60px 0; text-align: center; }
        .page-header h1 { font-family: 'Poppins', sans-serif; font-weight: 700; color: #ffb700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 0; }
        .legal-content { background: #fff; padding: 60px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); margin-top: -40px; margin-bottom: 80px; position: relative; z-index: 10; }
        .legal-content h2 { font-family: 'Poppins', sans-serif; color: #051b60; font-weight: 700; margin-top: 35px; margin-bottom: 20px; font-size: 24px; border-left: 4px solid #f96302; padding-left: 15px; }
        .legal-content p { line-height: 1.8; margin-bottom: 20px; font-size: 15px; }
        @media (max-width: 768px) { .legal-content { padding: 30px; margin-top: -20px; } .page-header { padding: 40px 0; } .page-header h1 { font-size: 28px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>Disclaimer</h1>
        </div>
    </section>
    <div class="container">
        <div class="legal-content">
            <p>The information provided by <strong>Bhharat Utthann Foundation</strong> on this website is for general informational and educational purposes only.</p>

            <h2>1. Accuracy of Information</h2>
            <p>All information on the site is provided in good faith. However, we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any information on the site.</p>

            <h2>2. No Professional Advice</h2>
            <p>The foundation does not provide professional medical, legal, or financial advice. Any action you take based on the information provided on this website is strictly at your own risk, and Bhharat Utthann Foundation will not be liable for any losses or damages in connection with the use of our website.</p>

            <h2>3. External Links Disclaimer</h2>
            <p>This site may contain links to external websites that are not provided or maintained by or in any way affiliated with Bhharat Utthann Foundation. Please note that we do not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.</p>

            <h2>4. Views Shared</h2>
            <p>The opinions expressed within the projects or by our contributors are theirown and do not necessarily reflect the official policy or position of any other agency, organization, employer, or company.</p>

            <h2>5. Limitation of Liability</h2>
            <p>Under no circumstance shall we have any liability to you for any loss or damage of any kind incurred as a result of the use of the site or reliance on any information provided on the site.</p>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
