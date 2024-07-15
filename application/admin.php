<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: /index.php");
    exit();
}



/**
 * Summary of ensure_admin
 * @return void
 */
function ensure_admin()
{
    session_start();
    if (isset($_SESSION['role']) && $_SESSION['role'] != 'admin') {
        header("Location: /index.php");
        exit();
    }
}

$result = $conn->query("SELECT id, username, role FROM users");

echo "<h1>All Users</h1>";
echo "<table>";
echo "<tr><th>ID</th><th>Username</th><th>Role</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['role']}</td></tr>";
}
echo "</table>";


// Admin functionalities here
echo "Welcome, Admin!";

