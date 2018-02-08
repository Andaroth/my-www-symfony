<?php

namespace Website\PortfolioBundle\Services\Mailer;

class WebsitePortfolioMailer
{
  public function sendMail($name,$mail,$msg, \Swift_Mailer $mailer) {
    $message = (new \Swift_Message($msg))
    ->setFrom($mail)
    ->setTo('ax.fiolle@gmail.com')
    ->setBody(
        $this->render($msg),
        'text/plain');
    $action = $mailer->send($message);
    return $action;
  } // sendMail() end
} // class end