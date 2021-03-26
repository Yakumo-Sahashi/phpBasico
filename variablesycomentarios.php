<?php

    //Los comentarios sirven para que documentemos nuestro codigo y se pueden hacer con doble // 
    /*o bien con */
    #Tambien con #
    
    //para declarar una variable en php requerimos el signo $_COOKIE
    //PHP es un lenguaje de programacion debilmente tipado es decir que no se necesita declarar el tipo de dato
    //PHP es un lenguaje interpretado es decir que no crea un archivo adicional para poder funcionar


    //Declaracion de dato de tipo entero
    $mivariable = 1;
    //Declaracion de dato de tipo string
    $mivariable2 = "nombre";
    //Declaracion de dato de tipo float
    $mivariable3 = 1.5;

    //Para mostrar en pantalla informacion podemos hacerlo con echo
    echo $mivariable;
    //podemos hacer un salto de linea incrustando html 
    echo "<hr>";
    //podemos usar tambien print
    print($mivariable3);    

    //para concatenar cadenas de texto utilizamos el . en PHP 
    //concatenar es la union de cadenas de texto y numeros
    $nombre = "Mario";
    $apellido = "Arriaga";

    echo "<hr>";

    echo $nombre . " " . $apellido;



?>