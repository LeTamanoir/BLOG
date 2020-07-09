<?php
namespace App\Table;

class Table{

    protected $table;
    protected $db;


    public function __construct(\App\Database $db){
        $this->db = $db;
        if($this->table === null){
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table  = strtolower(str_replace('Table', '', $class_name));
        }
    }

    public function query($statement){
        
    }
}