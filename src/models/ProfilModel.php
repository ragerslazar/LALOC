<?php

namespace LALOC\models;

use App\Database;
use PDO;

class ProfilModel
{
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getCurrentPasswordModel($id_user) {
        return $this->db->query("SELECT password FROM utilisateur WHERE id_user = :id_user", [":id_user" => $id_user])->fetch();
    }

    public function updatePasswordModel($id_user, $new_password) {
        return $this->db->query("UPDATE utilisateur set password = :pwd WHERE id_user = :id_user", [":pwd" => $new_password, ":id_user" => $id_user]);
    }

}