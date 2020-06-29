<?php
require_once($root.'site/desktop/functions/verif.php');
verif();
#setcookie("U_visiblity","inline",time()+6*3600);
#setcookie("TE_visiblity","none",time()+6*3600);
if ($_SESSION['status'] == 'admin')
{
  header('Location : /site/desktop/controller/backend/controllerAdministration.php?id='.$_SESSION['id'].'&accountKey='.$_SESSION['accountKey'].'&status='.$_SESSION['status']);
}
else
{
  header('Location : /site/desktop/controller/frontend/controllerPublic.php?id='.$_SESSION['id'].'&accountKey='.$_SESSION['accountKey'].'&status='.$_SESSION['status']);
}
?>
