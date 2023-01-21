<?php include('server.php') ?>
<?php 
  

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ResumeBuddy</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Loginp</a></li>
      <li><a href="#"><span class="active glyphicon glyphicon-log-out"></span><a href="index.php?logout='1'" style="color: red;"></a> Logout</a></li>
    </ul>
  </div>
</nav>
  
        <header class="masthead d-flex align-items-center" style = "margin-top: 5%;">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">Welcome ! <strong><?php echo $_SESSION['username']; ?></strong></h1>
                
                <h3 class="mb-5"><em>Let's resume to making our resume</em></h3>
                <a class="btn btn-primary btn-xl" href="sign.php">Find Out More</a>
            </div>
        </header>

</body>
</html>

   
  	
   <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script src="js/app.js"></script>
</body>
</html> 