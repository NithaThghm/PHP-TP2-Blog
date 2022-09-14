<?php

namespace App\Controller\Front;

require_once 'App/Service/View.php';
require_once 'App/Form/FormCitation.php';

use App\Form\FormCitation;
use App\Repository\CitationRepository;
use App\Service\View;


class HomeController
{
    use View;

    private CitationRepository $citationRepository;

    public function __construct()
    {
        $this->citationRepository = new CitationRepository();
        //$this->CitationRepository = new CitationRepository();
    }

    public function invoke(): string
    {
        return $this->render(
            SITE_NAME . ' - HomePage',
            'front/home.php',
            [
                'citations' => $this->citationRepository->getCitationByAuteur(),
                'formCitation' => FormCitation::buildAddCitation()
            ]);
    }

    public function add()
    {

    }

}