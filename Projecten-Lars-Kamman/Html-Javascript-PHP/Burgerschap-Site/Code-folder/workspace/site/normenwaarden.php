<?php
session_start();

require "database.php";

?>
<!DOCTYPE html>
<html>
    <head>
    
       <link rel="stylesheet" type="text/css" href="css/nw.css">

    <?php include 'menu.php';?>
      
           
    </head>
    <body>

 <br>   <br>  <br>  <br>  <br>   
<?php include 'reageren.php';?>
<br>  <br> 
        <section class="ac-container">
				<div>
					<input id="ac-8" name="accordion-1" type="radio">
					<label for="ac-8">Normen</label>
					<article class="ac-large">
						<p>
                            &#176;	De Bob drinkt geen alcohol.<br>
                            &#176;	Het is normaal om netjes op je beurt te wachten.
                            &#176;	Het is gebruikelijk om een plankje voor de volgende klant op de lopende band te zetten, de volgende klant bedankt dan vriendelijk.<br>
                            &#176;	Ouders, scholen en welzijnsinstanties geven voorlichting over drugs.
                            &#176;	Verschillende gezinssamenstellingen worden tegenwoordig als normaal beschouwd, gescheiden ouders, stiefgezin,alleenstaand ouderschap, samenwonend zonder huwelijk...<br>
                            &#176;	Gezinsleden hebben vaak overeenkomende normen en waarden.<br>
                            &#176;	Het hele gezin wordt betrokken bij belangrijke gebeurtenissen.<br>
                            &#176;	Gezinsleden komen voor elkaar op.<br>
                            &#176;	Ieder is vrij om te geloven wat hij / zij aanhangt.<br>
                            &#176;	Nederland wordt steeds multicultureler, verschillende reliegies leven naast elkaar.<br>
                            &#176;	Extremisme, discriminatie, opdringerigheid en/of valse profetie zijn niet wenselijk.<br>
                            &#176;	In de liefde ga je respectvol met elkaar om.<br>
                            &#176;	Je houdt rekening met elkaars normen, waarden, principes en grenzen.<br>
                            &#176;	Men is vrij in partnerkeuze.<br>
                            &#176;	Wanneer een voertuig aankomt, is het normaal eerst de passagiers uit te laten en hen de ruimte te geven alvorens zelf in te stappen.<br>
                            &#176;	Men hoort van zijn plaats op te staan voor een oudere, minder valide of zwanger persoon.<br>
                            &#176;	De jeugd tot 18 jaar geniet opvoeding, bescherming en verzorging van een ouder / ouders of toegewezen voogd.<br>
                            &#176;	De opvoeding heeft als doel het kind wegwijs en weerbaar te maken op verschillende ontwikkelingsgebieden.<br>
                            &#176;	Ouders hebben autoriteit, verplichtingen en verantwoordelijkheid.<br>
                            &#176;	Iedereen gaat naar school, er is leerplicht en er zijn onderwijsambtenaren die controleren.<br>
                            &#176;	Op school leer je in ieder geval lezen, schrijven en rekenen + een scala aan vakken en basiskennis.<br>
                            &#176;	Je komt op tijd en je komt je afspraken na (huiswerk, leren voor toetsen enz.)<br>
                            &#176;	Ouders schuiven tegenwoordig veel taken in de opvoeding naar de scholen.<br>
                            &#176;	De school biedt een stimulerend leerklimaat.<br>
                            &#176;	De school draagt bij aan de sociale, emotionele en cognitieve ontwikkeling.<br>
                            &#176;	Docenten dienen gepaste afstand te bewaren tot leerlingen.<br>
                            &#176;	Ieder bemoeit zich met zijn eigen zaken.<br>
                            &#176;	Bekenden groet je of je maakt een praatje.<br>
                            &#176;	Afval hoort in de prullenbak.<br>
                            &#176;	Zorg voor zo min mogelijk overlast: De straat is van iedereen.<br>
                            &#176;	Om respect te krijgen, moet je ook respect geven.<br>
                            &#176;	Respect is iets wederzijds.<br>
                            &#176;	Je stelt je respectvol op naar ouderen, vrouwen, hulpverleners, autoriteiten, nobelen... Maar ook aan mensen die je terloops tegenkomt.<br>
                            &#176;	Respectloos gedrag is asociaal.<br>
                            &#176;	Respect toon je door wat je zegt, maar ook door wat je doet.<br>
                            &#176;	De werknemer moet zich aan gedragsregels en werkfspraken houden.<br>
 </p>
					</article>
				</div>
								<div>
					<input id="ac-9" name="accordion-1" type="radio">
					<label for="ac-9">Waarden</label>
					<article class="ac-large">
						<p>
                            &#176;	Geen 16 – Geen druppel.<br>
                            &#176;	Verstandig en verantwoordelijk omgaan met alcohol.<br>
                            &#176;	Veilig thuiskomen – Geen alcohol in het verkeer.<br>
                            &#176;	Beleefdheid.<br>
                            &#176;	Respect<br>
                            &#176;	Verstandig en verantwoordelijk omgaan met drugs.<br>
                            &#176;	Wordt geen slaaf van je verslaving.<br>
                            &#176;	Geloof, hoop, steun<br>
                            &#176;	Vrijheid, Respect, toewijding, betrokkenheid<br>
                            &#176;	Bescherming, respect, saamhorigheid, harmonie.<br>
                            &#176;	Eigen identiteit, ontwikkeling.<br>
                            &#176;	Geaccepteerd worden zoals je bent.<br>
                            &#176;	Geven en nemen.<br>
                            &#176;	Geduld is een schone zaak.<br>
                            &#176;	Respect, integriteit, ingetogenheid.<br>
                            &#176;	Rekening houden met elkaar.<br>
                            &#176;	Je aan de regels houden.<br>
                            &#176;	Vriendschap, identiteit, ontwikkeling<br>
                            &#176;	Je afspraken nakomen, Je diploma halen<br>
                            &#176;	Samen werken, zelfstandig werken<br>
                            &#176;	Leergierigheid, nieuwsgierigheid, interesse tonen<br>
                            &#176;	Je veilig voelen op straat<br>
                            &#176;	Een schone leefomgeving<br>
                            &#176;	(multiculturele) Samenleving, samen leven.<br>
                            &#176;	Tolerantie, rekening houden met elkaar.<br>
                            &#176;	Integriteit, identiteit, hoffelijkheid, normen en waarden.<br>
                            &#176;	Rekening houden met elkaars wensen en grenzen<br>
</p>
					</article>
				</div>
			</section>
			

    </body>
    <footer>
 <?php include 'footer.php';?>
    </footer>
</div>

</html>
<style>
body {

    z-index: -1;
}
</style>


