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
    mobile = true;
    desktop = false;

    console.log("mobile")
    defineNavbar(0)
    defineElements();
  }
}


// ========================================
// ===== DEFINE ELEMENTS ---> screen_laptop
// ========================================


function screen_laptop(screen){
  if(screen.matches) {
    desktop = true;
    mobile = false;

    console.log("laptop")
    defineNavbar(1)
    defineElements();
  }
}


// =========================================
// ===== DEFINE ELEMENTS ---> screen_desktop
// =========================================


function screen_desktop(screen){
  if(screen.matches) {
    desktop = true;
    mobile = false;
    
    console.log("desktop");
    defineNavbar(1)
    defineElements();
  }
}




// =========================================
// ===== DEFINE ELEMENTS ---> defineElements
// =========================================


function defineElements() {
  if (loginExist==true) {
    animateElement("container_logo_login","url(/public/icons/login/blog.svg)","play_logo");
  }
  if (navbarExist==true) {

    if (desktop==true && mobile==false) {
      animateElement("favicon_desktop","url(/public/icons/favicon/favicon.svg)","play_favicon");

    } else if (desktop==false && mobile==true) {
      animateElement("favicon_mobile","url(/public/icons/favicon/favicon.svg)","play_favicon");
    }
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


// =========================================
// ===== DEFINE ELEMENTS ---> animateElement
// =========================================


function animateElement(x, y, z) {
  document.getElementById(x).style.backgroundImage = y;
  document.getElementById(x).addEventListener("mouseover", async function() {
    document.getElementById(x).style.animationName = z+"_reverse";
    await new Promise(r => setTimeout(r, 500));
    document.getElementById(x).style.animationName = z;
  });
}


// =======================================
// ===== DEFINE ELEMENTS ---> defineNavbar
// =======================================


function defineNavbar(x) {
  if (navbarExist==true) {
    if (x==1) {
      document.getElementById("navbar__capteur").removeEventListener("click", show_navbar_mobile);
      document.getElementById("navbar__capteur").addEventListener("click", show_navbar_desktop);
      var navbar__content__child_lenght = document.getElementsByClassName('navbar__content__child');
      for (i=0; i<navbar__content__child_lenght.length; i++) {
        document.getElementsByClassName("navbar__content__child")[i].removeEventListener("click", deployBackgroundMobile);
        document.getElementsByClassName("navbar__content__child")[i].addEventListener("click", deployBackgroundDesktop);
      }
    }
    else if (x==0) {
        document.getElementById("navbar__capteur").removeEventListener("click", show_navbar_desktop);
        document.getElementById("navbar__capteur").addEventListener("click", show_navbar_mobile);
        var navbar__content__child_lenght = document.getElementsByClassName('navbar__content__child');
        for (i=0; i<navbar__content__child_lenght.length; i++) {
          document.getElementsByClassName("navbar__content__child")[i].removeEventListener("click", deployBackgroundDesktop);
          document.getElementsByClassName("navbar__content__child")[i].addEventListener("click", deployBackgroundMobile);
      } 
    }
  }
}



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


function retractNavbarDesktop() {
  show_navbar_desktop()
  animateNavbar("exit")
}

function retractNavbarMobile() {
  show_navbar_mobile()
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
  document.getElementById("navbar_background_3").style.transform = "scaleX(1)";
  document.getElementById("navbar_background_3").style.fill = "var(--color-dark-blue)";
  await new Promise(r => setTimeout(r, 200));
  document.getElementById("container_background").style.backgroundColor = "var(--color-dark-blue)";
  await new Promise(r => setTimeout(r, 500));
  document.getElementById("container_background").style.backgroundColor = "transparent";
  document.getElementById("navbar_background_3").style.transform = "scaleX(0)";
  document.getElementById("navbar_background_3").style.fill = "var(--color-blue)";
  document.getElementById("navbar_background_2").style.transform = "scale(0)";
  document.getElementById("navbar_background_2").style.fill = "var(--color-light-blue)";
  retractNavbarDesktop()
}


// =======================================
// ===== NAVBAR --> deployBackgroundMobile
// =======================================


async function deployBackgroundMobile () {
  document.getElementById("navbar_background_2_mobile").style.transform = "scaleY(1)";
  document.getElementById("navbar_background_2_mobile").style.fill = "var(--color-dark-blue)";
  await new Promise(r => setTimeout(r, 200));
  document.getElementById("container_background").style.backgroundColor = "var(--color-dark-blue)";
  await new Promise(r => setTimeout(r, 500));
  document.getElementById("container_background").style.backgroundColor = "transparent";
  document.getElementById("navbar_background_2_mobile").style.transform = "scaleY(0)";
  document.getElementById("navbar_background_2_mobile").style.fill = "var(--color-blue)";
  document.getElementById("navbar_background_1_mobile").style.transform = "scale(0)";
  document.getElementById("navbar_background_1_mobile").style.fill = "var(--color-light-blue)";
  retractNavbarMobile()
}

