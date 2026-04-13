<?php
// pages/self-reliance-women/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Reliance in Women | Bhharat Utthann Foundation</title>
    <meta name="description" content="Empowering women to become financially independent and socially resilient through vocational education, entrepreneurship, and leadership initiatives.">
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
            <h1 class="hero-title">Self Reliance in <span>Women</span></h1>
            <p class="hero-subtitle">Cultivating inner strength and economic independence, paving the way for a generation of female leaders.</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="img-container">
                        <img src="assets/images/frontend/womens-self-reliance .jpeg" alt="Self Reliance initiatives for Women by Bhharat Utthann Foundation">
                    </div>
                </div>
            </div>
            
            <div class="row g-5">
                <div class="col-lg-8">
                    <h2 class="section-title">Beyond Empowerment</h2>
                    <div class="content-text">
                        <p>True empowerment begins when a woman can rely on her own skills and resources to navigate life's challenges. At Bhharat Utthann Foundation, we focus on deep-rooted self-reliance, ensuring that women in local communities have the financial literacy and practical experience to support themselves and their families.</p>
                        <p>Our programs are designed to move women from being beneficiaries to becoming contributors and decision-makers in their households. We provide holistic support that includes technical training, business mentorship, and access to marketplace opportunities.</p>
                        
                        <h3 class="mt-5 mb-4" style="color: var(--primary-blue); font-weight: 600;">Pathway to Independence</h3>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Mentorship for small-scale home businesses and cottage industries.</li>
                            <li><i class="fas fa-check-circle"></i> Advanced training in digital commerce and financial management.</li>
                            <li><i class="fas fa-check-circle"></i> Establishing Self-Help Groups (SHGs) for collective growth and support.</li>
                            <li><i class="fas fa-check-circle"></i> Leadership workshops to encourage participation in local governance.</li>
                        </ul>
                        
                        <p>By instilling a sense of ownership and pride in their work, we enable women to craft their own success stories, contributing to a Bharat that is truly self-reliant at every level.</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 100px;">
                        <div class="sidebar-card">
                            <h5>Why Self-Reliance?</h5>
                            <p>Economic freedom is the most powerful catalyst for social change. It gives women the agency to prioritize their health, education, and family's future.</p>
                        </div>
                        
                        <div class="sidebar-card" style="border-left-color: var(--accent-orange);">
                            <h5>Empower a Woman</h5>
                            <p>Join us as a mentor or contributor to help provide seed funding for a woman-led small business today.</p>
                            <a href="pages/contact/index.php" class="btn-join">Support a Woman Entrepreneur</a>
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
