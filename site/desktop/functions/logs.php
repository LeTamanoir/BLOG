<?php
function connect_logs()
{
    $file = fopen('logs.txt', 'a+');
    $now = date("F j, Y, g:i a");
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    fwrite($file, $ip .' => User : '.$_SESSION['username'].' => '.'Status : ' .$_SESSION['status'].' => '. 'Heure de connexion : '. $now . PHP_EOL);
    fclose($file);
}
function deconnect_logs()
{
  $file = fopen('../controller/logs.txt', 'a+');
  $now = date("F j, Y, g:i a");
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  fwrite($file, $ip . ' => User : '.$_SESSION['username'].' => '.'Status : ' .$_SESSION['status'].' => '. 'Heure de déconnexion : '. $now . PHP_EOL);
  fclose($file);
}
?>
