<?php
session_start();
$icon = "/icons/profil_icon/icon_profil_";
for ($i = 1;$i<31;$i++)
{
 ?><button onclick='changePdp(<?=$i?>)'><img id=<?=$i?> class="image_pdp" src="<?php echo $icon.$i.'.png';?>"></button>
 <?php
}

?>
<style>
  button {
    border: none;
    background: none;
  }
  .image_pdp {
    width: 4vw;
    height: 4vw;
  }
  .image_pdp:hover{
    animation: blur 0.25s forwards;
  }
  @keyframes blur {
    from {
      filter: blur(8px);
      transform: scale(1,1);
    }
    to {
      filter: blur(0px);
      transform: scale(1.25,1.25);
    }
  }
</style>
<script>
  function changePdp(x){
    var image_src = document.getElementById(x).src;
      }
</script>
