<?php

namespace Website\PortfolioBundle\Services\Mailer;

use Symfony\Component\HttpFoundation\RequestStack;
// use Symfony\Component\HttpFoundation\Request;

class WebsitePortfolioMailer
{
  private $mailer;
  protected $requestDatas; 
  
  public function __construct(\Swift_Mailer $mailer, RequestStack $requestDatas)
  {
    // prepare
    $this->mailer = $mailer;
    $this->requestDatas = $requestDatas;
    $request = $this->requestDatas->getCurrentRequest();
    // retrieve vars
    $name = $request['name'];
    $from = $request['from'];
    $msg = $request['msg'];
    
    /*// isForm method :
    $defaultData = array(
      'name' => 'no name',
      'email' => 'no mail',
      'msg' => 'no msg'
    );
    $form = $this->createFormBuilder($defaultData)
    ->add('name', TextType::class)
    ->add('from', EmailType::class)
    ->add('msg', TextareaType::class)
    ->add('send', SubmitType::class)
    ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $data = $form->getData();
      $name = $data['name']; 
      $from = $data['from'];
      $msg = $data['msg'];
    } 
    */ // isForm method end
    return $this->sendAction($mailer,$name,$from,$msg); 
  } // constructor end
  public function sendAction($mailer,$name,$from,$msg) {
    // make message
    $message = (new \Swift_Message("[ax.be] ".$name))
    ->setFrom($from)
    ->setTo('ax.fiolle@gmail.com')
    ->setBody(
      $this->render($msg),
      'text/plain');
    // send message
    return $mailer->send($message);
  } // sendMail() end
} // class end