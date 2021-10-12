<!-- ******************************************Updats Silder Images******************************************************* -->
<?php
include"config.php";

if(isset($_POST['update_img'])){
    $image_id = $_POST['image_id'];  
    // $image_name = $_POST['image_name'];
    $image_name = $_POST['new_image'];    
    
    $sql="UPDATE tbl_multiple_images Set image_name='$image_name' WHERE  image_id='$image_id'";

$result= $conn->query($sql);
if ($result == TRUE){
echo "New Image Updated succesfully";
} else {
    echo "Error".$sql."<br>".$conn->error ;
}
}

if(isset($_GET['edit_image_id'])){
    $image_id = $_GET['edit_image_id'];
    $sql = "SELECT * FROM tbl_multiple_images 
    WHERE image_id='".$image_id."'";
    $result = $conn->query ($sql);
    if($result->num_rows > 0){
    While ($row = $result->fetch_assoc()){
       $id = $row['image_id'];
         $image_name = $row['image_name'];
        }
}
}
     ?>   




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/view.css">
    <title>Update Images</title>
</head>
<body>

<div class="img-table">
<h2>Update Images</h2>
<form method="post" action="" >
 <input type="hidden" name="image_id" value="<?php echo $image_id ?>"/>
 <!-- <input type="text" name="image_name" value="<?php echo $image_name ?>"/> -->

   <img src="images/<?php echo $image_name ?>"> 
      <input type="file" name="new_image"/>
    <input type="submit" value="Update" name="update_img"> 
 
</form>
</div>

</body>
</html>