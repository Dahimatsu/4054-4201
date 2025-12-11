<?php

namespace app\controllers;

use flight\Engine;
use app\models\Produit;
use Flight;

class ProductController
{
    protected Engine $app;

    public function __construct(Engine $app)
    {
        $this->app = $app;
    }

    public function getProduits()
    {
        $produitModel = new Produit(Flight::db());
        return $produitModel->getProduits();
    }

    public function getProduit($id)
    {
        $produitModel = new Produit(Flight::db());
        $produit = $produitModel->getProduit($id);

        if ($produit != null) {
            return $produit;
        }

        return null;
    }
}