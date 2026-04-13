<?php
// pages/swachh-bharat/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swachh Bharat Abhiyan | Bhharat Utthann Foundation</title>
    <meta name="description" content="Actively contributing to the cleanliness and sanitation movement across Bharat through waste management, awareness, and community cleaning drives.">
    <base href="../../">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --primary-blue: #051b60; --accent-orange: #f96302; --accent-yellow: #ffb700; }
        body { font-family: 'Inter', sans-serif; background-color: #ffffff; color: #333; }
        .page-header { background-color: #f8f9fa; padding: 60px 0; border-bottom: 1 solid #eee; text-align: left; }
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
            <h1 class="hero-title">Swachh <span>Bharat</span></h1>
            <p class="hero-subtitle">Cultivating a culture of cleanliness and hygiene, making our environment a better place to live for everyone.</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="img-container">
                        <img src="assets/images/frontend/swach-bharat.jpeg" alt="Swachh Bharat Abhiyan by Bhharat Utthann Foundation">
                    </div>
                </div>
            </div>
            
            <div class="row g-5">
                <div class="col-lg-8">
                    <h2 class="section-title">Cleanliness is Next to Godliness</h2>
                    <div class="content-text">
                        <p>A clean environment is the foundation of a healthy and prosperous nation. At Bhharat Utthann Foundation, we are deeply committed to the ideals of the Swachh Bharat Abhiyan, working tirelessly at the grassroots level to improve sanitation and waste management.</p>
                        <p>Our initiatives go beyond simple cleaning; we focus on changing mindsets and building sustainable systems that ensure cleanliness becomes a way of life in both urban and rural communities.</p>
                        
                        <h3 class="mt-5 mb-4" style="color: var(--primary-blue); font-weight: 600;">Action Areas</h3>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Organizing community-led cleanliness drives in parks, streets, and school premises.</li>
                            <li><i class="fas fa-check-circle"></i> Implementing efficient waste segregation and composting workshops.</li>
                            <li><i class="fas fa-check-circle"></i> Raising awareness about the health hazards of open defecation and improper waste disposal.</li>
                            <li><i class="fas fa-check-circle"></i> Installing dustbins and sanitation facilities in high-need public areas.</li>
                        </ul>
                        
                        <p>By taking ownership of our surroundings, we are building a Bharat that is not only clean but also conscious of its environmental footprint.</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 100px;">
                        <div class="sidebar-card">
                            <h5>Cleanliness Starts with Me</h5>
                            <p>Small individual actions—like not littering and segregating waste at home—lead to massive collective change.</p>
                        </div>
                        
                        <div class="sidebar-card" style="border-left-color: var(--accent-orange);">
                            <h5>Join the Swachh Team</h5>
                            <p>Participate in our weekend cleaning drives or help us organize an awareness workshop in your colony.</p>
                            <a href="pages/contact/index.php" class="btn-join">Volunteer for Cleaning Drive</a>
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
