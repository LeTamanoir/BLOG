<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet">
    <title>Utilisateurs</title>
  </head>

  <body>
    <?php
    $request = $bdd->query('SELECT status,username,firstname,lastname FROM clients WHERE status = "eleve"');
    while ($data = $request->fetch())
    {
      echo $data['username']." : ".$data['satus'];
    }


    ?>
  </body>

</html>
