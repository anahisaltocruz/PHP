<?php include 'includes/header.php';
    //Funciones en PHP
    function sumar($numero1 = 0, $numero2 = 0){
        //El 0 es un parámetro por default 
        //Es decir, si no se le pasan parametros a la función
        //o si solo se pasa uno, no se marcara un error, si no que 
        //se sumara con 0 
        echo $numero1+$numero2;
        echo "<br>";
    }

    sumar(4,10);
    sumar(20,56);
    sumar(1,3);
    sumar(6,4);

include 'includes/footer.php';