<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/login.css">
</head>

<body>
    <div class="container">

        <!-- Right Section (Login Form) -->
        <div class="right-section">
            <div class="form-container">
                <h2>Welcome Back!</h2>
                <form>
                    <div class="input-group">
                        <label for="login-email">Email Address</label>
                        <input type="email" id="login-email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-group">
                        <label for="login-password">Password</label>
                        <input type="password" id="login-password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="login-btn"><a href="./admin/index.php">Login</a></button>
                    <p class="sign-up"><a href="sign_up.php">Sign Up?</a></p>
                </form>
            </div>
        </div>

        <!-- Left Section (Login Image and Welcome Back) -->
        <div class="left-section">
            <h1>WELCOME BACK!</h1>
            <div class="image"></div>
        </div>
    </div>
</body>

</html>