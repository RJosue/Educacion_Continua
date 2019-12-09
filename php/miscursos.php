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
        Se muestran los cursos donde el usuario esta inscrito como estudiante.
    </div>

    <?php
    // $id = $_SESSION['id_profesor'];
    $id = [$_SESSION['id']][0];

    $sql = $conexion->query("SELECT c.nombre AS 'curso',c.descripcion,c.costo,c.duracion,u.nombre,u.apellido,u.correo FROM usuarios_capacitaciones uc INNER JOIN capacitaciones c ON c.id = uc.id_capacitacion INNER JOIN usuarios u ON u.id = c.id_profesor WHERE uc.id_usuario ='+$id+' && c.id_profesor!='+$id+'");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    // Ejecutamos
    $sql->execute();
    $cont = 0;
    foreach ($sql as $row) {
        $collapse = "collapse" . $cont;
        ?>
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="<?php echo "#" . $collapse; ?>" aria-expanded="true" aria-controls="collapseOne">
                        <?php echo strtoupper($row['curso']) ?>
                    </button>
                </h5>
            </div>

            <div id="<?php echo $collapse; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <strong>Descripción</strong><br>
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