<?php

  function get_contactos(){

		include "connectioncontacts.php";
		$username = $_SESSION['username'];

    $sql_id =  "SELECT id FROM users WHERE username = '$username'";

		// echo "$username <hr>";
//connect to database
$conn = new mysqli($servidor, $usuari, $contrasenya,  $basededades);

//check connection
if ($conn->connect_error) {
	return "DATABASE ERROR: ".$conn->connect_error;
	die();
}else { 
	// echo "conexion correcta <hr>";
}

//run the query
$resultatid = $conn->query($sql_id);

if ($resultatid->num_rows != 0) { //num rows = 0 means thant this user doesnt exist
	while($fila = $resultatid->fetch_assoc()) {
	// $return = -1;
	    $idusuari = $fila["id"];

	}}
	else {
		echo "Sense resultats..."; //la taula no te registres
	}

// echo "$idusuari <hr>";    

$sql = "SELECT * FROM $taula WHERE id_usuario = '$idusuari'";

$resultat = $conn->query($sql);


$data ='<p><br>Porfavor selecciona tu contacto de confianza</p>';

//check results
if ($resultat->num_rows != 0) { //num rows = 0 means thant this user doesnt exist
	while($fila = $resultat->fetch_assoc()) {
	// $return = -1;
	    $nombrecontacto = $fila["nombre"];
			$mailcontacto = $fila["mail"];
			// $id = $fila["id"];
		

$data = $data.'<br><input type="radio" id='.$fila["nombre"].' name='.$fila["nombre"].'  value='.$fila["nombre"].'>
<label for="nombre">'.$fila["nombre"].' con mail '.$fila["mail"].'</label><br>';

}
}else {
  echo "Sense resultats..."; //la taula no te registres
}

$conn->close();

$return = [$data];

return $return;
	// $query=mysqli_query($basededades,"SELECT * FROM users where username='$user'")or die(mysqli_error());
	// $row=mysqli_fetch_array($query);
  }

?>