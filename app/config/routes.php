<?php

use app\controllers\chauffeurController;

use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** @var Engine $app */
/** @var Router $router */

if (empty($app) === true) {
    $app = Flight::app();
}

$router->group('', function (Router $router) use ($app) {

    $router->get('/', function () use ($app) {
        $app->render('layout', ['page' => "accueil.php"]);
    });

    $router->get('/chauffeurs', function () use ($app) {
        $chauffeurController = new ChauffeurController($app);
        $chauffeurs = $chauffeurController->getChauffeurs();
        $app->render('layout', ['page' => "chauffeurs.php",'chauffeurs' => $chauffeurs]);
    });

}, [SecurityHeadersMiddleware::class]);