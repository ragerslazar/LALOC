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

        if ((isset($_POST['submit']) || $_SERVER["REQUEST_METHOD"] === "POST")) {
            $array = ["registerCivilite", "registerNom", "registerPrenom", "registerAdresse", "registerVille", "registerCP", "registerEmail", "registerPwd"];
            $values = $this->checkValues($array);

            if (!$values) {
                $civilite = $_POST["registerCivilite"];
                $nom = $_POST["registerNom"];
                $prenom = $_POST["registerPrenom"];
                $adresse = $_POST["registerAdresse"];
                $ville = $_POST["registerVille"];
                $cp = $_POST["registerCP"];
                $email = $_POST["registerEmail"];
                $password = $_POST["registerPwd"];

                try {
                    $insertUser = $this->inscriptionController($civilite, $prenom, $nom, $adresse, $ville, $cp, email: $email, password: $password
                    );
                    if ($insertUser->rowCount() > 0) {
                        $status = "OK";
                    }
                } catch (PDOException $e) {
                    if ($e->getCode() == 23000) {
                        $status = 23000;
                    }
                }
            } else {
                $status = "values_missing";
            }

        }

        $this->render('register', compact("status"));
    }
}
?>