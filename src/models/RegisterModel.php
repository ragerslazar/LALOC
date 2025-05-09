<?php
namespace LALOC\models;
use App\Database;

class RegisterModel {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function inscriptionModel($civilite, $prenom, $nom, $adresse, $ville, $code_postal, $email, $password) {
      $mdp = password_hash($password, PASSWORD_BCRYPT);
        return $this->db->query("INSERT INTO `utilisateur`(`id_user`, `civilite`, `prenom`, `nom`, `type`, `adresse`, `ville`, `code_postal`, `email`, `password`) VALUES (NULL, :civilite, :prenom, :nom, :user, :adresse, :ville, :cp, :email, :pwd)", 
        [
            ":civilite" => $civilite,
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":user" => "user",
            ":adresse" => $adresse,
            ":ville" => $ville,
            ":cp" => $code_postal,
            ":email" => $email,
            ":pwd" => $mdp
        ]
        );
    }
}
?>