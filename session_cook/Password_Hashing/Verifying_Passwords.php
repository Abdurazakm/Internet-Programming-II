<?php
$storedHash = password_hash("securepass123", PASSWORD_DEFAULT);
$userInput = "securepass123";
if (password_verify($userInput, $storedHash)) {
 echo "Login successful!";
} else {
 echo "Incorrect password.";
}