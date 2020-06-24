<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="../config/stylesheet_desktop/theme_main_720p.css">
    <link rel="stylesheet" media="screen and (min-width: 1280px)" href="../config/stylesheet_desktop/theme_main_900p.css">
    <link rel="stylesheet" media="screen and (min-width: 1600px)" href="../config/stylesheet_desktop/theme_main_1080p.css">
  </head>

  <body id=container_body>
  <!-- top of page -->
  <div>
      <nav id=container_middle_navbar>
        <ul id=middle_navbar>
          <li class=middle_navbar_content style="border-left-style: solid;"><a class=middle_navbar_content_text href="#">Liste des pauses lectures à corriger</a></li>
          <li class=middle_navbar_content><a class=middle_navbar_content_text href="#">Pause/lecture publiques</a></li>
          <li class=middle_navbar_content><a class=middle_navbar_content_text href="#">Pause/lecture non publiques</a></li>
          <li class=middle_navbar_content><a class=middle_navbar_content_text href="#">Publier un message (pour les autres élèves)</a></li>
        </ul>
      </nav>
  </div>

  <div id=container_profil><img class=navbar_content_image src="../../../icons/profil.png"><a href="#">Mon profil</a></div>

  <div id=container_footer><?php require_once('../view/viewFooter.html'); ?></div>

</body>


</html>
