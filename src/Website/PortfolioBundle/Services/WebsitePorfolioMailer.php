<?php

namespace Website\PortfolioBundle\Services\Mailer;

class WebsitePortfolioMailer
{
  private $mailer, $name, $from, $msg;
  public function __construct(\Swift_Mailer $mailer,$name,$from,$msg)
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
} // class end