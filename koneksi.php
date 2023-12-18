<?php
// Database configuration
$hostname = 'localhost'; // Replace with your database host name or IP address
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password
$database = 'ccrp'; // Replace with your database name

// Create a database connection
$connect = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>