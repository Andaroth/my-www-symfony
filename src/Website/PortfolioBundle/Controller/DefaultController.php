<?php

namespace Website\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
  // Homepage
  public function indexAction()
  {
    $content = $this
    ->get('templating')
    ->render('WebsitePortfolioBundle:Default:page/index.html.twig',
            array(
              'page_title' => "Welcome !"
            ));
    return new Response($content);
  } // indexAction() end
  // Other pages
  public function pageAction($page) {
    switch ($page) { // Treatment
      // About
      case 'about': case 'more.php':
        $page = "about"; 
        $pagetitle = "Who am I ?";
        break;
      // Portfolio
      case 'portfolio':
        $page = "portfolio"; 
        $pagetitle = "What do I do ?";
        break;
      // Unknown pages
      default: 
        $page = "404"; 
        $pagetitle = "Wow ! An error occured...";
        break;
    }
    // Render
    $content = $this
    ->get('templating')
    ->render('WebsitePortfolioBundle:Default:page/'.$page.'.html.twig',
            array(
              'page_title' => $pagetitle
            ));
  }
}
