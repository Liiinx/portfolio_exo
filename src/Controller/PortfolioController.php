<?php

namespace App\Controller;

use App\Entity\ProfessionnalExperience;
use App\Repository\EducationRepository;
use App\Repository\HobbyRepository;
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
    public function getExperiences(): Response
    {
        $repo = $this->getDoctrine()->getRepository(ProfessionnalExperience::class);
        $experiences = $repo->findBy([], [ 'year' => 'DESC']);
        return $this->render('portfolio/experience.html.twig', [
            'experiences' => $experiences
        ]);
    }

    #[Route('/hobby', name: 'hobby')]
    public function gethobbies(HobbyRepository $hobbyRepository): Response
    {
        $hobbies = $hobbyRepository->findAll();
        return $this->render('portfolio/hobby.html.twig', [
            'hobbies' => $hobbies
        ]);
    }

    #[Route('/education', name: 'education')]
    public function getEducations(EducationRepository $educationRepository): Response
    {
        $educations = $educationRepository->findAll();
        return $this->render('portfolio/education.html.twig', [
            'educations' => $educations
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('portfolio/contact.html.twig');
    }
}
