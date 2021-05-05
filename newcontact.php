<?php session_start();?> <!-- iniciamos sesion para poder trabjar con las variables de sesion. -->
<?php include "connectioncontacts.php"?> 
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

	<!--CSS Intern-->
	<style type="text/css">
	</style>

	<!-- Títol de la pàgina -->
	
	<title>Registrata un contacto de confianza</title>

	<!-- <div class="contenedormenu">  Class hr-nav-2
    	<nav class="nav-container style-3">
				<a href="index.php" class="nav-item">Inicio</a>
        <a href="verpeliculas.php" class="nav-item">Ver o editar Filmoteca</a>
				<a href="about.php" class="nav-item">About</a>				
				<a href="cercador.php" class="nav-item">Hacer una busqueda</a>				
    </nav>
</div> -->
</head>

<body>
	<header>Registrata un contacto de confianza</header>
	<section>
		<article>
			<h2>Añadir un nuevo usuario</h2>
				<form method="post" action="db/addcontactDB.php" name="add_pellicula" id="add_pellicula" enctype="multipart/form-data">
					<label>Nombre</label><br>
					<input type="text" name="name" id="name" class="form" placeholder="Tu Nombre de Usuario" required><br>
					<label>Correo electronico</label><br>
					<input type="email" name="mail" id="mail" class="form" placeholder="correo@correo.dominio" required><br>
					<input type="submit" value="Añadir a la DB" class="botonpaginasañadirpelicula">
				</form>
				<br><br><a href='menuuser.php' class='nav-item'>Volver al menu</a>
		</article> 
	</section>
	<footer>
	_____________________________
	</footer>
</body>
</html>
