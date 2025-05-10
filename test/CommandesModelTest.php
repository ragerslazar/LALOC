<?php

use LALOC\models\CommandesModel;
use PHPUnit\Framework\TestCase;

class CommandesModelTest extends TestCase {

    private $commandesModel;
    public function setUp(): void {
        $this->commandesModel = new CommandesModel();
    }

    public function testObject() {
        $this->assertNotNull($this->commandesModel);
    }

    public function testGetCommandes() {
        $commande = $this->commandesModel->commandesClientModel(11);
        $this->assertNotEmpty($commande);
        $this->assertNotEmpty($commande[0]);
        $this->assertArrayHasKey("id_reservation", $commande[0]);
        $this->assertNotEmpty($commande[0]["id_reservation"]);
    }

        public function testGetCommandesFail() {
        $commande = $this->commandesModel->commandesClientModel(1);
        $this->assertEmpty($commande);
    }
}
?>