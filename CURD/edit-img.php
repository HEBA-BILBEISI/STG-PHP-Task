<?php
include"config.php";


if(isset($_POST['updates'])){
$image_id = $_POST ['image_id'];   
$image_name = $_POST ['image_id'];


$sql = "UPDATE 'tbl_multiple_images' Set 'image_id'= '".$image_id."' ,'image_name'='".$image_name."' 
WHERE 'id'='$image_id'";


$result = $conn ->query ($sql);

if ($result == TRUE){
echo "New Image Updated succesfully";
} else {
    echo "Erorr:" . $sql. "<br>". $conn -> erorr ;
}
}

if(isset($_GET['id'])){
    $image_id = $_GET['id'];
    $sql = "SELECT * FROM 'tbl_multiple_images' WHERE 'id'= '$image_id'";

    $result = $conn->query ($sql);
    if($result->num_rows > 0){
    While ($row = $result->fetch_assoc()){
        $image_id = $row['image_id'];
        $image_name = $row['image_name'];
        $id = $row['id'];

    }
}}?>

<form action="" method="post">
<div class="img-table">
    <h2>Slider Editor</h2>
    <table class="table">
        <thead>
        <tbody>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image Display</th>
                <th> Action</th>
</tr>
</thead>
<tbody>
<?php
  $_imageSliderQuery = "SELECT * FROM tbl_multiple_images";
  $result = $conn ->query($_imageSliderQuery);
while($row= $result-> fetch_assoc()){
    ?>  
    <tr>
        <td> <?php echo $row['image_id']; ?> </td>  
        <td> <?php echo $row['image_name']; ?> </td>  
        <td> <?php echo "<img src='images/".$row['image_name']."'>"; ?> </td>  
        <td> <a class="btn btn-info" href="edit-img.php?id= <?php echo $row['image_id'];?>">Edit </a>
        <a class="btn btn btn-danger" href="delete.php?id= <?php echo $row['image_id'];?> ">Delete</a>
     </td>  
<?php
    }
    ?>
</tbody>
</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/view.css">




</head>
<body>
    
</body>
</html>