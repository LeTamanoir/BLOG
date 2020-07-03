<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width" name="viewport">
    <title>Connexion</title>
    <script src="/site/desktop/functions/mainFunctions.js"></script>


    <link rel="stylesheet" href="/site/desktop/config/stylesheet_desktop/stylesheet.css">

  </head>

  <body>
    <div class="login-grid-container">
      <div class="login-connexion">
        <form id=container_connexion action="" method="post">
          <div class=texte_login> Connectez-vous : </div>
          <input class=login_info_username type="text" name="username" placeholder="Nom d'utilisateur / Email">
          <div class=password_container>
            <input id="password" class=login_info_password type="password" name="password" placeholder="Mot de passe" >
            <button id="unmask" class="unmask" type="button" title="Mask/Unmask" onclick="switch_eye();seePass()"><img id=image_eye src="/icons/login/100px/eye.png" alt="voir mdp"></button>
          </div>
            <a class=texte_login_2 href="#">Mot de passe oublié ?</a>
          <button class=login_button type="submit" name="submit" onmouseover=login_translate()><img id=image_login src="/icons/login/100px/login_2.png" alt="voir mdp"></button>
          <div style="color:red;text-align:center;"><?php echo $_SESSION['error'];?></div>

      </form>

      </div>
      <div class="login-footer">

        <div id=container_footer><?php require_once($root.'site/desktop/view/viewFooter.html'); ?></div>

      </div>
    </div>

  </body>

</html>

<script>
  var pwd = document.getElementById('password');
</script>
