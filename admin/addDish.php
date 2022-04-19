<?php include_once('../includes/session.php');
include_once('../includes/connectionmenu.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time(); ?>">
    <script src="../js/main.js"></script>
    <title>Admin home page</title>
  </head>
  <body>
    <div class="navbar">
      <ul>
        <li><a href="adminpage.php">Menu</a></li>
        <li><a class="active" href="addDish.php">New Product</a></li>
        <li><a href="reservations.php">Reservations</a></li>
        <li style="float: right">
          <a class="logout" href="../php/logout.php">Log out</a>
        </li>
      </ul>
      <div class="main-container">
      <table class="small">
        <tr>
          <th>Dish</th>
          <th>About the dish</th>
          <th>Price</th>
          <th>ID</th>
          </tr>
    <?php  
    $sql = 'SELECT * FROM menu';
    
    foreach ($conn->query($sql) as $row) {
      echo("<tr>");
      echo("<td>" . $row['Food']. "</td>");
      echo("<td>" . $row['Description']. "</td>");
      echo("<td>" . $row['Price']. "</td>");
      echo("<td>" . $row['ID']. "</td>");
      echo("</tr>");
    }
    ?>
    <div class="insert">
    <h1>Add to menu</h1>
<form action="../php/addItem.php" method="post">
Name of the dish: <input type="text" name="Name"><br>
Description: <input type="text" name="Desc"><br>
Price: <input type="number" name="Price"><br>
<input type="submit" value="Add">
</form>
<div class="update">
<form action="../php/updateItem.php" method="post">


<h1>Update menu</h1>
ID of the dish to update: <input type="number" name="ID"><br>
Name of the dish: <input type="text" name="Name"><br>
Description: <input type="text" name="Desc"><br>
Price: <input type="number" name="Price"><br>
<input type="submit" value="Update">
</form>
  </div>
        </div>
      </div>

    </div>
  </body>
</html>
