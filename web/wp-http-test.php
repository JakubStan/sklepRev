<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/application.php';
require ABSPATH . 'wp-load.php';

header('Content-Type: text/plain');

echo "=== WP HTTP TEST ===" . PHP_EOL;

$url = 'https://downloads.wordpress.org/release/wordpress-7.0.4-no-content.zip';

$response = wp_remote_head($url, [
    'timeout' => 30,
    'redirection' => 5,
]);

echo "URL: " . $url . PHP_EOL;
echo "IS WP ERROR: ";
var_dump(is_wp_error($response));

if (is_wp_error($response)) {
    echo "ERROR CODE: ";
    var_dump($response->get_error_code());

    echo "ERROR MESSAGE: ";
    var_dump($response->get_error_message());

    echo "ERROR DATA: ";
    var_dump($response->get_error_data());
} else {
    echo "HTTP CODE: ";
    var_dump(wp_remote_retrieve_response_code($response));

    echo "HEADERS:" . PHP_EOL;
    var_dump(wp_remote_retrieve_headers($response));
}

echo PHP_EOL . "=== API WORDPRESS.ORG ===" . PHP_EOL;

$response = wp_remote_get('https://api.wordpress.org/', [
    'timeout' => 30,
    'redirection' => 5,
]);

echo "IS WP ERROR: ";
var_dump(is_wp_error($response));

if (is_wp_error($response)) {
    echo "ERROR CODE: ";
    var_dump($response->get_error_code());

    echo "ERROR MESSAGE: ";
    var_dump($response->get_error_message());

    echo "ERROR DATA: ";
    var_dump($response->get_error_data());
} else {
    echo "HTTP CODE: ";
    var_dump(wp_remote_retrieve_response_code($response));

    echo "BODY:" . PHP_EOL;
    var_dump(substr(wp_remote_retrieve_body($response), 0, 500));
}
