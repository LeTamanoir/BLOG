<?php 
if(!empty($_POST)){
    $_SESSION['error'] = '';
    $auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'], $_POST['password'])){
        
        if($_POST['username'] === "admin"){
            header('Location: admin.php');
        }else{
            header('Location: user.php');
        }
    }else{
        $_SESSION['error'] = 'Identifiants incorrects';
    }
}
$form = new \Core\HTML\BootstrapForm($_POST); 

?>

<form method="post" action="" class="form__container padding_small">
    <div class="flex__form__login padding_medium"><?= $form->input('username',"username : ", ['placeholder' => 'username'], false);?></div>
    <div class="flex__form__login padding_medium"><?= $form->input('password','password : ', ['type' => 'password','placeholder' => 'password','id' => 'password1']);?>
    <button type="button" title="Mask/Unmask" onclick="switch_eye(1);seePass(1)" class="image_in_button cursor"><img class="image_small" id=image_eye_1 src="/public/icons/login/eye.png" alt="voir mdp"></button></div></div>
    <div class="text_medium color_error text_center"><?= $_SESSION['error']; ?></div>
    <button class="color_black underline_hover padding_x_small text_medium background_color_white cursor">Envoyer</button>
</form>
