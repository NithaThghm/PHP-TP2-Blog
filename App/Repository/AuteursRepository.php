<?php

namespace App\Repository;
require_once 'App\Service\Database.php';

use App\Service\Database;
use PDO;
use PDOException;

class auteursRepository extends Database
{
//    public function addAuteur(){
//
//    }

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

    public function getCitationByAuteur()
        {
            $stmt = $this->db->prepare("SELECT * FROM auteurs INNER JOIN citations WHERE auteurs.id = citations.id_auteur");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $ac = $stmt->fetchAll();
            if (!$ac) {
                throw new PDOException("Could not find author in database");
            }
            $stmt = null;
        return $ac;
    }


//
//    public function updateAuteur(){
//
//    }
//
//    public function delete(){
//
//    }
}


//$auteurs = [];
//        foreach ($arr as $auteur) {
//            $auteur->setId($auteur['id']);
//            $auteur->setNom($auteur['nom']);
//            $auteur->setPrenom($auteur['prenom']);
//            $auteurs[] = $auteur;
//        }