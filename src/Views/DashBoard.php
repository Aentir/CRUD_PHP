<?php

namespace App\Views;


class DashBoard
{
  public function __construct()
  { 
    //Se crean los 2 enlaces para productos y clientes
    echo "<h1><a href='/productos'>Productos</a></h1>";
    echo "<h1><a href='/clientes'>Clientes</a></h1>";
    echo "<h1><a href='/empleados'>Empleados</a></h1>";
    echo "<h1><a href='/pedidos'>Pedidos</a></h1>";
  }
}
