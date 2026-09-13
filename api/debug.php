<?php
// Enhanced debug - show everything the serverless function sees

$data = [
    'timestamp' => date('Y-m-d H:i:s'),
    'php_sapi_name' => php_sapi_name(),
    'HTTP_HOST' => $_SERVER['HTTP_HOST'] ?? 'NOT SET',
    'HTTP_X_FORWARDED_HOST' => $_SERVER['HTTP_X_FORWARDED_HOST'] ?? 'NOT SET',
    'HTTP_X_FORWARDED_PROTO' => $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? 'NOT SET',
    'HTTP_X_VERCEL_ID' => $_SERVER['HTTP_X_VERCEL_ID'] ?? 'NOT SET',
    'HTTP_X_VERCEL_DEPLOYMENT_URL' => $_SERVER['HTTP_X_VERCEL_DEPLOYMENT_URL'] ?? 'NOT SET',
    'SERVER_NAME' => $_SERVER['SERVER_NAME'] ?? 'NOT SET',
    'SERVER_ADDR' => $_SERVER['SERVER_ADDR'] ?? 'NOT SET',
    'SCRIPT_NAME' => $_SERVER['SCRIPT_NAME'] ?? 'NOT SET',
    'SCRIPT_FILENAME' => $_SERVER['SCRIPT_FILENAME'] ?? 'NOT SET',
    'DOCUMENT_ROOT' => $_SERVER['DOCUMENT_ROOT'] ?? 'NOT SET',
    'REQUEST_URI' => $_SERVER['REQUEST_URI'] ?? 'NOT SET',
    'env_VERCEL' => getenv('VERCEL') ?: 'NOT SET',
    'env_VERCEL_URL' => getenv('VERCEL_URL') ?: 'NOT SET',
    'env_VERCEL_PROJECT_PRODUCTION_URL' => getenv('VERCEL_PROJECT_PRODUCTION_URL') ?: 'NOT SET',
    'env_VERCEL_ENV' => getenv('VERCEL_ENV') ?: 'NOT SET',
    'env_AWS_LAMBDA_FUNCTION_NAME' => getenv('AWS_LAMBDA_FUNCTION_NAME') ?: 'NOT SET',
    'api_index_log' => @file_get_contents('/tmp/api_index_debug.json') ?: 'NO LOG',
];

header('Content-Type: application/json');
echo json_encode($data, JSON_PRETTY_PRINT);
