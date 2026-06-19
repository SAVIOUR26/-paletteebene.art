<?php
// lang/init.php — Language detection, cookie persistence, translation helper

$supported_langs = ['fr', 'en'];
$default_lang    = 'fr';

// Priority: ?lang= query param → cookie → browser Accept-Language → default
if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_langs, true)) {
    $current_lang = $_GET['lang'];
    setcookie('palette_lang', $current_lang, time() + 60 * 60 * 24 * 365, '/');
    $_COOKIE['palette_lang'] = $current_lang;

    // Redirect to clean URL, preserving any other query params (e.g. ?page=)
    $params = $_GET;
    unset($params['lang']);
    $path = strtok($_SERVER['REQUEST_URI'], '?');
    $query = http_build_query($params);
    header('Location: ' . $path . ($query !== '' ? '?' . $query : ''));
    exit;
}

if (isset($_COOKIE['palette_lang']) && in_array($_COOKIE['palette_lang'], $supported_langs, true)) {
    $current_lang = $_COOKIE['palette_lang'];
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
