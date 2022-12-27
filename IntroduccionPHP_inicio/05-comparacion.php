<?php include 'includes/header.php';
//Operadores de comparación
    $numero1 = 20;
    $numero2 = 30;
    $numero3 = 30;
    $numero4 = "30";

    var_dump($numero1 > $numero2);
    echo "<br>";

    var_dump($numero1 < $numero2);
    echo "<br>";

    var_dump($numero1 >= $numero2);
    echo "<br>";

    var_dump($numero1 >= $numero2);
    echo "<br>";

    var_dump($numero2 == $numero3); //Doble igual revisa el valor (el tipo de dato, no)
    echo "<br>";

    var_dump($numero2 == $numero4);
    echo "<br>";

    var_dump($numero2 === $numero4);    //Triple signo de igual revisa el tipo de dato
    echo "<br>";                        //y el valor 

    /*
    Este operador nos devuelve:
    -1 : Si Izquierda es menor
    0 : Si ambos numeros son iguales
    1 : Si Izquierda es mayor
    */
    var_dump($numero1 <=> $numero2);
    echo "<br>";
include 'includes/footer.php';