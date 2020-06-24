<?php

function verif()
{
  if(isset($_GET['accountKey']) AND isset($_GET['id']))
  {
    if(!empty($_GET['accountKey']) AND !empty($_GET['id']))
    {
      if($_GET['accountKey'] == $_SESSION['accountKey'])
      {
        if($_GET['id'] == $_SESSION['id'])
        {
          if($_GET['status'] == $_SESSION['status'])
          {
            echo "";
          }
          else
          {
            session_destroy();
            header('Location : /site/desktop/controller/controllerConnection.php');
          }
        }
        else
        {
          session_destroy();
          header('Location : /site/desktop/controller/controllerConnection.php');
        }
      }
      else
      {
        session_destroy();
        header('Location : /site/desktop/controller/controllerConnection.php');
      }
    }
    else
    {
      session_destroy();
      header('Location : /site/desktop/controller/controllerConnection.php');
    }

  }
  else
  {
    session_destroy();
    header('Location : /site/desktop/controller/controllerConnection.php');
  }
}

?>
