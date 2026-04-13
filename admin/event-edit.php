<?php
// admin/event-edit.php
require_once 'header.php';
require_once '../database/db_config.php';
require_once '../vendor/autoload.php';

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!$id) {
    header("Location: events.php");
    exit();
}

$error = '';
$success = '';

// Fetch Event Details
$stmt = $pdo->prepare("SELECT * FROM events WHERE id = :id");
$stmt->execute(['id' => $id]);
$event = $stmt->fetch();

if (!$event) {
    header("Location: events.php");
    exit();
}

// Handle Update Basic Info
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update_info') {
    $title = trim($_POST['title']);
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $location = trim($_POST['location']);
    $video_url = trim($_POST['video_url']);
    
    if (empty($title) || empty($event_date)) {
        $error = "Title and Event Date are required.";
    } else {
        $coverImagePath = $event['cover_image'];
        
        // Handle Cover Image Upload
        if (!empty($_FILES['cover_image']['tmp_name'])) {
            $uploadDir = '../assets/uploads/events/';
            if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
            
            // Delete old cover
            if ($coverImagePath && file_exists('../' . $coverImagePath)) {
                unlink('../' . $coverImagePath);
            }

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
                $stmt = $pdo->prepare("UPDATE events SET title = :title, description = :description, event_date = :event_date, event_time = :event_time, location = :location, cover_image = :cover_image, video_url = :video_url WHERE id = :id");
                $stmt->execute([
                    'title' => $title,
                    'description' => $description,
                    'event_date' => $event_date,
                    'event_time' => $event_time,
                    'location' => $location,
                    'cover_image' => $coverImagePath,
                    'video_url' => $video_url,
                    'id' => $id
                ]);
                $success = "Event details updated successfully!";
                // Refresh data
                $stmt = $pdo->prepare("SELECT * FROM events WHERE id = :id");
                $stmt->execute(['id' => $id]);
                $event = $stmt->fetch();
            } catch (\PDOException $e) {
                $error = "Database error: " . $e->getMessage();
            }
        }
    }
}

// Handle Gallery Uploads
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'upload_gallery') {
    if (!empty($_FILES['gallery_images']['tmp_name'][0])) {
        $uploadDir = '../assets/uploads/events/gallery/';
        $thumbDir = '../assets/uploads/events/gallery/thumbnails/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
        if (!is_dir($thumbDir)) mkdir($thumbDir, 0777, true);

        $manager = ImageManager::gd();
        $files = $_FILES['gallery_images'];
        $uploadedCount = 0;

        for ($i = 0; $i < count($files['tmp_name']); $i++) {
            if ($files['error'][$i] === 0) {
                $fileName = time() . '_' . $i . '_' . preg_replace('/[^a-zA-Z0-9-_\.]/', '', basename($files['name'][$i]));
                $mainPath = $uploadDir . $fileName;
                $thumbPath = $thumbDir . 'thumb_' . $fileName;

                try {
                    // Save and Resize Main Image
                    $img = $manager->read($files['tmp_name'][$i]);
                    if ($img->width() > 1600) $img->scale(width: 1600);
                    $img->toJpeg(85)->save($mainPath);

                    // Create Thumbnail
                    $thumb = $manager->read($files['tmp_name'][$i]);
                    $thumb->cover(600, 400);
                    $thumb->toJpeg(75)->save($thumbPath);

                    // Insert to DB
                    $stmtGal = $pdo->prepare("INSERT INTO event_gallery (event_id, image_path, thumbnail_path) VALUES (:event_id, :img, :thumb)");
                    $stmtGal->execute([
                        'event_id' => $id,
                        'img' => str_replace('../', '', $mainPath),
                        'thumb' => str_replace('../', '', $thumbPath)
                    ]);
                    $uploadedCount++;
                } catch (\Exception $e) {
                    $error .= " Failed to process one image: " . $e->getMessage();
                }
            }
        }
        if ($uploadedCount > 0) $success = "$uploadedCount images uploaded to gallery!";
    }
}

