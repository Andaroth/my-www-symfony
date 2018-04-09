<?php

namespace Website\MicroAppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {

    }

    public function shoeAction()
    {
        return $this->render('WebsiteMicroAppsBundle:Default:shoeconceptor/index.html.php');
    }

    public function pacpouleAction()
    {
        return $this->render('WebsiteMicroAppsBundle:Default:pacpoule/index.html.php');
    }

    public function cookiemasterAction()
    {
        return $this->render('WebsiteMicroAppsBundle:Default:cookiemaster/index.html.php');
    }
}
