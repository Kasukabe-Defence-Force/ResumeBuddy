<? php include('server.php')?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>ResumeBuddy | Make your resume</title>
  </head>
  <body style="background-color: #FAF9F9">


    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-inverse navbar-fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.html">ResumeBuddy</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="#">Login</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    <div class="hero" style="background-image: url(images/hero.png);">
    </div> 
    <!-- Login Form  -->
    <div class="container h-100" style="background-image: url(images/3.png);">
      <div class="d-flex justify-content-center h-100">
        <div class="user_card">
          <div class="d-flex justify-content-center">
            <div class="brand_logo_container">
              <img src="https://www.pngfind.com/pngs/m/63-631239_login-png-login-icon-png-transparent-png.png" class="brand_logo" alt="Logo">
            </div>
          </div>
          <div class="d-flex justify-content-center form_container">
             <form method="post" action="register.php">
              <?php include('errors.php')?>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" name="username" class="form-control input_user" value = "<?=$username?>" placeholder="Username">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" name="password" class="form-control input_user" value = "<?=$password?>" placeholder="Password">
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlInline">
                  <label class="custom-control-label" for="customControlInline">Remember me</label>
                </div>
              </div>
                <div class="d-flex justify-content-center mt-3 login_container">
             <button type="sumbit" name="reg_user" class="btn login_btn">Register</button>
             </div>
            </form>
          </div>
      
          <div class="mt-4">
            <div class="d-flex justify-content-center links">
              Already a member ? <a href="login.php" class="ml-2">Login</a>
            </div>
            <div class="d-flex justify-content-center links">
              <a href="#">Forgot your password?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Ends Here -->
    
  <!-- Footer Starts Here -->
  <footer class="fhooter bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">RessumeBuddy</a>
    </div>
    <!-- Copyright -->
  </footer>
  
  <!-- Footer Ends Here -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>