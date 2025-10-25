<?php
// Import PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nettoyer et valider les données du formulaire
    $nom = isset($_POST["name"]) ? trim(htmlspecialchars($_POST["name"])) : '';
    $email = isset($_POST["email"]) ? trim(htmlspecialchars($_POST["email"])) : '';
    $sujet = isset($_POST["subject"]) ? trim(htmlspecialchars($_POST["subject"])) : '';
    $message_utilisateur = isset($_POST["message"]) ? trim(htmlspecialchars($_POST["message"])) : '';
    
    // Validation basique - OBLIGATOIRE
    if (empty($nom) || empty($email) || empty($message_utilisateur)) {
        header('Location: contact.php?status=error&message=Champs_manquants');
        exit();
    }
    
    // Validation de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: contact.php?status=error&message=Email_invalide');
        exit();
    }

    // Structurer le message pour l'administrateur
    $message_email_admin = "
    ==================================
    NOUVEAU MESSAGE DEPUIS LE FORMULAIRE CIL&ASSOCIES
    ==================================
    
    **Informations du contact :**
    Nom : $nom
    Email : $email
    Sujet : " . ($sujet ? $sujet : "Non spécifié") . "
    
    **Message :**
    $message_utilisateur
    
    ==================================
    Envoyé le : " . date('d/m/Y à H:i:s') . "
    ==================================
    ";

    // Version HTML pour l'email de l'administrateur
    $message_html_admin = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .header { background: #184E9C; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; }
            .info { background: #f4f4f4; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
            .message { background: #fff; border-left: 4px solid #184E9C; padding: 15px; margin: 15px 0; }
            .footer { background: #eee; padding: 15px; text-align: center; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h2>📧 NOUVEAU MESSAGE CIL&ASSOCIES</h2>
        </div>
        
        <div class='content'>
            <div class='info'>
                <h3>👤 Informations du contact</h3>
                <p><strong>Nom :</strong> $nom</p>
                <p><strong>Email :</strong> <a href='mailto:$email'>$email</a></p>
                <p><strong>Sujet :</strong> " . ($sujet ? $sujet : "Non spécifié") . "</p>
            </div>
            
            <div class='message'>
                <h3>💬 Message :</h3>
                <p>" . nl2br($message_utilisateur) . "</p>
            </div>
        </div>
        
        <div class='footer'>
            <p>Message envoyé le " . date('d/m/Y à H:i:s') . " depuis le formulaire de contact CIL&ASSOCIES</p>
        </div>
    </body>
    </html>
    ";

    // Message de confirmation pour l'utilisateur
    $sujet_utilisateur = "Confirmation de réception de votre message - CIL&ASSOCIES";
    
    $message_email_utilisateur = "
    Bonjour $nom,

    Nous accusons réception de votre message et vous remercions de l'intérêt que vous portez à CIL&ASSOCIES.

    ==================================
    RÉCAPITULATIF DE VOTRE MESSAGE
    ==================================
    
    **Vos informations :**
    Nom : $nom
    Email : $email
    Sujet : " . ($sujet ? $sujet : "Non spécifié") . "
    
    **Votre message :**
    $message_utilisateur

    ==================================
    
    Nous traitons votre demande dans les plus brefs délais et nous vous contacterons très prochainement.

    Cordialement,
    L'équipe CIL&ASSOCIES
    
    ---
    CIL&ASSOCIES
    Email : infos@cilassocies.com
    Téléphone : +229 01 45 02 45 45
    Adresse : Cotonou, Bénin
    
    _Cet email a été envoyé automatiquement, merci de ne pas y répondre._
    ";

    // Version HTML pour l'email de confirmation à l'utilisateur
    $message_html_utilisateur = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.8; color: #333; max-width: 600px; margin: 0 auto; }
            .header { background: #184E9C; color: white; padding: 30px; text-align: center; }
            .content { padding: 30px; background: #f9f9f9; }
            .confirmation { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin: 20px 0; }
            .info-box { background: #e8f4ff; padding: 20px; border-radius: 6px; margin: 20px 0; border-left: 4px solid #184E9C; }
            .message-box { background: white; padding: 20px; border: 1px solid #e0e0e0; border-radius: 6px; margin: 15px 0; }
            .footer { background: #011E3C; color: white; padding: 25px; text-align: center; font-size: 14px; }
            .contact-info { background: rgba(255,255,255,0.1); padding: 15px; border-radius: 6px; margin: 15px 0; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h1>📧 Confirmation de réception</h1>
            <p>CIL&ASSOCIES</p>
        </div>
        
        <div class='content'>
            <div class='confirmation'>
                <h2>Bonjour $nom,</h2>
                <p>Nous accusons réception de votre message et vous remercions de l'intérêt que vous portez à <strong>CIL&ASSOCIES</strong>.</p>
                
                <div class='info-box'>
                    <h3>📋 Récapitulatif de votre message</h3>
                    <p><strong>👤 Votre nom :</strong> $nom</p>
                    <p><strong>📧 Votre email :</strong> $email</p>
                    <p><strong>📝 Sujet :</strong> " . ($sujet ? $sujet : "Non spécifié") . "</p>
                </div>
                
                <div class='message-box'>
                    <h3>💬 Votre message :</h3>
                    <p>" . nl2br($message_utilisateur) . "</p>
                </div>
                
                <p>Nous traitons votre demande dans les plus brefs délais et nous vous contacterons très prochainement.</p>
                
                <p><strong>Cordialement,</strong><br>L'équipe CIL&ASSOCIES</p>
            </div>
        </div>
        
        <div class='footer'>
            <div class='contact-info'>
                <h3>📞 Contactez-nous</h3>
                <p><strong>CIL&ASSOCIES</strong></p>
                <p>📧 Email : infos@cilassocies.com</p>
                <p>📞 Téléphone : +229 01 45 02 45 45</p>
                <p>📍 Adresse : Cotonou, Bénin</p>
            </div>
            <p><em>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</em></p>
            <p>© " . date('Y') . " CIL&ASSOCIES. Tous droits réservés.</p>
        </div>
    </body>
    </html>
    ";

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username =  $_ENV['GMAIL_USERNAME'];
        $mail->Password = $_ENV['GMAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->CharSet = 'UTF-8';

        // ENVOI 1 : Email à l'administrateur
        $mail->setFrom('adeogracias323@gmail.com', 'CIL&ASSOCIES - Formulaire de contact');
        $mail->addAddress('adeogracias323@gmail.com', 'Administrateur CIL&ASSOCIES');
        $mail->addReplyTo($email, $nom);

        // Contenu de l'email pour l'admin
        $mail->Subject = '📧 Nouveau message CIL&ASSOCIES : ' . ($sujet ? $sujet : 'Sans sujet');
        $mail->isHTML(true);
        $mail->Body = $message_html_admin;
        $mail->AltBody = $message_email_admin;

        $mail->send();
        
        // ENVOI 2 : Email de confirmation à l'utilisateur
        // Réinitialiser les destinataires
        $mail->clearAddresses();
        $mail->clearReplyTos();
        
        $mail->setFrom('adeogracias323@gmail.com', 'CIL&ASSOCIES');
        $mail->addAddress($email, $nom); // Envoyer à la personne qui a rempli le formulaire
        
        // Contenu de l'email de confirmation
        $mail->Subject = $sujet_utilisateur;
        $mail->Body = $message_html_utilisateur;
        $mail->AltBody = $message_email_utilisateur;

        $mail->send();
        
        // Redirection vers contact.php avec message de succès
        header('Location: contact.php?status=success');
        exit();
        
    } catch (Exception $e) {
        // Redirection vers contact.php avec message d'erreur
        header('Location: contact.php?status=error&message=Erreur_envoi_' . urlencode($mail->ErrorInfo));
        exit();
    }
} else {
    // Si accès direct au fichier, redirection vers l'accueil
    header('Location: contact.php');
    exit();
}
?>