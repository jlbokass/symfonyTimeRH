<?php

namespace App\Controller;

use App\Entity\RhRequests;
use App\Form\RhRequestFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_USER")
 */
class RhRequestController extends AbstractController
{
    /**
     * @Route("/rh/request", name="rh_request")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('rh_request/index.html.twig');
    }

    /**
     *  @Route("/rh/request/new", name="rh_request_new")
     *
     * @return Response
     */
    public function new(Request $request): Response
    {
        $rhRequest = new RhRequests();

        $rh_request_form = $this->createForm(RhRequestFormType::class, $rhRequest);

        $rh_request_form->handleRequest($request);
        if ($rh_request_form->isSubmitted() && $rh_request_form->isValid()) {
            $rhRequest = $rh_request_form->getData();

            $this->addFlash(
                'success',
                'Demande RH envoyé'
            );

            return $this->redirectToRoute('rh_request');
        }

        return $this->render('rh_request/new.html.twig', [
            'form' =>$rh_request_form->createView(),
        ]);
    }
}
