window.onload = () => {
    'use strict';
  
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('./serviceWorker.js');
    }
}
 console.log("hello world !")
  
  
  
  
  
document.getElementById("navbar__capteur").addEventListener("click", show_navbar);
  
  
  
navbar__status = 1
function show_navbar() {
  if (navbar__status==1)
  {
    navbar__status = 0;
    document.getElementById("navbar").style.animation = "navbar__in 0.5s forwards";
    document.getElementById("navbar__capteur").src = "/public/icons/navbar/100px/cross.png";

  }
  else if (navbar__status==0)
  {
    navbar__status = 1;
    document.getElementById("navbar").style.animation = "navbar__out 0.5s forwards";
    document.getElementById("navbar__capteur").src = "/public/icons/navbar/100px/navbar.png";


  }
}
  