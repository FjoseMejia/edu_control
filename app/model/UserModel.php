<?php
namespace EduControl\model;

class UserModel{
	private $email;
	private $password;
	private $cursor;
	
	public function __construct($email, $password, $link){
		$this->email= $email;
	}
	$sqlLogin= "SELECT * FROM user WHERE email='$email' AND password= '$password'";
	$objectUser= mysqli_query($link, $sqlLogin);
}