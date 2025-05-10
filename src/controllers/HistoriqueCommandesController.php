<?php
namespace LALOC\controllers;

use LALOC\models\HistoriqueCommandesModel;

Class HistoriqueCommandesController extends Controller{

    private $HistoriqueCommandesModel;
    public function __construct() {
        $this->HistoriqueCommandesModel = new HistoriqueCommandesModel();
    }

    private function commandesClientController($user_id) {
        return $this->HistoriqueCommandesModel->commandesClientModel($user_id);
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