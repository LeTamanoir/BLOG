<?php 
if(!empty($_POST)){
    $auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'], $_POST['password'])){
        if($_POST['username'] == "admin"){
            header('Location: admin.php');
        }else{
            header('Location: index2.php');
        }
    }else{
        ?> 
        <div>Identifiants incorrects</div>
        <?php
    }
}
$form = new \Core\HTML\BootstrapForm($_POST); 

?>

<form method="post" action="" class="form__container">
    <div class="flex__form__login padding_big"><?= $form->input('username',"username : ", ['placeholder' => 'username']);?></div>
    <div class="flex__form__login padding_big"><?= $form->input('password','password : ', ['type' => 'password','placeholder' => 'password','id' => 'password1']);?>
    
    <button type="button" title="Mask/Unmask" onclick="switch_eye(1);seePass(1)"><img class="image_medium" id=image_eye_1 src="/public/icons/login/eye.png" alt="voir mdp"></button>
    </div>

    



    <button>Envoyer</button>
</form>
