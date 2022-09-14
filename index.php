<?php

require_once 'Autoloader.php';

use App\Repository\CitationRepository;
use App\Repository\AuteursRepository;
use App\Service\Database;
use App\Controller\Front\HomeController;
use App\Autoloader;

Autoloader::$folderList =
    [
        "App/Entity/",
        "App/Controller/Front/",
        "App/Repository/",
        "App/Exception/",
        "App/Service/",
        "App/Form/",
    ];
Autoloader::register();



$router = new Router($_GET['url']);

$router->get('/', function () {
    echo (new HomeController())->invoke();
});

$router->run();

