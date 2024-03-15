<?php
    $nombre = $_POST['Nombre'];
    $apellidop = $_POST['ApellidoP'];
    $apellidom = $_POST['ApellidoM'];
    $edad = $_POST['Edad'];
    $hobby = $_POST['Hobby'];

    $datos="NOMBRE: $nombre \nAPELLIDOS: $apellidop $apellidom\nEDAD: $edad\nHOBBY: $hobby\n\n";
    $ruta= "Datos.txt";
    if(file_put_contents($ruta,$datos, FILE_APPEND | LOCK_EX)!==false)
    {
        echo "HA SIDO EXITOSO";
    } 
    else {
        echo "FAIL";
    }


?>;


