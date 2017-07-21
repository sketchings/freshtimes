<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/../.env');

$paypal = new Freshtimes\Paypal(getenv("USERNAME"), getenv("PASSWORD"), getenv("SIGNATURE"), getenv("ENVIRONMENT"));
$response = $paypal->call('GetBalance');
var_dump($response);

echo '<h1>Coming Soon... Fresh Times!</h1>';
echo '<p>Current Balance: $' . $response['L_AMT0'] . '</p>';
