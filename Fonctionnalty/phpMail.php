<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Charger l'autoloader de Composer
// require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["submitMail"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["message"];
    $message = "Nom: $name <br> Email: $email <br> Message: $msg";

    $mail = new PHPMailer(true);

    try {
        // Paramètres du serveur SMTP
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Activer le débogage
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'elphenomenalo@gmail.com';
        $mail->Password   = 'iqtb_aozm_jfly_bqsz'; // Mot de passe d'application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Destinataires
        $mail->setFrom('elphenomenalo@gmail.com', 'JCI Togo');
        $mail->addAddress('elphenomenalo@gmail.com', 'Nom Destinataire');

        // Contenu du mail
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message du formulaire de contact';
        $mail->Body    = $message;
        $mail->AltBody = strip_tags($message);

        $mail->send();
        echo 'Message envoyé avec succès !';
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi du mail : {$mail->ErrorInfo}";
    }
}
?>