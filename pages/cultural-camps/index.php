<?php
// pages/cultural-camps/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultural Camps | Bhharat Utthann Foundation</title>
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
            <h1>Cultural Camps</h1>
            <p>Preserving and celebrating the rich heritage of Bharat through traditional arts, folk performances, and community-led cultural festivals.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row"><div class="col-lg-12"><h2 class="section-title">Rooting the Future in Tradition</h2><div class="content-block"><p>Culture is the soul of a nation. Bhharat Utthann Foundation’s Cultural Camps are designed to reconnect our youth with the diverse and vibrant traditions that define our identity. We believe that a strong cultural root provides the foundation for holistic growth.</p></div></div></div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6"><div class="content-block"><h3>Reviving Folk Arts</h3><p>Many of our traditional art forms are on the verge of extinction. We organize specialized camps where master artisans and folk practitioners teach their skills to the younger generation. From pottery and traditional painting to folk music and dance, we ensure that these treasures are passed down with pride.</p></div></div>
                <div class="col-lg-6"><div class="img-container"><img src="https://picsum.photos/seed/culture/800/500" alt="Cultural Camp Session"></div></div>
            </div>
            <div class="highlight-box"><p>"A nation's culture resides in the hearts and in the soul of its people. Our mission is to keep that soul vibrant and alive for ever."</p></div>
        </div>
    </section>
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Heritage Strategy</h2>
            <div class="row"><div class="col-lg-12"><div class="content-block"><p>We follow a community-driven model to ensure that our cultural initiatives are authentic and inclusive.</p>
                <ul class="numbered-list mt-5">
                    <li><strong>Artisan Workshops:</strong> Hands-on training sessions where participants learn traditional crafts directly from award-winning local artisans.</li>
                    <li><strong>Community Festivals:</strong> Organizing and supporting local folk festivals that celebrate regional diversity and promote communal harmony.</li>
                    <li><strong>Heritage Education:</strong> Interactive sessions for school children highlighting the historical and spiritual significance of Bharat's cultural landmarks.</li>
                    <li><strong>Performance Platforms:</strong> Creating opportunities for local folk artists to showcase their talent on larger stages, ensuring their art remains economically viable.</li>
                </ul>
            </div></div></div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container"><div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1"><div class="img-container"><img src="https://picsum.photos/seed/folk_art/800/500" alt="Traditional Performance"></div></div>
            <div class="col-lg-6 order-1 order-lg-2 ps-lg-5"><h2 class="section-title">Building a Proud Bharat</h2><p>Our long-term goal is to see a Bharat where every individual takes pride in their local heritage. By celebrating our roots, we are building a more inclusive and confident society. We invite artists, historians, and cultural enthusiasts to partner with us in our mission of heritage preservation.</p></div>
        </div></div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
