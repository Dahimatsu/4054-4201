<?php

namespace App\Models;

use PDOException;

class ChauffeurModel {
    private $database;
    private $id_chauffeur;
    private $nom;
    private $prenom;

    public function __construct($database) {
        $this->database = $database;
    }

    


}