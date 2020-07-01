<?php session_start();
require_once('../functions/logs.php');
deconnect_logs();
$_SESSION = array();
session_destroy();
header('Location: ../controller/controllerConnection.php');
?>
