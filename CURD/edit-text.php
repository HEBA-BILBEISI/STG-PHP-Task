<?php
include"config.php";

if(isset($_POST['update_about_us'])){
$id = $_POST['id'];   
$text = $_POST['about_us'];

$sqli = "UPDATE `tbl_about_us` Set text='".$text."' WHERE id='".$id."'";

$result = $conn->query($sqli);
if ($result == TRUE){
echo "New Text Updated succesfully";
header("Location: view.php");
} else {
    echo"Erorr:".$sqli."<br>".$conn->erorr ;
}
}

if(isset($_GET['about_us_id'])){
    $id = $_GET['about_us_id'];

    $sqli = "SELECT *  FROM tbl_about_us where id = $id";
    $result = mysqli_query($conn, $sqli) ;			

// print_r($result);
// die();
}

// =====================================
 
?>

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
    

<form action="" method="POST">

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>  
    <?php
if ( isset($result->num_rows) && $result->num_rows >0) {
    // if($result->num_rows > 0){
    While ($row=$result->fetch_assoc()){
        ?>
    <td> <?php echo $row['id'];?> </td>  
    <td> <textarea name="" id="" cols="30" rows="10"><?php echo $row['text'];?></textarea> </td> 
<?php 
    }
}
?>

    <a class="btn btn-info" href="edit-text.php?id=<?php echo $row['id'];?>">Update </a>
    </table>
</form>
<!-- <script>
            $(document).ready(function() {
                $("#txtEditor").Editor();
            });
        </script> -->
</body>
</html>