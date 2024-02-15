<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require '.env';

$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->Mailer = "smtp";
 
try {
    // Paramètres de débogage SMTP (0 pour désactiver le débogage)
    $mail->SMTPDebug = 0;

    // Configuration du serveur SMTP
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'maloteaux.stacy@gmail.com';
    $mail->Password = 'ce mdp est mauvais valontairement';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; // Utilisez le port approprié (587 pour TLS, 465 pour SSL)

    // Configuration de l'émetteur et du destinataire
    $mail->setFrom('maloteaux.stacy@gmail.com', 'Tess mltx');
    $mail->addAddress('maloteaux.stacy@gmail.com', 'Tess mltx');

    // Contenu de l'email
    $mail->isHTML(true);
    $mail->Subject = 'Sujet de l\'email';
    $mail->Body = 'Contenu de l\'email en HTML';

    // Envoyer l'email
    $mail->send();

    echo "L'email a été envoyé avec succès!";
} catch (Exception $e) {
    echo "L'email n'a pas pu être envoyé. Erreur de messagerie : {$mail->ErrorInfo}";
}
?>