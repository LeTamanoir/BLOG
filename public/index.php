<?php
use App\Controller\UsersController;
use App\Controller\HomeController;

define('ROOT',dirname(__DIR__));
require ROOT.'/app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'login';
}

if($page === 'login'){
    $controller = new UsersController();
    $controller->login();
}elseif($page === 'home'){
    $controller = new HomeController();
    $controller->home();
}