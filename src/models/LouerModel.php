<?php
namespace LALOC\models;
use App\Database;

class LouerModel {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function filtresModel() {
        return $this->db->query("SELECT * FROM filtre;")->fetchAll();
    }

    public function sousfiltresModel() {
        return $this->db->query("SELECT * FROM sousfiltre;")->fetchAll();
    }

    public function consulterAnnoncesModel() {
        return $this->db->query("SELECT * FROM vehicule")->fetchAll();
    }

    public function vehiculeFilteredMarqueModel($marque) {
        return $this->db->query("SELECT * FROM vehicule WHERE marque = :marque", [":marque" => $marque])->fetchAll();
    }

    public function vehiculeFilteredPrixModel($prix) {
        return $this->db->query("SELECT * FROM vehicule WHERE prix <= :prix", [":prix" => $prix])->fetchAll();
    }

    public function vehiculeFilteredMarquePrixModel($marque, $prix) {
        return $this->db->query("SELECT * FROM vehicule WHERE marque = :marque AND prix <= :prix", [":marque" => $marque,":prix" => $prix])->fetchAll();
    }
}
?>