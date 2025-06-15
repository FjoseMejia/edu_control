<?php
require_once "../model/procesar_form.php";
require_once "../../conexion.php";
$link= conectar();
$formType= $_POST['form-type'] ?? 'Invitado uwu';

if(isset($formType)){
	switch($formType){
		case 'registro':
			processRegister($_POST, $link);
			break;
		case 'login':		    
			processLogin($_POST, $link);
			break;
		default:
			header("location: index.php?ala=22");
			break;
	}
}
