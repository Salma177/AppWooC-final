<?php
include 'commerce.php'; 
$id      =  $_GET['id'];
$woocommerce->delete('orders/'.$id, ['force' => true]);
header('Location: http://localhost:8080/AppWooC-final/listOrders.php');
