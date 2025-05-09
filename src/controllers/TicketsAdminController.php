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


    public function index(){
        if (!isset($_SESSION["user"])) {
            $_SESSION["loginNeeded"] = "Vous devez être connecté pour accéder à cette page.";
            header("Location: home");
        } else {
            $tickets = $this->fetchTicketsController();
            $this->render('tickets_admin', compact("tickets"));
        }
    }
}
?>