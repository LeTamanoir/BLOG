<?php 

namespace App\Controller;
use Core\Controller\Controller;

class UsersController extends AppController{

    public function login(){

        if(!empty($_POST)){
            $_SESSION['error'] = '';
            $auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])){
                
                if($_POST['username'] === "admin" | $_POST['username'] === "Admin"){
                    header('Location: admin.php');
                }else{
                    header('Location: users.php');
             }
            }else{
                $_SESSION['error'] = 'Identifiants incorrects';
            }
        }
        $form = new \Core\HTML\BootstrapForm($_POST); 
        $this->render('login');
    }
}

?>