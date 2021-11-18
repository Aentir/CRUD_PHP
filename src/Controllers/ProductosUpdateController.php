<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Productos;
use App\Views\UpdateProductos;

class ProductosUpdateController
{
  public function updateProductos($id)
  {
    //En $model me guardo la instancia de Productos con la conexión a la BBDD
    $model = new Productos(new Database);

    if (count($_POST)) {
      if (!$model->update($id, $_POST)) throw new \Exception("Error al actualizar producto");
    }

    //Creo una instancia de la vista UpdateProductos y le paso el método para buscar JUSTO el producto que quiero
    new UpdateProductos($model->findById($id));
    
  }
}

