<?php
namespace LALOC\controllers;

use LALOC\models\RegisterModel;
use PDOException;

Class RegisterController extends Controller{
    private $registerModel;
    public function __construct() {
        $this->registerModel = new RegisterModel();
    }

    private function inscriptionController($civilite, $prenom, $nom, $adresse, $ville, $cp, $email, $password) {
        return $this->registerModel->inscriptionModel($civilite, $prenom, $nom, $adresse, $ville, $cp, $email, $password);
    }

    public function index(){
        $status = null;
        if (isset($_POST["registerPwd"]) && isset($_POST["registerEmail"])) {
            $civilite = $_POST["registerCivilite"] ?? "";
            $nom = $_POST["registerNom"] ?? "";
            $prenom = $_POST["registerPrenom"] ?? "";
            $adresse = $_POST["registerAdresse"] ?? "";
            $ville = $_POST["registerVille"] ?? "";
            $cp = $_POST["registerCP"] ?? "";
            $email = $_POST["registerEmail"] ?? "";
            $password = $_POST["registerPwd"] ?? "";
            try {
                $insertUser = $this->inscriptionController($civilite, $prenom, $nom, $adresse, $ville, $cp, email: $email, password: $password);
                if ($insertUser->rowCount() > 0) {
                    $status = "OK";
                }
            } catch (PDOException $e) {
                if ($e->getCode() == 23000) {
                    $status = 23000;
                }
            }
        }
        $this->render('register', compact("status"));
    }
}
?>