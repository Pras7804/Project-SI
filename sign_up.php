<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./assets/sign_up.css">
</head>

<body>
    <div class="container">
        <!-- Left Section (Image and Welcome Message) -->
        <div class="left-section">
            <h1>WELCOME</h1>
            <div class="image"></div>
        </div>

        <!-- Right Section (Sign Up Form) -->
        <div class="right-section">
            <div class="form-container">
                <h2>Hello!<br>We are glad to see you :)</h2>
                <form>
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="input-group">
                        <label for="repeat-password">Repeat Password</label>
                        <input type="password" id="repeat-password" placeholder="Repeat your password" required>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="agree" required>
                        <label for="agree">I agree <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                    <button type="button" class="signup-btn" id="signUpBtn"><a href="login.php">Sign Up</a></button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Redirect to login.html with animation
        // const signUpBtn = document.getElementById('signUpBtn');
        // signUpBtn.addEventListener('click', () => {
        //     document.body.classList.add('animate-exit');
        //     setTimeout(() => {
        //         window.location.href = 'login.php';
        //     }, 600);
        // });
    </script>
</body>

</html>