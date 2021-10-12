<?php
session_start();

// print_r($_SESSION);
// exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/index.css">

<title>NavBar</title>
</head>
<body>
  

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="create.php">SingUp Form</a>
    </li>
    <li class="nav-item">
      
    <?php if(isset($_SESSION['name'])){?>
   <a class="nav-link" href="view.php">Dashboard</a>
<?php } ?>
   
    </li>
   
  </ul>

  <ul class="navbar-nav">
  
    <li class="nav-item">
      <!-- rashed code for username view -->
      <a class="nav-link" href="login.php" style="float:right;">
      <?php
       echo isset($_SESSION['name']) ? $_SESSION['name']:"LogIn & Register";
        ?>
      <?php
						
                //   if ($_SESSION["login"]["role"]==="view") {
                //   echo '<li><a href="view">Dashboard</a></li>';
                //   }else{
								// 	echo '<li><a href="login.php">Login</a></li>
								// 	<li><a href="register.php">register</a></li>';
								// }
								?>

      <?php if(isset($_SESSION['name'])){?>

         <a href="logout.php">Logout</a>
       <?php } ?>
        
    </a>
    </li>
  </ul>
</nav>

<br>


</body>
</html>
