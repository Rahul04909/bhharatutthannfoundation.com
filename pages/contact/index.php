<?php
// pages/contact/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Bhharat Utthann Foundation</title>
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
        .contact-info-card { background-color: #f8f9fa; border: 1px solid #e9ecef; border-radius: 12px; padding: 30px; margin-bottom: 20px; height: 100%; transition: transform 0.3s; }
        .contact-info-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .info-icon { font-size: 28px; color: #f96302; margin-bottom: 15px; }
        .info-title { font-weight: 700; color: #051b60; font-size: 18px; margin-bottom: 10px; }
        .info-text { color: #555; line-height: 1.6; margin-bottom: 0; }
        .contact-form-card { background: #ffffff; border-radius: 12px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); padding: 40px; }
        .form-control { border-radius: 8px; padding: 12px 15px; border: 1px solid #dee2e6; }
        .form-control:focus { box-shadow: 0 0 0 3px rgba(249, 99, 2, 0.2); border-color: #f96302; }
        .btn-submit { background-color: #f96302; color: #ffffff; font-weight: 600; padding: 12px 30px; border-radius: 8px; border: none; width: 100%; transition: background 0.3s; }
        .btn-submit:hover { background-color: #d85402; color: #fff; }
        @media (max-width: 768px) { .page-header h1 { font-size: 32px; } .section-title { font-size: 26px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We are here to answer any questions you may have about our foundation. Reach out to us and we’ll respond as soon as we can.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <div class="contact-info-card">
                        <div class="info-icon"><i class="fas fa-location-dot"></i></div>
                        <div class="info-title">Global Headquarters</div>
                        <p class="info-text">Plot No-1, Deep Enclave, Near Deep Medical Center, New Delhi - 110034</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-info-card">
                        <div class="info-icon"><i class="fas fa-phone-volume"></i></div>
                        <div class="info-title">Call Us Anytime</div>
                        <p class="info-text">+91 98765 43210<br>+91 11 2345 6789</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-info-card">
                        <div class="info-icon"><i class="fas fa-envelope-open-text"></i></div>
                        <div class="info-title">Email Correspondence</div>
                        <p class="info-text">info@bhharatutthannfoundation.com<br>support@bhharatutthannfoundation.com</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-form-card">
                        <h2 class="section-title">Send Us a Message</h2>
                        <form action="#" method="POST">
                            <div class="mb-4"><input type="text" class="form-control" name="name" placeholder="Full Name" required></div>
                            <div class="mb-4"><input type="email" class="form-control" name="email" placeholder="Email Address" required></div>
                            <div class="mb-4"><input type="text" class="form-control" name="subject" placeholder="Subject" required></div>
                            <div class="mb-4"><textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea></div>
                            <button type="submit" class="btn-submit">Send Message Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="width: 100%; height: 500px; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.05);">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14008.2122554707!2d77.2065171!3d28.6282219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd37b7496677%3A0xd88d2f9d3f59e56a!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
