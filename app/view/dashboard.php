<?php
require_once __DIR__ . '/../../config/app.php';
$name= $_SESSION[APP_SESSION_NAME]['name']; 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME?></title>	
	<link href="css/dashboard.css" rel="stylesheet">

</head>
<body>

	<nav>
		<ul>
			<li>Inicio</li>
			<li>Cursos</li>
			<li>Tarea</li>
			<li>Grades</li>
		</ul>
	</nav>
	
	
	<main>
		<section class="container">
			<div>
				<h1>Hola, <?= $name ?></h1>
			</div>
			
			<section class="Container-courses">
				<h2>Courses</h2>
				
				<article>
					<h3>ADSO</h3>
					<p>Programado hoy</>
				</article>
			</section>
		</section>		
	</main>
	
	
</body>
</html>