<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width" name="viewport">
    <title>Connexion</title>
    <script src="/site/desktop/functions/mainFunctions.php" type="text/javascript"></script>
    <link rel="stylesheet" href="/site/desktop/config/stylesheet_desktop/theme_main.css">

  </head>

  <body id="container_body">
    <form id=container_connexion action="" method="post">
      <div id=login_info_container>
        <div class=texte_login> Connectez-vous avec : </div>
        <div class=login_google><?php require_once($root.'site/desktop/model/auth-google.php'); ?></div>
        <div class=texte_login> Ou : </div>
        <input class=login_info type="text" name="username" placeholder="Nom d'utilisateur / Email">
        <div class=password_container>
          <input class=login_info type="password" name="password" placeholder="Mot de passe">
          <button class="unmask" type="button" title="Mask/Unmask" onclick=switch_eye()><img id=image_eye src="/icons/login/100px/eye.png" alt="voir mdp"></button>
        </div>

        <a class=texte_login_2 href="#">Mot de passe oublié ?</a>
        <button class=login_button type="submit" name="submit" onmouseover=login_translate()><img id=image_login src="/icons/login/100px/login.png" alt="voir mdp"></button>
        <div style="color:red;text-align:center;"><?php echo $_SESSION['error'];?></div>

      </div>

    </form>

    <div id=container_footer><?php   require_once($root.'site/desktop/view/viewFooter.html'); ?></div>

  </body>

  <script>
  eye_status = 0;
  function switch_eye() {
    if (eye_status==0)
    {
      document.getElementById("image_eye").src = "/icons/login/100px/no_eye.png";
      eye_status = 1;
    }
    else if (eye_status==1)
    {
      document.getElementById("image_eye").src = "/icons/login/100px/eye.png";
      eye_status = 0;
    }
  }
  function login_translate() {
    document.getElementById("image_login").style.animation = "login_translate 1s forwards";
  }
  $('.unmask').on('click', function(){

  if($(this).prev('input').attr('type') == 'password')
    changeType($(this).prev('input'), 'text');

  else
    changeType($(this).prev('input'), 'password');

  return false;
  });

  </script>
</html>
