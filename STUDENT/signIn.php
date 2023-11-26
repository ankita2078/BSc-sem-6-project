<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="signup.css">

    <style>
          @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
            body {
              font-family: "Poppins", sans-serif;
              background-image: url("images/student/bgbg.jpg");
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              background-attachment: fixed;
            }


  </style>

    <title>signIn/signUp</title>

  </head>
  <body>
    


  <div class="container-fluid">
    <div class="row justify-content-center align-items-center text-center">
      <div class="col-auto">
      <div class="wrapper" style="box-shadow: 10px 10px 30px #292828;">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked />
          <input type="radio" name="slide" id="signup" />
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form method="post" action="logIn.php" class="login">
            <div class="field">
              <input type="text" name="email" placeholder="Email Address" required />
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required />
            </div>
            <div class="pass-link">
              <a href="forgot.php">Forgot password?</a>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="log" value="Login" />
            </div>
            <div class="signup-link">
              Not a member? <a href="#">Signup now</a>
            </div>
          </form>
          <form  method="post" action="registration.php" class="signup">
            <div class="field">
              <input type="text" id="name" name="name" placeholder="Enter Your Name" required />
            </div>
            <div class="field">
              <input type="text" id="Phno" name="Phno" placeholder="Enter Your Phone Number" required />
            </div>
            <div class="field">
              <input type="text" id="eid" name="eid" placeholder="Email Address" required />
            </div>
            <div class="field">
              <input type="password" id="passwd" name="passwd" placeholder="Password" required /><br><span id = "message4" style="color:orange"> </span>
            </div>
            <div class="field">
              <input type="password" id="Cpasswd" placeholder="Confirm password" required /><br><span id = "message5" style="color:orange"> </span>
            </div>
            <div class="field btn" onclick="passWdCheck()">
              <div class="btn-layer"></div>
              <button type="button" name="Check">Check<br>
            </div>
            <div class="field btn" onclick="submit()">
              <div class="btn-layer"></div>
              <input type="submit" name="Submit" value="Submit" /><br>
            </div>
          </form>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
  <!-- js -->
  <script src="signup.js"></script>
</html>





