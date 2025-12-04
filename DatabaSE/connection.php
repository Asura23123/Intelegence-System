<?php
$servername = "localhost"; // Change if necessary
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "Form_db"; // Your database name

// Create connection
$con = new mysqli("localhost", "root", "", "Form_db");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$connection = new mysqli("localhost", "root", "", "Form_db");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>