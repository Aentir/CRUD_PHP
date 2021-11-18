<?php

namespace App\Views;


class InsertProductos
{
  public function __construct()
  {
    //Cuando se clique se redirecciona a /insertProducto y se pasa la info por POST
    echo "<form action='/insertProducto' method='post'>";
    echo "Descripción: <br><textarea name='DESCRIPCION'></textarea><br>";
    echo "Numero producto: <br><input type='number' name='PROD_NUM'></input>";
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
    echo "<a href='/productos'>Listado de productos</a>";
  }
}
