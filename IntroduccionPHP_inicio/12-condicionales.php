<?php include 'includes/header.php';
    //Condicionales en php
    $autenticacion = true;
    $admin = false;

    if($autenticacion || $admin){
        //también se puede usar el operador and (&&)
        //Para negar se usa el signo de exclamación ( ! ) al inicio
        //El else if funciona igual que en los otros lenguajes
        //También los if anidados funcionan de una misma forma
        echo "Usuario autenticado correctamente";
    }else{
        echo "Usuario no ha sido autenticado correctamente";
    }

    //Switches
    $tecnologia = 'PHP';
    switch($tecnologia){
        case 'PHP':
            echo "Aqui estoy en PHP";
            break;
        case 'C':
            echo "Aqui estoy en C";
            break;
        default:
            echo "Aqui estoy en cualquier otro lenguaje";
            break;
    }

include 'includes/footer.php';