<?php
$tag = $_POST['tag'];
$conexion = mysqli_connect("localhost", "root", "diego", "prueba");
if ($tag=="maestro") {
    $codmaestro = mysqli_real_escape_string($conexion, $_POST['codmaestro']);
    $consulta = "SELECT * FROM maestros WHERE cod_maestro='$codmaestro'";
    $resultado = mysqli_query($conexion,$consulta) or die(mysql_error());
    $filas       = mysqli_num_rows($resultado);
    $row = $resultado->fetch_assoc();
    $respuesta = new stdClass();
    if($filas > 0){
         $respuesta->nombre = $row['nombre'];
         $respuesta->seg_nombre = $row['segundo_nombre'];
         $respuesta->ap_paterno = $row['ap_paterno'];
         $respuesta->ap_materno = $row['ap_materno'];
         $respuesta->licenciatura = $row['licenciatura'];
        echo json_encode($respuesta);
    }else{
        echo 0;
    }
     
}
if($tag=="clase"){
    $codclase = mysqli_real_escape_string($conexion, $_POST['codclase']);
    $consulta = "SELECT * FROM clases WHERE id_clase='$codclase'";
    $resultado = mysqli_query($conexion,$consulta) or die(mysql_error());
    $filas       = mysqli_num_rows($resultado);
    $row = $resultado->fetch_assoc();
    $respuesta = new stdClass();
    if($filas > 0){
        $respuesta->clase = $row['clase'];
        echo json_encode($respuesta);
    }else{
        echo 0;
    }
}
if($tag=="agregar"){
    $clase = mysqli_real_escape_string($conexion, $_POST['clase']);
    $maestro = mysqli_real_escape_string($conexion, $_POST['maestro']);
    $codagregar = $maestro."-".$clase;
    $sql= "INSERT INTO clases_agregadas VALUES('$codagregar','$clase','$maestro')";
    //$resultado = mysqli_query($conexion,$consulta) or die(mysql_error());
    //$filas = mysqli_num_rows($resultado);
    if($conexion->query($sql) === TRUE){
        echo 1;
    }else{
        echo 0;
    }
}

//mysqli_free_result($resultado);
//mysqli_close($conexion);

?>