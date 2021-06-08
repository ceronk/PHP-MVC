<?php

require_once 'CONFIG/database.php';

class ModeloBase
{

    public $db;

    public function __construct()
    {
        $this->db = database::conectar();
    }


    public function mostrarTodos($tabla)
    {
        $query = $this->db->query(" SELECT * FROM $tabla ");

        return $query;
    }
}
