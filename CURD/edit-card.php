<?php
include"config.php";

if(isset($_POST['update'])){
$id = $_POST['id'];   
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];


$sql = "UPDATE user Set id='$id' WHERE name='$name' ,email='$email',number='$number'";

$result = $conn->query($sql);
if ($result == TRUE){
echo "New Card Updated succesfully";
} else {
    echo"Erorr:".$sql."<br>".$conn->erorr ;
}
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id='".$id."' ";

    $result = $conn->query ($sql);
}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/view.css">
</head>
<body>
     <form action="" method="POST">
 <div class="cards">
     <table class="cards">
         <thead>
         <tbody>
             <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th> Email</th>
                 <th> Number</th>
                 <th> Action</th>
 </tr>
 </thead>
 <tbody>
 
     <tr>
         <?php
              While ($row=$result->fetch_assoc()){  
       ?>
       <td> <?php echo $row['id'];?> </td>  
        <td> <?php echo $row['name'];?> </td> 
        <td> <?php echo $row['email'];?> </td> 
        <td> <?php echo $row['number'];?> </td>  
        <td> <a class="btn btn-info" href="update.php?id=<?php echo $row['id'];?>">Edit </a>
        <a class="btn btn btn-danger" href="delete.php?id=<?php echo $row['id'];?> ">Delete</a>
     </td>  
<?php
     }
?>
</tbody>
</table>
</body>
</html>


