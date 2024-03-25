<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DonsController extends AbstractController
{
    /**
     * @Route("/dons", name="dons_page")
     */
    public function index(): Response
    {
        return $this->render('dons/index.html.twig');
    }
}
