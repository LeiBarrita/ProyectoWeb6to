<?php
$nombreEquipo = $_GET['nombreEquipo'];
$nombres = $_GET['nombres'];
include("conexion.php");

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$consultaE = "SELECT * FROM equipos";
$cursorE = $conn->query($consultaE);
$consultaN = "SELECT * FROM miembros";
$cursorN = $conn->query($consultaN);

$existe = 2;


while( $tuplaE = $cursorE->fetch_assoc() ){
    if ($tuplaE["nombreEquipo"] == $nombreEquipo) {
        while( $tuplaN = $cursorN->fetch_assoc() ){
            if ($tuplaN["nombres"] == $nombres) {
                $sql="INSERT INTO equipo_miembro (idEquipo, idMiembro) VALUES 
                    ((SELECT idEquipo FROM equipos WHERE nombreEquipo = '$nombreEquipo' LIMIT 1), 
                    (SELECT idMiembro FROM miembros WHERE nombres = '$nombres' LIMIT 1))";
                $conn->query($sql);
                if( $conn->query($sql)===TRUE ){
                    echo("Integrante agregado al equipo con éxito");
                    $existe = 1;
                } else {
                    echo("Error al eliminar equipo:".$conn->connect_error); 
                }
                break;
            } else {
                $existe = 0;
            }
        }
        if ( $existe == 1){ break; }
    } else {
        $existe = 0;
    }
}


if ($existe == 0){
    echo ("Los datos no existen");
}

$conn->close();
?>

<p>Regresar a la página <a href="index.php"> anterior</a></p>