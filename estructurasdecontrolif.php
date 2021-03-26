<?php

    //la sentencia if o estructura de control sirve para la validacion de sentencias 

    $numero1 = 5;
    $numero2 = 10;
    $numero3 = 1;
    $numero4 = 1;

    //declaracion de variables de tipo boolean los cuales su tipo de dato es true o false o bien 0 y 1
    $bandera = true; 

    //para las estructuras de control podemos utilizar mayor que > menor que < para la comparacion de numeros
    //asi podemos utilizar mayor o igual >= o menor o igual <=

    //para realizar una comparacion utilizamos if(condicion){}

    //comparacion con el signo mayor que >
    if ($numero2 > $numero1){
        echo $numero2 . " " . "Si es mayor a ". $numero1;
    }

    echo "<hr>";
    //comparacion con el signo menor que <

    if ($numero1 < $numero2 ){
        echo $numero1 . " " . "Si es menor a " . $numero2;
    }

    echo "<hr>";
    //comparacion con dato iguales y se hace con la conjuacion de signos ==
    //Cuidado con comparar iguales con un solo = por que lo toma como asignacion

    if ($numero3 == $numero4){
        echo "Los numeros ". $numero3 . " y " . $numero4 . " son iguales";
    }

    echo "<hr>";
    //tambien podemos hacer una comparacion que sea mayor o igual o menor o igual con <= =>

    if($numero3 <= $numero4 ){
        echo "Los numeros ". $numero3 . " y " . $numero4 . " son menor o igual";
    }


    //Si nosotros utilizamos una estructura de control if sin tipo de comparacion 
    //if toma como si le preguntaramos si es true

    echo "<hr>";

    if ($bandera){
        echo "La variable bandera es verdadera" ;
    }



?>