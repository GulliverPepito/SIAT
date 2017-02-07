<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Relaciones</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/Login.css">
	<link rel="stylesheet" href="css/maestro.css">
	<link rel="stylesheet" href="css/Relaciones.css">
	 <link href="https://fonts.googleapis.com/css?family=Dosis:700|Droid+Sans:700|Patua+One|Roboto:700" rel="stylesheet">
	 <link rel="stylesheet" href="css/Alumno.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/sweetalert.css">
	<script src="jquery.js"></script>

</head>
<body>
		<header class="cabecera fondo-blanco">
		<div>
			<img src="imagenes/menu.png" class="menu-bar">
			<h1 class="patua">SIAT</h1>
			<!--<img src="imagenes/SIATLogo.png" class="home-logo img-responsive">-->
			<a href="Administrativos.html"><img src="imagenes/homepage.png" class="home-logo img-responsive"></a>
		</div>
		<div class="sidebar fondo-blanco">
			<nav>
				<ul>
					<img src="imagenes/man-user.png" class="user">
					<li><a href="">
					<img src="imagenes/user.png">
					Perfil</a></li>
                    <li><a href="">
                    <img src="imagenes/settings.png">
                    Configuraciones</a></li>
					<li><a href="">
					<img src="imagenes/help.png">
					Ayuda</a></li>
					<li><a href="">
					<img src="imagenes/power.png">
					Cerrar Sesion</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section>
	<h1 class="patua">Relaciones</h1>
	<h1 class="patua">Maestro-Clase</h1>
		<div class="contenido">
		<form method="post" action="generar.php" class="roboto">
			<label for="codmaestro">Codigo</label>
			<input type="text" name="codmaestro" id="codmaestro">
			<input id="codmaestro" type="button" name="btn-generar" class="btn-primary button" onclick="javascript:obtenerMaestro();" value="Generar">
			<br></br>
			<label for="nom_maestro">Nombre</label>
			<input type="text" name="nom_maestro" value="" id="nom_maestro"/>
			<label for="">Segundo Nombre</label>
			<input type="text" name="segnommaestro" id="seg_nombre">
			<br></br>
			<label for="ape_paterno">Apellido Paterno</label>
			<input type="text" name="ape_paterno" id="ape_paterno">
			<label for="ape_materno">Apellido Materno</label>
			<input type="text" name="ape_materno" id="ape_materno">
			<br></br>
			<label for="licenciatura">Licenciatura</label>
			<input type="text" name="licenciatura" id="licenciatura">
		</form>
		<div class="clases roboto">
			<h1 class="patua">Agregar Clases</h1>
			<form action="generar.php" method="post">
				<label for="codclase">Codigo Clase</label>
				<input type="text" name="codclase" id="codclase">
				<input type="button" name="btn-generar2" class="btn-primary button" value="Generar" onclick="javascript:obtenerClase();">
				<br></br>
				<label for="nomclase">Nombre</label>
				<input type="text" name="nomclase" id="nomclase">
				<br></br>
				<input type="button" name="btn-agregar1" class="btn-primary btn-margin button" value="Agregar" onclick="javascript:agregarClase();">
			</form>
		</div>
		<div id="clases">
		</div>
	</div>
	</section>
</body>
<script src="js/sweetalert.min.js"></script>
<script src="js/RelacionesAministrativas.js"></script>
<script src="js/Abrir.js"></script>

</html>