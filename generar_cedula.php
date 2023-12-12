<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 2%;
        }

        .container {
            position: relative;
            max-width: 350px;
            width: 30%;
            margin: 2% 0 0 10%;
        }

        .overlay-image {
            width: 80%;
            height: auto;
            display: block;
            font-family: Arial, sans-serif;
            border-radius: 6%;
        }

        .row {
            z-index: 1; /* Asegura que el contenido esté sobre la imagen */
        }

        .overlay {
            position: absolute;
            background-color: rgba(255, 255, 255, 0);
            padding: 5px;
            width: 19%;
        }

        .info-container {
            position: absolute;
            top: 15%;
            right: 5%;
            width: 40%;
        }

        .info-group {
            text-align: center;
            margin-bottom: 2px;
            font-weight: bold;
            margin: 2px 7px;
            line-height: 1.0;
        }

        .info-label,
        .info-text {
            margin: 0;
        }

        .info-label {
            font-size: 12px;
            color: #2874A6;
            font-weight: bold;
            margin-bottom: 2px;
        }

        .info-text {
            font-size: 11px;
            margin: 0;
        }

        .split-info {
            display: flex;
            justify-content: space-between;
        }

        .half-width {
            width: 50%;
            box-sizing: border-box;
            padding: 2px 6px;
        }

        .centered-info {
            display: flex;
            justify-content: center;
        }

        .centered-info .half-width {
            width: auto;
        }
    </style>
</head>

<body>
    <div class="container overlay-image">
        <img src="img/dejantera.jpg" class="rounded float-start" alt="Front Image">
        <div class="row">
            <?php
            require_once("conexion.php");
            if (isset($_POST["selected_id"])) {
                $selected_id = $_POST["selected_id"];
                // Obtener detalles de la persona seleccionada
                $sql = "SELECT * FROM carnet WHERE id = $selected_id";
                $resultado = mysqli_query($conexion, $sql);

                // Mostrar detalles en la página
                if ($row = mysqli_fetch_assoc($resultado)) {
                    // Imagen
                    echo "<div class='overlay col align-self-start' style='height: 45px; top: 19%;'>";
                    echo "<img src='img/dDewey.jpg' alt='Foto de carnet' style='width: 300%; height: 470%; object-fit: contain; border-radius: 30%;'>";
                    echo "</div>";

                    echo "<div class='overlay col align-self-start' style = 'top: 82%; '>";
                    echo "<div class='overlay-content'>";
                    echo "<p style='text-align: center; font-size: 11px; width: 250%;'><strong>RUN</strong> " . $row["rut"] . "</p>";
                    echo "</div>";
                    echo "</div>";

                    echo "<div class='info-container'>";
                    echo "<div class='info-group'>";
                    echo "<p class='info-label'>Apellidos</p>";
                    echo "<p class='info-text'>" . $row["apellido_paterno"] ."<br>". $row["apellido_materno"]. "</p>";
                    echo "</div>";

                    echo "<div class='info-group'>";
                    echo "<p class='info-label'>Nombres</p>";
                    echo "<p class='info-text'>" . $row["primer_nombre"] . " " . $row["segundo_nombre"] . "</p>";
                    echo "</div>";

                    echo "<div class='info-group centered-info'>";
                    echo "<div class='half-width'>";
                    echo "<p class='info-label'>Nacionalidad</p>";
                    echo "<p class='info-text'>" . $row["nacionalidad"] . "</p>";
                    echo "</div>";

                    echo "<div class='half-width'>";
                    echo "<p class='info-label'>Sexo</p>";
                    echo "<p class='info-text'>" . $row["sexo"] . "</p>";
                    echo "</div>";
                    echo "</div>";

                    echo "<div class='info-group centered-info'>";
                    echo "<div class='half-width'>";
                    echo "<p class='info-label'>Fecha de Nacimiento</p>";
                    echo "<p class='info-text'>" . $row["fecha_nacimiento"] . "</p>";
                    echo "</div>";

                    echo "<div class='half-width'>";
                    echo "<p class='info-label'>Numero Documento</p>";
                    echo "<p class='info-text'>" . $row["id"] . "</p>";
                    echo "</div>";
                    echo "</div>";

                    echo "<div class='info-group centered-info'>";
                    echo "<div class='info-group'>";
                    echo "<p class='info-label'>Fecha emisión</p>";
                    echo "<p class='info-text'>" . $row["fecha_emision"] ." ". "</p>";
                    echo "</div>";

                    echo "<div class='info-group'>";
                    echo "<p class='info-label'>Fecha Vencimiento</p>";
                    echo "<p class='info-text'>" . $row["fecha_devencimiento"] . "</p>";
                    echo "</div>";
                    echo "</div>";
                } else {
                    echo "No se encontraron detalles para el ID seleccionado.";
                }
            } else {
                echo "No se ha seleccionado un ID.";
            }
            ?>
        </div>
    </div>

    <div class="col-md-15">
        <img src="img/trasera.jpg" class="rounded float-end" alt="Back Image">
        <?php
        require_once("conexion.php");
        if (isset($_POST["selected_id"])) {
            $selected_id = $_POST["selected_id"];

            // Obtener detalles de la persona seleccionada
            $sql = "SELECT * FROM carnet WHERE id = $selected_id";
            $resultado = mysqli_query($conexion, $sql);

            // Mostrar detalles en la página
            if ($row = mysqli_fetch_assoc($resultado)) {
                echo "<div class='overlay col align-self-start' style='height: 20px; top: 140%;'>";
                echo "<div class='overlay-content'>";
                echo "<p style=' font-size: 11px;'><strong>Profesion</strong> ". $row["otra_profesion"] . "</p>";
                echo "</div>";

                echo "<div class='overlay-content'>";
                echo "<p style=' font-size: 11px;'><strong>Ciudad</strong> " . $row["ciudad"] . "</p>";
                echo "</div>";
                echo "</div>";

                




            } else {
                echo "No se encontraron detalles para el ID seleccionado.";
            }
        } else {
            echo "No se ha seleccionado un ID.";
        }
        ?>
    </div>

</body>

</html>
