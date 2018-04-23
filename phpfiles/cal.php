<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>

//Script de carga de calendario


$(document).ready(function(){
	
	$mesr = $("#currm").val();
	$anyor = $("#curra").val();
	

	
$toRelleno = "";
$mesant = $mesr-1;
$hastaprimer = 0;
$primer = 0;
$fecha = $anyor+"-"+$mesr+"-1";
var response2 = '';
$vacio = " ";
   
   //nuevoooo
   
   
   if($mesant == 2){
		if( $anyor % 4 == 0 )$dias =29; else $dias =28;} 
	else{ if($mesant == 4 || $mesant == 6 || $mesant == 9 || $mesant == 11) $dias = 30;
	else $dias=31;}
		
	$.ajax({
		type:'POST',
		url:"diaphp.php", 
		data:{fecha : $fecha},
		success: function(data){response2 = data},
		async : false
		});		
	
		
		$primer= response2;
		if($primer != 0)
		$primer=$primer-2;
		else $primer = 5;

	
	if($primer != -1){
	$desde = $dias-$primer;
	

		for($k=$desde; $k<=$dias; $k++){

		$toRelleno = $toRelleno+"<li class=\"cajanull\" ><span class=\"numnull\">"+$k+"</span></li>\n";
		

		$(".contgeneral").html($toRelleno);

		}

	}
	
	else $(".contgeneral").html(" ");
	
   
   
   $dias =0;
    if($mesr == 2){
		if( $anyor % 4 == 0 )$dias =29; else $dias =28;} 
	else{ if($mesr == 4 || $mesr == 6 || $mesr == 9 || $mesr == 11) $dias = 30;
	else $dias=31;}
	
	$toHtml = '';
	var response = '';
	
		
		
		$.ajax({
		type:'POST',
		url:"calphp.php", 
		data:{dias : $dias, mes : $mesr, anyo: $anyor},
		success: function(data){response = data},
		async : false
		});		
	
		
		$toHtml= response;
	if($primer != -1)
   $(".contgeneral").append($toHtml);
   
   else $(".contgeneral").html($toHtml);
   

	//Cuando se hace clic
	

	
	 $("button").click(function(){
	$mesr = $("#currm").val();
	$anyor = $("#curra").val();


	

	
$toRelleno = "";
$mesant = $mesr-1;
$hastaprimer = 0;
$primer = 0;
$fecha = $anyor+"-"+$mesr+"-1";
var response2 = '';
$vacio = " ";
      
   
   if($mesant == 2){
		if( $anyor % 4 == 0 )$dias =29; else $dias =28;} 
	else{ if($mesant == 4 || $mesant == 6 || $mesant == 9 || $mesant == 11) $dias = 30;
	else $dias=31;}
		
	$.ajax({
		type:'POST',
		url:"diaphp.php", 
		data:{fecha : $fecha},
		success: function(data){response2 = data},
		async : false
		});		
	
		
		$primer= response2;
		if($primer != 0)
		$primer=$primer-2;
		else $primer = 5;


	if($primer != -1){
	$desde = $dias-$primer;
	
		for($k=$desde; $k<=$dias; $k++){

		$toRelleno = $toRelleno+"<li class=\"cajanull\" ><span class=\"numnull\">"+$k+"</span></li>\n";
		

		$(".contgeneral").html($toRelleno);

		}

	}
	
	else $(".contgeneral").html(" ");
	
   
   
   $dias =0;
    if($mesr == 2){
		if( $anyor % 4 == 0 )$dias =29; else $dias =28;} 
	else{ if($mesr == 4 || $mesr == 6 || $mesr == 9 || $mesr == 11) $dias = 30;
	else $dias=31;}
	
	$toHtml = '';
	var response = '';
	
		
		
		$.ajax({
		type:'POST',
		url:"calphp.php", 
		data:{dias : $dias, mes : $mesr, anyo: $anyor},
		success: function(data){response = data},
		async : false
		});		
	
		
		$toHtml= response;
	if($primer != -1)
   $(".contgeneral").append($toHtml);
   
   else $(".contgeneral").html($toHtml);

});
});
</script>

<div id = "hoverscript"></div>
<script>
//Script de hover sobre los días con evento
$(document).ready(function(){
    
	
	
	 $("#fechaen").html($("#currm").attr('datames')+" "+ $("#curra").attr('dataanyo'));
	
	
	$.ajax({
		type:'POST',
		url:"infophp.php", 
		data:{mes : $mesr, anyo: $anyor},
		success: function(data){$("body").append(data);},
		async : false
		});	

$("button").click(function(){
	  $("#fechaen").html($("#currm").attr('datames')+" "+ $("#curra").attr('dataanyo'));
	
	
	$.ajax({
		type:'POST',
		url:"infophp.php", 
		data:{mes : $mesr, anyo: $anyor},
		success: function(data){$("body").append(data);},
		async : false
		});
		
});

});


