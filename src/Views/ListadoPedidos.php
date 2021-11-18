<?php

namespace App\Views;

class ListadoPedidos
{
    public function __construct($result)
    {
        
            if(count($result) > 0) {
                echo "<table border ='1'>";
                echo "<th>Numero pedido</th>";
                echo "<th>Fecha Pedido</th>";
                echo "<th>Tipo Pedido</th>";
                echo "<th>Codigo Cliente</th>";
                echo "<th>Fecha Envio</th>";
                echo "<th>Total</th>";
                foreach($result as $row){
                    echo "<tr><td><a href='pedidoDetalle/".$row["PEDIDO_NUM"]."'>" . $row["PEDIDO_NUM"] . "</td>";
                    echo "<td>" . $row["PEDIDO_FECHA"] . "</td>";
                    echo "<td>" . $row["PEDIDO_TIPO"] . "</td>";
                    echo "<td>" . $row["CLIENTE_COD"] . "</td>";
                    echo "<td>" . $row["FECHA_ENVIO"] . "</td>";
                    echo "<td>" . $row["TOTAL"] . "<a href='/updatePedidos/".$row["PEDIDO_NUM"]."'>Actualizar</a><br></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            echo "<a href='/'>Dash board</a><br>";
            echo "<a href='/insertPedidos'>Añadir nuevo pedido</a>";
    }
}