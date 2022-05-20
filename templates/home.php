<?php
echo "home";

var_dump(db_query('SELECT * FROM `categories` WHERE `slug` = :slug;', ['slug' => 'css'])->fetch());
die;