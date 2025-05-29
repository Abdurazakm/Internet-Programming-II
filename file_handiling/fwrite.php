<?php
$file = fopen("login.txt", "w");
fwrite($file, "This is Abdurazak i visit the file ".date("Y-m-d H:i:s")."\n");
$file = @fopen("nonexistent.txt", "r") or die("Error: File not found!");