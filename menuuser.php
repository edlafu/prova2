<?php session_start();
if (!isset($_SESSION["username"])){ //if user are not loged in go login
	header("Location: index.php");
	die();}
	else{
		$user=$_SESSION["username"];
	}
 ?>

<!doctype html>
<html lang="es">
<head>
	<!-- Informació Meta -->
	<meta charset="utf-8"/>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Enllaç a l'arxiu CSS Extern -->
	<link rel=stylesheet href="css.css" type="text/css"/>
	<!-- <link rel="stylesheet" href="demo.css" type="text/css" media="screen" /> -->
  <!--CSS Intern-->
	<style type="text/css">
	</style>

	<!-- Títol de la pàgina -->
	<title>Menu de usuario</title>
</head>
<body>
	<header></header>
	<section>
		<article>
			<!-- empieza el menu de desplazamiento por la pagina  -->
			<div class="contenedormenu"> <!-- Class hr-nav-2-->
    	<nav class="nav-container style-3">
        <a href="edituser.php" class="nav-item">Ver o editar Perfil</a>
        <a href="newcontact.php" class="nav-item">Añadir contacto de confianza</a>
				<a href="contador.php" class="nav-item">Iniciar un contador</a>	
				<a href="map.php" class="nav-item">Visualizar el mapa</a>				
    </nav>
</div>
		</article> 
	</section>
	<footer>
	</footer>
</body>
</html>
