<?php

  require '../vendor/autoload.php';

  use LALOC\controllers\CommandesController;
  use LALOC\controllers\ContactController;
  use LALOC\controllers\DashboardController;
  use LALOC\controllers\HomeController;
  use LALOC\controllers\LoginController;
  use LALOC\controllers\LogoutController;
  use LALOC\controllers\LouerController;
  use LALOC\controllers\NotFoundController;
use LALOC\controllers\ProfilController;
use LALOC\controllers\RegisterController;
  use LALOC\controllers\ServiceController;
  use LALOC\controllers\TicketsAdminController;

  $url = $_GET["url"] ?? null;
  session_start();
  if ($url == 'home' || $url == "" ) {
    $ctrl = new HomeController();
  } elseif ($url == "service") {
    $ctrl = new ServiceController();
  } elseif ($url == "louer") {
    $ctrl = new LouerController();
  } elseif ($url == "contact") {
    $ctrl = new ContactController();
  } elseif ($url == "login") {
    $ctrl = new LoginController();
  } elseif ($url == "register") {
    $ctrl = new RegisterController();
  } elseif ($url == "logout") {
    $ctrl = new LogoutController();
  } elseif ($url == "dashboard") {
    $ctrl = new DashboardController();
  } elseif ($url == "commandes") {
    $ctrl = new CommandesController();
  } elseif ($url == "tickets_admin") {
    $ctrl = new TicketsAdminController();
  } elseif ($url == "profil") {
      $ctrl = new ProfilController();
  } else {
    $ctrl = new NotFoundController();
  }

  $ctrl->index();
?>