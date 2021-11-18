<?php

namespace App\Models;

use App\Core\Interfaces\IDataBase;

class Clientes
{
    private IDatabase $database;
    public function __construct(IDatabase $database)
    {
        $this->database = $database;
    }
    public function findAll()
    {
        $sql = "SELECT * FROM CLIENTE";
        return $this->database->executeSQL($sql);
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM CLIENTE WHERE CLIENTE_COD=$id";
        $result = $this->database->executeSQL($sql);
        return array_shift($result);
    }

    public function insert($data){

        $nombre = $data["NOMBRE"];
        $dirección = $data["DIRECCION"];
        $ciudad = $data["CIUDAD"];
        $estado = $data["ESTADO"];
        $cod_postal = $data["COD_POSTAL"];
        $area = intVal($this->database->escape($data["AREA"])); //Es necesario convertir a entero, así está en la tabla y POST trae en string
        $telefono = $data["TELEFONO"];
        $cred_limit = intVal($this->database->escape($data["LIMITE_CREDITO"]));  //Es necesario convertir a entero, así está en la tabla y POST trae en string
        $observ = $this->database->escape($data["OBSERVACIONES"]);

        $sql = "INSERT INTO  CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA
        ,TELEFONO, LIMITE_CREDITO, OBSERVACIONES) VALUES 
        (" . $this->getLastId() . ", '$nombre', '$dirección', '$ciudad', '$estado', '$cod_postal', $area, '$telefono', $cred_limit, '$observ')";

        return $this->database->actionSQL($sql);
    }

    public function update($id, $data){

        $nombre = $data["NOMBRE"];
        $ciudad = $data["CIUDAD"];
        $telefono = $data["TELEFONO"];

        $sql = "UPDATE CLIENTE SET NOMBRE='$nombre', CIUDAD='$ciudad', TELEFONO='$telefono' WHERE CLIENTE_COD=$id";
        
        return $this->database->actionSQL($sql);
    }

    public function delete($id){

        $sql = "DELETE FROM CLIENTE WHERE CLIENTE_COD=$id";
        return $this->database->actionSQL($sql);
    }

    //Recojo la última ID de la tabla y le sumo uno más
    private function getLastId()
    {
        $sql = "SELECT MAX(CLIENTE_COD) AS lastID FROM CLIENTE";
        if ($result = $this->database->executeSQL($sql)) {
            return array_shift($result)["lastID"] + 1;
        } else {
            return null;
        }
    }
}
