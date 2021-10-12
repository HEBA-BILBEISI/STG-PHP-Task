
<!-- ******************************************Form Update******************************************************* -->

<?php
 include"config.php";

 if(isset($_POST['updates'])){
 $image_id = $_POST ['firstname'];   
 $last_name = $_POST ['lastname'];
 $email = $_POST ['email'];
 $password = $_POST ['password'];
 $gender = $_POST ['gender'];
 $sql = "UPDATE 'users' Set 'firstname'= '$first_name' ,'lastname'='$last_name' ,'email'='$email',
 'password'='$password' ,'gender'='$gender' WHERE 'id'='$user_id'";


 $result = $conn ->query ($sql);

 if ($result == TRUE){
 echo "New Record Updated succesfully";
 } else {
     echo "Erorr" . $sql. "<br>". $conn -> erorr ;
 }
 }

 if(isset($_GET['id'])){
     $user_id = $_GET['id'];
     $sql = "SELECT * FROM 'users' WHERE 'id'= '$user_id'";

     $result = $conn->query ($sql);
     if($result->nom_rows > 0){
     While ($row = $result->dba_fetch_assoc()){
         $first_name = $row['firstname'];
         $last_name = $row['lastname'];
         $email = $row['email'];
         $password = $row['password '];
         $gender = $row['gender'];
         $id = $row['id'];
 var_dump($row);
     }
     ?>   
     }
<h2>USers Update Form</h2>
<form action="" method="post">
    <fieldest>
      <legend>Personal Information</legend>  
First Name:<br>
<input type="text" name="firstname" value="<?php echo $first_name; ?>">
<input type="hidden" name="user_id" value="<?php echo $id; ?>">
<br>
Last Name: <br>
<input type="text" name="lastname" value="<?php echo $last_name; ?>">
<br>
Email: <br>
<input type="email" name="email" value="<?php echo $email; ?>">
<br>
Password: <br>
<input type="pasword" name="password" value="<?php echo $password; ?>">
<br>
Gender: <br>
<input type="radio" name="gender" value="Male"<?php 
 echo if($gender =='Male'){echo "checked";}
?>>Male
<input type="radio" name="gender" value="Female"<?php 
 echo if($gender =='female'){echo "checked";} 
?> > Female
<br> <br>
<input type="submit" value="Update" name="update">

</fieldest>    
</form>
))
</body>
</html> 

<?php
    }else{
        header('location:viwe.php')
    }
?>




