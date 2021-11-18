<?php

namespace App\Views;

class UpdateEmpleados{
    //$data contiene la información DE UN empleado en concreto, tiene la info para ESE empleado
    //$result tiene los datos de TODA la tabla empleados, se necesita para poder incluir TODOS los jefes en el desplegable
    
    public function __construct($data, $result)
    {   /*var_dump($data);
        var_dump($result);*/

        echo "<form action='/updateEmpleado/".$data["EMP_NO"]."' method='post'>";
        echo "Numero empleado : <br><input type='number' name='EMP_NO' value='$data[EMP_NO]'></input><br>";
        echo "Oficio: <br><input type='text' name='OFICIO' value='$data[OFICIO]'</input><br>";
        echo "Jefe: <br><select name='JEFE'>";
            foreach($result as $row){
                echo "<option value='$row[JEFE]'> $row[JEFE] </option>";
            }
        echo "</select><br>";
        echo "Fecha de alta: <br><input type='date' name='FECHA_ALTA' value='$data[FECHA_ALTA]'></input><br>";
        echo "Salario: <br><input type='number' name='SALARIO' value='$data[SALARIO]'></input><br>";
        echo "Numero departamento: <br><input type='number' name='DEPT_NO' value='$data[DEPT_NO]'></input><br>";
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
        echo "<a href='/empleados'>Listado de empleados</a>";
    }
}