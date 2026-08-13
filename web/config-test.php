<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/application.php';

header('Content-Type: text/plain');

echo "=== APACHE / WORDPRESS CONFIG TEST ===" . PHP_EOL;

echo "DB_NAME: ";
var_dump(defined('DB_NAME') ? DB_NAME : null);

echo "DB_USER: ";
var_dump(defined('DB_USER') ? DB_USER : null);

echo "DB_PASSWORD: ";
var_dump(defined('DB_PASSWORD') ? DB_PASSWORD : null);

echo "DB_HOST: ";
var_dump(defined('DB_HOST') ? DB_HOST : null);

echo "ABSPATH: ";
var_dump(defined('ABSPATH') ? ABSPATH : null);

echo PHP_EOL . "ENV DB_NAME: ";
var_dump(getenv('DB_NAME'));

echo "ENV DB_USER: ";
var_dump(getenv('DB_USER'));

echo "ENV DB_HOST: ";
var_dump(getenv('DB_HOST'));

echo PHP_EOL . "APPLICATION.PHP:" . PHP_EOL;
echo dirname(__DIR__) . '/config/application.php' . PHP_EOL;

