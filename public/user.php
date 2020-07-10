<?php
use Core\Auth\DBAuth;
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
ob_start();
if($page === 'home'){
    require ROOT . '/app/Views/posts/home.php';
}elseif($page === 'posts.category'){
    require ROOT . '/app/Views/posts/category.php';
}elseif($page === 'posts.show'){
    require ROOT . '/app/Views/posts/show.php';
}
$content2 = ob_get_clean();
require ROOT. '/app/Views/templates/users/default.php';?>


