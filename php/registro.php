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
<div class="container shadow mt-3">

    <br>
    <form class="mx-auto">
    <h2 class=""style="margin-left:60px;">Registrarse</h2>
    <div class="container" style="width:55%">
    <div class="input-group mb-4 mx-auto" style="">
                <div class="input-group-prepend">
                    <span class="input-group-text">Datos</span>
                </div>
                <input type="text" aria-label="First name" class="form-control" placeholder="Nombre">
                <input type="text" aria-label="Last name" class="form-control"placeholder="Apellido "> 
    </div>
            <div class="">
                
                <div class="form-check-inline">
               
                   <label class="form-check-label" for="radio1">
                      <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Masculino
                   </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Femenino
                    </label>
                </div>
                
            </div>

        <div class="input-group mb-4 mx-auto"style="">
                <div class="input-group-text">
                    <span class="input-group-date">Fecha de Nacimiento</span>
                </div>
                <input type="date" aria-label="First name" class="form-control" placeholder="Nombre"> 
            </div>
        
            <div class="input-group mb-4 mx-auto" style=>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Celular</span>
                </div>
            <input type="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="5555-5555">
            </div>
           

            <div class="input-group mb-4 mx-auto" style="">
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
              
            <div class="input-group mb-4 mx-auto" style="width:">
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
            <div class="input-group mb-4 mx-auto"style="width:">
            <label class="input-group-text" for="inputGroupSelect01">Nivel Curado</label>
            <select class="custom-select" id="inputGroupSelect01" placeholder="elija un salon">
               
                <option value="1">Primer</option>
                <option value="2">Segundo</option>
                <option value="3">Tercer</option>
                <option value="4">Cuarto</option>
                <option value="5">Quinto</option>
                

            </select>
            </div>
            <br>  
            </div>   
        <button type="submit" class="btn btn-primary float-right" style="width:250px; margin-right:60px; margin-buttom:25px;">Guardar</button>
        <br>
        </form>

    </div>
       

       




</body>
</html>

<?php 
include '_footer.php';
 ?>
