<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends Controller
{
    /**
     * @Route("/view", name="view")
     */
    public function indexAction(Request $request)
    {
        $image = '01.JPG';

        return $this->render('detail/index.html.twig', ['image' => $image]);
    }
}
