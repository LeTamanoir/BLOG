let last_onclick = '';
function showIframe(x)
{
  if (x==0 && last_onclick!='0')
  {
    //a modif
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==1 && last_onclick!='1')
  {
    //a modif
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==2 && last_onclick!='2')
  {
    document.getElementById("container_iframe").src = "/site/desktop/view/Administration/viewUsers.php";
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
    //a modif
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==5 && last_onclick!='5')
  {
    //a modif
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==6 && last_onclick!='6')
  {
    //a modif
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==7 && last_onclick!='7')
  {
    //a modif
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
    document.getElementById("container_iframe").style.display = "inline";
    last_onclick = x;
  }
  else if (x==8 && last_onclick!='8')
  {
    //a modif
    document.getElementById("container_iframe").src = "/site/desktop/view/Public/viewTextEditor.php";
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
