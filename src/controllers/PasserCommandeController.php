<?php

namespace LALOC\controllers;


use LALOC\models\PasserCommandeModel;

class PasserCommandeController extends Controller {
    private $passerCommandeModel;

    public function __construct() {
        $this->passerCommandeModel = new passerCommandeModel();
    }

    private function passerCommandeController($id_vehicule, $id_user) {
        return $this->passerCommandeModel->passerCommandeModel($id_vehicule, $id_user);
    }
    public function index() {
        $array = null;
        if (isset($_SESSION["user"])) {
            if ($_GET["method"] == "cb") {
                $array = ["cb-number", "cb-exp"];
            } else if ($_GET["method"] == "ch") {
                $array = ["ch-number"];
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST["submit-pay"])) {
                $values = $this->checkValues($array);
                if (!$values) {
                    $insertRes = $this->passerCommandeController($_GET["vehicule"], $_SESSION["user"][0]["id_user"]);
                    if ($insertRes->rowCount() > 0) {
                        $_SESSION["pay"] = "Paiement effectué avec succès ! Retrouvez votre réservation sur Mes commandes !";
                    } else {
                        $_SESSION["form_error"] = "Erreur ! Veuillez réessayer plus tard ou contacter le support.";
                    }
                } else {
                    $_SESSION["form_error"] = "Des données sont manquantes";
                }
            }
        } else {
            $_SESSION["loginNeeded"] = "Vous devez être connecté pour accéder à cette page.";
            header("Location: home");
        }

        $this->render('order');
    }
}