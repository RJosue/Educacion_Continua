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
                    <span class="input-group-text">Datos</span>
                </div>
                <input type="text" aria-label="First name" class="form-control" placeholder="Nombre">
                <input type="text" aria-label="Last name" class="form-control"placeholder="Apellido "> 
            </div>

            <label for="exampleFormControlTextarea1">Sexo:</label>
        <div class="form-check form-check-inline">
        
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">  Masculino</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Femenino</label>
        </div>
        <div class="form-check form-check-inline">
        </div>


        <div class="input-group mb-3">
                <div class="input-group-text">
                    <span class="input-group-date">Fecha de Nacimiento</span>
                </div>
                <input type="date" aria-label="First name" class="form-control" placeholder="Nombre"> 
            </div>
        
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Celular</span>
            </div>
            <input type="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="5555-5555">
            </div>
           

            <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Facultad</label>
            <select class="custom-select" id="inputGroupSelect01" placeholder="elija un salon">
               
                <option value="1">Sistemas Computacionles</option>
                <option value="2">Ingenieria Civil</option>
                <option value="3">Electrica</option>
                <option value="4">Ciencias y Tecnologia</option>
                <option value="5">Ingenieria Industrial</option>
                <option value="6">Mecanica</option>

            </select>
            </div>
              
            <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Carrera</label>
            <select class="custom-select" id="inputGroupSelect01" placeholder="elija un salon">
               
                <option value="1">Desarrollo de Software</option>
                <option value="2">Ingenieria de Software</option>
                <option value="3">Licenciatura en Redes</option>
                <option value="4">Ingenieria en Sistemas Computacionales</option>
                <option value="5">Ingenieria en sistemas de informacion</option>
                <option value="6">Mecanica</option>

            </select>
            </div>
            <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Nivel Curado</label>
            <select class="custom-select" id="inputGroupSelect01" placeholder="elija un salon">
               
                <option value="1">Primer</option>
                <option value="2">Segundo</option>
                <option value="3">Tercer</option>
                <option value="4">Cuarto</option>
                <option value="5">Quinto</option>
                

            </select>
            </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
       

       




</body>
</html>

<?php 
include '_footer.php';
 ?>
