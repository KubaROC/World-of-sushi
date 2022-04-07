<?php
include_once('../includes/connectionmenu.php'); 
    $sql = ("DELETE FROM menu WHERE ID =:ID");
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":ID", $_POST['ID']);
    $stmt -> execute();
    header("Location: ../admin/adminpage.php");
?>
