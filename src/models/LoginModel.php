<?php
namespace LALOC\models;
use App\Database;
use PDO;

class LoginModel {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function connexionModel($email, $password) {
        $result = $this->db->query("SELECT * FROM utilisateur WHERE email = :mail", [":mail" => $email])->fetchAll(PDO::FETCH_ASSOC);
    
        if (isset($result[0]["password"])) {
            if(password_verify($password, $result[0]["password"])) {
                return $result;
            }
        }

        return null;
    }
}
?>