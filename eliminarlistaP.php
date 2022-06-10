<?php
$nombreLista = $_GET['nombreLista'];
$infoLista = $_GET['infoLista'];
include("conexion.php");

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$sql = "INSERT INTO listas (nombreLista, infoLista) VALUES ('$nombreLista', '$infoLista')";

if( $conn->query($sql)==TRUE ){
    echo("Lista registrada con éxito");
 } else {
    echo("Error al crear la lista:".$conn->connect_error); 
 }

$conn->close();
?>

<p>Regresar a la página de <a href="index.php"> inicio</a></p>