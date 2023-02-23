<?php
include_once('db_conn3.php');
//print_r($_POST);
if(!isset($_POST['ID'])){
    header('Location: liststudents.php?mensaje = error');
    echo "error";
    exit();
}

// connect to the database


//initializing variables
if(isset($_POST["ID"])){

    $codigo = $_POST['ID'];
    
    $No= $_POST['NoCuenta'];
    $Ca= $_POST['Carrera'];
    $Se= $_POST['Semestre'];
    $Te= $_POST['Telefono'];
    $co= $_POST['Contrasenia'];
    $Em= $_POST['Correo'];
}
$sentencia = $bd->prepare("UPDATE usuario SET NoCuenta = ?, Carrera = ?, Semestre = ?, Telefono = ? , Contrasenia = ?, Correo = ? WHERE ID = ?;");

$resultado = $sentencia->execute([$No,$Ca,$Se,$Te,$co,$Em,$codigo]);

if ($resultado === TRUE){
    echo "ok id ".$codigo;
    header("Location: liststudents.php?mensaje=Ok, cambiado");

}else{
	$codigo = $_GET['ID'];
	
    echo "ERRROR";
}