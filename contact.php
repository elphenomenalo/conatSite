<?php
include_once("Navbar/nav.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Charger l'autoloader de Composer (si vous utilisez Composer)
// require 'vendor/autoload.php';

// Inclure manuellement PHPMailer (si vous n'utilisez pas Composer)
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

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
        $mail->SMTPDebug = 0; // Activer le débogage
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'elphenomenalo@gmail.com';
        $mail->Password   = 'iqtbaozmjflybqsz'; // Mot de passe d'application
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="contact-title" data-aos="fade-down">Contact</h2>
            
            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right">
                    <div class="info-item">
                        <i data-lucide="mail" class="info-icon"></i>
                        <div class="info-text">
                            <p class="info-label">Email</p>
                            <p class="info-value">vpenjcitogo@gmail.com</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i data-lucide="phone" class="info-icon"></i>
                        <div class="info-text">
                            <p class="info-label">Téléphone</p>
                            <p class="info-value">+228 90 61 00 40 | +228 98 68 43 14</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <h3 class="social-title">Suivez-nous</h3>
                        <div class="social-icons">
                            <a href="https://facebook.com" class="social-icon" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://instagram.com" class="social-icon" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://linkedin.com" class="social-icon" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-form" data-aos="fade-left">
                    <h3 class="form-title">Envoyez-nous un message</h3>
                    <form class="form" method="POST">
                        <div class="form-group">
                            <label for="name" class="form-label">Nom complet</label>
                            <input type="text" id="name" name="name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" rows="4" class="form-input" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submitMail" class="submit-button">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer" data-aos="fade-up">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <img src="images/logo.png" alt="JCI Togo Logo" class="footer-logo" data-aos="fade-right">
                    <p class="footer-text">Jeune Chambre Internationale Togo</p>
                </div>

                <div class="footer-section">
                    <h3 class="footer-heading">Liens utiles</h3>
                    <ul class="footer-links">
                        <li><a href="/mentions-legales" class="footer-link">Mentions légales</a></li>
                        <li><a href="/confidentialite" class="footer-link">Politique de confidentialité</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3 class="footer-heading">Contact</h3>
                    <ul class="footer-links">
                        <li class="footer-text">Email: vpenjcitogo@gmail.com</li>
                        <li class="footer-text">Tél: +228 90 61 00 40 | +228 98 68 43 14</li>
                    </ul>
                </div>
            </div>

            <div class="footer-copyright">
                <p class="footer-text">© JCI Togo 2025 - Tous droits réservés</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>