<?php
function db_connect($db_name = '') {
    global $config;

    if (empty($db_name)) $db_name = $config['db']['name'];
    $dsn = "mysql:host={$config['db']['host']};dbname={$db_name};charset=utf8";
    return new PDO($dsn, $config['db']['user'], $config['db']['pass'], [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}

function db_query(string $sql, array $fields = [], bool $insert = false) {
    if (empty($sql)) return false;

    $db = db_connect();

    $result = $db->prepare($sql);
    if ($fields) {
        $result->execute($fields);
    } else {
        $result->execute();
    }

    if ($insert) {
        return $db->lastInsertId();
    } else {
        return $result;
    }
}