<?php 

    // if page is from the module
    if (isset($_POST['modelValid'])) {
        
        session_start(); 
        $_SESSION['timeID'] = time();
        $timeID = $_SESSION['timeID'];
        
        // get preview
        
        $target_dir = "up/";
        
        // right
        $target_file1 = $target_dir . $timeID ."_right". basename($_FILES["imgSelector1"]["name"]);
        $uploadOk = 1;
        $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["imgSelector1"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
                die();
            }
        }
        // Check if file already exists
        if (file_exists($target_file1)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
            die();
        }
        // Check file size
        if ($_FILES["imgSelector1"]["size"] > 25000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            die();
        }
        // Allow certain file formats
        if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
        && $imageFileType1 != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            die();
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            die();
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["imgSelector1"]["tmp_name"], $target_file1)) {
            } else {
                echo "Sorry, there was an error uploading your file.";
                die();
            }
        }
        
        // left
        if ($_FILES["imgSelector2"]["size"] > 0)
        {
            $target_file2 = $target_dir . $timeID ."_left". basename($_FILES["imgSelector2"]["name"]);
            $uploadOk = 1;
            $imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imgSelector2"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                    die();
                }
            }
            // Check if file already exists
            if (file_exists($target_file2)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
                die();
            }
            // Check file size
            if ($_FILES["imgSelector2"]["size"] > 25000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
                die();
            }
            // Allow certain file formats
            if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
            && $imageFileType2 != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
                die();
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                die();
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["imgSelector2"]["tmp_name"], $target_file2)) {
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    die();
                }
            }
            
        }
        // endleft}


            // get the data for order details
            $_SESSION['model'] = $_POST['modelValid'];
            $_SESSION['brand'] = $_POST['brand'];
            $_SESSION['color'] = $_POST['color'];
            $_SESSION['ankle'] = $_POST['ankle'];
            $_SESSION['size'] = $_POST['size'];    

            $_SESSION['homeTicket'] = $_SESSION['brand']."_".$_SESSION['ankle']."_".$_SESSION['color']."_".$_SESSION['size'];

            switch($_SESSION['brand'])
            {
                case 'noname':
                    $_SESSION['amount'] = $price['noname'];
                    break;
                case 'converse':
                    $_SESSION['amount'] = $price['converse'];
                    break;
                default:
                    $_SESSION['amount'] = "error";
                    die();
            }
    }

    // not module
    else {
        // if Stripe action
        if (isset($_POST['stripeToken'])) 
        {
            session_start();
            $timeID = $_SESSION['timeID'];
            
            $amount = $_SESSION['amount'];
            
            $token = "tok_visa"; // $_POST['stripeToken'];
            
            $name = htmlspecialchars(addslashes($_POST['clientName']));
            $receipt_email = htmlspecialchars(addslashes($_POST['clientMail']));
            $address_line1 = htmlspecialchars(addslashes($_POST['clientAdr']));
            
            $description = "[".$timeID."] ".$name." (".$receipt_email.") : ".$address_line1.", Commande : ".$_SESSION['homeTicket']." => Prix: ".$amount."EUR";
            
        }
        // fail
        else {
            session_unset();
            header('Location: ./index.html');
            die();
        }
        
    }