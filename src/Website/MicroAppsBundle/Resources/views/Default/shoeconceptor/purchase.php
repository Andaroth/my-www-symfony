<?php 
include('php/lang/lang.php');
include('php/incl/config.php');
include('php/incl/getShoe.php');
include('php/incl/pay.php');
?><!DOCTYPE html>

<html>
    
    <head>
        <title>AT Textile, concepteur de chaussures</title>
        
        <meta name="description" content="Personnalisez votre paire de chaussures !" />
        <meta name="keywords" content="atttextile,nivelles,personnaliser,chaussures,converse,anime,manga,otaku" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/viewport.css" media="screen and (max-width: 1000px)" />
        
    </head>
    
    <body>
        
        <!-- <header>
            <h1><?php echo TXT_HEADER; ?></h1>
        </header> -->
        
        <form method="post" id="clientForm" action="purchase.php" enctype="multipart/form-data">
        
            <div id="sidebar">
                <section id="reviewBill">
                    <h2>Votre commande</h2>
                    <ol>
                        <li><?php echo "Modèle: ".$_SESSION['brand']; ?></li>
                        <li><?php echo "Couleur: ".$_SESSION['color']; ?></li>
                        <li><?php echo "Cheville: ".$_SESSION['ankle']; ?></li>
                        <li><?php echo "Taille: ".$_SESSION['size']; ?></li>
                        <li><?php echo "Prix: <b>".$_SESSION['amount'].",00 EUR</b>"; ?></li>
                    </ol>
                </section>
                <section id="clientID">
                    <h2>Informations client</h2>
                    <ul>
                        <li>
                            <p class="plabel">
                                Entrez les coordonnées de livraison
                            </p>
                        </li>
                        <li>
                            <input class="payInput" type="text" name="clientName" placeholder="Votre nom complet" data-stripe="name" required />
                        </li>
                        
                        
                        <li>
                            <input class="payInput" type="email" name="clientMail" placeholder="Votre adresse e-mail" data-stripe="receipt_email" required />
                        </li>
                        
                        <li>
                            <textarea class="payInput clientAdr" name="clientAdr" data-stripe="address_line1" placeholder="Votre adresse (rue, numéro, code postal et ville)" required></textarea>
                        </li>
                        
                        <li>
                            <p class="plabel">Entrez vos coordonnées bancaires ci-dessous. <br/><small>Vos données ne sont pas enregistrées, vérifiez que votre connexion soit sécurisée.</small></p>
                        </li>
                        <li>
                            <input class="payInput" data-stripe="number" type="text" placeholder="Votre numéro de carte" disabled>
                        </li>
                        <li>
                            <input class="payInput" data-stripe="exp_month" type="text" placeholder="Mois d'expiration (2 chiffres)" disabled>
                        </li>
                        <li>
                            <input class="payInput" data-stripe="exp_year" type="text" placeholder="Année d'expiration (2 chiffres)"  disabled>
                        </li>
                        <li>
                            <input class="payInput" data-stripe="cvc" type="text" placeholder="Code de validation 3 chiffres" disabled>
                        </li>
                        
                        <!--<li>
                            <button class="submit">Acheter</button>
                        </li>-->
                    </ul>
                </section>
            </div>
            
            <input type="hidden" value="BE" data-stripe="country" />
        </form>
        
        <section class="screen">
            
            <h2 class="reviewTitle">Aperçu de votre commande</h2>
            
            <p>Vos images :</p>
            <img src="<?php // echo $_SESSION['canvas']; ?>" alt="ensemble preview" class="shipPreview" /><br/>
            <img src="<?php echo $target_file1; ?>" alt="single preview" class="shipPreview" />
            <?php 
            if (isset($target_file2)) {
                echo '<br/><img src="'.$target_file2.'" alt="single preview" class="shipPreview" />';
            }
            ?>
        
        </section>
        
        <!-- This is none of your business -->
        <script type="text/javascript" src="js/jquery.js"></script>
        
        <script type="text/javascript" src="https://js.stripe.com/v2"></script>
        
        <script type="text/javascript" src="js/stripe.js"></script>
        
    </body>
    
</html>