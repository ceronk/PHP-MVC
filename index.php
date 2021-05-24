<?php require_once 'CONTROLLERS/usuario.php';


//CONOCIDO NORMALMENTE COMO "CONTROLADOR FRONTAL"
//YA QUE ES EL ENCARGADO DE LLAMAR TODO


//Comprobando que exista el controlador
if (isset($_GET['controller']) && class_exists($_GET['controller'])) {
    //$controlador = new nombreControlador();
    $nombreControlador = $_GET['controller'].'controller';
    $controlador = new $nombreControlador();


    //$controlador->mostrarTodos();  //llamada manual de vistas
    //$controlador->crearUsuario();

    //para llamar vistas de forma dinamica
    // (recoger variables por get)

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action(); //de esta forma llama al metodo que tenemos
        //en esa clase
    } else {
        echo "La vista que buscas no existe";
    }
} else {
    echo "El controlador que buscas no existe";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Hola mundo | MVC</h1>

</body>

</html>