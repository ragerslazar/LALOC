<?php
namespace LALOC\controllers;

Class DashboardController extends Controller{

    public function __construct() {
    }


    public function index(){
        if (!isset($_SESSION["user"])) {
            $_SESSION["loginNeeded"] = "Vous devez être connecté pour accéder à cette page.";
            header("Location: home");
        } else {
            $this->render('dashboard');
        }
        
    }
}
?>