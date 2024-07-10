<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="styles/navbar.css">
    <title>Navbar</title>
</head>
<body>
    <nav>
        <div id="navbar-container"></div>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="profile.php">Profile</a></li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
                    <li><a href="admin.php">Admin Page</a></li>
                <?php endif; ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            <?php endif; ?>
            <li><a href="server.php">Server List</a></li>
        </ul>
    </nav>
</body>
</html>
