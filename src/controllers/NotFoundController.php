<?php
namespace LALOC\controllers;

Class NotFoundController extends Controller{

    public function __construct() {
    }


    public function index(){
        $this->render('notfound');
        
    }
}
?>