<?php

namespace App\Views;


class ListadoClientes
{
  public function __construct($result)
  {
    if (count($result) > 0) {
      echo "<table border='1'>";
      foreach ($result as $row) {
        echo "<tr><td><a href='clienteDetalle/" . $row["CLIENTE_COD"] ."'>" . $row["NOMBRE"] ."</a><td>" . $row["CIUDAD"] . "
                      <a href='deleteCliente/" . $row["CLIENTE_COD"] . "'>Borrar</a></td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    echo "<a href='/'>Dash Board</a>-------<a href='/insertCliente'>Añadir cliente</a>";
    
  }
}
