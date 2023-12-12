<?php
// Conexión a la base de datos (igual que en procesar.php)
require_once("conexion.php");

// Obtener datos de la base de datos
$sql = "SELECT * FROM carnet;";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
</head>

<body style="background-color: #ECF0F1;" >
    <div class="container-fluid my-5">
    <div class="row" >
        <h2 class="text-center mb-4">REGISTRO DE USUARIOS</h2>
        
        <table class="table table-bordered table-striped " style="white-space: nowrap; " >
       
            <thead class="table-success">
                <tr>    

                    <th>Primer <br> Nombre</th>
                    <th>Segundo<br> Nombre</th>
                    <th>Apellido<br> paterno</th>
                    <th>Apellido<br> Materno</th>
                    <th>Rut</th>
                    <th>Nacionalidad</th>
                    <th>Ciudad<br> Nacimiento</th>
                    <th>Sexo</th>
                    <th>Fecha<br> Nacimiento</th>
                    <th>Profesión</th>
                    <th>Registro<br> Discapacidad</th>
                    <th>Registro<br> Donante</th>
                    <th>Fecha de<br> Emisión</th>
                    <th>Foto</th>
                    <th>Numero<br> Documento</th>
                    <th>Generar<br> Carnet</th>
                </tr>
            </thead>
            <tbody style="background-color:  #F0F8FF;">
                <?php
       
        // Mostrar datos en la tabla
        while ($row = mysqli_fetch_assoc($resultado)) {
            
            echo "<tr>";
            echo "<td>" . $row["primer_nombre"] . "</td>";
            echo "<td>" . $row["segundo_nombre"] . "</td>";
            echo "<td>" . $row["apellido_paterno"] . "</td>";
            echo "<td>" . $row["apellido_materno"] . "</td>";
            echo "<td>" . $row["rut"] . "</td>";
            echo "<td>" . $row["nacionalidad"] . "</td>";
            echo "<td>" . $row["ciudad"] . "</td>";
            echo "<td>" . $row["sexo"] . "</td>";
            echo "<td>" . $row["fecha_nacimiento"] . "</td>";
            echo "<td>" . $row["otra_profesion"] . "</td>";
            echo "<td>" . $row["discapacidad"] . "</td>";
            echo "<td>" . $row["donante"] . "</td>";
            echo "<td>" . $row["fecha_emision"] . "</td>";
        
            echo "<td><img src='" . $row["foto_carnet"] . "' alt='Foto'></td>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td><form action='generar_cedula.php' method='POST'>";
            echo "<input type='hidden' name='selected_id' value='" . $row["id"] . "'>";
            echo "<input type='submit' value='Generar Carnet'>";
            echo "</form></td>";
            echo "</tr>";
        }

        
        ?></tbody>
        </table>

    </div>
    </div>
    </div>
</body>

</html>
