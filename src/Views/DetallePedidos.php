<?php

namespace App\Views;

class DetallePedidos{
    public function __construct($result)
    {
        if(count($result) > 0){
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
                    echo "<td>" . date("d/m/Y", strtotime($row["FECHA_ENVIO"])) . "</td>";
                    echo "<td>" . number_format($row["TOTAL"], 2, ".", ",") . "€" . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<a href='/'>Dash board</a><br>";
                echo "<a href='/pedidos'>Lista de pedidos</a>";
                
        } else{
            echo "Error en la consulta";
        }
        
    }
}