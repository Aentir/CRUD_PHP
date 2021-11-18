<?php 

namespace App\Controllers;

use App\Core\DataBase;  //Usa DataBase para conectarse
use App\Models\Productos;  //Usa Productos para usar algún método que tenga
use App\Views\ListadoProductos;  //Usa la vista para poder mostrar la info

class ProductosController
{
 public function productos(){
    //Se guarda la conexión a BBDD en $productos, para hacer uso de métodos de la clase Productos
    $productos = new Productos(new Database);

    //Se guarda en $resultados lo que devuelve la query del método findAll();
    $resultados = $productos->findAll();

    //Se crea una instancia de la vista ListadoProductos pasándole el resultado de la query para poder mostrar la info en la vista (formato array assoc)
    new ListadoProductos($resultados);
 }
}