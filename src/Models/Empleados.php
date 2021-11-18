<?php

namespace App\Models;

use App\Core\Interfaces\IDataBase;

class Empleados
{
    private IDatabase $database;

    public function __construct(IDatabase $database)
    {
        $this->database = $database;
    }

    public function findAll(){

        $sql = "SELECT * FROM EMP";
        $result = $this->database->executeSQL($sql);

        return $result;
    }

    public function findById($id){

        $sql = "SELECT * FROM EMP where EMP_NO = $id";
        $result = $this->database->executeSQL($sql);
        //var_dump($this->database->escape($result[0]["APELLIDOS"]));

        return array_shift($result);
    }

    public function insert($data){
        
        $num_emp = $data["EMP_NO"];
        $apellido = $this->database->escape($data["APELLIDOS"]);    //Se escapan los carácteres especiales, sino, saldrían "?"
        $oficio = $this->database->escape($data["OFICIO"]);
        $jefe = $data["JEFE"];
        $salario = $data["SALARIO"];
        $comision = $data["COMISION"];
        $departamento = $data["DEPT_NO"];

        $sql = "INSERT INTO emp (EMP_NO, APELLIDOS, OFICIO, JEFE, FECHA_ALTA, SALARIO, COMISION, DEPT_NO) 
        VALUES ('$num_emp', '$apellido', '$oficio', '$jefe', NOW() , '$salario', '$comision', '$departamento')";

        //echo $sql;
        return $this->database->actionSQL($sql);
    }

    public function update($id, $data){

        //TIP ---> Pasar los parámetros con comillas
        //$test sirve para comparar el dato de la base de datos respecto alque se está tratando de actualizar
        
        $test = $this->findById($id);

        $num_emp = $data["EMP_NO"];
        $oficio = $this->database->escape($data["OFICIO"]);
        $jefe = $data["JEFE"];
        $fecha = date("Y-m-d", strtotime($data["FECHA_ALTA"]));     //Se formatea la fecha tal como está en la BBDD, sino, NO la acepta
        $salario = $data["SALARIO"];
        $departamento = $data["DEPT_NO"];

        if ($test["SALARIO"] < $data["SALARIO"]){
            $sql = "UPDATE emp SET EMP_NO='$num_emp', OFICIO='$oficio', JEFE='$jefe', FECHA_ALTA='$fecha', DEPT_NO='$departamento' WHERE EMP_NO='$id'";
            echo "<h1> No se ha actualizado el salario, introduce un salario superior al que ya tiene </h1>";
        } else {
            $sql = "UPDATE emp SET EMP_NO='$num_emp', OFICIO='$oficio', JEFE='$jefe', FECHA_ALTA='$fecha', 
            SALARIO='$salario' ,DEPT_NO='$departamento' WHERE EMP_NO='$id'";
            echo "<h1>Se ha actualizado el salario con éxito!</h1>";
        }
        //echo $sql;
        return $this->database->actionSQL($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM emp WHERE EMP_NO=$id";
        return $this->database->actionSQL($sql);
    }
}