<?php
$titulo = "Agregar Curso";
include '_header.php';
include "conexion.php";
?>
<html>

<?php

// FETCH_ASSOC
$consultaSalones = $conexion->prepare("SELECT * FROM salones");
$consultaProfesores = $conexion->prepare("SELECT * FROM usuarios u INNER JOIN usuarios_rol ur ON u.id= ur.id_usuario where ur.id_rol = 2");
$consultaCiscoClasificacioens = $conexion->prepare("SELECT * FROM clasificacion_cisco");

// Especificamos el fetch mode antes de llamar a fetch()
$consultaSalones->setFetchMode(PDO::FETCH_ASSOC);
$consultaProfesores->setFetchMode(PDO::FETCH_ASSOC);
$consultaCiscoClasificacioens->setFetchMode(PDO::FETCH_ASSOC);

// Ejecutamos
$consultaSalones->execute();
$consultaProfesores->execute();
$consultaCiscoClasificacioens->execute();
?>



<head>
    <style type="text/css">
        .shadow {
            background-color: #f9f9f9;
            margin-top: 10x;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px 24px;
        }

        input[type=text] {}
    </style>
</head>

<body>

    <div class="container shadow mt-3" style="">

        <h2 class="text-center">Registrar Curso</h2>
        <form class="form-horizontal" action="agregar_curso_insertar.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombrecurso">Nombre del curso:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="nombrecurso" placeholder="Introduzca su nombre" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="foto">Foto</label>
                <div class="col-sm-12"></label>
                    <div class="col-sm-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" aria-describedby="foto" required>
                            <label class="custom-file-label" for="foto"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="descripcion">Descripcion del curso:</label>
                    <div class="col-sm-12">
                        <textarea class="form-control" id="descripcion" rows="3" placeholder="Escriba una breve descripcion del curso"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="duracion">Duracion:</label>
                    <div class="col-sm-12">
                        <input type="number" class="form-control" min="1" id="duracion" placeholder="N° de Horas" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="minestudiante">Cantidad Minima de Estudiante:</label>
                    <div class="col-sm-12">
                        <input type="number" class="form-control" min="1" id="minestudiante" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="maxestudiante">Cantidad maxima de Estudiante:</label>
                    <div class="col-sm-12">
                        <input type="number" class="form-control" max="25" id="maxestudiante" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="esctipo">Tipo de capacitacion:</label>
                    <div class="col-sm-12">
                        <select class="custom-select" id="esctipo" required>
                            <option selected disabled value="">Escoga el tipo de capacitacion</option>
                            <option value="4">Curso</option>
                            <option value="1">Cisco</option>
                            <option value="2">TechAcademy</option>
                            <option value="3">Diplomados</option>
                        </select>
                    </div>
                </div>

                <div id="contenidocisco" class="px-4">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ciscoClasificacion">Clasificacion:</label>
                        <div class="col-sm-12">
                            <select class="custom-select" id="ciscoClasificacion">
                                <option selected disabled value="">Escoga la Clasificacion</option>
                                <?php
                                while ($row = $consultaCiscoClasificacioens->fetch()) {
                                    ?>
                                    <option value="<?php echo $row["id"] ?>"><?php echo $row["clasificacion"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                </div>

                <div id="contenidodiplo" class="px-4">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="organizador">Organizador:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="organizador" placeholder="Persona o institucion que Organiza">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="perfilIngreso">Perfil de ingreso:</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" id="perfilIngreso" rows="3" placeholder="Introduzca el Perfil de ingreso del estudiante"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="planContenido">Plan de Contenido</label>
                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="planContenido" aria-describedby="planContenido">
                                <label class="custom-file-label" for="planContenido"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="planCosto">Plan de costo</label>
                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="planCosto" aria-describedby="planCosto">
                                <label class="custom-file-label" for="planCosto"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="criteriosEvaluacion">Criterios de evaluacion:</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" id="criteriosEvaluacion" rows="3" placeholder="Introduzca los criterios de evaluacion"></textarea>
                        </div>
                    </div>
                </div>

                <div id="contenidotech" class="px-4">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="responsable">Responsables:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="responsable" placeholder="Persona responsable">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="escprofesor">Profesor:</label>
                    <div class="col-sm-12">
                        <select class="custom-select" id="escprofesor" onchange="ValidacionProSal()" required>
                            <option selected disabled value="" id="escprofesorselect">Escoga el profesor</option>
                            <?php
                            while ($row = $consultaProfesores->fetch()) {
                                ?>
                                <option value="<?php echo $row["id"] ?>"><?php echo $row["nombre"] . " " . $row["apellido"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Advertencia:</strong> Antes de introducir las fechas del curso debe seleccionar un salon y su profesor.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group" id="diviniciofin">
                    <label class="control-label col-sm-6" for="escsalon">Escoga un salon:</label>
                    <label class=" control-label col-sm-5" for="escsalon">Hora de inicio y fin:</label>
                    <div class="row" style="margin-left:0px;">
                        <div class="col-sm-3">
                            <select class="custom-select" id="escsalon" onchange="ValidacionProSal()" required>
                                <option selected disabled value="">Salon:</option>
                                <?php
                                while ($row = $consultaSalones->fetch()) {
                                    ?>
                                    <option value="<?php echo $row["id"] ?>"><?php echo $row["salon"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class=" col-sm-4">
                            <input type="datetime-local" class="form-control" id="11" name="fechaini[]" onchange="ValidacionFecha(11,21)" disabled required>
                        </div>
                        <!-- <label class="control-label col-sm-2" for="correo">fecha de salida:</label> -->
                        <div class="col-sm-4">
                            <input type="datetime-local" class="form-control" id="21" name="fechafin[]" onchange="ValidacionFecha(11,21)" disabled required>
                        </div>
                        <div class="col-sm-1">
                            <input type="button" onclick="AgregrarHorario()" disabled class="form-control" id="btninifin">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="modalidad"> Modalidad:</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rdnpago" value="1">
                            <label class="form-check-label" for="modalidad1">Pago</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rdnpago1" value="0">
                            <label class="form-check-label" for="modalidad1">Gratuito</label>
                        </div>
                    </div>
                </div>
                <div id="contenidocosto" style="display: none">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="contenidopago">Costo:</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="contenidopago" min="1" placeholder="$ 1,000">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mx-3" style="width:250px; margin-right:60px; margin-buttom:25px;">Enviar</button>
        </form>

        <h2>---------------------------</h2>
    </div>
</body>
<script>
    var num = 1;
    var xnum = 1;
    var ynum = 2;
    var a = [];
    $('#contenidocisco').hide();
    $('#contenidodiplo').hide();
    $('#contenidotech').hide();
    $('#esctipo').change(function() {
        var combo = document.getElementById("esctipo");
        var selected = combo.options[combo.selectedIndex].value;
        if (selected == 3) {
            $('#ciscoClasificacion').removeAttr(required);
            $('#contenidocisco').hide();
            $('#organizador').attr(required);
            $('#perfilIngreso').attr(required);
            $('#planContenido').attr(required);
            $('#planCosto').attr(required);
            $('#criteriosEvaluacion').attr(required);
            $('#contenidotech').hide();
            $('#contenidodiplo').show();
            $('#responsable').removeAttr(required);
        } else {
            $('#contenidodiplo').hide()
            if (selected == 2) {
                $('#ciscoClasificacion').removeAttr(required);
                $('#contenidocisco').hide();
                $('#organizador').removeAttr(required);
                $('#perfilIngreso').removeAttr(required);
                $('#planContenido').removeAttr(required);
                $('#planCosto').removeAttr(required);
                $('#criteriosEvaluacion').removeAttr(required);
                $('#responsable').attr(required);
                $('#contenidotech').show();
            } else {
                $('#contenidotech').hide();
                if (selected == 1) {
                    $('#contenidocisco').show();
                    $('#ciscoClasificacion').attr(required);
                    $('#responsable').removeAttr(required);
                    $('#organizador').removeAttr(required);
                    $('#perfilIngreso').removeAttr(required);
                    $('#planContenido').removeAttr(required);
                    $('#planCosto').removeAttr(required);
                    $('#criteriosEvaluacion').removeAttr(required);
                } else {
                    $('#responsable').removeAttr(required);
                    $('#contenidocisco').hide();
                    $('#ciscoClasificacion').removeAttr(required);
                    $('#organizador').removeAttr(required);
                    $('#perfilIngreso').removeAttr(required);
                    $('#planContenido').removeAttr(required);
                    $('#planCosto').removeAttr(required);
                    $('#criteriosEvaluacion').attr(required);
                }
            }
        }
    });

    $('#modalidadch').click(function() {
        var combo = $('#modalidadch')[0].value();
        alert(combo + "comobo");
    })

    function ValidacionProSal() {
        var combo1 = document.getElementById("escprofesor");
        var profesor = combo1.options[combo1.selectedIndex].value;
        var combo2 = document.getElementById("escsalon");
        var salon = combo2.options[combo2.selectedIndex].value;
        if (profesor != "" && salon != "") {
            $('#btninifin').removeAttr("disabled");
            $('#11').removeAttr("disabled");
            $('#21').removeAttr("disabled");

        }
    }

    function ValidacionFecha(horaini, horafinal) {
        var ini = '#' + horaini;
        var fin = '#' + horafinal;
        var hrini = $(ini).val();
        var hrfin = $(fin).val();
        if (hrini == "" || hrfin == "") {
            alert("Complete los campos de hora de inicio y final");
        } else {
            if (hrini < hrfin) {
                //alert(num);
                $('#escprofesor').attr("disabled", true);
                $('#escsalon').attr("disabled", true);
                var validacion = false;
                for (a = 1; a <= num; a++) {
                    //alert("a=" + a + ";" + a + "<=" + num + ";" + (a + 1));
                    var inix = '#1' + a;
                    var finx = '#2' + a;
                    var xhrini = $(inix).val();
                    var xhrfin = $(finx).val();
                    // console.log(xhrini + "///////////" + xhrfin);
                    if (ini != inix && fin != finx) {
                        if (hrini < xhrfin && hrfin > xhrini) { // >< (hrini < xhrfin && hrfin > xhrini)
                            alert("NO SE PUEDE INSERTAR")
                            setTimeout(function() {
                                $(ini).val("");
                                $(fin).val("");
                            }, 1000);

                        } else {
                            alert("se puede insertar");
                            $.ajax({
                                method: "POST",
                                url: "verificarFecha.php",
                                data: {
                                    "fechaInicial": hrini,
                                    "fechaFinal": hrfin
                                },
                                success: function(response) {
                                    console.log(response);
                                }
                            });
                        }
                    } else {
                        alert("El mismo");
                        alert("ajax")
                        $.ajax({
                            method: "POST",
                            url: "verificarFecha.php",
                            data: {
                                "fechaInicial": hrini,
                                "fechaFinal": hrfin
                            },
                            success: function(response) {
                                console.log(response);
                            }
                        });
                        alert("ES EL MISMO REGISTRO")
                    }

                }
                //alert("aaaa");

            } else {
                alert("Complete los datos con horas validas");
                setTimeout(function() {
                    $('#' + horafinal).val("")
                    $('#' + horaini).val("");
                }, 500);
            }
        }
    }




    function AgregrarHorario() {

        var combo1 = document.getElementById("escprofesor");
        var selectedpro = combo1.options[combo1.selectedIndex].value;
        var combo2 = document.getElementById("escsalon");
        var selectedsalon = combo2.options[combo2.selectedIndex].value;
        if ((selectedpro != "") && (selectedsalon != "")) {
            $('#escprofesor').attr("disabled", true);
            $('#escsalon').attr("disabled", true);
            var horaInicial = $('#1' + num).val();
            var horaFinal = $('#2' + num).val();
            if (horaInicial == "" && horaFinal == "") {
                alert("Complete los campos de hora de inicio y final");
            } else {
                if (horaInicial < horaFinal) {
                    num += 1;
                    alert(num);
                    // a.push(horaInicial);
                    // a.push(horaFinal);
                    alert(a);
                    $('#diviniciofin').append(NuevaHoraInicioFin(num));
                    // $.ajax({
                    //     method: "POST",
                    //     url: "verificarFecha.php",
                    //     data: {
                    //         "fechaInicial": horaInicial,
                    //         "fechaFinal": horaFinal
                    //     },
                    //     success: function(response) {
                    //         console.log(response);
                    //     }
                    // });

                } else {
                    alert("Complete los datos con horas validas");
                }

            }
        } else {
            alert("Complete los campos de Profesor y escoger fecha");
        }
    }

    function NuevaHoraInicioFin(num) {
        return '<div class="row my-2" style="margin-left:0px;">' +
            '<div class=" col-sm-5">' +
            '<input type="datetime-local" class="form-control" id="1' + num + '"  name="fechaini[]" onchange="ValidacionFecha(1' + num + ',2' + num + ')" required>' +
            '</div>' +
            '<div class="col-sm-5">' +
            '<input type="datetime-local" class="form-control" id="2' + num + '"  name="fechafin[]" onchange="ValidacionFecha(1' + num + ',2' + num + ')" required>' +
            '</div>'
        ' </div>'
    }
    // lo del radiobutton
    $('input[type="radio"]').click(function() {
        // alert($(this).attr("value"));
        if ($(this).attr("value") == "0") {
            $("#contenidocosto").hide();
            $('#contenidopago').val("");
        }
        if ($(this).attr("value") == "1") {
            $("#contenidocosto").show();

        }
    });
    $('input[type="radio"]').trigger('click');
</script>

</html>
<?php
include '_footer.php';
?>