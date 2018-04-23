<?php 
		
	 $link = mysqli_connect("localhost","rootwilliam","universallorenzo95!");
	 mysqli_set_charset($link, "utf8");
	$db = mysqli_select_db($link, "basegato");	
	
	
	
	if(isset($_POST['mes'])){
	$anyo = $_POST['anyo'];
	$mes = $_POST['mes'];

}
	
	
	for ($i = 1; $i <= 31; $i++){
		$sql3 = "SELECT titulo_evento, descrip_evento, hora_evento, enlace FROM eventos WHERE en_dia = $i AND en_anyo = $anyo AND en_mes = $mes";
		$result3 = mysqli_query($link, $sql3);
		$info ='';
		if(mysqli_num_rows($result3)!=0){
		while($row3 = mysqli_fetch_assoc($result3)){$info= '<b><h3>'.$row3['titulo_evento'].
		'</h3></b><br><h5>'. 
		$row3['descrip_evento'].
		'</h5><h4>'.$row3['hora_evento'].
		'</h4><br>' . $info;}	
		
		
	echo"<script type=\"text/javascript\">
	
	$(document).ready(function(){
	
	$(\"#wrapper$i\").on('mouseenter',function (e) {
     
		
		 $(\"#infoevento\").html(	 
	  
	'$info'
	
	 );
	$(\"#infoevento\").stop();	
     $(\"#infoevento\").fadeIn(400);
	 
	 });
	 
	 $(\"#wrapper$i\").on('mouseleave', function (e) {
    
    $(\"#infoevento\").stop();		
     $(\"#infoevento\").fadeOut(100);
	 

});
	});
 </script>
"

;}
	}
?>