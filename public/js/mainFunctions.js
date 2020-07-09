window.onload = () => {
    'use strict';
    console.log("hello world !")
  
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('/sw.js');
  }
}
console.log("hello world !")
  
  
 
  
navbar__status = 1
function show_navbar_desktop() {
  if (navbar__status==1)
  {
    navbar__status = 0;
    document.getElementById("navbar").style.animation = "navbar__desktop__in 0.1s forwards";
    document.getElementById("navbar__capteur").src = "/public/icons/navbar/cross.png";

  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar").style.animation = "navbar__desktop__out 0.1s forwards";
    document.getElementById("navbar__capteur").src = "/public/icons/navbar/navbar.png";


  }
}
function show_navbar_mobile() {
  if (navbar__status==1)
  {
    navbar__status = 0;
    document.getElementById("navbar__content").style.animation = "navbar__mobile__in 0.4s forwards";
    document.getElementById("navbar__capteur").src = "/public/icons/navbar/cross.png";
  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar__content").style.animation = "navbar__mobile__out 0.1s forwards";
    document.getElementById("navbar__capteur").src = "/public/icons/navbar/navbar.png";


  }
}
screenSizeStatus2 =''
function screenSize(x) {
  if (x.matches) {
    document.getElementById("navbar__capteur").addEventListener("click", show_navbar_mobile);
    screenSizeStatus = 1
    console.log(screenSizeStatus)
  }
  else {
    document.getElementById("navbar__capteur").addEventListener("click", show_navbar_desktop);
    screenSizeStatus = 0
    console.log(screenSizeStatus)
  }
  if (screenSizeStatus == 1 && screenSizeStatus2 == 1)
  {
    location.reload();
  }
  else if (screenSizeStatus == 0 && screenSizeStatus2 == 1)
  {
    location.reload();
  }
  screenSizeStatus2 = 1
}

var x = window.matchMedia("(max-width: 1000px)")
screenSize(x)
x.addListener(screenSize)