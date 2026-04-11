<?php
// sql/insert-admin.php

require_once '../database/db_config.php';

try {
    // 1. Create the `admins` table if it doesn't already exist
    $createTableQuery = "
    CREATE TABLE IF NOT EXISTS `admins` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(100) NOT NULL,
        `username` varchar(50) NOT NULL,
        `email` varchar(100) NOT NULL,
        `mobile` varchar(20) NOT NULL,
        `profile_image` varchar(255) DEFAULT NULL,
        `password` varchar(255) NOT NULL,
        `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (`id`),
        UNIQUE KEY `username` (`username`),
        UNIQUE KEY `email` (`email`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";
    
    $pdo->exec($createTableQuery);
    echo "Checked/created `admins` table successfully.<br>";

    // 2. Default admin credentials
    $admin_name = 'Super Admin';
    $admin_username = 'admin';
    $admin_email = 'admin@example.com';
    $admin_mobile = '9876543210';
    $admin_profile_image = './src/images/user-avtar.png';
    $admin_password_plain = 'password@123';
    
    // Hash the password securely
    $admin_password_hashed = password_hash($admin_password_plain, PASSWORD_DEFAULT);

    // 3. Check if standard admin user already exists
    $stmt = $pdo->prepare("SELECT id FROM admins WHERE username = :username LIMIT 1");
    $stmt->execute(['username' => $admin_username]);
    
    if ($stmt->fetch()) {
        echo "Default admin user ('admin') already exists. No new row inserted.<br>";
    } else {
        // 4. Insert the default admin
        $insertQuery = "INSERT INTO admins (name, username, email, mobile, profile_image, password) 
                        VALUES (:name, :username, :email, :mobile, :profile_image, :password)";
        
        $insertStmt = $pdo->prepare($insertQuery);
        $insertStmt->execute([
            'name' => $admin_name,
            'username' => $admin_username,
            'email' => $admin_email,
            'mobile' => $admin_mobile,
            'profile_image' => $admin_profile_image,
            'password' => $admin_password_hashed
        ]);
        
        echo "Successfully inserted default admin!<br>";
        echo "<b>Username:</b> " . htmlspecialchars($admin_username) . "<br>";
        echo "<b>Password:</b> " . htmlspecialchars($admin_password_plain) . "<br>";
        echo "<br><a href='../admin/login.php'>Go to Admin Login</a>";
    }

} catch (\PDOException $e) {
    die("Database setup failed: " . $e->getMessage());
}
?>
