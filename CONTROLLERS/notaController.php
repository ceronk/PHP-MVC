<?php

class NotaController
{
    public function listarNota()
    {
        require_once 'MODELS/nota.php'; //cargando modelo


        //Logica del controlador
        $nota = new Nota();
        $nota->setNombre("test");
        $nota->setContenido("Hola");


        $notas = $nota->mostrarTodos(' notas ');



        require_once 'VIEWS/NOTAS/listar.php'; //cargando vista
    }

    public function crearNota()
    {
    }

    public function borrarNota()
    {
    }
    
}
