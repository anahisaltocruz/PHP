<?php include 'includes/header.php';

/**
 * Los objetos en JS son equivalentes a los arreglos asociativos
 */
$productos = [
    [   'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
];
echo "<pre>";
    var_dump($productos);
    //Lo que hace esta funcion es convertir un array a string
    $json = json_encode($productos,JSON_UNESCAPED_UNICODE);//El segundo parametro nos sirve para que tome
                                                            //en cuenta correctamente los acentos
    $json_array = json_decode($json);//Convierte un string a un array                                                            
    echo "<br>";
    echo "<br>";
    var_dump($json);
    echo "<br>";
    echo "<br>";
    var_dump($json_array);
echo "</pre>";

include 'includes/footer.php';