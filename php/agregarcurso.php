<?php
$titulo = "Agregar Curso";
include '_header.php'; 
?>
<html>
   


<head>


<style type="text/css"> 
.shadow {
   background-color: #f9f9f9;
   margin-top: 10x;
   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   padding: 12px 16px 24px;
}
input[type=text]{
   
}

</style>
</head>
<body>

<div class="container shadow mt-3" style="">
 
    <form  class="mx-auto">
    <h2 class=""style="margin-left:60px;">Agregar cursos</h2>
       <div class="container" style="width:55%;">
       <div class="input-group mx-auto">
                  <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre del curso</span>
           </div>
           <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="form-group mx-auto" style="">
        <label for="exampleFormControlTextarea1">Descripcion del curso</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="escriba una breve descripcion del curso"></textarea>
        </div>

  
        <div class="input-group mb-3 mx-auto">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Plan de Contenido</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01"></label>
            </div>
            </div>


            <div class="input-group mb-3 mx-auto"style="">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Plan de Costos</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01"></label>
            </div>
            </div>

            <div class="input-group mb-3 mx-auto"style="">
                <div class="input-group-prepend">
                    <span class="input-group-text">Datos del Profesor</span>
                </div>
                <input type="text" aria-label="First name" class="form-control" placeholder="Nombre">
                <input type="text" aria-label="Last name" class="form-control"placeholder="Apellido "> 
            </div>
             
            

            <div class="input-group mb-3 mx-auto"style="">
            <label class="input-group-text" for="inputGroupSelect01">Aula de clases</label>
            <select class="custom-select" id="inputGroupSelect01" placeholder="elija un salon">
                <option selected>A</option>
                <option value="1">B</option>
                <option value="2">C</option>
                <option value="3">D</option>
            </select>
            </div>
              

            <div class="input-group mb-3 mx-auto"style="">
           <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Cantidad minima de estudiantes</span>
           </div>
           <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
           </div>
             
           <div class="input-group mb-1 mx-auto"style="">
           <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Cantidad maxima de estudiantes</span>
           </div>
           <input type="text" class="form-control mb" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
           </div>
           
          <br>     
        <button type="submit" class="btn btn-primary float-right" style="width:250px; margin-right:60px; margin-buttom:25px;">Guardar</button>
        <br>
        </form>
    </div>
       
</body>
</html>

<?php 
include '_footer.php';
 ?>
