<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Profil</title>
    <!--<link rel="stylesheet" href="/site/desktop/config/stylesheet_desktop/stylesheet.css">-->
    <script src="/site/desktop/functions/mainFunctions.js"></script>
  </head>

  <body>
    <?php


    ?>
    <form action="" method="post">
      <input type='text' name='username' value='<?=$_SESSION['username']?>'>
      <button type='submit' name="updateUser">Confirmer</button><br>

      <input type='password' name='password' placeholder="Nouveau mot de passe">
      <input id="password" type='password' name='password2' placeholder="Confirmer mot de passe">
      <button id="unmask" class="unmask" type="button" title="Mask/Unmask">mask/unmask</button>
      <button type='submit' name="updatePassword">Confirmer</button><br>

      <input type='text' name='mail' value='<?=$_SESSION['mail']?>'>
      <button type='submit' name="updateMail">Confirmer</button><br>

      <input type='text' name='text' value='<?=$_SESSION['photo']?>'>
      <button type='submit' name="updatePhoto">Confirmer</button>
    </form>

<br>
    <form action="" method="post" enctype="multipart/form-data">
      Choisis une nouvelle photo de profil:
      <input type="file" name="fileToUpload" accept=".jpg, .jpeg, .png">

      <input type="submit" value="Upload Image" name="updatePhoto">
    </form>

  </body>

  <script>
    var pwd = document.getElementById('password');
    var eye = document.getElementById('unmask');

    eye.addEventListener('click',seePass);

  </script>


</html>
