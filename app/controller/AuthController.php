<?php
namespace EduControl\controller;
require __DIR__ . '/../../bootstrap.php';
use EduControl\model\UserModel;


class AuthController{
	
    public function showLogin(){
        require __DIR__ . '/../view/login.php';
    }

    public function login($credentials){
		$link= connection();
        $email= strtolower(trim($credentials['email']));
		$password= trim($credentials['password']);
		
		
		
		if(!$objectUser){
			echo "er?or 5!0 consulte con su proveedor ".mysqli_error($link);;
		}
		
		if($dataUser= mysqli_fetch_array($objectUser)){
			session_name("login");
			session_start();
			//$_SESSION['id']= AÚN NO LO PUEDO HACER PORQUE NO HAY REGISTRO
			
		}else{
			session_start();
			$_SESSION["try"]++;
			$_SESSION["error"]= 1;
			$_SESSION["email"]= $email;
			header("location: index.php");
			exit();
		}
    }
}
