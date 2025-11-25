<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(
    path: '/{_locale}',
    name: 'maintenance',
    requirements: [
        '_locale' => 'en|fr|tr',
    ],
    defaults: ['_locale' => 'fr'],
)]
class MaintenanceController extends  AbstractController
{
    #[Route('/', name: '_page', methods: ['GET'])]
    public function maintenance(): Response
    {
        return $this->render('base.html.twig', [
            'current_page' => 'sent_flashe',
        ]);
    }
}