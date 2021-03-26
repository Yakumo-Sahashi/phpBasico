<?php
    //un arreglo es un tipo de dato que puede contener n datos 
    //a partir de un almacenamiento por indice y se utiliza la palabra reservada array();
    $arreglo = array();
    $arreglo[0] = "Juan";
    $arreglo[1] = 10;
    $arreglo[2] = "Error de capa 8 :D";
    $arreglo[3] = "nel perro";

    echo $arreglo[1] + 5;
    echo "<hr>";
    echo count($arreglo);
    echo "<hr>";
    for($i=0; $i < count($arreglo); $i++){
        echo $arreglo[$i];
        echo "<br>";

        if ($arreglo[$i] == "nel perro"){
            echo "felicidades encontraste el dato";
        }

    }
    echo "<hr>";
    //podemos llenar el arreglo desde el inicio o por pocision

    $arreglo2 = array('Mario',5,4,3,2,1);
    for($i=0; $i < count($arreglo2); $i++){
        echo $arreglo2[$i];
        echo "<br>";

       
    }
    echo "<hr>";


    //var_dump muestra el tipo de variable y su contenido
    var_dump($arreglo);

    

?>