<!-- hebaaaaaaaaaaaaa -->
<?php
session_start();
include"config.php";


date_default_timezone_set('Asia/Ho_Chi_Minh');


// ************************************* Register***************************************

$msg ='';
$password2 ='';
$pass_not_match = '';

if (isset($_POST['submit'])) {
  
$name      = $_POST['name'];
$email     = $_POST['email'];
$password  = $_POST['password'];
$password2 = $_POST['password2'];
$number    = $_POST['number'];

// $password = sha1($_POST['password']);

if ($password == $password2) {

  $query = "INSERT INTO user( `name`, `email` ,`password` , `number`) VALUES 
                            ('$name','$email','$password','$number')";
    $result = $conn->query($query);
    
      if ($result) {
        $_SESSION['msg']='Register successful!';
        $_SESSION['status']=1;
        $_SESSION['name']=$name;
        header('Location: index.php');
    } else {
      $_SESSION['msg']= 'Register Failed!';
      $_SESSION['status']=0;
      unset($_SESSION['name']);
        header('Location: register.php');
    }
}else {
  $pass_not_match = 'Retype the password incorrectly!';
}


}



// ******************************* Login*********************************************


// if (isset($_POST['submit_login'])) {
//    $email    = $_POST["email_login"];
//    $password = $_POST["password_login"];
//    $results = $conn->query("SELECT * FROM user where email = '".$email."' and password = '".$password."' ");
//     $get_total_rows = $results->fetch_assoc();
//    var_dump($get_total_rows);
                                      
//    echo "test heba";  
//     $row= mysqli_fetch_assoc($results);
//    if ($row['user_id']) {
//        $_SESSION['user_id'] = $row['user_id'];
//        $_SESSION['user_name'] = $row['user_name'];
//        echo "sdasdasd";
//    // header('Location: index.php');
//    } else {
//        $error =  "User Not Found";
// echo $error;  
//    }
// }


// if (isset($_POST['submit'])) {
//     $email    = $_POST['email'];
//     $password = $_POST['password'];
//     $query = "select * from user where email = '$email' AND 
//                                         user_pass = '$password'";
//     $result = mysqli_query($conn, $query);
//     $row    = mysqli_fetch_assoc($result);
//     if ($row['user_id']) {
//         $_SESSION['user_id'] = $row['user_id'];
//         $_SESSION['user_name'] = $row['user_name'];
//     header('Location: index.php');
//     } else {
//         $error =  "User Not Found";
//     }
// }




// $use ='';

// if(isset($_POST['submit_login'])){
//   $email_log = $_POST['email_login'];
//   $password_log = $_POST['password_login'];
//   $query = "select * from user where email='".$email_log."' AND password ='".$password_log."'";
//   $result = $conn->query($query);
//     var_dump($result->rowcount());
    
//   if ($use !== NULL) {
//    setcookie('msg', 'Sign in successfull!');
//    $_SESSION['isLogin'] = true;
//    $_SESSION['use'] = $use;
//   // header('Location: index.php');
// } else {
//    setcookie('msg', 'Sign in failed! Try again!');
//  //  header('Location: login.php');
// }
// }


?>





<!-- **************************************************************************** -->




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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/login.css">
  
  <title>Login and Registration </title>
   </head>

   <body>

   <?php
   include"nav.php";

   ?>
<br> 
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>

            <!--  **********************************login Form*********************************** -->
            <div class="form-inner">
              
               <form action="login_action.php" class="login" method = 'POST'>
            <!-- <input name='submit_login' value='1'/> -->
                  <div class="field">
                     <input type="text" name ='email_login' placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name = 'password_login'  placeholder="Password" required>
                  </div>
                  <div class="$password-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name='submit_login'  value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               
               <!-- ********************************register form******************************************** -->

        
            <!-- <h1> <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?> </h1> -->

               <form action="#" class="signup" method = "POST">
               <div class="field">
                     <input type="text" name= 'name' placeholder="Full Name" required>
                  </div>
                  <div class="field">
                     <input type="text" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input id="password"  type="password" name = 'password' data-validate="Enter your password" placeholder="Password" required>
                  </div>
                  <div class="field">
                     <input id="password2"  type="password" name= 'password2' data-validate="Enter your password again" placeholder="Confirm password" required>

                     <?php
                        if ($pass_not_match != '') {
                          // failed :(
                            echo $pass_not_match;
                        }?>

                  </div>
                  <div class="field">
                     <input type="tel" name = 'number'  placeholder="Your Number" required>
                  </div>

                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name = 'submit' value="Signup">
                     
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>


        // function validate(){

        //     var a = document.getElementById("password").value;
        //     var b = document.getElementById("confirm_password").value;
        //     if (a!=b) {
        //        alert("Passwords do no match");
        //        return false;
        //     }
        // }
 

         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>
