<?php
require_once __DIR__ . '/../vendor/autoload.php';
use EduControl\controller\AuthController;


$auth= new AuthController(); 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$auth->login($_POST);	
}else{
	$auth->showLogin(); 
}
