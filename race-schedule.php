<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Race Schedule - F1 Fan Portal</title>
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
                <li><a href="contact.php" class="nav-link"><i class="fas fa-envelope"></i> Contact</a></li>
                <li><a href="drivers.php?logout=1"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 class="page-title">2025 Race Schedule</h2>
        
        <div class="filter-container">
            <button class="filter-button active" data-filter="all">All Races</button>
            <button class="filter-button" data-filter="upcoming">Upcoming</button>
            <button class="filter-button" data-filter="completed">Completed</button>
        </div>

        <div class="schedule-container">
            <table class="race-schedule">
                <thead>
                    <tr>
                        <th>Round</th>
                        <th>Grand Prix</th>
                        <th>Circuit</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="race-name">Bahrain Grand Prix</td>
                        <td class="race-circuit">Bahrain International Circuit</td>
                        <td class="race-date">March 2, 2024</td>
                        <td><span class="race-status status-completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="race-name">Saudi Arabian Grand Prix</td>
                        <td class="race-circuit">Jeddah Corniche Circuit</td>
                        <td class="race-date">March 9, 2024</td>
                        <td><span class="race-status status-completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="race-name">Australian Grand Prix</td>
                        <td class="race-circuit">Albert Park Circuit</td>
                        <td class="race-date">March 24, 2024</td>
                        <td><span class="race-status status-upcoming">Upcoming</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="race-name">Japanese Grand Prix</td>
                        <td class="race-circuit">Suzuka Circuit</td>
                        <td class="race-date">April 7, 2024</td>
                        <td><span class="race-status status-upcoming">Upcoming</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td class="race-name">Chinese Grand Prix</td>
                        <td class="race-circuit">Shanghai International Circuit</td>
                        <td class="race-date">April 21, 2024</td>
                        <td><span class="race-status status-upcoming">Upcoming</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <div class="social-links">
            <a href="#" title="Follow us on Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="Like us on Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" title="Follow us on Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" title="Subscribe on YouTube"><i class="fab fa-youtube"></i></a>
        </div>
        <p>&copy; 2024 F1 Fan Portal. All rights reserved.</p>
        <p>Follow us on social media for the latest Formula 1 updates!</p>
    </footer>

    <script src="js/nav.js"></script>
    <script src="js/filter.js"></script>
</body>
</html> 