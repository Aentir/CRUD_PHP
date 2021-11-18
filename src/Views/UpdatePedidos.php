<?php

namespace App\Views;

class UpdatePedidos{
    public function __construct($data)
    {
    //var_dump($data);
    echo "<form action='/updatePedidos/" . $data["PEDIDO_NUM"] . "' method='post'>";
    echo "Nombre: <br><input type=date name='PEDIDO_FECHA' value='" . $data["PEDIDO_FECHA"] . "'><br>";
    echo "Ciudad: <br><input type=text name='PEDIDO_TIPO' value='" . $data["PEDIDO_TIPO"] . "'><br>";
    echo "Telefono: <br><input type=number name='TOTAL' value='" . $data["TOTAL"] . "'><br>";
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
    echo "<a href='/pedidos'>Listado de pedidos</a>";
    }
}