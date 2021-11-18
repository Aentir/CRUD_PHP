<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Productos;
use App\Views\InsertProductos;

class ProductosInsertController
{
  public function insertProductos()
  {
    //Guardamos en $model la instancia de la conexión a la BBDD
    $model = new Productos(new Database);
    
    //Se pasa por $_POST la info insertada y se lee, se comprueba si el método INSERT tiene información de $_POST, sino, lanza error
    if (count($_POST)) {
      //var_dump($_POST);

      if (!$model->insert($_POST)) throw new \Exception("Error al insertar producto");
    }
    /* $model->insert($_POST);
    } else {
      echo "Insert fallido";
    }*/
    
    //Se instancia la vista para insertar los productos
    new InsertProductos();
  }
}