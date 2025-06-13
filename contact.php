<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['message_file']) && $_FILES['message_file']['error'] == 0) {
        $allowed = array('txt');
        $filename = $_FILES['message_file']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        
        if (in_array(strtolower($filetype), $allowed)) {
            $upload_dir = 'messages/';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            
            $new_filename = date('Y-m-d_H-i-s') . '_' . $_SESSION['username'] . '.txt';
            $upload_path = $upload_dir . $new_filename;
            
            if (move_uploaded_file($_FILES['message_file']['tmp_name'], $upload_path)) {
                $success = "Message file uploaded successfully!";
            } else {
                $error = "Error uploading file!";
            }
        } else {
            $error = "Only .txt files are allowed!";
        }
    } else {
        $error = "Please select a file to upload!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - F1 Fan Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>F1 Fan Portal</h1>
        <nav>
            <ul>
                <li><a href="home.php" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="drivers.php" class="nav-link"><i class="fas fa-user"></i> Drivers</a></li>
                <li><a href="race-schedule.php" class="nav-link"><i class="fas fa-calendar"></i> Race Schedule</a></li>
                <li><a href="contact.php" class="nav-link active"><i class="fas fa-envelope"></i> Contact</a></li>
                <li><a href="drivers.php?logout=1"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 class="page-title">Contact Us</h2>
        
        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@f1fanportal.com</p>
                </div>
                <div class="contact-card">
                    <i class="fas fa-phone"></i>
                    <h3>Call Us</h3>
                    <p>+ (995) 123-4567</p>
                </div>
                <div class="contact-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Visit Us</h3>
                    <p>123 F1 Street, Racing City</p>
                </div>
            </div>

            <form class="contact-form" method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" required>
                        <option value="">Select a subject</option>
                        <option value="general">General Inquiry</option>
                        <option value="support">Technical Support</option>
                        <option value="feedback">Feedback</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message_file">Message (Text File)</label>
                    <div class="file-upload">
                        <span class="file-upload-button">Choose File</span>
                        <span class="file-upload-text">No file chosen</span>
                        <input type="file" id="message_file" name="message_file" accept=".txt" required>
                    </div>
                    <small style="color: var(--secondary-color); margin-top: 5px; display: block;">Only .txt files are allowed</small>
                </div>

                <button type="submit" class="submit-button">Send Message</button>
            </form>

            <?php 
            if (isset($error)) echo "<div class='error-message'>$error</div>";
            if (isset($success)) echo "<div class='success-message'>$success</div>";
            ?>
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
    <script src="js/file_input.js"></script>
</body>
</html>
