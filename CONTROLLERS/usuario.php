<?php

//El controlador encapsula acciones
class UsuarioController
{


    public function mostrarTodos()
    {

        require_once 'MODELS/usuario.php'; //cargando modelo

        $usuario = new Usuario();

        $allUsers = $usuario->mostrarTodos();

        require_once 'VIEWS/USUARIOS/mostrarTodos.php'; //cargando vista
    }


    public function crearUsuario()
    {
        require_once 'VIEWS/USUARIOS/crearUsuario.php';
    }
}
