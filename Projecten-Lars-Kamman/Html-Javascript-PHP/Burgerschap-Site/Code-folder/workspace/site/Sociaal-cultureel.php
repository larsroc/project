<?php
session_start();

require "database.php";

?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/css" href="css/text.css">
       <?php include 'menu.php';?>
    </head>
    <body>
 <br>   <br>  <br>  <br>  <br>   
<?php include 'reageren.php';?>
<br>  <br> 
        <section class="ac-container">
        	
				<div>
					<input id="ac-1" name="accordion-1" type="radio" checked="">
					<label for="ac-1">Vluchtelingenproblematiek</label>
					<article class="ac-small">
						<p>Het huidige asielbeleid is niet meer vol te houden. Het is te moeilijk om te zien wie een echte vluchteling is en wie een economische vluchteling is. Nederland kan de grote groepen vluchtelingen niet aan en daarnaast krijgen veel meer haat tegen de vluchtelingen ligt op de loer. Alleen mensensmokkelaars profiteren van ons systeem. Daarnaast vinden we dat oost-euro te weinig vluchtelingen  opneemt.
Natuurlijk hebben de vluchtelingen recht op de veiligheid die wij kunnen bieden. Maar dat hoeft niet in de EU te zijn. Wij willen veilige gebieden maken rondom de regio gestorven regio zelf. Daar kunnen alle oorlogs vluchtelingen worden op gevangen. Zodat rijke vluchtelingen niet zich laten smokkelen naar de Europese unie
Wij willen geld vrijmaken om veilige gebieden te creëren rondom de regio om daar vluchtelingen op te vangen. Als gevolg hiervan zijn de asielaanvragen in Europa niet meer nodig. Zo kunnen we een einde maken aan de levensgevaarlijke routes van mensensmokkelaars en voorkomen we problemen in onze eigen samenleving.
</p>
					</article>
				</div>
				<div>
					<input id="ac-2" name="accordion-1" type="radio">
					<label for="ac-2">Integreren, assimileren of is segregatie </label>
					<article class="ac-small">
						<p>Wij vinden dat je moet integreren en je moet aanpassen aan de normen en waarden van de Nederlandse Burgens wij vinden niet dat we ons moeten aan passen aan zijn/haar normen en waarden. In Nederland zijn de normen en waarden helden en iedereen leeft ze na. Natuurlijk zal het met invloed van buiten af onze normen en waarden worden aangepast. Maar de basis blijf het zelfde.</p>
					</article>
				</div>
				<div>
					<input id="ac-3" name="accordion-1" type="radio">
					<label for="ac-3">Discriminatie, waarom wel of niet </label>
					<article class="ac-small">
						<p>De Nederlandse wet is glashelder: discriminatie is verboden. Wij willen dat tegen elke vorm van discriminatie hard wordt opgetreden. Ieder mens is gelijkwaardig.
Discriminatie bij sollicitaties is een maatschappelijk probleem. Wij willen dat slachtoffers van discriminatie weerbaar worden, of ze nu Jan, Marieke of Mohammed heten. Je kunt discriminatie het best tegengaan door op te komen voor jezelf en voor een ander. Door het goede voorbeeld te geven. Natuurlijk pakt ook de overheid discriminatie aan, maar het is effectiever als de samenleving dat zelf doet. Nieuwe regels zijn dan ook niet nodig. Regels maken geen einde aan discriminatie, mensen wel.
</p>
					</article>
				</div>

			</section>


    </body>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</html>

