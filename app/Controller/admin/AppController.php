<?php 

namespace App\Controller\Admin;
use Core\Controller\Controller;

class AppController extends Controller{

    protected $template = "admin/default";

    public function __construct(){
        $this->viewPath = ROOT . "/app/Views/";
    
    }
}

?>