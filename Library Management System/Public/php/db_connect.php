<?php
$servername = "localhost";  // Your MySQL server (usually localhost)
$username = "root";         // Your MySQL username (usually root)
$password = "";             // Your MySQL password (leave empty if no password)
$dbname = "library";        // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
