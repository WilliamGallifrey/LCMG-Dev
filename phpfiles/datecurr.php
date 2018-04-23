<?php 

$meses = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$anyos = array("2016","2017","2018","2019","2020");

$anyo = date('Y');
$mes = date('n');
$f = 0;

	echo"<div class=\"listas\">";
	echo "<ul id=\"listm\">\n\n";
   //for para los meses
   for($i = 1; $i < 13; $i++ ){
	   
	   if($i == $mes) {echo"<li id =\"currm\" value=\"$i\" datames=\"$meses[$i]\">$meses[$i]</li>\n";$f = $i;}
	   else echo "<li id =\"\" value=\"$i\" datames=\"$meses[$i]\">$meses[$i]</li>\n";
	   
	}
	echo"</ul>\n\n";
	
	echo"<ul id=\"lista\">\n\n";
	
	for($i = 0; $i < count($anyos); $i++ ){
	   
	   if($anyos[$i] == $anyo) echo"<li id =\"curra\" value=\"$anyos[$i]\" dataanyo=\"$anyos[$i]\">$anyos[$i]</li>\n";
	   else echo "<li id =\"\" value=\"$anyos[$i]\" dataanyo=\"$anyos[$i]\">$anyos[$i]</li>\n";
	}
	
	
	echo"</ul>\n\n";
	echo"</div>";
	

?>