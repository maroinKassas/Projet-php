<?php

namespace AsDhry\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AsDhryPlatformBundle:Default:index.html.twig');
    }
}
