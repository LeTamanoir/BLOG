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
    <button id=capteur_navbar><div class="nav-icon"><div></div></div>
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
        <li class=middle_navbar_content><a class=middle_navbar_content_text onclick="showIframe(0);" href="#">Pauses à corriger</a></li>
        <li class=middle_navbar_content><a class=middle_navbar_content_text onclick="showIframe(1);" href="#">Pauses publiques</a></li>
        <li class=middle_navbar_content><a class=middle_navbar_content_text onclick="showIframe(2);" href="#">Pauses non publiques</a></li>
        <li class=middle_navbar_content><a class=middle_navbar_content_text href="#" onclick="showIframe(3);">Publier un message</a></li>
      </ul>
    </nav>
    <?php if(isset($_COOKIE['background']))
    {
      echo $_COOKIE['background'];
    }
    else {
      echo 'le cookie n\'existe pas !! ';
    }?>
    <a href="#" onclick="test(1)">click-me !</a>

    <script>
    click = '';
    function test(x)
    {
      if (click == '' && x=='1')
      {
        //prompt('salut');
        console.log('click = '+click);
        console.log('x = '+x);
        <?php setcookie('background1','grey',time()+365*24*3600);
        setcookie('background2','',time()+365*24*3600);
        #$_COOKIE['background'] = 'white';?>
        console.log('cookie = <?=$_COOKIE['background']?>');
        document.getElementById('container_body').style.background = "<?=$_COOKIE['background1']?>";
        click = '1';
        x = "0";
        alert(x+' : dans le if');
      }
      else if (x == '1' && click=='1')
      {
        alert(x+': dans le else if')
        console.log('click = '+click);
        console.log('x = '+x);
        <?php #$_COOKIE['background'] = 'pink';
        setcookie('background1','',time()-365*24*3600);
        setcookie('background2','white',time()+365*24*3600);?>
        console.log('cookie = <?=$_COOKIE['background']?>');
        document.getElementById('container_body').style.background = "<?=$_COOKIE['background2']?>";
        click = '';
      }
    }
  </script>

    <div id=container_main_content>
      <iframe id="container_iframe"></iframe>
    </div>

    <div id=container_profil><img class=profil_image src="/icons/profil.png"><a href="#"><?php echo $_SESSION['username']; ?></a></div>

    <div id=container_footer><?php require_once($root.'site/desktop/view/viewFooter.html'); ?></div>
  </body>
</html>
