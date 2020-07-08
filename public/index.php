<?php
require '../app/Autoloader.php';

App\Autoloader::register();


if(isset($_GET['p'])){
    $page  =$_GET['p'];
}else{
    $page = 'home';
}

ob_start();
if($page === 'home'){
    require '../pages/home.php';
}elseif($page === 'single'){
    require '../pages/single.php';
}else{
    die('ERREUR 404');
}
$content = ob_get_clean();
require '../pages/templates/default.php';
