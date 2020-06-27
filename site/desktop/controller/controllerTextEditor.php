<?php
session_start();
$_SESSION['visibility'] = "visible";
header('Location : /site/desktop/controller/backend/controllerAdministration.php?id='.$_SESSION['id'].'&accountKey='.$accountKey.'&status='.$_SESSION['status']);
?>
