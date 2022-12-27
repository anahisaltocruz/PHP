<?php include 'includes/header.php';
    //Buscar elementos en un arreglo
    $carrito = ['Tablet', 'Computadora', 'Television'];
    //La función in_array nos dice si existe cierto elemento en el 
    //array -> True si es que sí existe
    //False -> so es que no existe
    var_dump(in_array('Tablet',$carrito));
    var_dump(in_array('Audifonos',$carrito));

    echo "<br>";
    $numeros = array(1,3,4,5,1,2);//Array desordenado
    echo "<pre>";
        var_dump($numeros);
    echo "</pre>";

    echo "<br>";
    //Ordenar los elementos de un arreglo de menor a mayor
    sort($numeros);
    echo "<pre>";
        var_dump($numeros);
    echo "</pre>";

    echo "<br>";
    //Ordenar los elementos de un arreglo de mayor a menor
    rsort($numeros);
    echo "<pre>";
        var_dump($numeros);
    echo "</pre>";

    //Ordenar un arreglo asociativo
    $cliente = array(
        'saldo' => 200,
        'tipo' => 'Premium',
        'nombre' => 'Juan'
    );
    echo "<pre>";
        var_dump($cliente);
    echo "</pre>";

    asort($cliente);//Ordena arreglos asociativos
    echo "<pre>";//arsort() lo hace inverso
        var_dump($cliente);
    echo "</pre>";
    //Primero muestra los numeros, y después alfabeticamente

    ksort($cliente);//Ordena de acuerdo a los valores (alfabeticamente)
    echo "<pre>";
        var_dump($cliente);
    echo "</pre>";

    krsort($cliente);//Ordena de acuerdo a los valores (alfabeticamente inverso)
    echo "<pre>";
        var_dump($cliente);
    echo "</pre>";

include 'includes/footer.php';