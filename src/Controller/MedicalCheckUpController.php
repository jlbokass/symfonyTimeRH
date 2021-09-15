<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_MANAGER", "ROLE_GESTIONNAIRE")
 */
class MedicalCheckUpController extends AbstractController
{
    /**
     * @Route("/medical/check/up", name="medical_check_up")
     */
    public function index(): Response
    {
        return $this->render('medical_check_up/index.html.twig', [
            'controller_name' => 'MedicalCheckUpController',
        ]);
    }
}
