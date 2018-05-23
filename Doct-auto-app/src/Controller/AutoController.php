<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AutoController extends Controller
{
    /**
     * @Route("/auto", name="auto")
     */
    public function index()
    {
        return $this->render('auto/index.html.twig', [
            'controller_name' => 'AutoController',
        ]);
    }
}
