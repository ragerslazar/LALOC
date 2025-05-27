<?php
 namespace LALOC\controllers;
Class Controller {
    protected function render(string $view, array $data = null){
        if ($data != null) {
            extract($data);
        }
        ob_start();
        include("../views/$view.php");
        $contenue = ob_get_clean();
        include('../views/template/template.php');
    }

    protected function checkValues($array): bool {
        $empty = false;
        foreach ($array as $val) {
            if (!isset($_POST[$val]) || empty($_POST[$val])) {
                $empty = true;
            }
        }
        return $empty;
    }
}
?>