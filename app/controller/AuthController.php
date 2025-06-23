<?php
namespace EduControl\controller;

require_once __DIR__ . '/../../config/app.php';

use EduControl\model\UserModel;
use EduControl\helpers\ValidationHelper;
use EduControl\helpers\PasswordHelper;
use EduControl\exceptions\ValidationException;

class AuthController{
		
    public function showLogin(){
        require __DIR__ . '/../view/login.php';
    }

    public function login($credentials){
		try {
			$email = $credentials['email'];
			$email = ValidationHelper::normalizeEmail($email);		

			$password = $credentials["password"];
			$password = PasswordHelper::encryptPass($credentials["password"]);
			$userModel = new UserModel($email, $password);

			$stmt = $userModel->findByEmail();			

			if ($stmt) {
				echo "True";
			} else {
				echo "False";
			}

		} catch (ValidationException $e) {
			session_start();
			$_SESSION["error"] = $e->getMessage();
			header("Location: login.php");

		} catch (\Exception $e) { 
			session_start();
			$_SESSION["error"] = "Error del sistema. Intenta más tarde.";	
			header("Location: ".APP_URL);
			exit;
		}
	}

}
