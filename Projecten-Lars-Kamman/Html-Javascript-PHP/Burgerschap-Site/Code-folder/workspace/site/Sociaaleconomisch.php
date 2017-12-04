<?php
session_start();

require "database.php";

?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/css" href="css/s.css">
       <?php include 'menu.php';?>
    </head>
    <body>
 <br>   <br>  <br>  <br>  <br>   
<?php include 'reageren.php';?>
<br>  <br> 
        <section class="ac-container">
				<div>
					<input id="ac-1" name="accordion-1" type="radio" checked="">
					<label for="ac-1">nachtwakersstaat of verzorgingsstaat </label>
					<article class="ac-small">
						<p>Wij zijn voor een verzorgingsstaat. Wij willen namelijk dat de overheid zich meer gaat bezig houden met de welvaart en het welzijn van haar inwoners. (welvaart: voldoende inkomen om behoeften te vervullen, welzijn: hoe we ons geestelijk en lichamelijk voelen).</p>
					</article>
				</div>
				<div>
					<input id="ac-2" name="accordion-1" type="radio">
					<label for="ac-2">Rol van de overheid </label>
					<article class="ac-medium">
						<p>Wij vinden het welzijn een belangrijk onderwerp iedereen moet het zich wel bevinden en alles mogen doen zolang ze zich maar aan de wet houden. Wij achten dan ook als een nieuwe wet word gemaakt iedereen zich er aan houd indien niet er mee eens een reverendem toegestaan</p>
					</article>
				</div>
				<div>
					<input id="ac-3" name="accordion-1" type="radio">
					<label for="ac-3">Voorzieningen</label>
					<article class="ac-large">
						<p>
Wij zij voor een sociaal leenstelsel. je studiefinanciering word omgezet in een lening. Deze lening kunnen leerlingen na de studie tegen een niet te hoge rente afbetalen. Daar naast al je een te lage inkomen hebt hoef je het ook niet terug te betalen! Wij vinden ja de jeugd van tegenwoordig in zich zelf moet investeren. Studenten nemen allen niet genoeg tijd om hier over na te denken<br>
<B>Zorgtoeslag</B><br>
Als je niet al te veel geld hebt te besteden kan de maandelijkse zorgpremie erg veel voor je zijn. En dan moet je nog je eigen risico betalen, kan dat lastig uitpakken. Dit is de reden dat mensen met een lager inkomen zorgtoeslag krijgen. daarnaast hoef je voor je huishart geen eigen risico over te betalen. Want de hoeveelheid geld wat je verdien mag niet uitmaken welke zorg je kan gebruiken.
We leven dan ook steen in een langere gezondheid. Veel ziektes die voeger dodelijk waren zijn er niet meer. Wetenschap heeft ons er ver gebracht. Maar omdat we zo veel antibiotica worden gebruiken, zullen de medicijnen later niet meer werken. dat grote gevolgen hebben.
Dingen die nu goed te behandelen zijn , kunnen in de toekomst weer dodelijk worden. We willen dan ook de hoeveelheid antibiotica terug dringen.<br>
<B>Aow</B><br>
Als je je hele leven hard hebt gewerkt, verdien je een geode regeling als je met pension gaat. Dit hoeft niet te gelden voor mensen die al ge pensionnerd zijn, maar ook voor de mensen die nog aan het werken zijn of aow is die nog moeten beginnen met werken. Wij zullen er voor zorgen dat ook voor hen een gioen . dit werkt aleen als we samen langer door werken, want we worden steeds ouder. De pension leeftijd zal dus ook steeds hoger worden
Wij willen dat mensen meer vrijheid hebben bij de AOW. Voor wie bijvoorbeeld na zijn pensions leeftijd nog wil doorwerken. Dit moet gewoon kunnen. Als mensen later willen beginnen aan hun pension moet dit gewoon kunnen. Uiteraat krijg je een hoger bedrag per maand er voor terug.
</p>
					</article>
				</div>
				<div>
					<input id="ac-4" name="accordion-1" type="radio">
					<label for="ac-4">Type verzorgingsstaat </label>
					<article class="ac-small">
						<p>sociaaldemocratisch/Scandinavisch - Dit type kent een uitgebreid stelsel van sociale zekerheid met relatief hoge, vrij algemeen toegankelijke uitkeringen. De burgers betalen veel premies en belasting, met als gevolg dat er goede regelingen voor ouderschapsverlof en een hoge arbeidsmarktparticipatie is, ook door vrouwen.</p>
					</article>
				</div>
								<div>
					<input id="ac-5" name="accordion-1" type="radio">
					<label for="ac-5">Sociale ongelijkheid </label>
					<article class="ac-large">
						<p>
Sociale ongelijkheid is de ongelijke verdeling over personen en groepen van zaken die belangrijk worden geacht in een samenleving en de ongelijke waardering en behandeling van hen op basis van maatschappelijke positie en leefstijl. Ook rechten en plichten zijn niet gelijkelijk verdeeld<br><br>
Sociale ongelijkheid: De bestaande verschillen in sociale posities en sociale waardering die mensen hechten aan hen die die posities bekleden.<br><br> 

dit kunnen oorzaken zijn voor het ontstaan van sociale ongelijkheid: <br>
-De positie op de arbeidsmarkt en de daarmee samenhangende ongelijkheid in inkomen<br> 
-Verschillen in vooropleiding kunnen leiden tot grote verschillen in werk en inkomen <br>
-Soms hangen de verschillen in salaris en de kansen op de arbeidsmarkt samen met de sekse <br>
-Etnische minderheden zullen het onrechtvaardig vinden dat zij minder kansen hebben op de arbeidsmarkt. <br>
-Een andere oorzaak kan gevonden worden in de verschillende kansen die mensen uit verschillende milieus hebben. <br><br>

Deze oorzaken kunnen worden verkleind door middel van:<br>
- bestrijding van werkeloosheid<br>
- bevorderen van onderwijs<br>
- inburgeren<br>
- anti-discriminatie<br>
- belastingmaatregelen<br>
- sociale wetgeving (kern verzorgingsstaat)<br>
</p>
					</article>
				</div>
			</section>


    </body>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</html>


