<?php
include "config.php";
include "nav.php";
// session_start();

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
  <link rel="stylesheet" href="./css/index.css">

  <title>Home page</title>

</head>

<body>
  <!-- ***********************************************Silder Of Images*********************************************** -->

  <div class="container w-100 d-block" style="height:100vh;">
    <div class="row" style="height:100vh;">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://images.unsplash.com/photo-1596079890744-c1a0462d0975?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="First slide">
          </div>
          <?php
          include "config.php";
          $_imageSliderQuery = "SELECT image_id , image_name FROM  tbl_multiple_images ";
          $result = mysqli_query($conn, $_imageSliderQuery);
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <!-- Wrapper for slides -->
            <div class="carousel-item">
              <img src="images/<?php echo $row['image_name'] ?? 'none'  ?>" class='d-block w-100'>;
            </div>
          <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <!-- ***********************************************About Us*********************************************** -->


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

  <!-- ***********************************************Contact Us*********************************************** -->
  <?php
  include "config.php";

  ?>

  <div class="contact">
    <center>
      <h1>Contact Us</h1>

      <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">

        <div class="contact-form">
          <form>

            <div class="form-group">
              <div class="response"></div>
            </div>

            <div class="form-group">
              <input type="text" id="name" name="name" placeholder="Your Name *" required>
            </div>

            <div class="form-group">
              <input type="email" id="email" name="email" placeholder="Your Email *" required>
            </div>

            <div class="form-group">
              <input type="number" id="number" name="number" value="number" placeholder="Your Number *" required>
            </div>

            <div class="form-group">
              <textarea name="msg" id="msg" placeholder="Text Message" value="msg"></textarea>
            </div>

            <p>Choose your language:</p>

            <input type="checkbox" id="lang" name="lang" value="Arabic">
            <label> Arabic</label>
            <input type="checkbox" id="lang" name="lang" value="English">
            <label> English</label><br>

            <p>Choose your favorite Web language:</p>


              <input type="radio" id="web_lang" name="web_lang" value="HTML">
              <label for="web_lang">HTML</label><br>
              <input type="radio" id="web_lang" name="web_lang" value="CSS">
              <label for="web_lang">CSS</label><br>
              <input type="radio" id="web_lang" name="web_lang" value="JavaScript">
              <label for="web_lang">JavaScript</label>
            <div class="form-group">
              <button class="button submit" type="submit" id="submitt" name="submitt">Send</button>
            </div>
          </form>
        </div>
      </div>
  </div>
  </div>
  </div>

  </center>
  </div>
  </div>



  <!-- ***********************************************Footer*********************************************** -->
  <br><br><br>
  <div class='container-fluid'>
    <div class='row'>
      <div class="col-7">
        <a href="https://www.facebook.com/strongest.card/" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-snapchat-ghost"></a>
        <!-- <a href="snapchat.jpg" class="fa fa-snapchat-ghost" style="width: 200px !important; height: 225px "></a> -->


      </div>
      <div class="col-5">
        <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
          <iframe src="https://maps.google.com/maps?q=Madryt&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</body>

</html>




<!-- ****************************************Contuct Us Ajax************************************************ -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $("form").submit(function(event) {

      var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        number: $("#number").val(),
        msg: $("#msg").val(),
        lang: $("#lang").val(),
        web_lang: $("#web_lang").val(),
        submitt: ''
      };

      $.ajax({
        type: "POST",
        url: "response.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function(data) {
        console.log(data);
      });

      event.preventDefault();
    });
  });
</script>