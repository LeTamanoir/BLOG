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
    document.getElementById("navbar").style.animation = "navbar__desktop__in 0.3s forwards";
    document.getElementById("navbar__container").style.borderRight = "solid 2px var(--color-error)";
    document.getElementById("navbar__container").style.borderBottom = "solid 2px var(--color-error)";
    this.classList.add('play');
    this.classList.remove('exit');
  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar").style.animation = "navbar__desktop__out 0.3s forwards";
    document.getElementById("navbar__container").style.borderRight = "solid 2px var(--color-dark-blue)";
    document.getElementById("navbar__container").style.borderBottom = "solid 2px var(--color-dark-blue)";
    this.classList.add('exit');
    this.classList.remove('play');

  }
}
function show_navbar_mobile() {
  if (navbar__status==1)
  {
    navbar__status = 0;
    document.getElementById("navbar__content").style.height = "auto";
    document.getElementById("navbar__container").style.borderBottom = "solid 2px var(--color-error)";
    this.classList.add('play');
    this.classList.remove('exit');
  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar__content").style.height = "0";
    document.getElementById("navbar__container").style.borderBottom = "solid 2px var(--color-dark-blue)";
    this.classList.add('exit');
    this.classList.remove('play');

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

    console.log("mobile")
    definebackground("75px");
    
  }
}
function screen_laptop(screen){
  if(screen.matches) {
    document.getElementById("navbar__capteur").addEventListener("click", show_navbar_desktop);

    console.log("laptop")
    definebackground("50px");
    
  }
}
function screen_desktop(screen){
  if(screen.matches) {
    document.getElementById("navbar__capteur").addEventListener("click", show_navbar_desktop);
    console.log("desktop");
    
    definebackground("100px");

    
  }
}
function screen_reload() {
  location.reload();
}





function definebackground(x) {
  try {
    document.getElementById("navbar__capteur").style.backgroundImage = "url(/public/icons/navbar/animated_svg/"+x+"/navbar.svg)";
    document.getElementById("user").style.backgroundImage = "url(/public/icons/navbar/animated_svg/"+x+"/user.svg)";
    document.getElementById("settings").style.backgroundImage = "url(/public/icons/navbar/animated_svg/"+x+"/settings.svg)";
    document.getElementById("logout").style.backgroundImage = "url(/public/icons/navbar/animated_svg/"+x+"/logout.svg)";
  }catch (errot){}
  try {
    document.getElementById("user_list").style.backgroundImage = "url(/public/icons/navbar/animated_svg/"+x+"/user_list.svg)";
    document.getElementById("dashboard").style.backgroundImage = "url(/public/icons/navbar/animated_svg/"+x+"/dashboard.svg)";
    document.getElementById("database").style.backgroundImage = "url(/public/icons/navbar/animated_svg/"+x+"/database.svg)";
  }catch (error) {}
  document.getElementById("user").addEventListener("mouseover", animate);
  document.getElementById("settings").addEventListener("mouseover", animate);
  document.getElementById("logout").addEventListener("mouseover", animate);
  document.getElementById("user_list").addEventListener("mouseover", animate);
  document.getElementById("dashboard").addEventListener("mouseover", animate);
  document.getElementById("database").addEventListener("mouseover", animate);
};











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