<?php

    //los operadores logicos sirven para validar expreciones 
    //or sirve para validar una sentencia o otra y se usa ||
    //and sirve para validar ambas sentencias y se usa &&
    $resultado = 50;

        if ($resultado < 60 and $resultado > 49){
            echo "es un numero 50 valido";
        }
        echo "<hr>";
    
    $edadvalida = 25;

        if ($edadvalida > 18 and $edadvalida < 26){
            echo "la edad es valida";
        }
        echo "<hr>";
    $sexo = "F";
        if ($sexo == "M" or $sexo == "F"){
            echo "sexo valido";
        }

    // operador diferente de y negacion
    // diferente se usa !=
    // para negacion se usa el signo de ! 
    echo "<hr>";
    $dato = 5;
        if ($dato != 10){
            echo "Es un dato diferente de 10";
        }  

    echo "<hr>";
    $dato2 = false;
        if (!$dato2){
            echo "no es verdadero";
        }
    



    
?>