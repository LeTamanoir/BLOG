window.onload = () => {
  'use strict';
  
  //if ('serviceWorker' in navigator) {
  //  navigator.serviceWorker.register('/sw.js');
  //}
}


//===================================
//                                 ||
//    ------  INDEX  ------        ||
//                                 ||
//    -- 1 -- CHECK ELEMENTS       ||
//                                 ||
//    -- 2 -- DEFINE ELEMENTS      ||
//                                 ||
//    -- 3 -- LOGIN                ||
//                                 ||
//    -- 4 -- NAVBAR               ||
//                                 ||
//===================================



// ==========================
// ===== CHECK ELEMENTS =====
// ==========================


// =====================================
// ===== CHECK ELEMENTS ---> checkNavbar
// =====================================


var checkNavbar = document.getElementById("navbar");
if(typeof(checkNavbar) != 'undefined' && checkNavbar != null){
  navbarExist = true;
}
else{
  navbarExist = false;
}


// ====================================
// ===== CHECK ELEMENTS ---> checkLogin
// ====================================


var checkLogin = document.getElementById("container_logo_login");

if(typeof(checkLogin) != 'undefined' && checkLogin != null){
  loginExist = true;
}
else{
  loginExist = false;
}


// ====================================
// ===== CHECK ELEMENTS ---> checkAdmin
// ====================================


var checkAdmin = document.getElementById("database");

if(typeof(checkAdmin) != 'undefined' && checkAdmin != null){
  adminExist = true;
}
else{
  adminExist = false;
}



// ===========================
// ===== DEFINE ELEMENTS =====
// ===========================


// ==========================================
// ===== DEFINE ELEMENTS ---> CheckScreenSize
// ==========================================


const screen_res_mobile = window.matchMedia("(max-width: 1150px)");
const screen_res_laptop = window.matchMedia("(min-width: 1150px) and (max-width: 1500px)");
const screen_res_desktop = window.matchMedia("(min-width: 1500px)");
screen_mobile(screen_res_mobile);
screen_laptop(screen_res_laptop);
screen_desktop(screen_res_desktop);
screen_res_mobile.addListener(screen_mobile);
screen_res_laptop.addListener(screen_laptop);
screen_res_desktop.addListener(screen_desktop);


// ========================================
// ===== DEFINE ELEMENTS ---> screen_mobile
// ========================================


function screen_mobile(screen){
  if(screen.matches) {
    if (navbarExist==true) {
      document.getElementById("navbar__capteur").addEventListener("click", show_navbar_mobile);
    }
    screen_format = 0;
    console.log("mobile")
    defineElements();

  }
}


// ========================================
// ===== DEFINE ELEMENTS ---> screen_laptop
// ========================================


function screen_laptop(screen){
  if(screen.matches) {
    if (navbarExist==true) {
      document.getElementById("navbar__capteur").addEventListener("click", show_navbar_desktop);
    }

    screen_format = 1
    console.log("laptop")
    defineElements();
    window.addEventListener('resize', relaodScreen);
  }
}


// =========================================
// ===== DEFINE ELEMENTS ---> screen_desktop
// =========================================


function screen_desktop(screen){
  if(screen.matches) {
    if (navbarExist==true) {
      document.getElementById("navbar__capteur").addEventListener("click", show_navbar_desktop);
    }

    screen_format = 1
    console.log("desktop");
    defineElements();
    window.addEventListener('resize', relaodScreen);
  }
}


// =======================================
// ===== DEFINE ELEMENTS ---> relaodScreen
// =======================================


function relaodScreen() {
  location.reload();
}


// =========================================
// ===== DEFINE ELEMENTS ---> defineElements
// =========================================


function defineElements() {
  if (loginExist==true) {
    document.getElementById("container_logo_login").style.backgroundImage = "url(/public/icons/login/blog.svg)";
    document.getElementById("container_logo_login").addEventListener("mouseover", async function() {
      document.getElementById("container_logo_login").style.animationName = "play_logo_reverse";
      await new Promise(r => setTimeout(r, 500));
      document.getElementById("container_logo_login").style.animationName = "play_logo";
    });
  }
  if (navbarExist==true) {
    document.getElementById("navbar__capteur").style.backgroundImage = "url(/public/icons/navbar/animated_svg/navbar.svg)";
    document.getElementById("user").style.backgroundImage = "url(/public/icons/navbar/animated_svg/user.svg)";
    document.getElementById("dashboard").style.backgroundImage = "url(/public/icons/navbar/animated_svg/dashboard.svg)";
    document.getElementById("settings").style.backgroundImage = "url(/public/icons/navbar/animated_svg/settings.svg)";
    document.getElementById("logout").style.backgroundImage = "url(/public/icons/navbar/animated_svg/logout.svg)";
    document.getElementById("user").addEventListener("mouseover", animate);
    document.getElementById("settings").addEventListener("mouseover", animate);
    document.getElementById("logout").addEventListener("mouseover", animate);
    document.getElementById("dashboard").addEventListener("mouseover", animate);
  }
  if (adminExist==true) {
    document.getElementById("user_list").style.backgroundImage = "url(/public/icons/navbar/animated_svg/user_list.svg)";
    document.getElementById("database").style.backgroundImage = "url(/public/icons/navbar/animated_svg/database.svg)";
    document.getElementById("user_list").addEventListener("mouseover", animate);
    document.getElementById("database").addEventListener("mouseover", animate);
  } 
};






// ==================
// ===== LOGIN ======
// ==================


// ======================
// ===== LOGIN ---> LOGIN
// ======================

