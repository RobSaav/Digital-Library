<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['NoCuenta']) && isset($_POST['Contrasenia'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$No = validate($_POST['NoCuenta']);
	$co = validate($_POST['Contrasenia']);

	if (empty($No)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($co)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM usuario WHERE Nombre='$No' AND Pass='$co'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['NoCuenta'] === $No && $row['Contrasenia'] === $co) {
            	$_SESSION['NoCuenta'] = $row['NoCuenta'];
            	$_SESSION['Contrasenia'] = $row['Contrasenia'];
            	$_SESSION['ID'] = $row['ID'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: admin.php?error=Contraseña o nombre de empleado fallidos");
		        exit();
			}
		}else{
			header("Location: admin.php?error=Contraseña o nombre de empleado fallidos");
	        exit();
		}
	}
	
}else{
	header("Location: ");
	exit();
}