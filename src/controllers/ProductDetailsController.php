<?php

namespace LALOC\controllers;

use LALOC\models\ProductDetailsModel;

class ProductDetailsController extends Controller {
    private $productDetailsModel;

    public function __construct() {
        $this->productDetailsModel = new ProductDetailsModel();
    }

    private function getProductByIdController($id) {
        return $this->productDetailsModel->getProductByIdModel($id);
    }

    private function getGarageByCarController($id) {
        return $this->productDetailsModel->getGarageByCarModel($id);
    }
    public function index() {
        if ($_GET["vehicule"] == null) {
            header("Location: home");
        } else {
            $id_vehicule = $_GET["vehicule"];
            $details = $this->getProductByIdController($id_vehicule);
            $garageInfo = $this->getGarageByCarController($id_vehicule);
            $this->render("details", compact("details", "garageInfo"));
        }
    }

}