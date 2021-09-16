<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MyCollaboratorsController extends AbstractController
{
    /**
     * @Route("/my/collaborators", name="my_collaborators")
     */
    public function index(): Response
    {
        return $this->render('my_collaborators/index.html.twig', [
            'controller_name' => 'MyCollaboratorsController',
        ]);
    }
}
