<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Clientes;

class clienteDeleteController
{
  public function clienteDelete($id)
  {
    $model = new Clientes(new Database);

    if (!$model->delete($id)) throw new \Exception("Error al elilminar cliente");

    header("location:/clientes");
  }
}