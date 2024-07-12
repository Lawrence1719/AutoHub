<?php
session_start();
include 'includes/db.php';
include 'includes/notifications.php';

$isLoggedIn = isset($_SESSION['user_id']);
$notifications = [];

if ($isLoggedIn) {
    $userId = $_SESSION['user_id'];
    $notifications = getNotifications($userId, $conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Auto Hub</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="assets/images/AutoHubLogo.png" alt="AutoHub" class="logo">
            Auto Hub
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <a class="dropdown-item" href="#">New Cars</a>
                        <a class="dropdown-item" href="#">Used Cars</a>
                        <a class="dropdown-item" href="#">Trade-In</a>
                        <a class="dropdown-item" href="#">Financing</a>
                        <a class="dropdown-item" href="#">Service & Parts</a>
                        <a class="dropdown-item" href="#">Dealerships</a>
                        <a class="dropdown-item" href="#">Reviews</a>
                        <a class="dropdown-item" href="#">Special Offers</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="search-container form-inline my-2 my-lg-0">
                        <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
                        <button class="search-icon-btn" type="submit">
                            <i class="fas fa-search search-icon"></i>
                        </button>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="notificationsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <?php if ($isLoggedIn && count($notifications) > 0): ?>
                            <span class="badge badge-danger"><?php echo count($notifications); ?></span>
                        <?php endif; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationsDropdown">
                        <?php if ($isLoggedIn): ?>
                            <?php if (count($notifications) > 0): ?>
                                <?php foreach ($notifications as $notification): ?>
                                    <a class="dropdown-item" href="#"><?php echo htmlspecialchars($notification['message']); ?></a>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <a class="dropdown-item" href="#">No new notifications</a>
                            <?php endif; ?>
                        <?php else: ?>
                            <a class="dropdown-item" href="#">Please log in or register to see notifications</a>
                        <?php endif; ?>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="accountDropdown">
                        <!-- When logged out -->
                        <a class="dropdown-item" href="#">Login</a>
                        <a class="dropdown-item" href="#">Register</a>
                        <!-- When logged in -->
                        <!--
        <a class="dropdown-item" href="#">Settings</a>
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="#">Messages</a>
        <a class="dropdown-item" href="#">Logout</a>
        -->
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>