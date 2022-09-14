<?php

namespace App\Controller\Front;

require_once 'App/Service/View.php';
//require_once 'App/Repository/AuteursRepository.php';

use App\Repository\AuteursRepository;
//use App\Repository\CitationRepository;
use App\Service\View;


class HomeController
{
    use View;

    private AuteursRepository $AuteursRepository;

    public function __construct()
    {
        $this->AuteursRepository = new AuteursRepository();
        //$this->CitationRepository = new CitationRepository();
    }

    public function invoke(): string
    {
        return $this->render(
            SITE_NAME . ' - HomePage',
            'front/Carte.php',
            [
//                'formUser' => FormUser::buildLoginUserForm(),
                'Info' => $this->AuteursRepository->getCitationByAuteur()
            ]);
    }
}