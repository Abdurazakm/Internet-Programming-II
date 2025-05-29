<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['username'] = $_POST['username'];

    if (isset($_POST['remember_me'])) {
        setcookie("username", $_POST['username'], time() + (86400 * 30), "/");
    }

    header("Location: dashboard.php");
}
?>

<form method="post">
    Username: <input type="text" name="username" required><br>
    <input type="checkbox" name="remember_me"> Remember Me<br>
    <button type="submit">Login</button>
</form>
