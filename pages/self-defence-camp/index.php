<?php
// pages/self-defence-camp/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Defence Camp | Bhharat Utthann Foundation</title>
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
            <h1>Self Defence Camp</h1>
            <p>Empowering women and girls with tactical awareness, physical protection skills, and the confidence to navigate the world safely.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row"><div class="col-lg-12"><h2 class="section-title">Safety Through Empowerment</h2><div class="content-block"><p>Personal safety is a fundamental right. Bhharat Utthann Foundation organizes free self-defense camps to equip individuals, particularly women and students, with the practical skills needed to protect themselves from physical threats.</p></div></div></div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6"><div class="content-block"><h3>Building Fearless Minds</h3><p>Our camps focus on more than just physical maneuvers. We teach situational awareness, mental alertness, and the psychological readiness required to handle dangerous situations. By building confidence, we ensure that the fear of danger never limits an individual's mobility or opportunities.</p></div></div>
                <div class="col-lg-6"><div class="img-container"><img src="https://picsum.photos/seed/self_def/800/500" alt="Self Defence Training"></div></div>
            </div>
            <div class="highlight-box"><p>"Confidence is your first line of defence. Our mission is to ensure that no one ever has to feel helpless in the face of a threat."</p></div>
        </div>
    </section>
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Camp Methodology</h2>
            <div class="row"><div class="col-lg-12"><div class="content-block"><p>Led by expert martial artists and safety trainers, our camps are designed to be practical, engaging, and highly effective.</p>
                <ul class="numbered-list mt-5">
                    <li><strong>Tactical Awareness Training:</strong> Teaching participants how to identify and avoid potential threats before they escalate into physical encounters.</li>
                    <li><strong>Practical Combat Skills:</strong> Focus on simple yet powerful techniques that use the momentum of the attacker to create an escape opportunity.</li>
                    <li><strong>Use of Everyday Objects:</strong> Training on how to effectively use common items like pens, bags, or umbrellas for personal protection.</li>
                    <li><strong>Psychological Resilience:</strong> Workshops on voice modulation, body language, and the "will to fight back" to deter potential harassers.</li>
                </ul>
            </div></div></div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container"><div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1"><div class="img-container"><img src="https://picsum.photos/seed/martial_art/800/500" alt="Self Defence Session"></div></div>
            <div class="col-lg-6 order-1 order-lg-2 ps-lg-5"><h2 class="section-title">Scaling for Impact</h2><p>Our camps are regularly organized in schools, colleges, and rural clusters across the nation. By training individuals, we are creating a safer Bharat where every girl can study, work, and commute without the constant shadow of fear. We invite educational institutions and community leaders to partner with us in hosting these life-saving sessions.</p></div>
        </div></div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
