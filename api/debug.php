<?php
// Debug endpoint that runs THROUGH CodeIgniter to see actual base_url
chdir(dirname(__DIR__));

// Capture $_SERVER before CI modifies anything
$pre_ci_server = [
    'HTTP_HOST' => isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'NOT SET',
    'HTTP_X_FORWARDED_HOST' => isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : 'NOT SET',
    'HTTP_X_FORWARDED_PROTO' => isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'NOT SET',
    'SCRIPT_NAME' => isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : 'NOT SET',
    'REQUEST_URI' => isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'NOT SET',
    'VERCEL_ENV' => getenv('VERCEL') ?: 'NOT SET',
];

// Now load CI config manually
$config = [];
include dirname(__DIR__) . '/application/config/config.php';

header('Content-Type: application/json');
echo json_encode([
    'pre_ci_server_vars' => $pre_ci_server,
    'base_url_from_config' => isset($config['base_url']) ? $config['base_url'] : 'NOT SET',
    'config_file_path' => dirname(__DIR__) . '/application/config/config.php',
], JSON_PRETTY_PRINT);
