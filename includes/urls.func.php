<?php
function get_url(string $page = ''){
    $scheme = $_SERVER['REQUEST_SCHEME'] ?? 'http';
    $host = $_SERVER['HTTP_HOST'];
    return "{$scheme}://{$host}/{$page}";
}

function redirect (string $path = "/") {
    header("Location: {$path}");
    die;
}

function load_template(string $uri): void {
    global $config;

    $uri_parts = array_slice(explode('/',trim($uri)), 1);
    if (empty($uri_parts[0])) $uri_parts[0] = '/';

    if (array_key_exists($uri_parts[0], $config['routes'])) {
        $file = __DIR__ . "{$config['tpl_dir']}/{$config['routes'][$uri_parts[0]]}.php";
        if (file_exists($file)) {
            include $file;
            return;
        }
    } 

    include __DIR__ . "{$config['tpl_dir']}/404.php";

}