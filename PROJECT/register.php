<?php
$pageTitle = "Login/Register - Sunny's Tech Store";
$pageDescription = "Create an account or log in to Sunny's Tech Store to access you profile or manage your orders";
require_once './Templates/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Account Access</h1>
            <p>Register for a new account or log in to your existing one below.</p>
        </div>
    </section>

    <!-- Register form  auth(authentication)-->
    <section class="auth-section">
        <div class="container auth-container">

            <!-- Registration form -->
            <div class="auth-box">
                <h2>Create Account</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Your Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Create a Password" required>
                    </div>
                    <button type="submit" class="btn-link">Register</button>
                </form>
            </div>

            <!-- Login form -->
            <div class="auth-box">
                <h2>Login</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="login-email">Email Address</label>
                        <input type="email" id="login-email" name="login-email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" id="login-password" name="login-password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn-link">Login</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php require './Templates/footer.php'; ?>