<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Pedidos;
use App\Views\InsertPedidos;

class PedidosInsertController
{
    public function insertPedidos()
    {
        $model = new Pedidos(new DataBase);

        if (count($_POST)){
            if(!$model->insert($_POST)) throw new \Exception("Error al insertar el pedido");
        }
        
        new InsertPedidos();

    }
}