<?php

use Core\Config;
use Core\Database\Database;

class App{

    public $title = "Mon super site";
    private $db_instance;
    private static $_instance;

    public static function getInstance(){
        if(self::$_instance === null){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function load(){
        session_start();
        require ROOT.'/app/Autoloader.php';
        App\Autoloader::register();
        require ROOT.'/core/Autoloader.php';
        Core\Autoloader::register();
    }

    public function getTable($name){
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    public function getDb(){
        $config = Config::getInstance(ROOT. '/config/config.php');
        if($this->db_instance=== null){
            $this->db_instance = new Database($config->get('db_name'),$config->get('db_user'),$config->get('db_pass'),$config->get('db_host'));
        }
        return $this->db_instance;

    }

    public function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Acces interdit');
    }

    public function notFound(){
        require_once(ROOT.'/app/Views/error/404.php');
    }

    public function logout(){
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location: index.php');
    }

}

