
<?php
session_start();
include "config.php";


if (isset($_POST['submit_login'])) {
    $email    = $_POST["email_login"];
    $password = $_POST["password_login"];
    $results  = $conn->query("SELECT * FROM user where email ='" . $email . "' and password ='" . $password . "' ");
    $get_total_rows = $results->fetch_assoc();

    if ($get_total_rows['id'] > 1) {
        $_SESSION['user_id'] = $get_total_rows['id'];
        $_SESSION['name'] = $get_total_rows['name'];

        header('Location: index.php');
    } else {
        $error =  "User Not Found";
        echo $error;
    }
}
?>