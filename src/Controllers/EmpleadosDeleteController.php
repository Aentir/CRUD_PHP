<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Empleados;

class EmpleadosDeleteController
{
    public function deleteEmpleados($id)
    {
        $model = new Empleados(new DataBase);
        $model->delete($id);

        //Redirecciono a la lista de empleados, se ve feo sino
        header("location:/empleados");
    }
}