<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SIAT</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/Login.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	 <link href="https://fonts.googleapis.com/css?family=Dosis:700|Droid+Sans:700|Patua+One|Roboto:700" rel="stylesheet">
	 <script src="jquery.js"></script>
</head>
<body class="fondo">
	<header class="cabecera blanco inline-block">
		<img src="imagenes/SIATLogo.png" class="logo img-responsive">
		<h1 class="patua inline-block centrar ">SIAT</h1>
	</header>
	<section>
	<div class="contenedor  centrar radiobuttons roboto">
		<form method="post" action="login.php">
			<input type="radio" name="tipousuario" id="alumno" value="alumno">
			<label for="alumno" name="tipousuario">Alumno</label>
			<input type="radio" name="tipousuario" id="Maestro" value="maestro">
			<label for="Maestro">Maestro</label>
			<input type="radio" name="tipousuario" id="Administrativo" value="administrativo">
			<label for="Administrativo">Administrativo</label>
		<!--</form>
		<form action="login.php" method="post" id="login">-->
				<input type="text" name="usuario" placeholder="No.Control" required><br><br>
				<input type="password" name="contrasenia" placeholder="Contraseña" required><br><br>
				<button  class="btn btn-primary">Iniciar Sesion</button>
		</form>
		<p><a href="#" class="roboto">Olvide Contraseña</a></p>
	</div>
	</section>
	<footer class="pie centrar blanco roboto">
		<p>Todos los Derechos Reservados para SIAT&copy; 2016-2017<p>
	</footer>
</body>
</html>