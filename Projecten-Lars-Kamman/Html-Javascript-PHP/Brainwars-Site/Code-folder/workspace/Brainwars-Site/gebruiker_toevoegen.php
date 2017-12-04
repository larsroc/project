<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/form.css">
<style>
.error {color: black;}
</style>
</head>
<body>
          <style>
            html{
                background:url('img/b4.jpg') no-repeat center center fixed;
                -webkit-background-size:cover;
                -moz-background-size:cover;
                -o-background-size:cover;
                background-size:cover;
            }
            body{
                color :#FFFFFF;
            }
        </style>  

<?php
session_start();
require "database.php";
require "testinput.php";
?>


<br><br><br><br><br><br><br><br><br><br>


<div align="center">
<?php
$useridErr = $voornaamErr = $wachtwoordErr = "";
$userid = $voornaam = $wachtwoord = "";
$ok = TRUE;
//print_r($ok);
if (isset($_POST["toon"])) {
  if (empty($_POST["userid"])) {
    $useridErr = "userid";
  } else {
    $userid = test_input($_POST["userid"]);
  }
  
  if (empty($_POST["voornaam"])) {
    $voornaamErr = "voornaam";
  } else {
    $voornaam = test_input($_POST["voornaam"]);
    
  }
  if (empty($_POST["wachtwoord"])) {
    $wachtwoordErr = "wachtwoord";
  } else {
    $wachtwoord = test_input($_POST["wachtwoord"]);
  }

}
//echo $ok;

?>

<form method="post" >
<h2>Acount aanmaken:</h2>
<p><span class="error">* required field.</span></p>
<form method="post" >  
   <input type="text" name="userid" value="<?php echo $userid ?>" placeholder="userid" maxlength="30" required/>
  <span class="error">* <?php echo $useridErr;?></span>
  <br><br>
    <input type="text" name="voornaam" value="<?php echo $voornaam ?>" placeholder="voornaam" maxlength="30" required/>
  <span class="error">* <?php echo $voornaamErr;?></span>
  <br><br>
    <input type="pasword" name="wachtwoord" value="<?php echo $wachtwoord ?>" placeholder="wachtwoord" maxlength="30" required/>
  <span class="error">* <?php echo $wachtwoordErr;?></span>
  <br><br>
    <input type="submit" name="toon"> 
    </form>
    <button onclick="window.location.href='gebruiker_login.php'">Terug naar login</button>
    <form method="post" >
      
    </form>
<?php

//if (isset($_POST["toon"])){
//    echo "<h1>welkom ". $_POST["userid"] ."</h1>";
//    echo "<p> ingevoerde vak is: ". $_POST["voornaam"]. "</p>";
//    echo "<p> en ingevoerde cijfer is: ". $_POST["wachtwoord"]. "</p>";
//}

?>

<?php
//if (isset($_POST["toon"]) ){
//print_r($_POST);
//echo "ok = " .$ok;
//if ($ok) {
//  echo "<h2>Ingevuld:</h2>";
//  echo $userid;
//  echo "<br>";
//  echo $voornaam;
//  echo "<br>";
//  echo $wachtwoord;
//  echo "<br>";

  $sql = "INSERT INTO user
  (userid, voornaam, wachtwoord)
  VALUES ('$userid', '$voornaam', '$wachtwoord')";
//  print_r($sql);
  $conn->exec($sql);
  
  $conn = null;

//} 
//} 
?>

</body>
</html>