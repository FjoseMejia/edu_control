<?php
namespace EduControl\model;
use EduControl\model\MainModel;
use PDO;

class UserModel extends MainModel{
	private $email;
	private $password;
	
	public function __construct($email, $password){
		$this->email= $email;
		$this->password= $password;		
	}
	
	public function findByEmail() {
		$queryLogin = "SELECT user.email FROM user WHERE email = '{$this->email}'";
		$stmt= $this->executeQuery($queryLogin);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	protected function verificateUser($cursor){
		$queryLogin= "SELECT user.email
				FROM user 
				WHERE email='{$this->email}' 
				AND password= '{$this->password}'";
		
	}	
}