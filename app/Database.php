<?php

namespace App;
use \PDO;

class Database{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'dbu931678', $db_pass = 'd@t@b@se_BLOG2', $db_host = '
    db5000559545.hosting-data.io'){

        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO(){
        if($this->pdo == null){
            $pdo = new PDO('mysql:dbname=dbs537210;host=db5000559545.hosting-data.io', 'dbu931678', 'd@t@b@se_BLOG2');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }        
        return $this->pdo;
    }

    public function query($statement, $class_name, $one = false){
        $req = $this->getPDO()->query($statement);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one){
            $datas =  $req->fetch();
        }else{
            $datas =  $req->fetchAll();
        }
        return $datas;

    }

    public function prepare($statement, $attributes, $class_name, $one = false){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one){
            $datas =  $req->fetch();
        }else{
            $datas =  $req->fetchAll();
        }
        return $datas;
    }
}