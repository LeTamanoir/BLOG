<?php
if(isset($_POST['submit']))
{
  session_start();
  $_SESSION['username'] = $_POST['username'];

}
?>
