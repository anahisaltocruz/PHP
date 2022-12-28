<?php include 'includes/header.php';
    //Funciones que retornan valores                  ?string -> quiere decir que puede que retorne un string o nada
                        //también se puede retornar de diferentes tipos: string | int (string o entero)
    function usuarioAutenticacion(bool $autenticado): string{    //Nos dice qué tipo de dato
                                            //se va a retornar
                                            //De igual forma, dentro de los argumentos
                                            //se puede especificar el tipo de dato que va a 
                                            //recibir
        if($autenticado){
            return "El usuario ha sido autenticado";
        }else{
            return "El usuario no ha sido autenticado";
        }
    } //Fin de la función que devuelve valor

    $usuario = usuarioAutenticacion(false);
    echo $usuario;

include 'includes/footer.php';