<?php

namespace Website\PortfolioBundle\Services\Mailer;

use Symfony\Component\HttpFoundation\Request;

class WebsitePortfolioMailer
{
  private $mailer;
  public function __construct(\Swift_Mailer $mailer)
  {
    $this->mailer = $mailer;
  }
  public function sendMail(\Swift_Mailer $mailer,$name,$from,$msg) {
    $message = (new \Swift_Message("[ax.be] ".$name))
    ->setFrom($from)
    ->setTo('ax.fiolle@gmail.com')
    ->setBody(
      $this->render($msg),
      'text/plain');
    return $mailer->send($message);
  } // sendMail() end
  public function prepareMail(Request $request)
  {
    $defaultData = array(
      'name' => 'no name',
      'email' => 'no mail',
      'msg' => 'no msg'
    );
    $form = $this->createFormBuilder($defaultData)
    ->add('name', TextType::class)
    ->add('email', EmailType::class)
    ->add('msg', TextareaType::class)
    ->add('send', SubmitType::class)
    ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $data = $form->getData();
      $name = $data['name']; 
      $from = $data['email'];
      $msg = $data['msg'];
    }
    // next
    $this->sendMail()
  } // prepareMail end
} // class end