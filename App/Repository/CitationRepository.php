<?php
namespace App\Repository;
require_once 'App\Service\Database.php';
use App\Service\Database;
use PDO;
use PDOException;

class CitationRepository extends Database {
    public function findAll() {
        $stmt = $this->db->prepare("SELECT * FROM citations");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $citations = $stmt->fetchAll();
        if (!$citations) {
            throw new PDOException("Could not find author in database");
        }
        $stmt = null;
        //$auteurs = [];
//        foreach ($arr as $auteur) {
//            $auteur->setId($auteur['id']);
//            $auteur->setNom($auteur['nom']);
//            $auteur->setPrenom($auteur['prenom']);
//            $auteurs[] = $auteur;
//        }
        return $citations;
    }


}