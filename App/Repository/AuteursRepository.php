<?php

namespace App\Repository;
require_once 'App\Service\Database.php';

use App\Service\Database;
use PDO;
use PDOException;

class AuteursRepository extends Database
{
    public function findAll(): array
    {
        $stmt = $this->db->prepare("SELECT * FROM auteurs ORDER BY nom ASC");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $auteurs = $stmt->fetchAll();
        if (!$auteurs) {
            throw new PDOException("Could not find author in database");
        }
        $stmt = null;
        return $auteurs;
    }

}
