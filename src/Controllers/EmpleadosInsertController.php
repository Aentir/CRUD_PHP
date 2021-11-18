<?php

namespace App\Controllers;

use App\Core\DataBase;
use App\Models\Empleados;
use App\Views\InsertEmpleados;

class EmpleadosInsertController
{
    public function insertEmpleados(){
        $model = new Empleados(new DataBase);
        //Llamo al método findAll de Empleados para poder pasarle a la vista la info y mostrarlo en el desplegable

        //var_dump($_POST);
        
        if (count($_POST)){
            if(!$model->insert($_POST)) throw new \Exception("Error al insertar nuevo empleado");
        } 

        new insertEmpleados($model->findAll());
    }
}