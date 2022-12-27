<?php include 'includes/header.php';
    $carrito = ['Tablet', 'Television', 'Computadora'];

    //Una forma muy útil para ver los contenidos de un array
    echo "<pre>";
        var_dump($carrito);
    echo "</pre>";

    //Acceder a un elemento del array:
    echo $carrito[1];//o sea que vamos a acceder a 'Television'
    echo "<br-->";

    //Agregamos un nuevo elemento en a posicion 3 al array:
    $carrito[3] = 'Nuevo productooo';

    //Agregar un elemento nuevo al final del array (no es necesario saber su extensión):
    array_push($carrito,'audifonos');
    echo "<pre>";
        var_dump($carrito);
    echo "</pre>";

    //Agregar un elemento al array al inicio:
    array_unshift($carrito,'smartwatch');
    echo "<pre>";
        var_dump($carrito);
    echo "</pre>";

    //Otra forma de crear la variable (un array):
    $clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
    echo "<pre>";
        var_dump($clientes);
    echo "</pre>";
    echo "<br>";
    //Acceder a un cliente en especial:
    echo $clientes[2];

include 'includes/footer.php';