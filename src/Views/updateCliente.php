<?php

namespace App\Views;


class updateCliente
{
  public function __construct($result)
  {
    //var_dump($result);
    echo "<form action='/updateCliente/" . $result["CLIENTE_COD"] . "' method='post'>";
    echo "Nombre: <br><input type=text name='NOMBRE' value='" . $result["NOMBRE"] . "'><br>";
    echo "Ciudad: <br><input type=text name='CIUDAD' value='" . $result["CIUDAD"] . "'><br>";
    echo "Telefono: <br><input type=text name='TELEFONO' value='" . $result["TELEFONO"] . "'><br>";
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
    echo "<a href='/clientes'>Listado de clientes</a>";
  }
}