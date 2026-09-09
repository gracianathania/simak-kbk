<?php
// Forward Vercel serverless request to CodeIgniter front controller

// On Vercel serverless, the internal PHP runtime may see HTTP_HOST as 'localhost'
// We need to fix this BEFORE CodeIgniter loads config.php
// Detection: check VERCEL env var OR VERCEL_URL env var
$vercel_url = getenv('VERCEL_URL');
$is_vercel = getenv('VERCEL') || $vercel_url;

if ($is_vercel) {
    // Get the real host from available sources (in priority order)
    $real_host = null;
    if (isset($_SERVER['HTTP_X_FORWARDED_HOST']) && !empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
        $real_host = $_SERVER['HTTP_X_FORWARDED_HOST'];
    } elseif (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] !== 'localhost' && $_SERVER['HTTP_HOST'] !== '127.0.0.1') {
        $real_host = $_SERVER['HTTP_HOST'];
    } elseif ($vercel_url) {
        $real_host = $vercel_url;
    }
    
    if ($real_host) {
        $_SERVER['HTTP_HOST'] = $real_host;
        $_SERVER['HTTP_X_FORWARDED_HOST'] = $real_host;
        $_SERVER['HTTP_X_FORWARDED_PROTO'] = 'https';
        $_SERVER['HTTPS'] = 'on';
    }
}

chdir(dirname(__DIR__));
require dirname(__DIR__) . '/index.php';
