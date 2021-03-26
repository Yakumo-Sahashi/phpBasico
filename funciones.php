<?php
    //las funciones son fracciones de codigo que puedes llamar en situaciones especificas llamandolos por su nombre
    
    //funcion normal de php
    function miFuncion(){

        //mostrar un nombre 
        return 'Este es un nombre';
    }

    echo miFuncion();
    echo "<hr>";

    //funciones escalares

    
    function mifuncion2($valorA,$valorB,$opcion){
        switch($opcion){
            case 'suma':
                echo $valorA + $valorB; 
                break;
            case 'resta':
                echo $valorA - $valorB;
                break;
            case 'multiplicacion':
                echo $valorA * $valorB;
                break;
            case 'division':
                echo $valorA / $valorB;
                break;
            default:
                break;
            
        }
    }

    echo mifuncion2(10, 5, 'multiplicacion');
?>