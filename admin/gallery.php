<?php
// admin/gallery.php
require_once 'header.php'; // Includes session_start() and authentication
require_once '../database/db_config.php';
require_once '../vendor/autoload.php';

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

$uploadDir = '../assets/uploads/gallery/';
$thumbDir = '../assets/uploads/gallery/thumbnails/';

// Ensure directories exist
if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
if (!is_dir($thumbDir)) mkdir($thumbDir, 0777, true);

$message = '';
$error = '';

// Handle Delete
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $stmt = $pdo->prepare("SELECT * FROM gallery WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $item = $stmt->fetch();
    
    if ($item) {
        if (file_exists($item['image_path'])) unlink($item['image_path']);
        if (file_exists($item['thumbnail_path'])) unlink($item['thumbnail_path']);
        
        $pdo->prepare("DELETE FROM gallery WHERE id = :id")->execute(['id' => $id]);
        $message = "Image deleted successfully.";
    }
}

// Handle Upload Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'upload') {
$title = trim($_POST['title']);
    
    if (empty($title) || empty($_FILES['image']['tmp_name'])) {
        $error = "Title and Image are required.";
    } else {
        $fileTmp = $_FILES['image']['tmp_name'];
        $fileName = time() . '_' . preg_replace('/[^a-zA-Z0-9-_\.]/', '', basename($_FILES['image']['name']));
        
        $mainImagePath = $uploadDir . $fileName;
        $thumbImagePath = $thumbDir . 'thumb_' . $fileName;

        try {
            $manager = ImageManager::gd();
            $image = $manager->read($fileTmp);
            
            // Create a slightly optimized full image (e.g., max 1920px wide)
            if ($image->width() > 1920) {
                $image->scale(width: 1920);
            }
            $image->toJpeg(85)->save($mainImagePath);

            // Create a thumbnail (cover 600x400)
            $thumb = $manager->read($fileTmp);
            $thumb->cover(600, 400, 'center');
            $thumb->toJpeg(80)->save($thumbImagePath);

            // Insert into Database
            $stmt = $pdo->prepare("INSERT INTO gallery (title, image_path, thumbnail_path) VALUES (:title, :img, :thumb)");
            $stmt->execute([
                'title' => $title,
                'img' => $mainImagePath,
                'thumb' => $thumbImagePath
            ]);

            $message = "Image uploaded and processed successfully!";
        } catch (\Exception $e) {
            $error = "Failed to process image: " . $e->getMessage();
        }
    }
}

// Fetch all gallery items
$items = $pdo->query("SELECT * FROM gallery ORDER BY id DESC")->fetchAll();
?>

<!-- Add SweetAlert if needed or use Bootstrap alert -->
<div class="row">
    <div class="col-12">
        <?php if ($message): ?>
            <div class="alert alert-success"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
    </div>
</div>

<div class="row">
    <!-- Upload Form -->
    <div class="col-md-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add New Image</h3>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="action" value="upload">
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="title">Image Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" required placeholder="Enter title">
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Choose Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                        <small class="text-muted">Image will be automatically resized and optimized.</small>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Upload</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Gallery Grid -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Manage Gallery</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($items) === 0): ?>
                                <tr>
                                    <td colspan="5" class="text-center">No images found in gallery.</td>
                                </tr>
                            <?php endif; ?>
                            <?php foreach ($items as $item): ?>
                                <tr>
                                    <td>
                                        <img src="<?= htmlspecialchars($item['thumbnail_path']) ?>" alt="thumbnail" style="width: 100px; height: auto; border-radius: 4px;">
                                    </td>
                                    <td><?= htmlspecialchars($item['title']) ?></td>
                                    <td><?= date('d M, Y', strtotime($item['created_at'])) ?></td>
                                    <td>
                                        <!-- Note: using native alert fallback here, or standard confirm -->
                                        <a href="?delete=<?= $item['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this image?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
