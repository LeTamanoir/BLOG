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
    require ROOT . '/pages/users/login.php';
}
$content = ob_get_clean();
require ROOT. '/pages/templates/login.php';
