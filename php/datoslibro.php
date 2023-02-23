<?php
//print_r($_POST);
if(empty($_POST["Enviar"]) || empty($_POST["ISB"]) || empty($_POST["Titulo"]) || empty($_POST["Autor"]) || empty($_POST["Anio"]) || empty($_POST["Editorial"])
|| empty($_POST["Sinopsis"]) || empty($_POST["Portada"]) || empty($_POST["Genero"])){
    header('Location: books.php?mensaje=falta informacion');
    exit();
}




// connect to the database
include("db_conn2.php");


//initializing variables
$ISBN= $_POST['ISB'];
$Titulo= $_POST['Titulo'];
$Autor= $_POST['Autor'];
$Year= $_POST['Anio'];
$Editorial= $_POST['Editorial'];
$Sinopsis= $_POST['Sinopsis'];
$Portada= $_POST['Portada'];
$Genero= $_POST['Genero'];

$sentencia = $bd->prepare("INSERT INTO libro(ISB,Titulo,Autor,Anio,Editorial,Sinopsis,Portada,Genero) VALUES (?,?,?,?,?,?,?,?);");
$resultado2 = $sentencia->execute([$ISBN,$Titulo,$Autor,$Anio,$Editorial,$Sinopsis,$Portada,$Genero]);



?>