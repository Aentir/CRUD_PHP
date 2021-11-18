<?php

namespace App\Views;


class DetalleCliente
{
  public function __construct($row)
  {
    if (count($row) > 0) {
      echo "<table border='1'>";
      echo "<tr>";
      echo "<td>CLIENTE_COD: " . $row["CLIENTE_COD"] . "</td>";
      echo "<td>NOMBRE: " . $row["NOMBRE"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>DIREC: " . $row["DIREC"] . "</td>";
      echo "<td>CIUDAD: " . $row["CIUDAD"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>ESTADO: " . $row["ESTADO"] . "</td>";
      echo "<td>COD_POSTAL: " . $row["COD_POSTAL"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>AREA: " . $row["AREA"] . "</td>";
      echo "<td>TELEFONO: " . $row["TELEFONO"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>REPR_COD: " . $row["REPR_COD"] . "</td>";
      echo "<td>LIMITE_CREDITO: " . $row["LIMITE_CREDITO"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td colspan='2'>OBSERVACIONES: " . $row["OBSERVACIONES"] . "</td>";
      echo "</tr>";
      echo "</table>";
    } else {
      echo "0 results";
    }
    echo "<a href='/clientes'>Listado de clientes</a>------<a href='/updateCliente/" . $row["CLIENTE_COD"] . "'>Actualizar información</a>";
  }
}
