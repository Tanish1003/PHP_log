<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <form class="login-form"  method="post" action="main.php">
            <h2>Login</h2>
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <input type="checkbox" id="show-password"> Show Password
            </div>
            <button type="submit">Sign In</button>
            
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
