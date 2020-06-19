<?php
require_once('../functions/accountKey.php');

session_start();
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

      if($_SESSION['username'] == 'admin')
      {
        $accountKey = random_acc(60);
        $insert = $bdd->prepare('UPDATE clients SET accountKey = ? WHERE id = ?');
        $insert->execute(array($accountKey,$_SESSION['id']));
        header('Location : ../controller/controllerAdministration.php');
      }
      else
      {
          header('Location : ../controller/controllerPublic.php');
      }
    }
    else
    {
      $_SESSION['error'] = "Le nom d'utilisateur / adresse mail ou le mot de passe ne sont pas valides ! ";
      header('Location : ../controller/controllerConnection.php');
    }

  }
  else
	{
  	$_SESSION['error'] = "Veuillez renseigner tous les champs ! ";
    header('Location : ../controller/controllerConnection.php');

	}
}

?>
