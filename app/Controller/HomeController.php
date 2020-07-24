<?php
namespace App\Controller;
use Core\Controller\Controller;
use App;

class HomeController extends AppController{

    public function home(){
        $this->template = 'admin/default';
        $this->render('admin.index');
    }

}