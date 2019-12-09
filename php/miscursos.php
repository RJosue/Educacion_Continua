<?php
$titulo = "Gestion de Cursos";
include '_header.php';
include 'conexion.php';
include 'validar.php';

?>

<div class="container shadow">
    <br>
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        Aqui apareceran los cursos que usted debe dar. Para ver o imprimir la lista de estudiantes debe presionar el link de <strong>Ver Estudiantes</strong>, Alli se le habilitara el boton de generar certificados una ves culmine el curso.
    </div>

    <?php
    // $id = $_SESSION['id_profesor'];
    $stmt = $conexion->prepare("select c.id,c.nombre,c.descripcion,c.duracion from usuarios_capacitaciones uc inner join capacitaciones c  on c.id = uc.id_capacitacion  where uc.id_usuario =?");
    $stmt->execute([$_SESSION['id']]);
    $curso = $stmt->fetchAll();
    $cont = 0;
    foreach ($curso as $row) {
        $collapse = "collapse" . $cont;
        // echo $id;
        // echo $row['nombre']." ".$row['descripcion'];
        ?>
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="<?php echo "#" . $collapse; ?>" aria-expanded="true" aria-controls="collapseOne">
                        <?php echo strtoupper($row['nombre']) ?>
                    </button>
                </h5>
            </div>

            <div id="<?php echo $collapse; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <strong>Descripción</strong>
                    <?php echo $row['descripcion'] ?>
                    <br>
                    <strong>Duración:</strong>
                    <?php echo $row['duracion'] ?> horas
                </div>
            </div>
        </div>

    <?php
        $collapse = "";
        $cont++;
    }
    ?>
</div>


<?php
include '_footer.php';
?>