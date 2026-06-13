<?php
/**
 * Palette Ébène — Contact Form Handler
 * Receives POST from AJAX, validates, sends email, returns JSON.
 */
require_once 'config.php';

header('Content-Type: application/json; charset=UTF-8');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
    exit;
}

// Honeypot anti-spam: if "website" field is filled, silently succeed
if (!empty($_POST['website'])) {
    echo json_encode(['success' => true, 'message' => 'Votre message a été envoyé avec succès !']);
    exit;
}

// Sanitize inputs
$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$subject = trim(strip_tags($_POST['subject'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

// Validation
$errors = [];

if (empty($name) || strlen($name) < 2) {
    $errors['name'] = 'Le nom est requis (minimum 2 caractères).';
}
if (strlen($name) > 100) {
    $errors['name'] = 'Le nom ne peut pas dépasser 100 caractères.';
}

if (empty($email)) {
    $errors['email'] = "L'adresse e-mail est requise.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "L'adresse e-mail est invalide.";
}

if (empty($subject)) {
    $errors['subject'] = 'Le sujet est requis.';
}

if (empty($message) || strlen($message) < 10) {
    $errors['message'] = 'Le message est trop court (minimum 10 caractères).';
}
if (strlen($message) > 2000) {
    $errors['message'] = 'Le message ne peut pas dépasser 2000 caractères.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'message' => 'Veuillez corriger les erreurs dans le formulaire.',
        'errors'  => $errors,
    ]);
    exit;
}

// Build email
$to          = CONTACT_EMAIL;
$subject_line = '[Palette Ébène] ' . $subject;
$name_safe   = htmlspecialchars($name,    ENT_QUOTES, 'UTF-8');
$email_safe  = htmlspecialchars($email,   ENT_QUOTES, 'UTF-8');
$subject_safe= htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$msg_safe    = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$body = <<<TEXT
Nouveau message reçu via le site Palette Ébène
================================================

Nom     : {$name}
Email   : {$email}
Sujet   : {$subject}

Message :
---------
{$message}

---
Envoyé depuis : https://paletteebene.art
Date : {$_SERVER['REQUEST_TIME_FLOAT']}
TEXT;

$headers  = "From: noreply@paletteebene.art\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

// Send email
$sent = mail($to, $subject_line, $body, $headers);

if ($sent) {
    echo json_encode([
        'success' => true,
        'message' => "Votre message a bien été envoyé. Nous vous répondrons sous 48 heures. Merci !",
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => "Une erreur est survenue lors de l'envoi. Veuillez nous contacter directement à " . CONTACT_EMAIL,
    ]);
}
