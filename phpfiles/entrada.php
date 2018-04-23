<?php

$link = mysqli_connect("localhost","rootwilliam","universallorenzo95!");
	 mysqli_set_charset($link, "utf8");
	$db = mysqli_select_db($link, "basegato");
	
	
	if(isset($_POST['id'])){
	$entryid = $_POST['id'];
	
	
	$sql = "SELECT titulo, texto, autor, fecha, enlaceimagen, etiquetas FROM entradas WHERE id = $entryid";
	$result = mysqli_query($link, $sql);
	
	$row = mysqli_fetch_assoc($result);
	
	$string = $row[etiquetas];
	$arraytag = explode(":",$string);
	
	echo" <span class=\"entry-title\">$row[titulo]</span> <div class=\"entry\" >$row[texto]</div> <span class=\"author\">$row[autor]</span> <div class=\"tags\"> Etiquetas:";
	
	
	foreach($arraytag as $tag ){
	
	echo"<a href=\"../entradalist.php?tag=$tag\"> $tag </a>";
	
	}
	
	
	echo "
	 </div>
	
	
	
			
	
	
	";
}


 ?>