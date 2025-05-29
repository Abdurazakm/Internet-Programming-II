<?php
$file = fopen("example.txt", "r");
//fgets() read the line by line

while($line = fgets($file)) {
    echo $line."<br>";
}   

$content = fread($file, filesize("example.txt")-200);
fclose($file);
echo $content;
// This code opens a file named "example.txt" in read mode, reads its content, and then closes the file.
// Make sure to handle errors in a real application, such as checking if the file exists or if it can be opened.
// Note: The file "example.txt" should exist in the same directory as this script for it to work correctly.
$contentfile = file_get_contents("example.txt");
echo $contentfile;
// This code reads the entire content of "example.txt" using file_get_contents and echoes it.
  
