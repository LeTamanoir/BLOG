<?php
session_start();
require_once('/site/desktop/controller/logs.php');
$_SESSION = array();
session_destroy();
deconnect_logs();
header('Location: ../controller/controllerConnection.php');
?>
