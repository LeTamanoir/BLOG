<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" content="width=device-width" name="viewport">
    <title>Accueil</title>
    <link rel="stylesheet" href="/site/desktop/config/stylesheet_desktop/stylesheet.css">
    <script src="/site/desktop/functions/mainFunctions.js"></script>

  </head>
  <body>
    <div class="grid-container">

      <div class="middle_navbar">
        <ul id=middle_navbar>
          <li class=middle_navbar_content><img class=middle_navbar_content_image src="/icons/navbar/100px/correct.png"><a class=middle_navbar_content_text onclick="showIframe(0);" href="#">Pauses à corriger</a></li>
          <li class=middle_navbar_content><img class=middle_navbar_content_image src="/icons/navbar/100px/entry.png"><a class=middle_navbar_content_text onclick="showIframe(1);" href="#">Pauses publiques</a></li>
          <li class=middle_navbar_content><img class=middle_navbar_content_image src="/icons/navbar/100px/no_entry.png"><a class=middle_navbar_content_text onclick="showIframe(2);" href="#">Pauses non publiques</a></li>
          <li class=middle_navbar_content><img class=middle_navbar_content_image src="/icons/navbar/100px/message.png"><a class=middle_navbar_content_text href="#" onclick="showIframe(3);">Publier un message</a></li>
        </ul>
      </div>

      <div class="profil">
        <div id=container_profil><img class=profil_image src="/icons/profil_icon/icon_profil_1.png"><?php echo $_SESSION['username']; ?></div>
      </div>

      <div class="navbar">
        <div id=container_navbar_all>
        <div id=container_button><button id=capteur_navbar onclick=show_navbar()><img id=navbar_image src="/icons/navbar/100px/navbar.png"></button></div>
        <nav id=container_navbar>
          <ul>
            <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/dashboard.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(4);show_navbar()" href="#">Tableau de bord</a></div></li>
            <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/database.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(5);show_navbar()" href="#">Base de données</a></div></li>
            <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/user_list.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(6);show_navbar()" href="#">Liste des utilisateurs</a></div></li>
            <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/settings.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(7);show_navbar()" href="#">Paramètres</a></div></li>
            <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/user.png"><div class=container_navbar_content_text><a class=navbar_content_text onclick="showIframe(8);show_navbar()" href="#">Mon profil</a></div></li>
            <li class=navbar_content><img class=navbar_content_image src="/icons/navbar/100px/logout.png"><div class=container_navbar_content_text><a class=navbar_content_text href="/site/desktop/functions/mainFunctions.php">Déconnexion</a></div></li>
          </ul>
        </nav>
        </div>
      </div>

      <div class="footer">
        <div id=container_footer><?php require_once($root.'site/desktop/view/viewFooter.html'); ?></div>

      </div>

      <div class="main">
        <div id=container_main_content>
          <iframe id=container_iframe></iframe>
        </div>
      </div>

    </div>
  </body>
</html>
