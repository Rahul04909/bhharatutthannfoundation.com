<?php
// pages/media/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media & News | Bhharat Utthann Foundation</title>
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
        .gallery-item { margin-bottom: 30px; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .gallery-item img { width: 100%; transition: transform 0.3s ease; }
        .gallery-item img:hover { transform: scale(1.05); }
        @media (max-width: 768px) { .page-header h1 { font-size: 32px; } .section-title { font-size: 26px; } }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <h1>Media & Impact Stories</h1>
            <p>Catch up on our latest initiatives, news coverage, and the inspiring stories of change from the ground level.</p>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
            <h2 class="section-title center text-center mb-5">Our Gallery</h2>

            <?php
            // Fetch gallery items securely
            require_once '../../database/db_config.php';
            $galleryItems = [];
            try {
                $stmt = $pdo->query("SELECT * FROM gallery ORDER BY id DESC");
                $galleryItems = $stmt->fetchAll();
            } catch (\PDOException $e) {
                // gracefully bypass
            }
            ?>

            <?php if (count($galleryItems) === 0): ?>
                <div class="text-center text-muted">
                    <p>No media available at the moment. Please check back later.</p>
                </div>
            <?php else: ?>
                <div class="row g-4">
                    <?php foreach ($galleryItems as $item): ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-item cursor-pointer" data-bs-toggle="modal" data-bs-target="#imageModal<?= $item['id'] ?>" style="cursor: pointer;">
                                <img src="<?= htmlspecialchars(str_replace('../', '', $item['thumbnail_path'])) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="img-fluid w-100">
                                <div class="p-3 bg-light border-top text-center">
                                    <h6 class="mb-0 text-dark" style="font-weight: 600;"><?= htmlspecialchars($item['title']) ?></h6>
                                </div>
                            </div>

                            <!-- Modal for viewing full image -->
                            <div class="modal fade" id="imageModal<?= $item['id'] ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content bg-transparent border-0">
                                        <div class="modal-header border-0 pb-0">
                                            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
                                        </div>
                                        <div class="modal-body text-center pt-0">
                                            <img src="<?= htmlspecialchars(str_replace('../', '', $item['image_path'])) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="img-fluid rounded shadow w-100 mb-3" style="max-height: 80vh; object-fit: contain;">
                                            <h4 class="text-white"><?= htmlspecialchars($item['title']) ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
