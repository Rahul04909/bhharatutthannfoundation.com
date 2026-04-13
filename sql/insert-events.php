<?php
// sql/insert-events.php

require_once '../database/db_config.php';

try {
    // Create the `events` table
    $createEventsTable = "
    CREATE TABLE IF NOT EXISTS `events` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `title` varchar(255) NOT NULL,
        `slug` varchar(255) NOT NULL,
        `description` text DEFAULT NULL,
        `event_date` date NOT NULL,
        `event_time` time DEFAULT NULL,
        `location` varchar(255) DEFAULT NULL,
        `cover_image` varchar(255) DEFAULT NULL,
        `video_url` varchar(255) DEFAULT NULL,
        `status` enum('active','hidden') DEFAULT 'active',
        `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";
    
    $pdo->exec($createEventsTable);
    echo "Checked/created `events` table successfully.<br>";

    // Create the `event_gallery` table
    $createGalleryTable = "
    CREATE TABLE IF NOT EXISTS `event_gallery` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `event_id` int(11) NOT NULL,
        `image_path` varchar(255) NOT NULL,
        `thumbnail_path` varchar(255) NOT NULL,
        `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (`id`),
        KEY `event_id` (`event_id`),
        CONSTRAINT `fk_event` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

    $pdo->exec($createGalleryTable);
    echo "Checked/created `event_gallery` table successfully.<br>";

    echo "<br><a href='../admin/events.php'>Go to Admin Events Management</a>";

} catch (\PDOException $e) {
    die("Database setup failed: " . $e->getMessage());
}
?>
