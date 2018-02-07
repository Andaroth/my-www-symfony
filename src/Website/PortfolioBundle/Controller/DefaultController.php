<?php

namespace Website\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
  // Page render
  private function loadPage($res,$pagetitle) {
    return $this
    ->get('templating')
    ->render('WebsitePortfolioBundle:Default:page/'.$res.'.html.twig',
            array(
              'page_title' => $pagetitle
            ));
  } // loadPage() end
  // Homepage
  public function indexAction()
  {
    $res = "index";
    $pagetitle = "Welcome !";
    // render
    $this->loadPage($res,$pagetitle);
  } // indexAction() end
  // Other pages
  public function otherAction($page) {
    switch ($page) { // Treatment
      // About
      case 'about': case 'more.php':
        $res = "about"; 
        $pagetitle = "Who am I ?";
        break;
      // Portfolio
      case 'portfolio':
        $res = "portfolio"; 
        $pagetitle = "What do I do ?";
        break;
      // Unknown pages
      default: 
        $res = "404"; 
        $pagetitle = "Wow ! An error occured...";
        break;
    }
    // Render
    $this->loadPage($res,$pagetitle);
  } // otherAction() end
}