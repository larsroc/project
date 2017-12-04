<?php
session_start();

require "database.php";


?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/scss" href="css/home.scss">
    </head>
    <body>
    <br><br><br><br><br><br>
    
      <div align="center">     
  <img src="https://s3.envato.com/files/166459326/register-login-add-on.png" 
  alt="www.kiddnation.com" 
  style="width:250px;height:250px;">
  </div>
        <div align="center">

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
        
				    
		header("Location: home.php");
        
    }else{
        
        echo "ongeldige userid/wachtwoord";
    }
}

?>

    </body>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</html>

<style type="text/css">
    body  {
    background-image: url("https://www.mensroom.be/wp-content/uploads/2016/12/Savin-NY-Website-Background-Web.jpg");
    background-color: #cccccc;
    background-position: 50% 50%;
}
</style>