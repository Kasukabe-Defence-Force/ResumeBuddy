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
    <title>sign up</title>
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
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="#"><span class="active glyphicon glyphicon-log-out">Logout</span></li>
    </ul>
  </div>
</nav>
  
        <!-- <header class="masthead d-flex align-items-center" style = "margin-top: 9%;">
            <div class="container px-4 px-lg-5 text-left">
                <h1 class="mb-1">Welcome ! <strong><?php echo $_SESSION['username']; ?></strong></h1>
                
                <h3 class="mb-5"><em>Please enter your details</em></h3>
            </div>
        </header>
        <br> -->

        <form class="input-fields">
          <h1 style="text-align: center;">Resume Generator</h1>
        <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
          <input type="text" name="name" placeholder="name" />
          <input type="text" name="title" placeholder="Title eg web developer" />
          <textarea name="workexp" placeholder="work experience"></textarea>
          <textarea name="academics" placeholder="academic details"></textarea>
          <input name="objective" placeholder="objective" />
          <textarea name="skills" placeholder="skills" ></textarea>
          <textarea name="projects" placeholder="projects" ></textarea>
          <textarea name="achievements" placeholder="achievements" ></textarea>
          <textarea name="contact" placeholder="contact" ></textarea>
    </form>
     <!-- resume preview -->
    <div class="output">
   
    </div>  
    <!-- button for toggle   -->
   <div class="btn">
        <button onclick="toggle()">Preview or edit</button>
   </div>

</body>
</html>

   
  	
   <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script src="js/app.js"></script>
</body>
</html> 