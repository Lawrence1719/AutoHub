<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Auto Hub</title>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-left">
            <img href src="assets/images/AutoHubLogo.png" alt="AutoHub" class="logo">
            <a href="index.php" class="website-name">Auto Hub</a>
        </div>
        <div class="navbar-right">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <i class="fas fa-search search-icon"></i>
            </div>
            <div class="dropdown">
                <i class="fas fa-store"></i>
                <div class="dropdown-content">
                    <a href="#">New Cars</a>
                    <a href="#">Used Cars</a>
                    <a href="#">Trade Cars</a>
                </div>
            </div>
            <div class="dropdown">
                <i class="fas fa-bell notification-icon"></i>
                <div class="dropdown-content">
                    <!-- Notifications will be added here -->
                </div>
            </div>
            <div class="dropdown">
                <i class="fas fa-user account-icon"></i>
                <div class="dropdown-content">
                    <!-- When logged out -->
                    <a href="#">Login</a>
                    <a href="#">Register</a>
                    <!-- When logged in -->
                    <!--
                    <a href="#">Settings</a>
                    <a href="#">Profile</a>
                    <a href="#">Messages</a>
                    <a href="#">Logout</a>
                    -->
                </div>
            </div>
        </div>
    </nav>

    <script src="assets/js/scripts.js"></script>
</body>

</html>