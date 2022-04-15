<?php
function load_template(string $uri): void {
    global $config;

    include __DIR__ . $config['tpl_dir'] . $uri . ".php";
}