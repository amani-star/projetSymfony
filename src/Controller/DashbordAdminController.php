<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashbordAdminController extends AbstractController
{
    #[Route('/dashbord/admin', name: 'app_dashbord_admin')]
    public function index(): Response
    {
        return $this->render('dashbord_admin/index.html.twig', [
            'controller_name' => 'DashbordAdminController',
        ]);
    }
}
