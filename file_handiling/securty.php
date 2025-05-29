<?php
// Open or create the log file
$logFile = fopen("visits.log", "a") or die("Unable to open file!");
// Record the visit with timestamp and IP address
$logEntry = "Visit from IP: " . $_SERVER['REMOTE_ADDR'] . " on " . date("Y-m-d H:i:s") . "\n";
// Write the entry to the log
fwrite($logFile, $logEntry);
// Close the file
fclose($logFile);
echo "Visit logged successfully!";

