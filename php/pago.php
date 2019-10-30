<?php
$titulo = "Facturacion";
include '_header.php'; 
?>


    <div class="container mb-5">
    <div class="card mt-3">
      <div class="card-header">
        <h4>Facturación</h4>
      </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <div class="card" style="width: 100%;">
              <div class="card-header">
              Datos del usuario
              </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Nombre:</li>
                  <li class="list-group-item">Apellido:</li>
                  <li class="list-group-item">Cedula:</li>
                  <li class="list-group-item">Email:</li>
                  <li class="list-group-item">Fecha de Nacimiento:</li>
                </ul>
            </div>  
          </blockquote>
          <blockquote class="blockquote mb-0 mt-4">
            <div class="card" style="width: 100%;">
              <div class="card-header">
              Datos del Curso
              </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Nombre del curso:</li>
                  <li class="list-group-item">Costo:</li>
                  <li class="list-group-item">Duración:</li>
                </ul>
            </div>  
          </blockquote>
        </div>
          <!-- BOTON DE PAGO -->
          <button type="buttons" class="btn btn-warning">PAGAR</button>
    </div>


    </div>

<?php 
include '_footer.php';
 ?>
