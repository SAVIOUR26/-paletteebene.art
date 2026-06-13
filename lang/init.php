<?php
// lang/init.php — Language detection, cookie persistence, translation helper

session_start();

$supported_langs = ['fr', 'en'];
$default_lang    = 'fr';

// Priority: ?lang= query param → session → browser Accept-Language → default
if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_langs, true)) {
    $current_lang = $_GET['lang'];
    $_SESSION['lang'] = $current_lang;
    // Redirect to clean URL (strip ?lang= param)
    $url = strtok($_SERVER['REQUEST_URI'], '?');
    header('Location: ' . $url);
    exit;
}

if (isset($_SESSION['lang']) && in_array($_SESSION['lang'], $supported_langs, true)) {
    $current_lang = $_SESSION['lang'];
} else {
    // Detect from Accept-Language header
    $accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
    $current_lang = $default_lang;
    foreach ($supported_langs as $lang) {
        if (stripos($accept, $lang) !== false) {
            $current_lang = $lang;
            break;
        }
    }
    $_SESSION['lang'] = $current_lang;
}

// Load translation array
$translations = require __DIR__ . '/' . $current_lang . '.php';

// Translation helper — falls back to key if string not found
function t(string $key): string {
    global $translations;
    return isset($translations[$key]) ? $translations[$key] : $key;
}

// Safe HTML translation (for strings that contain <strong>/<em> etc)
function th(string $key): string {
    return t($key); // already trusted content from our own files
}
