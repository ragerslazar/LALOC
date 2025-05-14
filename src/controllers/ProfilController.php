<?php

namespace LALOC\controllers;

use LALOC\models\ProfilModel;

class ProfilController extends Controller
{
    private $profilModel;

    public function __construct() {
        $this->profilModel = new ProfilModel();
    }

    private function getCurrentPasswordController($id_user) {
        return $this->profilModel->getCurrentPasswordModel($id_user);
    }

    private function updateCurrentPasswordController($id_user, $new_password) {
        return $this->profilModel->updatePasswordModel($id_user, $new_password);
    }
    public function index() {
        if (!isset($_SESSION["user"])) {
            $_SESSION["loginNeeded"] = "Vous devez être connecté pour accéder à cette page.";
            header("Location: home");
        } else {
            if (isset($_POST["old-password"]) && isset($_POST["new-password"]) && isset($_POST["confirm-password"])) {
                $id_user = $_SESSION["user"][0]["id_user"];
                $old_password = $_POST["old-password"];
                $new_password = $_POST["new-password"];
                $confirm_password = $_POST["confirm-password"];

                $current_pwd = $this->getCurrentPasswordController($id_user);
                if (!password_verify($old_password, $current_pwd["password"])) {
                    $_SESSION["password_verification_error"] = "Le mot de passse saisie et votre mot de passe actuel ne correspondent pas";
                } else {
                    if ($new_password !== $confirm_password) {
                        $_SESSION["password_verification_error"] = "Les nouveaux mot de passes saisies ne correspondent pas";
                    } else {
                        $new_pwd_hash = password_hash($confirm_password, PASSWORD_BCRYPT);
                        $update_req = $this->updateCurrentPasswordController($id_user, $new_pwd_hash);
                        if ($update_req->rowCount() > 0) {
                            $_SESSION["password_update_success"] = "Mot de passse modifié avec succès";
                            header("Location: dashboard");
                        }
                    }
                }
            }
            $this->render("profil");
        }
    }
}