<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Profil</title>
    <link rel="stylesheet" href="../config/stylesheet_desktop/stylesheet.css">
    <script src="../functions/mainFunctions.js"></script>
  </head>

  <body>
    <?php
    session_start();
    $icon = "/icons/profil_icon/icon_profil_";
    for ($i = 1;$i<31;$i++)
    {
     ?><button onclick='changePdp(<?=$i?>)'><img id=<?=$i?> class="image_pdp" src="<?php echo $icon.$i.'.png';?>"></button>
     <?php
    }

    ?>



<script>
  function changePdp(x){
    var image_src = document.getElementById(x).src;
      }
</script>




</body>
</html>
