<?php session_start();?> <!-- iniciamos sesion para poder trabjar con las variables de sesion del archivo limit_pag.php. -->
<!DOCTYPE <!DOCTYPE html>
<html lang="esp">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js
    "></script>

    <link href="csscont.css" rel="stylesheet">
  </head>
  <body>
  
 


<div id="master-wrap">
  <div id="logo-box">

    <div class="animated fast fadeInUp">
      <div class="icon"></div>
      <h1>Bienvenid@</h1>
    </div>

    <div class="notice animated fadeInUp">
      <p class="lead">Cada cuanto hay que comprobar tu seguridad?</p>
      <a class="btn animation" href="javascript:history.back()">&larr; Back</a>
    </div>

    <form method="post" name="temporizador" id="temporizador" enctype="form-data">
      <label>Segundos</label><br>
      <input type="number" name="time" id="time" class="form" placeholder="0000000000" value='' required><br>
      <br>

    <?php include "db/get_contactos.php";
    $contactos = get_contactos();
      echo "<div class='contenedor'>";
					echo $contactos[0]; // la funcion peliculaslistadas devuelve un array, y cogemos el primer dato pasado que son elementos de la DB, es decir las peliculas con sus datos.
				echo "</div>"; 
        
        ?>
    
      <!-- radio button con los contactos -->

      <input value="Guardar" type="submit" style= "visibility: hidden">
    </form>

      <button onclick="processData()">Empezar cuenta atràs</button>



    <div class="footer animated slow fadeInUp">
      <p id="timer">
      </p>
      <p id="contactset"></p>
    </div>

  </div>
  <!--  -->
</div>
<!--  -->

</body>
</html>