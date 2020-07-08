<?php

namespace App;

class App{

    const DB_NAME = 'dbs537210';
    const DB_USER = 'dbu931678';
    const DB_PASS = 'd@t@b@se_BLOG2';
    const DB_HOST = 'db5000559545.hosting-data.io';

    private static $database;

    public static function getDb(){
        if(self::$database === null){
            self::$database =  new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }

    public static function notFound(){
        header("HTTP/1.0 404 Not Found");
        header('Location: index.php?p=404');
    }
}