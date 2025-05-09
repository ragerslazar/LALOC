<?php
namespace LALOC\controllers;

Class HomeController extends Controller{

    public function __construct() {
    }


    public function index(){
        $this->render('home');
        
    }
}
?>