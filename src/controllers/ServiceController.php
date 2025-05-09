<?php
namespace LALOC\controllers;


Class ServiceController extends Controller{

    public function __construct() {
    }


    public function index(){
        $this->render('service');
        
    }
}
?>