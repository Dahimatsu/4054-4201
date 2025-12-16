<?php

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

    $router->get('/chauffeur', function () use ($app) {
        $app->render('layout', ['page' => "chauffeur.php"]);
    });

}, [SecurityHeadersMiddleware::class]);