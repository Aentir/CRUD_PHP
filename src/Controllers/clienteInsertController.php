<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Clientes;
use App\Views\InsertClientes;

class clienteInsertController {
    
    public function clienteInsert(){

        $clientes = new Clientes(new DataBase);

        if(count($_POST)){

            if(!$clientes->insert($_POST)) throw new \Exception("Error al insertar nuevo cliente");
        }

        new InsertClientes();
    }
}