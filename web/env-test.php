<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/application.php';

header('Content-Type: text/plain');

echo "PHP VERSION: " . PHP_VERSION . PHP_EOL;
echo "SAPI: " . PHP_SAPI . PHP_EOL;
echo "CURL: " . (extension_loaded('curl') ? 'YES' : 'NO') . PHP_EOL;
echo "OPENSSL: " . (extension_loaded('openssl') ? 'YES' : 'NO') . PHP_EOL;

echo PHP_EOL . "--- CURL WORDPRESS.ORG ---" . PHP_EOL;

$ch = curl_init('https://api.wordpress.org/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);

$result = curl_exec($ch);

var_dump($result !== false);
echo "CURL ERROR: ";
var_dump(curl_error($ch));

echo "HTTP CODE: ";
var_dump(curl_getinfo($ch, CURLINFO_HTTP_CODE));

echo PHP_EOL . "--- SSL ---" . PHP_EOL;
var_dump(openssl_get_cert_locations());

curl_close($ch);