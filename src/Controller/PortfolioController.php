<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig');
    }

    #[Route('/experience', name: 'experience')]
    public function experience(): Response
    {
        return $this->render('portfolio/experience.html.twig');
    }

    #[Route('/hobby', name: 'hobby')]
    public function hobby(): Response
    {
        return $this->render('portfolio/hobby.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('portfolio/contact.html.twig');
    }
}
