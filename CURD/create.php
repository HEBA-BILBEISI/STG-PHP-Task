<?php 
include"config.php";

if(isset($_POST['submit'])){
     $first_name = $_POST['firstname'];   
     $last_name = $_POST['lastname'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $gender = $_POST['gender'];
  

$sql = "INSERT INTO `users`(`firstname`,`lastname`,`email`,`password`,`gender`)
 VALUES ('$first_name','$last_name','$email','$password','$gender')";

$result = $conn ->query ($sql);
if ($result == TRUE){
echo "New Record created succesfully";
} else {
    echo "Error" . $sql. "<br>". $conn ->error ;
}
$conn->close();
}
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
    
    <title>First CRUD</title>
    <style>
body  {
  background-image: url("https://bebs.org/wp-content/uploads/2019/05/form-background-1024x683.jpg");
  /* background-repeat: repeat-y; */
  background-color: #cccccc;
  color:#FFFFFF ;
  /* margin: 35px; */
}
</style>
</head>
<body> 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="create.php">SingUp Form </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php">Dashboard</a>
      </li>
    </ul>
  </div>
</nav>








<br><br>
<center>
  <h1>Singup Form</h1>  
  <form action="" method = "POST">
<fieldest>
   <legend>Personal Information </legend> 
   First Name <br>
   <input type="text" name="firstname">
<br>
   Last Name <br>
   <input type="text" name="lastname">
<br>
  Password <br>
   <input type="password" name="password">

<br>
   Email <br>
   <input type="email" name="email">

   <br>
   gender <br>
   <input type="radio" name="gender" value="Male">Male
   <input type="radio" name="gender" value="Female">Female
<br><br><br>
<input type="submit" name="submit" value="submit">
   
</fieldest>
  </form>
</center>

  </html>
</head>