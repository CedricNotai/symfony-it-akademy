<?php

namespace App\Controller;

use App\Repository\QuoteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuoteController extends AbstractController {

    #[Route('', name: 'index')]
    public function index(QuoteRepository $quoteRepository): Response|RedirectResponse
    {
        // redirection 
        return $this->redirectToRoute('exo', ['name' => 'Alain Deloin']);


        // $quotes = $quoteRepository->findAll();
        // // if (count($quotes) > 12) {
        // //     $quotes = [];
        // // }
        // return $this->render(
        //     'quote/citations.html.twig', [
        //         'quotes' => $quotes,
        //     ]
        // );
    }
}
