<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execute-Gaming - Login</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/navbar.css">
</head>
<body>
  <header>
  <?php include 'navbar.php'; ?>
  </header>
  <div class="main-content">
    <form action="application/login.php" method="POST">
        <div class="container">
          <h1>Login</h1>
          <p>Please fill in this form to login to your account.</p>
          <hr>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>
          <hr>
      
          <button type="submit" class="loginbtn">Login</button>
        </div>
      
        <div class="container signin">
          <p>Don't have an account? <a href="register.php">Register</a>.</p>
        </div>
      </form>

</body>
</html>