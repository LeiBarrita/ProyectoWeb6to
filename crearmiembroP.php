<?php
$nombres = $_GET['nombres'];
$apellidos = $_GET['apellidos'];
include("conexion.php");

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$sql = "INSERT INTO miembros (nombres, apellidos) VALUES ('$nombres', '$apellidos')";

if( $conn->query($sql)==TRUE ){
    echo("Integrante registrado con éxito");
 } else {
    echo("Error al registrar al integrante:".$conn->connect_error); 
 }

$conn->close();
?>

<p>Regresar a la página de <a href="index.php"> inicio</a></p>