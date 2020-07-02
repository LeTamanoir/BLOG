<?php
if(isset($_POST['updateUser']))
{
  $username = htmlspecialchars($_POST['username']);
  $insert = $bdd->prepare("UPDATE clients SET username = ? WHERE id = ?");
  $insert->execute(array($username,$_SESSION['id']));
  $_SESSION['username'] = $username;
}
elseif (isset($_POST['updatePassword']))
{

  $password = md5($_POST['password']);
  $password2 = md5($_POST['password2']);
  if ($password == $password2)
  {
    $insert = $bdd->prepare("UPDATE clients SET password = ? WHERE id = ?");
    $insert->execute(array($password2,$_SESSION['id']));
  }
  else {
    die('erreur');
  }


}
