<?php
// pages/skill-development/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Development | Bhharat Utthann Foundation</title>
    <meta name="description" content="Bridging the employability gap through vocational training, digital literacy, and professional coaching to empower the youth of Bharat.">
    <base href="../../">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --primary-blue: #051b60; --accent-orange: #f96302; --accent-yellow: #ffb700; }
        body { font-family: 'Inter', sans-serif; background-color: #ffffff; color: #333; }
        .page-header { background-color: #f8f9fa; padding: 60px 0; border-bottom: 1px solid #eee; text-align: left; }
        .hero-title { font-family: 'Poppins', sans-serif; font-size: 42px; font-weight: 700; color: var(--primary-blue); line-height: 1.2; margin-bottom: 15px; }
        .hero-title span { color: var(--accent-orange); }
        .hero-subtitle { font-size: 18px; color: #666; max-width: 800px; }
        
        .section-padding { padding: 80px 0; }
        .img-container { width: 100%; border-radius: 20px; overflow: hidden; margin-bottom: 50px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); background: #f0f0f0; }
        .img-container img { width: 100%; height: auto; max-height: 550px; object-fit: cover; display: block; }
        
        .section-title { font-family: 'Poppins', sans-serif; color: var(--primary-blue); font-weight: 700; position: relative; padding-bottom: 15px; margin-bottom: 30px; font-size: 32px; }
        .section-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: var(--accent-orange); }
        
        .content-text { font-size: 17px; line-height: 1.8; color: #444; }
        .content-text p { margin-bottom: 25px; }
        .feature-list { list-style: none; padding: 0; margin-bottom: 30px; }
        .feature-list li { position: relative; padding-left: 35px; margin-bottom: 15px; font-weight: 500; color: #555; }
        .feature-list li i { position: absolute; left: 0; top: 5px; color: var(--accent-orange); font-size: 20px; }
        
        .sidebar-card { background: #f8f9fa; border-radius: 20px; padding: 35px; margin-bottom: 30px; border-left: 6px solid var(--primary-blue); }
        .sidebar-card h5 { font-family: 'Poppins', sans-serif; color: var(--primary-blue); font-weight: 700; margin-bottom: 20px; }
        .btn-join { background: var(--accent-orange); color: #fff; border-radius: 50px; padding: 12px 30px; font-weight: 600; display: block; text-align: center; text-decoration: none; transition: all 0.3s; }
        .btn-join:hover { background: var(--primary-blue); color: #fff; transform: translateY(-3px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        
        @media (max-width: 768px) { .hero-title { font-size: 32px; } .section-padding { padding: 50px 0; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1 class="hero-title">Skill <span>Development</span></h1>
            <p class="hero-subtitle">Unlocking human potential through industry-relevant training, turning aspirations into successful careers.</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="img-container">
                        <img src="assets/images/frontend/skill-development.jpeg" alt="Skill Development training by Bhharat Utthann Foundation">
                    </div>
                </div>
            </div>
            
            <div class="row g-5">
                <div class="col-lg-8">
                    <h2 class="section-title">Empowering the Future Workforce</h2>
                    <div class="content-text">
                        <p>In a rapidly evolving economy, skills are the most valuable currency. At Bhharat Utthann Foundation, our Skill Development initiatives are designed to bridge the gap between formal education and industry requirements, particularly for the youth in underserved areas.</p>
                        <p>Our training centers offer a range of vocational and soft skills programs that are tailored to local job market demands. We don't just teach tasks; we foster a professional mindset, entrepreneurship, and long-term employability.</p>
                        
                        <h3 class="mt-5 mb-4" style="color: var(--primary-blue); font-weight: 600;">Key Training Areas</h3>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Digital Literacy: Basic computer skills, internet usage, and productivity tools.</li>
                            <li><i class="fas fa-check-circle"></i> Vocational Trades: Tailoring, artisan crafts, mobile repair, and beauty wellness.</li>
                            <li><i class="fas fa-check-circle"></i> Professional Skills: Communication, resume building, and interview preparation.</li>
                            <li><i class="fas fa-check-circle"></i> Entrepreneurship: Managing small businesses and financial bookkeeping.</li>
                        </ul>
                        
                        <p>By empowering individuals with practical expertise, we are not only providing them with better job opportunities but also building the foundation for a more skilled and prosperous Bharat.</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 100px;">
                        <div class="sidebar-card">
                            <h5>Why Skill Development?</h5>
                            <p>Degree alone isn't enough; hands-on skills are what get jobs today. We focus on "Learning by Doing" to ensure our students are industry-ready from day one.</p>
                        </div>
                        
                        <div class="sidebar-card" style="border-left-color: var(--accent-orange);">
                            <h5>Be a Mentor</h5>
                            <p>Are you an expert in your field? Share your knowledge with our students as a guest lecturer or professional mentor.</p>
                            <a href="pages/contact/index.php" class="btn-join">Volunteer as Mentor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
