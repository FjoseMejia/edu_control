<?php
require_once "../config/app.php";
session_start();

if(isset($_SESSION[APP_SESSION_NAME])){
	header("Location: ".APP_URL."dashboard");
	exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
	<link href="./css/login.css" rel="stylesheet">
</head>
<body>
	<?php if (!empty($_SESSION['error'])): ?>
		<div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
		<?php unset($_SESSION['error']); ?>
	<?php endif; ?>
	
	<?php if (!empty($_SESSION['message'])): ?>
		<div class="alert alert-danger"><?= $_SESSION['message'] ?></div>
		<?php unset($_SESSION['message']); ?>
	<?php endif; ?>
	<main>
		<div class="container">			
			<div class="container-login">
				<img class="logo" src="" alt="logo">
				<h1>Klasroom</h1>
				<form class="form-login" action="<?= APP_URL?>login" method="POST">
					<label class="label" for="email">Correo electronico</label>
					<input class="input" type="email" id="email" name="email" value="<?= $_GET['email'] ?? '' ?>">	
					
					<label class="label" for="password">Contraseña</label>
					<input class="input input-password" type="password" id="password" name="password" placeholder="********" >
					
					<input class="btn btn-primary btn-login" type="submit" value="Ingresar">
					<a>Olvidé mi contraseña</a>
					<input class="btn btn-secundary btn-register" type="submit" value="Registrarse">
				</form>
			</div>
		</div>
	</main>	
	
	<!--<script>
		var error= <?= json_encode($error) ?>;
		let failedEmail= <?= json_encode($failedEmail) ?>;
	</script>
	
	<script src="/EduControl/public/js/jquery-3.7.1.js"></script>
	<script src="/EduControl/public/js/index.js"></script>	-->
</body>
</html>