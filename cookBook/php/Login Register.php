<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="form-container">
    <div class="forms" id="forms">
        <!-- Login Form -->
        <div class="form" id="login-form">
            <h2 class="text-center">Login</h2>
            <form id="loginForm">
                <div class="mb-3">
                    <label for="login-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="login-email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="login-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="login-password" placeholder="Enter your password">
                </div>
                <button type="button" class="btn btn-green w-100" id="login_btn">Login</button>
            </form>
            <p class="text-center mt-3">Don't have an account? <span class="toggle-btn" id="toRegis">Register</span></p>
        </div>

        <!-- Register Form -->
        <div class="form" id="register-form">
            <h2 class="text-center">Register</h2>
            <form id="registerForm">
                <div class="mb-3">
                    <label for="register-name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="register-name" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label for="register-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="register-email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="register-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="register-password" placeholder="Enter your password">
                </div>
                <button type="button" class="btn btn-green w-100" id="regis_btn">Register</button>
            </form>
            <p class="text-center mt-3">Already have an account? <span class="toggle-btn" id="toLogin">Login</span></p>
        </div>
    </div>
</div>
<script src="../js/login.js"></script>
</body>
</html>
