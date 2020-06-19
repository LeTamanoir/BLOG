<?php

if(isset($_GET['accountKey']) AND isset($_GET['id']))
{
  if(!empty($_GET['accountKey']) AND !empty($_GET['id']))
  {
    if($_GET['accountKey'] == $_SESSION['accountKey'])
    {
      if($_GET['id'] == $_SESSION['id'])
      {
        echo "";
      }
      else
      {
        header('Location : ../controller/controllerConnection.php');
      }
    }
    else
    {
      header('Location : ../controller/controllerConnection.php');
    }
  }
  else
  {
    header('Location : ../controller/controllerConnection.php');
  }

}
else
{
  header('Location : ../controller/controllerConnection.php');
}

?>
