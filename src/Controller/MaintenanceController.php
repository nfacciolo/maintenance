<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MaintenanceController extends AbstractController
{
    #[Route(
        '/{path}',
        name: 'maintenance_page',
        requirements: ['path' => '.*'],
        defaults: ['path' => ''],
        methods: ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS']
    )]
    public function maintenance(): Response
    {
        $response = $this->render('base.html.twig');
        $response->setStatusCode(Response::HTTP_SERVICE_UNAVAILABLE); // 503
        $response->headers->set('Retry-After', '3600'); // 1 heure

        return $response;
    }
}