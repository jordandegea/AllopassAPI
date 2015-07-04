<?php

namespace Sinenco\AllopassAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SinencoAllopassAPIBundle:Default:index.html.twig', array('name' => $name));
    }
}
