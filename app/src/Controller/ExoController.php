<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExoController extends AbstractController
{
    #[Route(
        '/exo/candidat/{name}',
        name: 'exo',
        methods: ['GET', 'POST']
    )]
    public function index(string $name): Response
    {
//        $params = [
//            'name' => 'Philippe',
//            'firstname' => 'W.'
//        ];
//
//        $params = array(
//            'name' => 'Philippe',
//            'firstname' => 'W.'
//        );
//
//        $name = 'Philippe';
//        $firstname = 'W.';

//        return $this->render('exo/index.html.twig', compact('name'));
//        return $this->render('exo/index.html.twig', array('name' => $name));
        return $this->render('exo/index.html.twig', [
            'name'  => $name,
        ]);
    }


    #[Route(
        '/exo/candidat/numero/{numeroSecuriteSociale}',
        name: 'get_numero_secu_sociale',
        requirements: [
            'numeroSecuriteSociale' => '\d+',
        ],
        methods: ['GET']
    )]
    public function getNumeroSecuriteSociale(int $numeroSecuriteSociale)
    {

        return $this->render('exo/numeroSecuriteSociale.html.twig', [
            'numeroSecuriteSociale'  => $numeroSecuriteSociale,
        ]);
    }
}
