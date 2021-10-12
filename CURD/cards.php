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

    <title>Document</title>
</head>
<body>
    <?php  
  include "config.php";

    //define total number of results you want per page  
    $results_per_page = 3;  
  
    //find the total number of results stored in the database  
    $query = "select * from user";  
    $result = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($result);  
  
    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
  
    //retrieve the selected results from database   
    $query = "SELECT *FROM user LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = mysqli_query($conn, $query);  
      
    //display the retrieved result on the webpage 

    // while ($row = mysqli_fetch_array($result)) {  
    //     echo $row['id'] . ' ' . $row['name'] . '</br>';  
    // }  

 while( $row=mysqli_fetch_assoc($result)){ ?>
 
    <div class="card border-primary mb-4 ">
      <div class="card-header"><a href="#"><?php echo $row['name']; ?></a>
    </div>
      <div class="card-body text-primary">
        <h5 class="card-title"><?php echo $row['email']; ?></h5>
        <p class="card-text"><?php echo $row['number']; ?></p>
      
      </div>
    </div> 
     
    <?php }  
 
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '<a href = "cards.php?page=' . $page . '">' . $page . ' </a>';  
    }  
  
?>  

<?php

// cards 
$cards  = "SELECT * from user";
$cards = $conn->query($cards);
?>



</body>
</html>











<!-- ********************************* Cards************************************* -->
                                
<?php

// cards 
$cards  = "SELECT * from user";
$cards = $conn->query($cards);
$row   = $about_us->fetch_assoc();
?>

<?php while( $record=mysqli_fetch_assoc($result)){ ?>
 
<div class="card border-primary mb-4 ">
  <div class="card-header"><a href="#"><?php echo $record['name']; ?></a>
</div>
  <div class="card-body text-primary">
    <h5 class="card-title"><?php echo $record['email']; ?></h5>
    <p class="card-text"><?php echo $record['number']; ?></p>
    <a class="btn btn-info" href="update.php?card_id=<?php echo $record['id'];?>">Edit </a>
        <a class="btn btn btn-danger" href="delete.php?id=<?php echo $record['id'];?> ">Delete</a>
  </div>
</div> 
 
<?php } ?>
<br><br><br><br>