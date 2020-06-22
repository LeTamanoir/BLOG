<?php


function write()
{
  if(isset($_GET['accountKey']))
  {
    $file = fopen('logs.txt', 'a+');
    fwrite($file, $_SESSION['username'].' : '. $_SESSION['status'] . PHP_EOL);
    fclose($file);
  }

}
?>
