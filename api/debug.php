<?php
// Debug endpoint to check $_SERVER variables on Vercel
header('Content-Type: application/json');
echo json_encode([
    'HTTP_HOST' => isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'NOT SET',
    'HTTP_X_FORWARDED_HOST' => isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : 'NOT SET',
    'HTTP_X_FORWARDED_PROTO' => isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'NOT SET',
    'HTTP_X_FORWARDED_FOR' => isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : 'NOT SET',
    'SERVER_NAME' => isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'NOT SET',
    'SERVER_ADDR' => isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : 'NOT SET',
    'SCRIPT_NAME' => isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : 'NOT SET',
    'REQUEST_URI' => isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'NOT SET',
    'VERCEL_ENV' => getenv('VERCEL') ?: 'NOT SET',
    'VERCEL_URL_ENV' => getenv('VERCEL_URL') ?: 'NOT SET',
    'ALL_SERVER_KEYS' => array_keys($_SERVER),
], JSON_PRETTY_PRINT);
