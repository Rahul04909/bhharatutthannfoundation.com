<?php
// pages/payment-details/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details | Bhharat Utthann Foundation</title>
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
        .bank-details { background-color: #fcfcfc; border: 1px solid #eee; border-radius: 8px; padding: 25px; margin-top: 20px; }
        .bank-details p { margin-bottom: 8px; font-weight: 500; font-size: 16px; }
        .bank-details span { color: #f96302; font-weight: 700; margin-left: 10px; }
        .qr-section { text-align: center; margin-top: 40px; }
        .qr-section img { max-width: 250px; border: 5px solid #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 8px; }
        @media (max-width: 768px) { .legal-content { padding: 30px; margin-top: -20px; } .page-header { padding: 40px 0; } .page-header h1 { font-size: 28px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>Payment Details</h1>
        </div>
    </section>
    <div class="container">
        <div class="legal-content">
            <p>Supporters are encouraged to contribute through secured channels. Below are the official banking and digital payment details for <strong>Bhharat Utthann Foundation</strong>.</p>

            <h2>1. Direct Bank Transfer (NEFT/IMPS)</h2>
            <div class="bank-details">
                <p>Account Holder Name: <span>Bhharat Utthann Foundation</span></p>
                <p>Account Number: <span>1234567890123</span></p>
                <p>Bank Name: <span>State Bank of India</span></p>
                <p>IFSC Code: <span>SBIN0001234</span></p>
                <p>Branch: <span>Deep Enclave, New Delhi</span></p>
                <p>Account Type: <span>Current Account</span></p>
            </div>

            <h2>2. Digital Payments (UPI)</h2>
            <p>You can also support us by scanning the official QR code using any UPI-enabled app (PhonePe, Google Pay, Paytm, etc.).</p>
            <div class="qr-section">
                <img src="assets/images/banking/upi-qr-code.png" alt="Foundation UPI QR Code">
                <p class="mt-3"><strong>UPI ID: bhharatutthan@sbi</strong></p>
            </div>

            <h2>3. Secure Online Payment</h2>
            <p>For instant online contributions, please visit our dedicated <a href="pages/finance/index.php" style="color: #f96302; font-weight: 600;">Donation Page</a> which supports Credit/Debit cards and Net Banking through our secure payment gateway.</p>

            <div class="alert alert-info mt-5" style="border-radius: 8px; font-size: 14px;">
                <i class="fas fa-info-circle me-2"></i> All donations made to the foundation are eligible for tax exemption under section 80G of the Income Tax Act.
            </div>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
