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
}elseif($page === 'article'){
    require '../pages/single.php';
}elseif($page === 'categorie'){
    require '../pages/categorie.php';
}
$content = ob_get_clean();
require '../pages/templates/default.php';
