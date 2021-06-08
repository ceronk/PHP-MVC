<?php

class Database{  //clase estatica para consultar la BDD
                // objetos de Mysqli



public static function conectar(){
    $conexion = new mysqli("localhost","root","","notas_master");

    $conexion->query("SET NAMES 'utf8'");

    return $conexion;

}

}


?>