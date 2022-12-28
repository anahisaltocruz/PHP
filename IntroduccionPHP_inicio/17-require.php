<?php include 'includes/header.php';
    /**
     * Si ponemos el nombre dentro de los argumentos de la función
     * cuando la llamamos, podemos cambiar el orden de cómo vamos 
     * pasando los parametros
     * 
     * La función trabaja completamente igual a que si lo pasamos 
     * de forma "normal"
     */

     /**
      * El include que aparece en este dicumento al inicio, nos sirve para
      * poder asignar el mismo encabezado a todos los archivos que hemos hecho
      * en PHP

      * require funciona igual que la palabra include
      * require se recomienda para funciones "importantes"
      * include se recomienda para llamar funciones que no son vitales
      * para el funcionamiento de la aplicación

      * require_once : funciona <casi> igual que require, solo que primero revisa
      * si ya ha sido agregado, si no, lo incluye, si sí, solo se ignora esa linea
      */

include 'includes/footer.php';