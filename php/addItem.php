<?php
include_once('../includes/connectionmenu.php'); 

    $sql = ("INSERT INTO menu(Food, Description, Price) VALUES (:food,:description,:price)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':food',$_POST['Name']);
    $stmt->bindParam(':description',$_POST['Desc']);
    $stmt->bindParam(':price', $_POST['Price']);
    $stmt -> execute();

    header("Location: ../admin/addDish.php");
    
?>
