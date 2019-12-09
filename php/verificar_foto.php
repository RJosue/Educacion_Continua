<?php
$tamanioPermitido = 200 * 1024;
//Tenemos una lista con las extensiones que aceptaremos
$extensionesPermitidas = array("jpg", "jpeg", "gif", "png");

//Validamos el tipo de archivo, el tamaño en bytes y que la extensión sea válida 
    //Obtenemos la extensión del archivo
    echo $_POST['foto']["name"];
    echo $_FILES['file']["name"];
    // $extension = explode(".", $_FILES["foto"]["name"]);
    // //Si no hubo un error al subir el archivo temporalmente 
    // if ((($_FILES["foto"]["type"] == "image/gif") || ($_FILES["foto"]["type"] == "image/jpeg") || ($_FILES["foto"]["type"] == "image/png")      || ($_FILES["foto"]["type"] == "image/pjpeg"))   && ($_FILES["foto"]["size"] < $tamanioPermitido) && in_array($extension[1], $extensionesPermitidas)) {
    //     if ($_FILES["foto"]["error"] > 0) {
    //         echo "Return Code: " . $_FILES["foto"]["error"] . "";
    //     } else { //Si el archivo ya existe se muestra el mensaje de error
    //         if (file_exists(__DIR__ . "/img/productos/" . $_FILES["foto"]["name"])) {
    //             echo $_FILES["foto"]["name"] . " already exists. ";
    //         } else { //Se mueve el archivo de su ruta temporal a una ruta establecida
    //             move_uploaded_file($_FILES["foto"]["tmp_name"], __DIR__ . "/img" . $_FILES["foto"]["name"]);
    //             echo "imagen subida";
    //         }
    //     }
    // } 
    ?>