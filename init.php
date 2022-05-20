<?php

$config = require_once __DIR__ . '/config.php';

foreach (glob(__DIR__ . '/includes/*.func.php') as $file) {
    require_once $file;
}

