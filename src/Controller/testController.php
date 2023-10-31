<?php

namespace Cwa\SyliusTestPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class testController extends AbstractController
{
    public function index(): Response
    {
        return $this->render("@CwaSyliusTestPlugin/test/test.html.twig");
    }
}
