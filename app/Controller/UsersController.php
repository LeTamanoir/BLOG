<?php 

namespace App\Controller;
use Core\Controller\Controller;
use Core\Table\Table;
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

    public function textEditor(){
        $this->template = 'admin/default';

        if(!empty($_POST)){
            //$attributes = [$_POST['title'],$_POST['content']];
            //$this->query("INSERT INTO posts SET title = ?, content = ?", $attributes, true);
            die('ok');
        }
        $form = new \Core\HTML\TextEditorForm($_POST);
        $this->render('users.textEditor', compact('form'));
    }
}

?>