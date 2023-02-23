<?php 
 include('db_conn2.php');
    if(!isset($_GET['ID'])){
        header('Location: liststudents.php?mensaje=error ahora');
        exit();
    }

   
    $codigo = $_GET['ID'];

    $sentencia = $bd->prepare("DELETE FROM usuario where ID = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: liststudents.php?mensaje=eliminado');
    } else {
        header('Location: liststudents.php?mensaje=error');
    }
    
?>