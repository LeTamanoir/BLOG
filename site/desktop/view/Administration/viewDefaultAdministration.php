<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width" name="viewport">
    <title>Accueil</title>
    <link rel="stylesheet" href="/site/desktop/config/stylesheet_desktop/theme_main.css">
    <script src="/site/desktop/functions/showIframe.js"></script>
    <script src="/site/desktop/functions/mainFunctions.js"></script>
  </head>

  <header><!-- --></header>

  <body id=container_body>
    <div id=container_navbar_all>
    <div id=container_button><button id=capteur_navbar onclick=show_navbar()><img id=navbar_image src="/icons/navbar/100px/navbar.png"></button></div>
      <nav id=container_navbar>
        <ul>
          <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/dashboard.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(4);" href="#">Tableau de bord</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/database.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(5);" href="#">Base de données</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/user_list.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(6);" href="#">Liste des utilisateurs</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/settings.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(7);" href="#">Paramètres</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/user.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(8);" href="#">Mon profil</a></div></li>
          <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/logout.png"><div class=container_navbar_content_text><a class=navbar_content_text href="/site/desktop/functions/logout.php">Déconnexion</a></div></li>
        </ul>
      </nav>
    </div>
    <nav id=container_middle_navbar>
      <ul id=middle_navbar>
        <li class=middle_navbar_content><img class=middle_navbar_content_image src="/icons/navbar/100px/correct.png"><a class=middle_navbar_content_text onclick="showIframe(0);" href="#">Pauses à corriger</a></li>
        <li class=middle_navbar_content><img class=middle_navbar_content_image src="/icons/navbar/100px/entry.png"><a class=middle_navbar_content_text onclick="showIframe(1);" href="#">Pauses publiques</a></li>
        <li class=middle_navbar_content><img class=middle_navbar_content_image src="/icons/navbar/100px/no_entry.png"><a class=middle_navbar_content_text onclick="showIframe(2);" href="#">Pauses non publiques</a></li>
        <li class=middle_navbar_content><img class=middle_navbar_content_image src="/icons/navbar/100px/message.png"><a class=middle_navbar_content_text href="#" onclick="showIframe(3);">Publier un message</a></li>
      </ul>
    </nav>

    <!--<a href="#" onclick="test()">click-me !</a>-->
    <script>
    var x = window.matchMedia("(max-width: 850px)");
    myFunction(x);
    x.addListener(myFunction);
    </script>

    <div id=container_main_content>
      <iframe id="container_iframe"></iframe>
    </div>

    <div id=container_error><div class=desktop_mode_text>Passer en version pour ordinateur</div><img class=desktop_mode src="/icons/404/desktop_mode.gif"></div>

    <div id=container_profil><img class=profil_image src="/icons/navbar/100px/user.png"><a href="#"><?php echo $_SESSION['username']; ?></a></div>

    <div id=container_footer><?php require_once($root.'site/desktop/view/viewFooter.html'); ?></div>
  </body>
</html>
