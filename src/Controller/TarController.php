<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TarController extends AbstractController
{
    public function index(): Response
    {
         $number = random_int(0,100);
        return $this->render('tar/index.html.twig',['num' => $number]);
        
    }
}
