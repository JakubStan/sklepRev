<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/application.php';

echo "PRZED WP-LOAD:" . PHP_EOL;
echo "DB_NAME = "; var_dump(defined('DB_NAME') ? DB_NAME : null);
echo "DB_USER = "; var_dump(defined('DB_USER') ? DB_USER : null);
echo "DB_PASSWORD = "; var_dump(defined('DB_PASSWORD') ? DB_PASSWORD : null);
echo "DB_HOST = "; var_dump(defined('DB_HOST') ? DB_HOST : null);
echo "ABSPATH = "; var_dump(defined('ABSPATH') ? ABSPATH : null);

echo PHP_EOL . "WP-CONFIG FILE:" . PHP_EOL;
var_dump(ABSPATH . 'wp-config.php');

require ABSPATH . 'wp-load.php';

echo PHP_EOL . "PO WP-LOAD:" . PHP_EOL;
echo "DB_NAME = "; var_dump(defined('DB_NAME') ? DB_NAME : null);
echo "DB_USER = "; var_dump(defined('DB_USER') ? DB_USER : null);
echo "DB_PASSWORD = "; var_dump(defined('DB_PASSWORD') ? DB_PASSWORD : null);
echo "DB_HOST = "; var_dump(defined('DB_HOST') ? DB_HOST : null);
