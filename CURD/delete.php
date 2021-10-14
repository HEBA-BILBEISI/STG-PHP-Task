      <!-- *********************************Delete Forms********************************** -->

      <?php
        include "config.php";
        if (isset($_GET['id'])) {
            $user_id = $_GET['id'];

            $sql = "DELETE FROM `users` WHERE `id`='$user_id'";
            $result = $conn->query($sql);

            if ($result == TRUE) {
                // echo "New Record deleted succesfully";
            } else {
                echo "Error" . $sql . "<br>" . $conn->error;
            }
        }
        ?>
      <br><br>
      <!-- <a href="view.php" class="next">Go Back &raquo;</a> -->


      <!-- *********************************Delete Cards************************************ -->

      <?php
        include "config.php";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $sqli = "DELETE FROM  user WHERE id='" . $id . "'";
            $result = $conn->query($sqli);

            if ($result == TRUE) {
                // echo "New Image deleted succesfully";
            } else {
                echo "Error" . $sqli . "<br>" . $conn->error;
            }
        }
        ?>

      <!-- *********************************Delete images************************************ -->

      <?php
        include "config.php";
        if (isset($_GET['id'])) {
            $image_id = $_GET['id'];

            $sqli = "DELETE FROM  tbl_multiple_images WHERE image_id='" . $image_id . "'";
            $result = $conn->query($sqli);

            if ($result == TRUE) {
                // echo "New Image deleted succesfully";
            } else {
                echo "Error" . $sqli . "<br>" . $conn->error;
            }
        }
        ?>

      <!-- *********************************Delete Text About Us************************************ -->

      <?php
        include "config.php";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $sqli = "DELETE FROM  tbl_about_us WHERE id='" . $id . "'";
            $result = $conn->query($sqli);

            if ($result == TRUE) {
                // echo "deleted succesfully";
            } else {
                echo "Error" . $sqli . "<br>" . $conn->error;
            }
        }
        ?>
      <br><br>
      <!-- <a href="view.php" class="next">Go Back &raquo;</a> -->











      <br><br>
      <!-- 
 <script>setTimeout(() => {
          window.location.href = "view.php";
        }, 5000);</script> -->
      <!-- *********************************Delete About Us Text ************************************ -->



      <!DOCTYPE html>
      <html lang="en">

      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
          <title>Document</title>
      </head>

      <body>



          <div class="jumbotron text-center">
              <h1 class="display-3" style=" font-family: sans-serif !important;">New Record deleted succesfully</h1>

              <img src="https://i.pinimg.com/originals/ff/fa/9b/fffa9b880767231e0d965f4fc8651dc2.gif" />

              <br>
              <br>
              <br>



          </div>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
          <script>
              setTimeout(() => {
                  window.location.href = "view.php";
              }, 5000);
          </script>';
      </body>

      </html>