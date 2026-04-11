<?php
require 'database/db_config.php';
try {
    $pdo->exec('ALTER TABLE gallery DROP COLUMN category;');
    echo "Column dropped successfully.";
} catch (Exception $e) {
    if (strpos($e->getMessage(), 'check that column/key exists') !== false) {
        echo "Column already dropped or table doesn't exist.";
    } else {
        echo "Error: " . $e->getMessage();
    }
}
?>