<?php
function load_template(string $uri): void {
    global $config;

    if (file_exists(__DIR__ . $config['tpl_dir'] .  $config['routes'][$uri] . ".php")) {
        include __DIR__ . $config['tpl_dir'] .  $config['routes'][$uri] . ".php";
    } elseif (file_exists(__DIR__ . $config['tpl_dir'] . '404.php')) {
        include __DIR__ . $config['tpl_dir'] . '404.php';
    } else {
        echo "Страница " . $uri . " не найдена";
    }

}