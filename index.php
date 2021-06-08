<h1>Web con MVC</h1>

<?php

// require_once 'CONTROLLERS/usuario.php';  //En vez de esto se usa autoload una vez
// require_once 'CONTROLLERS/nota.php';

 require_once 'autoload.php'; //se incluyen automaticamente los 
 //controladores



//CONOCIDO NORMALMENTE COMO "CONTROLADOR FRONTAL"
//YA QUE ES EL ENCARGADO DE LLAMAR TODO


//se le concatena el "controller" para acortar la url
// ya que se utiliza en todas las llamadas de controladores
if (isset($_GET['controller'])) {
    $nombreControlador = $_GET['controller'] . 'Controller';
} else {
    echo "La pagina que buscas no existe";
    exit();
}

//Comprobando que exista el controlador
if (isset($nombreControlador) && class_exists($nombreControlador)) {

    $controlador = new $nombreControlador();

    //para llamar vistas de forma dinamica
    // (recoger variables por get)

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action(); //de esta forma llama al metodo que tenemos
        //en esa clase
    } 
    else {
        echo "La vista que buscas no existe";
    }


}  
else {
    echo "El controlador que buscas no existe";
}

?>