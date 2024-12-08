<?php
  include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In Page</title>
  <link rel="stylesheet" href="signup.css">
  <!-- Include FontAwesome for the icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <div class="signin-wrapper">
    <div class="signin-container">
      <h2><i class="fas fa-sign-in-alt"></i> Sign In</h2>
      <form action="#" method="post">
        <div class="input-group">
          <label for="email"><i class="fas fa-envelope"></i> Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-group">
          <label for="password"><i class="fas fa-lock"></i> Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="input-group remember-me">
          <input type="checkbox" id="remember" name="remember">
          <label for="remember"><i class="fas fa-check-square"></i> Remember me</label>
        </div>
        <button type="submit"><i class="fas fa-sign-in-alt"></i> Sign In</button>
        <p class="forgot-password"><a href="#"><i class="fas fa-key"></i> Forgot Password?</a></p>
        <p class="register-link">Don't have an account? <a href="#"><i class="fas fa-user-plus"></i> Register</a></p>
      </form>
    </div>
  </div>
</body>
</html>
