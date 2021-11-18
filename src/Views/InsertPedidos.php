<?php

namespace App\Views;

class InsertPedidos{
    public function __construct()
    {
        echo "<form action='/insertPedidos' method='post'>";
        echo "Fecha de pedido: <br><input type='date' name='PEDIDO_FECHA'></input><br>";
        echo "Tipo de pedido: <br><input type='text' name='PEDIDO_TIPO'></input><br>";
        echo "Codigo cliente: <br><input type='number' name='CLIENTE_COD'></input><br>";
        echo "Fecha de envío: <br><input type='date' name='FECHA_ENVIO'></input><br>";
        echo "Total: <br><input type='number' name='TOTAL'></input><br>";
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
        echo "<a href='/pedidos'>Listado de pedidos</a>";
    }
}