<?php
namespace LALOC\controllers;

use LALOC\models\LoginModel;

Class LoginController extends Controller {

    private $LoginModel;
    public function __construct() {
        $this->LoginModel = new LoginModel();
    }

    private function connexionController($email, $password) {
        return $this->LoginModel->connexionModel($email, $password);
    }

    public function index(): void{
        $status = null;
        $login = null;
        if (isset($_POST["loginEmail"]) && isset($_POST["loginPwd"])) {
            $email = $_POST["loginEmail"];
            $password = $_POST["loginPwd"];
            $login = $this->connexionController($email, $password);
            if (empty($login)) {
                $status = "login_failed";
            } else {
                $status = "OK";
            }
        }

        if (isset($_SESSION["user"])) {
            header("Location: dashboard");
        }
        $this->render('login', compact("login", "status"));
        
    }
}
?>