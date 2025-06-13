<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Your ultimate Formula 1 fan portal - Get the latest news, driver profiles, and race schedules">
  <title>F1 Fan Portal - Home</title>
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
    <div class="hero">
      <h2>Experience the Thrill of Formula 1</h2>
      <p>Your ultimate destination for Formula 1 news, driver profiles, and race schedules. Stay updated with the latest from the world's most prestigious motorsport championship.</p>
      
      <div class="teams-grid">
        <div class="team-card">
          <img src="images/Mercedes.png" alt="Mercedes F1 Team" />
          <h3>Mercedes-AMG</h3>
          <p>8-time Constructors' Champions</p>
        </div>
        <div class="team-card">
          <img src="images/red_bull_racing.png" alt="Red Bull Racing" />
          <h3>Red Bull Racing</h3>
          <p>Current World Champions</p>
        </div>
        <div class="team-card">
          <img src="images/scuderia_Ferrari.png" alt="Scuderia Ferrari" />
          <h3>Scuderia Ferrari</h3>
          <p>The Prancing Horse</p>
        </div>
        <div class="team-card">
          <img src="images\ml.jpg" alt="McLaren F1 Team" />
          <h3>McLaren</h3>
          <p>British Racing Excellence</p>
        </div>
        <div class="team-card">
          <img src="images\martin.png" alt="Aston Martin F1 Team" />
          <h3>Aston Martin</h3>
          <p>Racing in Green</p>
        </div>
        <div class="team-card">
          <img src="images/Alpine_logo.png" alt="Alpine F1 Team" />
          <h3>Alpine</h3>
          <p>French Racing Heritage</p>
        </div>
      </div>
    </div>

    <div class="latest-news">
      <h2 class="page-title">Latest News</h2>
      <div class="news-grid">
        <div class="news-card">
          <img src="images\Lando-Norris-01.jpg" alt="F1 News" />
          <div class="news-content">
            <h3>Norris Dominates Australian Season Opener</h3>
            <p class="news-date">May 10, 2025</p>
            <p>Lando Norris started his title fight in style with a commanding victory at the Australian Grand Prix...</p>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="news-card">
          <img src="images\lf.jpg" alt="F1 News" />
          <div class="news-content">
            <h3>Hamilton Announces New Scuderia Ferrari Contract</h3>
            <p class="news-date">March 1, 2024</p>
            <p>Seven-time world champion Lewis Hamilton has signed a new multi-year contract with Ferrari...</p>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="news-card">
          <img src="images\sf.jpg" alt="F1 News" />
          <div class="news-content">
            <h3>Ferrari Unveils New Car for 2026 Season</h3>
            <p class="news-date">February 28, 2024</p>
            <p>Scuderia Ferrari has revealed their challenger for the 2026 Formula 1 season, featuring a bold new design...</p>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
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