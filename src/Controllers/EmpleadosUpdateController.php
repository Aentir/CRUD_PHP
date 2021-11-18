<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Empleados;
use App\Views\UpdateEmpleados;

class EmpleadosUpdateController
{
    public function updateEmpleados($id){
        $model = new Empleados(new DataBase);
        if (count($_POST)){
            if (!$model->update($id, $_POST)) throw new \Exception("Error al actualizar empleado");
        }

        new UpdateEmpleados($model->findById($id), $model->findAll());

        
    }
}