// Handle Gallery Image Deletion
if (isset($_GET['delete_image'])) {
    $imgId = (int)$_GET['delete_image'];
    $stmt = $pdo->prepare("SELECT * FROM event_gallery WHERE id = :id AND event_id = :event_id");
    $stmt->execute(['id' => $imgId, 'event_id' => $id]);
    $imgItem = $stmt->fetch();
    
    if ($imgItem) {
        if (file_exists('../' . $imgItem['image_path'])) unlink('../' . $imgItem['image_path']);
        if (file_exists('../' . $imgItem['thumbnail_path'])) unlink('../' . $imgItem['thumbnail_path']);
        
        $pdo->prepare("DELETE FROM event_gallery WHERE id = :id")->execute(['id' => $imgId]);
        $success = "Image removed from gallery.";
    }
}

// Fetch Gallery
$gallery = $pdo->prepare("SELECT * FROM event_gallery WHERE event_id = :id ORDER BY id DESC");
$gallery->execute(['id' => $id]);
$galleryItems = $gallery->fetchAll();
?>

<div class="row">
    <div class="col-md-7">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Edit Event: <?= htmlspecialchars($event['title']) ?></h3>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="action" value="update_info">
                <div class="card-body">
                    <?php if ($error && !isset($_POST['action'])): ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif; ?>
                    <?php if ($success && $_POST['action'] == 'update_info'): ?>
                        <div class="alert alert-success"><?= $success ?></div>
                    <?php endif; ?>

                    <div class="form-group mb-3">
                        <label for="title">Event Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" required value="<?= htmlspecialchars($event['title']) ?>">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="event_date">Event Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="event_date" name="event_date" required value="<?= $event['event_date'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="event_time">Event Time</label>
                                <input type="time" class="form-control" id="event_time" name="event_time" value="<?= $event['event_time'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="<?= htmlspecialchars($event['location'] ?? '') ?>">
                    </div>

                    <div class="row align-items-center mb-3">
                        <div class="col-md-8">
                            <label for="cover_image">Update Cover Image</label>
                            <input type="file" class="form-control" id="cover_image" name="cover_image" accept="image/*">
                        </div>
                        <div class="col-md-4 text-center">
                            <?php if ($event['cover_image']): ?>
                                <img src="../<?= htmlspecialchars($event['cover_image']) ?>" class="img-thumbnail" style="max-height: 100px;">
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="video_url">YouTube/Vimeo Video URL</label>
                        <input type="url" class="form-control" id="video_url" name="video_url" value="<?= htmlspecialchars($event['video_url'] ?? '') ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label for="description">Event Description</label>
                        <textarea class="form-control" id="description" name="description" rows="10"><?= htmlspecialchars($event['description'] ?? '') ?></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Event Info</button>
                    <a href="events.php" class="btn btn-default float-right">Back to List</a>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-5">
        <!-- Gallery Management -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title">Manage Event Gallery</h3>
            </div>
            <div class="card-body">
                <?php if ($success && $_POST['action'] == 'upload_gallery'): ?>
                    <div class="alert alert-success"><?= $success ?></div>
                <?php endif; ?>
                
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="upload_gallery">
                    <div class="form-group mb-3">
                        <label>Upload Gallery Images (Multiple)</label>
                        <input type="file" class="form-control" name="gallery_images[]" multiple accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-info btn-block"><i class="fas fa-upload"></i> Upload to Gallery</button>
                    <hr>
                </form>

                <div class="row g-2">
                    <?php if (empty($galleryItems)): ?>
                        <div class="col-12 text-center text-muted py-3">No gallery images yet.</div>
                    <?php else: ?>
                        <?php foreach ($galleryItems as $gi): ?>
                            <div class="col-4 position-relative mb-2">
                                <img src="../<?= htmlspecialchars($gi['thumbnail_path']) ?>" class="img-fluid rounded border shadow-sm w-100" style="height: 80px; object-fit: cover;">
                                <a href="?id=<?= $id ?>&delete_image=<?= $gi['id'] ?>" class="btn btn-danger btn-xs position-absolute" style="top: 0; right: 8px;" onclick="return confirm('Remove this image?');">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Summernote CSS/JS -->
<link href="../vendor/summernote/summernote/dist/summernote-lite.css" rel="stylesheet">
<script src="../vendor/summernote/summernote/dist/summernote-lite.js"></script>

<script>
    $(document).ready(function() {
        $('#description').summernote({
            placeholder: 'Edit event description...',
            tabsize: 2,
            height: 350,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>

<?php require_once 'footer.php'; ?>
