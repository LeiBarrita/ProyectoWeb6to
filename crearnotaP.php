<?php
$nombreLista = $_GET['nombreLista'];
$nota = $_GET['nota'];
include("conexion.php");

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$sql = "INSERT INTO notas (idLista, nota) VALUES (
    (SELECT idLista FROM listas WHERE nombreLista = '$nombreLista' LIMIT 1), '$nota')";

if( $conn->query($sql)==TRUE ){
    echo("Nota creada con éxito");
 } else {
    echo("Error al crear la nota:".$conn->connect_error); 
 }

$conn->close();
?>

<p>Regresar a la página de <a href="lists.php"> inicio</a></p>