<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Carnet Identidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body style="background-color: #ECF0F1;">
    <div class="container" style="background-color: #D1F2EB; ">
        <div class="row">
            <h2 class="text-center mb-4">Formulario Carnet Identidad</h2>
            <div class="col-md-6 float-md-start">
                <form action="procesar.php" method="POST" enctype="multipart/form-data">

                    <label for="primer_nombre">Primer Nombre:</label>
                    <input type="text" id="primer_nombre" name="primer_nombre" required class="form-control "><br>

                    <label for="segundo_nombre">Segundo Nombre:</label>
                    <input type="text" id="segundo_nombre" name="segundo_nombre" required class="form-control"><br>



                    <label for="apellido_paterno">Apellido Paterno:</label>
                    <input type="text" id="apellido_paterno" name="apellido_paterno" required class="form-control"><br>

                    <label for="apellido_materno">Apellido Materno:</label>
                    <input type="text" id="apellido_materno" name="apellido_materno" required class="form-control"><br>

                    <label for="rut">RUT:</label>
                    <input type="text" id="rut" name="rut" required class="form-control">
                    <small class="text-muted">Formato: 12345678-9</small><br>
                    <span id="rutValidationMessage" class="text-danger"></span><br>
                    <span id="rutErrorMessage" class="text-danger"></span><br>

                    <label for="nacionalidad">Nacionalidad:</label>
                    <select id="nacionalidad" name="nacionalidad" class="form-control" required>
                        <option value="chilena">Chilena</option>
                        <option value="extranjera">Extranjera</option>
                    </select><br>
            </div>
            <div class="col-md-6 float-md-end">
                <div id="regionCiudad" style="display: none;">
                    <label for="lugar_nacimiento">Ciudad de Nacimiento:</label><br>
                    <label for="region">Región:</label>
                    <input type="text" id="region" name="region"><br>

                    <label for="ciudad">Ciudad:</label>
                    <input type="text" id="ciudad" name="ciudad"><br>
                </div>


                <label>Sexo:</label>
                <input type="radio" id="masculino" name="sexo" value="M" required>Masculino
                <input type="radio" id="femenino" name="sexo" value="F" required>Femenino<br>


                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required class="form-control"><br>





                <label for="profesion">¿Tiene Profesión?</label><br>
                <select id="profesion" name="profesion" class="form-control" required>
                    <option value=""></option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>

                <label for="otra_profesion" id="label_otra_profesion" style="display: none;">Profesión:</label>
                <input type="text" id="otra_profesion" name="otra_profesion" class="form-control"
                    style="display: none;"><br>




                <label>¿Inscrito en el Registro de Discapacidad?</label><br>
                <input type="radio" id="discapacidad_si" name="discapacidad" value="si" required> Si
                <input type="radio" id="discapacidad_no" name="discapacidad" value="no" required> No<br>

                <label>¿Es donante?</label><br>
                <input type="radio" id="donante_si" name="donante" value="si" required> Si
                <input type="radio" id="donante_no" name="donante" value="no" required> No<br>

                <label for="fecha_emision">Fecha de Emision</label>
                <input type="date" id="fecha_emision" name="fecha_emision" required class="form-control"><br>

                <label for="fecha_devencimiento">Fecha de Vencimiento</label>
                <input type="date" id="fecha_devencimiento" name="fecha_devencimiento" required class="form-control"
                    readonly><br>

                <label for="foto">Foto:</label><br>
                <input type="file" id="foto" name="foto_carnet" accept="image/*" class="form-control"><br>
            </div>
            <div style="display: flex; justify-content: center;">
                <input type="submit" value="Enviar" class="btn btn-outline-primary btn-lg">
            </div>
            </form>
        </div>
    </div>

</body>

<script>
document.getElementById('nacionalidad').addEventListener('change', function() {
    var regionCiudad = document.getElementById('regionCiudad');
    if (this.value === 'chilena') {
        regionCiudad.style.display = 'block';
    } else {
        regionCiudad.style.display = 'none';
    }
});
document.getElementById('profesion').addEventListener('change', function() {
    var otraProfesion = document.getElementById('otra_profesion');
    var labelOtraProfesion = document.getElementById('label_otra_profesion');

    if (this.value === 'si') {
        otraProfesion.style.display = 'block';
        labelOtraProfesion.style.display = 'block';
    } else {
        otraProfesion.style.display = 'none';
        labelOtraProfesion.style.display = 'none';
    }
});

document.getElementById('fecha_emision').addEventListener('change', function() {
    var fechaEmision = new Date(this.value);
    if (!isNaN(fechaEmision.getTime())) {
        var fechaVencimiento = new Date(fechaEmision);
        fechaVencimiento.setFullYear(fechaVencimiento.getFullYear() + 5);
        var formattedDate = fechaVencimiento.toISOString().split('T')[0];
        document.getElementById('fecha_devencimiento').value = formattedDate;
    }
});


function validarRut(rut) {
    rut = rut.replace(/\./g, '').replace('-', '').toLowerCase();
    var digitosRut = rut.slice(0, -1);
    var digitoVerificador = rut.slice(-1);
    var suma = Array.from(digitosRut).reverse().reduce((suma, digito_v, indice) => suma + parseInt(digito_v) * (indice % 6 + 2), 0);
    var resto = suma % 11;
    var digitoVerificadorCalculado = resto === 0 ? 0 : resto === 1 ? 'k' : 11 - resto;
    return digitoVerificadorCalculado == digitoVerificador;
}

document.getElementById('rut').addEventListener('input', function() {
    var rutIngresado = this.value;
    var esValido = validarRut(rutIngresado);
    var mensajeError = esValido ? '' : 'Rut incorrecto, ingrese nuevamente';
    document.getElementById('rutErrorMessage').textContent = mensajeError;
});
</script>


</html>