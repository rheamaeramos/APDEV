<?php
// Start a session to use $_SESSION variables
session_start();

// --- 1. Database Configuration and Connection (Update your credentials here) ---
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
     // Handle connection error
     die("ERROR: Could not connect to the database: " . $e->getMessage());
}

$error_message = '';
$success_message = '';
// Flag to control which form is displayed after a submission
$show_create_form = false; 

// --- 2. Login Logic ---
if (isset($_POST['login_submit'])) {
    $username = trim($_POST['login_username']);
    $password = $_POST['login_password'];

    if (empty($username) || empty($password)) {
        $error_message = "All fields are required for Login.";
    } else {
        $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Successful login
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php"); 
            exit();
        } else {
            $error_message = "Incorrect Username or Password.";
        }
    }
}

// --- 3. Create Account Logic ---
if (isset($_POST['create_submit'])) {
    $username = trim($_POST['create_username']);
    $email = trim($_POST['create_email']);
    $password = $_POST['create_password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "All fields are required for Account Creation.";
        $show_create_form = true; 
    } elseif ($password !== $confirm_password) {
        $error_message = "Password and confirmation do not match.";
        $show_create_form = true;
    } else {
        // Check if username or email already exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        if ($stmt->fetch()) {
            $error_message = "Username or Email is already in use.";
            $show_create_form = true;
        } else {
            // Hash the password securely
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            try {
                $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                $stmt->execute([$username, $email, $hashed_password]);
                $success_message = "Account successfully created! You can now log in.";
                $show_create_form = false; // Show Login Form after successful registration
            } catch (PDOException $e) {
                $error_message = "There was an issue creating the account.";
                $show_create_form = true;
            }
        }
    }
}

// Check if the link to switch to the Create Account form was clicked
if (isset($_GET['action']) && $_GET['action'] == 'register') {
    $show_create_form = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Portal - Login / Register</title>
    <style>
        /* Modern Design Styles */
        :root {
            --primary-color: #007bff; /* Light Blue */
            --primary-dark:rgba(28, 109, 202, 0.95); /* Darker Blue for gradient/hover */
            --secondary-color:rgb(61, 145, 219); 
            --success-color: #28a745; 
            --error-color: #dc3545; 
            --bg-color: #f8f9fa;
        }
        
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            background-color: var(--bg-color); 
            margin: 0;
        }
        
        /* Main Container: Divides the screen */
        .auth-container { 
            display: flex; 
            width: 800px; 
            max-width: 90%; 
            height: 500px; 
            box-shadow: 0 10px 20px rgba(0,0,0,0.15); 
            border-radius: 12px; 
            overflow: hidden; 
            background: white;
        }
        
        /* LEFT Panel: System Name & Design (Branding) */
        .branding-panel {
            width: 50%;
            /* Updated Gradient to Light Blue */
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .branding-panel .logo {
            font-size: 4em;
            margin-bottom: 10px;
        }

        .branding-panel h1 {
            margin-bottom: 10px;
            font-size: 2.5em;
            letter-spacing: 1px;
        }

        .branding-panel p {
            font-size: 1em;
            line-height: 1.6;
        }
        
        /* RIGHT Panel: Forms */
        .form-panel {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        /* Form Styling */
        .auth-form {
            transition: opacity 0.3s ease-in-out;
            position: absolute;
            width: 80%;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .auth-form.hidden {
            display: none;
        }

        h2 { text-align: center; color: #333; margin-bottom: 30px; }
        
        input[type="text"], input[type="email"], input[type="password"] { 
            width: 100%; 
            padding: 12px; 
            margin: 10px 0; 
            border: 1px solid #ddd; 
            border-radius: 6px; 
            box-sizing: border-box; 
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            border-color: var(--primary-color);
            outline: none;
        }

        button { 
            width: 100%; 
            /* Uses Light Blue */
            background-color: var(--primary-color); 
            color: white; 
            padding: 12px 20px; 
            margin: 15px 0 10px 0; 
            border: none; 
            border-radius: 6px; 
            cursor: pointer; 
            font-size: 1.1em;
            transition: background-color 0.3s;
        }
        
        button:hover { 
            /* Uses Darker Blue on hover */
            background-color: var(--primary-dark); 
        }

        .switch-link {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9em;
            color: var(--secondary-color);
        }

        .switch-link button {
            background: none;
            color: var(--primary-color);
            padding: 0;
            margin: 0;
            border: none;
            cursor: pointer;
            width: auto;
            display: inline;
            font-weight: bold;
        }

        .switch-link button:hover {
            text-decoration: underline;
            background: none;
        }
        
        /* Message Styling */
        .message { 
            padding: 10px; 
            margin-bottom: 20px; 
            border-radius: 6px; 
            text-align: center; 
            font-size: 0.9em;
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            z-index: 10;
        }
        .error { background-color: #f8d7da; color: var(--error-color); border: 1px solid #f5c6cb; }
        .success { background-color: #d4edda; color: var(--success-color); border: 1px solid #c3e6cb; }

    </style>
</head>
<body>

<div class="auth-container">
    
    <div class="branding-panel">
        <span class="logo">🧑‍💻</span> <h1>Study Hub Portal</h1>
        <p>Your ultimate platform for accessing study materials, tracking progress, and achieving academic excellence.</p>
    </div>

    <div class="form-panel">
        
        <?php if ($error_message): ?>
            <div class="message error"><?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>
        <?php if ($success_message): ?>
            <div class="message success"><?= htmlspecialchars($success_message) ?></div>
        <?php endif; ?>

        <div id="login-form" class="auth-form <?= $show_create_form ? 'hidden' : '' ?>">
            <h2>🔑 User Login</h2>
            <form method="POST" action="auth.php">
                <label for="login_username">Username:</label>
                <input type="text" id="login_username" name="login_username" required>
                
                <label for="login_password">Password:</label>
                <input type="password" id="login_password" name="login_password" required>
                
                <button type="submit" name="login_submit">Login</button>
            </form>
            
            <div class="switch-link">
                Don't have an account? 
                <button type="button" onclick="showRegisterForm()">Create an Account</button>
            </div>
        </div>

        <div id="register-form" class="auth-form <?= $show_create_form ? '' : 'hidden' ?>">
            <h2>📝 Create Account</h2>
            <form method="POST" action="auth.php">
                <label for="create_username">Username:</label>
                <input type="text" id="create_username" name="create_username" value="<?= isset($username) ? htmlspecialchars($username) : '' ?>" required>
                
                <label for="create_email">Email:</label>
                <input type="email" id="create_email" name="create_email" value="<?= isset($email) ? htmlspecialchars($email) : '' ?>" required>
                
                <label for="create_password">Password:</label>
                <input type="password" id="create_password" name="create_password" required>
                
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                
                <button type="submit" name="create_submit">Register</button>
            </form>

            <div class="switch-link">
                Already have an account? 
                <button type="button" onclick="showLoginForm()">Login</button>
            </div>
        </div>
    </div>
</div>

<script>
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');

    function showRegisterForm() {
        loginForm.classList.add('hidden');
        registerForm.classList.remove('hidden');
        history.pushState(null, '', 'auth.php?action=register');
    }

    function showLoginForm() {
        registerForm.classList.add('hidden');
        loginForm.classList.remove('hidden');
        history.pushState(null, '', 'auth.php');
    }
    
    <?php if ($show_create_form): ?>
        showRegisterForm(); 
    <?php elseif($success_message): ?>
        showLoginForm();
    <?php endif; ?>
</script>

</body>
</html>