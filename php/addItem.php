<?php
include_once('../includes/connectionmenu.php'); 

    $Food =  $_REQUEST['Name'];
    $Description = $_REQUEST['Desc'];
    $Price =  $_REQUEST['Price'];
    $sql = ("INSERT INTO `menu`(`Food`, `Description`, `Price`) VALUES ('$Food','$Description','$Price')");
    $stmt = $conn -> prepare($sql);

    $stmt -> execute();

    header("Location: ../admin/addDish.php");
    
    
?>
