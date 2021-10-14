<!-- ******************************************Updats Cards******************************************************* -->
<?php
include "config.php";

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
    // var_dump($result);
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

<h2>Cards Update Form</h2>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $id ?>" />
    <input type="text" value="<?php echo $name ?>" name="name">
    <input type="email" value="<?php echo $email  ?>" name="email">
    <input type="number" value="<?php echo $number ?>" name="number">
    <input type="submit" value="Update" name="update_card">
</form>
<div class="jumbotron text-center">
    <h1 class="display-3" style=" font-family: sans-serif !important;">New Record Updated succesfully</h1>

    <img src="https://i.stack.imgur.com/ZRTb6.gif" />

    <br>
    <br>
    <br>



</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<!-- <script>setTimeout(() => {
          window.location.href = "view.php";
        }, 5000);</script>'; -->
</body>

</html>