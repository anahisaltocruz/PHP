<?php include 'includes/header.php';
    //Está diseñado para recorrer arreglos
    $clientes = array('Pedro', 'Juan', 'Karen');
    foreach($clientes as $clientes2){
        echo $clientes2 . "<br>";
    }
    //$clientes2 es solo una tipo variable temporal
    //la cual nos va a ayudar para recorrer el array original

    $productos = [
        [   'nombre' => 'Tablet',
            'precio' => 200,
            'disponible' => true
        ],
        [
            'nombre' => 'Television 24"',
            'precio' => 300,
            'disponible' => true
        ],
        [
            'nombre' => 'Monitor Curvo',
            'precio' => 400,
            'disponible' => false
        ]
    ];
    foreach($productos as $productos2){
        echo "<pre>";
            var_dump($productos2);
        echo "</pre>";
    }

    foreach($productos as $productos2){ ?>
        <li>
            <p>Producto: <?php echo $productos2['nombre'];?></p>
            <p>Precio: <?php echo $productos2['precio'];?></p>
            <?php
                if($productos2['disponible']){
                    echo "<p>Disponible</p>";
                }else{
                    echo "<p>No disponible</p>";
                }
            ?>
        </li>
        <?php
    }
include 'includes/footer.php';