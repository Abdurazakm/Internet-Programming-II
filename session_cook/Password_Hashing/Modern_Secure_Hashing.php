<?php
$password = "my_secure_password";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo $hashedPassword; // Outputs a secure, salted hash