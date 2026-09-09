<?php
// Debug: capture $_SERVER vars as they exist in the api/index.php context
// BEFORE and AFTER chdir/require
header('Content-Type: application/json');

$before = [
    'HTTP_HOST' => $_SERVER['HTTP_HOST'] ?? 'NOT SET',
    'HTTP_X_FORWARDED_HOST' => $_SERVER['HTTP_X_FORWARDED_HOST'] ?? 'NOT SET',
    'HTTP_X_FORWARDED_PROTO' => $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? 'NOT SET',
    'SCRIPT_NAME' => $_SERVER['SCRIPT_NAME'] ?? 'NOT SET',
    'SCRIPT_FILENAME' => $_SERVER['SCRIPT_FILENAME'] ?? 'NOT SET',
    'DOCUMENT_ROOT' => $_SERVER['DOCUMENT_ROOT'] ?? 'NOT SET',
    'PHP_SELF' => $_SERVER['PHP_SELF'] ?? 'NOT SET',
    'cwd_before' => getcwd(),
];

// This is what api/index.php does:
chdir(dirname(__DIR__));

$after_chdir = [
    'cwd_after_chdir' => getcwd(),
    'dirname_dir' => dirname(__DIR__),
    'SCRIPT_NAME_after' => $_SERVER['SCRIPT_NAME'] ?? 'NOT SET',
];

echo json_encode([
    'before_chdir' => $before,
    'after_chdir' => $after_chdir,
    'note' => 'The main api/index.php then requires index.php which bootstraps CI',
], JSON_PRETTY_PRINT);
