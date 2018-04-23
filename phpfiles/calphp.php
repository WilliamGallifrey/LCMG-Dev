 <?php 

$link = mysqli_connect("localhost","rootwilliam","universallorenzo95!");
	 mysqli_set_charset($link, "utf8");
	$db = mysqli_select_db($link, "basegato");
	$dias=4;
	


if(isset($_POST['dias'])){
	$anyo = $_POST['anyo'];
	$mes = $_POST['mes'];
	$dias = $_POST['dias'];
}


for($i=1;$i<=$dias;$i++){

$class ='caja';
$fecha ="$i/$mes/$anyo";

if($fecha == date('j/n/Y')) $class = 'cajacurr';

 $sql2 = "SELECT titulo_evento, enlace FROM eventos WHERE en_anyo = $anyo AND en_mes = $mes AND en_dia = $i";

		$result2 = mysqli_query($link, $sql2);
		
		
		if (mysqli_num_rows($result2) > 0) {
			while($row2 = mysqli_fetch_assoc($result2)){
				
				
				echo" <li class=\"$class\" id=\"wrapper$i\"><a class=\"evento\" href=\"$row2[enlace]\">$row2[titulo_evento]</a> <span class=\"num\">$i</span></li>";
				
			
			
			}
			
		}
		else echo" <li class=\"$class\" id=\"wrapper'+$i+'\"><span class=\"num\">$i</span></li>";
}
		
?>