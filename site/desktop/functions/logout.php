<?php session_start();
$root = "/kunden/homepages/14/d285337155/www/Arthur/sites/blog/";
require_once($root.'site/desktop/functions/mainFunctions.php');
deconnect_logs();
$_SESSION = array();
session_destroy();
header('Location: ../controller/controllerConnection.php');
?>
