<?php 

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Clientes;
use App\Views\DetalleCliente;

class clienteDetalleController
{
   public function clienteDetalle($id){
      $clienteDetalle = new Clientes(new Database);
      new DetalleCliente($clienteDetalle->findById($id));
   }
  }