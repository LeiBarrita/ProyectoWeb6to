<?php
        $nombreLista = $_POST['nombreLista'];
        $infoLista = $_POST['infoLista'];
    
        //Conection
        $conn = new mysqli('sql107.epizy.com
        ', 'epiz_31919460', 'kzyUFeR5tQ0', 
        'epiz_31919460_sharecheckdata');
        if($conn->connect_error){
            die('Connection Failed: '.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("INSERT INTO listas 
                (nombreLista, infoLista) VALUES (?, ?)");
            $stmt->bind_param("ss", $nombreLista, $infoLista);
            $stmt->execute();
            echo "Registro de nueva lista exitoso!";
            $stmt->close();
            $conn->close();
        }
    ?>