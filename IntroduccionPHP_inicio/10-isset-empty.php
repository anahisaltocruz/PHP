<?php include 'includes/header.php';
    /**
     * Hi
     */
    $clientes = [];
    $clientes2 = array();
    $clientes3 = array('Pedro','Juan','Ana');

    //Empty (vacio). Esta funcion devuelve TRUE si el array está vacio
    var_dump(empty($clientes));//TRUE
    var_dump(empty($clientes2));//TRUE
    var_dump(empty($clientes3));//FALSE

    echo "<br>";
    //Isset() -> Revisa si un arreglo ha sido creado o una propiedad
    //está definida
    var_dump(isset($clientes4));//FALSE: Porque aún no está definido
    var_dump(isset($clientes3));//TRUE: Porque sí está definido
    var_dump(isset($clientes));//TRUE: Porque sí está definido
    var_dump(isset($clientes3));//TRUE: Porque sí está definido
    echo "<br>";

    //Con isset también se puede revisar si una propiedad existe
    $clientes = [
        'nombre' => 'Anahi',
        'saldo' => 1000
    ];
    //Aquí revisa si existe el "atributo" llamado 'nombre'
    var_dump(isset($clientes['nombre']));//TRUE: Porque sí existe
    var_dump(isset($clientes['apellido']));//FALSE: Porque no existe
    var_dump(isset($clientes3[100]));//FALSE: Porque no existe ese indice 
                                    //Llega hasta el indice 2 

include 'includes/footer.php';