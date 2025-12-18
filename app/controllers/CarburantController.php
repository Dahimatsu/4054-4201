<?php

namespace app\controllers;

use Flight\Engine;
use app\models\CarburantModel;
use Flight;

class CarburantController
{
    protected Engine $app;

    public function __construct(Engine $app)
    {
        $this->app = $app;
    }

    public function getCarburants()
    {
        $carburantModel = new CarburantModel(Flight::db());
        return $carburantModel->getCarburants();
    }

    public function getConducteur($id)
    {
        $carburantModel = new CarburantModel(Flight::db());
        $carburant = $carburantModel->getCarburant($id);

        if ($carburant != null) {
            return $carburant;
        }

        return null;
    }

    public function modifyCarburant()
    {
        $data = Flight::request()->data;
        $carburantModel = new CarburantModel(Flight::db());
        $carburantModel->modifyCarburant($data);

        Flight::redirect('/carburant/');
    }
}