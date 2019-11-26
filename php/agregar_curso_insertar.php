<?php

$fechaini  = $_POST['fechaini'];
$fechafin = $_POST['fechafin'];

$numero = count($fechaini);
echo $numero;
for ($i=0; $i < $numero; $i++) { 
    echo $fechaini[$i]."///////".$fechafin[$i];
}

// foreach ($fechaini as $value) {
//     echo $value;
// }
?>