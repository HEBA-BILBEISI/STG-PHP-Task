<?php
include "config.php";



if (isset($_POST['submitt'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $msg = $_POST['msg'];
   $lang = $_POST['lang'];
   $web_lang = $_POST['web_lang'];


   $sql = "INSERT INTO tbl_contact_us (name,email,number,msg,lang,web_lang)
VALUES ('$name','$email','$number','$msg','$lang','$web_lang')";
   // var_dump($sql);
   // echo '<script type="text/javascript">alert("' . $sql . '")</script>';
   $result = $conn->query($sql);
   if ($result == TRUE) {
   } else {
   }
   $conn->close();

   // $errors = [];
   // $data = [];

   // if (empty($_POST['name'])) {
   //     $errors['name'] = 'Name is required.';
   // }

   // if (empty($_POST['email'])) {
   //     $errors['email'] = 'Email is required.';
   // }

   // if (empty($_POST['number'])) {
   //     $errors['number'] = 'Number is required.';
   // }

   // if (!empty($errors)) {
   //     $data['success'] = false;
   //     $data['errors'] = $errors;
   // } else {
   //     $data['success'] = true;
   //     $data['message'] =$sql;
   // }

   // echo json_encode($data);

}
