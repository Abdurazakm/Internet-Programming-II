<?php
// data.php
// Display current date and time
echo "Current date and time: ";
echo "<br>";
echo "data " . date("Y-m-d");
echo "<br>";    
echo "time " . date("H:i:s");
echo "<br>";
echo "full date and time ". date("Y-m-d H:i:s");

// Format today's date in different ways
echo "<br>" . "<br>" . "Format today's date in different ways";
echo "<br>";
echo date("d/m/Y") . "<br>"; // Output: 20/03/2025
echo date("m-d-Y") . "<br>"; // Output: 03-20-2025
echo date("l, F j, Y") . "<br>"; // Output: Thursday, March 20, 2025

// Calculate Date Difference
// To calculate the difference between two dates, use DateTime objects.
$date1 = new DateTime("2025-03-20");
$date2 = new DateTime("2025-04-05");
$interval = $date1->diff($date2);
echo "<br>"."Calculate Date Difference";
echo "<br>";
echo $interval->days . "<br>"; // Output: 16
// You can also access differences in other formats:
echo $interval->y . ' years, '."<br>"; // Output: 0 years
echo $interval->m . ' months, ' ."<br>"; // Output: 0 months
echo $interval->d . ' days'; // Output: 16 days

//GET CURRENT TIMEZONE
echo "<br>" . "<br>" . "Get current timezone";

echo "<br>";
echo "Current timezone: " . date_default_timezone_get() . "<br>";

// contents of header.php
echo "<h1>Welcome to My Website</h1>";
// main script
include 'header.php';
echo "<p>Homepage content goes here.</p>";