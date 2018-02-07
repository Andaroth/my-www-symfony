<?php 
    
    // no Token
    if (isset($_POST['stripeToken'])) 
    {

        // if post method success
        if (
            (filter_var($receipt_email, FILTER_VALIDATE_EMAIL)) &&
            !empty($name) &&
            !empty($address_line1) &&
            !empty($token)
           ) {
            /*
            require('./php/incl/Stripe/init.php');
            $amount = $amount*100;
            \Stripe\Stripe::setApiKey($skTest);
            $charge = \Stripe\Charge::create(array(
                'amount' => $amount, 
                'currency' => 'eur', 

                'source' => $token,

                'receipt_email' => $receipt_email,

                'description' => $description
            ));*/
            
            //echo $charge;
            
            // mail
            if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#",$myMail)) 
            {
                $passage_ligne = "\r\n";
            }
            else
            {
                $passage_ligne = "\n";
            }
            $boundary = "-----=".md5(rand());
            
            $header = "From: \"".$name." (Formulaire site)\" <".$myMail.">".$passage_ligne;
            $header.= "Reply-to: \"".$name."\" <".$receipt_email.">".$passage_ligne;
            $header.= "MIME-Version: 1.0".$passage_ligne;
            $header.= "X-Priority: 1".$passage_ligne;
            $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

            //=====Création du message.
            $message = $passage_ligne."--".$boundary.$passage_ligne;
            //=====Ajout du message au format texte.
            $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
            $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
            $message.= $passage_ligne.$description.$passage_ligne;
            //==========
            $message.= $passage_ligne."--".$boundary.$passage_ligne;

            $sendMail = mail($myMail,"Commande ".$timeID." (".$name." - ".$address_line1.")",$message,$header);
            $succesMail = '<div class="mailsent"><p>Merci de votre confiance ! Votre commande a bien été reçue !</p></div>';
            $failMail = '<div class="mailsent mailUnsent"><p>Je regrette, le courrier n\'est pas parti.</p></div>';


            if ($sendMail) {
                echo $succesMail; 
            }
            else {
                echo $failMail; 
            }
            

            // mail
            
            die();
        
        }
        // if fields fail
        else {
            echo("Erreur: données de paiement incorrectes");
            die();
        }
        
    } // isset