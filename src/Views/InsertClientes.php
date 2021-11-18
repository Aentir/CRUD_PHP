<?php


namespace App\Views;

class InsertClientes{

    public function __construct()
    {
    //Cuando se clique se redirecciona a /insertProducto y se pasa la info por POST
        echo "<form action='/insertCliente' method='post'>";
        echo "Nombre del cliente: <br><input type='text' name='NOMBRE'></input><br>";
        echo "Dirección: <br><input type='text' name='DIRECCION'></input><br>";
        echo "Ciudad: <br><input type='text' name='CIUDAD'></input><br>";
        echo "Estado: <br><input type='text' name='ESTADO'></input><br>";
        echo "Código postal: <br><input type='text' name='COD_POSTAL'></input><br>";
        echo "Area: <br><input type='text' name='AREA'></input><br>";
        echo "Telefono: <br><input type='text' name='TELEFONO'></input><br>";
        echo "Crédito límite: <br><input type='text' name='LIMITE_CREDITO'></input><br>";
        echo "Observaciones: <br><textarea name='OBSERVACIONES'></textarea><br>";
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
        echo "<a href='/clientes'>Listado de clientes</a>";
    }

}