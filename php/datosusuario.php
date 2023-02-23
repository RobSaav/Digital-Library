<?php
//print_r($_POST);
if(empty($_POST["Enviar"]) || empty($_POST["NoCuenta"]) || empty($_POST["Carrera"]) || empty($_POST["Semestre"]) || empty($_POST["Telefono"]) 
|| empty($_POST["Contrasenia"]) || empty($_POST["Correo"])){
    header('Location: TuCuenta.php?mensaje=falta informacion');
    exit();
}




// connect to the database
include("db_conn3.php");


//initializing variables
$No= $_POST['NoCuenta'];
$Ca= $_POST['Carrera'];
$Se= $_POST['Semestre'];
$Te= $_POST['Telefono'];
$co= $_POST['Contrasenia'];
$Em= $_POST['Correo'];



$sentencia = $bd->prepare("INSERT INTO usuario(NoCuenta,Carrera,Semestre,Telefono,Contrasenia,Correo) VALUES (?,?,?,?,?,?);");
$resultado2 = $sentencia->execute([$No,$Ca,$Se,$Te,$co,$Em]);


if($resultado2 === TRUE){
    header('Location: index.php?mensaje=Registrado');
}else{
    header('Location: TuCuenta.php?mensaje=falta informacion');
}


?>


