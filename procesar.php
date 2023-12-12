<?php

require_once("conexion.php");

$primer_nombre = $_POST["primer_nombre"];
$segundo_nombre = $_POST["segundo_nombre"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$rut  = $_POST["rut"];
$nacionalidad = $_POST["nacionalidad"];
$ciudad = $_POST["ciudad"];
$sexo = $_POST["sexo"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$otra_profesion = $_POST["otra_profesion"];
$discapacidad = $_POST["discapacidad"];
$donante = $_POST["donante"];
$fecha_emision = $_POST["fecha_emision"];
$fecha_devencimiento = $_POST["fecha_devencimiento"];


$sql = "INSERT INTO carnet (primer_nombre,segundo_nombre,apellido_paterno,apellido_materno,rut,nacionalidad,ciudad,sexo,fecha_nacimiento,otra_profesion,discapacidad,donante,fecha_emision,fecha_devencimiento) VALUES ('$primer_nombre','$segundo_nombre','$apellido_paterno', '$apellido_materno','$rut','$nacionalidad','$ciudad','$sexo','$fecha_nacimiento','$otra_profesion','$discapacidad','$donante','$fecha_emision','$fecha_devencimiento')";

// ejecutar la consulta

$resultado = mysqli_query($conexion, $sql);

if($resultado){
    echo "<br>Se inserto correctamente el usuario.<br>";
}else{
    echo "<br>Error al insertar el usuario.<br>";
    echo "<br>La consulta $sql - Fallo: " + mysqli_error($conexion);
}


//cerrar la conexion
mysqli_close($conexion);