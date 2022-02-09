<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost:8080/e-commerce',
    'ck_a0d79748c3f8cdb29bae0bad05bb005671b3e691',
    'cs_4d05214d8591840556cf07cb31ecceaa5b71126d',
    [
        'wp_api' => true, 'version' => 'wc/v3',
    ]
);

?>