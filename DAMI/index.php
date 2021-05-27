<?php
session_start();//setting session for adminusername
if (isset($_SESSION['adminusername'])) {//if the variable adminusername is being set,
  header("location:adminpage.php");//then it will set the location to adminpage.php
} 


if (isset($_SESSION['username'])) {//if the variable username is being set, 
  header("location:userpage.php");//then it will set the location to userpage.php
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- SWEET ALERT LINKS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
  <!-- HEADER LINKS  -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css"/>
  <title>Sign in & Sign up Form|Inventory Management System</title>
</head>

<body>
  <div class="container">

    <!-- ADMIN LOGIN MODAL -->
    <div class="forms-container">
      <div class="signin-signup">
      <!-- form with the method of post -->
        <form action="connection.php" class="sign-in-form" method="post">
        <!-- to admin sign in icon -->
          <h1 class="admin"> admin <a href="adminlogin.php"> <i class="fa fa-arrow-right" style="color:#5995fd" aria-hidden="true"></i></a>
          </h1>
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="loginusername" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="loginpassword" />
          </div>
          <!-- submit button -->
          <input type="submit" value="Login" class="btn solid" name="login" />
          <!-- social medias -->
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <!-- another form for sign up -->
        </form>
        <form action="connection.php" method="post" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <!-- submit button -->
          <input type="submit" name="signup" class="btn" value="Sign up" />
          <!--char2 social medias -->
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="https://facebook.com" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
    <!-- sign up header texr -->
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here?</h3>
          <p>
            Sign up now. We offer a good deal for you. Welcome to PN inventory management system!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us?</h3>
          <p>
            Thank you for being part of our inventory management system. Sign in and visit your account!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>


<!-- preloader -->
  <div id="overlay">
    <div class="cv-spinner">
      <div class="spinner">
        <img src="preloader/images/cool.svg" alt="">
        <!--use other image-->
      </div>
    </div>
  </div>


<!-- preloader js -->
  <script src="preloader/js/jquery-latest.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".btn-danger").click(function(event) {
        $("#overlay").fadeIn("fast", function() {
          $("#overlay").delay(2000).fadeOut("slow");
        });
      });

      //will do on page load now
      $("#overlay").delay(2000).fadeOut("slow");

    })
  </script>

</body>

</html>