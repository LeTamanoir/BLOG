window.onload = () => {
  'use strict';
  
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js');
  }
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

// ===============================================
// ===== CHECK ELEMENTS ---> tool_list_text_editor
// ===============================================


var checkNavbar = document.getElementById("tool_list_text_editor");
if(typeof(checkNavbar) != 'undefined' && checkNavbar != null){
  text_editorExist = true;
}
else{
  text_editorExist = false;
}

var checkNavbar = document.getElementById("404");
if(typeof(checkNavbar) != 'undefined' && checkNavbar != null){
  Exist404 = true;
}
else{
  Exist404 = false;
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
  console.log("login :",loginExist)
  console.log("navbar :",navbarExist)
  if (text_editorExist==true){
    console.log("hello")
    defineSVG("Bold","url(/public/icons/text_editor/bold.svg)")
    defineSVG("Justify-Right","url(/public/icons/text_editor/right.svg)")
    defineSVG("Justify-Left","url(/public/icons/text_editor/left.svg)")
    defineSVG("Center","url(/public/icons/text_editor/center.svg)")
    defineSVG("Italic","url(/public/icons/text_editor/italic.svg)")
    defineSVG("Underline","url(/public/icons/text_editor/underline.svg)")
    defineSVG("Ordered-List","url(/public/icons/text_editor/number.svg)")
    defineSVG("Unordered-List","url(/public/icons/text_editor/bullet.svg)")
    defineSVG("Clip-Link","url(/public/icons/text_editor/link.svg)")

  }
  if (Exist404==true) {
    display404()
  }
  if (loginExist==true) {
    console.log("hello world")
    animateElementNavbar("container_logo_login","url(/public/icons/login/blog.svg)","play_logo");
  }
  if (navbarExist==true) {
    animateElementNavbar("publier_une_pause","url(/public/icons/navbar/animated_svg/publish.svg)","animate_header_icons");
    animateElementNavbar("pause_public","url(/public/icons/navbar/animated_svg/public.svg)","animate_header_icons");
    if (adminExist==true) {
      animateElementNavbar("pause_private","url(/public/icons/navbar/animated_svg/private.svg)","animate_header_icons");
      animateElementNavbar("correct_pause","url(/public/icons/navbar/animated_svg/correct.svg)","animate_header_icons");
    }
    document.getElementById("navbar__capteur").style.backgroundImage = "url(/public/icons/navbar/animated_svg/navbar.svg)";
    animateElementNavbar("user","url(/public/icons/navbar/animated_svg/user.svg)","animate_navbar_icons");
    animateElementNavbar("settings","url(/public/icons/navbar/animated_svg/settings.svg)","animate_navbar_icons");
    animateElementNavbar("logout","url(/public/icons/navbar/animated_svg/logout.svg)","animate_navbar_icons");
    animateElementNavbar("dashboard","url(/public/icons/navbar/animated_svg/dashboard.svg)","animate_navbar_icons");
  }
  if (adminExist==true) {
    animateElementNavbar("user_list","url(/public/icons/navbar/animated_svg/user_list.svg)","animate_navbar_icons");
    animateElementNavbar("database","url(/public/icons/navbar/animated_svg/database.svg)","animate_navbar_icons");
  }
};


// ===============================================
// ===== DEFINE ELEMENTS ---> animateElementNavbar
// ===============================================


function animateElementNavbar(x, y, z) {
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
      var navbar__content__child__lenght = document.getElementsByClassName('navbar__content__child__link');
      for (i=0; i<navbar__content__child__lenght.length; i++) {
        document.getElementsByClassName("navbar__content__child__link")[i].removeEventListener("click", retractNavbarMobile);
        document.getElementsByClassName("navbar__content__child__link")[i].addEventListener("click", retractNavbarDesktop);
      }
    }
    else if (x==0) {
        document.getElementById("navbar__capteur").removeEventListener("click", show_navbar_desktop);
        document.getElementById("navbar__capteur").addEventListener("click", show_navbar_mobile);
        var navbar__content__child__lenght = document.getElementsByClassName('navbar__content__child__link');
        for (i=0; i<navbar__content__child__lenght.length; i++) {
          document.getElementsByClassName("navbar__content__child__link")[i].removeEventListener("click", retractNavbarDesktop);
          document.getElementsByClassName("navbar__content__child__link")[i].addEventListener("click", retractNavbarMobile);
      } 
    }
  }
}


// =====================================
// ===== DEFINE ELEMENTS ---> display404
// =====================================


async function display404() {
  document.getElementById("image-404").classList.add("enter-404");
  await new Promise(r => setTimeout(r, 1000));
  document.getElementById("image-404").addEventListener("mouseover", function(){
    console.log("hello")
    document.getElementById("image-404").classList.replace("enter-404","hover-404");
  });
}

// ====================================
// ===== DEFINE ELEMENTS ---> defineSVG
// ====================================


function defineSVG(x, y) {
  document.getElementById(x).style.backgroundImage = y;
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
    document.getElementById("navbar__content").style.transform = "translateX(0)";
    document.getElementById("container_background").style.zIndex = "1";
    animateNavbar("play")

  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar__content").style.transform = "translateX(-110%)";
    document.getElementById("container_background").style.zIndex = "-1";
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
    document.getElementById("navbar__content").style.transform = "translateY(0)";
    document.getElementById("container_background").style.zIndex = "1";
    animateNavbar("play")
  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar__content").style.transform = "translateY(-200%)";
    document.getElementById("container_background").style.zIndex = "-1";

    animateNavbar("exit")
  }
}


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
    document.getElementById("navbar__capteur").style.animationName = "animate_navbar_icons_reverse";
  }
  else if (x=="play") {
    document.getElementById("navbar__capteur").style.animationName = "animate_navbar_icons";
  }
}

