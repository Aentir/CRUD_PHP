<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Productos;

class ProductosDeleteController
{
  public function deleteProductos($id)
  {
    $model = new Productos(new Database);

    if (!$model->delete($id)) throw new \Exception("Error al elilminar producto");

    header("location:/productos");
  }
}
