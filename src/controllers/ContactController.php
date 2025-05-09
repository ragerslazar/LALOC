<?php
namespace LALOC\controllers;

Class ContactController extends Controller{

    public function __construct() {
    }


    public function index(){
        $this->render('contact');
        
    }
}
?>