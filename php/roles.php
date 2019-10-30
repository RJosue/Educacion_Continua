<?php
$titulo = "Administracion de Roles";
include '_header.php'; 
?>
    <div class="container ">
    <!-- BARRA DE BUSQUEDA -->
        <nav class="navbar navbar-light bg-light mt-3">
            <form class="form-inline mx-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Cedula" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </nav>



      <!--  RESULTADOS  -->
      <table class="table table-striped mt-3">
  <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Cedula</th>
      </tr>
    </thead>
    <tbody style="cursor:pointer">
      <tr onclick="seleccionar(this,1)">
        <th scope="row">1</th>
        <td>Luis</td>
        <td>Munguia</td>
        <td>8-954-585</td>
      </tr>
    </tbody>
</table>
      <!-- RESULTADOS -->

      <div class="card mt-3 mb-4">
          <div class="card-header">
            <h5>Seleccionar Rol</h5>
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <input type="radio" name="gender" value="male"> Estudiante<br>
              <input type="radio" name="gender" value="male"> Facilitador<br>
              <input type="radio" name="gender" value="male"> Administrativo<br>
              <button type="button ml-4" class="btn btn-success ">Cambiar</button>
            </blockquote>
            
          </div>
      </div>
    </div>
<?php 
include '_footer.php';
 ?>
