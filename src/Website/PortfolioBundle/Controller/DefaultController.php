<?php

namespace Website\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebsitePortfolioBundle:Default:index.html.twig');
    }
}
