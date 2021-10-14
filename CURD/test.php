<!-- ******************************************Updats Cards******************************************************* -->
<?php
include "config.php";
echo json_encode(array(
  'status' => '',
  'id' => $_POST['id'],
  'name' => $_POST['name'],
  'email' => $_POST['email'],
  'number' => $_POST['number']
));


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>ُEditing PopUp</title>
</head>

<body>


  <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <?php

    if (isset($_POST['update_card'])) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];

      // $id = $_POST['id'];
      $sql = "UPDATE user
   Set name='" . $name . "',email='" . $email . "',number='" . $number . "' WHERE  id='$id'";



      $result = $conn->query($sql);
      if ($result == TRUE) {
        echo "New Card Updated succesfully";
      } else {
        echo "Error" . $sql . "<br>" . $conn->error;
      }
    }
    if (isset($_GET['card_id'])) {
      $id = $_GET['card_id'];
      $sql = "SELECT * FROM user WHERE id='" . $id . "'";

      $result = $conn->query($sql);
      var_dump($result);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $number = $row['number'];
        }
      }
    }
    ?>

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">ُEdit Card </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <!-- <i class="fas fa-user prefix grey-text"></i> -->
            <label data-error="wrong" data-success="right" for="form34">Edit Name</label>
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <input type="text" id="name" value="<?php echo $name ?>" name="name" class="form-control validate">

          </div>

          <div class="md-form mb-5">
            <!-- <i class="fas fa-envelope prefix grey-text"></i> -->
            <label data-error="wrong" data-success="right" for="form29">Edit Email</label>
            <input type="email" id="email" value="<?php echo $email  ?>" name="email" class="form-control validate">

          </div>

          <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="form32">Number</label>

            <!-- <i class="fas fa-tag prefix grey-text"></i> -->
            <input type="number" id="number " value="<?php echo $number ?>" name="number" class="form-control validate">
          </div>


        </div>
        <div class="modal-footer d-flex justify-content-center">
          <input type="submit" value="Update" name="update_card" class="btn btn-success btn-rounded mb-4">
          <!-- <button class="btn btn-danger">Submit<i class="fas fa-paper-plane-o ml-1"></i></button> -->
        </div>
      </div>
    </div>
  </div>

  <div class="text-center">
    <a href="" class="btn btn-success btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Edit</a>
  </div>

  <!-- 

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->

  <!-- *********************************************Imagessss**************************************************** -->
  <!-- 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="pic1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pic2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pic3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 -->




</body>

</html>

<?php
// include"config.php";
// include"nav.php";
// session_start();

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box
    }

    body {
      font-family: Verdana, sans-serif;
      margin: 0
    }

    .mySlides {
      display: none
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

      .prev,
      .next,
      .text {
        font-size: 11px
      }
    }
  </style>
</head>

<body>

  <div class="slideshow-container">

    <?php
    //  include"config.php";
    // //  $image_id=$_GET['img_id'];
    // $_imageSliderQuery="SELECT image_id , image_name FROM  tbl_multiple_images ";
    // $result=mysqli_query($conn,$_imageSliderQuery) ;
    // while ($row=mysqli_fetch_assoc($result)){
    ?>
    <!-- <div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
 <?php echo "<img src='images/" . $row['image_name'] . "'>";  ?>
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <?php echo "<img src='images/" . $row['image_name'] . "'>";  ?>
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <?php echo "<img src='images/" . $row['image_name'] . "'>";  ?>
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<?php
// }
?>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> -->

    <!-- <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script> -->

</body>

</html>



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  $(function() {
        $('body').on('click', '.submit', function(e) {
          e.preventDefault();

          $.ajax({
            type: 'POST',
            url: '#',
            data: {
              id: $("#id").val(),
              name: $("#name").val(),
              email: $("#email").val(),
              number::$("#number").val(),


            },
            dataType: 'json',
            success: function(data) {
              message: "success";
              success: true
              console.log(data);
              alert(data)

            }
          });
        });
</script>