<?php
namespace App\Controller;
use Core\Controller\Controller;


class TextEditor extends AppController{

    public function textEditor(){
        $this->template = 'admin/default';
        $this->render('users.textEditor');
        
    }
}


?>