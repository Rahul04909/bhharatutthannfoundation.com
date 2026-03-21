<?php
// pages/covid-relief/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid 19 Relief | Bhharat Utthann Foundation</title>
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
            <h1>Covid 19 Relief</h1>
            <p>Standing strong with the nation through emergency medical supplies, oxygen support, and financial aid for families affected by the global pandemic.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row"><div class="col-lg-12"><h2 class="section-title">Response in Times of Crisis</h2><div class="content-block"><p>The Covid-19 pandemic brought unprecedented challenges to Bharat. Bhharat Utthann Foundation immediately pivoted its resources to provide urgent humanitarian aid, focusing on the most marginalized populations who lost their livelihoods during the crisis.</p></div></div></div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6"><div class="content-block"><h3>Oxygen & Emergency Medical Support</h3><p>During the peak of the pandemic, we worked tirelessly to mobilize oxygen concentrators, hospital beds, and essential life-saving drugs for families in distress. Our emergency helpline remained active 24/7 to connect patients with available medical resources across major cities.</p></div></div>
                <div class="col-lg-6"><div class="img-container"><img src="https://picsum.photos/seed/covid/800/500" alt="Covid Relief Support"></div></div>
            </div>
            <div class="highlight-box"><p>"In the darkest hours of the pandemic, humanity's light shone the brightest. Our mission was to ensure that no family felt abandoned in their struggle against the virus."</p></div>
        </div>
    </section>
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Relief Framework</h2>
            <div class="row"><div class="col-lg-12"><div class="content-block"><p>We implemented a multi-tiered response strategy to address both the medical and socio-economic impact of the pandemic.</p>
                <ul class="numbered-list mt-5">
                    <li><strong>Ration Kit Distribution:</strong> Providing over 50,000 dry ration kits to migrant workers and daily wage earners who lost their income due to lockdowns.</li>
                    <li><strong>Livelihood Rehabilitation:</strong> Offering small-scale financial grants to widows and families who lost their primary breadwinners to the virus.</li>
                    <li><strong>Vaccination Awareness:</strong> Debunking myths and facilitating registration for marginalized communities at local vaccination centers.</li>
                    <li><strong>Children Education Support:</strong> Sponsoring the education of children who were orphanded or whose families were financially devastated by the pandemic.</li>
                </ul>
            </div></div></div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container"><div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1"><div class="img-container"><img src="https://picsum.photos/seed/ration/800/500" alt="Ration Distribution"></div></div>
            <div class="col-lg-6 order-1 order-lg-2 ps-lg-5"><h2 class="section-title">Building Future Resilience</h2><p>While the worst of the pandemic may be behind us, the scars remain. Our mission continues through the long-term rehabilitation of affected families. By strengthening local healthcare infrastructure and providing economic support, we are ensuring that our communities are better prepared for any future health crises. We stand committed to the resilient spirit of Bharat.</p></div>
        </div></div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
