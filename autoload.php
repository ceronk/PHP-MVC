<?php


//Funcion para preparar clases de tipo controlador a iniciar
function autocargar($classController){
    include 'CONTROLLERS/' . $classController . '.php';
}


spl_autoload_register('autocargar'); //se le pasa la funcion autocargar



?>