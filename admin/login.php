<?php
session_start();
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: index.php");
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../database/db_config.php';
    
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        $error = 'Please enter both username and password.';
    } else {
        try {
            $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = :username LIMIT 1");
            $stmt->execute(['username' => $username]);
            $admin = $stmt->fetch();

            if ($admin && password_verify($password, $admin['password'])) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_name'] = $admin['name'];
                $_SESSION['admin_profile_image'] = $admin['profile_image'];
                
                header("Location: index.php");
                exit();
            } else {
                $error = 'Invalid username or password.';
            }
        } catch (\PDOException $e) {
            $error = 'Database error: Ensure you have run the setup script SQL.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Dashboard</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #28a745;
            --accent-yellow: #ffc107;
            --bg-color: #f4f6f9;
        }

        body {
            background-color: var(--bg-color);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            background-image: linear-gradient(135deg, rgba(40, 167, 69, 0.1) 0%, rgba(255, 193, 7, 0.1) 100%);
        }

        .login-box {
            width: 420px;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .login-box:hover {
            transform: translateY(-5px);
        }

        .login-logo {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-logo img {
            max-width: 150px;
            height: auto;
            margin-bottom: 1rem;
        }

        .login-logo h2 {
            font-weight: 700;
            color: #2c3e50;
            font-size: 1.5rem;
            margin: 0;
        }

        .form-floating:focus-within label {
            color: var(--primary-green);
        }

        .form-control:focus {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 0.25rem rgba(40, 167, 69, 0.25);
        }

        .btn-login {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
            color: #fff;
            padding: 0.8rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background-color: #218838;
            border-color: #1e7e34;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
        }

        .input-group-text {
            background-color: transparent;
            border-right: none;
            color: #8c8f94;
        }

        .form-control.with-icon {
            border-left: none;
        }
        
        .input-group:focus-within .input-group-text {
            border-color: var(--primary-green);
            color: var(--primary-green);
        }

        .error-alert {
            font-size: 0.9rem;
            border-radius: 8px;
            padding: 0.8rem 1rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <div class="login-logo">
            <img src="../assets/logo.png" alt="Logo">
            <h2>Admin Login</h2>
        </div>
        
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger error-alert" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i><?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <div class="form-floating flex-grow-1">
                    <input type="text" class="form-control with-icon" id="username" name="username" placeholder="Username" required>
                    <label for="username">Username</label>
                </div>
            </div>
            
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <div class="form-floating flex-grow-1">
                    <input type="password" class="form-control with-icon" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-login">
                    Sign In <i class="fas fa-sign-in-alt ms-2"></i>
                </button>
            </div>
        </form>
        <div class="text-center mt-4" style="font-size: 0.85rem; color: #8c8f94;">
            &copy; <?= date('Y') ?> All rights reserved.
        </div>
    </div>

</body>
</html>
