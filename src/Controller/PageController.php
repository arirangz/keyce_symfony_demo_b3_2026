<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $movies = [
            ['title' => 'Inception', 'director' => 'Christopher Nolan'],
            ['title' => 'The Matrix', 'director' => 'Lana Wachowski, Lilly Wachowski'],
            ['title' => 'Interstellar', 'director' => 'Christopher Nolan'],
        ];

        return $this->render('page/index.html.twig', [
            'name' => "John Doe",
            'age' => 30,
            'movies' => $movies,
        ]);
    }
    #[Route('/', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig');
    }
}
