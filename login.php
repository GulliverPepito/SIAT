
<?php
$conexion    = mysqli_connect("localhost", "root", "diego", "prueba");
if (!empty($_POST)) {
	$tipousuario = $_POST['tipousuario'];
	$usuario     = mysqli_real_escape_string($conexion, $_POST['usuario']);
	$contrasenia = mysqli_real_escape_string($conexion, $_POST['contrasenia']);
	$sha1        = sha1($contrasenia);
	$consulta    = "SELECT * FROM usuario WHERE nocontrol='$usuario' AND contrasenia='$sha1' AND tipo_usu='$tipousuario'";
	$resultado   = mysqli_query($conexion, $consulta);
	$filas       = mysqli_num_rows($resultado);
    if ($filas > 0) {
        echo 1;
    }else {
	   echo $filas;
    }
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>