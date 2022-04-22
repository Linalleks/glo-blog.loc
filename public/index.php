<?php

require_once dirname(__DIR__) . '/init.php';

load_template(substr(trim($_SERVER['REQUEST_URI']),1));