<?php

function random_acc($car)
{
  $string = "";
  $chaine = "abcdefghijklmnpqrstuvwxyz0123456789";
  rand((double)microtime()*1000000);
  for($i=0; $i<$car; $i++) {
  $string .= $chaine[rand()%strlen($chaine)];
  }
  return $string;
}

?>
