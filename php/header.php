<?php 
	session_start(); 
	if(!isset($_SESSION['contador'])){
		$_SESSION['contador'] = 0;
	}	
	$contador = $_SESSION['contador'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name"viewport" content="width=device-width, initial-scale-1">
	<meta name="keywords" content="tienda, arduino, componentes electronicos, rasperry pi, accesorios electronicos, arduino leonardo">
	<meta name="description" content="Tienda Virtual de Componentes electronicos para tus proyectos universitarios, se encuentran los ultimos modelos actualizados y los ultimos en el mercado">
    <meta name="author" content="ElectroDigital Inc.">
    <!-- ICONO Favicon -->
    <link rel="icon" href="images/favicon.ico">
	<title>ElectroDigital | Tienda Virtual de Electronica</title>
	<!-- Archivos CSS para diseño -->
	<!--link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"-->
	<link rel="stylesheet" type="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<header id="header" class="">
	
	<div id="btnuser">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-8">
					<div class="btn-group">
					  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="modal" data-target="#myModal" aria-haspopup="true" aria-expanded="false">
					    <span class="glyphicon glyphicon-user"></span>Iniciar Sesion o Registrarse</span>
					  </button>
					 
					</div>

				</div>	
			</div>
		</div>
	</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Iniciar Sesion o Registrarse</h4>
	      </div>
	      <div class="modal-body">
	        <div class="container-fluid">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<form class="" action="#" method="POST">
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputEmail3">Correo: </label>
						    <input type="text" name="mailUser" class="form-control" id="txtemailuser" placeholder="Correo o usuario">
						  </div>
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputPassword3">Contraseña:</label>
						    <input type="password" name="passUser" class="form-control" id="txtpassuser" placeholder="Contraseña">
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Recordarme
						    </label>
						  </div>
						  <button type="submit" id="btningresar" class="btn btn-primary">Ingresar</button>
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						</form>
					</div>
				</div>
			</div>
	      </div>
	      <div class="modal-footer">
			<!-- Aqui va el footer del modal-->
			<center>
				<h4>Registrarse Aquí</h4>
				<button type="submit" id="btnregistrar" class="btn btn-primary btn-lg">Registrar</button>
			</center>
	      </div>
	    </div>
	  </div>
	</div>
	

	</header><!-- /header -->	
	<nav>
	<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./">ElectroDigital</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <!-- Navegación -->
				<li><a href="#">Arduino</a></li>
				<li><a href="#">Rasperry Pi</a></li>
				<li><a href="#">Componentes</a></li>
				<li><a href="#">Accesorios</a></li>
                <li><a></a></li>
                <li>
                	    <div id="busqueda">
					    	<form class="navbar-form navbar-right" role="search" accept-charset="utf-8" method="POST">
					          <div class="form-group">
					            <input type="text" name="busqueda" id="busqueda" maxlength="50" class="form-control" placeholder="¿Que componente Busca?" autocomplete="off" onKeyUp="buscar();">
					          </div>
					          <!--<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Buscar</button> -->
					        </form>
						</div>
                </li>
                <li><a href="confirmar.php" id="carrito">0 Items - <span class="glyphicon glyphicon-shopping-cart"></span> Carrito $0</a></li>
                <li><a href="destruir.php"><button class="btn btn-danger">Vaciar Carrito</button></a></li>
              </ul>
				
            </div>
          </div>
        </nav>

      </div>
	</nav>