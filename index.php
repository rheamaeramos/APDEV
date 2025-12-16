<?php
session_start();

// --- 1. Database Configuration and Connection ---
$host = 'localhost'; 
$db   = 'study_portal'; 
$user = 'root'; 
$pass = ''; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = null;
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     // If connection fails, we can't fetch user data
     // For now, silently continue but set $pdo to null to handle errors later.
}

// 2. Main Routing Logic
$page = $_GET['page'] ?? 'home'; // Default page is 'home'

// --- 3. LOGOUT Logic (Mula sa logout.php) ---
if ($page === 'logout') {
    $_SESSION = array(); // Unset all session variables
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
    header("Location: auth.php");
    exit();
}

// 4. Session Check (Para sa lahat ng pages maliban sa Logout)
if (!isset($_SESSION['user_id'])) {
    header("Location: auth.php"); 
    exit(); 
}

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'] ?? 'User';
$user_data = []; // Gagamitin ito para sa profile page

// --- 5. PROFILE Logic (Mula sa profile.php) ---
if ($page === 'profile' && $pdo) {
    // Kunin ang kumpletong data ng user mula sa database
    $stmt = $pdo->prepare("SELECT username, email, created_at FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $user_data = $stmt->fetch();

    if (!$user_data) {
        // Fallback in case user is deleted while logged in
        session_destroy();
        header("Location: auth.php");
        exit();
    }
    $username = htmlspecialchars($user_data['username']); // I-update ang username mula sa database
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>💡 Study Portal - <?= ucfirst($page) ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #007bff; /* Blue */
            --secondary-color: #28a745; /* Green */
            --accent-color: #ffc107; /* Yellow */
            --bg-light: #f8f9fa;
            --text-dark: #343a40;
            --header-height: 70px;
        }

        body { 
            font-family: 'Poppins', sans-serif; 
            background: var(--bg-light); 
            margin: 0; 
            padding-top: var(--header-height); 
        }
        
        /* ------------------- HEADER STYLES ------------------- */
        .main-header {
            position: fixed; top: 0; left: 0; width: 100%; height: var(--header-height);
            background-color: white; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            display: flex; justify-content: space-between; align-items: center;
            padding: 0 30px; z-index: 1000;
        }

        .logo-text { color: var(--primary-color); font-size: 1.8em; font-weight: 800; }

        .header-nav a {
            color: var(--text-dark); text-decoration: none; padding: 8px 12px; margin-left: 10px;
            border-radius: 6px; font-weight: 600; transition: background-color 0.2s, color 0.2s;
        }
        .header-nav a:hover { background-color: var(--primary-color); color: white; }
        .header-nav a i { margin-right: 5px; }

        .header-nav .account-link { color: var(--primary-color); }
        /* Highlight the active link (Profile) */
        .header-nav a.active-link { background-color: var(--primary-color); color: white; }
        .header-nav a.active-link:hover { opacity: 0.9; }
        /* --------------------------------------------------------- */


        /* Main Content Container Alignment */
        .content-wrapper {
            display: flex; justify-content: center; align-items: flex-start; padding: 40px 0; 
        }

        .container { 
            max-width: 700px; width: 90%; background: white; padding: 40px; 
            border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); text-align: center;
        }

        .page-header h1 { color: var(--primary-color); font-size: 2.2em; margin-bottom: 5px; font-weight: 800; }
        .page-header p { color: #6c757d; margin-bottom: 30px; }

        /* --- HOME Page Styles --- */
        .subject-grid {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px; margin-bottom: 30px;
        }
        .subject-card {
            background: var(--bg-light); padding: 20px; border-radius: 10px; text-decoration: none;
            color: var(--text-dark); box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;
            font-weight: 600; border: 1px solid #dee2e6; display: block;
        }
        .subject-card i { font-size: 1.8em; margin-bottom: 10px; display: block; }
        .subject-card:hover {
            transform: translateY(-5px); box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-color: var(--primary-color);
        }
        .math { color: #dc3545; } .science { color: #17a2b8; } .english { color: #6f42c1; } 
        .filipino { color: #fd7e14; } .ap { color: var(--secondary-color); }
        .tool-buttons { display: flex; gap: 15px; margin-top: 30px; border-top: 1px solid #e9ecef; padding-top: 25px; }
        .tool-buttons a {
            flex-grow: 1; display: block; padding: 12px; border-radius: 8px; font-size: 15px;
            font-weight: 600; text-decoration: none; transition: background 0.3s ease; text-align: center;
        }
        .btn-summarizer { background: var(--secondary-color); color: white; }
        .btn-summarizer:hover { background: #1e7e34; }
        .btn-assistant { background: var(--accent-color); color: var(--text-dark); }
        .btn-assistant:hover { background: #e0a800; }

        /* --- PROFILE Page Styles --- */
        .profile-card { 
            text-align: left; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); 
            max-width: 450px; width: 100%; margin: 0 auto;
        }
        .profile-card h2 { margin-top: 0; color: var(--primary-color); border-bottom: 2px solid #eee; padding-bottom: 10px; margin-bottom: 25px; text-align: center; }
        .profile-detail { margin: 15px 0; padding: 10px 0; font-size: 1.1em; border-bottom: 1px dotted #ccc; }
        .profile-detail:last-child { border-bottom: none; }
        .profile-detail strong { display: inline-block; width: 130px; color: #555; font-weight: 600; }

    </style>
</head>
<body>
    
    <div class="main-header">
        <span class="logo-text">Study Portal</span>
        <div class="header-nav">
            <a href="index.php?page=home" title="Dashboard" class="<?= $page === 'home' ? 'active-link' : '' ?>">
                <i class="fas fa-home"></i> Dashboard
            </a>
            <a href="index.php?page=profile" class="account-link <?= $page === 'profile' ? 'active-link' : '' ?>" title="My Account">
                <i class="fas fa-user-circle"></i> <?= htmlspecialchars($username) ?>
            </a>
            
            <a href="index.php?page=logout" title="Logout">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="container">
            
            <?php 
            // --- 6. Content Rendering Based on $page variable ---

            if ($page === 'home'): 
            ?>
                <div class="page-header">
                    <h1>📚 Study Portal</h1>
                    <p>Piliin ang subject para magsimula ng quiz o gumamit ng aming study tools.</p>
                </div>
                
                <h3>➡️ Start Quiz</h3>
                <div class="subject-grid">
                    <a href="math.php" class="subject-card math">
                        <i class="fas fa-calculator"></i> Math
                    </a>
                    
                    <a href="science.php" class="subject-card science">
                        <i class="fas fa-flask"></i> Science
                    </a>
                    
                    <a href="english.php" class="subject-card english">
                        <i class="fas fa-book-open"></i> English
                    </a>
                    
                    <a href="filipino.php" class="subject-card filipino">
                        <i class="fas fa-comments"></i> Filipino
                    </a>
                    
                    <a href="ap.php" class="subject-card ap">
                        <i class="fas fa-globe-asia"></i> Araling Panlipunan
                    </a>
                </div>

                <h3>🛠️ Study Tools</h3>
                <div class="tool-buttons">
                   
                    
                    <a href="whats_on_your_mind.php" class="btn-assistant">
                        <i class="fas fa-brain"></i> AI Assistant
                    </a>
                </div>

            <?php 
            elseif ($page === 'profile' && $user_data): 
            ?>
                <div class="profile-card">
                    <h2>User Account Details</h2>
                    
                    <div class="profile-detail">
                        <strong>👤 Username:</strong> <?= $username ?>
                    </div>
                    
                    <div class="profile-detail">
                        <strong>📧 Email:</strong> <?= htmlspecialchars($user_data['email']) ?>
                    </div>
                    
                    <div class="profile-detail">
                        <strong>📅 Date Joined:</strong> <?= date("F j, Y", strtotime($user_data['created_at'])) ?>
                    </div>
                </div>

            <?php 
            else: 
            ?>
                <div class="page-header">
                    <h1>404 Page Not Found</h1>
                    <p>The page you requested does not exist.</p>
                    <p><a href="index.php?page=home">Go to Dashboard</a></p>
                </div>
            <?php endif; ?>

        </div>
    </div>
</body>
</html>