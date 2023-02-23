<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['NoCuenta']) && isset($_POST['Pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['NoCuenta']);
	$pass = validate($_POST['Pass']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM usuario WHERE NoCuenta='$uname' AND Contrasenia='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['NoCuenta'] === $uname && $row['Pass'] === $pass) {
            	$_SESSION['NoCuenta'] = $row['NoCuenta'];
            	header("Location: Principal.php");
		        exit();
            }else{
				header("Location: ../catalog.html?Exito=Completado");
		        exit();
			}
		}else{
			header("Location: index.php?error=Numero de cuenta o contraseña incorrectos");
	        exit();
		}
	}
	
}else{
	header("Location: ");
	exit();
}