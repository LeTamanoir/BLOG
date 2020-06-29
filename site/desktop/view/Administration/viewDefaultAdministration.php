<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width" name="viewport">
    <title>Accueil</title>
    <link rel="stylesheet" href="/site/desktop/config/stylesheet_desktop/theme_main.css">
    <script src="/site/desktop/functions/showIframe.js"></script>
  </head>

  <header><!-- --></header>


  <body id=container_body>
    <div>
    <button id=capteur_navbar><img class=image_navbar src="/icons/navbar.png" alt="navbar wheel">
      <nav id=container_navbar>
        <div class=navbar_content_profil><img class=navbar_content_image src="/icons/profil.png"><?php echo $_SESSION['username']; ?><a href="#">Mon profil</a></div>
        <ul>
          <li class=navbar_content><img class=navbar_content_image src="/icons/dashboard.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(4);" href="#">Tableau de bord</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="/icons/database.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(5);" href="#">Base de données</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="/icons/userlist.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(6);" href="#">Liste des utilisateurs</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="/icons/settings.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(7);" href="#">Paramètres</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="/icons/logout.png"><div class=container_navbar_content_text><a class=navbar_content_text href="/site/desktop/functions/logout.php">Déconnexion</a></div></li>
        </ul>
      </nav>
    </button>
    </div>
    <nav id=container_middle_navbar>
      <ul id=middle_navbar>
        <li class=middle_navbar_content  style="border-left-style: solid;"><a class=middle_navbar_content_text onclick="showIframe(0);" href="#">Pauses à corriger</a></li>
        <li class=middle_navbar_content><a class=middle_navbar_content_text onclick="showIframe(1);" href="#">Pauses publiques</a></li>
        <li class=middle_navbar_content><a class=middle_navbar_content_text onclick="showIframe(2);" href="#">Pauses non publiques</a></li>
        <li class=middle_navbar_content><a class=middle_navbar_content_text href="#" onclick="showIframe(3);">Publier un message</a></li>

      </ul>
    </nav>

    <div id=container_main_content>
      <iframe id="container_iframe"></iframe>
  </div>

    <div id=container_profil><img class=navbar_content_image src="/icons/profil.png"><a href="#"><?php echo $_SESSION['username']; ?></a></div>

    <div id=container_footer><?php require_once($root.'site/desktop/view/viewFooter.html'); ?></div>
  </body>

</html>
