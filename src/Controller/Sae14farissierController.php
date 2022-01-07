<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Sae14farissierController extends AbstractController
{
    /**
     * @Route("/sae14farissier", name="sae14farissier")
     */
    public function index(): Response
    {
        return $this->render('sae14farissier/index.html.twig', [
            'controller_name' => 'Sae14farissierController',
        ]);
    }
}
