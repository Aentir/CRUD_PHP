<?php


namespace App\Controllers;

use App\Models\Pedidos;
use App\Core\DataBase;
use App\Views\DetallePedidos;

class PedidosDetalleController
{
    public function detallePedidos($id){
        $model = new Pedidos(new DataBase);
        $result = $model->findById($id);

        new DetallePedidos($result);
    }
}