<?php
// pages/terms-conditions/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions | Bhharat Utthann Foundation</title>
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
        .legal-content h2:first-child { margin-top: 0; }
        .legal-content p { line-height: 1.8; margin-bottom: 20px; font-size: 15px; }
        .legal-content ul { padding-left: 20px; margin-bottom: 20px; }
        .legal-content ul li { margin-bottom: 12px; font-size: 15px; line-height: 1.6; }
        @media (max-width: 768px) { .legal-content { padding: 30px; margin-top: -20px; } .page-header { padding: 40px 0; } .page-header h1 { font-size: 28px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>Terms & Conditions</h1>
        </div>
    </section>
    <div class="container">
        <div class="legal-content">
            <p>Please read these Terms and Conditions carefully before using the <strong>Bhharat Utthann Foundation</strong> website. By accessing or using our services, you agree to be bound by these terms.</p>

            <h2>1. Acceptance of Terms</h2>
            <p>Your access to and use of our website is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users, and others who access or use the Service.</p>

            <h2>2. Content Ownership</h2>
            <p>All content, including text, graphics, logos, and images on this website, is the property of Bhharat Utthann Foundation or its content suppliers and is protected by copyright laws. You may not reproduce, distribute, or create derivative works from this content without our express written permission.</p>

            <h2>3. User Conduct</h2>
            <p>Users are expected to use the website for lawful purposes only. You are prohibited from using the site to transmit any material that is defamatory, offensive, or otherwise objectionable. Any unauthorized use of the website may give rise to a claim for damages or be a criminal offense.</p>

            <h2>4. Donations & Payments</h2>
            <p>All donations made through our website are voluntary. While we strive to ensure that all transactions are secure, Bhharat Utthann Foundation is not responsible for any issues arising from third-party payment gateways.</p>

            <h2>5. Limitation of Liability</h2>
            <p>In no event shall Bhharat Utthann Foundation be liable for any indirect, incidental, special, consequential, or punitive damages arising out of your access to or use of the website.</p>

            <h2>6. Governing Law</h2>
            <p>These Terms shall be governed and construed in accordance with the laws of India, without regard to its conflict of law provisions. Any legal disputes arising from these terms shall be subject to the exclusive jurisdiction of the courts located in New Delhi.</p>

            <h2>7. Amendments</h2>
            <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms.</p>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
