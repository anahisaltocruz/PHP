<?php include 'includes/header.php';
    //Ciclos for, for each, while
    //while
    $i = 0;
    while($i <= 10){
        echo $i . "<br>";
        $i++;
    }

    $i = 0;
    //Do-while: Primero ejecuta el código y después revisa la condición
    //Por eso al menos una vez se va a ejecutar lo que está dentro de las llaves
    do{
        echo $i . "<br>";
        $i++;
    }while($i <= 10);

    //for loop
    for($i = 0; $i <= 10; $i++){
        echo $i . "<br>";
    }

include 'includes/footer.php';