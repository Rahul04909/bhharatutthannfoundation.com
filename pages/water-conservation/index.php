<?php
// pages/water-conservation/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Conservation | Bhharat Utthann Foundation</title>
    <meta name="description" content="Dedicated to sustainable water management, rainwater harvesting, and spreading awareness about water conservation for a future-ready Bharat.">
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
            <h1 class="hero-title">Water <span>Conservation</span></h1>
            <p class="hero-subtitle">Preserving our most precious resource through sustainable harvesting and community-led water management.</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="img-container">
                        <img src="assets/images/frontend/save-water.jpeg" alt="Water Conservation initiatives by Bhharat Utthann Foundation">
                    </div>
                </div>
            </div>
            
            <div class="row g-5">
                <div class="col-lg-8">
                    <h2 class="section-title">Sustainable Water Management</h2>
                    <div class="content-text">
                        <p>Water is the elixir of life, yet many parts of Bharat are facing severe water distress. At Bhharat Utthann Foundation, we are committed to addressing this crisis through a combination of traditional wisdom and modern technology.</p>
                        <p>Our approach focuses on reducing wastage, recharging groundwater, and empowering local communities to take ownership of their water resources. We facilitate the creation of sustainable infrastructures that ensure year-round water availability for drinking and agriculture.</p>
                        
                        <h3 class="mt-5 mb-4" style="color: var(--primary-blue); font-weight: 600;">Core Strategies</h3>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Implementation of Rainwater Harvesting systems in rural schools and community centers.</li>
                            <li><i class="fas fa-check-circle"></i> Restoration of traditional water bodies like ponds and step-wells.</li>
                            <li><i class="fas fa-check-circle"></i> Spreading awareness about efficient irrigation and household water usage.</li>
                            <li><i class="fas fa-check-circle"></i> Collaborating with local bodies to improve water storage and distribution.</li>
                        </ul>
                        
                        <p>Every drop saved is a drop earned for our future generations. Our mission is to build a water-secure Bharat where no village suffers from thirst or crop failure due to lack of water management.</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 100px;">
                        <div class="sidebar-card">
                            <h5>Why Act Now?</h5>
                            <p>Groundwater levels are depleting at an alarming rate. Rainwater harvesting can recharge local aquifers and provide a sustainable backup during dry months.</p>
                        </div>
                        
                        <div class="sidebar-card" style="border-left-color: var(--accent-orange);">
                            <h5>Join the Movement</h5>
                            <p>Help us implement water saving projects in your locality or support our technical teams in the field.</p>
                            <a href="pages/contact/index.php" class="btn-join">Support a Water Project</a>
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
