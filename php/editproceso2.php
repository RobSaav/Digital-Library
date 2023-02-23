<?php
include_once('db_conn3.php');
//print_r($_POST);
if(!isset($_POST['ID'])){
    header('Location: editadmin.php?mensaje = error');
    echo "error";
    exit();
}

// connect to the database


//initializing variables
if(isset($_POST["ID"])){

    $codigo = $_POST['ID'];
    $uname= $_POST['Nombre'];
    $pass= sha1($_POST['Pass']);
    $Correo= $_POST['Correo'];
}
$sentencia = $bd->prepare("UPDATE empleado SET Nombre = ?, Pass = ?, Correo = ? WHERE ID = ?;");

$resultado = $sentencia->execute([$uname,$pass,$Correo,$codigo]);

if ($resultado === TRUE){
    echo "ok id ".$codigo;
    header("Location: administradores.php?mensaje=Ok, cambiado");

}else{
	$codigo = $_GET['ID'];
	
    echo "ERRROR";
}