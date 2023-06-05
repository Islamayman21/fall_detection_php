<?php
// Connect to the database
$serverHost = "localhost:3307";
$username = "root";
$password = "";
$database = "userdata";

// Create connection
$conn = new mysqli($serverHost, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 