<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../../config/stylesheet_desktop/theme_main.css">

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

  <div id=container_profil><img class=navbar_content_image src="/icons/profil.png"><a href="#">Mon profil</a></div>

  <div id=container_footer><?php require_once($root.'site/desktop/view/viewFooter.html'); ?></div>

</body>


</html>
