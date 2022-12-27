<?php include 'includes/header.php';
    /**
     * Son el q¿equivalente a los objetos en Javascript
     * Se va a acceder a ellos por medio de una propiedad
     */
    $cliente = [
        'nombre' => 'Juan',
        'saldo' => 200,
        'informacion' => [
            'tipo' => 'premium',
            'disponible' => 100
        ]
    ];

    echo "<pre>";   //Aquí puedo ver todos los campos 
        var_dump($cliente);
    echo "</pre>";

    //Si quiero ver un campo en especial, en lugar de escribir el número del 
    //índice, debo poner el nombre de la "columna"
    echo "<pre>";   
        var_dump($cliente['nombre']);
    echo "</pre>";

    echo "<pre>";   
        var_dump($cliente['saldo']);
    echo "</pre>";

    //Aquí me imprime todo el arrehlo interno
    echo "<pre>";   
        var_dump($cliente['informacion']);
    echo "</pre>";

    //Aquí me imprime solo uno de los campos del arreglo interno
    //Se tiene que especificar el campo interno
    echo "<pre>";   
        var_dump($cliente['informacion']['tipo']);
    echo "</pre>";

    echo "<pre>";   
        var_dump($cliente['informacion']['disponible']);
    echo "</pre>";


include 'includes/footer.php';