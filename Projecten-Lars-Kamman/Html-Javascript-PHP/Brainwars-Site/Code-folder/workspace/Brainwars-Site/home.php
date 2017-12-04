<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
    </head>
    <body>
        
        <style>
            html{
                background:url('img/b1.png') no-repeat center center fixed;
                -webkit-background-size:cover;
                -moz-background-size:cover;
                -o-background-size:cover;
                background-size:cover;
            }
            body{
                color :#FFFFFF;
            }
        </style>
        <div class="brain">
            <img src="img/Brain.gif" alt="brain" style="width:238px;height:192px;">
        </div>
        
        <div class="L-brain">
            <a href="regels.php">
                <img src="img/L.png" alt="brain" style="width:300px;height:700px;">
            </a>
        </div>
       
        <div class="R-brain">
            <a href="gebruiker_login.php">
                <img src="img/R.png" alt="brain" style="width:300px;height:700px;">
            </a>
        </div>
        
        <div class="text1">
            <p><b>regels</b></p>
        </div>
        
        <div class="text2">
            <p><b>game</b></p>
        </div>



    </body>
</html>


<style>
.brain{
    position: absolute;
    left: 685px;
    top: 110px;
    z-index: 5;
}
.L-brain{
    position: absolute;
    left: 20px;
    top: 20px;
    z-index: 5;
}
.R-brain{
    position: absolute;
    left: 1195px;
    top: 20px;
    z-index: 5;
}
.text1 {
    color: black;
    font-family: 'Alfa Slab One';font-size: 122px;
    -ms-transform: rotate(90deg); /* IE 9 */
    -webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */
    transform: rotate(90deg);
    position: absolute;
    left: 190px;
    top: 150px;
    z-index: 5;
}
.text2 {
    color: black;
    font-family: 'Alfa Slab One';font-size: 122px;
    -ms-transform: rotate(270deg); /* IE 9 */
    -webkit-transform: rotate(270deg); /* Chrome, Safari, Opera */
    transform: rotate(270deg);
    position: absolute;
    left: 950px;
    top: 150px;
    z-index: 5;
}
</style>