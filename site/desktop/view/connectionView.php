<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <script src="../functions/unmask.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../config/stylesheet_desktop/theme_login.css">
  </head>


  <body id="container_body">
    <form id=connexion_box action="" method="post">
      <div id=logo>
        <img class=image_logo src="../../../icons/blog.png" alt="logo blog">
      </div>
        <!-- auth with google -->
      <div id=login_info_container>
        <p class=texte_login> Connectez-vous avec : <p>
        <div class=login_google><?php require_once('../model/auth-google.php'); ?></div>
        <p class=texte_login> Ou : </p>
        <input class=login_info type="text" name="username" placeholder="Nom d'utilisateur / Email">
        <input class=login_info type="password" name="password" placeholder="Mot de passe">
        <button class="unmask" type="button" title="Mask/Unmask password to check content">Unmask</button>
        <a class=texte_login_2 href="#">Mot de passe oublié ?</a>
        <input class=login_button type="submit" name="submit" value="Se connecter">

        <div style="color:red;text-align:center;"><?php echo $_SESSION['error']; $SESSION['error'] = "";?></div>
      </div>
    </form>


  </body>
  <script>
  $('.unmask').on('click', function(){

  if($(this).prev('input').attr('type') == 'password')
    changeType($(this).prev('input'), 'text');

  else
    changeType($(this).prev('input'), 'password');

  return false;
  });

  </script>
  <footer>
    <?php   require_once('footer.html'); ?>
  </footer>
</html>
