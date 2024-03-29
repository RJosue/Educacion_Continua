<?php
$titulo = "Agregar Curso";
include '_header.php';
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/sombras.css">
</head>

<body>
    <div class="container shadow mt-3">

        <br>
        <h2 class="text-center">Registrarse</h2>
        <form class="form-horizontal mx-auto" action="insertar_usuario.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Nombre:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="nombre" placeholder="Introduzca su nombre" name="nombre" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="apellido">Apellido:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="apellido" placeholder="Introduzca su apellido" name="apellido" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="cedula">Cedula:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="cedula" placeholder="Introduzca su cedula" name="cedula" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="correo">Correo:</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="correo" placeholder="Introduzca su correo" name="correo" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="contraseña">Contraseña:</label>
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="contraseña" placeholder="Introduzca su contraseña" name="password" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="contraseña">Sexo:</label>
                <div class="col-sm-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="inlineRadio1" value="M" checked>
                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="inlineRadio2" value="F">
                        <label class="form-check-label" for="inlineRadio2">Femenino</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="celular">Celular:</label>
                <div class="col-sm-12">
                    <input type="text" pattern="[0-9][0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]" class="form-control" id="celular" placeholder="Introduzca su Celular ej: 8123-4567" name="celular">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="fechanacimineto">Fecha de Nacimineto:</label>
                <div class="col-sm-12">
                    <input type="date" class="form-control" id="fechanacimineto" placeholder="Fecha de nacimiento" name="fechanacimiento">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="intitucion">Intitución:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="intitucion" placeholder="Intitucion de donde proviene" name="institucion">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mx-3" style="width:250px; margin-right:60px;" name="submit">Enviar</button>
        </form>
    </div>
</body>

</html>

<?php
include '_footer.php';
?>