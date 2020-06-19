<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../../config/stylesheet_desktop/theme_main.css">
  </head>

  <header><!-- --></header>


  <body id=container_body>

    <div>
    <button id=capteur_navbar><img class=image_navbar src="../../../../icons/navbar.png" alt="navbar wheel">
      <nav id=container_navbar>
        <ul>
          <li class=navbar_content><a href="#">Tableau de bord</a></li>
          <li class=navbar_content><a href="#">test</a></li>
          <li class=navbar_content><a href="#">Base de données</a></li>
          <li class=navbar_content><a href="#">Liste des utilisateurs</a></li>
          <li class=navbar_content><a href="#">Paramètres</a></li>
          <li class=navbar_content><a href="#">Déconnexion</a></li>
        </ul>
    <!-- navigation bar -->
      </nav>
    </button>
    </div>

    <div>
      <nav>
        <ul>
          <li><a href="#">Liste des pauses lectures à corriger</a></li>
          <li><a href="#">Pause/lecture publiques</a></li>
          <li><a href="#">Pause/lecture non publiques</a></li>
          <li><a href="#">Publier un message (pour les autres élèves)</a></li>
        </ul>
      </nav>
    </div>

    <div><a href="#">Mon profil</a></div>

    <div id=container_footer><?php require_once('footer.html'); ?></div>

  </body>

</html>
