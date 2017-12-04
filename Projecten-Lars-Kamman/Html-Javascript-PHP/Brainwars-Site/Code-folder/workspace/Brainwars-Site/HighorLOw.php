<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="css/game2.css">
      <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>

        <title> </title>
    </head>
    <body>
      
<?php
session_start();
require "database.php";
require "testinput.php";
?>



<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>


<div class="logo">
  
  <img src="http://www.kiddnation.com/wp-content/uploads/2014/05/high-low-game.png" 
  alt="www.kiddnation.com" 
  tyle="width:516px;height:403px;">
  
</div>

<div class="box">

  <div class="inner">
    <p><font size="60" color="black"><strong>Score:</strong></font><span id="score">0</span></p>
    <p id="end"></p>
    <p id="num">50</p>
  </div>
  
 <div class="btns">
    <input type="button" value="LOWER" class="btn" id="lower">
    <input type="button" value="HIGHER" class="btn" id="higher"><br>
<br>
    <INPUT TYPE="button" onClick="history.go(0)" VALUE="Opnieuw Spelen" id="R" class="knop">

  </div>
  
</div>

<div id="welkom">
  <h1>
  <?php 
  echo "Welkom " . $_SESSION["voornaam"] . "."; 
  ?>
  </h1>
</div>

      <script src="js/js.js" type="text/javascript"></script>
      
</body>
</html>


<style>
#welkom  {
    position: absolute;
    left: 520px;
    top: 90px;
    font-family: 'Bangers';font-size: 26px;
}
</style>

<style>
body  {
    background-image: url("img/b2.jpg");
    background-color: #cccccc;
}
.knop {
  margin-right: 10px;
  background-color: #EEE;
  border: 0;
  cursor: pointer;
  width: 414px;
  height: 50px;
  border-radius: 4px;
  -webkit-border-radius: 4px;
  box-shadow: 0 1px 1px #555;
  font-size: 32px;
}

#R {
  background-color: #D8D8D8;
}

#R:hover {
  background-color: #D3D3D3;
  box-shadow: none;
}
</style>


