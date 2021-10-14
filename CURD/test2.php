<?php


// if ($_POST['save']){
// $space = $_POST['textspace'];
// $myFile = "testFile.txt";
// $fh = fopen($myFile, 'w') or die("can't open file");

// fwrite($fh, $space);

// fclose($fh);
// echo "Saved"; 
// } 

// if ($_POST['edit']){
// $textspace="rajan";
// } 

// if ($_POST['show']){
// $myFile = "testFile.txt";
// $fh = fopen($myFile, 'r');

// if(filesize($myFile)!=0){
// $theData = fread($fh, filesize($myFile));
// }else{
// echo "The file is empty";
// }
// fclose($fh);
// echo $theData;
// } 
?>


<!-- <form action="update" method="post">		
<fieldset>
<legend>
About us
</legend>
<textarea  id='user' name="textspace" value="'.$textspace.'" cols="40" rows="3" ></textarea> 
<br>
<input type="submit" name="save" value='save'/>
<input type="submit" name="edit" value='edit'/>
<input type="submit" name="show" value='show'/>

<br>
<p><b id='boldStuff2'></b> </p> 

</fieldset>
</form> -->


<?php
include "config.php";

//SingUp Form
$sql = "SELECT *FROM users";
$result = $conn->query($sql);



function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// GET USERS Using card
$sql = "SELECT id,name,email,number  FROM user";
$result = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));


// About us 
$about    = "SELECT id , text from tbl_about_us";
$about_us = $conn->query($about);
$row      = $about_us->fetch_assoc();
// print_r($row);
// exit;

?>



<!-- *****************************************HTML***************************************** -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Page</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/view.css">
</head>

<body>

  <?php
  include "nav.php";
  ?>

  <br>
  <center>
    <h1>Admin Dashboard </h1>
  </center>
  <br>
  <!-- ********************************* Cards************************************* -->

  <?php

  // cards 
  $cards  = "SELECT * from user";
  $cards = $conn->query($cards);
  $row   = $about_us->fetch_assoc();
  ?>

  <?php while ($record = mysqli_fetch_assoc($result)) { ?>

    <div class="card border-primary mb-4  style=max-width: 18rem;   border-radius: 50px 0 50px 0;">
      <div class="card-header"><a href="#"><?php echo $record['name']; ?></a>
      </div>
      <div class="card-body text-primary">
        <h5 class="card-title"><?php echo $record['email']; ?></h5>
        <p class="card-text"><?php echo $record['number']; ?></p>

        <a class="btn btn-info" href="update.php?card_id=<?php echo $record['id']; ?>">Edit </a>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

















        <a class="btn btn btn-danger" href="delete.php?id=<?php echo $record['id']; ?> ">Delete</a>
      </div>
    </div>

  <?php } ?>
  <br><br><br><br>

  <!-- *********************************** pagination************************************ -->
  <br><br><br><br> <br><br><br><br>


  ​<div class="pagination ">

    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">&raquo;</a>
  </div>



</body>

</html>