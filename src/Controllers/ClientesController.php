<?php 

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Clientes;
use App\Views\ListadoClientes;

class ClientesController
{
 public function clientes(){
    $clientes = new Clientes(new Database);
    $resultados = $clientes->findAll();
    new ListadoClientes($resultados);
 }
}