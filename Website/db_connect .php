<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'notes_app');  // Update with your MySQL credentials

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.html");  // Redirect to a dashboard after successful login
    } else {
        echo "Invalid username or password. <a href='notes.html'>Try again</a>.";
    }
}
?>
