<?php
// pages/plantation-drive/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantation Drive | Bhharat Utthann Foundation</title>
    
    <!-- Base tag for root relative paths -->
    <base href="../../">
    
    <!-- Bootstrap 5 CSS -->
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
        .bg-light { background-color: #fcfcfc; }
        .section-title { font-family: 'Poppins', sans-serif; color: #051b60; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 32px; margin-bottom: 30px; position: relative; padding-bottom: 15px; }
        .section-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 70px; height: 3px; background-color: #f96302; }
        .content-block { font-size: 16px; line-height: 1.8; color: #444; margin-bottom: 30px; }
        .content-block h3 { font-family: 'Poppins', sans-serif; color: #f96302; font-weight: 600; font-size: 24px; margin-bottom: 15px; }
        .img-container { border-radius: 12px; box-shadow: 0 10px 30px rgba(5, 27, 96, 0.1); overflow: hidden; width: 100%; height: auto; margin-bottom: 30px; }
        .img-container img { width: 100%; height: auto; display: block; }
        .highlight-box { background-color: #e3f2fd; border-left: 5px solid #051b60; padding: 30px; margin: 40px 0; border-radius: 4px; }
        .highlight-box p { margin-bottom: 0; font-style: italic; font-weight: 500; color: #051b60; font-size: 18px; }
        .numbered-list { list-style: none; padding: 0; counter-reset: li-counter; }
        .numbered-list li { position: relative; padding-left: 50px; margin-bottom: 25px; font-size: 16px; line-height: 1.7; }
        .numbered-list li::before { content: counter(li-counter); counter-increment: li-counter; position: absolute; left: 0; top: 0; width: 35px; height: 35px; background-color: #f96302; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; }
        @media (max-width: 768px) { .page-header h1 { font-size: 32px; } .section-title { font-size: 26px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>Plantation Drive</h1>
            <p>Greening our planet and securing a sustainable future through massive community-led afforestation and environmental awareness programs.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row"><div class="col-lg-12"><h2 class="section-title">Rooting for a Greener Tomorrow</h2><div class="content-block"><p>Environmental sustainability is at the heart of Bhharat Utthann Foundation's mission. Our Plantation Drive is not just about planting saplings; it's about restoring the ecological balance and ensuring clean air for future generations.</p></div></div></div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6"><div class="content-block"><h3>Combating Climate Change</h3><p>With rapid urbanization, our green cover is shrinking at an alarming rate. We organize large-scale plantation drives in urban spaces, schools, and barren lands to bring back the natural canopy. Each tree we plant is a step towards carbon sequestration and local biodiversity restoration.</p></div></div>
                <div class="col-lg-6"><div class="img-container"><img src="https://picsum.photos/seed/tree_plan/800/500" alt="Planting Trees"></div></div>
            </div>
            <div class="highlight-box"><p>"The best time to plant a tree was 20 years ago. The second best time is now. Every sapling is a promise of life."</p></div>
        </div>
    </section>
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Environmental Strategy</h2>
            <div class="row"><div class="col-lg-12"><div class="content-block"><p>We follow a scientific approach to ensures that our plantation efforts result in high survival rates and meaningful ecological impact.</p>
                <ul class="numbered-list mt-5">
                    <li><strong>Native Species Selection:</strong> We prioritize planting indigenous trees that are well-adapted to the local climate and support local wildlife.</li>
                    <li><strong>Post-Planting Care:</strong> We don't just leave after planting. We involve local volunteers and community members to ensure regular watering and protection for at least 2 years.</li>
                    <li><strong>School & Youth Engagement:</strong> We conduct "Green Classrooms" where students participate in planting their own trees, fostering a lifelong bond with nature.</li>
                    <li><strong>Urban Miyawaki Forests:</strong> Utilizing small urban spaces to grow dense, native forests that act as oxygen hubs and noise buffers in congested cities.</li>
                </ul>
            </div></div></div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container"><div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1"><div class="img-container"><img src="https://picsum.photos/seed/forest/800/500" alt="Green Future"></div></div>
            <div class="col-lg-6 order-1 order-lg-2 ps-lg-5"><h2 class="section-title">Join the Movement</h2><div class="content-block"><p>Sustainability is a collective responsibility. Our plantation drives give individuals a chance to give back to the earth. By participating, you aren't just planting a tree; you are creating a legacy that will breathe life into the community for decades to come.</p><p>We invite schools, corporates, and individuals to join hands with us in our mission to turn our cities green and our planet healthy again.</p></div></div>
        </div></div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
