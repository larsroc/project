<?php
session_start();

require "database.php";
?>
<!DOCTYPE html>
<html>
    <head>
       <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
       <link rel="stylesheet" type="text/css" href="css/home.css">
       <?php include 'menu.php';?>
    </head>
    <body>
  
  <div align="center"> 
  <a href="Admin.php">
  <img src="https://vignette.wikia.nocookie.net/bigbrotheruk/images/3/3e/Big_Brother_5.png/revision/latest?cb=20130505115729" 
  alt="www.kiddnation.com" 
  style="width:466px;height:370px;">
  </a>
  </div>
  
  <div class="B" align="center">
  <p>BigBrother</p>
  </div>
  
    </body>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</html>

<style type="text/css">
.B {
    font-family: 'Abril Fatface';font-size: 122px;
    position: absolute;
    top: 380px;
    left: 450px;
}
    
</style>