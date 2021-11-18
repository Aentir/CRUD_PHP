<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Clientes;
use App\Views\updateCliente;

class clienteUpdateController
{
    public function clienteUpdate($id)
    {
        $model = new Clientes(new DataBase);

        if (count($_POST)){
            if (!$model->update($id, $_POST)) throw new \Exception("Error al actualizar cliente");
        }

        new updateCliente($model->findById($id));
    }
}