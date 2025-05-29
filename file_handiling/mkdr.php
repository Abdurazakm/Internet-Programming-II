<?php
// Creating Directories
// mkdir(path, mode, recursive) creates a new directory.

$username = "user123";
$userFolder = "uploads/$username";
if (!is_dir($userFolder)) {
 mkdir($userFolder, 0755, true);
 echo "User folder created.";
} else {
 echo "Folder already exists.";
}