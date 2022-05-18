<?php

namespace App\Controller;

use App\Repository\QuoteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuoteController extends AbstractController {

    #[Route('', name: 'index')]
    public function index(QuoteRepository $quoteRepository): Response|RedirectResponse
    {
        // avec generateUrl
        // $url = $this->generateUrl(
        //     'exo_index', 
        //     ['name' => 'Generate URL'],
        //     UrlGeneratorInterface::ABSOLUTE_URL);

        // // dd($url);
        // return $this->redirect($url);

        // redirection 
        // return $this->redirectToRoute('exo_index', ['name' => 'Jean Dupont']);

        // return $this->redirect('http://www.google.com');

        $quotes = $quoteRepository->findAll();
        
        // if (count($quotes) > 12) {
        //     $quotes = [];
        // }

        return $this->render(
            'quote/citations.html.twig', [
                'quotes' => $quotes,
            ]
        );
    }
}
