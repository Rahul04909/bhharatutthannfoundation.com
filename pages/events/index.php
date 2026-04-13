<?php
// pages/events/index.php
require_once '../../database/db_config.php';

$today = date('Y-m-d');

// Fetch upcoming events
$upcomingEvents = [];
try {
    $stmt = $pdo->prepare("SELECT * FROM events WHERE event_date >= :today AND status = 'active' ORDER BY event_date ASC");
    $stmt->execute(['today' => $today]);
    $upcomingEvents = $stmt->fetchAll();
} catch (\PDOException $e) {}

// Fetch past events
$pastEvents = [];
try {
    $stmt = $pdo->prepare("SELECT * FROM events WHERE event_date < :today AND status = 'active' ORDER BY event_date DESC LIMIT 12");
    $stmt->execute(['today' => $today]);
    $pastEvents = $stmt->fetchAll();
} catch (\PDOException $e) {}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events | Bhharat Utthann Foundation</title>
    <base href="../../">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #051b60;
            --accent-orange: #f96302;
            --accent-yellow: #ffb700;
        }
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; color: #333; }
        .page-header { background-color: var(--primary-blue); color: #ffffff; padding: 100px 0 80px; text-align: center; position: relative; overflow: hidden; }
        .page-header::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at top right, rgba(255,183,0,0.1), transparent); }
        .page-header h1 { font-family: 'Poppins', sans-serif; font-weight: 700; color: var(--accent-yellow); margin-bottom: 20px; text-transform: uppercase; letter-spacing: 2px; font-size: 48px; }
        
        .section-padding { padding: 80px 0; }
        .section-title { font-family: 'Poppins', sans-serif; color: var(--primary-blue); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 32px; margin-bottom: 40px; position: relative; padding-bottom: 15px; }
        .section-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 80px; height: 4px; background-color: var(--accent-orange); border-radius: 2px; }
        .text-center .section-title::after { left: 50%; transform: translateX(-50%); }

        .event-card { background: #fff; border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); transition: all 0.4s ease; height: 100%; display: flex; flex-direction: column; }
        .event-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.12); }
        .event-img { position: relative; height: 220px; overflow: hidden; }
        .event-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1); }
        .event-card:hover .event-img img { transform: scale(1.1); }
        
        .event-date-badge { position: absolute; top: 20px; left: 20px; background: var(--accent-orange); color: #fff; padding: 8px 15px; border-radius: 12px; font-weight: 700; text-align: center; line-height: 1.2; box-shadow: 0 5px 15px rgba(249, 99, 2, 0.3); z-index: 10; }
        .event-date-badge span { display: block; font-size: 20px; }
        .event-date-badge small { font-size: 12px; text-transform: uppercase; letter-spacing: 1px; }

        .event-body { padding: 25px; flex-grow: 1; display: flex; flex-direction: column; }
        .event-title { font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; color: var(--primary-blue); margin-bottom: 15px; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .event-meta { font-size: 14px; color: #666; margin-bottom: 15px; }
        .event-meta i { color: var(--accent-orange); width: 20px; }
        .event-desc { font-size: 15px; line-height: 1.6; color: #555; margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
        
        .btn-event { background: var(--primary-blue); color: #fff; border-radius: 50px; padding: 10px 25px; font-weight: 600; border: 2px solid var(--primary-blue); transition: all 0.3s; }
        .btn-event:hover { background: transparent; color: var(--primary-blue); }

        .past-event-card { opacity: 0.9; }
        .past-event-card .event-date-badge { background: #6c757d; box-shadow: none; }
        
        .nav-tabs-custom { border: none; justify-content: center; margin-bottom: 50px; }
        .nav-tabs-custom .nav-link { border: none; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 18px; color: #888; padding: 12px 30px; margin: 0 10px; border-radius: 50px; transition: all 0.3s; background: #eee; }
        .nav-tabs-custom .nav-link.active { background: var(--accent-orange); color: #fff; box-shadow: 0 5px 15px rgba(249, 99, 2, 0.2); }

        @media (max-width: 768px) {
            .page-header h1 { font-size: 36px; }
            .nav-tabs-custom .nav-link { padding: 10px 20px; font-size: 16px; margin: 5px; }
        }
    </style>
</head>
<body>
    <?php include_once '../../includes/header.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1>Our Events</h1>
            <p class="lead mx-auto" style="max-width: 700px; opacity: 0.9;">Join us in our journey of transformation. Explore our upcoming initiatives and relive the moments from our past successful events.</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <!-- Tabs for Upcoming/Past if needed, or structured sections -->
            <ul class="nav nav-pills nav-tabs-custom" id="eventTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="upcoming-tab" data-bs-toggle="pill" data-bs-target="#upcoming" type="button" role="tab">Upcoming Events</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="past-tab" data-bs-toggle="pill" data-bs-target="#past" type="button" role="tab">Past Events</button>
                </li>
            </ul>

            <div class="tab-content" id="eventTabsContent">
                <!-- Upcoming Events -->
                <div class="tab-pane fade show active" id="upcoming" role="tabpanel">
                    <?php if (empty($upcomingEvents)): ?>
                        <div class="text-center py-5">
                            <i class="fas fa-calendar-alt fa-3x text-muted mb-3"></i>
                            <h4 class="text-muted">No upcoming events scheduled right now.</h4>
                            <p>Stay tuned or subscribe to our newsletter for updates!</p>
                        </div>
                    <?php else: ?>
                        <div class="row g-4">
                            <?php foreach ($upcomingEvents as $event): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="event-card">
                                        <div class="event-img">
                                            <div class="event-date-badge">
                                                <span><?= date('d', strtotime($event['event_date'])) ?></span>
                                                <small><?= date('M', strtotime($event['event_date'])) ?></small>
                                            </div>
                                            <img src="<?= $event['cover_image'] ? htmlspecialchars($event['cover_image']) : 'assets/images/default-event.jpg' ?>" alt="<?= htmlspecialchars($event['title']) ?>">
                                        </div>
                                        <div class="event-body">
                                            <h3 class="event-title"><?= htmlspecialchars($event['title']) ?></h3>
                                            <div class="event-meta">
                                                <p class="mb-2"><i class="fas fa-clock"></i> <?= $event['event_time'] ? date('h:i A', strtotime($event['event_time'])) : 'TBA' ?></p>
                                                <p class="mb-0"><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($event['location'] ?? 'Online / TBA') ?></p>
                                            </div>
                                            <p class="event-desc"><?= strip_tags($event['description'] ?? '') ?></p>
                                            <div class="mt-auto">
                                                <a href="pages/events/details.php?slug=<?= $event['slug'] ?>" class="btn btn-event w-100">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Past Events -->
                <div class="tab-pane fade" id="past" role="tabpanel">
                    <?php if (empty($pastEvents)): ?>
                        <div class="text-center py-5">
                            <h4 class="text-muted">Our journey of impact continues...</h4>
                        </div>
                    <?php else: ?>
                        <div class="row g-4">
                            <?php foreach ($pastEvents as $event): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="event-card past-event-card">
                                        <div class="event-img">
                                            <div class="event-date-badge">
                                                <span><?= date('d', strtotime($event['event_date'])) ?></span>
                                                <small><?= date('M', strtotime($event['event_date'])) ?></small>
                                            </div>
                                            <img src="<?= $event['cover_image'] ? htmlspecialchars($event['cover_image']) : 'assets/images/default-event.jpg' ?>" alt="<?= htmlspecialchars($event['title']) ?>">
                                        </div>
                                        <div class="event-body">
                                            <h3 class="event-title"><?= htmlspecialchars($event['title']) ?></h3>
                                            <div class="event-meta">
                                                <p class="mb-2"><i class="fas fa-calendar-check"></i> Completed on <?= date('d M, Y', strtotime($event['event_date'])) ?></p>
                                                <p class="mb-0"><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($event['location'] ?? 'N/A') ?></p>
                                            </div>
                                            <p class="event-desc"><?= strip_tags($event['description'] ?? '') ?></p>
                                            <div class="mt-auto">
                                                <a href="pages/events/details.php?slug=<?= $event['slug'] ?>" class="btn btn-outline-secondary w-100" style="border-radius: 50px; font-weight: 600;">Relive Moments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php include_once '../../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
