<?php
require_once($root.'site/desktop/functions/verif.php');
verif();
setcookie("TE_visiblity","visible",time()+6*3600);
header('Location : /site/desktop/controller/backend/controllerAdministration.php?id='.$_SESSION['id'].'&accountKey='.$_SESSION['accountKey'].'&status='.$_SESSION['status']);
?>
