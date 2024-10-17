<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class=
"login-container">
    <h2>Login</h2>
    <div class="input-group">
        <label for="username">User name</label>
        <input type="text" id="username" placeholder="Enter your username" required>
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter your password" required>
    </div>
    <button class="login-button" onclick="login()">Login</button>
</div>

<script src="assets/js/login.js"></script>

</body>
</html>