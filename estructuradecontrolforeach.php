<?php

    $arregloColores = array(
        "coche" => "verde",
        "moto" => "roja",
        "avion" => "gris"

    );
    
    //una estructura de control iterativa
    //que usa llaves o asociaciones de datos como indice 

    foreach($arregloColores as $key){

        echo $key;
        echo "<br>";

    }

?>