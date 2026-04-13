<?php
// admin/event-add.php
require_once 'header.php';
require_once '../database/db_config.php';
require_once '../vendor/autoload.php';

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $location = trim($_POST['location']);
    $video_url = trim($_POST['video_url']);
    
    // Generate slug
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));

    if (empty($title) || empty($event_date)) {
        $error = "Title and Event Date are required.";
    } else {
        $coverImagePath = null;
        
        // Handle Cover Image Upload
        if (!empty($_FILES['cover_image']['tmp_name'])) {
            $uploadDir = '../assets/uploads/events/';
            if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
            
            $fileName = time() . '_cover_' . preg_replace('/[^a-zA-Z0-9-_\.]/', '', basename($_FILES['cover_image']['name']));
            $targetPath = $uploadDir . $fileName;
            
            try {
                $manager = ImageManager::gd();
                $image = $manager->read($_FILES['cover_image']['tmp_name']);
                if ($image->width() > 1200) {
                    $image->scale(width: 1200);
                }
                $image->toJpeg(80)->save($targetPath);
                $coverImagePath = 'assets/uploads/events/' . $fileName;
            } catch (\Exception $e) {
                $error = "Image processing failed: " . $e->getMessage();
            }
        }

        if (!$error) {
            try {
                $stmt = $pdo->prepare("INSERT INTO events (title, slug, description, event_date, event_time, location, cover_image, video_url) VALUES (:title, :slug, :description, :event_date, :event_time, :location, :cover_image, :video_url)");
                $stmt->execute([
                    'title' => $title,
                    'slug' => $slug,
                    'description' => $description,
                    'event_date' => $event_date,
                    'event_time' => $event_time,
                    'location' => $location,
                    'cover_image' => $coverImagePath,
                    'video_url' => $video_url
                ]);
                
                $eventId = $pdo->lastInsertId();
                $success = "Event created successfully! Redirecting to manage gallery...";
                echo "<script>
                    setTimeout(function() {
                        window.location.href = 'event-edit.php?id=$eventId';
                    }, 2000);
                </script>";
            } catch (\PDOException $e) {
                $error = "Database error: " . $e->getMessage();
            }
        }
    }
}
?>

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add New Event</h3>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif; ?>
                    <?php if ($success): ?>
                        <div class="alert alert-success"><?= $success ?></div>
                    <?php endif; ?>

                    <div class="form-group mb-3">
                        <label for="title">Event Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" required placeholder="e.g. Annual Charity Gala">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="event_date">Event Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="event_date" name="event_date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="event_time">Event Time</label>
                                <input type="time" class="form-control" id="event_time" name="event_time">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="e.g. Community Center, City Hall">
                    </div>

                    <div class="form-group mb-3">
                        <label for="cover_image">Cover Image</label>
                        <input type="file" class="form-control" id="cover_image" name="cover_image" accept="image/*">
                        <small class="text-muted">Recommend size: 1200x600px. Optimized automatically.</small>
                    </div>

                    <div class="form-group mb-3">
                        <label for="video_url">YouTube/Vimeo Video URL (Optional)</label>
                        <input type="url" class="form-control" id="video_url" name="video_url" placeholder="https://www.youtube.com/watch?v=...">
                    </div>

                    <div class="form-group mb-3">
                        <label for="description">Event Description</label>
                        <textarea class="form-control" id="description" name="description" rows="6" placeholder="Tell more about the event..."></textarea>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="events.php" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-2">Create Event & Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
