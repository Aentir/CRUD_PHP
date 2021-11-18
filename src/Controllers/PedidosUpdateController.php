<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Pedidos;
use App\Views\UpdatePedidos;

class PedidosUpdateController
{
    public function updatePedidos($id)
    {
        $model = new Pedidos(new DataBase);

        if (count($_POST)){
            if (!$model->update($id, $_POST)) throw new \Exception("Error al actualizar cliente");
        }
        new UpdatePedidos($model->findById($id));
    }
}