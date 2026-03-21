<?php
// pages/handicapped-assistance/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handicapped Assistance | Bhharat Utthann Foundation</title>
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
            <h1>Handicapped Assistance</h1>
            <p>Empowering differently-abled individuals through assistive technology, vocational rehabilitation, and inclusive social support systems.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row"><div class="col-lg-12"><h2 class="section-title">Enabling Ability Through Support</h2><div class="content-block"><p>Bhharat Utthann Foundation believes that disability is not inability. Our Handicapped Assistance mission focuses on removing the physical and socio-economic barriers that prevent differently-abled individuals from leading independent and dignified lives.</p></div></div></div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6"><div class="content-block"><h3>Dignity through Mobility</h3><p>We organize regular camps to distribute assistive devices such as wheelchairs, tricycles, hearing aids, and crutches to those in need. Beyond physical equipment, we provide psychological counseling and physiotherapy to help individuals adapt and thrive in their environments.</p></div></div>
                <div class="col-lg-6"><div class="img-container"><img src="https://picsum.photos/seed/assist/800/500" alt="Assistive Devices Support"></div></div>
            </div>
            <div class="highlight-box"><p>"Disability is a matter of perception. If you can do just one thing well, you are needed by someone. We are here to help you find that 'one thing'."</p></div>
        </div>
    </section>
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Our Support Methodology</h2>
            <div class="row"><div class="col-lg-12"><div class="content-block"><p>We follow a holistic approach to ensure long-term rehabilitation and social inclusion for the differently-abled.</p>
                <ul class="numbered-list mt-5">
                    <li><strong>Assistive Device Camps:</strong> Large-scale events where high-quality prosthetic limbs, wheelchairs, and hearing aids are provided at zero cost.</li>
                    <li><strong>Vocational Rehabilitation:</strong> Tailored skill training in computer operations, handicrafts, and office work designed specifically for current physical capabilities.</li>
                    <li><strong>Advocacy & Awareness:</strong> Working with local governments and businesses to ensure accessibility in public spaces and inclusive hiring practices.</li>
                    <li><strong>Family Counseling:</strong> Supporting the families and caregivers are just as important as supporting the individual, ensuring a positive home environment.</li>
                </ul>
            </div></div></div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container"><div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1"><div class="img-container"><img src="https://picsum.photos/seed/therapy/800/500" alt="Inclusive Rehabilitation"></div></div>
            <div class="col-lg-6 order-1 order-lg-2 ps-lg-5"><h2 class="section-title">Creating Inclusive Bharat</h2><p>Our long-term mission is to build a Bharat where every infrastructure is accessible and every individual, regardless of their physical condition, has the same opportunity to work and grow. We invite corporate CSR partners and medical professionals to join our mission of inclusive empowerment.</p></div>
        </div></div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
