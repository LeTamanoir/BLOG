<?php 

namespace App\Controller;
use Core\Controller\Controller;
use App;

class UsersController extends AppController{


    public function login(){

        if(!empty($_POST)){
            $_SESSION['error'] = '';
            $auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])){
                if($_POST['username'] === "admin" | $_POST['username'] === "Admin"){
                    header('Location: admin.php');
                }else{
                    header('Location: user.php');
             }
            }else{
                $_SESSION['error'] = 'Identifiants incorrects';
            }
        }
        $error = $_SESSION['error'];
        $form = new \Core\HTML\BootstrapForm($_POST); 
        $this->render('users.login', compact('form'));
    }
}

?>