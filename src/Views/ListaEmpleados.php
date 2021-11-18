<?php

namespace App\Views;

class ListaEmpleados
{
    public function __construct($result)
    {
        if(count($result) > 0){
            echo "<table border='1'>";
            echo "<th>EMP_NO</th>";
            echo "<th>Apellidos</th>";
            echo "<th>Oficio</th>";
            echo "<th>Jefe</th>";
            echo "<th>Fecha_Alta</th>";
            echo "<th>Salario</th>";
            echo "<th>Comision</th>";
            echo "<th>Dept_No</th>";
            echo "<th>Opciones</th>";
            foreach($result as $row){
                echo "<tr><td><a href='detalleEmpleados/" . $row["EMP_NO"] . "'>" . $row["EMP_NO"] . "</a></td>"
                . "<td>" . $row["APELLIDOS"] . "</td>"
                . "<td>" . $row["OFICIO"] . "</td>"
                . "<td>" . $row["JEFE"] . "</td>"
                . "<td>" . $row["FECHA_ALTA"] . "</td>"
                . "<td>" . number_format($row["SALARIO"], 2, "." , ".") . " €"  . "</td>"   //Se formatea el campo para darle mejor aspecto
                . "<td>" . number_format($row["COMISION"], 2, "." , ".") . " €" . "</td>"
                . "<td>" . $row["DEPT_NO"] . "</td>"
                . "<td><a href='/updateEmpleado/".$row["EMP_NO"]."'>Actualizar</a> <a href='/deleteEmpleado/" . $row["EMP_NO"] . "'>Borrar</a></td>" 
                . "</tr>";
            }            
            echo "</table>";
            echo "<a href='/'>Dash board</a><br>";
            echo "<a href='/insertEmpleado'>Añadir nuevo empleado</a>";
            
        } else {
            echo "No hay resultados";
        }
        
    }
}