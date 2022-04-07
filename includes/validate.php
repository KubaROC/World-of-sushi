<?php
  
include_once('connection.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin WHERE adminname = :adminname");
    $stmt->bindParam(':adminname', $adminname);
    $stmt->execute();
    $user = $stmt->fetch();
          
    if(($user['adminname'] == $adminname) && 
        ($user['password'] == $password)) {
            session_start();
            $_SESSION["name"] = 'admin';

            header("Location: ../admin/adminpage.php");
            exit();
    }
    else {
        header("Location: ../login.php");
        exit();
    }
}
  
?>