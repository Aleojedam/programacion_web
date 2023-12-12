<?php

# datos de conexion a la base de datos

$db_host = "localhost";
$db_name = "carnet_identidad";
$db_user = "root";
$db_pass = "";

//crear conexion de manera procedural

$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

//verificar conexion

if(!$conexion){
    die("Conexion fallida: " . mysqli_connect_error());
}

//obtener datos de la tabla

$sql = "SELECT * FROM carnet;";

//ejecutar la consulta

$resultado = mysqli_query($conexion,$sql);

//print_r($resultado);

//verificar si hay resultados
//
//if(mysqli_num_rows($resultado) > 0){
    //mostrar datos de cada fila
  //  while($row = mysqli_fetch_assoc($resultado)){
    //    echo "Id: " . $row["id"] . "<br>";
      //  echo "Primer Nombre: " . $row["primer_nombre"] . "<br>";
        //echo "Segundo Nombre: " . $row["segundo_nombre"] . "<br>";
        //echo "Primer apellido : " . $row["apellido_paterno"] . "<br>";
        //echo "Segundo Apellido: " . $row["apellido_materno"] . "<br>";
        //echo "Rut: " . $row["rut"] . "<br>";
       // echo "fecha nacimiento: " . $row["fecha_nacimiento"] . "<br>";
   // }
//}else{
  //  echo "o resulltados";
//}