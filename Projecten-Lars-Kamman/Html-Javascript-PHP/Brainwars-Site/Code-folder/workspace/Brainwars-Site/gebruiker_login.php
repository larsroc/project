<link rel="stylesheet" type="text/css" href="css/form.css">
<?php
session_start();
require "database.php";
require "testinput.php";
?>
<div align="center">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

        <form method="POST">
             <input type="text" name="userid" placeholder="Gebruikersnaam"  size="30" maxlength="30"><br />
             <input type="password" name="wachtwoord" placeholder="Wachtwoord"  size="30" maxlength="30"><br /><br />
            <input type="submit" name="inloggen" value="Log in!" />
        </form><br /><br />
</div>
<?php
if (isset($_POST["inloggen"])) {
    $userid= $_POST["userid"];
    $wachtwoord= $_POST["wachtwoord"];
    
    $sql = "select * from user
    where userid = '$userid'
    and wachtwoord = '$wachtwoord'";
    
    
    echo $sql;
    $result = $conn->query($sql);
    
    $aantalRijen = $result->rowCount();
   
	if ($aantalRijen==1) {
	    $row = $result->fetch();
		
		$_SESSION["voornaam"] = $row["voornaam"];
		$_SESSION["achternaam"] = $row["achternaam"];
        setcookie("userid", $userid, time() + 60, "/");
        
				    
		header("Location: HighorLOw.php");
        
    }else{
        
        echo "ongeldige userid/wachtwoord";
    }
}

?>

<div class="logo">
  
  <img src="https://www.orhuntoys.com/img/login.png" 
  alt="" 
  style="width:261px;height:345;">

  
</div>

<div class="make">
  
  <a href="gebruiker_toevoegen.php">
  <img src="http://static.devnet.com/adoption.com/r7/img/free-account.png" 
  alt="" 
  style="width:244px;height:102;">
  </a>
  
</div>




