<?php

class Students
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databasename = 'phpcrash';

    private $connfalse = false;
    private $result = array();
    private $conn = '';
    public function __construct()
    {
        if (!$this->connfalse) {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->databasename);
            !$this->connfalse = true;
            if ($this->conn->connect_error) {
                array_push($this->result, $this->conn->connect_error);
                return false;
            } else {
                return true;
            }
        } else {
            echo "Connection Success";
        }
    }

    private function tableExist($table)
    {
        $sql = "SHOW TABLES FROM $this->databasename LIKE '$table'";
        $checkTable = $this->conn->query($sql);
        if ($checkTable->num_rows == 1) {
            return true;
        } else {
            array_push($this->result, $table."Table not exist");
            return false;
        }
    }
    public function createStudent($table, $params = [])
    {
        if ($this->tableExist($table)) {
            $col = implode(', ', array_keys($params));
            $val = "'" . implode("', '", $params) . "'";

            $sql = "INSERT INTO $table ($col) VALUES ($val)";

            if ($this->conn->query($sql)) {
                $this->result[] = "New record created successfully";
                return true;
            } else {
                $this->result[] = "Error: " . $sql . "<br>" . $this->conn->error;
                return false;
            }
        }
    }
    
    public function deleteStudent($table, $id)
    {
        if ($this->tableExist($table)) {
            $sql = "DELETE FROM $table WHERE id = $id";

            if ($this->conn->query($sql)) {
                $this->result[] = "Record deleted successfully";
                return true;
            } else {
                $this->result[] = "Error: " . $sql . "<br>" . $this->conn->error;
                return false;
            }
        }
    }
    public function updateStudent($table, $params = [], $id)
    {
        if ($this->tableExist($table)) {
            $setValues = [];
            foreach ($params as $key => $value) {
                $setValues[] = "$key = '$value'";
            }
            $setValuesStr = implode(', ', $setValues);
    
            $sql = "UPDATE $table SET $setValuesStr WHERE id = $id";
    
            if ($this->conn->query($sql)) {
                $this->result[] = "Record updated successfully";
                return true;
            } else {
                $this->result[] = "Error: " . $sql . "<br>" . $this->conn->error;
                return false;
            }
        }
    }
    public function getStudentById($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = $id";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    public function getStudents($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        $students = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $students[] = $row;
            }
        }

        return $students;
    }
    public function getResult()
    {
        return $this->result;
    }
    public function __destruct()
    {
        if (!$this->connfalse) {
            if ($this->conn->close()) {
                $this->connfalse = false;
                return true;
            }
        } else {
            return false;
        }
    }
}


?>