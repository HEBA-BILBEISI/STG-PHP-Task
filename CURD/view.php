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
$sql = "SELECT id,name,email,number FROM user";
$result = mysqli_query($conn, $sql);


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
  <!-- **************************************************Cards***************************************************** -->
  <?php
  include "config.php";

  //define total number of results you want per page  
  $results_per_page = 3;

  //find the total number of results stored in the database  
  $query = "select * from user";
  $result = mysqli_query($conn, $query);
  $number_of_result = mysqli_num_rows($result);

  //determine the total number of pages available  
  $number_of_page = ceil($number_of_result / $results_per_page);

  //determine which page number visitor is currently on  
  if (!isset($_GET['page'])) {
    $page = 1;
  } else {
    $page = $_GET['page'];
  }

  //determine the sql LIMIT starting number for the results on the displaying page  
  $page_first_result = ($page - 1) * $results_per_page;
  //retrieve the selected results from database   same to setoff func
  $query = "SELECT *FROM user LIMIT " . $page_first_result . ',' . $results_per_page;
  $result = mysqli_query($conn, $query);

  //display the retrieved result on the webpage 


  while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="cards">
      <!-- col-lg-4 col-md-6 col-sm-12 -->
      <div class="card border-primary mb-4 ">
        <div class="card-header"><a href="#"><?php echo $row['name']; ?></a>
        </div>
        <div class="card-body text-primary">
          <h5 class="card-title"><?php echo $row['email']; ?></h5>
          <p class="card-text"><?php echo $row['number']; ?></p>
          <a class="btn btn-info" href="update.php?card_id=<?php echo $row['id']; ?>">Edit </a>
          <a class="btn btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?> ">Delete</a>

        </div>
      </div>
    </div>
  <?php }

  for ($page = 1; $page <= $number_of_page; $page++) {
    echo '<a href = "view.php?page=' . $page . '">' . $page . ' </a>';
  }

  ?>


  <br><br><br><br> <br><br><br><br> <br><br>
  <!-- ************************************* About Us Section ************************************** -->
  <br>
  <div class="container">
    <center>
      <h1>About Us </h1>
    </center>

    <?php
    // About us 
    $about    = "SELECT * from tbl_about_us";
    $about_us = $conn->query($about);
    $row      = $about_us->fetch_assoc();
    ?>

    <form action="edit-text.php" method="post">
      <input type="hidden" value="<?php echo $row['id']; ?>" name="id" />
      <!-- <div class="about_us"  contentEditable="true"><?php echo $row['text']; ?></div> -->

      <textarea name="about_us" rows="5" cols="40">
    <?php
    echo $row['text'];
    ?>
    </textarea>
      <br><br>

      <input type="submit" class="btn btn btn-success" name="update_about_us" value="Update">
      <!-- <a class="btn btn btn-danger" href="delete.php?id= <?php echo $row['id']; ?> ">Delete</a> -->

    </form>



    <br>
    <div class="container about-style" name="about_us">
      <h1>About Us </h1>
      <?php
      $sql = "SELECT * FROM  tbl_about_us";
      $result = mysqli_query($conn, $sql);

      $row = mysqli_fetch_assoc($result)


      ?>
      <?php echo $row['text']; ?>
    </div>


    <br><br>
    <!-- <div class="bttns">
        <a class="btn btn-info" href="edit-text.php?id=<?php echo $row['id']; ?>">Edit </a>
        

</div> -->

    <!-- ****************************************  Slider Editor table ************************************* -->
    <br><br> <br><br> <br><br>



    <div class="container">
      <div class="row">
        <div class="col-12">
          <h4>Multiple Image Upload</h4>
          <hr>
          <form method="post" enctype="multipart/form-data" action="file-upload.php">
            <div class="form-group">
              <input type="file" name="image[]" class="form-control" multiple />
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>


    <div class="img-table">
      <h2>Slider Editor</h2>
      <table class="table">
        <thead>
        <tbody>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image Status</th>
            <th>Image Display</th>
            <th>Image Create time</th>
            <th> Action</th>
          </tr>
          </thead>
        <tbody>
          <?php
          $_imageSliderQuery = "SELECT * FROM tbl_multiple_images";
          $result = $conn->query($_imageSliderQuery);
          while ($row = $result->fetch_assoc()) {
          ?>
            <tr>
              <td> <?php echo $row['image_id']; ?> </td>
              <td> <?php echo $row['image_name']; ?> </td>
              <td> <?php echo $row['image_createtime']; ?> </td>
              <td> <?php echo "<img src='images/" . $row['image_name'] . "'>"; ?> </td>
              <td> <?php echo $row['image_createtime']; ?> </td>
              <td> <a class="btn btn-info" href="update-img.php?edit_image_id= <?php echo $row['image_id']; ?>">Edit </a>
                <a class="btn btn btn-danger" href="delete.php?id= <?php echo $row['image_id']; ?> ">Delete</a>
              </td>

            <?php  } ?>

        </tbody>
      </table>

      </form>
    </div>
    <br><br>

    <!-- ****************************************** Singup form table *************************************** -->


    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td> <?php echo $row['id']; ?> </td>
          <td> <?php echo $row['firstname']; ?> </td>
          <td> <?php echo $row['lastname']; ?> </td>
          <td> <?php echo $row['email']; ?> </td>
          <td> <?php echo $row['gender']; ?> </td>
          <td> <a class="btn btn-info" href="update.php?id= <?php echo $row['id']; ?>">Edit
          </td>
          <td> <a class="btn btn btn-danger" href="delete.php?id= <?php echo $row['id']; ?> ">Delete
          </td>
      <?php
      }
    }
      ?>

      <script src="js/jquery.min.js"></script>
</body>

</html> -->


<!-- ****************************************** Conatact form table *************************************** -->


<div class="container">
  <h2>Contact Us</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>email</th>
        <th>Number</th>
        <th>Massege</th>
        <th>language</th>
        <th>Web languages</th>
      </tr>
    </thead>
    <tbody>

      <?php
      // if($result->num_rows>0){
      //     while($row= $result-> fetch_assoc()){

      $sql = "SELECT * FROM tbl_contact_us";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {

      ?>



        <tr>
          <td> <?php echo $row['id']; ?> </td>
          <td> <?php echo $row['name']; ?> </td>
          <td> <?php echo $row['email']; ?> </td>
          <td> <?php echo $row['number']; ?> </td>
          <td> <?php echo $row['msg']; ?> </td>
          <td> <?php echo $row['lang']; ?> </td>
          <td> <?php echo $row['web_lang']; ?> </td>

        <?php
      }

        ?>