<?php 

namespace App\Controller;
use Core\Controller\Controller;

class AppController extends Controller{

    protected $template = "login";

    public function __construct(){
        $this->viewPath = ROOT . "/app/Views/";
    
    }
}

?>