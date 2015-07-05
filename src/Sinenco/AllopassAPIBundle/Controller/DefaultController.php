<?php

namespace Sinenco\AllopassAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use AllopassApiConf ;
use Sinenco\AllopassAPIBundle\Model\AllopassApiConf;
use Sinenco\AllopassAPIBundle\API\AllopassAPI ;
class DefaultController extends Controller {

    public function indexAction() {
        $this->get("sinenco_allopass_api.init");
        $allopass = AllopassApiConf::getInstance();
        
        $api = new AllopassAPI();

        $response = $api->getOnetimePricing(array('site_id' => 325410));
        echo $response->getWebsite()->getName(), "\n-----\n";
        foreach ($response->getCountries() as $country) {
            echo $country->getCode(), "\n-----\n";
            echo $country->getName(), "\n-----\n<br />";
        }
        foreach ($response->getMarkets() as $market) {
            var_dump($market);
        }
        return $this->render('default/index.html.twig');
    }

}
