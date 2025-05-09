<?php
namespace LALOC\controllers;

Class LogoutController extends Controller{

    public function __construct() {
    }


    public function index(){
        $this->render('logout');
        
    }
}
?>