<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] !== true) {
    // Redirect to the login page if not logged in
    header('location: login.php');
    exit();
}

$title = 'Dashboard';
include_once 'header.php';

// Access user information from the session
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        h2 {
            color: #333;
        }

        .container {
            flex: 1;
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Welcome, <?php echo $user['username']; ?>!</h2>
        <p>This is your dashboard. Add your content here.</p>
    </div>

    <footer>
        &copy; <?php echo date('Y'); ?> Your Website Name
    </footer>
</body>

</html>
