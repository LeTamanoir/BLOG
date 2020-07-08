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
      

  }
  else if (navbar__status==0)
  {
      navbar__status = 1;


  }
}
  