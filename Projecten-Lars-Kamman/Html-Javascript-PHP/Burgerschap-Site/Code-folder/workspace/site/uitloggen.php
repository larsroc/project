<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/scss" href="css/home.scss">
       <?php include 'menu.php';?>
    </head>
    <body>
        <div align="center">
            
<?php
//zet de variabele zo dat het script het herkent als niet-ingelogd
$_SESSION['voornaam'] = "";

echo "Je bent nu uitgelogd<br /><br />";

?>
        </div>
    </body>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</html>