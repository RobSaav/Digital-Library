<?php 
 include('db_conn2.php');
    if(!isset($_GET['ID'])){
        header('Location: administradores.php?mensaje=error ahora');
        exit();
    }

   
    $codigo = $_GET['ID'];

    $sentencia = $bd->prepare("DELETE FROM empleado where ID = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: administradores.php?mensaje=eliminado');
    } else {
        header('Location: administradores.php?mensaje=error');
    }
    
?>