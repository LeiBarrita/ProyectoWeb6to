<?php
$nombreEquipo = $_GET['nombreEquipo'];
include("conexion.php");

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$consulta = "SELECT * FROM equipos";
$cursor = $conn->query($consulta);

$existe = 2;


while( $tupla = $cursor->fetch_assoc() ){
    if ($tupla["nombreEquipo"] == $nombreEquipo) {
        $sql="DELETE FROM equipos WHERE nombreEquipo = '$nombreEquipo'";
        $conn->query($sql);
        if( $conn->query($sql)===TRUE ){
            echo("Equipo eliminado con éxito");
            $existe = 1;
         } else {
            echo("Error al eliminar euipo:".$conn->connect_error); 
         }
            break;
    } else {
        $existe = 0;
    }
}


if ($existe == 0){
    echo ("El equipo no existe");
}

$conn->close();
?>

<p>Regresar a la página <a href="teams.php"> anterior</a></p>