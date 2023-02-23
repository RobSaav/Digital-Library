<?php
//print_r($_POST);


// connect to the database
include("db_conn3.php");


//initializing variables
$No= $_POST['Nocuenta'];
$Ca= $_POST['Carrera'];
$Se= $_POST['Semestre'];
$Te= $_POST['Telefono'];
$co= sha1( $_POST['Contrasenia']);
$Em= $_POST['Correo'];

if(!empty($No) && !empty($Ca) && !empty($Se) && !empty($Te) && !empty($co) && !empty($Em))
{
    $sentencia = $bd->prepare("INSERT INTO usuario(NoCuenta,Carrera,Semestre,Telefono,Contrasenia,Correo) VALUES (?,?,?,?,?,?);");
    $resultado2 = $sentencia->execute([$No,$Ca,$Se,$Te,$co,$Em]);


if($resultado2 === TRUE){
    header('Location: index.php?mensaje=Registrado');
}else{
    header('Location: TuCuenta.php?mensaje=falta informacion bd');
}
}else
{
	header('Location: TuCuenta.php?mensaje=falta informacion');
    exit();
}

?>
