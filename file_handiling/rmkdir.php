<?php
$categoryFolder = "uploads/user123";
if (is_dir($categoryFolder) && count(scandir($categoryFolder)) == 2) {
 // Only '.' and '..' exist
 rmdir($categoryFolder);
 echo "Empty category folder removed.";
} else {
 echo "Folder is not empty or doesn't exist.";
}
$uploadPath = $_SERVER['DOCUMENT_ROOT'] . "/uploads/login.txt";
file_put_contents($uploadPath, "Hello world!");
echo "File saved to: $uploadPath";