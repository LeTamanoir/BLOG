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
    document.getElementById("navbar__content").style.animation = "navbar__mobile__in 0.3s forwards";
    document.getElementById("navbar__container").style.borderBottom = "solid 2px var(--color-error)";
    this.classList.add('play');
    this.classList.remove('exit');
  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar__content").style.animation = "navbar__mobile__out 0.3s forwards";
    document.getElementById("navbar__container").style.borderBottom = "solid 2px var(--color-dark-blue)";
    this.classList.add('exit');
    this.classList.remove('play');

  }
}



const screen_res_mobile = window.matchMedia("(max-width: 800px)");
const screen_res_laptop = window.matchMedia("(min-width: 800px) and (max-width: 1500px)");
const screen_res_desktop = window.matchMedia("(min-width: 1500px)");
window.addEventListener("resize", screen_reload);
screen_mobile(screen_res_mobile);
screen_laptop(screen_res_laptop);
screen_desktop(screen_res_desktop);
screen_res_mobile.addListener(screen_mobile);
screen_res_laptop.addListener(screen_laptop);
screen_res_desktop.addListener(screen_desktop);

function screen_mobile(screen){
  if(screen.matches) {
    console.log('MOBILE');
    document.getElementById("navbar__capteur").addEventListener("click", show_navbar_mobile);

    console.log("720p")
    definebackground_720p();
    
  }
}
function screen_laptop(screen){
  if(screen.matches) {
    console.log('LAPTOP');
    document.getElementById("navbar__capteur").addEventListener("click", show_navbar_desktop);

    console.log("900p")
    definebackground_900p();
    
  }
}
function screen_desktop(screen){
  if(screen.matches) {
    console.log('DESKTOP');
    document.getElementById("navbar__capteur").addEventListener("click", show_navbar_desktop);
    console.log("1080p")
    
    definebackground_1080p();

    
  }
}
function screen_reload() {
  location.reload();
}



function definebackground_720p() {
  document.getElementById("navbar__capteur").style.backgroundImage = "url(/public/icons/navbar/animated_svg/50px/navbar.svg)";
  document.getElementById("user").style.backgroundImage = "url(/public/icons/navbar/animated_svg/50px/user.svg)";
  document.getElementById("settings").style.backgroundImage = "url(/public/icons/navbar/animated_svg/50px/settings.svg)";
  document.getElementById("logout").style.backgroundImage = "url(/public/icons/navbar/animated_svg/50px/logout.svg)";
  document.getElementById("user_list").style.backgroundImage = "url(/public/icons/navbar/animated_svg/50px/user_list.svg)";
  document.getElementById("dashboard").style.backgroundImage = "url(/public/icons/navbar/animated_svg/50px/dashboard.svg)";
  document.getElementById("database").style.backgroundImage = "url(/public/icons/navbar/animated_svg/50px/database.svg)";
  


  
};
function definebackground_900p() {
  document.getElementById("navbar__capteur").style.backgroundImage = "url(/public/icons/navbar/animated_svg/75px/navbar.svg)";
  document.getElementById("user").style.backgroundImage = "url(/public/icons/navbar/animated_svg/75px/user.svg)";
  document.getElementById("settings").style.backgroundImage = "url(/public/icons/navbar/animated_svg/75px/settings.svg)";
  document.getElementById("logout").style.backgroundImage = "url(/public/icons/navbar/animated_svg/75px/logout.svg)";
  document.getElementById("user_list").style.backgroundImage = "url(/public/icons/navbar/animated_svg/75px/user_list.svg)";
  document.getElementById("dashboard").style.backgroundImage = "url(/public/icons/navbar/animated_svg/75px/dashboard.svg)";
  document.getElementById("database").style.backgroundImage = "url(/public/icons/navbar/animated_svg/75px/database.svg)";
  




  
};
function definebackground_1080p() {
  document.getElementById("navbar__capteur").style.backgroundImage = "url(/public/icons/navbar/animated_svg/100px/navbar.svg)";
  document.getElementById("user").style.backgroundImage = "url(/public/icons/navbar/animated_svg/100px/user.svg)";
  document.getElementById("settings").style.backgroundImage = "url(/public/icons/navbar/animated_svg/100px/settings.svg)";
  document.getElementById("logout").style.backgroundImage = "url(/public/icons/navbar/animated_svg/100px/logout.svg)";
  try {
    document.getElementById("user_list").style.backgroundImage = "url(/public/icons/navbar/animated_svg/100px/user_list.svg)";
    document.getElementById("dashboard").style.backgroundImage = "url(/public/icons/navbar/animated_svg/100px/dashboard.svg)";
    document.getElementById("database").style.backgroundImage = "url(/public/icons/navbar/animated_svg/100px/database.svg)";
  }
  catch (error) {
    console.error(error);
  }
  
  



  
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
try {
  document.getElementById("user").addEventListener("mouseover", animate);
  document.getElementById("settings").addEventListener("mouseover", animate);
  document.getElementById("logout").addEventListener("mouseover", animate);
  document.getElementById("user_list").addEventListener("mouseover", animate);
  document.getElementById("dashboard").addEventListener("mouseover", animate);
  document.getElementById("database").addEventListener("mouseover", animate);
}
catch (error) {
}





async function animate() {
  this.classList.add('exit');
  this.classList.remove('play');

  await new Promise(r => setTimeout(r, 500));
  this.classList.remove('exit');
  this.classList.add('play');
  

};
  


//i = 2;
//document.getElementById("btn").addEventListener('click',transition);
//    
//function transition() {
//    console.log(i)
//    if (i==1){
//        this.classList.add('exit');
//        this.classList.remove('play')
//        i = 2;
//    }
//    else if (i==2){
//        this.classList.add('play');
//        this.classList.remove('exit');
//        i = 1;
//    }
//
//};
















