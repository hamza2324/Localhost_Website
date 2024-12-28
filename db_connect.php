<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = "database";     // Your MySQL password
$dbname = "petzone"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
