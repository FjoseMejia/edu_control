<?php
function connection(){
	$servername 	= "localhost";
	$db 			= "EduControl";
	$username 		= "sena123";
	$password 		= "sena123";
	$conexion = mysqli_connect($servername, $username, $password, $db);
	if (!$conexion){
		die("Error de Conexion: " . mysqli_connect_error());	}
	else{  
		return $conexion;										
	} 
}
?>

