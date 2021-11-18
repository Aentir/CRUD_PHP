<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Pedidos;
use App\Views\ListadoPedidos;

class PedidosController{
    public function pedidos(){
        $model = new Pedidos(new DataBase);
        new ListadoPedidos($model->findAll());
    }
}