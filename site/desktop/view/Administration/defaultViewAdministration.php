<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="../config/stylesheet_desktop/theme_main_720p.css">
    <link rel="stylesheet" media="screen and (min-width: 1280px)" href="../config/stylesheet_desktop/theme_main_900p.css">
    <link rel="stylesheet" media="screen and (min-width: 1600px)" href="../config/stylesheet_desktop/theme_main_1080p.css">

  </head>

  <header><!-- --></header>


  <body id=container_body>

    <div>
    <button id=capteur_navbar><img class=image_navbar src="../../../icons/navbar.png" alt="navbar wheel">
      <nav id=container_navbar>
        <ul>
          <li class=navbar_content><img class=navbar_content_image src="../../../icons/dashboard.png"><div class=container_navbar_content_text><a class=navbar_content_text href="#">Tableau de bord</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="../../../icons/database.png"><div class=container_navbar_content_text><a class=navbar_content_text href="#">Base de données</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="../../../icons/userlist.png"><div class=container_navbar_content_text><a class=navbar_content_text href="#">Liste des utilisateurs</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="../../../icons/settings.png"><div class=container_navbar_content_text><a class=navbar_content_text href="#">Paramètres</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="../../../icons/logout.png"><div class=container_navbar_content_text><a class=navbar_content_text href="../functions/logout.php">Déconnexion</a></div></li>
        </ul>
    <!-- navigation bar -->
      </nav>
    </button>
    </div>

    <div>
      <nav id=container_middle_navbar>
        <ul id=middle_navbar>
          <li class=middle_navbar_content  style="border-left-style: solid;"><a class=middle_navbar_content_text href="#">Pauses à corriger</a></li>
          <li class=middle_navbar_content><a class=middle_navbar_content_text href="#">Pauses publiques</a></li>
          <li class=middle_navbar_content><a class=middle_navbar_content_text href="#">Pauses non publiques</a></li>
          <li class=middle_navbar_content><a class=middle_navbar_content_text href="#">Publier un message</a></li>
        </ul>
      </nav>
    </div>

    <div id=container_profil><img class=navbar_content_image src="../../../icons/profil.png"><?php echo $_SESSION['username']; ?><a href="#">Mon profil</a></div>

    <div id=container_footer><?php require_once('../view/footer.html'); ?></div>

  </body>

</html>
