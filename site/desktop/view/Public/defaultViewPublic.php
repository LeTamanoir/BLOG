<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../../config/stylesheet_desktop/theme_main.css">
    <!--<link rel="stylesheet" href="../config/stylesheet_desktop/theme_position.css">-->
  </head>

  <body id=container_body>
  <!-- top of page -->
  <div>
    <button id=capteur_navbar><img class=image_navbar src="../../../../icons/navbar.png" alt="navbar wheel">
      <nav id=container_navbar>
        <ul>
          <li class=navbar_content><a href="#">Liste des pauses lectures à corriger</a></li>
          <li class=navbar_content><a href="#">Pause/lecture publiques</a></li>
          <li class=navbar_content><a href="#">Pause/lecture non publiques</a></li>
          <li class=navbar_content><a href="#">Publier un message (pour les autres élèves)</a></li>
        </ul>
      </nav>
    </button>
  </div>

  <div id=profil><a href="#">Mon profil</a></div>

  <div id=container_footer><?php require_once('footer.html'); ?></div>

</body>


</html>
