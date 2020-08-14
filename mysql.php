<?php

interface iMySqlQuery {
    // Returns row as array of fields corespodent to studnet id if exists otherwise returns false 
    public function getStudent(int $id, string $table);
}

class MySqlApi implements iMySqlQuery {
    protected $mysqli;

    function __construct(){
        $this->mysqli =  new mysqli(HOST, USER, '123456', DATABASE);
        if($this->mysqli->connect_errno) {
            //env.php Conncetion to database has been failed
            throw new Exception("1:"._ERROR_[1]);
        }
    }

    function __destruct(){

        if($this->mysqli){
            $this->mysqli->close();
        }   
    }

    // "csm" and "csmb" are only valid values for $table agrument
    public function getStudent($id, $table = "csm") {
        if(!is_int($id)) {
            //env.php Student id must be unsigend integer
            throw new Exception("2:"._ERROR_[2]);
        }
        $query = "SELECT * FROM ".$table."  WHERE id = ?";
        if($stmt = $this->mysqli->prepare($query)) {
            $stmt->bind_param("d", $id);
            $stmt->execute();
            if($result = $stmt->get_result()){
                $student = $result->fetch_array(MYSQLI_ASSOC);
                $result->free();
                return $student;
            } else {
                return false;
            }
        } else {
            //env.php Invalid query statement
            throw new Exception("3:"._ERROR_[3]);
        }
    }
}