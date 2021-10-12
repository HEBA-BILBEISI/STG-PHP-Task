<?php
include "config.php";

if(isset($_POST['updates'])){
$first_name = $_POST ['firstname'];   
$last_name = $_POST ['lastname'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$gender = $_POST ['gender'];
$sql = "UPDATE 'users' Set 'firstname'= '$first_name' ,'lastname'='$last_name' ,'email'='$email',
'password'='$password' ,'gender'='$gender' WHERE 'id'='$user_id'";


$result=$conn->query($sql);

if ($result == TRUE){
echo "New Record Updated succesfully";
} else {
    echo "Error". $sql."<br>".$conn ->error ;
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

    }
     ?>   
    }