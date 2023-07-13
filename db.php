<?php
$host = 'localhost'; // MySQL server hostname
$username = 'root'; // MySQL username
$password = ''; // MySQL password
$database = 'stackform'; // MySQL database name

// Establish a connection to the MySQL server
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
?>

