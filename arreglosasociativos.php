<?php

    //es un tipo de dato que puede almacenar n datos
    //pero en vez de guardar por indice , se le proporciona una llave o nombre
    //a dicho dato

    $arregloColores = array(
            "coche" => "verde",
            "moto" => "roja",
            "avion" => "gris"
        );
    
    var_dump($arregloColores);

    echo "<hr>";
    //para acceder a los elementos del array asociativo
    echo $arregloColores['coche'];
    

?>