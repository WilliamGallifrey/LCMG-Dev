<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="Templates/Plantillaprincipal.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="Título" -->
<title>LCMG - Calendario</title>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <link href="../css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="../css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="../js/bootstrap-dropdownhover.min.js"></script>
  <link rel="stylesheet" href="../css/caltiles.css" type="text/css" />

  
</head>
<body>
<div class="container-fluid all-content">
<header>
     <div class="jumbotron jumbotron-fluid hidden-md-down">
  <div class="container">
    <img class="d-block w-100" src="../images/cabeceraWeb.jpg" alt="Third slide">
  </div>
</div>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded hidden-md-down menustyle">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown" data-toggle="dropdown">
        <a class="nav-link" href=""  >
          M&uacute;sica
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Cr&oacute;nicas</a>
          <a class="dropdown-item" href="#">Festivales</a>
          <a class="dropdown-item" href="#">Discos</a>
          <a class="dropdown-item" href="#">Conciertos</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Cine</a>
      </li>

      

      <li class="nav-item dropdown" data-toggle="dropdown">
        <a class="nav-link" href=""  >
          Arte
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">Artistas emergentes</a>
          <a class="dropdown-item" href="#">Exposiciones</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="calendario.php">Eventos</a>
      </li>
      

    </ul>
    
  </div>
</nav> <!-- END lg nav -->

<nav class="navbar navbar-toggleable-md navbar-light bg-faded hidden-lg-up menustylemov">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="../index.html"><img id="logoGato" src="../images/logoGato.png" width="40" alt="">La cultura mato al gato</a>


  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="sidebar">

      <li class="nav-item dropdown">
        <a class="nav-link " href="" id="navbarDropdownMenuLink" data-toggle="dropdown"">
          M&uacute;sica
        </a>
        <div class="dropdown-menu subsidebar" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Cr&oacute;nicas</a>
          <a class="dropdown-item" href="#">Festivales</a>
          <a class="dropdown-item" href="#">Discos</a>
          <a class="dropdown-item" href="#">Conciertos</a>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#">Cine</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Arte
        </a>
        <div class="dropdown-menu subsidebar" >
          <a class="dropdown-item" href="#">Artistas emergentes</a>
          <a class="dropdown-item" href="#">Exposiciones</a>
        </div>
      </li>

 <li class="nav-item">
        <a class="nav-link" href="phpfiles/calendario.php">Eventos</a>
      </li>

    </ul>
  </div>
</nav> <!-- END sm nav -->


 </header>

<div class="container">

<div class="contact hidden-md-down">

          <a href="fb://page/laculturamatoalgato/?ref=ts&fref=ts" class="fa fa-facebook hidden-lg-up"></a> 
          <a href="https://www.facebook.com/laculturamatoalgato/?ref=ts&fref=ts" target="_blank" class="fa fa-facebook hidden-md-down"></a>
          <a href="https://twitter.com/CulturaFelina?ref_src=twsrc%5Etfw&ref_url=http%3A%2F%2Fwww.laculturamatoalgato.com%2F" target="_blank" class="fa fa-twitter"></a>
          <a href="https://www.instagram.com/laculturamatoalgato/" target="_blank" class="fa fa-instagram"></a>

        </div><!-- END contact -->


 
 <?php include("cal.php"); ?>
 
 </div>
  <div id="buttons" class="contact hidden-lg-up dropup">
          <button class= "social fa fa-share-alt fa-lg" data-toggle="dropdown"></button>

          <div class="dropdown-menu">
          <ul>
            
          <li><a href="fb://page/1586111385004111" class="fa fa-facebook"></a></li>
          <li><a class="fa fa-twitter" href="https://twitter.com/CulturaFelina?ref_src=twsrc%5Etfw&ref_url=http%3A%2F%2Fwww.laculturamatoalgato.com%2F" target="_blank"></a></li>
          <li><a class="fa fa-instagram" href="https://www.instagram.com/laculturamatoalgato/" target="_blank" class="fa fa-instagram"></a></li>

          </ul>
        </div>
          

        </div><!-- END contact -->
        </div>
</body>

<!-- InstanceEnd --></html>
