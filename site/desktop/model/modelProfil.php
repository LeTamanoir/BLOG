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
    echo "updated";
  }
  else {
    echo 'password don\'t match';
  }


}
elseif (isset($_POST['updateMail']))
{
  /*$mail = htmlspecialchars($_POST['mail']);
  $insert = $bdd->prepare("UPDATE clients SET mail = ? WHERE id = ?");
  $insert->execute(array($_POST['mail'],$_SESSION['id'));
  echo "updated";*/
  $email = htmlspecialchars($_POST['mail']);
  $insert = $bdd->prepare("UPDATE clients SET mail = ? WHERE id = ?");
  $insert->execute(array($email,$_SESSION['id']));
  echo "updated";
}

elseif(isset($_POST['updatePhoto']))
{

  /*$uploadOk = 1;
  $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
*/
  $extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);

  if($extension=='jpg' || $extension=='jpeg' || $extension=='png')
  {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check != false)
    {
      echo "Le fichier a été télécharger ! <br/>";

    }
    else{
      echo "Le fichier n'est pas une image (png, jpg ou jpeg)";
    }
  }
  else
  {
    echo "Le fichier n'est pas une image (png, jpg ou jpeg)";
  }
}


?>
