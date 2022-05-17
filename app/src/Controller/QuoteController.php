<?php

namespace App\Controller;

use App\Repository\QuoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuoteController extends AbstractController {

    #[Route('', name: 'index')]
    public function index(QuoteRepository $quoteRepository): Response
    {
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
