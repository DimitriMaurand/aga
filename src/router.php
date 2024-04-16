<?php

use src\Controllers\HomeController;
use src\Services\Routing;


$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$routeComposee = Routing::routeComposee($route);


var_dump($route);
switch ($route) {


    case HOME_URL:
        HomeController::index();
        break;
        if ($methode == "GET") {
            HomeController::index();
        } else {
            HomeController::signin();
        }
        break;

    case HOME_URL . "connexion":
        if (!isset($_SESSION['connecté'])) {
            if ($methode == "GET") {
                HomeController::connexion();
            } else {
                HomeController::auth();
            }
        } else {
            header("location: " . HOME_URL . 'dashboardPromo');
        }
        break;

    case HOME_URL . "deconnexion":
        HomeController::deconnexion();
        break;

    case HOME_URL . "dashboardPromo":
        var_dump("je suis bien ici");
        HomeController::dashboardPromo();
        break;
        // if (isset($_SESSION["connecté"])) {
        //     HomeController::dashboardPromo();
        // } else {
        //     header("location: " . HOME_URL . 'bienvenue');
        // }
}

// include __DIR__ . '/apiRouter.php';
