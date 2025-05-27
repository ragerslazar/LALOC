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

    private static function checkValues($array): bool {
        $empty = false;
        foreach ($array as $val) {
            if (!isset($_POST[$val]) || empty($_POST[$val])) {
                $empty = true;
            }
        }
        return $empty;
    }

    public function index(): void{
        $status = null;
        $login = null;
        if ($_SERVER["REQUEST_METHOD"] === "POST" || isset($_POST["submit"])) {
            $array = ["loginEmail", "loginPwd"];
            $values = $this->checkValues($array);

            if (!$values) {
                $email = $_POST["loginEmail"];
                $password = $_POST["loginPwd"];
                $login = $this->connexionController($email, $password);
                if (empty($login)) {
                    $status = "login_failed";
                } else {
                    $status = "OK";
                }
            } else {
                $status = "values_missing";
            }
        }

        if (isset($_SESSION["user"])) {
            header("Location: dashboard");
        }
        $this->render('login', compact("login", "status"));
        
    }
}
?>