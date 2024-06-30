<!-- account.php -->
<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h2>Account</h2>
    <div id="login-register">
        <!-- Login form -->
        <form id="login-form" class="account-form">
            <h3>Login</h3>
            <!-- Login form fields -->
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>

        <!-- Register form -->
        <form id="register-form" class="account-form">
            <h3>Register</h3>
            <!-- Register form fields -->
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Register</button>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
