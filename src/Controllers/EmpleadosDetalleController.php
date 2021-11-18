<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Empleados;
use App\Views\DetalleEmpleados;

class EmpleadosDetalleController
{
    public function detalleEmpleados($id){
        $models = new Empleados(new DataBase);
        $result = $models->findById($id);

        new detalleEmpleados($result);
    }
}