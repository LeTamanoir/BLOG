<?php
session_start();
require_once($root.'site/desktop/functions/mainFunctions.php');
if(isset($_POST['submit']))
{
  $username = htmlspecialchars($_POST['username']);
  $password = md5($_POST['password']);
  if(!empty($_POST['username']) AND !empty($_POST['password']))
  {
    $requser = $bdd->prepare("SELECT * from clients WHERE username = ? AND password = ?");
    $requser->execute(array($username, $password));
    $userexist = $requser->rowCount();
    if($userexist == 1)
    {
      $userinfo = $requser->fetch();
      $_SESSION['id'] = $userinfo['id'];
      $_SESSION['username'] = $userinfo['username'];
      $_SESSION['status'] = $userinfo['status'];
      $_SESSION['name'] = $userinfo['name'];
      $_SESSION['photo'] = $userinfo['photo'];
      $_SESSION['password'] = $userinfo['password'];
      $_SESSION['mail'] = $userinfo['mail'];


      if($_SESSION['username'] == 'admin')
      {
        $accountKey = random_acc(60);
        $_SESSION['accountKey'] = $accountKey;
        $insert = $bdd->prepare('UPDATE clients SET accountKey = ? WHERE id = ?');
        $insert->execute(array($accountKey,$_SESSION['id']));
        connect_logs();
        header('Location : /site/desktop/controller/backend/controllerAdministration.php?id='.$_SESSION['id'].'&accountKey='.$accountKey.'&status='.$_SESSION['status']);
      }
      else
      {
        $accountKey = random_acc(60);
        $_SESSION['accountKey'] = $accountKey;
        $insert = $bdd->prepare('UPDATE clients SET accountKey = ? WHERE id = ?');
        $insert->execute(array($accountKey,$_SESSION['id']));
        header('Location : /site/desktop/controller/frontend/controllerPublic.php?id='.$_SESSION['id'].'&accountKey='.$accountKey.'&status='.$_SESSION['status']);
      }
    }
    else
    {
      $_SESSION['error'] = "Nom d'utilisateur / Mot de passe incorrect";
      #header('Location : /site/desktop/controller/controllerConnection.php');
    }

  }
  else
	{
  	$_SESSION['error'] = "Veuillez renseigner tous les champs ! ";
    #header('Location : /site/desktop/controller/controllerConnection.php');

	}
}

?>
