<?php

namespace LALOC\models;

use App\Database;

class PasserCommandeModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    private function getDate($id_vehicule) {
        return $this->db->query("SELECT debut_loc, fin_loc FROM vehicule WHERE id_vehicule = :id_vehicule", ["id_vehicule" => $id_vehicule])->fetch();
    }
    public function passerCommandeModel($id_vehicule, $id_user) {
        $update = $this->updateCarAvailability($id_vehicule);
        if ($update->rowCount() > 0) {
            $date_info = $this->getDate($id_vehicule);
            $debut = $date_info["debut_loc"];
            $fin = $date_info["fin_loc"];
            return $this->db->query("INSERT INTO `reservation`(`id_reservation`, `debut_location`, `fin_location`, `date_reservation`, `id_vehicule`, `id_cc`, `id_user`) VALUES (NULL, :debut,:fin,CURRENT_DATE,:id_vehicule,:id_cc,:id_user)", [":debut" => $debut, ":fin" => $fin ,":id_vehicule" => $id_vehicule, ":id_cc" => 1, ":id_user" => $id_user]);
        } else {
            return null;
        }
    }

    private function updateCarAvailability($id_vehicule) {
        return $this->db->query("UPDATE vehicule SET dispo = 0 WHERE id_vehicule = :id_vehicule;", [ ":id_vehicule" => $id_vehicule]);
    }

}