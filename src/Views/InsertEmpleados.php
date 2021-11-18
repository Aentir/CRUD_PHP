<?php

namespace App\Views;

class InsertEmpleados
{   //$result contiene la info de la query para poder recuperar los datos de JEFE
    public function __construct($result)
    {
        echo "<form action='/insertEmpleado' method='post'>";
        echo "Numero empleado : <br><input type='number' name='EMP_NO'></input><br>";
        echo "Apellidos: <br><input type='text' name='APELLIDOS'></input><br>";
        echo "Oficio: <br><input type='text' name='OFICIO'></input><br>";
        echo "Jefe: <br><select name='JEFE'>";
            foreach($result as $row){
                echo "<option value='$row[JEFE]'> $row[JEFE] </option>";
            }
        echo "</select><br>";
        echo "Salario: <br><input type='number' name='SALARIO'></input><br>";
        echo "Comision: <br><input type='number' name='COMISION'></input><br>";
        echo "Numero departamento: <br><input type='number' name='DEPT_NO'></input><br>";
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
        echo "<a href='/empleados'>Listado de empleados</a>";
    }
}