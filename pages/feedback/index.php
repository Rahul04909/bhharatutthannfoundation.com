<?php
// pages/feedback/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback | Bhharat Utthann Foundation</title>
    <base href="../../">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
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
        .contact-card { background: #ffffff; border-radius: 12px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); padding: 40px; }
        .form-label { font-weight: 600; color: #051b60; margin-bottom: 8px; }
        .form-control { border-radius: 8px; padding: 12px 15px; border: 1px solid #dee2e6; }
        .form-control:focus { box-shadow: 0 0 0 3px rgba(249, 99, 2, 0.2); border-color: #f96302; }
        .btn-submit { background-color: #f96302; color: #ffffff; font-weight: 600; padding: 12px 30px; border-radius: 8px; border: none; transition: background 0.3s; }
        .btn-submit:hover { background-color: #d85402; color: #fff; }
        @media (max-width: 768px) { .page-header h1 { font-size: 32px; } .section-title { font-size: 26px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>We Value Your Feedback</h1>
            <p>Your suggestions and experiences help us improve our initiatives and deliver better impact at the grassroots level.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-card">
                        <h2 class="section-title">Share Your Thoughts</h2>
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Enter your name">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email" required placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Category</label>
                                <select class="form-select form-control" name="category">
                                    <option>General Feedback</option>
                                    <option>Project Suggestion</option>
                                    <option>Volunteer Inquiry</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Your Message</label>
                                <textarea class="form-control" name="message" rows="5" required placeholder="Write your feedback here..."></textarea>
                            </div>
                            <button type="submit" class="btn-submit">Submit Feedback</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
