<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Profil</title>
    <link rel="stylesheet" href="/site/desktop/config/stylesheet_desktop/stylesheet.css">
    <script src="/site/desktop/functions/mainFunctions.js"></script>
  </head>

  <body>
    <form action="" method="post">
    <div class="profil-grid-container">
    <div class="profil-container-username">
      <div class="profil-title">Nom d'utilisateur</div>
      <div class="profil-username">
        <input type='text' name='username' class=input-profil placeholder='<?=$_SESSION['username']?>'>
      </div>
      <div class="profil-submit-username">
        <button type='submit' class=button-profil name="updateUser">Confirmer</button>
      </div>
    </div>

    <div class="profil-container-password">
      <div class="profil-title">Mot de passe</div>
      <div class="profil-password">
        <input id="password1" type='password' name='password' class=input-profil-password placeholder="Nouveau mot de passe">
        <button id="unmask" class="unmask_2" type="button" class=button-profil title="Mask/Unmask" onclick="seePass(1);switch_eye(1)"><img id=image_eye_1 src="/icons/login/100px/eye.png" alt="voir mdp"></button>
      </div>

      <div class="profil-confirm-password">
        <input id="password2" type='password' class=input-profil-password name='password2' placeholder="Confirmer mot de passe">
        <button id="unmask" class="unmask_2" type="button" class=button-profil title="Mask/Unmask" onclick="seePass(2);switch_eye(2)"><img id=image_eye_2 src="/icons/login/100px/eye.png" alt="voir mdp"></button>
      </div>
      <div class="profil-submit-password">
        <button type='submit' class=button-profil name="updatePassword">Confirmer</button>
      </div>
    </div>

    <div class="profil-container-email">
      <div class="profil-title">Adresse mail</div>
      <div class="profil-email">
        <input type='text' name='mail' class=input-profil-email placeholder='<?=$_SESSION['mail']?>'>

      </div>
      <div class="profil-confirm-email">
        <input type='text' name='mail2' class=input-profil-email placeholder='<?=$_SESSION['mail']?>'>

      </div>
      <div class="profil-submit-email">
        <button type='submit' class=button-profil name="updateMail">Confirmer</button>

      </div>
    </div>


    <div class="profil-container-image">
      <img class=profil-image-new src="/icons/profil/100px/new_picture.png">
      <button class="profil-image-pop-up" type="button" onclick="newPdp(1)">Nouvelle photo de profil</button>
      </div>
    </div>


    </div>


    <div id=container_pop_up>
      <button id=close_profil_pop_up type="button" onclick=newPdp(2)><img class=profil-image-new src="/icons/navbar/100px/cross.png"></button>

      <iframe id=pop_up_profil src="/site/desktop/view\viewPhotoProfil.php"></iframe>


    </div>
    </form>
  </body>
</html>
