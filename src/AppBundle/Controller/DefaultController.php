<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AllopassApiConf ;
class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        //$allopass = \AllopassApiConf::getInstance();
        //echo $allopass->api_key ; 
        return $this->render('SinencoAllopassAPIBundle:Defaults:index.html.twig');
    }
}
