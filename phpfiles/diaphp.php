 <?php 



if(isset($_POST['fecha'])){
	$fecha = $_POST['fecha'];
}

$res = date('w', strtotime($fecha));
echo $res;
		
?>