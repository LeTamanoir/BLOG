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
        <div class="text_medium color_error text_center">Identifiants incorrects</div>
        <?php
    }
}
$form = new \Core\HTML\BootstrapForm($_POST); 

?>

<form method="post" action="" class="form__container">
    <div class="flex__form__login padding_big"><?= $form->input('username',"username : ", ['placeholder' => 'username']);?></div>
    <div class="flex__form__login padding_big"><?= $form->input('password','password : ', ['type' => 'password','placeholder' => 'password','id' => 'password1']);?>
    <button type="button" title="Mask/Unmask" onclick="switch_eye(1);seePass(1)" class="image_in_button"><img class="image_small" id=image_eye_1 src="/public/icons/login/eye.png" alt="voir mdp"></button></div></div>
    <button class="color_black underline_hover padding_x_small text_medium background_color_white cursor">Envoyer</button>
</form>
