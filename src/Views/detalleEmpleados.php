<?php

namespace App\Views;

class detalleEmpleados{
    public function __construct($result)
    {

        if (count($result) > 0) {
            echo "<table border='1'>";
            echo "<th>Apellido</th>";
            echo "<th>Oficio</th>";
            echo "<th>Numero_Jefe</th>";
            echo "<th>Fecha de Alta</th>";
            echo "<th>Salario</th>";
            echo "<th>Comision</th>";
            echo "<th>Numero de departamento</th>";
                echo "<tr><td>" . $result["APELLIDOS"] . "</td>"  
                . "<td>" . $result["OFICIO"] . "</td>" . 
                "<td>" . $result["JEFE"] . "</td>" .
                "<td>" . $result["FECHA_ALTA"] . "</td>" .
                "<td>" . $result["SALARIO"] . "</td>" .
                "<td>" . $result["COMISION"] . "</td>" .
                "<td>" . $result["DEPT_NO"] . "</td>" ."</tr>";
            echo "</table>";
            echo "<a href='/empleados'>Lista de Empleados</a>";
        }
    }
}