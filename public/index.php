<?php
define('ROOT',dirname(__DIR__));
require ROOT.'/app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'login';
}

ob_start();
if($page === 'login'){
    require ROOT . '/app/Views/users/login.php';
}
$content = ob_get_clean();
require ROOT. '/app/Views/templates/login.php';
