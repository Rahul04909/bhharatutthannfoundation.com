<?php
// pages/finance/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate | Bhharat Utthann Foundation</title>
    
    <!-- Base tag ensures all relative asset and link paths (like those in header/footer) load flawlessly from the root -->
    <base href="../../">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts: Inter & Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa; /* Soft background contrasting card white */
        }
        
        .donation-header {
            background-color: #051b60; /* Dark blue theme */
            color: #ffffff;
            padding: 80px 0 60px;
            text-align: center;
        }
        
        .donation-header h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #ffb700; /* Yellow Theme */
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .donation-header p {
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.95;
            line-height: 1.6;
        }
        
        .donation-content {
            padding: 70px 0 90px;
        }
        
        .donation-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.06);
            overflow: hidden;
            height: 100%;
            transition: transform 0.3s ease;
        }
        
        .donation-card:hover {
            transform: translateY(-5px);
        }
        
        /* Vibrant Orange Header for Bank Transfer */
        .card-header-orange {
            background-color: #f96302;
            color: #ffffff;
            padding: 22px 30px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 20px;
            letter-spacing: 0.5px;
        }
        
        /* Dark Blue Header for UPI Scan */
        .card-header-blue {
            background-color: #051b60;
            color: #ffffff;
            padding: 22px 30px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 20px;
            letter-spacing: 0.5px;
        }
        
        .card-body-content {
            padding: 40px 40px;
        }
        
        .bank-detail-row {
            display: flex;
            align-items: center;
            padding: 18px 0;
            border-bottom: 1px dashed #e0e0e0;
        }
        
        .bank-detail-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .detail-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(249, 99, 2, 0.1);
            color: #f96302;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-right: 25px;
            flex-shrink: 0;
        }
        
        .detail-text h5 {
            font-size: 14px;
            color: #777777;
            margin-bottom: 5px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .detail-text h4 {
            font-size: 18px;
            color: #222222;
            margin-bottom: 0;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
        }
        
        /* QR Code Layout Rules */
        .qr-container {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .qr-box {
            background-color: #ffffff;
            border: 3px dashed #051b60;
            padding: 25px;
            border-radius: 12px;
            display: inline-block;
            margin: 25px 0 35px;
            position: relative;
        }
        
        /* Decorative corner blocks for scanning effect */
        .qr-box::before, .qr-box::after {
            content: ''; position: absolute; width: 20px; height: 20px;
        }
        .qr-box::before { top: -3px; left: -3px; border-top: 4px solid #f96302; border-left: 4px solid #f96302; border-top-left-radius: 10px; }
        .qr-box::after { bottom: -3px; right: -3px; border-bottom: 4px solid #f96302; border-right: 4px solid #f96302; border-bottom-right-radius: 10px; }
        
        .qr-box img {
            max-width: 250px;
            height: auto;
            border-radius: 4px;
        }
        
        .qr-instructions {
            color: #555555;
            font-size: 16px;
            line-height: 1.8;
            background-color: rgba(5, 27, 96, 0.05);
            padding: 15px 25px;
            border-radius: 8px;
            display: inline-block;
            width: 100%;
        }
        
        .qr-instructions strong {
            color: #051b60;
            font-size: 18px;
            display: block;
            margin-top: 5px;
            font-family: 'Poppins', sans-serif;
        }
        
        /* Mobile Breakpoints */
        @media (max-width: 768px) {
            .donation-header {
                padding: 60px 20px 40px;
            }
            .donation-header h1 {
                font-size: 28px;
            }
            .card-body-content {
                padding: 30px 20px;
            }
            .detail-icon {
                margin-right: 15px;
                width: 45px;
                height: 45px;
            }
            .detail-text h4 {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <!-- Embedded Common Header -->
    <?php include_once '../../includes/header.php'; ?>

    <!-- Master Hero Header mapping the cause -->
    <section class="donation-header">
        <div class="container">
            <h1>Support Our Mission</h1>
            <p>Your generous contribution helps us empower communities, preserve culture, and bring positive change. Every donation counts directly towards building a stronger foundation and a better Bharat.</p>
        </div>
    </section>

    <section class="donation-content">
        <div class="container">
            <!-- Utilizing Bootstrap's Grid Gutter g-5 for perfect spacious columns -->
            <div class="row g-5">
                
                <!-- Left Column: Direct Bank Transfer Details -->
                <div class="col-lg-6">
                    <div class="donation-card">
                        <div class="card-header-orange">
                            <i class="fa-solid fa-building-columns me-2"></i> Direct Bank Transfer
                        </div>
                        <div class="card-body-content">
                            <p class="mb-4 text-muted" style="line-height: 1.6;">You can securely transfer your contribution directly to our official foundation bank account using NEFT, RTGS, or IMPS securely.</p>
                            
                            <!-- Detail Blocks -->
                            <div class="bank-detail-row">
                                <div class="detail-icon"><i class="fa-solid fa-file-signature"></i></div>
                                <div class="detail-text">
                                    <h5>Account Name</h5>
                                    <h4>Bhharat Utthann Foundation</h4>
                                </div>
                            </div>
                            
                            <div class="bank-detail-row">
                                <div class="detail-icon"><i class="fa-solid fa-hashtag"></i></div>
                                <div class="detail-text">
                                    <h5>Account Number</h5>
                                    <h4>98765432101234</h4>
                                </div>
                            </div>
                            
                            <div class="bank-detail-row">
                                <div class="detail-icon"><i class="fa-solid fa-code"></i></div>
                                <div class="detail-text">
                                    <h5>IFSC Code</h5>
                                    <h4>SBIN0001234</h4>
                                </div>
                            </div>
                            
                            <div class="bank-detail-row">
                                <div class="detail-icon"><i class="fa-solid fa-building"></i></div>
                                <div class="detail-text">
                                    <h5>Bank Name & Branch</h5>
                                    <h4>State Bank of India, Main Branch</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column: UPI Scan & Pay Code -->
                <div class="col-lg-6">
                    <div class="donation-card">
                        <div class="card-header-blue">
                            <i class="fa-solid fa-qrcode me-2"></i> Scan & Pay via UPI
                        </div>
                        <div class="card-body-content qr-container">
                            <p class="mb-2 text-muted" style="line-height: 1.6;">Open any supported UPI payment app like Google Pay, PhonePe, or Paytm and scan the secure QR code below.</p>
                            
                            <!-- Render the provided QR image -->
                            <div class="qr-box">
                                <img src="assets/images/banking/upi-qr-code.png" alt="Donate meticulously via UPI QR Code" class="img-fluid">
                            </div>
                            
                            <p class="qr-instructions">
                                Scan with any supported UPI app to pay easily.<br>
                                <strong>donate.foundation@sbi</strong>
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Embedded Common Footer -->
    <?php include_once '../../includes/footer.php'; ?>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
