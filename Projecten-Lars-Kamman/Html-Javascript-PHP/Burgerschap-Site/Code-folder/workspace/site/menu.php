<?php
session_start();

require "database.php";
require "testinput.php";
?>

<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
<div class="sl">
  <p>Polititians we are watching you</p>
</div>
<ul class="menu cf">
  <li><a href="home.php">Home</a></li>
  <li><a href="politici.php">Politici</a></li>
  <li>
    <a href="">Standpunten</a>
      <ul class="submenu">
        <li><a href="Politiek-juridisch.php">Politiek-juridisch</a></li>
        <li><a href="Sociaal-cultureel.php">Sociaal-cultureel</a></li>
        <li><a href="Sociaaleconomisch.php">Sociaaleconomisch</a></li>
        <li><a href="normenwaarden.php">Normen en Waarden</a></li>
      </ul>			
  </li>
  <li><a href="activiteiten.php">Activiteiten</a></li>
    <li>
    <a href="">Login/Loguit</a>
      <ul class="submenu">
        <li><a href="gebruiker_login.php">Login</a></li>
        <li><a href="gebruiker_toevoegen.php">Acount Aanmaken</a></li>
        <li><a href="uitloggen.php">Loguit</a></li>
      </ul>			
  </li>
  <li><div id="M"><a href=""></a><?php  echo "" . $_SESSION["voornaam"] . "";  ?></div></li>
</ul>
<div class="sl">
  <p>Politici we are watching you</p>
</div>


<style>
/* Clearing floats */

#M {
  
font-family: 'Anton';font-size: 22px;
color: white;

}

body  {
    background-image: url("https://www.mensroom.be/wp-content/uploads/2016/12/Savin-NY-Website-Background-Web.jpg");
    background-color: #cccccc;
    background-position: 50% 50%;
}

.cf:before,
.cf:after {
  content: " ";
  display: table;
}

.cf:after {
  clear: both;
}

.cf {
  *zoom: 1;
}

/* Mini reset, no margins, paddings or bullets */
.menu,
.submenu {
  margin: 0;
  padding: 0;
  list-style: none;
}

/* Main level */
.menu {			
  margin: 50px auto;
  width: 800px;
  /* http://www.red-team-design.com/horizontal-centering-using-css-fit-content-value */
  width: -moz-fit-content;
  width: -webkit-fit-content;
  width: fit-content;	
}

.menu > li {
  background: #34495e;
  float: left;
  position: relative;
  transform: skewX(25deg);
}

.menu a {
  display: block;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  font-family: Arial, Helvetica;
  font-size: 14px;
}		

.menu li:hover {
  background: #e74c3c;
}		

.menu > li > a {
  transform: skewX(-25deg);
  padding: 1em 2em;
}

/* Dropdown */
.submenu {
  position: absolute;
  width: 200px;
  left: 50%; margin-left: -100px;
  transform: skewX(-25deg);
  transform-origin: left top;
}

.submenu li {
  background-color: #34495e;
  position: relative;
  overflow: hidden;		
}						

.submenu > li > a {
  padding: 1em 2em;			
}

.submenu > li::after {
  content: '';
  position: absolute;
  top: -125%;
  height: 100%;
  width: 100%;			
  box-shadow: 0 0 50px rgba(0, 0, 0, .9);			
}		

/* Odd stuff */
.submenu > li:nth-child(odd){
  transform: skewX(-25deg) translateX(0);
}

.submenu > li:nth-child(odd) > a {
  transform: skewX(25deg);
}

.submenu > li:nth-child(odd)::after {
  right: -50%;
  transform: skewX(-25deg) rotate(3deg);
}				

/* Even stuff */
.submenu > li:nth-child(even){
  transform: skewX(25deg) translateX(0);
}

.submenu > li:nth-child(even) > a {
  transform: skewX(-25deg);
}

.submenu > li:nth-child(even)::after {
  left: -50%;
  transform: skewX(25deg) rotate(3deg);
}

/* Show dropdown */
.submenu,
.submenu li {
  opacity: 0;
  visibility: hidden;			
}

.submenu li {
  transition: .2s ease transform;
}

.menu > li:hover .submenu,
.menu > li:hover .submenu li {
  opacity: 1;
  visibility: visible;
}		

.menu > li:hover .submenu li:nth-child(even){
  transform: skewX(25deg) translateX(15px);			
}

.menu > li:hover .submenu li:nth-child(odd){
  transform: skewX(-25deg) translateX(-15px);			
}

.sl {
    font-family: "Courier New", Courier, monospace;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 6%;
    background-color: #212e44;
    color: white;
    text-align: center;
}

</style>