<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if (!empty($username) && !empty($password)) {
        $users = file_get_contents('users.txt');
        $users_array = explode("\n", $users);
        
        // Check if username already exists
        $exists = false;
        foreach ($users_array as $user) {
            $parts = explode(':', $user);
            if ($parts[0] === $username) {
                $exists = true;
                break;
            }
        }
        
        if (!$exists) {
            $new_user = $username . ':' . $password . "\n";
            file_put_contents('users.txt', $new_user, FILE_APPEND);
            $_SESSION['message'] = "Registration successful! Please login.";
            header("Location: index.php");
            exit();
        } else {
            $error = "Username already exists!";
        }
    } else {
        $error = "Please fill in all fields!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - F1 Fan Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>F1 Fan Portal</h1>
        <nav>
            <ul>
                <li><a href="home.php" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="registration.php" class="nav-link active"><i class="fas fa-user-plus"></i> Registration</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 class="page-title">Join the F1 Fan Community</h2>
        
        <div class="registration-container">
            <?php if (isset($error)) echo "<p class='error-message'>$error</p>"; ?>
            
            <form class="registration-form" method="POST" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="submit-button">Create Account</button>
            </form>

            <div class="login-link">
                <p>Already have an account? <a href="index.php">Login here</a></p>
            </div>
        </div>
    </main>

    <footer>
        <div class="social-links">
            <a href="#" title="Follow us on Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="Like us on Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" title="Follow us on Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" title="Subscribe on YouTube"><i class="fab fa-youtube"></i></a>
        </div>
        <p>&copy; 2025 F1 Fan Portal. All rights reserved.</p>
        <p>Follow us on social media for the latest Formula 1 updates!</p>
    </footer>

    <script src="js/nav.js"></script>
</body>
</html> 