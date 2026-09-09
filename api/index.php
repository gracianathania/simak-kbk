<?php
// Forward Vercel serverless request to CodeIgniter front controller

// TEMP DEBUG: log $_SERVER to /tmp for diagnosis
@file_put_contents('/tmp/api_index_debug.json', json_encode([
    'HTTP_HOST' => $_SERVER['HTTP_HOST'] ?? 'NOT SET',
    'HTTP_X_FORWARDED_HOST' => $_SERVER['HTTP_X_FORWARDED_HOST'] ?? 'NOT SET',
    'HTTP_X_FORWARDED_PROTO' => $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? 'NOT SET',
    'SCRIPT_NAME' => $_SERVER['SCRIPT_NAME'] ?? 'NOT SET',
    'REQUEST_URI' => $_SERVER['REQUEST_URI'] ?? 'NOT SET',
], JSON_PRETTY_PRINT));

chdir(dirname(__DIR__));
require dirname(__DIR__) . '/index.php';
