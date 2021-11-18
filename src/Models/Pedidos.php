<?php

namespace App\Models;

use App\Core\Interfaces\IDataBase;

class Pedidos{
    private IDatabase $database;

    public function __construct(IDatabase $database)
    {
        $this->database = $database;
    }

    public function findAll(){
        $sql = "SELECT * FROM pedido";
        $result = $this->database->executeSQL($sql);
        return $result;
    }

    public function findById($id){
        $sql = "SELECT * FROM pedido WHERE PEDIDO_NUM='$id'";
        $result = $this->database->executeSQL($sql);
        
        return array_shift($result);
    }

    public function insert($data){
        $fecha_pedido = date("Y-m-d", strtotime($data["PEDIDO_FECHA"]));
        $tipo_pedido = $data["PEDIDO_TIPO"];
        $codigo_cliente = $data["CLIENTE_COD"];
        $fecha_envio = date("Y-m-d", strtotime($data["FECHA_ENVIO"]));
        $total = $data["TOTAL"];


        $sql = "INSERT INTO pedido (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL) 
        VALUES ('" . $this->getLastNum() . "', '$fecha_pedido', '$tipo_pedido', '$codigo_cliente', '$fecha_envio', '$total')";

        return $this->database->actionSQL($sql);
    }

    private function getLastNum()
    {
        $sql = "SELECT MAX(PEDIDO_NUM) AS lastPedido FROM PEDIDO";
        if ($result = $this->database->executeSQL($sql)) {
            return array_shift($result)["lastPedido"] + 1;
        } else {
            return null;
        }
    }

    public function update($id, $data){

        $fecha_pedido = $data["PEDIDO_FECHA"];
        $tipo_pedido = $data["PEDIDO_TIPO"];
        $total = $data["TOTAL"];

        $sql = "UPDATE FROM pedido SET PEDIDO_FECHA='$fecha_pedido', PEDIDO_TIPO='$tipo_pedido, TOTAL='$total'' WHERE PEDIDO_NUM='$id'";
        return $this->database->actionSQL($sql);
    }
}