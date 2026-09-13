<?php
// Forward Vercel serverless request to CodeIgniter front controller

// Detect if we're running on Vercel/serverless
$is_serverless = (
    php_sapi_name() === 'cli-server' ||
    strpos(($_SERVER['DOCUMENT_ROOT'] ?? ''), '/var/task') !== false ||
    strpos(($_SERVER['SCRIPT_FILENAME'] ?? ''), '/var/task') !== false ||
    getenv('VERCEL') ||
    getenv('VERCEL_URL') ||
    getenv('AWS_LAMBDA_FUNCTION_NAME') ||
    isset($_SERVER['HTTP_X_VERCEL_ID'])
);

if ($is_serverless) {
    // ALWAYS determine the real host on Vercel - don't check if HTTP_HOST === 'localhost'
    // because Vercel's PHP runtime may set HTTP_HOST inconsistently
    $real_host = $_SERVER['HTTP_X_FORWARDED_HOST']
        ?? $_SERVER['HTTP_X_VERCEL_DEPLOYMENT_URL']
        ?? null;
    
    // Fallback to VERCEL_URL env var (always available on Vercel)
    if (!$real_host) {
        $vercel_url = getenv('VERCEL_URL');
        if ($vercel_url) {
            $real_host = $vercel_url;
        }
    }

    // Fallback to VERCEL_PROJECT_PRODUCTION_URL env var
    if (!$real_host) {
        $prod_url = getenv('VERCEL_PROJECT_PRODUCTION_URL');
        if ($prod_url) {
            $real_host = $prod_url;
        }
    }
    
    if ($real_host) {
        // Remove any protocol prefix if present
        $real_host = preg_replace('#^https?://#', '', rtrim($real_host, '/'));
        $_SERVER['HTTP_HOST'] = $real_host;
        $_SERVER['HTTP_X_FORWARDED_HOST'] = $real_host;
        $_SERVER['HTTP_X_FORWARDED_PROTO'] = 'https';
        $_SERVER['HTTPS'] = 'on';
        $_SERVER['SERVER_NAME'] = $real_host;
    }
}

chdir(dirname(__DIR__));
require dirname(__DIR__) . '/index.php';
