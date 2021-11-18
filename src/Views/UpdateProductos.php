<?php

namespace App\Views;


class UpdateProductos
{
  public function __construct($result)
  {
    var_dump($result);
    echo "<form action='/updateProducto/".$result["PROD_NUM"]."' method='post'>";
    echo "Descripción: <br><textarea name='DESCRIPCION'>".$result["DESCRIPCION"]."</textarea><br>";
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
    echo "<a href='/productos'>Listado de productos</a>";
  }
}
