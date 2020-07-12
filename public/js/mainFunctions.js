//window.onload = () => {
//    'use strict';
//    console.log("hello world !")
//  
//    if ('serviceWorker' in navigator) {
//      navigator.serviceWorker.register('/sw.js');
//  }
//}
console.log("hello world !")
 


navbar__status = 1
function show_navbar_desktop() {
  if (navbar__status==1)
  {
    navbar__status = 0;
    document.getElementById("navbar__content").style.transform = "scale(1)";
    document.getElementById("navbar__capteur").style.transform = "translateX(175px)";
    document.getElementById("container_background").style.animationName = "background-move";
    document.getElementById("container_background").style.zIndex = "1";
    animateNavbar("play")

  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("container_background").style.animationName = "background-move-reverse";
    document.getElementById("navbar__content").style.transform = "scale(0)";
    document.getElementById("container_background").style.zIndex = "-1";
    document.getElementById("navbar__capteur").style.transform = "translateX(0px)";
    animateNavbar("exit")


  }
}
function show_navbar_mobile() {
  if (navbar__status==1)
  {
    navbar__status = 0;
    document.getElementById("navbar__content").style.transform = "scaleY(1)";
    document.getElementById("container_background").style.animationName = "background-move";
    document.getElementById("container_background").style.zIndex = "1";
    animateNavbar("play")
  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar__content").style.transform = "scaleY(0)";
    document.getElementById("container_background").style.animationName = "background-move-reverse";
    document.getElementById("container_background").style.zIndex = "-1";

    animateNavbar("exit")

  }
}



const screen_res_mobile = window.matchMedia("(max-width: 800px)");
const screen_res_laptop = window.matchMedia("(min-width: 800px) and (max-width: 1400px)");
const screen_res_desktop = window.matchMedia("(min-width: 1400px)");
window.addEventListener("resize", screen_reload);
screen_mobile(screen_res_mobile);
screen_laptop(screen_res_laptop);
screen_desktop(screen_res_desktop);
screen_res_mobile.addListener(screen_mobile);
screen_res_laptop.addListener(screen_laptop);
screen_res_desktop.addListener(screen_desktop);


function screen_mobile(screen){
  if(screen.matches) {
    document.getElementById("navbar__capteur").addEventListener("click", show_navbar_mobile);
    document.getElementById("container_background").style.backgroundImage = "url(/public/icons/backgrounds/background-mobile.svg)";
    
    console.log("mobile")
    definebackground();
    
  }
}
function screen_laptop(screen){
  if(screen.matches) {
    document.getElementById("navbar__capteur").addEventListener("click", show_navbar_desktop);
    document.getElementById("container_background").style.backgroundImage = "url(/public/icons/backgrounds/background-720p.svg)";

    
    console.log("laptop")
    definebackground();
    
  }
}
function screen_desktop(screen){
  if(screen.matches) {
    document.getElementById("navbar__capteur").addEventListener("click", show_navbar_desktop);
    document.getElementById("container_background").style.backgroundImage = "url(/public/icons/backgrounds/background-1080p.svg)";


    console.log("desktop");
    
    definebackground();

    
  }
}
function screen_reload() {
  location.reload();
}





function definebackground() {
  try {
    document.getElementById("navbar__capteur").style.backgroundImage = "url(/public/icons/navbar/animated_svg/navbar.svg)";
    document.getElementById("user").style.backgroundImage = "url(/public/icons/navbar/animated_svg/user.svg)";
    document.getElementById("settings").style.backgroundImage = "url(/public/icons/navbar/animated_svg/settings.svg)";
    document.getElementById("logout").style.backgroundImage = "url(/public/icons/navbar/animated_svg/logout.svg)";
  }catch (errot){}
  try {
    document.getElementById("user_list").style.backgroundImage = "url(/public/icons/navbar/animated_svg/user_list.svg)";
    document.getElementById("dashboard").style.backgroundImage = "url(/public/icons/navbar/animated_svg/dashboard.svg)";
    document.getElementById("database").style.backgroundImage = "url(/public/icons/navbar/animated_svg/database.svg)";
  }catch (error) {}
  document.getElementById("user").addEventListener("mouseover", animate);
  document.getElementById("settings").addEventListener("mouseover", animate);
  document.getElementById("logout").addEventListener("mouseover", animate);
  document.getElementById("user_list").addEventListener("mouseover", animate);
  document.getElementById("dashboard").addEventListener("mouseover", animate);
  document.getElementById("database").addEventListener("mouseover", animate);
  
  
  var navbar__content__child_lenght = document.getElementsByClassName('navbar__content__child');

  for (i=0; i<navbar__content__child_lenght.length; i++) {
    document.getElementsByClassName("navbar__content__child")[i].addEventListener("click", deployBackground);
  }
};


async function deployBackground () {
  document.getElementById("container_background").style.animationName = "background-move-2";
  await new Promise(r => setTimeout(r, 150));
  document.getElementById("container_background").style.backgroundColor = "var(--color-dark-blue)";
  await new Promise(r => setTimeout(r, 500));
  document.getElementById("container_background").style.animationName = "background-move-2-reverse";
  document.getElementById("container_background").style.backgroundColor = "transparent";

  // temporaire //

  retractNavbar()
}


function retractNavbar() {
  show_navbar_desktop()
  animateNavbar("exit")
}

function animateNavbar(x) {
  if (x=="exit") {
    document.getElementById("navbar__capteur").classList.add('exit');
    document.getElementById("navbar__capteur").classList.remove('play');
  }
  else if (x=="play") {
    document.getElementById("navbar__capteur").classList.remove('exit');
    document.getElementById("navbar__capteur").classList.add('play');  
  }
}





eye_status_1 = "open";
eye_status_2 = "open";

function switch_eye(x) {
  var name ="image_eye_"+x;

  if (x=="1")
  {
    if (eye_status_1=="open")
    {
      document.getElementById(name).src = "/public/icons/login/no_eye.png";
     // console.log(document.getElementById(name).src)
      eye_status_1 = "close";
    }
    else if (eye_status_1=="close")
    {
      document.getElementById(name).src = "/public/icons/login/eye.png";
     // console.log(document.getElementById(name).src)
      eye_status_1 = "open";
    }
  }
  else if (x=="2")
  {
    if (eye_status_2=="open")
    {
      document.getElementById(name).src = "/public/icons/login/no_eye.png";
     // console.log(document.getElementById(name).src)
      eye_status_2 = "close";
    }
    else if (eye_status_2=="close")
    {
      document.getElementById(name).src = "/public/icons/login/eye.png";
     // console.log(document.getElementById(name).src)
      eye_status_2 = "open";
    }
  }
}


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


//document.getElementById("user").addEventListener("mouseover", animate(user));
async function animate() {
  this.classList.add('exit');
  this.classList.remove('play');

  await new Promise(r => setTimeout(r, 500));
  this.classList.remove('exit');
  this.classList.add('play');
};