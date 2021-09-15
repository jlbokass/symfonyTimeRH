<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntriesAndValidationsController extends AbstractController
{
    /**
     * @Route("/entries/and/validations", name="entries_and_validations")
     */
    public function index(): Response
    {
        return $this->render('entries_and_validations/index.html.twig', [
            'controller_name' => 'EntriesAndValidationsController',
        ]);
    }
}
