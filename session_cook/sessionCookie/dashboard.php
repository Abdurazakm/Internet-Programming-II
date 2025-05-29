<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "Welcome back, " . $_SESSION['username'];
} elseif (isset($_COOKIE['username'])) {
    echo "Welcome (via cookie), " . $_COOKIE['username'];
} else {
    echo "You are not logged in.";
}
?>
