<?php include 'includes/header.php';
    $nombreCliente = "   Anahi Salto    ";

    echo strlen($nombreCliente);    //Nos devuelve la longitud de la cadena
    echo "<br>";
    var_dump($nombreCliente);   //También nos dice la longitud de la variable string
    echo "<br>";

    //Eliminar espacios en Blanco del inicio o del final de la cadena
    $texto = trim($nombreCliente);
    echo $texto;
    echo "<br>";
    echo strlen($texto);
    echo "<br>";

    //Convertir a Mayúsculas 
    $textoMayus = strtoupper($texto);
    echo $textoMayus;
    echo "<br>";

    //Convertir a Minúsculas 
    $textoMinus = strtolower($texto);
    echo $textoMinus;
    echo "<br>";

    $mail1 = "correo@correo.com";
    $mail2 = "Correo@correo.com";
    //Si comparamos éstas últimas 2 variables, tendremos que son diferentes, pero para evutar "errores"
    //primero vamos a convertir, por ejemplo, en minúsculas

    //Remplazar un fragmento de la cadena de texto, por otra cadena
    //Ejemplo: Remplazo "Anahi" por "Alina"
    $texto = str_replace('Anahi','Alina',$texto);
    echo $texto;
    echo "<br>";

    //Revisar si un string tiene cierto fragmento de otro string
    //Ejemplo: Revisar si la variable texto tiene "Alina" o "Anahi"
    echo strpos($texto,'Alina');
    echo "<br>";
    //En caso de exista "Alina", va a devolver la posición en la que se encuentra
    //De lo contrario, no devuelve nada
    echo strpos($texto,'Anahi');
    echo "<br>";

    $masMenos = "mayor";
    //Concatenar cadenas 
    $varConcatenada = $texto . " es mi hermana " . $masMenos;
    echo $varConcatenada;   
    echo "<br>";

include 'includes/footer.php';