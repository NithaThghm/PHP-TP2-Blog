<?php

namespace App\Repository;

require_once 'App\Entity\Auteurs.php';
require_once 'App\Entity\Citations.php';
require_once 'App\Service\Database.php';

use App\Service\Database;
use Auteurs;
use Citations;
use PDO;
use PDOException;

class CitationRepository extends Database
{
    public function getCitationByAuteur(): array
    {
        $stmt = $this->db->prepare("SELECT * FROM auteurs INNER JOIN citations WHERE auteurs.id = citations.id_auteur");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ac = $stmt->fetchAll();
        if (!$ac) {
            throw new PDOException("Could not find author in database");
        }
        $citations = [];
        foreach ($ac as $a) {
            $aut = new Auteurs();
            $aut->setNom($a['nom']);
            $aut->setPrenom($a['prenom']);
            $aut->setId($a['id_auteur']);

            $c = new Citations();
            $c->setCitation($a['citation']);
            $c->setId($a['id']);
            $c->setIdAuteur($a['id_auteur']);
            $c->setAuteur($aut);

            $citations[] = $c;

        }
        $stmt = null;
        return $citations;
    }


}