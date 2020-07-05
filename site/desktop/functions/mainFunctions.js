/*

COOKIE BACKGROUND


var value = retrieve_cookie('background');
document.getElementById('container_body').style.background = value;



*/

// Check that service workers are supported
if ('serviceWorker' in navigator) {
  // Use the window load event to keep the page load performant
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/service-worker.js');
  });
}



// ===================== newPdp ===================== //




function newPdp(x)
{
  if (x=="1")
  {
    document.getElementById('container_pop_up').style.animation = "scale_profil 0.25s forwards";
    document.getElementById("profil-grid-container").style.filter = "blur(5px)";
  }
  else if (x=="2")
  {
    document.getElementById('container_pop_up').style.animation = "scale_profil_reverse 0.25s forwards";
    document.getElementById("profil-grid-container").style.filter = "blur(0px)";
  }
}






// ===================== show_navbar ===================== //


container_navbar = 0;
iframe_status = ''
window_status = ''
function show_navbar()
{


  var x = window.matchMedia("(max-width: 1000px)")
  if (container_navbar==0)
  {
    document.getElementById("navbar_image").src = "../../../../icons/navbar/100px/cross.png";
    document.getElementById("container_navbar").style.animation = "scale_x 0.2s forwards";
    document.getElementById("container_navbar").style.display = "flex";
    document.getElementById("capteur_navbar").style.animation = "navbar_ease_in 0.2s forwards";
    document.getElementById("capteur_navbar").style.borderRight = "solid thin";
    document.getElementById("container_navbar").style.borderRight = "solid thin";
    document.getElementById("container_navbar").style.borderBottom = "solid thin";

    screeenSize(x)
    container_navbar=1;
  }
  else if (container_navbar!=0) {
    document.getElementById("navbar_image").src = "../../../../icons/navbar/100px/navbar.png";
    document.getElementById("container_navbar").style.animation = "scale_x_reverse 0.2s forwards";
    document.getElementById("capteur_navbar").style.animation = "navbar_ease_out 0.2s forwards";
    document.getElementById("capteur_navbar").style.borderRight = "none";
    document.getElementById("container_navbar").style.borderRight = "none";
    document.getElementById("container_navbar").style.borderBottom = "none";
    document.getElementById("middle_navbar").style.display = "flex";
    container_navbar=0;
    if (iframe_status == "inline")
    {
      document.getElementById("container_iframe").style.display = "inline";
      console.log(iframe_status)
    }
    else if (window_status == "desktop"){
      document.getElementById('grid-container').style.gridTemplateColumns = "10% 1fr 1fr 10%";
    }

  }
}

function screeenSize(x) {
  if (x.matches) { // If media query matches
    document.getElementById("middle_navbar").style.display = "none";
    if (document.getElementById("container_iframe").style.display == "inline")
    {
      document.getElementById("container_iframe").style.display = "none";
      document.getElementById('grid-container').style.gridTemplateColumns = "10% 40% 30% 20%";
      return iframe_status = "inline"
    }
    else
    {
      document.getElementById("container_iframe").style.display = "none";
      return iframe_status = "none"
    }
    return window_status = "mobile"
  }
  else {
    document.getElementById("middle_navbar").style.display = "flex";
    document.getElementById('grid-container').style.gridTemplateColumns = "20% 1fr 1fr 10%";
    return window_status = "desktop"
  }
}


// ================= login translate ================ //



function login_translate() {
  document.getElementById("image_login").style.animation = "login_translate 1s forwards";
}




// ================= eye view passwd ================= //



eye_status_1 = "open";
eye_status_2 = "open";

function switch_eye(x) {
  var name ="image_eye_"+x;

  if (x=="1")
  {
    if (eye_status_1=="open")
    {
      document.getElementById(name).src = "../../../icons/login/100px/no_eye.png";
      console.log(document.getElementById(name).src)
      eye_status_1 = "close";
    }
    else if (eye_status_1=="close")
    {
      document.getElementById(name).src = "../../../icons/login/100px/eye.png";
      console.log(document.getElementById(name).src)
      eye_status_1 = "open";
    }
  }
  else if (x=="2")
  {
    if (eye_status_2=="open")
    {
      document.getElementById(name).src = "../../../icons/login/100px/no_eye.png";
      console.log(document.getElementById(name).src)
      eye_status_2 = "close";
    }
    else if (eye_status_2=="close")
    {
      document.getElementById(name).src = "../../../icons/login/100px/eye.png";
      console.log(document.getElementById(name).src)
      eye_status_2 = "open";
    }
  }







}




// ===============  container_navbar_font_size_compteur ===================== //



container_navbar_font_size_compteur = 0;
function show_navbar_font_size()
{
  if (container_navbar_font_size_compteur==0)
  {
    document.getElementById("container_navbar_font_size").style.display = "flex";
    document.getElementById("container_navbar_font_size").style.animation = "scale_y 0.5s forwards";
    document.getElementById("image_text_editor_2").src = "/icons/text_editor/100px/cross.png";
    container_navbar_font_size_compteur=1;
  }
  else if (container_navbar_font_size_compteur!=0) {
    document.getElementById("container_navbar_font_size").style.animation = "scale_y_reverse 0.5s forwards";
    document.getElementById("image_text_editor_2").src = "/icons/text_editor/100px/size.png";
    container_navbar_font_size_compteur=0;
  }
}




// ===================== background ===================== //


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



// ===================== view password ===================== //



function seePass(x){
  var pwd = document.getElementById('password'+x);

  if(pwd.type == 'password')
  {
    pwd.type = 'text'
  }
  else
  {
    pwd.type = 'password';
  }
}




// ===================== showIframe ===================== //


let last_onclick = '';
function showIframe(x)
{
  if (x==0 && last_onclick!='0')
  {
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==1 && last_onclick!='1')
  {
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==2 && last_onclick!='2')
  {
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==3 && last_onclick!='3')
  {
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==4 && last_onclick!='4')
  {
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==5 && last_onclick!='5')
  {
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==6 && last_onclick!='6')
  {
    document.getElementById("container_iframe").src = "/site/desktop/view/Administration/viewUsers.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==7 && last_onclick!='7')
  {
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==8 && last_onclick!='8')
  {
    document.getElementById("container_iframe").src = "/site/desktop/controller/controllerProfil.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (last_onclick==x)
  {
    document.getElementById("container_iframe").src = "";
    last_onclick = '';
    document.getElementById("container_iframe").style.display = "none";
  }
}


// New PDP //
