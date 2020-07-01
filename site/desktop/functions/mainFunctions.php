<!-- FUNCTIONS PHP -->



<?php
function random_acc($car)
{
  $string = "";
  $chaine = "abcdefghijklmnpqrstuvwxyz0123456789";
  rand((double)microtime()*1000000);
  for($i=0; $i<$car; $i++) {
  $string .= $chaine[rand()%strlen($chaine)];
  }
  return $string;
}

function connect_logs()
{
    $file = fopen('logs.txt', 'a+');
    $now = date("F j, Y, g:i a");
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    fwrite($file, $ip .' => User : '.$_SESSION['username'].' => '.'Status : ' .$_SESSION['status'].' => '. 'Heure de connexion : '. $now . PHP_EOL);
    fclose($file);
}
function deconnect_logs()
{
  $file = fopen('../controller/logs.txt', 'a+');
  $now = date("F j, Y, g:i a");
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  fwrite($file, $ip . ' => User : '.$_SESSION['username'].' => '.'Status : ' .$_SESSION['status'].' => '. 'Heure de déconnexion : '. $now . PHP_EOL);
  fclose($file);
}

?>

<!-- FUNCTIONS JS -->


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



  /*
  function from : https://gist.github.com/3559343
  Thank you bminer!
  */
  // x = élément du DOM, type = nouveau type à attribuer
  function changeType(x, type) {
  if(x.prop('type') == type)
  return x; // ça serait facile.
  try {
  // Une sécurité d'IE empêche ceci
  return x.prop('type', type);
  }
  catch(e) {
  // On tente de recréer l'élément
  // En créant d'abord une div
  var html = $("<div>").append(x.clone()).html();
  var regex = /type=(\")?([^\"\s]+)(\")?/;
  // la regex trouve type=text ou type="text"
  // si on ne trouve rien, on ajoute le type à la fin, sinon on le remplace
  var tmp = $(html.match(regex) == null ?
     html.replace(">", ' type="' + type + '">') :
     html.replace(regex, 'type="' + type + '"') );

  // on rajoute les vieilles données de l'élément
  tmp.data('type', x.data('type') );
  var events = x.data('events');
  var cb = function(events) {
     return function() {
        //Bind all prior events
        for(i in events) {
           var y = events[i];
           for(j in y) tmp.bind(i, y[j].handler);
        }
     }
  }(events);
  x.replaceWith(tmp);
  setTimeout(cb, 10); // On attend un peu avant d'appeler la fonction
  return tmp;
  }
  }


</script>
