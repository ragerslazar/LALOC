<?php

namespace LALOC\models;

use App\Database;

class ProductDetailsModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getProductByIdModel($id) {
        return $this->db->query("SELECT * FROM vehicule WHERE id_vehicule = :id", [":id" => $id])->fetch();
    }

    public function getGarageByCarModel($id) {
        return $this->db->query("SELECT vehicule.id_vehicule, garage.* FROM garage JOIN vehicule on vehicule.id_garage = garage.id_garage WHERE vehicule.id_vehicule = :id", [":id" => $id])->fetch();
    }
}