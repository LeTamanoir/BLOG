<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../stylesheet_desktop/theme_position">
  </head>


  <body>
    <div id="">
      <form class="#" action="../model/connectionModel.php" method="post">
        <?php require_once('../model/auth-google.php'); ?>
        <!-- auth with google -->
        <input type="text" name="username" placeholder="Nom d'utilisateur">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="submit" name="submit" value="Se connecter">
      </form>
      <a href="#">Mot de passe / nom d'utilisateur oublié ?</a>
    </div>



  </body>

  <footer>
    <?php   require_once('footer.html'); ?>
  </footer>


</html>
