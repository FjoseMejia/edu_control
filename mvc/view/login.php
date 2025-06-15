<?php
session_name("try_login");
session_start();
if(!isset($_SESSION["try"])){
	$try= $_SESSION["try"]= 0;
	$error= $_SESSION["error"]= 0;
}
$try= $_SESSION["try"];
$error= $_SESSION["error"];
$failedEmail= $_SESSION["email"] ?? "";
$failedPassword= $_SESSION["password"] ?? "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduControl</title>
    <!--Css Bootstrap  -->    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="../../css/index.css" rel="stylesheet">
</head>
<body>
    <main class="container">		
		<form action="../controller/controlador_form.php" method="POST" >
			<div class="row">
				<div class="col-md-5">
					<input type="hidden" name="form-type" value="login">
					<div class="mb-3">
						<label for="email" class="form-label ">Correo Electronico</label>
						<input type="email" name="email" class="form-control input" id="email" aria-describedby="emailHelp" required value="<?= $failedEmail?>">				
					</div>
					
					<div class="mb-3">
						<label for="password" class="form-label ">password</label>
						<input type="password" name="password" class="form-control input" id="password" aria-describedby="emailHelp" required value="<?= $failedPassword?>">
					</div>
					
					<div class="mb-3">
						<button type="submit" class="btn btn-primary" id="btn">Ingresar</button>
					</div>
				</div>
			</div>
		</form>
	</main>
	<script>
		var error= <?= json_encode($error) ?>;
		let failedEmail= <?= json_encode($failedEmail) ?>;
		let failedPassword= <?= json_encode($failedPassword) ?>;
	</script>
	
	<script src="../../js/jquery-3.7.1.js"></script>
	<script src="../../js/index.js"></script>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	
	
</body>
</html>