<?php

    $var = "pedro jimenez lopez";

    $fecha = "01-05-2017";

    //explode es una funcion que convierte un string en un arreglo 
    //dependiendod e la construccion pedida

    $dato = explode(" ", $var);
    $paterno = $dato[1];
    $fecha = explode("-", $fecha);

    echo "El año de la fecha es " . $fecha[2];
    echo "<br>";
    echo $paterno;

    echo "<hr>";

    echo "<pre>";
    print_r($dato);
    echo "</pre>";



    echo "<hr>";
    var_dump($dato);

?>