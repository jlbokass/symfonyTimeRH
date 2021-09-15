<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TempWorkersController extends AbstractController
{
    /**
     * @Route("/temp/workers", name="temp_workers")
     */
    public function index(): Response
    {
        return $this->render('temp_workers/index.html.twig', [
            'controller_name' => 'TempWorkersController',
        ]);
    }
}
