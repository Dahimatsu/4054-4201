<?php

namespace app\controllers;

use Flight\Engine;
use app\models\ChauffeurModel;
use Flight;

class ChauffeurController
{
    protected Engine $app;

    public function __construct(Engine $app)
    {
        $this->app = $app;
    }

    public function getChauffeur()
    {
        $chauffeurModel = new ChauffeurModel(Flight::db());
        return $chauffeurModel->getChauffeur();
    }

    public function getChauffeurById($id)
    {
        $chauffeurModel = new ChauffeurModel(Flight::db());
        $chauffeur = $chauffeurModel->getChauffeurById($id);

        if ($chauffeur != null) {
            return $chauffeur;
        }

        return null;
    }
}