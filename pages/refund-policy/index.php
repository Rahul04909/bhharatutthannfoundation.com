<?php
// pages/refund-policy/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refund Policy | Bhharat Utthann Foundation</title>
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
        @media (max-width: 768px) { .legal-content { padding: 30px; margin-top: -20px; } .page-header { padding: 40px 0; } .page-header h1 { font-size: 28px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>Refund Policy</h1>
        </div>
    </section>
    <div class="container">
        <div class="legal-content">
            <p>Thank you for supporting <strong>Bhharat Utthann Foundation</strong>. We value your contributions towards our social missions.</p>

            <h2>1. Voluntary Contributions</h2>
            <p>All donations made to the Bhharat Utthann Foundation are voluntary and intended for charitable purposes only. Once a donation is made, it is generally non-refundable as the funds are immediately allocated to our grassroots projects and community upliftment initiatives.</p>

            <h2>2. Exceptional Circumstances</h2>
            <p>In the event of a technical error during the donation process (such as a double transaction or an incorrect amount entered), a donor may request a refund within 48 hours of the transaction.</p>

            <h2>3. Refund Process</h2>
            <p>To request a refund under exceptional circumstances, please email us at info@bhharatutthanfoundation.com with the following details:</p>
            <ul>
                <li>Transaction Date</li>
                <li>Transaction Reference Number</li>
                <li>Donation Amount</li>
                <li>Reason for Refund Request</li>
            </ul>
            <p>All requests will be reviewed by our accounts department, and if approved, the refund will be processed back to the original payment source within 7-10 working days.</p>

            <h2>4. Tax Receipt Reversal</h2>
            <p>If a tax-exemption receipt has already been issued for a donation, a refund will not be possible under any circumstances due to statutory regulations.</p>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
