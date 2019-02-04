<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        $images = [
            '01.JPG',
            '01.JPG',
            '01.JPG',
            '01.JPG',
            '01.JPG',
            '01.JPG',
        ];

        return $this->render('home/index.html.twig', ['images' => $images]);
    }
}
