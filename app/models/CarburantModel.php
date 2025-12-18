<?php

namespace App\Models;

use PDOException;

class CarburantModel
{
    private $database;

    public function __construct($database)
    {
        $this->setDatabase($database);
    }

    public function getDatabase(): mixed
    {
        return $this->database;
    }

    public function setDatabase($database)
    {
        $this->database = $database;
    }

    public function getCarburants()
    {
        $DBH = $this->getDatabase();

        $query = "SELECT c.*, p.prix, p.date_carburant 
                  FROM s3_carburant AS c
                  JOIN s3_prix_carburant AS p
                  ON c.id_Carburant = p.id_Carburant";

        try {
            $STH = $DBH->prepare($query);
            $STH->execute();

            return $STH->fetchAll();
        } catch (PDOException $e) {
            error_log("Erreur : " . $e->getMessage());
            throw $e;
        }
    }

    public function getCarburant($id)
    {
        $DBH = $this->getDatabase();

        $query = "SELECT c.*, p.prix, p.date_carburant 
                  FROM s3_carburant AS c
                  JOIN s3_prix_carburant AS p
                  ON c.id_carburant = p.id_carburant
                  WHERE c.id_carburant = ?";

        try {
            $STH = $DBH->prepare($query);
            $STH->execute([$id]);
            return $STH->fetch();
        } catch (PDOException $e) {
            error_log("Erreur : " . $e->getMessage());
            throw $e;
        }
    }

    public function modifyCarburant($data)
    {
        $DBH = $this->getDatabase();

        $query = "INSERT INTO s3_prix_carburant (prix, date_carburant, id_carburant)
                  VALUES (?, NOW(), ?)";

        try {
            $STH = $DBH->prepare($query);
            $STH->execute([$data['prix'], $data['id_carburant']]);
        } catch (PDOException $e) {
            error_log("Erreur : " . $e->getMessage());
            throw $e;
        }
    }
}