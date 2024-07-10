<?php
$servername = "127.0.0.1";
$username = "test";
$password = "test"; // Default password for root user in XAMPP is empty
$dbname = "user_test";
$port = 3307; // MySQL port number

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$conn->close();

