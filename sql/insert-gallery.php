<?php
// sql/insert-gallery.php

require_once '../database/db_config.php';

try {
    // Drop table if you need to reset
    // $pdo->exec("DROP TABLE IF EXISTS `gallery`");

    // Create the `gallery` table if it doesn't already exist
    $createTableQuery = "
    CREATE TABLE IF NOT EXISTS `gallery` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `title` varchar(255) NOT NULL,
        `category` varchar(50) DEFAULT 'General',
        `image_path` varchar(255) NOT NULL,
        `thumbnail_path` varchar(255) NOT NULL,
        `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";
    
    $pdo->exec($createTableQuery);
    echo "Checked/created `gallery` table successfully.<br>";

    // Optional: Add some dummy data just in case? Or leave it empty for admin to upload.
    echo "<br><a href='../admin/gallery.php'>Go to Admin Gallery Management</a>";

} catch (\PDOException $e) {
    die("Database setup failed: " . $e->getMessage());
}
?>
