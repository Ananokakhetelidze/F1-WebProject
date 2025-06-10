<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: drivers.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if (!empty($username) && !empty($password)) {
        $users = file_get_contents('users.txt');
        $users_array = explode("\n", $users);
        
        foreach ($users_array as $user) {
            $parts = explode(':', $user);
            if ($parts[0] === $username && $parts[1] === $password) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $username;
                header("Location: drivers.php");
                exit();
            }
        }
        $error = "Invalid username or password!";
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
    <meta name="description" content="Your ultimate Formula 1 fan portal - Get the latest news, driver profiles, and race schedules">
    <title>F1 Fan Portal - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2 style="text-align: center; color: var(--secondary-color); margin-bottom: 30px;">Login to F1 Fan Portal</h2>
        <?php 
        if (isset($error)) echo "<p class='error-message'>$error</p>";
        if (isset($_SESSION['message'])) {
            echo "<p style='color: #4CAF50; text-align: center; margin-bottom: 15px;'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="registration.php">Register here</a></p>
        </div>
    </div>
</body>
</html> 