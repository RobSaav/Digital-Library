<?php
$contraseña = "";
$usuario = "root";
$nombre_bd = "Biblioteca";

try{
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombre_bd,
        $usuario,
        $contraseña,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    //echo "Conectado";
}catch(Exception $e){
    echo "Problema de conexion: " .$e->getMessage();
}

?>