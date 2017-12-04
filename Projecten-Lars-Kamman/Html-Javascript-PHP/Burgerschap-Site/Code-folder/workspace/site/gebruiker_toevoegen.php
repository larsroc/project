<?php
session_start();

require "database.php";

?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/scss" href="css/home.scss">
       <?php include 'menu.php';?>
    </head>
    <body>
        
        
        <div align="center">
<?php
$useridErr = $voornaamErr = $adresErr = $straatErr = $woonplaatsErr = $geslachtErr = $opleidingErr = $werktErr = $rekeningnummerErr = $emailErr = $wachtwoordErr ="";
$userid = $voornaam = $adres = $straat = $woonplaats = $geslacht = $opleiding = $werkt = $rekeningnummer = $email = $wachtwoord = "";
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
  if (empty($_POST["adres"])) {
    $adresErr = "adres";
  } else {
    $adres = test_input($_POST["adres"]);
  }
  
    if (empty($_POST["straat"])) {
    $straatErr = "straat";
  } else {
    $straat = test_input($_POST["straat"]);
  }
  
    if (empty($_POST["woonplaats"])) {
    $woonplaatsErr = "woonplaats";
  } else {
    $woonplaats = test_input($_POST["woonplaats"]);
  }
  
    if (empty($_POST["geslacht"])) {
    $geslachtErr = "geslacht";
  } else {
    $geslacht = test_input($_POST["geslacht"]);
  }
  
    if (empty($_POST["opleiding"])) {
    $opleidingErr = "opleiding";
  } else {
    $opleiding = test_input($_POST["opleiding"]);
  }
  
    if (empty($_POST["werkt"])) {
    $werktErr = "werkt";
  } else {
    $werkt = test_input($_POST["werkt"]);
  }
  
    if (empty($_POST["rekeningnummer"])) {
    $rekeningnummerErr = "rekeningnummer";
  } else {
    $rekeningnummer = test_input($_POST["rekeningnummer"]);
  }
  
    if (empty($_POST["email"])) {
    $emailErr = "email";
  } else {
    $email = test_input($_POST["email"]);
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
    <input type="text" name="adres" value="<?php echo $adres ?>" placeholder="adres" maxlength="30" required/>
  <span class="error">* <?php echo $adresErr;?></span>
  <br><br>
      <input type="test" name="straat" value="<?php echo $straat ?>" placeholder="straat" maxlength="30" required/>
  <span class="error">* <?php echo $straatErr;?></span>
  <br><br>
      <input type="text" name="woonplaats" value="<?php echo $woonplaats ?>" placeholder="woonplaats" maxlength="30" required/>
  <span class="error">* <?php echo $woonplaatsErr;?></span>
  <br><br>
      <input type="text" name="geslacht" value="<?php echo $geslacht ?>" placeholder="geslacht" maxlength="30" required/>
  <span class="error">* <?php echo $geslachtErr;?></span>
  <br><br>
      <input type="text" name="opleiding" value="<?php echo $opleiding ?>" placeholder="opleiding" maxlength="30" required/>
  <span class="error">* <?php echo $opleidingErr;?></span>
  <br><br>
      <input type="text" name="werkt" value="<?php echo $werkt ?>" placeholder="werkt" maxlength="30" required/>
  <span class="error">* <?php echo $werktErr;?></span>
  <br><br>
      <input type="text" name="rekeningnummer" value="<?php echo $rekeningnummer ?>" placeholder="rekeningnummer" maxlength="30" required/>
  <span class="error">* <?php echo $rekeningnummerErr;?></span>
  <br><br>
      <input type="email" name="email" value="<?php echo $email ?>" placeholder="email" maxlength="30" required/>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
      <input type="pasword" name="wachtwoord" value="<?php echo $wachtwoord ?>" placeholder="wachtwoord" maxlength="30" required/>
  <span class="error">* <?php echo $wachtwoordErr;?></span>
  <br><br>
    <input type="submit" name="toon"> 
    </form>
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
  (userid, voornaam, adres, straat, woonplaats, geslacht, opleiding, werkt, rekeningnummer, email, wachtwoord )
  VALUES ('$userid', '$voornaam', '$adres', '$straat' , '$woonplaats' , '$geslacht' , '$opleiding' , '$werkt' , '$rekeningnummer' , '$email' , '$wachtwoord')";
//  print_r($sql);
  $conn->exec($sql);
  
  $conn = null;

//} 
//} 
?>
        
        

    </body>
    <footer>
  <?php include 'footer.php';?>
    </footer>
</html>