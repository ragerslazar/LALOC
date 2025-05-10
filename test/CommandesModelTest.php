<?php

use LALOC\models\HistoriqueCommandesModel;
use PHPUnit\Framework\TestCase;

class HistoriqueCommandesModelTest extends TestCase {

    private $HistoriqueCommandesModel;
    public function setUp(): void {
        $this->HistoriqueCommandesModel = new HistoriqueCommandesModel();
    }

    public function testObject() {
        $this->assertNotNull($this->HistoriqueCommandesModel);
    }

    public function testGetCommandes() {
        $commande = $this->HistoriqueCommandesModel->commandesClientModel(11);
        $this->assertNotEmpty($commande);
        foreach ($commande as $c) {
            $this->assertNotEmpty($c);
            $this->assertArrayHasKey("id_reservation", $c);
            $this->assertNotEmpty($c["id_reservation"]);
        }
    }

        public function testGetCommandesFail() {
        $commande = $this->HistoriqueCommandesModel->commandesClientModel(1);
        $this->assertEmpty($commande);
    }
}
?>