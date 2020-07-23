<?php
use Core\Auth\DBAuth;
use App\Controller\HomeController;
use App\Controller\UsersController;
use App\Controller\Database;

define('ROOT',dirname(__DIR__));
require ROOT.'/app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'home';
}

$app = App::getInstance();
$auth = new DBAuth($app->getDb());
if(!$auth->logged()){
    $app->forbidden();
}

if($page === 'home'){
    $controller = new HomeController();
    $controller->home();
}
elseif($page === 'textEditor'){
    $controller = new UsersController();
    $controller->textEditor();
}
elseif($page === 'database'){
    $controller = new Database();
    $controller->showDatabase();
}
elseif($page === 'logout'){
    $app->logout();
}else{
    $app->notFound();
}
?>