<?php
function processLogin($postData, $link){
	$email= trim($postData['email']);
	$password= trim($postData['password']);
	
	$sqlLogin= "SELECT * FROM user WHERE email='$email' AND password= 'password'";
	$objectUser= mysqli_query($link, $sqlLogin);
	
	if(!$objectUser){
		echo "er?or 5!0 consulte con su proveedor ".mysqli_error($link);;
	}
	
	if($dataUser= mysqli_fetch_array($objectUser)){
		session_name["login"];
		session_start();
		//$_SESSION['id']= AÚN NO LO PUEDO HACER PORQUE NO HAY REGISTRO
		
	}else{
		session_name("try_login");
		session_start();
		$_SESSION["try"]++;
		$_SESSION["error"]= 1;
		$_SESSION["email"]= $email;
		$_SESSION["password"]= $password;
		header("location: ../../index.php");
	}
}

