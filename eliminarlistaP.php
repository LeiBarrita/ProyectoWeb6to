<?php
$nombreLista = $_GET['nombreLista'];
include("conexion.php");

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$consulta = "SELECT * FROM listas";
$cursor = $conn->query($consulta);

$existe = 2;


while( $tupla = $cursor->fetch_assoc() ){
    if ($tupla["nombreLista"] == $nombreLista) {
        $sql="DELETE FROM listas WHERE nombreLista = '$nombreLista'";
        $conn->query($sql);
        if( $conn->query($sql)===TRUE ){
            echo("Lista eliminada con éxito");
            $existe = 1;
         } else {
            echo("Error al eliminar lista:".$conn->connect_error); 
         }
            break;
    } else {
        $existe = 0;
    }
}


if ($existe == 0){
    echo ("La lista no existe");
}

$conn->close();
?>

<p>Regresar a la página <a href="lists.php"> anterior</a></p>