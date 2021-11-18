<?php

namespace App\Models;

use App\Core\Interfaces\IDataBase;

class Productos
{
    private IDatabase $database;
    public function __construct(IDatabase $database)
    {
        $this->database = $database;
    }
    public function findAll()
    {
        $sql = "SELECT * FROM PRODUCTO";
        return $this->database->executeSQL($sql);
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM PRODUCTO WHERE PROD_NUM=$id";
        $result = $this->database->executeSQL($sql);
        return array_shift($result);
    }

    public function update($id, $data)
    {
        $description = $this->database->escape($data["DESCRIPCION"]);

        $sql = "UPDATE PRODUCTO SET DESCRIPCION='$description' WHERE PROD_NUM=$id";
        return $this->database->actionSQL($sql);
    }

    public function insert($data)
    {
        /*$_POST = [
            "DESCRIPCION" => 'asdasd',
            "PROD_NUM" => '1234'
        ];*/

        $description = $this->database->escape($data["DESCRIPCION"]);
        $prod_num = $data["PROD_NUM"];
        
        $sql = "INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION) VALUES($prod_num,'$description')";
        return $this->database->actionSQL($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM PRODUCTO WHERE PROD_NUM=$id";
        return $this->database->actionSQL($sql);
    }

    /*private function getLastId()
    {
        $sql = "SELECT MAX(PROD_NUM) AS lastID FROM PRODUCTO";
        if ($result = $this->database->executeSQL($sql)) {
            return array_shift($result)["lastID"] + 1;
        } else {
            return null;
        }
    }*/
}
