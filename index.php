<?php
session_start();
if(!isset($_SESSION['id'])){
	header("location: mvc/view/login.php");
	exit();
}else{
	echo "No ha iniciado sesión";
}
