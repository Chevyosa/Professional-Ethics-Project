<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "ccrp";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) 
{
    die("<script>alert('Failed to connect with Database.')</script>");
}

$result = mysqli_query($conn, "SELECT 1");
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

?>
