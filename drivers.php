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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Drivers - F1 Fan Portal</title>
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
        <h2 class="page-title">Meet the Drivers</h2>
        <div class="driver-cards">
            <div class="driver-card">
                <img src="images\verstappen.avif" alt="Max Verstappen" />
                <h3>Max Verstappen</h3>
                <p>Team: Red Bull Racing</p>
                <p>Nationality: Dutch</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">4</div>
                        <div class="stat-label">World Titles</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">65</div>
                        <div class="stat-label">Wins</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\tsunoda.avif" alt="Yuki Tsunoda" />
                <h3>Yuki Tsunoda</h3>
                <p>Team: Red Bull Racing</p>
                <p>Nationality: Japanese</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">0</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">0</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\leclerc.avif" alt="Charles Leclerc" />
                <h3>Charles Leclerc</h3>
                <p>Team: Scuderia Ferrari</p>
                <p>Nationality: Monegasque</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">26</div>
                        <div class="stat-label">Pole Positions</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">46</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images/lewis_hamilton.jpg" alt="Lewis Hamilton" />
                <h3>Lewis Hamilton</h3>
                <p>Team: Scuderia Ferrari</p>
                <p>Nationality: British</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">7</div>
                        <div class="stat-label">World Titles</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">104</div>
                        <div class="stat-label">Wins</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\russell.avif" alt="George Russell" />
                <h3>George Russell</h3>
                <p>Team: Mercedes-AMG</p>
                <p>Nationality: British</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">3</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">19</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\antonelli.avif" alt="Andrea Kimi Antonelli" />
                <h3>Andrea Kimi Antonelli</h3>
                <p>Team: Mercedes-AMG</p>
                <p>Nationality: Italian</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">F1 Debut</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">Future Star</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\norris.avif" alt="Lando Norris" />
                <h3>Lando Norris</h3>
                <p>Team: McLaren</p>
                <p>Nationality: British</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">6</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">34</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\piastri.avif" alt="Oscar Piastri" />
                <h3>Oscar Piastri</h3>
                <p>Team: McLaren</p>
                <p>Nationality: Australian</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">7</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">18</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\alonso.avif" alt="Fernando Alonso" />
                <h3>Fernando Alonso</h3>
                <p>Team: Aston Martin</p>
                <p>Nationality: Spanish</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">2</div>
                        <div class="stat-label">World Titles</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">32</div>
                        <div class="stat-label">Wins</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\stroll.avif" alt="Lance Stroll" />
                <h3>Lance Stroll</h3>
                <p>Team: Aston Martin</p>
                <p>Nationality: Canadian</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">0</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">3</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\gasly.avif" alt="Pierre Gasly" />
                <h3>Pierre Gasly</h3>
                <p>Team: Alpine</p>
                <p>Nationality: French</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">1</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">5</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\colapinto.avif" alt="Franco Colapinto" />
                <h3>Franco Colapinto</h3>
                <p>Team: Alpine</p>
                <p>Nationality: Argentine</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">F1 Debut</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">Future Star</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\albon.avif" alt="Alex Albon" />
                <h3>Alex Albon</h3>
                <p>Team: Williams</p>
                <p>Nationality: Thai-British</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">0</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">2</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\sainz.avif" alt="Carlos Sainz" />
                <h3>Carlos Sainz</h3>
                <p>Team: Williams</p>
                <p>Nationality: Spanish</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">4</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">27</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\lawson-racing-bulls.avif" alt="Liam Lawson" />
                <h3>Liam Lawson</h3>
                <p>Team: Racing Bulls</p>
                <p>Nationality: New Zealander</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">0</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">Driver</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\hadjar.avif" alt="Isack Hadjar" />
                <h3>Isack Hadjar</h3>
                <p>Team: Racing Bulls</p>
                <p>Nationality: French</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">F1 Debut</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">Future Star</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\hulkenberg.avif" alt="Nico Hulkenberg" />
                <h3>Nico Hulkenberg</h3>
                <p>Team: Kick Sauber</p>
                <p>Nationality: German</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">0</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">0</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\bortoleto.avif" alt="Gabriel Bortoleto" />
                <h3>Gabriel Bortoleto</h3>
                <p>Team: Kick Sauber</p>
                <p>Nationality: Brazilian</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">F1 Debut</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">Future Star</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\ocon.avif" alt="Esteban Ocon" />
                <h3>Esteban Ocon</h3>
                <p>Team: Haas</p>
                <p>Nationality: French</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">1</div>
                        <div class="stat-label">Wins</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">4</div>
                        <div class="stat-label">Podiums</div>
                    </div>
                </div>
            </div>

            <div class="driver-card">
                <img src="images\bearman.avif" alt="Oliver Bearman" />
                <h3>Oliver Bearman</h3>
                <p>Team: Haas</p>
                <p>Nationality: British</p>
                <div class="driver-stats">
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">F1 Debut</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">-</div>
                        <div class="stat-label">Future Star</div>
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