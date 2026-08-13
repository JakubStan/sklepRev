<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/application.php';
require ABSPATH . 'wp-load.php';

header('Content-Type: text/plain');

global $wp_version;

echo "WP VERSION: " . $wp_version . PHP_EOL;
echo "PHP VERSION: " . PHP_VERSION . PHP_EOL;
echo "WP ENV: " . (defined('WP_ENV') ? WP_ENV : '[BRAK]') . PHP_EOL;

echo PHP_EOL . "=== CHECKSUMS ===" . PHP_EOL;

$result = get_core_checksums($wp_version, get_locale());

echo "IS WP ERROR: ";
var_dump(is_wp_error($result));

if (is_wp_error($result)) {
    echo "CODE: ";
    var_dump($result->get_error_code());

    echo "MESSAGE: ";
    var_dump($result->get_error_message());

    echo "DATA: ";
    var_dump($result->get_error_data());
} else {
    echo "CHECKSUM COUNT: ";
    var_dump(is_array($result) ? count($result) : $result);
}
