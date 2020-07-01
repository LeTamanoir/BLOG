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
    var value = retrieve_cookie('background');
    document.getElementById('container_body').style.background = value;

    container_navbar = 0;
    function show_navbar()
    {
      if (container_navbar==0)
      {
        document.getElementById("navbar_image").src = "/icons/navbar/100px/cross.png";
        document.getElementById("container_navbar").style.animation = "scale_x 0.2s forwards";
        document.getElementById("capteur_navbar").style.animation = "navbar_ease_in 0.2s forwards";
        container_navbar=1;
      }
      else if (container_navbar!=0) {
        document.getElementById("navbar_image").src = "/icons/navbar/100px/navbar.png";
        document.getElementById("container_navbar").style.animation = "scale_x_reverse 0.2s forwards";
        document.getElementById("capteur_navbar").style.animation = "navbar_ease_out 0.2s forwards";
        container_navbar=0;
      }
    }
    x='1';
    function test()
    {
      if (x=='1')
      {
        var cookie_name = 'background';
        var cookie_value = 'pink';
        create_cookie(cookie_name,cookie_value,1,"/");
        x = "0";
        var value = retrieve_cookie('background');
        document.getElementById('container_body').style.background = value;

      }
      else if (x == '0')
      {
        var cookie_name = 'background';
        var cookie_value = 'yellow';
        create_cookie(cookie_name,cookie_value,1,"/");
        x = '1';
        var value = retrieve_cookie('background');
        document.getElementById('container_body').style.background = value;
      }
    }

    function create_cookie(name, value, days2expire, path)
    {
            var date = new Date();
            date.setTime(date.getTime() + (days2expire * 24 * 60 * 60 * 1000));
            var expires = date.toUTCString();
            document.cookie = name + '=' + value + ';' +
                             'expires=' + expires + ';' +
                             'path=' + path + ';';
    }


    function retrieve_cookie(name) {
        var cookie_value = "",
                current_cookie = "",
                name_expr = name + "=",
                all_cookies = document.cookie.split(';'),
                n = all_cookies.length;

        for(var i = 0; i < n; i++) {
                current_cookie = all_cookies[i].trim();
                if(current_cookie.indexOf(name_expr) == 0) {
                        cookie_value = current_cookie.substring(name_expr.length, current_cookie.length);
                        break;
                }
        }
        return cookie_value;
      }

  </script>

    <div id=container_main_content>
      <iframe id="container_iframe"></iframe>
    </div>

    <div id=container_profil><img class=profil_image src="/icons/navbar/100px/user.png"><a href="#"><?php echo $_SESSION['username']; ?></a></div>

    <div id=container_footer><?php require_once($root.'site/desktop/view/viewFooter.html'); ?></div>
  </body>
</html>