eye_status_1 = "open";
eye_status_2 = "open";
function switch_eye(x) {
  var name ="image_eye_"+x;
  if (x=="1")
  {
    if (eye_status_1=="open")
    {
      document.getElementById(name).src = "/public/icons/login/no_eye.png";
      eye_status_1 = "close";
    }
    else if (eye_status_1=="close")
    {
      document.getElementById(name).src = "/public/icons/login/eye.png";
      eye_status_1 = "open";
    }
  }
  else if (x=="2")
  {
    if (eye_status_2=="open")
    {
      document.getElementById(name).src = "/public/icons/login/no_eye.png";
      eye_status_2 = "close";
    }
    else if (eye_status_2=="close")
    {
      document.getElementById(name).src = "/public/icons/login/eye.png";
      eye_status_2 = "open";
    }
  }
}


// ========================
// ===== LOGIN ---> seePass
// ========================


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



// ==================
// ===== NAVBAR =====
// ==================


// ====================================
// ===== NAVBAR --> show_navbar_desktop
// ====================================


navbar__status = 1
function show_navbar_desktop() {
  if (navbar__status==1)
  {
    navbar__status = 0;
    document.getElementById("navbar__content").style.transform = "scale(1)";
    document.getElementById("navbar__capteur").style.transform = "translateX(175px)";
    document.getElementById("navbar_background_2").style.transform = "scale(1)";
    document.getElementById("navbar_background_2").style.fill = "var(--color-blue)";
    document.getElementById("container_background").style.zIndex = "1";
    animateNavbar("play")

  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar_background_2").style.transform = "scale(0)";
    document.getElementById("navbar_background_2").style.fill = "var(--color-light-blue)";
    document.getElementById("navbar__content").style.transform = "scale(0)";
    document.getElementById("container_background").style.zIndex = "-1";
    document.getElementById("navbar__capteur").style.transform = "translateX(0px)";
    animateNavbar("exit")
  }
}


// ====================================
// ===== NAVBAR --> show_navbar_mobile
// ====================================


function show_navbar_mobile() {
  if (navbar__status==1)
  {
    navbar__status = 0;
    document.getElementById("navbar__content").style.transform = "scale(1)";
    document.getElementById("navbar_background_1_mobile").style.transform = "scale(1)";
    document.getElementById("navbar_background_1_mobile").style.fill = "var(--color-blue)";
    document.getElementById("container_background").style.zIndex = "1";
    animateNavbar("play")
  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar__content").style.transform = "scale(0)";
    document.getElementById("navbar_background_1_mobile").style.transform = "scale(0)";
    document.getElementById("navbar_background_1_mobile").style.fill = "var(--color-light-blue)";
    document.getElementById("container_background").style.zIndex = "-1";
    animateNavbar("exit")
  }
}


// ========================
// ===== NAVBAR --> animate
// ========================


async function animate() {
  this.classList.add('exit');
  this.classList.remove('play');

  await new Promise(r => setTimeout(r, 500));
  this.classList.remove('exit');
  this.classList.add('play');
};


// ==============================
// ===== NAVBAR --> retractNavbar
// ==============================


function retractNavbar() {
  show_navbar_desktop()
  animateNavbar("exit")
}


// ==============================
// ===== NAVBAR --> animateNavbar
// ==============================


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


// ========================================
// ===== NAVBAR --> deployBackgroundDesktop
// ========================================


async function deployBackgroundDesktop () {
  document.getElementById("navbar_background_3").style.transform = "scale(1)";
  document.getElementById("navbar_background_3").style.fill = "var(--color-dark-blue)";
  await new Promise(r => setTimeout(r, 200));
  document.getElementById("container_background").style.backgroundColor = "var(--color-dark-blue)";
  await new Promise(r => setTimeout(r, 500));
  document.getElementById("container_background").style.backgroundColor = "transparent";
  document.getElementById("navbar_background_3").style.transform = "scale(0)";
  document.getElementById("navbar_background_3").style.fill = "var(--color-blue)";
  document.getElementById("navbar_background_2").style.transform = "scale(0)";
  document.getElementById("navbar_background_2").style.fill = "var(--color-light-blue)";
  retractNavbar()
}


// =======================================
// ===== NAVBAR --> deployBackgroundMobile
// =======================================


async function deployBackgroundMobile () {
  document.getElementById("navbar_background_2_mobile").style.transform = "scale(1)";
  document.getElementById("navbar_background_2_mobile").style.fill = "var(--color-dark-blue)";
  await new Promise(r => setTimeout(r, 200));
  document.getElementById("container_background").style.backgroundColor = "var(--color-dark-blue)";
  await new Promise(r => setTimeout(r, 500));
  document.getElementById("container_background").style.backgroundColor = "transparent";
  document.getElementById("navbar_background_2_mobile").style.transform = "scale(0)";
  document.getElementById("navbar_background_2_mobile").style.fill = "var(--color-blue)";
  document.getElementById("navbar_background_1_mobile").style.transform = "scale(0)";
  document.getElementById("navbar_background_1_mobile").style.fill = "var(--color-light-blue)";
  retractNavbar()
}

// =======================================
// ===== NAVBAR --> deployBackgroundMobile
// =======================================


var navbar__content__child_lenght = document.getElementsByClassName('navbar__content__child');
if (screen_format==1)
{
  for (i=0; i<navbar__content__child_lenght.length; i++) {
    document.getElementsByClassName("navbar__content__child")[i].addEventListener("click", deployBackgroundDesktop);
  }
}
else {
  for (i=0; i<navbar__content__child_lenght.length; i++) {
    document.getElementsByClassName("navbar__content__child")[i].addEventListener("click", deployBackgroundMobile);
  }
}
