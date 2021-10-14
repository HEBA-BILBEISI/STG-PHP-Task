<?php
include "config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $text = $_GET['text'];

    $sqli = "DELETE FROM  tbl_about_us WHERE id='" . $id . "'";
    $result = $conn->query($sqli);

    if ($result == TRUE) {
        echo "deleted succesfully";
    } else {
        echo "Error" . $sqli . "<br>" . $conn->error;
    }
}
?>
<br><br>
<a href="view.php" class="next">Go Back &raquo;</a>