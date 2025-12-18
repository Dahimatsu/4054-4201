<?php

namespace app\controllers;

use Flight\Engine;
use app\models\MotoModel;
use Flight;

class MotoController
{
    protected Engine $app;
    public function __construct(Engine $app) {
        $this->app = $app;
    }

    public function getMotos(){
        $motoModel = new MotoModel(Flight::db());
        return $motoModel->getMotos();
    }

    public function getMoto($id){
        $motoModel = new MotoModel(Flight::db());
        return $motoModel->getMoto($id);
    }

    public function insererPlanning(){
        $data = Flight::request()->data;
        $motoModel = new MotoModel(Flight::db());
        if($motoModel->verifyPlanning($data['id_conducteur'], $data['date_planning']) === false){
            $motoModel->insererPlanning($data);
            Flight::redirect('/course/planning');
        } else {
            Flight::redirect('/course/planning-error');
        }
    }
}