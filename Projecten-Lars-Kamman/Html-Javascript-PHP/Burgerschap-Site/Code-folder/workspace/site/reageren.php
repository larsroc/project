<?php
session_start();

require "database.php";

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        
        
        <div align="center">
<?php
$onderwerpErr = $textErr ="";
$onderwerp = $text = "";
$ok = TRUE;
//print_r($ok);
if (isset($_POST["toon"])) {
  if (empty($_POST["onderwerp"])) {
    $onderwerpErr = "onderwerp";
  } else {
    $onderwerp = test_input($_POST["onderwerp"]);
  }
  
  if (empty($_POST["text"])) {
    $textErr = "text";
  } else {
    $text = test_input($_POST["text"]);
    
  }

}
//echo $ok;

?>

<form method="post" >
<p><span class="error"></span></p>
<form method="post" >  
   <input type="text" name="onderwerp" value="<?php echo $onderwerp ?>" placeholder="onderwerp" maxlength="30" required/>
  <span class="error"> <?php echo $onderwerpErr;?></span>
 
    <input type="text" name="text" value="<?php echo $text ?>" placeholder="Reageer" maxlength="256" required/>
  <span class="error"> <?php echo $textErr;?></span>
  
    <input type="submit" name="toon"> 
    </form>
    <form method="post" >
      
    </form>
<?php

//if (isset($_POST["toon"])){
//    echo "<h1>welkom ". $_POST["onderwerp"] ."</h1>";
//    echo "<p> ingevoerde vak is: ". $_POST["text"]. "</p>";
//    echo "<p> en ingevoerde cijfer is: ". $_POST["wachtwoord"]. "</p>";
//}

?>

<?php
//if (isset($_POST["toon"]) ){
//print_r($_POST);
//echo "ok = " .$ok;
//if ($ok) {
//  echo "<h2>Ingevuld:</h2>";
//  echo $onderwerp;
//  echo "<br>";
//  echo $text;
//  echo "<br>";
//  echo $wachtwoord;
//  echo "<br>";

  $sql = "INSERT INTO reacties
  (onderwerp, text)
  VALUES ('$onderwerp', '$text')";
//  print_r($sql);
  $conn->exec($sql);
  
  $conn = null;

//} 
//} 
?>
        
        

    </body>
    <footer>

    </footer>
</html>