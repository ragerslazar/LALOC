<?php
namespace LALOC\controllers;

use LALOC\models\CommandesModel;
use LALOC\models\TicketsAdminModel;

Class TicketsAdminController extends Controller{

    private $ticketAdminModel;
    public function __construct() {
        $this->ticketAdminModel = new TicketsAdminModel();
    }

    private function fetchTicketsController() {
        return $this->ticketAdminModel->fetchTicketsModel();
    }

    private function updateTicketsStatusController($status, $id_support) {
        return $this->ticketAdminModel->updateTicketsStatusModel($status, $id_support);
    }


    public function index(){
        if (!isset($_SESSION["user"])) {
            $_SESSION["loginNeeded"] = "Vous devez être connecté pour accéder à cette page.";
            header("Location: home");
        } elseif ($_SESSION["user"][0]["type"] !== "admin") {
            $_SESSION["permMissing"] = "Vous n'avez pas la permission d'accéder à cette page.";
            header("Location: home");
        } else {
            if (isset($_GET["actionOpen"])) {
                $id_support = $_GET["actionOpen"];
                $this->updateTicketsStatusController("En cours", $id_support);
            } elseif (isset($_GET["actionClose"])) {
                $id_support = $_GET["actionClose"];
                $this->updateTicketsStatusController("Fermé", $id_support);
            }
            $tickets = $this->fetchTicketsController();
            $this->render('tickets_admin', compact("tickets"));
        }
    }
}
?>