<?php

//require_once 'View/front/partial/header.php';
require_once 'App/Service/Database.php';
require_once 'App/Repository/AuteursRepository.php';
require_once 'App/Repository/CitationRepository.php';
//require_once 'View/front/Carte.php';
require_once 'App/Controller/Front/HomeController.php';
require_once 'App/Service/Router.php';

use App\Repository\CitationRepository;
use App\Repository\AuteursRepository;
use App\Service\Database;
use App\Controller\Front\HomeController;
//require_once 'config/config.php';



//$auteur = new AuteursRepository();
//var_dump($auteur->findAll());

//$citations = new CitationRepository();
//var_dump($citations->findAll());



//$ac = new AuteursRepository();

//var_dump($ac->getCitationByAuteur());

$router = new Router($_GET['url']);

$router->get('/', function () {
    echo (new HomeController())->invoke();
});

$router->get('/add', function () {
    (new HomeController())->add();
});

$router->run();




//require_once 'View/front/partial/footer.php';