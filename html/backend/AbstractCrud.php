<?php

abstract class AbstractCrud {

    private $connection;

    function __construct() {
        $server = "localhost";
        $username = "test";
        $password = "test123";
        $dbName = "crud";

        $this->connection = new mysqli($server, $username, $password, $dbName);

        if($this->connection -> connect_error) {
            throw new Exception("SQL not connected", 1);
        }
    }

    public function create($tableName, $data) {
        $headers = implode(", ", array_keys($data));
        $values = implode("', '", array_values($data));
        $values = "'$values'";
        $query  = "INSERT INTO $tableName ($headers) VALUES ($values)";
        if (!$this -> connection -> query($query)) {
            throw new Exception("Record not added", 1);
        }
    }

    public function readAllUsers($tableName, $offset, $limit) {
        $query  = "SELECT * FROM $tableName LIMIT $offset, $limit";
        $result  = $this -> connection -> query($query);
        $data = [];

        if($result -> num_rows > 0) {
            while($row = $result -> fetch_assoc()) {
                array_push($data, $row);
            }
        }

        return $data;
    }

    public function getPageCount($tableName, $perPages) {
        $query  = "SELECT * FROM $tableName";
        $result  = $this -> connection -> query($query);

        $rows = $result -> num_rows;
        $pageCount = ceil($rows / $perPages);

        return $pageCount;
    }

    public function update($tableName, $id, $data) {
        $keys = array_keys($data);
        $values = array_values($data);
        $count = count($data);

        for ($i=0; $i < $count; $i++) { 
            $query = "UPDATE $tableName SET $keys[$i] = '$values[$i]' WHERE id = $id";
            $result = $this -> connection -> query($query);
        }

        return $result;
        
    }


    public function delete($tableName, $id) {
        $query = "DELETE FROM $tableName where id = '$id'";
        $result = $this -> connection -> query($query);
    }


}

?>