<?php
// Debug: simulate what CI config.php does for base_url detection
// We can't include config.php directly because of BASEPATH guard,
// so we replicate the logic here

$pre_ci_server = [
    'HTTP_HOST' => isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'NOT SET',
    'HTTP_X_FORWARDED_HOST' => isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : 'NOT SET',
    'HTTP_X_FORWARDED_PROTO' => isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'NOT SET',
    'SCRIPT_NAME' => isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : 'NOT SET',
    'REQUEST_URI' => isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'NOT SET',
    'HTTPS' => isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : 'NOT SET',
    'VERCEL_ENV' => getenv('VERCEL') ?: 'NOT SET',
    'VERCEL_URL' => getenv('VERCEL_URL') ?: 'NOT SET',
];

// Replicate the config.php logic exactly:
$base_url = 'UNKNOWN';
if (isset($_SERVER['HTTP_X_FORWARDED_HOST']) && !empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $protocol = (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ? 'https://' : 'http://';
    $base_url = $protocol . $_SERVER['HTTP_X_FORWARDED_HOST'] . '/';
} elseif (isset($_SERVER['HTTP_HOST'])) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    $script_path = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    $base_folder = trim($script_path, '/');
    if ($base_folder && $base_folder !== 'api') {
        $base_url = $protocol . $_SERVER['HTTP_HOST'] . '/' . $base_folder . '/';
    } else {
        $base_url = $protocol . $_SERVER['HTTP_HOST'] . '/';
    }
} else {
    $base_url = 'http://localhost/SysForce/';
}

// Also read the actual config.php content to verify
$config_content = file_get_contents(dirname(__DIR__) . '/application/config/config.php');
$has_forwarded_host_check = strpos($config_content, 'HTTP_X_FORWARDED_HOST') !== false;

header('Content-Type: application/json');
echo json_encode([
    'server_vars' => $pre_ci_server,
    'computed_base_url' => $base_url,
    'config_has_forwarded_host_check' => $has_forwarded_host_check,
    'config_file_size' => strlen($config_content),
    'config_first_200_chars_after_base_url' => substr($config_content, strpos($config_content, 'if (isset'), 300),
], JSON_PRETTY_PRINT);
