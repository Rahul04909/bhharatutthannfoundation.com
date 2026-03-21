<?php
// pages/privacy-policy/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Bhharat Utthann Foundation</title>
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
            <h1>Privacy Policy</h1>
        </div>
    </section>
    <div class="container">
        <div class="legal-content">
            <p>Welcome to <strong>Bhharat Utthann Foundation</strong>. We are committed to protecting your privacy and ensuring that your personal information is handled in a safe and responsible manner. This policy outlines how we collect, use, and protect your data.</p>

            <h2>1. Information Collection</h2>
            <p>We collect information from you when you visit our website, make a donation, sign up for our newsletter, or fill out a form. This information may include your name, email address, phone number, and mailing address.</p>

            <h2>2. Use of Information</h2>
            <p>The information we collect may be used for the following purposes:</p>
            <ul>
                <li>To process donations and provide tax-receipts.</li>
                <li>To send periodic emails regarding foundation updates and newsletters.</li>
                <li>To improve our website based on the feedback we receive from you.</li>
                <li>To contact you regarding volunteer opportunities or community projects.</li>
            </ul>

            <h2>3. Data Protection</h2>
            <p>We implement a variety of security measures to maintain the safety of your personal information. Your personal data is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems.</p>

            <h2>4. Third-Party Disclosure</h2>
            <p>We do not sell, trade, or otherwise transfer your personally identifiable information to outside parties. This does not include trusted third parties who assist us in operating our website or conducting our business, so long as those parties agree to keep this information confidential.</p>

            <h2>5. Cookies</h2>
            <p>Our website may use "cookies" to enhance the user experience. You can choose to set your web browser to refuse cookies, or to alert you when cookies are being sent. If you do so, note that some parts of the site may not function properly.</p>

            <h2>6. Changes to this Policy</h2>
            <p>Bhharat Utthann Foundation reserves the right to update this privacy policy at any time. We encourage users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect.</p>

            <h2>7. Contacting Us</h2>
            <p>If there are any questions regarding this privacy policy, you may contact us using the information on our contact page or email us at info@bhharatutthanfoundation.com.</p>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
