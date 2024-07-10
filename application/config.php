<?php

define('BASE_URL', 'http://127.0.0.1/');

// Database configuration
$servername = "192.168.1.14";
$db_username = "acore";
$db_password = "acore";
$dbname = "user_test";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
