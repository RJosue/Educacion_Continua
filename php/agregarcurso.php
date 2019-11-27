<?php
$titulo = "Agregar Curso";
include '_header.php';
include 'validar.php';
?>
<html>



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
        <form class="form-horizontal" action="# ">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombrecurso">Nombre del curso:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="nombrecurso" placeholder="Introduzca su nombre" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombrecurso">Foto</label>
                <div class="col-sm-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                        <label class="custom-file-label" for="inputGroupFile01"></label>
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
                <label class="control-label col-sm-2" for="minestudiante">Duracion:</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" id="minestudiante" placeholder="N° de Horas" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="minestudiante">Cantidad Minima de Estudiante:</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" id="minestudiante" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="maxestudiante">Cantidad maxima de Estudiante:</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" id="maxestudiante" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="esctipo">Tipo de Curso:</label>
                <div class="col-sm-12">
                    <select class="custom-select" id="esctipo" required>
                        <option selected disabled value="">Escoga el tipo de curso</option>
                        <option value="1">Cisco</option>
                        <option value="2">TechAcademy</option>
                        <option value="3">Diplomados</option>
                    </select>
                </div>
            </div>

            <div id="contenidocisco" class="px-4">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="esctipo">Clasificacion:</label>
                    <div class="col-sm-12">
                        <select class="custom-select" id="esctipo" required>
                            <option selected disabled value="">Escoga la Clasificacion</option>
                            <option value="1">Redes Basica</option>
                            <option value="2">Redes Avanzadas</option>
                            <option value="3">Seguridad en Redes</option>
                            <option value="3">Sistemas Operativos</option>
                            <option value="3">Nuevas Tecnologias</option>
                            <option value="3">Aliniado con Negocios</option>
                        </select>
                    </div>
                </div>

            </div>

            <div id="contenidodiplo" class="px-4">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="responsable">Organizador:</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="organizador" placeholder="Persona o institucion que Organiza" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="descripcion">Perfil de ingreso:</label>
                    <div class="col-sm-12">
                        <textarea class="form-control" id="descripcion" rows="3" placeholder="Introduzca el Perfil de ingreso del estudiante"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="nombrecurso">Plan de Contenido</label>
                    <div class="col-sm-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nombrecurso">Plan de costo</label>
                    <div class="col-sm-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="descripcion">Criterios de evaluacion:</label>
                    <div class="col-sm-12">
                        <textarea class="form-control" id="descripcion" rows="3" placeholder="Introduzca los criterios de evaluacion"></textarea>
                    </div>
                </div>
            </div>

            <div id="contenidotech" class="px-4">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="responsable">Responsables:</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="responsable" placeholder="Persona responsable" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="escprofesor">Profesor:</label>
                <div class="col-sm-12">
                    <select class="custom-select" id="escprofesor" required>
                        <option selected disabled value="">Escoga el profesor</option>
                        <option value="1">B</option>
                        <option value="2">C</option>
                        <option value="3">D</option>
                    </select>
                </div>
            </div>
            <div class="form-group" id="diviniciofin">
                <label class="control-label col-sm-6" for="escsalon">Escoga un salon:</label>
                <label class=" control-label col-sm-5" for="escsalon">Hora de inicio y fin:</label>
                <div class="row" style="margin-left:0px;">

                    <div class="col-sm-3">
                        <select class="custom-select" id="escsalon" required>
                            <option selected disabled value="">Salon:</option>
                            <option value="1">302</option>
                            <option value="2">301</option>
                            <option value="3">305</option>
                        </select>
                    </div>
                    <div class=" col-sm-4">
                        <input type="datetime-local" class="form-control" id="hrini" required>
                    </div>
                    <!-- <label class="control-label col-sm-2" for="correo">fecha de salida:</label> -->
                    <div class="col-sm-4">
                        <input type="datetime-local" class="form-control" id="hrini" required>
                    </div>
                    <div class="col-sm-1">
                        <input type="button" onclick="AgregrarHorario()" class="form-control" id="btninifin">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="modalidad"> Modalidad:</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="modalidadch" value="1">
                        <label class="form-check-label" for="modalidad1">Gratuito</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="modalidadch" value="2">
                        <label class="form-check-label" for="modalidad2">Pago</label>
                    </div>
                </div>
            </div>
            <div id="contenidocosto">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="minestudiante">Costo:</label>
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="minestudiante" placeholder="$ 1,000" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mx-3" style="width:250px; margin-right:60px; margin-buttom:25px;">Enviar</button>
        </form>

        <h2>---------------------------</h2>
    </div>
</body>

</html>

<!-- <script>
    //para saber cual es el valor que esta en el select 
    $('#contenido').hide();
    $('#esctipo').change(function() {
        var combo = document.getElementById("esctipo");
        var selected = combo.options[combo.selectedIndex].value;
        if (selected == 3) {
            $('#contenido').show();
        } else {
            $('#contenido').hide()
        }
    })
</script> -->
<script>
    $('#contenidocisco').hide();
    $('#contenidodiplo').hide();
    $('#contenidotech').hide();
    $('#esctipo').change(function() {
        var combo = document.getElementById("esctipo");
        var selected = combo.options[combo.selectedIndex].value;
        if (selected == 3) {
            $('#contenidocisco').hide();
            $('#contenidotech').hide();
            $('#contenidodiplo').show();
        } else {
            $('#contenidodiplo').hide()
            if (selected == 2) {
                $('#contenidocisco').hide();
                $('#contenidotech').show();
            } else {
                $('#contenidotech').hide();
                if (selected == 1) {
                    $('#contenidocisco').show();
                } else {
                    $('#contenidocisco').hide();
                }
            }
        }
    });

    $('#modalidadch').click(function() {
        var combo = $('#modalidadch')[0].value();
        alert(combo + "comobo");
    })

    function AgregrarHorario() {
        $('#diviniciofin').append(NuevaHoraInicioFin());
    }

    function NuevaHoraInicioFin() {
        // Hay que hacer todas la validacion pertinentes antes de retornar las nuevas fechas
        return '<div class="row my-2" style="margin-left:0px;">' +
            '<div class=" col-sm-5">' +
            '<input type="datetime-local" class="form-control" id="hrini" required>' +
            '</div>' +
            '<div class="col-sm-5">' +
            '<input type="datetime-local" class="form-control" id="hrini" required>' +
            '</div>'
        ' </div>'
    }
</script>

<?php
include '_footer.php';
?>