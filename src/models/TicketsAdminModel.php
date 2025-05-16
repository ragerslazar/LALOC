<?php
namespace LALOC\models;
use App\Database;
use PDO;

class TicketsAdminModel {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function fetchTicketsModel() {
        return $this->db->query("SELECT * FROM support;")->fetchAll();
    }

    public function updateTicketsStatusModel($statut, $id_support) {
        return $this->db->query("UPDATE `support` SET `statut` = :statut WHERE `id_support` = :id_support", [":statut" => $statut, ":id_support" => $id_support]);
    }
}
?>