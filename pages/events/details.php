<?php
// pages/events/details.php
require_once '../../database/db_config.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

if (empty($slug)) {
    header("Location: index.php");
    exit();
}

// Fetch event details
$event = null;
try {
    $stmt = $pdo->prepare("SELECT * FROM events WHERE slug = :slug AND status = 'active'");
    $stmt->execute(['slug' => $slug]);
    $event = $stmt->fetch();
} catch (\PDOException $e) {}

if (!$event) {
    header("Location: index.php");
    exit();
}

// Fetch gallery items
$galleryItems = [];
try {
    $stmtGal = $pdo->prepare("SELECT * FROM event_gallery WHERE event_id = :event_id ORDER BY id DESC");
    $stmtGal->execute(['event_id' => $event['id']]);
    $galleryItems = $stmtGal->fetchAll();
} catch (\PDOException $e) {}

// Check if upcoming or past
$isPast = strtotime($event['event_date']) < strtotime(date('Y-m-d'));

// Helper for video embedding
function getEmbedUrl($url) {
    if (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false) {
        $id = '';
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
            $id = $match[1];
        }
        return "https://www.youtube.com/embed/" . $id;
    } elseif (strpos($url, 'vimeo.com') !== false) {
        if (preg_match('/vimeo.com\/(\d+)/', $url, $match)) {
            return "https://player.vimeo.com/video/" . $match[1];
        }
    }
    return $url;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($event['title']) ?> | Bhharat Utthann Foundation</title>
    <base href="../../">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <style>
        :root {
            --primary-blue: #051b60;
            --accent-orange: #f96302;
            --accent-yellow: #ffb700;
        }
        body { font-family: 'Inter', sans-serif; background-color: #ffffff; color: #333; }
        
        .event-hero { position: relative; height: 500px; display: flex; align-items: center; background-color: #000; color: #fff; overflow: hidden; }
        .hero-bg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0.5; filter: blur(3px); transform: scale(1.1); }
        .hero-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(0deg, var(--primary-blue), transparent); }
        .hero-content { position: relative; z-index: 10; width: 100%; }

        .hero-badge { display: inline-block; padding: 6px 15px; border-radius: 50px; background: var(--accent-orange); font-size: 14px; font-weight: 700; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px; }
        .hero-badge.past { background: #6c757d; }
        .hero-title { font-family: 'Poppins', sans-serif; font-size: 48px; font-weight: 700; color: var(--accent-yellow); line-height: 1.2; margin-bottom: 25px; }
        .hero-meta { display: flex; gap: 30px; flex-wrap: wrap; }
        .hero-meta-item { display: flex; align-items: center; gap: 10px; font-size: 18px; }
        .hero-meta-item i { color: var(--accent-yellow); font-size: 24px; }

        .section-padding { padding: 80px 0; }
        .section-title { font-family: 'Poppins', sans-serif; color: var(--primary-blue); font-weight: 700; position: relative; padding-bottom: 15px; margin-bottom: 30px; }
        .section-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: var(--accent-orange); }

        .event-details-content { font-size: 17px; line-height: 1.8; color: #444; }
        .event-details-content p { margin-bottom: 20px; }

        .sidebar-card { background: #f8f9fa; border-radius: 20px; padding: 30px; margin-bottom: 30px; border-left: 5px solid var(--accent-orange); }
        .sidebar-card h5 { color: var(--primary-blue); font-weight: 700; margin-bottom: 20px; }

        .gallery-item { position: relative; border-radius: 12px; overflow: hidden; height: 200px; cursor: pointer; }
        .gallery-item img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
        .gallery-item:hover img { transform: scale(1.1); }
        .gallery-item::after { content: '\f00e'; font-family: 'Font Awesome 6 Free'; font-weight: 900; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0); color: #fff; font-size: 30px; transition: all 0.3s; opacity: 0; }
        .gallery-item:hover::after { transform: translate(-50%, -50%) scale(1); opacity: 1; }
        .gallery-item::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); opacity: 0; transition: opacity 0.3s; }
        .gallery-item:hover::before { opacity: 1; }

        .video-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; }

        @media (max-width: 768px) {
            .hero-title { font-size: 32px; }
            .event-hero { height: 400px; }
            .hero-meta { gap: 15px; }
            .hero-meta-item { font-size: 16px; }
        }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>

    <section class="event-hero">
        <img src="<?= $event['cover_image'] ? htmlspecialchars($event['cover_image']) : 'assets/images/default-event.jpg' ?>" class="hero-bg" alt="bg">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-10">
                    <span class="hero-badge <?= $isPast ? 'past' : '' ?>"><?= $isPast ? 'Past Event' : 'Upcoming Event' ?></span>
                    <h1 class="hero-title"><?= htmlspecialchars($event['title']) ?></h1>
                    <div class="hero-meta">
                        <div class="hero-meta-item">
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <small class="d-block text-uppercase opacity-75" style="font-size: 12px;">Date</small>
                                <strong><?= date('d M, Y', strtotime($event['event_date'])) ?></strong>
                            </div>
                        </div>
                        <div class="hero-meta-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <small class="d-block text-uppercase opacity-75" style="font-size: 12px;">Time</small>
                                <strong><?= $event['event_time'] ? date('h:i A', strtotime($event['event_time'])) : 'TBA' ?></strong>
                            </div>
                        </div>
                        <div class="hero-meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <small class="d-block text-uppercase opacity-75" style="font-size: 12px;">Location</small>
                                <strong><?= htmlspecialchars($event['location'] ?? 'Online / TBA') ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <h2 class="section-title">Event Overview</h2>
                    <div class="event-details-content mb-5">
                        <?= nl2br($event['description'] ?? 'No description available.') ?>
                    </div>

                    <?php if ($event['video_url']): ?>
                        <h2 class="section-title mt-5">Event Highlights (Video)</h2>
                        <div class="video-container mb-5">
                            <iframe src="<?= getEmbedUrl($event['video_url']) ?>" allowfullscreen></iframe>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($galleryItems)): ?>
                        <h2 class="section-title mt-5">Event Gallery</h2>
                        <div class="row g-3">
                            <?php foreach ($galleryItems as $gi): ?>
                                <div class="col-md-4 col-sm-6">
                                    <a href="<?= htmlspecialchars($gi['image_path']) ?>" class="glightbox" data-gallery="event-gallery">
                                        <div class="gallery-item">
                                            <img src="<?= htmlspecialchars($gi['thumbnail_path']) ?>" alt="gallery image">
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 100px;">
                        <div class="sidebar-card">
                            <h5>Contact for Details</h5>
                            <p class="mb-3">For any queries regarding this event, please reach out to us:</p>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-phone text-orange me-2"></i> +91 1800-XXX-XXXX</li>
                                <li class="mb-2"><i class="fas fa-envelope text-orange me-2"></i> info@bhharatutthan.org</li>
                                <li><i class="fas fa-globe text-orange me-2"></i> www.bhharatutthan.com</li>
                            </ul>
                        </div>

                        <div class="sidebar-card" style="border-left-color: var(--primary-blue);">
                            <h5>Share this Event</h5>
                            <div class="d-flex gap-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>" target="_blank" class="btn btn-outline-primary rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?url=<?= urlencode("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>" target="_blank" class="btn btn-outline-info rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-twitter"></i></a>
                                <a href="https://api.whatsapp.com/send?text=<?= urlencode($event['title'] . " - https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>" target="_blank" class="btn btn-outline-success rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>

                        <a href="pages/events/index.php" class="btn btn-event w-100 py-3 shadow-sm">
                            <i class="fas fa-arrow-left me-2"></i> Back to All Events
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once '../../includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true
        });
    </script>
</body>
</html>
