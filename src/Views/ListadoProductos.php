<?php

namespace App\Views;


class ListadoProductos
{
  public function __construct($result)
  {
    if (count($result) > 0) {
      //var_dump($result);
      echo "<table border='1'>";
      foreach ($result as $row) {
        echo "<tr><td>" . $row["PROD_NUM"] . "<td>" . $row["DESCRIPCION"] . "</td><td><a href='/updateProducto/" . $row["PROD_NUM"] . "'>Edit</a></td><td><a href='/deleteProducto/" . $row["PROD_NUM"] . "'>Del</a></td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    echo "<a href='/insertProducto'>Nuevo producto</a><br>";
    echo "<a href='/'>Dash Board</a>";
    
  }
}
