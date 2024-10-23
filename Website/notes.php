<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <p>If you don't have an account, <a href="register.html">Register Here</a>.</p>

    <nav>
        <a href="home.php">Home</a> |
        <a href="education.php">Education</a> |
        <a href="notes.php">Notes</a>
    </nav>
</body>
</html>
