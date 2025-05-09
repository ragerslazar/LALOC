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
}
?>