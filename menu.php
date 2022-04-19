<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka&family=Oswald:wght@500&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title>World Of Sushi</title>
  </head>
  <body>
    <div class="header">
      <div class="logo">
        <a href="index.html">
          <img src="images/logo.png">
        </a>
      </div>
      <p class="textLogo">
        Sushi & Grill<br />
        Restaurant
      </p>
      <div class="navbar">
        <a href="index.html">Home</a>
        <a href="menu.php">Menu</a>
        <a href="order.php">Order</a>
        <a href="contact.html">Contact</a>
      </div>
    </div>
    <div class="main-container">
      <table>
        <tr>
          <th>Dish</th>
          <th>About the dish</th>
          <th>Price</th>
          </tr>
    <?php include_once('includes/connectionmenu.php'); 
    $sql = 'SELECT * FROM menu';
    
    foreach ($conn->query($sql) as $row) {
      echo("<tr>");
      echo("<td>" . $row['Food']. "</td>");
      echo("<td>" . $row['Description']. "</td>");
      echo("<td>" . $row['Price']. "</td>");
      echo("</tr>");
      
    }
    ?>
      </table>
      <div class="footer">
        <div class="linkjes">
          <a href="index.html">Home</a>
          <a href="menu.html">Menu</a>
          <a href="about.php">About</a>
          <a href="contact.html">Contact</a>
        </div>
        <div class="linkjes">
        <p>Straatnaam 123</p>
        <a href="https://www.google.com/maps/place/Sushi+Daily/@51.8226034,5.8647081,14z/data=!4m9!1m2!2m1!1ssushi+winkel!3m5!1s0x47c709b53575982f:0x95433fd083e7f5d6!8m2!3d51.8382798!4d5.874737!15sCgxzdXNoaSB3aW5rZWxaDiIMc3VzaGkgd2lua2VskgEOc3VzaGlfdGFrZWF3YXk">Locatie</a>

        </div>
        <div class="linkjes">
          <a href="login.php">Login</a>
          <a href="login.php">Admin panel</a>
        </div>
        <div class="linkjes">
          <p>©World of Sushi inc.</p>
          <p>The fulfiller of all your sushi dreams</p>
          <a href="index.html">www.world-of-sushi.com</a>

        </div>
      </div>
      </div>
    </div>

  </body>
</html>
