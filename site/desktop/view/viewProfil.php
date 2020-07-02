<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Profil</title>
    <!--<link rel="stylesheet" href="/site/desktop/config/stylesheet_desktop/stylesheet.css">-->
  </head>

  <body>
    <?php





    ?>
    <form action="" method="post">
      <input type='text' name='username' value='<?=$_SESSION['username']?>'>
      <button type='submit' name="updateUser">Confirmer</button><br>
      <input type='text' name='password' placeholder="Nouveau mot de passe">
      <input type='text' name='password2' placeholder="Confirmer mot de passe">
      <button class="unmask" type="button" title="Mask/Unmask" onclick=switch_eye()><img id=image_eye src="/icons/login/100px/eye.png" alt="voir mdp"></button>
      <button type='submit' name="updatePassword">Confirmer</button><br>
      <input type='text' name='mail' value='<?=$_SESSION['mail']?>'>
      <button type='submit' name="updateMail">Confirmer</button><br>
      <input type='text' name='photo' value='<?=$_SESSION['photo']?>'>
      <button type='submit' name="updatePhoto">Confirmer</button>
    </form>
  </body>
</html>
