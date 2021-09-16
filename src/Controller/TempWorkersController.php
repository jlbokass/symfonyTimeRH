<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
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
        return $this->render('temp_workers/index.html.twig');
    }

    /**
     * @Route("/temp/workers/new", name="temp_workers_new")
     *
     * @return Response
     */
    public function new(): Response
    {
        return $this->render('temp_workers/new.html.twig');
    }
}
