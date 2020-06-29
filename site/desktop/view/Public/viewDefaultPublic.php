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
          <li class=middle_navbar_content><a class=middle_navbar_content_text href="#">Accueil</a></li>
          <li class=middle_navbar_content><a class=middle_navbar_content_text href="#">Pause/lecture publiques</a></li>
          <li class=middle_navbar_content><a class=middle_navbar_content_text href="/site/desktop/controller/controllerTextEditor.php?id=<?=$_SESSION['id']?>&accountKey=<?=$_SESSION['accountKey']?>&status=<?=$_SESSION['status']?>">Publier une pause</a></li>
        </ul>
      </nav>
      <div id=container_main_content>

        <iframe id=container_iframe src="/site/desktop/view/Public/viewTextEditor.php" style='visibility:<?=$_COOKIE["TE_visiblity"]?>;'></iframe>
      </div>

  </div>

  <div id=container_profil><img class=navbar_content_image src="/icons/profil.png"><a href="#">Mon profil</a></div>

  <div id=container_footer><?php require_once($root.'site/desktop/view/viewFooter.html'); ?></div>

</body>


</html>
