<?php

namespace APP\Controllers;

use App\Core\DataBase;
use App\Models\Empleados;
use App\Views\ListaEmpleados;

class EmpleadosController
{
    public function empleados(){

        $model = new Empleados(new DataBase);
        $result = $model->findAll();
        new ListaEmpleados($result);
    }
}