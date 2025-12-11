<?php

// use app\controllers\ProductController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** @var Engine $app */
/** @var Router $router */

$router->group('', function (Router $router) use ($app) {


    $router->get('/', function () use ($app) {
        $app->render('layout', ['page' => "accueil.php"]);
    });

}, [SecurityHeadersMiddleware::class]);