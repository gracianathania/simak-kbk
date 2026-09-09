<?php
// Read the debug log from api/index.php
$api_index_debug = @file_get_contents('/tmp/api_index_debug.json');

// Also show what THIS endpoint sees
$this_endpoint = [
    'HTTP_HOST' => $_SERVER['HTTP_HOST'] ?? 'NOT SET',
    'HTTP_X_FORWARDED_HOST' => $_SERVER['HTTP_X_FORWARDED_HOST'] ?? 'NOT SET',
    'HTTP_X_FORWARDED_PROTO' => $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? 'NOT SET',
    'SCRIPT_NAME' => $_SERVER['SCRIPT_NAME'] ?? 'NOT SET',
];

header('Content-Type: application/json');
echo json_encode([
    'api_index_php_sees' => $api_index_debug ? json_decode($api_index_debug, true) : 'NO LOG FILE FOUND',
    'debug_endpoint_sees' => $this_endpoint,
], JSON_PRETTY_PRINT);