</script>





<script type="text/javascript">
     window.onload = function(){
		 
		 
		 
		 
var xMousePos = 0;
var yMousePos = 0;
var lastScrolledLeft = 0;
var lastScrolledTop = 0;
var bsDiv = document.getElementById("infoevento");

$(document).mousemove(function(event) {
    captureMousePosition(event);
})  

    $(window).scroll(function(event) {
        if(lastScrolledLeft != $(document).scrollLeft()){
            xMousePos -= lastScrolledLeft;
            lastScrolledLeft = $(document).scrollLeft();
            xMousePos += lastScrolledLeft;
        }
        if(lastScrolledTop != $(document).scrollTop()){
            yMousePos -= lastScrolledTop;
            lastScrolledTop = $(document).scrollTop();
            yMousePos += lastScrolledTop;
        }
		
		
		bsDiv.style.left = xMousePos + "px";
                        bsDiv.style.top = yMousePos + "px";
        
    });
function captureMousePosition(event){
    xMousePos = event.pageX+30;
    yMousePos = event.pageY+15;
	if ( typeof xMousePos !== 'undefined' ){
    bsDiv.style.left = xMousePos + "px";
                        bsDiv.style.top = yMousePos + "px";}
}
		 
		 
		 
		 
                
	 }
	 


</script>




</head>

<body>
<span class="titulo">Calendario de Eventos</span><br>
<span class="titulo" id="fechaen"></span>
<br>

<?php include("datecurr.php")?>


<div class = "controles">

<button id="prevMes"><span class ="fa fa-caret-square-o-left"></span></button>
<input class="textocajam" type="text" id="mes" disabled="disabled"/>
<button id="nextMes"><span class ="fa fa-caret-square-o-right"></button>
<span class ="fa fa-ellipsis-v"></span>
<button id="prevAnyo"><span class ="fa fa-caret-square-o-left"></button>
<input class="textocajaa" type="text" id="anyo" disabled="disabled" />
<button id="nextAnyo"><span class ="fa fa-caret-square-o-right"></button>

</div>

<br>

<script  type="text/javascript">
 $(document).ready(function(){
	 
	
	 
	 $('#mes').val($("#currm").text());
	 $('#anyo').val($("#curra").text());
	 	 
 });
 
$('#nextMes').click(function(){
	
	//cuando se hace clic, se pasa el valor de curr al siguiente elemento de la lista y el valor de éste se le da al cuadro de
	//texto
	if($("#currm").next("li").length != 0){
	$currm = $("#currm").next("li");    
    $('#mes').val($currm.text());
	$currm.prev().prop('id','');
	$currm.prop('id','currm');
	}
});

$('#prevMes').click(function(){
	
	if($("#currm").prev("li").length != 0){
	$currm = $("#currm").prev("li");    
    $('#mes').val($currm.text());
	$currm.next().prop('id','');
	$currm.prop("id","currm");
	}
});

$('#nextAnyo').click(function(){
	
	if($("#curra").next("li").length != 0){
	$curra = $("#curra").next("li");    
    $('#anyo').val($curra.text());
	$curra.prev().prop('id','');
	$curra.prop('id','curra');
	}
});

$('#prevAnyo').click(function(){
	
	if($("#curra").prev("li").length != 0){
	$curra = $("#curra").prev("li");    
    $('#anyo').val($curra.text());
	$curra.next().prop('id','');
	$curra.prop("id","curra");
	}
});
</script> 

   
<div><ul class="cont-dias">

	<li class="dia"><span class="inicialtexto">L</span><span class="textodia hidden-md-down">unes</span></li>
    <li class="dia"><span class="inicialtexto">M</span><span class="textodia hidden-md-down">artes</span></li>
    <li class="dia hidden-md-down"><span class="inicialtexto ">M</span><span class="textodia hidden-md-down">i&eacute;rcoles</span></li>
    <li class="dia hidden-lg-up"><span class="inicialtexto ">X</span><span class="textodia hidden-md-down">i&eacute;rcoles</span></li>   
    <li class="dia"><span class="inicialtexto">J</span><span class="textodia hidden-md-down">ueves</span></li>
    <li class="dia"><span class="inicialtexto">V</span><span class="textodia hidden-md-down">iernes</span></li>
    <li class="dia"><span class="inicialtexto">S</span><span class="textodia hidden-md-down">&aacute;bado</span></li>
    <li class="dia"><span class="inicialtexto">D</span><span class="textodia hidden-md-down">omingo</span></li>
    </ul>
	<div class = "contgeneral">
	</div>
</div>
<div id="infoevento"></div>
</body>
</html>