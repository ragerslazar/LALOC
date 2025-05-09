<?php
namespace LALOC\controllers;

use LALOC\models\LouerModel;

Class LouerController extends Controller{
    private $louerModel;
    public function __construct() {
        $this->louerModel = new LouerModel();
    }

    private function consulterAnnoncesController() {
        return $this->louerModel->consulterAnnoncesModel();
    }

    private function vehiculeFilteredMarqueController($marque) {
        return $this->louerModel->vehiculeFilteredMarqueModel($marque);
    }

    private function vehiculeFilteredPrixController($marque) {
        return $this->louerModel->vehiculeFilteredPrixModel($marque);
    }

    private function vehiculeFilteredMarquePrixController($marque, $prix) {
        return $this->louerModel->vehiculeFilteredMarquePrixModel($marque, $prix);
    }

    private function filtresController() {
        return $this->louerModel->filtresModel();
    }

    private function sousfiltresController() {
        return $this->louerModel->sousfiltresModel();
    }

    public function index(): void{
        $filtres = $this->filtresController();
        $sousFiltres = $this->sousfiltresController();
        $vehicules = null;

        if (isset($_GET["Marque"]) && (isset($_GET["Prix"]) == null)) {
            $currentFiltre = $_GET["Marque"];
            $vehicules = $this->vehiculeFilteredMarqueController($currentFiltre);

        } elseif (isset($_GET["Prix"]) && (isset($_GET["Marque"]) == null)) {
            $currentFiltre = $_GET["Prix"];
            $vehicules = $this->vehiculeFilteredPrixController($currentFiltre);

        } elseif (isset($_GET["Prix"]) && isset($_GET["Marque"])) {
            $currentFiltre = $_GET["Marque"];
            $currentFiltre2 = $_GET["Prix"];
            $vehicules = $this->vehiculeFilteredMarquePrixController($currentFiltre, $currentFiltre2);

        } else {
            $vehicules = $this->consulterAnnoncesController();
        }
        $this->render('louer', compact("filtres", "vehicules", "sousFiltres"));
    }
}
?>