<?php
namespace LALOC\controllers;

use LALOC\models\CommandesModel;

Class CommandesController extends Controller{

    private $commandesModel;
    public function __construct() {
        $this->commandesModel = new CommandesModel();
    }

    private function commandesClientController($user_id) {
        return $this->commandesModel->commandesClientModel($user_id);
    }


    public function index(){
        if (!isset($_SESSION["user"])) {
            $_SESSION["loginNeeded"] = "Vous devez être connecté pour accéder à cette page.";
            header("Location: home");
        } else {
            $user_id = $_SESSION["user"][0]["id_user"];
            $orders = $this->commandesClientController($user_id);
            $this->render('commandes', compact("orders"));
        }
    }
}
?>