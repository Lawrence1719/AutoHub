<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Auto Hub</title>
</head>
<body>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="index.php">Auto Hub</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="new_cars.php">New Cars</a></li>
                    <li><a href="used_cars.php">Used Cars</a></li>
                    <li><a href="trade_cars.php">Trade Cars</a></li>
                </ul>
            </div>
            <div class="search">
                <input type="text" placeholder="Search...">
                <button><img src="assets/images/search-icon.png" alt="Search"></button>
            </div>
            <div class="icons">
                <!-- Notification icon (to be implemented) -->
                <a href="#" class="icon"><img src="assets/images/notification-icon.png" alt="Notifications"></a>
                
                <!-- Account icon -->
                <div class="dropdown">
                    <a href="#" class="icon"><img src="assets/images/account-icon.png" alt="Account"></a>
                    <div class="dropdown-content">
                        <?php if ($loggedIn) : ?>
                            <a href="profile.php">Profile</a>
                            <a href="settings.php">Settings</a>
                            <a href="messages.php">Messages</a>
                            <a href="logout.php">Logout</a>
                        <?php else : ?>
                            <a href="login.php">Login</a>
                            <a href="register.php">Register</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>
