<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_USER")
 */
class RhRequestController extends AbstractController
{
    /**
     * @Route("/rh/request", name="rh_request")
     */
    public function index(): Response
    {
        return $this->render('rh_request/index.html.twig', [
            'controller_name' => 'RhRequestController',
        ]);
    }
}
