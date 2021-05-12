<?php
session_start();
//dades de connexió
include "../connectioncontacts.php";
$username = $_SESSION['username'];
//print_r ($_SESSION);


  //comprobació per a saber si l'usuari no ha pasat pel formulari i poderlo xutar
  if ($_POST == null){
    header("Location: ../registration.php");
    die();
  }

    //Llistem les variables amb les que treballarem per a poder afegir pelicules a la DB
    $name = $_POST["name"];
    $mail = $_POST["mail"];

//escribim la consulta que voldrem executar
$sql_id =  "SELECT id FROM users WHERE username = '$username'";
//SELECT * FROM `users` WHERE `username` = 'aaaaaa'
// $sql = "INSERT INTO $taula (nombre, mail ) VALUES ('$name','$mail')";



//fem la connexió
$conn = new mysqli($servidor, $usuari, $contrasenya, $basededades);

// comprovem la connexió
if ($conn->connect_error) { //si falla
echo "Fallada en la connexió: ".$conn->connect_error;
die();
 }else{ //tot ok
   echo "ok<br>";
}

$id_newuser = $conn->query($sql_id); // executem una consulta a la db per a obtenir la id del usuario.
$id_newuser = $id_newuser->fetch_assoc();
$id_newuser = $id_newuser["id"];
echo $id_newuser;

$sql = "INSERT INTO $taula (nombre, mail, id_usuario ) VALUES ('$name', '$mail', $id_newuser)";


if ($conn ->query($sql) === TRUE){ // es a dir si hi ha conexio a la db seguim endevant.
  echo "OK! Contacto añadido.";
  $conn->close();

  header("Location: ../menuuser.php");
  die();
}else {
  echo "Error: ".$sql."<br>".$conn->error;
}

?>