<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "asif_username";
$dbPassword = "asif_password@00";
$dbName     = "asif_order";

// Create database connection
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword);
$connection = mysqli_select_db($db, "asif_order");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>