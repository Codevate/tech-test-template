<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * Expose the React app with wildcard route to allow HTML5 routing on the front-end.
     * Lower priority to ensure explicit routes will match first.
     */
    #[Route('/{path}', name: 'app', requirements: ['path' => '.*'], priority: -1)]
    public function index(): Response
    {
        return $this->render('App/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}
