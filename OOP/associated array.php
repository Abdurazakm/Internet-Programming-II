<?php
$business = [
 "name" => "Cafe Aroma",
 "category" => "Restaurant",
 "location" => "Downtown"
];
echo $business["name"]."<br>"; // Outputs: Cafe Aroma

foreach ($business as $key => $value) {
 echo "$key: $value <br>";
}

$directory = [
 ["name" => "Cafe Aroma", "category" => "Restaurant", "location" => 
"Downtown"],
 ["name" => "Tech Solutions", "category" => "IT Services", "location" => 
"Uptown"],
 ["name" => "Green Market", "category" => "Grocery", "location" => 
"Suburb"]
];
echo $directory[1]["name"]; // Outputs: Tech Solutions
foreach ($directory as $business) {
 echo "Name: " . $business["name"] . " - Category: " . 
$business["category"] . "<br>";
}