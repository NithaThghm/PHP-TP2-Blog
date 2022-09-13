<?php

require_once 'App/Service/Database.php';
require_once 'App/Repository/AuteursRepository.php';
require_once 'App/Repository/CitationRepository.php';

use App\Repository\CitationRepository;
use App\Repository\AuteursRepository;
use App\Service\Database;

//require_once 'config/config.php';



$auteur = new auteursRepository();
var_dump($auteur->findAll());

$citations = new CitationRepository();
var_dump($citations->findAll());

$ac = new auteursRepository();
var_dump($ac->getCitationByAuteur());