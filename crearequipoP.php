<?php
$nombreEquipo = $_GET['nombreEquipo'];
$infoEquipo = $_GET['infoEquipo'];
include("conexion.php");

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$sql = "INSERT INTO equipos (nombreEquipo, infoEquipo) VALUES ('$nombreEquipo', '$infoEquipo')";

if( $conn->query($sql)==TRUE ){
    echo("Equipo registrado con éxito");
 } else {
    echo("Error al crear el equipo:".$conn->connect_error); 
 }

$conn->close();
?>

<p>Regresar a la página de <a href="index.php"> inicio</a></p>