<?php
session_start(); // Start the session to check login status

// Check if the user is logged in
$is_logged_in = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Hub</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php">Auto Hub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="new_cars.php">New Cars</a></li>
                <li class="nav-item"><a class="nav-link" href="used_cars.php">Used Cars</a></li>
                <li class="nav-item"><a class="nav-link" href="trade_cars.php">Trade Cars</a></li>
                <?php if ($is_logged_in): ?>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="account.php">Account</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
