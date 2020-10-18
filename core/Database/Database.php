<?php

namespace Core\Database;
use \PDO;

class Database{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'user', $db_pass = 'password', $db_host = 'host'){

        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO(){
        if($this->pdo == null){
            $pdo = new PDO('mysql:dbname=dname;host=host', 'user', 'password');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }        
        return $this->pdo;
    }

    public function query($statement, $class_name = null){
        $req = $this->getPDO()->query($statement);
        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }else{
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }

    }

    public function prepare($statement, $attributes, $class_name = null){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }else{
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
    }
}
