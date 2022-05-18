<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// va ajouter un préfixe à toutes les routes du document
#[Route(
    '/exo',
    name: 'exo_'
)]

class ExoController extends AbstractController
{
    #[Route(
        '/candidat/{name}',
        name: 'index',
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
        '/candidat/numero/{numeroSecuriteSociale}',
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

    #[Route(
        '/loto/{min}/{max}',
        name: 'loto'
    )]
    public function loto(int $min, int $max): Response
    {
        $number = random_int($min, $max);
        return new Response('<h2>' . $number . '</h2>');
    }

    #[Route(
        '/alphabet',
        name: 'alphabet'
    )]
    public function tableauAlphabet(): Response
    {
        // $alphabet = 'A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z';
        $string = 'AZERTYUIOPQSDFGHJKLMWXCVBN';
        $alphabet = str_split($string);
        sort($alphabet);
        return $this->render('exo/alphabet.html.twig', [
            'alphabet'  => $alphabet,
        ]);    
    }
}
