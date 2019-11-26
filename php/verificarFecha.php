<?php
    include 'conexion.php';

    $consultaSalones = $conexion->prepare("SELECT * FROM salones");
    $resultado = $_POST['fechaInicial'];

    echo $resultado;
?>