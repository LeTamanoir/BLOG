<?php

namespace App\App;

class App{

    const DB_NAME = 'dbs537210';
    const DB_USER = 'dbu931678';
    const DB_PASS = 'd@t@b@se_BLOG2';
    const DB_HOST = 'db5000559545.hosting-data.io';

    private static $database;

    public static function getDatabase(){
        if(self::$databse === null){
            self::$database =  new App\Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }
}