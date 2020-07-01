<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet">
    <meta charset="utf-8"/>
    <title>Utilisateurs</title>
  </head>

  <body>
    <?php
    $root = "/kunden/homepages/14/d285337155/www/Arthur/sites/blog/";
    require_once($root.'site/desktop/config/conf.php');
    $request = $bdd->query('SELECT status,username,firstname,lastname FROM clients WHERE status = "eleve"');
    while ($data = $request->fetch())
    {
      echo $data['username']." : ".$data['status'];
    }


    ?>
  </body>

</html>
