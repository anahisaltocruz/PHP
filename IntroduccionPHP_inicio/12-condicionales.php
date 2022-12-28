<?php include 'includes/header.php';
    //Condicionales en php
    $autenticacion = true;
    $admin = false;

    if($autenticacion || $admin){
        //también se puede usar el operador and (&&)
        //Para negar se usa el signo de exclamación ( ! ) al inicio
        echo "Usuario autenticado correctamente";
    }else{
        echo "Usuario no ha sido autenticado correctamente";
    }
include 'includes/footer.php';