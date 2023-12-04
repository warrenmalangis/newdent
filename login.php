<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Raleway', sans-serif;
    }
    .background-container {
      height: 100vh;
      background-image: url('images/background.jpg'); /* Set the path to your background image */
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      backdrop-filter: blur(10px);
      padding: 50px;
    }
    .container {
      max-width: 450px;
      padding: 30px 60px;
      background-color: #fff;
      border-radius: 20px;
    }
    .form-control{
      font-size: 14px;
    }
    .logo {
      text-align: center;
      margin: 20px 0;
    }
    .logo img {
      width: 60px; /* Adjust the width as needed */
      height: auto;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    label{
      font-size: 14px;
      font-weight: 500;
    }
    button{
      background-color: #5F9AFF;
      font-size: 14px;
      font-weight: 900;
    }
    .welcome-text {
      text-align: center;
      margin-bottom: 20px;
      font-weight: 600;
    }
    .forgot-password {
      text-align: right;
      font-size: 14px;

    }
    .btn-primary {
      color: #fff; /* Text color */
      background-color: #2596be; /* Background color */
      border-color: #2596be; /* Border color */
      font-size: 14px; /* Font size of the button text */
      transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #207aa1; /* Dimmer background color on hover */
      border-color:  #207aa1;
    }
    .not-registered-text {
      font-size: 14px; /* Font size of the "Not yet Registered?" text */
    }
    @media (max-width: 576px) {
      .container {
        margin-left: 10px;
        margin-right: 10px;
      }
      .welcome-text {
        margin-bottom: 10px;
      }
    }
  </style>
</head>
<body>

<div class="background-container">
  <div class="container">
        <form>
           <div class="logo">
      <img src="images/logo-without-text.png" alt="Logo">
    </div>
    <div class="welcome-text">
      <h4>Welcome to DentClick</h4>
    </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
          </div>
          <div class="forgot-password">
            <a href="#">Forgot password?</a>
          </div>
          <button type="submit" class="btn btn-primary btn-block mt-3">Sign in</button>
        </form>
        <div class="mt-3 text-center not-registered-text">
          <p>Not yet Registered? <a href="#">Create an Account</a></p>
        </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies (jQuery) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
