<?php
// admin/events.php
require_once 'header.php';
require_once '../database/db_config.php';

$message = '';
$error = '';

// Handle Delete
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    try {
        // Fetch cover image to delete file
        $stmt = $pdo->prepare("SELECT cover_image FROM events WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $event = $stmt->fetch();
        
        if ($event) {
            if ($event['cover_image'] && file_exists('../' . $event['cover_image'])) {
                unlink('../' . $event['cover_image']);
            }
            
            // Delete gallery images too? If we want full cleanup
            $stmtGal = $pdo->prepare("SELECT * FROM event_gallery WHERE event_id = :id");
            $stmtGal->execute(['id' => $id]);
            $galleryItems = $stmtGal->fetchAll();
            foreach ($galleryItems as $gi) {
                if (file_exists('../' . $gi['image_path'])) unlink('../' . $gi['image_path']);
                if (file_exists('../' . $gi['thumbnail_path'])) unlink('../' . $gi['thumbnail_path']);
            }

            $pdo->prepare("DELETE FROM events WHERE id = :id")->execute(['id' => $id]);
            $message = "Event and associated media deleted successfully.";
        }
    } catch (\PDOException $e) {
        $error = "Failed to delete event: " . $e->getMessage();
    }
}

// Fetch events
$events = [];
try {
    $events = $pdo->query("SELECT * FROM events ORDER BY event_date DESC")->fetchAll();
} catch (\PDOException $e) {
    $error = "Error fetching events: " . $e->getMessage();
}
?>

<div class="row">
    <div class="col-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Event Management</h3>
                <div class="card-tools">
                    <a href="event-add.php" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add New Event
                    </a>
                </div>
            </div>
            <div class="card-body">
                <?php if ($message): ?>
                    <div class="alert alert-success mt-2"><?= htmlspecialchars($message) ?></div>
                <?php endif; ?>
                <?php if ($error): ?>
                    <div class="alert alert-danger mt-2"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>

                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Cover</th>
                                <th>Event Details</th>
                                <th>Date & Time</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($events)): ?>
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-muted">No events found. Start by adding one!</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($events as $event): ?>
                                    <tr>
                                        <td>
                                            <?php if ($event['cover_image']): ?>
                                                <img src="../<?= htmlspecialchars($event['cover_image']) ?>" alt="cover" style="width: 80px; height: 50px; object-fit: cover; border-radius: 4px;">
                                            <?php else: ?>
                                                <div class="bg-light text-center" style="width: 80px; height: 50px; line-height: 50px; border-radius: 4px;">No Image</div>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <strong><?= htmlspecialchars($event['title']) ?></strong><br>
                                            <small class="text-muted"><?= substr(strip_tags($event['description'] ?? ''), 0, 50) ?>...</small>
                                        </td>
                                        <td>
                                            <i class="fas fa-calendar-day text-primary mr-1"></i> <?= date('d M, Y', strtotime($event['event_date'])) ?><br>
                                            <i class="fas fa-clock text-secondary mr-1"></i> <?= $event['event_time'] ? date('h:i A', strtotime($event['event_time'])) : 'N/A' ?>
                                        </td>
                                        <td><?= htmlspecialchars($event['location'] ?? 'N/A') ?></td>
                                        <td>
                                            <?php 
                                            $today = date('Y-m-d');
                                            if ($event['event_date'] < $today): ?>
                                                <span class="badge bg-secondary">Past Event</span>
                                            <?php else: ?>
                                                <span class="badge bg-success">Upcoming</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="event-edit.php?id=<?= $event['id'] ?>" class="btn btn-info btn-sm" title="Edit/Manage Gallery">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="?delete=<?= $event['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this event? This will also remove all gallery images.');" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
