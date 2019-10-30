<?php
$titulo = "Agregar Curso";
include '_header.php'; 
?>
<html>
   


<head></head>
<body>
<div class="container mt-3">
    <form>
       
        
        <div class="input-group mb-3">
           <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre del curso</span>
           </div>
           <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="form-group">
        <label for="exampleFormControlTextarea1">Descripcion del curso</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="escriba una breve descripcion del curso"></textarea>
        </div>

  
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Plan de Contenido</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01"></label>
            </div>
            </div>


            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Plan de Costos</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01"></label>
            </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Datos del Profesor</span>
                </div>
                <input type="text" aria-label="First name" class="form-control" placeholder="Nombre">
                <input type="text" aria-label="Last name" class="form-control"placeholder="Apellido "> 
            </div>
             
            

            <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Aula de clases</label>
            <select class="custom-select" id="inputGroupSelect01" placeholder="elija un salon">
                <option selected>A</option>
                <option value="1">B</option>
                <option value="2">C</option>
                <option value="3">D</option>
            </select>
            </div>
              

            <div class="input-group mb-3">
            
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Minimo de Estudiantes</label>
            </div>
            <input type="text" aria-label="Last name" class="form-control"placeholder=""> 
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Minimo de Estudiantes</label>
            </div>
            <input type="text" aria-label="Last name" class="form-control"placeholder=""> 
            </div>

           
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
       

       




</body>
</html>

<?php 
include '_footer.php';
 ?>
