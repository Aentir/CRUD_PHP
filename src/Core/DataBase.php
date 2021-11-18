<?php

namespace App\Core;

use App\Core\Interfaces\IDataBase;

class DataBase implements IDataBase
{
    private $dbConfig;
    private $conn;
    public function __construct()
    {
        $this->dbConfig = json_decode(file_get_contents(__DIR__ . "/../../config/dbConfig.json"), true);
        $this->connect();
    }
    private function connect()
    {
        $servername = $this->dbConfig["server"];
        $username = $this->dbConfig["user"];
        $password = $this->dbConfig["password"];
        $dbName = $this->dbConfig["dbname"];

        // Create connection
        $this->conn = new \mysqli($servername, $username, $password, $dbName);
    }

    //executeSQL se usa para SELECT
    public function executeSQL($sql)
    {
        return $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    //actionSQL se usa para INSERT, UPDATE y DELETE
    public function actionSQL($sql)
    {
        return $this->conn->query($sql);
    }

    //escape se utiliza para poder insertar/actualizar caracteres raros/especiales
    public function escape($value){
        return $this->conn->real_escape_string($value);
    }

    public function __destruct()
    {
        if ($this->conn != null) $this->conn->close();
    }
}
