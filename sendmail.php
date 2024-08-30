<?php

session_start();

require 'vendor/autoload.php';

if(isset($_POST['submit']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $attention = $_POST['attention'];
    $offertpart = $_POST['offertpart'];
    $choix = $_POST['choix'];
    $reception = $_POST['reception'];
    $reglement = $_POST['reglement'];


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->Username   = 'lepolak01@gmail.com';                   //SMTP username
        $mail->Password   = 'cpqyglcrujdwvavp';                       //SMTP password

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption PHPMailer::ENCRYPTION_SMTPS = 465
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('lepolak01@gmail.com', 'Lepolak01');
        $mail->addAddress('lepolak01@gmail.com', 'Threonaum');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New enquiry - Threonaum';
        $mail->Body    = '<h3>Bonjour, vous avez un nouveau mail pour un bon cadeau</h3>
            <h4>Nom : '.$nom.'</h4>
            <h4>Prénom : '.$prenom.'</h4>
            <h4>Email : '.$mail.'</h4>
            <h4>A l attention de : '.$attention.'</h4>
            <h4>Offert par : '.$offertpart.'</h4>
            <h4>Prestation, Durée ou Valeur : '.$choix.'</h4>
            <h4>Par mail ou directement au salon : '.$reception.'</h4>
            <h4>Mode de paiement : '.$reglement.'</h4>
        
        ';
        
        if ($mail->send())
        {
            $_SESSION['status'] = "Merci pour votre bon cadeau, nous vous contactons rapidement.";
            header("location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
        }
        else
        {
            $_SESSION['status'] = "Le bon cadeau n'a pas pu être envoyé. Mailer Error: {$mail->ErrorInfo}";
            header("location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
        }
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}
else
{
    header('location: index.php');
    exit(0);
}


?>