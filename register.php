<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execute-Gaming - Gaming Community Since 2009</title>
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/navbar.css">
</head>
<body>
  <header>
    <?php include 'navbar.php'; ?>
    </header>

    <div class="main-content">
     <form action="application/register.php" method="POST">
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>

          <label for="username"><b>Username</b></label>
          <input type="username" placeholder="Enter Username" name="username" id="username" required>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
          <hr>
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn">Register</button>
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
      </form>
    
</body>
</html>