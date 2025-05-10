<?php
namespace LALOC\models;
use App\Database;

class HistoriqueCommandesModel {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function commandesClientModel($user_id) {
        return $this->db->query("SELECT Vehicule.*, reservation.* FROM Reservation JOIN Vehicule ON Reservation.id_vehicule = Vehicule.id_vehicule 
        WHERE Reservation.id_user = :user_id;", [":user_id" => $user_id])->fetchAll();
    }
}
?>