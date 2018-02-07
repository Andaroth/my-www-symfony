<?php

namespace Website\MicroAppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function shoeAction()
    {
        return $this->render('WebsiteMicroAppsBundle:Default:shoeconceptor/index.html.php');
    }
}
