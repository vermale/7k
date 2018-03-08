<?php
// Set the JSON header
header("Content-type: text/json");

// The y value is a random number
$y = 1700;

// Create a PHP array and echo it as JSON
echo json_encode($y);
?>

