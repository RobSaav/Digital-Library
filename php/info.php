<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['Nombre']) && isset($_POST['Pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Nombre']);
	$pass = validate($_POST['Pass']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM empleado WHERE Nombre='$uname' AND Pass='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Nombre'] === $uname && $row['Pass'] === $pass) {
            	$_SESSION['Nombre'] = $row['Nombre'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: books.php");
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