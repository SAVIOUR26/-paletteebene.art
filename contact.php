<?php
require_once __DIR__ . '/config.php';

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Honeypot check (silent success for bots)
if (!empty($_POST['website'])) {
    echo json_encode(['success' => true]);
    exit;
}

$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$subject = trim(strip_tags($_POST['subject'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

// Validation
$errors = [];
if (empty($name))                                   $errors[] = 'Le nom est requis.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL))     $errors[] = 'Adresse e-mail invalide.';
if (empty($subject))                                $errors[] = 'Le sujet est requis.';
if (strlen($message) < 10)                          $errors[] = 'Le message est trop court (minimum 10 caractères).';

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

$to           = CONTACT_EMAIL;
$subject_line = '[Palette Ébène] ' . $subject;
$body         = "Nouveau message de: {$name} <{$email}>\n\n{$message}\n\n---\nEnvoyé depuis " . SITE_URL;
$headers      = implode("\r\n", [
    'From: noreply@paletteebene.art',
    "Reply-To: {$email}",
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . PHP_VERSION,
]);

if (mail($to, $subject_line, $body, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Votre message a été envoyé avec succès! Nous vous répondrons sous 48h.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => "Erreur lors de l'envoi. Veuillez réessayer ou nous écrire directement à " . CONTACT_EMAIL]);
}
